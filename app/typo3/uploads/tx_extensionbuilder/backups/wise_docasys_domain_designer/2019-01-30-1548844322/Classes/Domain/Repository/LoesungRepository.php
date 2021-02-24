<?php
    namespace Wise\WiseDocasysDomainDesigner\Domain\Repository;

    /**
    * LoesungRepository 
    */
    class LoesungRepository extends \Wise\WiseDocasysDomainDesigner\Domain\Repository\AbstractRepository
    {
        protected $defaultOrderings = [
            'teilprojektnummer' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
        ];
        
        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\ArtefaktRepository
        * @inject
        */
        protected $artefaktRepository;

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\LoesungsuntersuchungRepository
        * @inject
        */
        protected $loesungsuntersuchungRepository;

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\FachAnwendungsfallRepository
        * @inject
        */
        protected $fachAnwendungsfallRepository;

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\EignungsprofilRepository
        * @inject
        */
        protected $eignungsprofilRepository;

        /**
        * @var \Wise\WiseDocasysBackend\Utility\Form 
        * @inject
        */
        protected $formUtility;

        public function initializeObject()
        {
            $querySettings = $this->objectManager->get('TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings');
            $querySettings->setRespectStoragePage(false);  
            $this->setDefaultQuerySettings($querySettings); 
        }

        /**
        * Provides all input objects of a solution, whereby each solutions has its particular solution producer (owner).
        * 
        * @param Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung 
        * @return Array
        */
        public function getInputTrace($solution)
        {
            if($solution) {
                return $this->getInputArtefacts($solution);
            } 
            return [];  
        } 

        /**
        * Get all input artefacts of a solution. Recursion/ circle avoidance is active.
        * Backward tracing can be avoided
        * 
        * @param Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung
        * @param Array
        * @param Boolean
        * @return Array 
        */
        public function getInputArtefacts($solution = null, $tracedSolutions = [], $noBackwardTracing = false)
        {
            $artefactsWithConsumers = [];

            // Get all artefacts of the solution
            foreach($this->artefaktRepository->getArtefactTypes() as $ag) {
                $getter = "getInput".$ag;
                $getterIn = "get".$ag;

                if($solution->$getter()->count() > 0) {
                    foreach($solution->$getter() as $inputArtefact) {
                        $obj = $inputArtefact->$getterIn()->current();
                        if($obj && !in_array(['artefact' => $obj, 'solution' => $solution], $artefactsWithConsumers)) {
                            $artefactsWithConsumers[] = [
                                'artefact' => $obj,
                                'solution' => $solution
                            ];
                        }    
                    }
                }     
            }

            // Register solution after getting all artefacts (avoid recursion)
            $tracedSolutions[] = $solution;

            foreach($artefactsWithConsumers as $artefactWithConsumerKey => $artefactWithConsumer) {
                // Get producer of artefact 
                $artefactProducingSolution = $this->artefaktRepository->getArtefactProducer($artefactWithConsumer['artefact']); 

                /*
                // DEV
                if($artefactProducingSolution) {
                echo $artefactProducingSolution->getTeilprojektnummer() . "<br>";
                }  else {
                echo "Producer of ".$artefactWithConsumer['artefact']->getBezeichnung() . " is null <br>";
                }
                */
                
                if($artefactProducingSolution && $noBackwardTracing === true) {
                    // Only add producer of the artifact
                    $artefactsWithConsumers[$artefactWithConsumerKey]['artifactProducer'] = $artefactProducingSolution;
                } else if($artefactProducingSolution && !in_array($artefactProducingSolution, $tracedSolutions)) {
                    // Solution is not traced - get artefacts of solution
                    $tracedSolutions[] = $artefactProducingSolution;
                    $inputArtefactsOfProducingSolution = $this->getInputArtefacts($artefactProducingSolution, $tracedSolutions);

                    // Merge artefacts with existing objects
                    $artefactsWithConsumers = array_merge($artefactsWithConsumers, $inputArtefactsOfProducingSolution);
                } else {
                    // Solution is already traced - ignore it
                }
            }

            return $artefactsWithConsumers;
        } 

        /**
        * Get all output artefacts of a solution.
        * 
        * @param Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung
        * @param Boolean
        * @return Array 
        */
        public function getOutputArtefacts($solution, $onlyOutcome = false)
        {
            $artefacts = [];

            foreach($this->artefaktRepository->getArtefactTypes() as $ag) {
                $getter = "getOutput".$ag;
                $getterIn = "get".$ag;

                if($solution->$getter()->count() > 0) {
                    foreach($solution->$getter() as $outputArtefact) {
                        if(!($onlyOutcome === true && $outputArtefact->getIstOutcome() == 0)) {
                            $artefacts[] = $outputArtefact->$getterIn()->current();  
                        }
                    }
                } 
            }

            return $artefacts;   
        }

        /**
        * Get application cases those technology cases have represented load cases that are tested for a solution.
        * 
        * @param Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung
        * @return Array 
        */
        public function getApplicationCases($solution)
        {
            $applicationCases = [];
            $examinationLoadCases = [];

            // Load cases a solution has been tested on
            foreach($this->loesungsuntersuchungRepository->findByUntersuchteLoesung($solution->getUid()) as $examination) {
                if(!in_array($examination->getUntersuchterLastfall(), $examinationLoadCases)) {
                    $examinationLoadCases[] = $examination->getUntersuchterLastfall();   
                }   
            }

            // Load cases of application cases, find matching
            foreach($this->fachAnwendungsfallRepository->findAll() as $applicationCase) {
                foreach($applicationCase->getTechnologischenAnwendungsfall() as $technologyCase) {
                    foreach($technologyCase->getRepraesentierendeLastfaelle() as $loadCase) {
                        if(in_array($loadCase, $examinationLoadCases)) {
                            if(!array_key_exists($applicationCase->getUid(), $applicationCases)) {
                                $applicationCases[$applicationCase->getUid()] = [
                                    'applicationCase' => $applicationCase,
                                    'loadCases' => [$loadCase]
                                ];   
                            } else {
                                if(!in_array($loadCase, $applicationCases[$applicationCase->getUid()]['loadCases'])) {
                                    $applicationCases[$applicationCase->getUid()]['loadCases'][] = $loadCase;   
                                }   
                            }
                        }   
                    }
                }
            }

            return $applicationCases;
        }

        /**
        * Complex filtering query.
        * 
        * @param Array
        * @return Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung[]
        */
        public function getFilteredSolutions($search)
        {
            if(empty($search)) {
                return [];
            }

            // Search for solutions meeting all required objectives
            if(isset($search['objective'])) {
                $query = $this->createQuery();
                $i = 0;
                $solutionsFromObjectives = [];

                foreach($search['objective'] as $o) {
                    $p = intval($o['parameter']);
                    if($p > 0) {
                        $i++;
                        $oAnd = [];

                        $oAnd[] = $query->equals('auswirkung.zielparameter.uid', $p);

                        // Objective min value (full coverage of objective value)
                        $min = $this->formUtility->floatFormat($o['from']);                   
                        if($min != 0) {    
                            // min <= auswirkung.wert OR ((auswirkung.wert_von != 0 AND auswirkung.wert_bis != 0) AND min <= wert_von)
                            $oAnd[] = $query->logicalOr(
                                [
                                    $query->greaterThanOrEqual('auswirkung.wert', $min),
                                    $query->logicalAnd(
                                        [
                                            $query->logicalNot(
                                                $query->equals('auswirkung.wert_von', 0)
                                            ),
                                            $query->logicalNot(
                                                $query->equals('auswirkung.wert_von', 0)
                                            ),
                                            $query->greaterThanOrEqual('auswirkung.wert_von', $min)
                                        ]
                                    )
                                ]
                            );
                        }

                        // Objective max value
                        $max = $this->formUtility->floatFormat($o['to']); 
                        if($max != 0) {
                            // (max >= auswirkung.wert AND auswirkung.wert != 0) OR ((auswirkung.wert_von != 0 AND auswirkung.wert_bis != 0) AND max >= wert_bis)
                            $oAnd[] = $query->logicalOr(
                                [
                                    $query->logicalAnd(
                                        [
                                            $query->lessThanOrEqual('auswirkung.wert', $max),
                                            $query->logicalNot(
                                                $query->equals('auswirkung.wert', 0)
                                            ),
                                        ]
                                    ),
                                    $query->logicalAnd(
                                        [
                                            $query->logicalNot(
                                                $query->equals('auswirkung.wert_von', 0)
                                            ),
                                            $query->logicalNot(
                                                $query->equals('auswirkung.wert_bis', 0)
                                            ),
                                            $query->lessThanOrEqual('auswirkung.wert_bis', $max)
                                        ]
                                    )    
                                ]
                            );
                        }

                        $query->matching(
                            $query->logicalAnd($oAnd)
                        );

                        // Sequential approach to find a solution that meets all objectives
                        $solutionsForObjective = $query->execute()->toArray();
                        if(count($solutionsForObjective) == 0) {
                            $solutionsFromObjectives = [];
                            break;        
                        }

                        $solutionsFromObjectives = ($i == 1) ? $solutionsForObjective : array_intersect($solutionsFromObjectives, $solutionsForObjective);   
                        if(count($solutionsFromObjectives) == 0) {
                            break;    
                        }
                    }    
                }
            }

            // Search for owned properties
            $query = $this->createQuery();
            $and = [];

            $owned = [
                'kind' => 'loesungsart', 
                'class' => 'loesungsklasse',
                'phase' => 'phaseDerThermischenWirkkette',
                'effect' => 'physikalischerEffekt',
                'producer' => 'betrifftHersteller',
                'consumer' => 'betrifftBetreiber',
                'invasivity' => 'invasivitaetsgrad',
                'maintenance' => 'wartungsintervall'
            ];

            foreach($owned as $formKey => $propertyName) {
                if($search['operator'][$formKey] > 0) {
                    switch ($search['operator'][$formKey]) {
                        case 1:
                            // Equal (=) - simple mapping
                            $and[] = $query->equals($propertyName, $search[$formKey]);
                            break;
                        case 2:
                            // Unequal (!=) - workaround with combined query
                            $and[] = $query->logicalOr(
                                [
                                    $query->lessThan($propertyName, $search[$formKey]),
                                    $query->greaterThan($propertyName, $search[$formKey]),
                                ]
                            );
                            break;            
                    }
                }         
            }

            if($search['operator']['name'] == 1) {
                $and[] = $query->like('loesungsbezeichnung', '%' . $search['name'] . '%');    
            }

            if(count($solutionsFromObjectives) > 0) { 
                $uids = [];
                foreach($solutionsFromObjectives as $solution) {
                    $uids[] = $solution->getUid();
                }
                $and[] = $query->in('uid', $uids);   
            }

            if(count($and) > 0) {  
                $query->matching(
                    $query->logicalAnd($and)
                );
                $query->setOrderings([
                    "loesungsbezeichnung" => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
                ]);
            }
            $solutions = $query->execute();

            // Search for application cases
            if(isset($search['applicationCase'])) {
                // Loadcase based
                $solutionsOnlyFromLoadCases = [];
                foreach($search['applicationCase'] as $ac) {
                    $caseId = intval($ac['case']);
                    if($caseId > 0) {
                        if(intval($ac['includeUnvalidated']) == 1) {
                            foreach($solutions as $solution) {
                                if(array_key_exists($caseId, $this->getApplicationCases($solution))) {
                                    if(!in_array($solution, $solutionsOnlyFromLoadCases) && !in_array($solution, $solutions->toArray())) {
                                        $solutionsOnlyFromLoadCases[] = $solution;    
                                    }    
                                }
                            }
                        }
                    }
                }

                // Aptitudes
                foreach($search['applicationCase'] as $ac) {
                    $caseId = intval($ac['case']);     
                    $solutionsKeep = [];

                    if($caseId > 0) {
                        $rating = ($ac['rating'] >= 0) ? $ac['rating'] : null;
                        $status = ($ac['status'] >= 0) ? $ac['status'] : null;


                        foreach($solutions as $solution) {
                            $profiles = $this->eignungsprofilRepository->findProfile(
                                $solution->getUid(),
                                $caseId,
                                $rating,
                                $status    
                            );

                            if(count($profiles) > 0) {
                                if(!in_array($solution, $solutionsKeep)) {
                                    $solutionsKeep[] = $solution;
                                }
                            }
                        } 
                        $solutions = $solutionsKeep;
                    } 
                }     
                
                if(count($solutionsOnlyFromLoadCases) > 0) {
                    $solutions = array_merge($solutions, $solutionsOnlyFromLoadCases);
                }  
            }  

            /*
            foreach($solutions as $solution) {
            echo $solution->getTeilprojektnummer() . "<br>";
            } 
            die();
            */

            return $solutions;     
        }
    }
?>