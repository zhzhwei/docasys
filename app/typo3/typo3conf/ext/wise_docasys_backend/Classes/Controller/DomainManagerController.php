<?php
    namespace Wise\WiseDocasysBackend\Controller;

    use TYPO3\CMS\Backend\Utility\BackendUtility;
    use TYPO3\CMS\Core\Messaging\FlashMessage;

    class DomainManagerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
    {
        /**
        * @var Array
        */
        var $_config = []; 
        var $_pageTreeDepth = 10;                           

        public function __construct()
        {
            $this->_config = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['wise_docasys_backend']);
        }

        public function overviewAction()
        {
            if(intval($this->_config['rootPid']) < 1) {
                return '';    
            }

            $routingUriBuilder = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Backend\Routing\UriBuilder');
            $tree = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Backend\Tree\View\PageTreeView');
            $tree->init();
            $tree->getTree(
                intval($this->_config['rootPid']),
                $this->_pageTreeDepth,
                ''
            );

            $pagelinks = [];
            foreach($tree->tree as $i => $page) { 
                $tree->tree[$i]['pagelink'] = $routingUriBuilder->buildUriFromModule('web_list', ['id' => $page['row']['uid']]);     
                $tree->tree[$i]['level'] = ($this->_pageTreeDepth - $page['invertedDepth']) * 10;     
            }
            
            $this->view->assign('tree', $tree->tree);
        }
    }
?>
