<?php
    namespace Wise\WiseDocasysDomainDesigner\Domain\Repository;

    /**
    * FachAnwendungsfallRepository 
    */
    class FachAnwendungsfallRepository extends \Wise\WiseDocasysDomainDesigner\Domain\Repository\AbstractRepository
    {
        public function getLoadCases($items) {
            $loadCases = [];
            foreach($items as $item) {
                $technologyCases = $item->getTechnologischenAnwendungsfall(); 
                foreach($technologyCases as $technologyCase) {
                    foreach($technologyCase->getRepraesentierendeLastfaelle() as $loadCase) {
                        if(!in_array($loadCase, $loadCases)) {
                            $loadCases[] = $loadCase;        
                        }
                    }
                }
            }
            return $loadCases;
        }        
    }
?>