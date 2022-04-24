<?php
    namespace Wise\WiseDocasysBackend\Controller;

    use TYPO3\CMS\Backend\Utility\BackendUtility;
    use TYPO3\CMS\Core\Messaging\FlashMessage;

    class RecommenderController extends \Wise\WiseDocasysBackend\Controller\FilterController
    {
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
        private $ausgangsflusse = [];

        /**
        * @var Array 
        */
        private $eingangsflusse = [];

        private function filterSolutions($results)
        {
            $filteredResults = [];
            
            foreach ($results as $result) {
                if ($result->getNettofluss() != 0) {
                    array_push($filteredResults, array(
                        'uid' => $result->getUid(),
                        'teilprojektnummer' => $result->getTeilprojektnummer(),
                        'loesungsbezeichnung' => $result->getLoesungsbezeichnung(),
                        'nettofluss' => $result->getNettofluss(),
                        'ausgangsfluss' => $result->getAusgangsfluss(),
                        'eingangsfluss' => $result->getEingangsfluss()
                    ));

                    array_push($this->teilprojektnummer, $result->getTeilprojektnummer());
                    array_push($this->ausgangsflusse, $result->getAusgangsfluss());
                    array_push($this->eingangsflusse, $result->getEingangsfluss());
                }
            }
            // echo '<pre>' , var_dump($filteredResults) , '</pre>';

            return $filteredResults;
        }

        public function indexAction()
        {
            $request = $this->request->getArguments();
            $filteredResults = [];

            if(isset($request['recommender-submit'])) {
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

            $this->view->assignMultiple([
                'operators' => $this->operators,
                'results' => count($filteredResults) > 0 ? $filteredResults : null,
                'values' => (isset($request['recommender-submit'])) ? $request['recommender-submit'] : null,
                'labels' => $this->teilprojektnummer,
                'ausgangsflusse' => $this->ausgangsflusse,
                'eingangsflusse' => $this->eingangsflusse,
            ]);
        }
    }
?>
