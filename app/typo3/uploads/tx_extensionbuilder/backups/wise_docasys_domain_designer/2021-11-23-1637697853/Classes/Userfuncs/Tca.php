<?php
    namespace Wise\WiseDocasysDomainDesigner\Userfuncs;
    
    use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

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
            
            if($gaObject) { 
                foreach($gaRepository->getAllParents() as $parent) {
                    foreach($parent->getUnterart() as $parentChild) {
                        if($parentChild->getUid() == $parameters['row']['uid']) {
                            // Parent is found!
                            $title .= ((strlen($parent->getBezeichnung()) > 20) ? substr($parent->getBezeichnung(), 0, 20).'...' : $parent->getBezeichnung()) . ' / ';
                        }
                    }
                }
                $title .= $gaObject->getBezeichnung();
            }
            
            $parameters['title'] = $title; 
        }
        
        public function loesungsuntersuchungTitle(&$parameters, $parentObject)
        {
            $title = '';  
            $lfpRepository = $this->objectManager->get('Wise\WiseDocasysDomainDesigner\Domain\Repository\LoesungsuntersuchungRepository');
            $lfpObject = $lfpRepository->findByUid($parameters['row']['uid']);  

            if($lfpObject) {
                $lsg = $lfpObject->getUntersuchteLoesung();
                $title = ( ($lfpObject->getDatum()) ? $lfpObject->getDatum()->format("d.m.Y") : '' ) . ' | ' . ( ($lsg) ? $lsg->getTeilprojektnummer() : $lfpObject->getPruefbezeichnung() );
                
                if($lfpObject->getUntersuchterLastfall()) {
                    $title .= ' - '.$lfpObject->getUntersuchterLastfall()->getFallbezeichnung();   
                }
            } 
            $parameters['title'] = $title;
        }
        
        public function loesungTitle(&$parameters, $parentObject)
        {
            $title = '';
            $repository = $this->objectManager->get('Wise\WiseDocasysDomainDesigner\Domain\Repository\LoesungRepository');
            $obj = $repository->findByUid($parameters['row']['uid']);
            
            if($obj) {
                $title .= '['.LocalizationUtility::translate('LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:'.'loesungsart.'.intval($obj->getLoesungsart()), '').'] ';
                $title .= $obj->getTeilprojektnummer().', ';
                $title .= $obj->getLoesungsbezeichnung();
            }
            
            $parameters['title'] = $title;    
        } 
        
        public function eignungsprofilTitle(&$parameters, $parentObject)
        {
            $title = '';
            $repository = $this->objectManager->get('Wise\WiseDocasysDomainDesigner\Domain\Repository\EignungsprofilRepository');
            $obj = $repository->findByUid($parameters['row']['uid']); 
            
            if($obj) {
                $solution = $obj->getLoesung()->current();
                $title .= ($solution) ? $solution->getTeilprojektnummer() : '?';
                
                $applicationCase = $obj->getAnwendungsfall()->current();
                $title .= ' @ ' . (($applicationCase) ? $applicationCase->getBezeichnung() : '?');
            }
            
            $parameters['title'] = $title;    
        }  
        
        public function modellTitle(&$parameters, $parentObject)
        {
            $title = '';
            $repository = $this->objectManager->get('Wise\WiseDocasysDomainDesigner\Domain\Repository\ModellRepository');
            $model = $repository->findByUid($parameters['row']['uid']);
            $title = $model->getBezeichnung();
            
            $artefactRepository = $this->objectManager->get('Wise\WiseDocasysDomainDesigner\Domain\Repository\ArtefaktRepository');
            $producer = $artefactRepository->getArtefactProducer($model);
            if($producer) {
                $prefix = $producer->getTeilprojektnummer();   
                $title = "[" . $prefix . "] " . $title; 
            }
            
            $parameters['title'] = $title;    
        } 
    }    
?>