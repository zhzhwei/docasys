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
        
        private $localizationPrefix = 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf';

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

        public function komponententypTitle(&$parameters, $parentObject)
        {
            $title = '';  
            $ktRepository = $this->objectManager->get('Wise\WiseDocasysDomainDesigner\Domain\Repository\KomponententypRepository');
            $ktObject = $ktRepository->findByUid($parameters['row']['uid']);

            if($ktObject) {
                if($ktObject->getKomponentenart() >= 0) {
                    $title .= '[' . \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate($this->localizationPrefix.':komponentenart.'.$ktObject->getKomponentenart(), '') . '] ';    
                }
                $title .= $ktObject->getBezeichnung();
            }
            $parameters['title'] = $title; 
        }
        
        public function gestaltungsartTitle(&$parameters, $parentObject)
        {
            $title = '';
            $gaRepository = $this->objectManager->get('Wise\WiseDocasysDomainDesigner\Domain\Repository\GestaltungsartRepository');
            $gaObject = $gaRepository->findByUid($parameters['row']['uid']); 
             
            foreach($gaRepository->getAllParents() as $parent) {
                foreach($parent->getUnterart() as $parentChild) {
                    if($parentChild->getUid() == $parameters['row']['uid']) {
                        // Parent is found!
                        $title .= ((strlen($parent->getBezeichnung()) > 20) ? substr($parent->getBezeichnung(), 0, 20).'...' : $parent->getBezeichnung()) . ' / ';
                    }
                }
            }
            $parameters['title'] = $title . $gaObject->getBezeichnung(); 
        }
        
        public function lastfallpruefungTitle(&$parameters, $parentObject)
        {
            $title = '';  
            $lfpRepository = $this->objectManager->get('Wise\WiseDocasysDomainDesigner\Domain\Repository\LastfallpruefungRepository');
            $lfpObject = $lfpRepository->findByUid($parameters['row']['uid']);  

            if($lfpObject) {
                $title .= $lfpObject->getDatum()->format("d.m.Y") . ' | ' . $lfpObject->getPruefbezeichnung();  
            } 
            $parameters['title'] = $title;
        }
    }    
?>
