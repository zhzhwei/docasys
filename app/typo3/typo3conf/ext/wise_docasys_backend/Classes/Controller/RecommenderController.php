<?php
    namespace Wise\WiseDocasysBackend\Controller;

    use TYPO3\CMS\Backend\Utility\BackendUtility;
    use TYPO3\CMS\Core\Messaging\FlashMessage;

    class RecommenderController extends \Wise\WiseDocasysBackend\Controller\FilterController
    {
        const LABEL_NO_VALUE = 'Zeige alle';

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\EignungsprofilRepository
        * @inject
        */
        protected $eignungsprofilRepository;
        
        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\LoesungRepository
        * @inject
        */
        protected $loesungRepository;

        /**
        * @var Array 
        */
        protected $operators = [
            0 => 'Ignorieren',
            1 => 'Gleich (=)',
            2 => 'Ungleich (!=)',
        ];

        /**
        * @var Array 
        */
        private $teilprojektnummer = [];

        /**
        * @var Array 
        */
        private $loesungsbezeichnung = [];

        /**
        * @var Array 
        */
        private $ausgangsflusse = [];

        /**
        * @var Array 
        */
        private $nettofluesse = [];

        /**
        * @var Array 
        */
        private $eingangsflusse = [];

        private function filterSolutions($results)
        {
            $filteredResults = [];
            foreach ($results as $result) {
                if( ($result->getNettofluss() != 0) ||
                    ($result->getAusgangsfluss() != 0) || 
                    ($result->getEingangsfluss() != 0) ) {
                    array_push($filteredResults, array(
                        'uid' => $result->getUid(),
                        'loesungsbezeichnung' => $result->getLoesungsbezeichnung(),
                        'nettofluss' => $result->getNettofluss(),
                        'ausgangsfluss' => $result->getAusgangsfluss(),
                        'eingangsfluss' => $result->getEingangsfluss()
                    ));
                }
            }

            return $filteredResults;
        }

        public function indexAction()
        {
            $request = $this->request->getArguments();
            $filteredResults = [];

            if(isset($request['recommender-submit'])) {
                // echo '<pre>' , var_dump($request['recommender-submit']) , '</pre>';
                $results = $this->loesungRepository->getFilteredSolutions($request['recommender-submit']);

                if(count($results) == 0) {
                    $this->addFlashMessage(
                        'Such Ihrer Suchanfrage konnte keine Ergebnisse ermittelt werden.',
                        null,
                        \TYPO3\CMS\Core\Messaging\AbstractMessage::INFO 
                    ); 
                } else {
                    $filteredResults = $this->filterSolutions($results);
                    array_multisort(array_column($filteredResults,'nettofluss'), SORT_DESC, $filteredResults);
                }
            }

            foreach ($filteredResults as $filteredResult) {
                array_push($this->loesungsbezeichnung, $filteredResult['loesungsbezeichnung']);
                array_push($this->nettofluesse, $filteredResult['nettofluss']);
                array_push($this->ausgangsflusse, $filteredResult['ausgangsfluss']);
                array_push($this->eingangsflusse, $filteredResult['eingangsfluss']);
            }

            $this->view->assignMultiple([
                'operators' => $this->operators,
                'results' => count($filteredResults) > 0 ? $filteredResults : null,
                'values' => (isset($request['recommender-submit'])) ? $request['recommender-submit'] : null,
                'labels' => $this->loesungsbezeichnung,
                'nettofluesse' => $this->nettofluesse,
                'ausgangsflusse' => $this->ausgangsflusse,
                'eingangsflusse' => $this->eingangsflusse
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
    }
?>
