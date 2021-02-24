<?php
    namespace Wise\WiseDocasysDomainDesigner\Domain\Repository;

    /**
    * GestaltungsartRepository 
    */
    class GestaltungsartRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
    {
        public function getAllParents() 
        {
            $query = $this->createQuery();
            $query->getQuerySettings()->setRespectStoragePage(false);
            
            $query->matching(
                $query->logicalAnd(
                    $query->greaterThan("unterart", 0)
                )
            );
            
            return $query->execute()->toArray();
        }
    }
?>