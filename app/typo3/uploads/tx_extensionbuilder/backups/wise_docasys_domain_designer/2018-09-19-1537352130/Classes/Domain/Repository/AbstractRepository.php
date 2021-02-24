<?php
    namespace Wise\WiseDocasysDomainDesigner\Domain\Repository;

    /**
    * AbstractRepository 
    */
    abstract class AbstractRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
    {
        public function initializeObject()
        {
            $querySettings = $this->objectManager->get('TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings');
            $querySettings->setRespectStoragePage(false);  
            $querySettings->setIgnoreEnableFields(false);  
            $this->setDefaultQuerySettings($querySettings); 
        }
    }
?>