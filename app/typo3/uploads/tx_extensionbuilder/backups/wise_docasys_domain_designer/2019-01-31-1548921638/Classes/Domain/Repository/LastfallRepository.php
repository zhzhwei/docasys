<?php
    namespace Wise\WiseDocasysDomainDesigner\Domain\Repository;

    /**
    * LastfallRepository 
    */
    class LastfallRepository extends \Wise\WiseDocasysDomainDesigner\Domain\Repository\AbstractRepository
    {
        protected $defaultOrderings = [
            'fallbezeichnung' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
        ];    
    }
?>