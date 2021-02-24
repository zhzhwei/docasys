<?php
    namespace Wise\WiseDocasysDomainDesigner\Controller;

    use TYPO3\CMS\Backend\Utility\BackendUtility;
    use TYPO3\CMS\Core\Messaging\FlashMessage;

    class DomainController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
    {
        public function dashboardAction()
        {
            echo "hello dashboard";
            die();
        }
    }
?>
