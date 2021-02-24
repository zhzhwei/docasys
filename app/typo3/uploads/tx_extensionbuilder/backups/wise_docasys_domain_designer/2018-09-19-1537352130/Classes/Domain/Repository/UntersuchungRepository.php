<?php
    namespace Wise\WiseDocasysDomainDesigner\Domain\Repository;

    /**
    * UntersuchungRepository 
    */
    class UntersuchungRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
    {
        public function initializeObject()
        {
            $querySettings = $this->objectManager->get('TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings');
            $querySettings->setRespectStoragePage(false);  
            $this->setDefaultQuerySettings($querySettings);
        }
    }
?>