<?php
    namespace Wise\WiseDocasysBackend\Controller;

    use TYPO3\CMS\Backend\Utility\BackendUtility;
    use TYPO3\CMS\Core\Messaging\FlashMessage;

    class DashboardController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
    {
        /** @see ext_tables.php */ 
        var $_modulePrefix = 'WiseDocasysBackendDocasys_WiseDocasysBackendWise';
        
        public function overviewAction()
        {
            $moduleLinks = [
                'domainManager' => '',
                'solutionOverview' => '',
                'modeler' => '',
                'ruleEngine' => '',
                'recommender' => '',    
            ];
            
            foreach($moduleLinks as $mod => $v) {
                $moduleLinks[$mod] =  \TYPO3\CMS\Backend\Utility\BackendUtility::getModuleUrl($this->_modulePrefix.strtolower($mod));    
            }
            
            $this->view->assign('moduleLinks', $moduleLinks);
        }
    }
?>
