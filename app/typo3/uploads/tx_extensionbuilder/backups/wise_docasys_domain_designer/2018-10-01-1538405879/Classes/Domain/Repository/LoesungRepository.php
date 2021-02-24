<?php
    namespace Wise\WiseDocasysDomainDesigner\Domain\Repository;

    /**
    * LoesungRepository 
    */
    class LoesungRepository extends \Wise\WiseDocasysDomainDesigner\Domain\Repository\AbstractRepository
    {
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
        * 
        * @param Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung
        * @param Array
        * @return Array 
        */
        public function getInputArtefacts($solution = null, $tracedSolutions = [])
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

            foreach($artefactsWithConsumers as $artefactWithConsumer) {
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
                
                if($artefactProducingSolution && !in_array($artefactProducingSolution, $tracedSolutions)) {
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
    }
?>