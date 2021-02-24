<?php
    namespace Wise\WiseDocasysBackend\ViewHelpers\Be;

    class EditLinkViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper {

        /**
        * @var string
        */
        protected $tagName = 'a';

        /**
        * Initialize arguments
        *
        * @return void
        */
        public function initializeArguments() {
            $this->registerUniversalTagAttributes();
            $this->registerTagAttribute('name', 'string', 'Specifies the name of an anchor');
            $this->registerTagAttribute('target', 'string', 'Specifies where to open the linked document');
        }

        /**
        * create a link to edit a record
        *
        * @param string $parameters Query string parameters
        * @param string $returnUrl URL to return to
        * @return string The <a> tag
        */
        public function render($parameters, $returnUrl = '') {
            $uri = \TYPO3\CMS\Backend\Utility\BackendUtility::getModuleUrl('record_edit').'&'.$parameters;
            if (!empty($returnUrl)) {
                $uri .= '&returnUrl='.rawurlencode($returnUrl);
            } else {
                $uri .= '&returnUrl='.rawurlencode(\TYPO3\CMS\Core\Utility\GeneralUtility::getIndpEnv('REQUEST_URI'));
            }
            $this->tag->addAttribute('href', $uri);
            $this->tag->setContent($this->renderChildren());
            $this->tag->forceClosingTag(true);
            return $this->tag->render();
        }
}