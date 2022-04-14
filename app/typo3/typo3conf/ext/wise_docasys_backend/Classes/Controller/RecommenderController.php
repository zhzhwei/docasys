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

        protected $operators = [
            0 => 'Ignorieren',
            1 => 'Gleich (=)',
            2 => 'Ungleich (!=)',
        ];

        private function filterSolutions($results)
        {
            $filteredResults = [];

            foreach ($results as $result) {
                if ($result->getNettofluss() != 0) {
                    array_push($filteredResults, array(
                        'uid' => $result->getUid(),
                        'teilprojektnummer' => $result->getTeilprojektnummer(),
                        'loesungsbezeichnung' => $result->getLoesungsbezeichnung(),
                        'nettofluss' => $result->getNettofluss()
                    ));
                }
            }

            return $filteredResults;
        }

        public function indexAction()
        {
            $request = $this->request->getArguments();
            $filteredResults = [];

            // echo '<pre>' , var_dump("11111") , '</pre>';
            // echo '<pre>' , var_dump("11111") , '</pre>';

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
                'values' => (isset($request['recommender-submit'])) ? $request['recommender-submit'] : null
            ]);
        }
    }
?>
