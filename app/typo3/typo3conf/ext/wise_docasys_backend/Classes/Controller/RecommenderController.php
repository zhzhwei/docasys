<?php
    namespace Wise\WiseDocasysBackend\Controller;

    use TYPO3\CMS\Backend\Utility\BackendUtility;
    use TYPO3\CMS\Core\Messaging\FlashMessage;

    class RecommenderController extends \Wise\WiseDocasysBackend\Controller\FilterController
    {
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

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\LoesungRepository
        * @inject
        */
        protected $loesungRepository;

        public function indexAction()
        {   
            $request = $this->request->getArguments();
            $results = [];
            // echo '<pre>' , var_dump("111111111111111111") , '</pre>';
            // echo '<pre>' , var_dump("111111111111111111") , '</pre>';
            // echo '<pre>' , var_dump($request) , '</pre>';

            if(isset($request['recommender-submit'])) {
                // $results = $this->loesungRepository->getFilteredSolutions($request['recommender-submit']);
                $results = $this->loesungRepository->getFilteredSolutions($request['recommender-submit']);  
                if(count($results) == 0) {
                    $this->addFlashMessage(
                        'Such Ihrer Suchanfrage konnte keine Ergebnisse ermittelt werden.',
                        null,
                        \TYPO3\CMS\Core\Messaging\AbstractMessage::INFO 
                    ); 
                }  
            }

            $this->view->assignMultiple([
                'Anwendungsfall' => $this->Anwendungsfall,
                'Flexibility' => $this->Flexibility,
                'Invasivity' => $this->Invasivity,
                'Wartungsintervall' => $this->Wartungsintervall,
                'Maschinensteuerung' => $this->Maschinensteuerung,
                'Maschinenstillstand' => $this->Maschinenstillstand,
                'results' => (count($results) > 0) ? $results : null,
            ]);
        }
    }
?>
