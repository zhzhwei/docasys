<?php
    namespace Wise\WiseDocasysBackend\Utility;

    class Form
    {
        public function floatFormat($input)
        {
            $s = '.';
            return number_format(floatval(str_replace(',', $s, $input)), 2, $s, ''); ;        
        }
    }
?>
