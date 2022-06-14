<?php
    namespace Wise\WiseDocasysBackend\Controller;

    use TYPO3\CMS\Backend\Utility\BackendUtility;
    use TYPO3\CMS\Core\Messaging\FlashMessage;

    class SolutionOverviewController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
    {
        const EDGE_TYPE_INPUT = 0;
        const EDGE_TYPE_OUTPUT = 1;
        const NODE_TYPE_SOLUTIONS = 0;
        const NODE_TYPE_OTHERS = 1;
        const NODE_TYPE_SOLUTIONS_FOCUS = 2;
        const LABEL_NO_VALUE = 'Zeige alle';
        const LOESUNG = 'Loesung'; 
        const MESSVERFAHREN = 'Messverfahren';

        /**
        * @var Array 
        */
        private $repositories = [];

        /**
        * @var Array 
        */
        private $outputTypes = [
            0 => 'Outcome und Output',
            1 => 'Nur Outcome',
        ];

        /**
        * @var Array 
        */
        private $tracedSolutions = [];

        /**
        * @var Array 
        */
        private $nodes = [];

        /**
        * @var Array 
        */
        private $nodeRelations = [];

        /**
        * @var Array 
        */
        private $parameterColors = [
            'yellow', 'red', 'blue', 'green', 'black'
        ];

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\ArtefaktRepository
        * @inject
        */
        protected $artefaktRepository;

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\KomponententypRepository
        * @inject
        */
        protected $komponententypRepository;

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\LoesungRepository
        * @inject
        */
        protected $loesungRepository;

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\LoesungsuntersuchungRepository
        * @inject
        */
        protected $loesungsuntersuchungRepository;

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\WerkzeugmaschineRepository
        * @inject
        */
        protected $werkzeugmaschineRepository;

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\LastfallRepository
        * @inject
        */
        protected $lastfallRepository;

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\MessparameterRepository
        * @inject
        */
        protected $messparameterRepository;

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

        public function indexAction()
        {
            $componentTypes = [];
            foreach($this->komponententypRepository->findByAufVisualisierungAnzeigen(true) as $component) {
                $componentTypes[] = [
                    'obj' => $component,
                    'solutions' => $this->loesungRepository->filterSolutions(
                        $this->loesungRepository->findByDerzeitigerEinsatzort($component->getUid()),
                        false
                    ),    
                ];    
            }  
            $this->view->assignMultiple([
                'componentTypes' => $componentTypes
            ]);
        }

        public function referencemachineAction()
        {
            $solutions = $this->loesungRepository->findAll(); 
            $solutionComponents = [];
            $ioObjects = [
                'models' => [],
                'ressources' => [],
            ];

            foreach($solutions as $solution) {
                if($solution->getDerzeitigerEinsatzort()) {
                    if($solution->getDerzeitigerEinsatzort()->count() > 0) {
                        $solutionComponents[$solution->getDerzeitigerEinsatzort()->current()->getUid()][] = $solution->getTeilprojektnummer(); 
                    } 
                }
            }

            $this->view->assignMultiple([
                /* @todo recursion via partial */
                'referenceMachine' => $this->komponententypRepository->findOneByKomponentenart(6),
                'solutionComponents' => $solutionComponents,
            ]);
        }

        public function networkAction()
        {

            // Artefact types
            $artefactTypes = $this->artefaktRepository->getArtefactTypes();
            foreach(array_merge($artefactTypes, [self::MESSVERFAHREN, self::LOESUNG]) as $type) {
                $this->nodes[$type] = [];    
            }
            $nodeTypes = array_flip(array_keys($this->nodes)); 

            // Solutions
            $solutions = $this->loesungRepository->findAll();

            // Solutions of the network for output determination
            $solutionsForOutputAnalysis = [];

            // Filtered values
            $request = $this->request->getArguments();
            $solutionFiltered = null;
            $outputTypeFiltered = 0;
            $selectedSolutionId = 0;

            // Flag for the focus of only one solution of interest
            $noDetailedTracing = false;

            $solutionsFilter = [0 => self::LABEL_NO_VALUE];
            foreach($this->loesungRepository->findAll() as $s) {
                // print "<p>".$s."<br>".$s->getUid()."<br>".$s->getLoesungsart()."</p>";
                $solutionsFilter[$s->getUid()] = '['.\TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:loesungsart.'.$s->getLoesungsart(), '').'] ' . $s->getTeilprojektnummer() . ', ' . $s->getLoesungsbezeichnung();
            }                                         

            if(isset($request['outputTypes'])) {
                if(array_key_exists(intval($request['outputTypes']), $this->outputTypes)) {
                    $outputTypeFiltered = intval($request['outputTypes']);  
                }        
            }

            if(isset($request['solution'])) {
                $selectedSolutionId = intval($request['solution']); 
                if($selectedSolutionId > 0) {
                    $solutionFiltered = $this->loesungRepository->findOneByUid($selectedSolutionId);
                    $solutions = [$solutionFiltered]; 
                    $noDetailedTracing = true;   
                }   
            }

            // Objects and solutions
            foreach($solutions as $solution) {
                $solutionsForOutputAnalysis[] = $solution;

                // Input
                foreach($this->loesungRepository->getInputArtefacts($solution, null, $noDetailedTracing) as $artefactsWithConsumer) {
                    $artefact = $artefactsWithConsumer['artefact'];
                    $solution = $artefactsWithConsumer['solution']; 
                    $reflect = new \ReflectionClass($artefact);
                    $type = $reflect->getShortName(); 

                    if($type != 'Loesung') {
                        // Node relation solution - input
                        $this->addRelationObject(
                            $type.$artefact->getUid().'_'.self::LOESUNG.$solution->getUid(),
                            $this->getArtefaktTitle($artefact->getBezeichnung(), $type),
                            $this->getLoesungTitle($solution),
                            $type,
                            self::EDGE_TYPE_INPUT
                        );

                        if(!in_array($solution, $solutionsForOutputAnalysis)) {
                            $solutionsForOutputAnalysis[] = $solution;
                        }

                        // Node object output     
                        if(!array_key_exists($artefact->getUid(), $this->nodes[$type])) {
                            $this->nodes[$type][$artefact->getUid()] = [
                                'type' => $type,
                                'class' => self::NODE_TYPE_OTHERS,
                                'title' => $this->getArtefaktTitle($artefact->getBezeichnung(), $type),
                            ]; 
                        }
                    }

                    // Node object solution
                    $type = self::LOESUNG;
                    if(!array_key_exists($solution->getUid(), $this->nodes[$type])) {
                        $this->nodes[$type][$solution->getUid()] = [
                            'type' => $type,
                            'class' => ($selectedSolutionId == $solution->getUid() or true) ? self::NODE_TYPE_SOLUTIONS_FOCUS : self::NODE_TYPE_SOLUTIONS,
                            'title' => $this->getLoesungTitle($solution),
                        ];    
                    }

                    // Producer nodes (if no detailed tracing is demanded) 
                    if($noDetailedTracing === true) {
                        if($artefactsWithConsumer['artifactProducer']) { 
                            $reflect = new \ReflectionClass($artefact);
                            $type = $reflect->getShortName();

                            // Node relation solution (producer of the input) - input
                            $this->addRelationObject(
                                self::LOESUNG.$artefactsWithConsumer['artifactProducer']->getUid().'_'.$type.$artefact->getUid(),
                                $this->getLoesungTitle($artefactsWithConsumer['artifactProducer']),
                                $this->getArtefaktTitle($artefact->getBezeichnung(), $type),
                                $type,
                                self::EDGE_TYPE_OUTPUT 
                            );

                            $type = self::LOESUNG;
                            // Node object solution (producer of the input)
                            if(!array_key_exists($artefactsWithConsumer['artifactProducer']->getUid(), $this->nodes[$type])) { 
                                $this->nodes[$type][$artefactsWithConsumer['artifactProducer']->getUid()] = [
                                    'type' => $type,
                                    'class' => self::NODE_TYPE_SOLUTIONS,
                                    'title' => $this->getLoesungTitle($artefactsWithConsumer['artifactProducer']),
                                ];    
                            } 
                        }
                    }
                }
            }

            foreach($solutionsForOutputAnalysis as $solution) {
                // Output
                foreach($this->loesungRepository->getOutputArtefacts($solution, (bool) $outputTypeFiltered) as $artefact) {
                    if($artefact != NULL) {

                        $reflect = new \ReflectionClass($artefact);
                        $type = $reflect->getShortName();

                        // Node relation solution - output
                        $this->addRelationObject(
                            self::LOESUNG.$solution->getUid().'_'.$type.$artefact->getUid(),
                            $this->getLoesungTitle($solution),
                            $this->getArtefaktTitle($artefact->getBezeichnung(), $type),
                            $type,
                            self::EDGE_TYPE_OUTPUT 
                        );

                        // Node object output 
                        if(!array_key_exists($artefact->getUid(), $this->nodes[$type])) {
                            $this->nodes[$type][$artefact->getUid()] = [
                                'type' => $type,
                                'class' => self::NODE_TYPE_OTHERS,
                                'title' => $this->getArtefaktTitle($artefact->getBezeichnung(), $type),
                            ]; 
                        }

                        // Node object solution
                        $type = self::LOESUNG;
                        if(!array_key_exists($solution->getUid(), $this->nodes[$type])) {
                            $this->nodes[$type][$solution->getUid()] = [
                                'type' => $type,
                                'class' => self::NODE_TYPE_SOLUTIONS,
                                'title' => $this->getLoesungTitle($solution),
                            ];    
                        }

                        // Consumer nodes (if no detailed tracing is demanded) 
                        if($noDetailedTracing === true) {
                            $consumers = $this->artefaktRepository->getArtefactConsumers($artefact);
                            if($consumers) {
                                foreach($consumers as $consumer) {
                                    $reflect = new \ReflectionClass($artefact);
                                    $type = $reflect->getShortName();

                                    // Node relation solution output - solution (consumer of the output)
                                    $this->addRelationObject(
                                        $type.$artefact->getUid().'_'.self::LOESUNG.$consumer->getUid(),
                                        $this->getArtefaktTitle($artefact->getBezeichnung(), $type),
                                        $this->getLoesungTitle($consumer),
                                        $type,
                                        self::EDGE_TYPE_INPUT
                                    );

                                    // Node object solution (consumer of the outout)
                                    $type = self::LOESUNG;
                                    if(!array_key_exists($consumer->getUid(), $this->nodes[$type])) {
                                        $this->nodes[$type][$consumer->getUid()] = [
                                            'type' => $type,
                                            'class' => self::NODE_TYPE_SOLUTIONS,
                                            'title' => $this->getLoesungTitle($consumer),
                                        ];    
                                    }
                                }
                            }
                        }
                    }
                }
            }

            // Formatting for visualization
            $nodeRelationsWithConsumers = [];
            foreach($this->nodeRelations as $node) {
                if($node['class'] == 1) {
                    $add = [
                        'class' => $node['class'],
                        'source' => $node['source'],
                        'target' => $node['target'],
                        'type' => $node['type'],
                        'consumer' => []
                    ];  
                    foreach($this->nodeRelations as $nodeRelationRep) {
                        if($nodeRelationRep['class'] == 0) {
                            if($nodeRelationRep['source'] == $node['target']) {
                                if(!in_array($nodeRelationRep['target'], $add['consumer'])) {
                                    $add['consumer'][] = $nodeRelationRep['target'];    
                                }
                            }    
                        }    
                    }  
                    $nodeRelationsWithConsumers[] = $add;
                }    
            }
            // echo '<pre>' , var_dump("11111") , '</pre>';
            // echo '<pre>' , var_dump("11111") , '</pre>';
            // echo '<pre>' , var_dump($nodeRelationsWithConsumers) , '</pre>';
            
            $this->view->assignMultiple([
                'solutions' => $this->loesungRepository->findAll(),
                'nodes' => $this->nodes,
                'nodeRelations' => $this->nodeRelations,
                'nodeRelationsWithConsumers' => $nodeRelationsWithConsumers,
                // Form
                'solutionsFilter' => $solutionsFilter,
                'solutionsFilterValue' => $selectedSolutionId,
                'solutionFiltered' => $solutionFiltered,
                'outputTypesFilter' => $this->outputTypes,
                'outputTypesFilterValue' => $outputTypeFiltered,
            ]);    
        }

        public function summaryAction() 
        {
            $solutions = [0 => self::LABEL_NO_VALUE];
            $solution = null;
            $applicationCases = null;
            $modelFiles = [];

            foreach($this->loesungRepository->findAll() as $s) {
                $solutions[$s->getUid()] = $s->getTeilprojektnummer() . ', ' . $s->getLoesungsbezeichnung();     
            } 

            $request = $this->request->getArguments();  
            if(isset($request['solution'])) {
                $selectedSolution = intval($request['solution']);  
                if($selectedSolution > 0) {  
                    $solution = $this->loesungRepository->findOneByUid($selectedSolution);
                    $applicationCases = $this->loesungRepository->getApplicationCases($solution); 
                    $modelFiles = $this->loesungRepository->getModelFileLinks($solution);
                }
            }
            
            $this->view->assignMultiple([
                'solutions' => $solutions,
                'solution' => $solution,
                'applicationCases' => $applicationCases,
                'modelFiles' => $modelFiles,
                'aptitudes' => ($solution) ? $this->eignungsprofilRepository->findByLoesung($solution->getUid()) : [] 
            ]);
        }

        public function examinationsAction()
        {
            $request = $this->request->getArguments();
            $examinations = [];

            if(isset($request['solution'])) {
                $solutionId = intval($request['solution']);
                if($solutionId > 0) {
                    $examinations = $this->loesungsuntersuchungRepository->findByUntersuchteLoesung($solutionId);  
                } 
            } 

            $this->view->assignMultiple([
                'examinations' => (count($examinations) > 0) ? $examinations : $this->loesungsuntersuchungRepository->findAll(),
                'parameters' => $this->loesungsuntersuchungRepository->getParameter(),
                // Form
                'loesungen' => $this->loesungsuntersuchungRepository->getLoesungen(),
                'lastfaelle' => $this->loesungsuntersuchungRepository->getLastfaelle(),
                'untersuchungstraeger' => $this->loesungsuntersuchungRepository->getUntersuchungstraeger(),
                'solutionId' => (isset($solutionId)) ? $solutionId : null
            ]);    
        }

        public function examinationsFilterAction()
        {
            $request = $this->request->getArguments();

            if(!is_array($request['examinationsFilter']['filterParameter'])) {
                $this->addFlashMessage(
                    utf8_encode('Es m�ssen Parameter ausgew�hlt werden.'),
                    null,
                    \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR 
                );
                $this->redirect('examinations');    
            } elseif(intval($request['filterLoesung']) < 1) {
                $this->addFlashMessage(
                    utf8_encode('Es muss eine L�sung ausgew�hlt werden.'),
                    null,
                    \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR 
                );
                $this->redirect('examinations');    
            }

            $examinations = $this->loesungsuntersuchungRepository->findSimilarExaminations(
                $request['filterLoesung'],    
                $request['filterLastfall'],    
                $request['filterUntersuchungstraeger']    
            );

            $parameters = [];
            $data = [];
            $dates = [];
            $dataColors = [];
            foreach($request['examinationsFilter']['filterParameter'] as $parameterUid) {
                $parameter = $this->messparameterRepository->findByUid($parameterUid);
                $parameters[] = $parameter;  
                $data[$parameter->getParametername()] = null;  
            }

            foreach($examinations as $examination) {
                $date = $examination->getDatum()->format('Y-m-d');
                $dates[] = "'".$date."'";
                foreach($examination->getParameterpruefungen() as $paramexam) {
                    // Important: Set each data point (even if value is missing)
                    $data[$paramexam->getMessparameter()->getParametername()][$date] = (array_key_exists($paramexam->getMessparameter()->getParametername(), $data)) ? $paramexam->getErgebnis() : null;
                }    
            }

            if(count($data) > 0) {
                $dataColors = array_flip(array_keys($data));
                foreach($dataColors as $dcK => $dcV) {
                    $dataColors[$dcK] = (isset($this->parameterColors[$dcV])) ? $this->parameterColors[$dcV] : '';   
                }
            }

            $this->view->assignMultiple([
                'examinations' => $examinations,
                'solution' => $this->loesungRepository->findByUid($request['filterLoesung']),
                'loadcase' => $this->lastfallRepository->findByUid($request['filterLastfall']),
                'machine' => $this->werkzeugmaschineRepository->findByUid($request['filterUntersuchungstraeger']),
                'parameters' => $parameters,
                'data' => $data,
                'dataColors' => $dataColors,
                'dates' => implode(", ", $dates)
            ]);
        }

        public function matrixAction()
        {
            $wFirstColumn = 20;
            $solutions = [];
            $applicationCases = $this->fachAnwendungsfallRepository->findAll();

            foreach($this->loesungRepository->findByLoesungsart(0) as $solution) {
                $struct = [
                    'solution' => $solution,
                    'aptitudes' => $this->eignungsprofilRepository->findByLoesung($solution->getUid()),
                    'applicationCasesByLoadCases' => $this->loesungRepository->getApplicationCases($solution)
                ];
                $solutions[] = $struct;    
            }

            $this->view->assignMultiple([
                'applicationCases' => $applicationCases,
                'loadCases' => $this->lastfallRepository->findAll(),
                'solutions' => $solutions,
                'matrixFirstWidth' => $wFirstColumn,
                'matrixWidth' => floor((100 - $wFirstColumn) / count($applicationCases)),
            ]); 
        }
        
        public function modelProxyAction()
        {
            echo "modelProxy"; die();    
        }

        private function getLoesungTitle($solution)
        {
            if($solution) {
                return $solution->getTeilprojektnummer();    
            }   
            return ''; 
        }

        private function getArtefaktTitle($name, $type = '')
        {
            $pre = '';
            if($type != '') {
                $pre = '['.$type.']';    
            }

            return trim($pre . ' ' . $name);
        }

        private function addRelationObject($relationId = '', $source = null, $target = null, $type = '', $class = '')
        {
            $this->nodeRelations[] = [
                'id' => $relationId,
                'source' => $source,
                'target' => $target,
                'type' => $type,
                'class' => $class                                
            ]; 
            return;   
        }
    }
?>
