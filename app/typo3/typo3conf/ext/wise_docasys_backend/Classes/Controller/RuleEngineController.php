<?php
    namespace Wise\WiseDocasysBackend\Controller;

    use TYPO3\CMS\Backend\Utility\BackendUtility;
    use TYPO3\CMS\Core\Messaging\FlashMessage;

    class RuleEngineController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
    {

        protected $Material_Punkte = "1";
        protected $Ingeniur_Punkte;
        protected $Techniker_Punkte;
        protected $Maschinen_Punkte;
        protected $Software_Punkte;
        protected $Steuerung_Punkte;
        protected $Wartung_Punkte;
        protected $Aufwand_Punkte;

        protected $Material_Gewichtung = "20%";
        protected $Ingeniur_Gewichtung;
        protected $Techniker_Gewichtung;
        protected $Maschinen_Gewichtung;
        protected $Software_Gewichtung;
        protected $Steuerung_Gewichtung;
        protected $Wartung_Gewichtung;
        protected $Aufwand_Gewichtung;

        protected $Punkte_Material = "1";
        protected $Punkte_IS;
        protected $Punkte_TS;
        protected $Punkte_MSSZ;
        protected $Punkte_Software;
        protected $Punkte_Steuerung;
        protected $Punkte_WA;
        protected $Punkte_AbA;
        protected $Punkte_FA;
        
        protected $Gewichtung_Material = "20%";
        protected $Gewichtung_IS;
        protected $Gewichtung_TS;
        protected $Gewichtung_MSSZ;
        protected $Gewichtung_Software;
        protected $Gewichtung_Steuerung;
        protected $Gewichtung_WA;
        protected $Gewichtung_AbA;
        protected $Gewichtung_FA;

        public function indexAction()
        {
            // echo("<script>console.log(".json_encode($request).");</script>");
            $this->view->assignMultiple([
                'Material_Punkte' => $this->Material_Punkte,
                'Ingeniur_Punkte' => $this->Ingeniur_Punkte,
                'Techniker_Punkte' => $this->Techniker_Punkte,
                'Maschinen_Punkte' => $this->Maschinen_Punkte,
                'Software_Punkte' => $this->Software_Punkte,
                'Steuerung_Punkte' => $this->Steuerung_Punkte,
                'Wartung_Punkte' => $this->Wartung_Punkte,
                'Aufwand_Punkte' => $this->Aufwand_Punkte,

                'Material_Gewichtung' => $this->Material_Gewichtung,
                'Ingeniur_Gewichtung' => $this->Ingeniur_Gewichtung,
                'Techniker_Gewichtung' => $this->Techniker_Gewichtung,
                'Maschinen_Gewichtung' => $this->Maschinen_Gewichtung,
                'Software_Gewichtung' => $this->Software_Gewichtung,
                'Steuerung_Gewichtung' => $this->Steuerung_Gewichtung,
                'Wartung_Gewichtung' => $this->Wartung_Gewichtung,
                'Aufwand_Gewichtung' => $this->Aufwand_Gewichtung,

                'Punkte_Material' => $this->Punkte_Material,
                'Punkte_IS' => $this->Punkte_IS,
                'Punkte_TS' => $this->Punkte_TS,
                'Punkte_MSSZ' => $this->Punkte_MSSZ,
                'Punkte_Software' => $this->Punkte_Software,
                'Punkte_Steuerung' => $this->Punkte_Steuerung,
                'Punkte_WA' => $this->Punkte_WA,
                'Punkte_AbA' => $this->Punkte_AbA,
                'Punkte_FA' => $this->Punkte_FA,

                'Gewichtung_Material' => $this->Gewichtung_Material,
                'Gewichtung_IS' => $this->Gewichtung_IS,
                'Gewichtung_TS' => $this->Gewichtung_TS,
                'Gewichtung_MSSZ' => $this->Gewichtung_MSSZ,
                'Gewichtung_Software' => $this->Gewichtung_Software,
                'Gewichtung_Steuerung' => $this->Gewichtung_Steuerung,
                'Gewichtung_WA' => $this->Gewichtung_WA,
                'Gewichtung_AbA' => $this->Gewichtung_AbA,
                'Gewichtung_FA' => $this->Gewichtung_FA,
            ]);
        }
    }
?>
