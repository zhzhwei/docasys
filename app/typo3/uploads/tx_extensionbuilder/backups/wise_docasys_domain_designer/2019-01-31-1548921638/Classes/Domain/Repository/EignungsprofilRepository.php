<?php
    namespace Wise\WiseDocasysDomainDesigner\Domain\Repository;

    /**
    * EignungsprofilRepository 
    */
    class EignungsprofilRepository extends \Wise\WiseDocasysDomainDesigner\Domain\Repository\AbstractRepository
    {
        /**
        * Searches for profiles represented solutions and application cases.
        * Optionally, the rating as well as the status can be provided.
        * 
        * @param Int
        * @param Int
        * @param Int
        * @param Int
        * 
        * @return Array 
        */
        public function findProfile($solutionId = 0, $applicationCaseId = 0, $rating = null, $status = null) {
            if($solutionId < 1 || $applicationCaseId < 1) {
                return;
            }
            
            $query = $this->createQuery();
            $and = [
                $query->equals('loesung', $solutionId),
                $query->equals('anwendungsfall', $applicationCaseId)
            ];
            
            if($rating) {
                $and[] = $query->equals('eignungsgrad', $rating);    
            }
            
            if($status) {
                $and[] = $query->equals('eignungsprofilstatus', $status);
            }
            
            $query->matching(
                $query->logicalAnd($and)
            );
            
            return $query->execute();
        }
    }
?>