<?php
    namespace Wise\WiseDocasysBackend\Controller;

    use TYPO3\CMS\Backend\Utility\BackendUtility;
    use TYPO3\CMS\Core\Messaging\FlashMessage;

    class ModelerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
    {
        /**
        * @var Array
        */
        var $_config = [];

        /**
        * @var String 
        * 
        * Also used as file extension.
        */
        var $_mode = 'bpmn';
        
        /**
        * @var Array
        * 
        * All allowed extension types. 
        */
        var $_modelTypes = ['bpmn', 'cmmn', 'dmn'];
        
        public function __construct()
        {
            $this->_config = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['wise_docasys_backend']);
        }

        public function listAction()
        {
            $allModelTypes = [];
            foreach($this->_modelTypes as $mt) {
                $allModelTypes[] = [
                    'name' => strtoupper($mt),
                    'files' => $this->getFiles($mt)
                ];    
            }
            
            $this->view->assign('language', strtoupper($this->_mode));
            $this->view->assign('modelcontext', false);
            $this->view->assign('files', $this->getFiles());
            $this->view->assign('modelTypes', $allModelTypes);
        }

        public function addAction()
        {
            $type = $this->request->getArgument('type'); 
            if($type) {
                $this->setModeByFilename('.'.$type);
            }
            
            $this->view->assign('language', strtoupper($this->_mode));
            $this->view->assign('modelcontext', true);
        }

        public function editAction()
        {
            $file = base64_decode($this->request->getArgument('f')); 
            $this->setModeByFilename($file);
            
            // File exists?
            $fileExists = false;
            foreach($this->getFiles() as $modelFile) {
                if($modelFile['filename'] == $file) {
                    $fileExists = true;
                    $modelFile = $file;
                    break;    
                }
            }
            
            if($fileExists === false) {
                $this->addFlashMessage('Die Datei existiert nicht.', null, \TYPO3\CMS\Core\Messaging\FlashMessage::ERROR);
                $this->redirect('list');    
            }
            
            $modelFilePath = '../'.$this->_config['storage'].$this->_mode.'/'.$modelFile;
            
            $this->view->assign('language', strtoupper($this->_mode));
            $this->view->assign('modelcontext', true);
            $this->view->assign('xmlFile', base64_encode($modelFile));
            $this->view->assign('xmlFilePath', $modelFilePath);
        }
        
        public function updateAction()
        {
            $xmlSaved = false;
            $filename = '';
            
            $args = $this->request->getArgument('save-xml');
            if($args) {
                if(isset($args['xml'])) {
                    $xml = base64_decode($args['xml']);
                    $filename = base64_decode($args['filename']);
                    $this->setModeByFilename($filename);
                    $xmlSaved = \TYPO3\CMS\Core\Utility\GeneralUtility::writeFile(\TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($this->_config['storage'].$this->_mode.'/'.$filename), utf8_encode($xml));
                }    
            }
            
            if($xmlSaved === true) {
                $this->addFlashMessage('Das Modell wurde aktualisiert.');
            } else {
                $this->addFlashMessage('Das Modell konnte nicht aktualisiert werden', null, \TYPO3\CMS\Core\Messaging\FlashMessage::ERROR);
            }  
            $this->redirect('edit', null, null, ['f' => base64_encode($filename), 'nc' => time()]);    
        }
        
        public function removeAction()
        {
            $filename = base64_decode($this->request->getArgument('f'));
            $this->setModeByFilename($filename);
            $t = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($this->_config['storage'].$this->_mode.'/'.$filename);
            if(unlink($t)) {
                $this->addFlashMessage('Das Modell wurde entfernt.');
            } else {
                $this->addFlashMessage('Das Modell konnte nicht entfernt werden.');
            }
            $this->redirect('list');            
        }

        public function saveAction()
        {
            $xmlSaved = false;
            $args = $this->request->getArgument('save-xml');
            
            if($args) {
                if(in_array($args['type'], $this->_modelTypes)) {
                    $this->_mode = $args['type']; 
                    
                    if(isset($args['xml'])) {
                        $xml = base64_decode($args['xml']);
                        $filename = strtolower($this->cleanFilename($args['prefix']) .'_'. $this->cleanFilename($args['title']) .'_'. time().'.'.$this->_mode);
                        $xmlSaved = \TYPO3\CMS\Core\Utility\GeneralUtility::writeFile(\TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($this->_config['storage'].$this->_mode.'/'.$filename), utf8_encode($xml));
                    }  
                }
            }

            if($xmlSaved === true) {
                $this->addFlashMessage('Die Datei '.$filename. ' wurde erfolgreich gespeichert.');
                $this->redirect('edit', null, null, ['f' => base64_encode($filename), 'nc' => time()]);
                
            } else {
                $this->addFlashMessage('Die Datei konnte nicht gespeichert werden.', null, \TYPO3\CMS\Core\Messaging\FlashMessage::ERROR);
                $this->redirect('add');
            }   
        }

        private function cleanFilename($string)
        {
            $string = str_replace(' ', '-', $string); 
            return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
        }
        
        private function getFiles($modelType = '')
        {
            $modelType = ($modelType == '') ? $this->_mode : $modelType;
            $files = [];
            
            $modelFiles = \TYPO3\CMS\Core\Utility\GeneralUtility::getFilesInDir( \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($this->_config['storage'].$modelType.'/') );
            sort($modelFiles);
            
            foreach($modelFiles as $modelFile) {
                $files[] = [
                    'filename' => $modelFile,
                    'hash' => base64_encode($modelFile)
                ];    
            }
            
            return $files;
        }
        
        private function setModeByFilename($filename) { 
            $file = \TYPO3\CMS\Core\Utility\GeneralUtility::split_fileref(strtolower($filename));
            if(in_array($file['fileext'], $this->_modelTypes)) { 
                $this->_mode = $file['fileext'];
            } 
            return;
        }
    }
?>
