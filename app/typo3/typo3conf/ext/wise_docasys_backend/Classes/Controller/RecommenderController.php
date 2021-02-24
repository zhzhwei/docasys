<?php
    namespace Wise\WiseDocasysBackend\Controller;

    use TYPO3\CMS\Backend\Utility\BackendUtility;
    use TYPO3\CMS\Core\Messaging\FlashMessage;

    class RecommenderController extends \Wise\WiseDocasysBackend\Controller\FilterController
    {
        public function indexAction()
        {
            parent::indexAction(); 
            $this->view->assign('maxApplicationCases', array_fill(0, 1, null));  
        }
    }
?>
