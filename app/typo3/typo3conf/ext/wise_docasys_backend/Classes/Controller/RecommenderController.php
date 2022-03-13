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

        protected $Anwendungsfall = [
            'Keine Auswahl',
            'Einzelfertigung',
            'Serienfertigung',
        ];

        protected $Flexibility = [
            'Keine Auswahl',
            'Maschinenspezifisch',
            'Lastfallspezifisch',
            'Bedingt Lastfallspezifisch',
        ];

        protected $Invasivity = [
            'Keine Auswahl',
            'Kein Eingriff',
            'Eingriff Komponente',
            'Eingriff Baugruppe',
            'Eingriff Gesamtmaschine',
            'Erweiterung',
        ];

        protected $Wartungsintervall = [
            'Keine Auswahl',
            'Quartalsweise',
            'Halbjährlich',
            'Jährlich',
        ];

        protected $Maschinensteuerung = [
            'Keine Auswahl',
            'Ja',
            'Nein',
        ];

        protected $Maschinenstillstand = [
            'Keine Auswahl',
            'Ja',
            'Nein',
        ];

        public function renewResults($results)
        {
            $newresults = [];
            foreach ($results as $result) {
                array_push($newresults, array('teilprojektnummer'=>$result->getTeilprojektnummer(), 'loesungsbezeichnung'=>$result->getLoesungsbezeichnung(), 'nettofluss'=>$result->getNettofluss()) );
            }
            // echo '<pre>' , var_dump($newresults) , '</pre>';
            return $newresults;
        }

        public function indexAction()
        {   
            $request = $this->request->getArguments();
            $results = [];

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
                }
                else {
                    $newresults = $this->renewResults($results);
                    array_multisort(array_column($newresults,'nettofluss'), SORT_DESC, $newresults);
                    // echo '<pre>' , var_dump($newresults) , '</pre>';
                }
            }

            $this->view->assignMultiple([
                'Anwendungsfall' => $this->Anwendungsfall,
                'Flexibility' => $this->Flexibility,
                'Invasivity' => $this->Invasivity,
                'Wartungsintervall' => $this->Wartungsintervall,
                'Maschinensteuerung' => $this->Maschinensteuerung,
                'Maschinenstillstand' => $this->Maschinenstillstand,
                'results' => (count($newresults) > 0) ? $newresults : null,
            ]);
        }
    }
?>
