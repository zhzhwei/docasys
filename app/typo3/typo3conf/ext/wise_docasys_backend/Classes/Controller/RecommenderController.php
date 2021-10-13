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

        public function indexAction()
        {  
            $this->view->assignMultiple([
                'Anwendungsfall' => $this->Anwendungsfall,
                'Flexibility' => $this->Flexibility,
                'Invasivity' => $this->Invasivity,
                'Wartungsintervall' => $this->Wartungsintervall,
                'Maschinensteuerung' => $this->Maschinensteuerung,
                'Maschinenstillstand' => $this->Maschinenstillstand,
            ]);
        }
    }
?>
