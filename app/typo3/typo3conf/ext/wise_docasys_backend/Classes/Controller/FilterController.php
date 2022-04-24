<?php
    namespace Wise\WiseDocasysBackend\Controller;

    use TYPO3\CMS\Backend\Utility\BackendUtility;
    use TYPO3\CMS\Core\Messaging\FlashMessage;

    class FilterController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
    {
        const MAX_DESIGN_TYPES = 3;
        const MAX_OBJECTIVES = 5;
        const MAX_APPLICATION_CASES = 3;

        /**
        * @var Array 
        */
        protected $operators = [
            0 => 'Ignorieren',
            1 => 'Gleich (=)',
            2 => 'Ungleich (!=)',
        ];

        /**
        * @var Array 
        */
        protected $booleanValues = [
            0 => 'Nein',
            1 => 'Ja',
        ];

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\GestaltungsartRepository
        * @inject
        */
        protected $gestaltungsartRepository;

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\ZielparameterRepository
        * @inject
        */
        protected $zielparameterRepository;

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\FachAnwendungsfallRepository
        * @inject
        */
        protected $fachAnwendungsfallRepository;

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\LoesungRepository
        * @inject
        */
        protected $loesungRepository;

        public function indexAction()
        {
            $request = $this->request->getArguments();
            $results = [];
            // echo '<pre>' , var_dump("1111111") , '</pre>';
            // echo '<pre>' , var_dump("1111111") , '</pre>';
            // echo '<pre>' , var_dump($request) , '</pre>';

            if(isset($request['filter-submit'])) {
                $results = $this->loesungRepository->getFilteredSolutions($request['filter-submit']);  
                if(count($results) == 0) {
                    $this->addFlashMessage(
                        'Such Ihrer Suchanfrage konnte keine Ergebnisse ermittelt werden.',
                        null,
                        \TYPO3\CMS\Core\Messaging\AbstractMessage::INFO 
                    ); 
                }  
            }
            
            $this->view->assignMultiple([
                'designtypes' => $this->gestaltungsartRepository->findAll(),
                'objectives' => $this->zielparameterRepository->findAll(),
                'applicationCases' => $this->fachAnwendungsfallRepository->findAll(),
                'operators' => $this->operators,
                'booleanValues' => $this->booleanValues,
                'maxDesigntypes' => array_fill(0, self::MAX_DESIGN_TYPES, null),
                'maxObjectives' => array_fill(0, self::MAX_OBJECTIVES, null),
                'maxApplicationCases' => array_fill(0, self::MAX_APPLICATION_CASES, null),
                'results' => (count($results) > 0) ? $results : null,
                'values' => (isset($request['filter-submit'])) ? $request['filter-submit'] : null,
            ]);
        }
    }
?>
