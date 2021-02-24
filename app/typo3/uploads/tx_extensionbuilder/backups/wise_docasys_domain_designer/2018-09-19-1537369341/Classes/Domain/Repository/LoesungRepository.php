<?php
    namespace Wise\WiseDocasysDomainDesigner\Domain\Repository;

    /**
    * LoesungRepository 
    */
    class LoesungRepository extends \Wise\WiseDocasysDomainDesigner\Domain\Repository\AbstractRepository
    {
        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\ArtefaktRepository
        * @inject
        */
        protected $artefaktRepository;

        public function initializeObject()
        {
            $querySettings = $this->objectManager->get('TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings');
            $querySettings->setRespectStoragePage(false);  
            $this->setDefaultQuerySettings($querySettings); 
        }

        /**
        * Provides all input objects of a solution, whereby each solutions has its particular solution producer (owner).
        * 
        * @param Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung 
        * @return Array
        */
        public function getInputTrace($solution)
        {
            if($solution) {
                return $this->getInputArtefacts($solution);
            } 
            return [];  
        } 

        /**
        * Get all input artefacts of an solution. Recursion/ circle avoidance is active.
        * 
        * @param Mixed
        * @return Array 
        */
        public function getInputArtefacts($solution = null, $tracedSolutions = [])
        {
            $artefactsWithConsumers = [];

            // Get all artefacts of the solution
            foreach($this->artefaktRepository->getArtefactTypes() as $ag) {
                $getter = "getInput".$ag;
                $getterIn = "get".$ag;

                if($solution->$getter()->count() > 0) {
                    foreach($solution->$getter() as $inputArtefact) {
                        $obj = $inputArtefact->$getterIn()->current();
                        if($obj && !in_array(['artefact' => $obj, 'solution' => $solution], $artefactsWithConsumers)) {
                            $artefactsWithConsumers[] = [
                                'artefact' => $obj,
                                'solution' => $solution
                            ];
                        }    
                    }
                }     
            }

            // Register solution after getting all artefacts (avoid recursion)
            $tracedSolutions[] = $solution;

            foreach($artefactsWithConsumers as $artefactWithConsumer) {
                // Get producer of artefact 
                $artefactProducingSolution = $this->artefaktRepository->getArtefactProducer($artefactWithConsumer['artefact']); 
                
                /*
                // DEV
                if($artefactProducingSolution) {
                    echo $artefactProducingSolution->getTeilprojektnummer() . "<br>";
                }  else {
                    echo "Producer of ".$artefactWithConsumer['artefact']->getBezeichnung() . " is null <br>";
                }
                */
                
                if($artefactProducingSolution && !in_array($artefactProducingSolution, $tracedSolutions)) {
                    // Solution is not traced - get artefacts of solution
                    $tracedSolutions[] = $artefactProducingSolution;
                    $inputArtefactsOfProducingSolution = $this->getInputArtefacts($artefactProducingSolution, $tracedSolutions);

                    // Merge artefacts with existing objects
                    $artefactsWithConsumers = array_merge($artefactsWithConsumers, $inputArtefactsOfProducingSolution);
                } else {
                    // Solution is already traced - ignore it
                }
            }

            return $artefactsWithConsumers;
        } 

        public function getOutputArtefacts($solution, $onlyOutcome = false)
        {
            $artefacts = [];

            foreach($this->artefaktRepository->getArtefactTypes() as $ag) {
                $getter = "getOutput".$ag;
                $getterIn = "get".$ag;

                if($solution->$getter()->count() > 0) {
                    foreach($solution->$getter() as $outputArtefact) {
                        if(!($onlyOutcome === true && $outputArtefact->getIstOutcome() == 0)) {
                            $artefacts[] = $outputArtefact->$getterIn()->current();  
                        }
                    }
                } 
            }

            return $artefacts;   
        }
    }
?>