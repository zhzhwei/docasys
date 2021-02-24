<?php
    namespace Wise\WiseDocasysDomainDesigner\Userfuncs;

    class Tca
    {
        /**
        * @var AuswirkungRepository
        */
        private $auswirkungRepository;

        /**
        * @var TYPO3\CMS\Extbase\Object\ObjectManager 
        */
        private $objectManager;

        public function __construct()
        {
            $this->objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Extbase\Object\ObjectManager');    
        }

        public function auswirkungTitle(&$parameters, $parentObject)
        {
            $title = '';
            $awRepository = $this->objectManager->get('Wise\WiseDocasysDomainDesigner\Domain\Repository\AuswirkungRepository');
            $awObject = $awRepository->findByUid($parameters['row']['uid']);

            if($awObject) {
                $wz = $awObject->getWirkungsziel();
                if($wz) {
                    $title .= $wz->getZielbezeichnung();    
                }

                // @todo Label / ID
                $wgt = $awObject->getWirkungsgradtendenz();
                if($wgt) {
                    $title .= ' ('.$wgt.')';
                }
            }

            $parameters['title'] = $title;
        }   

        public function komponentenauswirkungTitle(&$parameters, $parentObject)
        {
            $title = ''; 
            $kawRepository = $this->objectManager->get('Wise\WiseDocasysDomainDesigner\Domain\Repository\KomponentenauswirkungRepository');
            $kawObject = $kawRepository->findByUid($parameters['row']['uid']);

            if($kawObject) {
                $wz = $kawObject->getWirkungsziel();
                if($wz) {
                    $title .= $wz->getZielbezeichnung();    
                }

                // @todo Label / ID
                $wgt = $kawObject->getWirkungsgradtendenz();
                if($wgt) {
                    $title .= ' ('.$wgt.')';
                }   
                
                $kt = $kawObject->getKomponententyp();
                if($kt) {
                    $title .= ' an '.$kt->getKomponententypBezeichnung();
                }
            }

            $parameters['title'] = $title;   
        } 
        
        public function komponententypTitle(&$parameters, $parentObject)
        {
            $title = '';  
            $ktRepository = $this->objectManager->get('Wise\WiseDocasysDomainDesigner\Domain\Repository\KomponententypRepository');
            $ktObject = $ktRepository->findByUid($parameters['row']['uid']);

            if($ktObject) {
                if($ktObject->getIstMaschine() === true) {
                    $title .= '[Maschine] ';    
                } 
                if($ktObject->getIstBaugruppe() === true) {
                    $title .= '[Baugruppe] ';    
                } 
                $title .= $ktObject->getKomponententypBezeichnung();
            }

            $parameters['title'] = $title; 
        }
        
        public function lastfallpruefungTitle(&$parameters, $parentObject)
        {
            $title = '';  
            $lfpRepository = $this->objectManager->get('Wise\WiseDocasysDomainDesigner\Domain\Repository\LastfallpuefungRepository');
            $lfpObject = $lfpRepository->findByUid($parameters['row']['uid']);  

            if($lfpObject) {
                $title .= $lfpObject->getDatum()->format("d.m.Y") . ' | ' . $lfpObject->getPruefbezeichnung();  
            } 

            $parameters['title'] = $title;
        }
    }    
?>
