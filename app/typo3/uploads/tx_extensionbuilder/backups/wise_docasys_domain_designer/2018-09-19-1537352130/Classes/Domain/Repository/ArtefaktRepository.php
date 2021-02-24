<?php
    namespace Wise\WiseDocasysDomainDesigner\Domain\Repository;

    /**
    * ArtefaktRepository 
    */
    class ArtefaktRepository extends \Wise\WiseDocasysDomainDesigner\Domain\Repository\AbstractRepository
    {
        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\LsgRessourceOutputRepository
        * @inject
        */
        protected $lsgRessourceOutputRepository;
        
        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\LsgDatenOutputRepository
        * @inject
        */
        protected $lsgDatenOutputRepository;
        
        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\LstModellOutputRepository
        * @inject
        */
        protected $lstModellOutputRepository;
        
        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\LsgMessmittelOutputRepository
        * @inject
        */
        protected $lsgMessmittelOutputRepository;
        
        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\LoesungRepository
        * @inject
        */
        protected $loesungRepository;
        
        /**
        * @var Array 
        */
        public $artefactTypes = ['Ressource', 'Modell', 'Daten', 'Messmittel'];
        
        public function getArtefactTypes()
        {
            return $this->artefactTypes;
        }
        
        /**
        * Getting the producer of an artefcat. The first producing solution is selected (according to the data model, an artefact can have multipe solutions.) 
        * 
        * @param Mixed
        * @return Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung 
        */
        public function getArtefactProducer($artefact)
        {
            $producerId = 0;
            
            if($artefact) {
                $type = basename(get_class($artefact)); 
                $dataMapper = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Persistence\Generic\Mapper\DataMapper::class);
                        
                switch($type) {
                    case 'Ressource':
                        $outputObj = $this->lsgRessourceOutputRepository->findOneByRessource($artefact->getUid());
                    break;
                    case 'Daten':
                        $outputObj = $this->lsgDatenOutputRepository->findOneByDaten($artefact->getUid());
                    break;
                    case 'Modell':
                        $outputObj = $this->lstModellOutputRepository->findOneByModell($artefact->getUid());
                    break;
                    case 'Messverfahren':
                    case 'Messmittel':
                        $outputObj = $this->lsgMessmittelOutputRepository->findOneByMessmittel($artefact->getUid());
                    break;
                }
                
                if($outputObj) {
                    // Workaround as inline aggregates are not detectable and the QueryBuilder API is not ready in Typo3 7.6
                    $result = $GLOBALS['TYPO3_DB']->exec_SELECTgetSingleRow(
                       'loesung',
                       $dataMapper->getDataMap(get_class($outputObj))->getTableName(),
                       "uid = '".$outputObj->getUid()."'"
                    );
                    if($result['loesung'] > 0) {
                        $producerId = $result['loesung'];
                    }
                }
            }
            
            if($producerId > 0) {
                return $this->loesungRepository->findOneByUid($producerId);
            }
        }
    }
?>