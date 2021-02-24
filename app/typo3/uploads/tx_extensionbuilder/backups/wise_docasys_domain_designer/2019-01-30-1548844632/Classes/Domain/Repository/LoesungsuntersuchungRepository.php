<?php
    namespace Wise\WiseDocasysDomainDesigner\Domain\Repository;

    /**
    * LoesungsuntersuchungRepository 
    */
    class LoesungsuntersuchungRepository extends \Wise\WiseDocasysDomainDesigner\Domain\Repository\AbstractRepository
    {
        /**
        * Provides all parameters of single examination results.
        * 
        * @param null
        * @return array 
        */
        public function getParameter()
        {
            $parameters = [];
            foreach($this->findAll() as $ex) {
                foreach($ex->getParameterpruefungen() as $param) {
                    if($param->getMessparameter()) {
                        if(!in_array($param->getMessparameter(), $parameters)) {
                            $parameters[$param->getMessparameter()->getParametername()] = $param->getMessparameter();    
                        }
                    }
                }
            }
            ksort($parameters);
            return $parameters;
        } 

        public function getAggregatedItems($getter, $getterIdentifier, $getterName, $returnKeyValuePairs = true)
        {
            $items = [];
            foreach($this->findAll() as $ex) {
                if($ex->$getter()) {
                    if(!in_array($ex->$getter(), $items)) {
                        $items[$ex->$getter()->$getterIdentifier()] = $ex->$getter();
                    }    
                }
            }  
            ksort($items); 

            if($returnKeyValuePairs) {
                $return = [];
                foreach($items as $item) {
                    $return[$item->$getterIdentifier()] = $item->$getterName();   
                } 
                return $return; 
            } else {
                return $items;
            } 
        }

        public function getLoesungen($returnKeyValuePairs = true)
        {
            return $this->getAggregatedItems(
                'getUntersuchteLoesung',
                'getUid',
                'getTeilprojektnummer',
                $returnKeyValuePairs
            );

        }    

        public function getLastfaelle($returnKeyValuePairs = true)
        {
            return $this->getAggregatedItems(
                'getUntersuchterLastfall',
                'getUid',
                'getFallbezeichnung',
                $returnKeyValuePairs
            );
        }   

        public function getUntersuchungstraeger($returnKeyValuePairs = true)
        {
            return $this->getAggregatedItems(
                'getUntersuchungstraeger',
                'getUid',
                'getBezeichnung',
                $returnKeyValuePairs
            );
        }  

        public function findSimilarExaminations($solutionId = 0, $loadcaseId = 0, $machineId = 0)
        {
            $and = [];
            $query = $this->createQuery();
            
            if($solutionId > 0) {
                $and[] = $query->equals('untersuchte_loesung', $solutionId);    
            }
            if($loadcaseId > 0) {
                $and[] = $query->equals('untersuchter_lastfall', $loadcaseId);    
            }
            if($machineId > 0) {
                $and[] = $query->equals('untersuchungstraeger', $machineId);     
            }
            
            $query->matching($query->logicalAnd($and));
            $query->setOrderings(["datum" => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING]);
            
            return $query->execute();
        }
    }
?>