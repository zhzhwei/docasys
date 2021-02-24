<?php
    namespace Wise\WiseDocasysBackend\ViewHelpers\Be;

    class DynamicArrayIndexViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper {
        /**
        * @param Array $array
        * @param Int $index
        * @param String $sub
        * @return String 
        */
        public function render($array = [], $index = 0, $sub = null) {
            $v = (isset($array[$index])) ? $array[$index] : null;
            if($sub) {
                $v = (isset($v[$sub])) ? $v[$sub] : null;
            }
            return $v;
        }
}