<?php
class FluidCache_WiseDocasysBackend_Modeler_layout_Modeler_4f916e1bf831613937471ca18047907ede6686c3 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="stylesheet" type="text/css" href="sysext/t3skin/stylesheets/sprites/t3skin.css?1507965001" media="all">
        <link rel="stylesheet" type="text/css" href="sysext/t3skin/Resources/Public/Css/backend.css?1507964998" media="all">  
        <link rel="stylesheet" type="text/css" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments1 = array();
$arguments1['path'] = 'StyleSheets/Module.css';
$arguments1['extensionName'] = NULL;
$arguments1['absolute'] = false;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '" media="all">
        
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper
$arguments3 = array();
$arguments3['expression'] = $currentVariableContainer->getOrNull('language');
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output5 = '';

$output5 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments6 = array();
$arguments6['value'] = 'BPMN';
$arguments6['default'] = false;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output8 = '';

$output8 .= '
                <link rel="stylesheet" type="text/css" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments9 = array();
$arguments9['path'] = 'BpmnJs/assets/diagram-js.css';
$arguments9['extensionName'] = NULL;
$arguments9['absolute'] = false;
$renderChildrenClosure10 = function() {return NULL;};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '" media="all">
                <link rel="stylesheet" type="text/css" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments11 = array();
$arguments11['path'] = 'BpmnJs/assets/bpmn-font/css/bpmn-embedded.css';
$arguments11['extensionName'] = NULL;
$arguments11['absolute'] = false;
$renderChildrenClosure12 = function() {return NULL;};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output8 .= '" media="all">
    
                <script src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments13 = array();
$arguments13['path'] = 'BpmnJs/bpmn-modeler.development.js';
$arguments13['extensionName'] = NULL;
$arguments13['absolute'] = false;
$renderChildrenClosure14 = function() {return NULL;};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output8 .= '"></script>
            ';
return $output8;
};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments15 = array();
$arguments15['value'] = 'CMMN';
$arguments15['default'] = false;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output17 = '';

$output17 .= '
                <link rel="stylesheet" type="text/css" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments18 = array();
$arguments18['path'] = 'CmmnJs/assets/diagram-js.css';
$arguments18['extensionName'] = NULL;
$arguments18['absolute'] = false;
$renderChildrenClosure19 = function() {return NULL;};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '" media="all">
                <link rel="stylesheet" type="text/css" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments20 = array();
$arguments20['path'] = 'CmmnJs/assets/cmmn-font/css/cmmn.css';
$arguments20['extensionName'] = NULL;
$arguments20['absolute'] = false;
$renderChildrenClosure21 = function() {return NULL;};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output17 .= '" media="all">

                <script src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments22 = array();
$arguments22['path'] = 'CmmnJs/cmmn-modeler.development.js';
$arguments22['extensionName'] = NULL;
$arguments22['absolute'] = false;
$renderChildrenClosure23 = function() {return NULL;};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output17 .= '"></script>
            ';
return $output17;
};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output5 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments24 = array();
$arguments24['value'] = 'DMN';
$arguments24['default'] = false;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output26 = '';

$output26 .= '
                <link rel="stylesheet" type="text/css" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments27 = array();
$arguments27['path'] = 'DmnJs/assets/diagram-js.css';
$arguments27['extensionName'] = NULL;
$arguments27['absolute'] = false;
$renderChildrenClosure28 = function() {return NULL;};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '" media="all">
                <link rel="stylesheet" type="text/css" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments29 = array();
$arguments29['path'] = 'DmnJs/assets/dmn-js-drd.css';
$arguments29['extensionName'] = NULL;
$arguments29['absolute'] = false;
$renderChildrenClosure30 = function() {return NULL;};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output26 .= '" media="all">
                <link rel="stylesheet" type="text/css" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments31 = array();
$arguments31['path'] = 'DmnJs/assets/dmn-js-decision-table.css';
$arguments31['extensionName'] = NULL;
$arguments31['absolute'] = false;
$renderChildrenClosure32 = function() {return NULL;};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output26 .= '" media="all">
                <link rel="stylesheet" type="text/css" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments33 = array();
$arguments33['path'] = 'DmnJs/assets/dmn-js-decision-table-controls.css';
$arguments33['extensionName'] = NULL;
$arguments33['absolute'] = false;
$renderChildrenClosure34 = function() {return NULL;};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output26 .= '" media="all">
                <link rel="stylesheet" type="text/css" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments35 = array();
$arguments35['path'] = 'DmnJs/assets/dmn-js-literal-expression.css';
$arguments35['extensionName'] = NULL;
$arguments35['absolute'] = false;
$renderChildrenClosure36 = function() {return NULL;};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output26 .= '" media="all">
                <link rel="stylesheet" type="text/css" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments37 = array();
$arguments37['path'] = 'DmnJs/assets/dmn-font/css/dmn.css';
$arguments37['extensionName'] = NULL;
$arguments37['absolute'] = false;
$renderChildrenClosure38 = function() {return NULL;};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output26 .= '" media="all">
            
                <script src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments39 = array();
$arguments39['path'] = 'DmnJs/dmn-modeler.development.js';
$arguments39['extensionName'] = NULL;
$arguments39['absolute'] = false;
$renderChildrenClosure40 = function() {return NULL;};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output26 .= '"></script>
            ';
return $output26;
};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output5 .= '
        ';
return $output5;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
        <script src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments41 = array();
$arguments41['path'] = 'JavaScript/jquery-3.3.1.min.js';
$arguments41['extensionName'] = NULL;
$arguments41['absolute'] = false;
$renderChildrenClosure42 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output0 .= '"></script>
        <script src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments43 = array();
$arguments43['path'] = 'JavaScript/Module.js';
$arguments43['extensionName'] = NULL;
$arguments43['absolute'] = false;
$renderChildrenClosure44 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output0 .= '"></script>
    </head>                                                                                
    <body>
        <div class="module">
            <div class="module-docheader">
                <div class="typo3-docheader-functions">
                    <div class="module-docheader-bar module-docheader-bar-navigation">
                        <div class="module-docheader-bar-column-left">
                            <div class="btn-toolbar">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments45 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments46 = array();
$arguments46['action'] = 'list';
$arguments46['arguments'] = array (
);
$arguments46['controller'] = NULL;
$arguments46['extensionName'] = NULL;
$arguments46['pluginName'] = NULL;
$arguments46['pageUid'] = NULL;
$arguments46['pageType'] = 0;
$arguments46['noCache'] = false;
$arguments46['noCacheHash'] = false;
$arguments46['section'] = '';
$arguments46['format'] = '';
$arguments46['linkAccessRestrictedPages'] = false;
$arguments46['additionalParams'] = array (
);
$arguments46['absolute'] = false;
$arguments46['addQueryString'] = false;
$arguments46['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments46['addQueryStringMethod'] = NULL;
$renderChildrenClosure47 = function() {return NULL;};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper48->setArguments($arguments46);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments45['uri'] = $viewHelper48->initializeArgumentsAndRender();
$arguments45['icon'] = 'actions-system-options-view';
$arguments45['title'] = 'Übersicht';
// Rendering Array
$array49 = array();
$array49['class'] = 'btn btn-default dx-labeled-buttons';
$arguments45['additionalAttributes'] = $array49;
$renderChildrenClosure50 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments45, $renderChildrenClosure50, $renderingContext);

$output0 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments51 = array();
// Rendering Boolean node
$arguments51['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('modelcontext'));
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output53 = '';

$output53 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments54 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments55 = array();
$arguments55['action'] = 'save';
$arguments55['arguments'] = array (
);
$arguments55['controller'] = NULL;
$arguments55['extensionName'] = NULL;
$arguments55['pluginName'] = NULL;
$arguments55['pageUid'] = NULL;
$arguments55['pageType'] = 0;
$arguments55['noCache'] = false;
$arguments55['noCacheHash'] = false;
$arguments55['section'] = '';
$arguments55['format'] = '';
$arguments55['linkAccessRestrictedPages'] = false;
$arguments55['additionalParams'] = array (
);
$arguments55['absolute'] = false;
$arguments55['addQueryString'] = false;
$arguments55['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments55['addQueryStringMethod'] = NULL;
$renderChildrenClosure56 = function() {return NULL;};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper57->setArguments($arguments55);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure56);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments54['uri'] = $viewHelper57->initializeArgumentsAndRender();
$arguments54['icon'] = 'actions-document-save';
$arguments54['title'] = 'Speichern';
// Rendering Array
$array58 = array();
$array58['class'] = 'btn btn-default modeler-save dx-labeled-buttons';
$arguments54['additionalAttributes'] = $array58;
$renderChildrenClosure59 = function() {return NULL;};

$output53 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments54, $renderChildrenClosure59, $renderingContext);

$output53 .= '
                                ';
return $output53;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output0 .= '
                            </div>
                        </div>
                        <div class="module-docheader-bar-column-right"></div>
                    </div>
                </div>
            </div>

            <div class="module-body">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments60 = array();
$arguments60['additionalAttributes'] = NULL;
$arguments60['data'] = NULL;
$arguments60['renderMode'] = NULL;
$arguments60['as'] = NULL;
$arguments60['class'] = NULL;
$arguments60['dir'] = NULL;
$arguments60['id'] = NULL;
$arguments60['lang'] = NULL;
$arguments60['style'] = NULL;
$arguments60['title'] = NULL;
$arguments60['accesskey'] = NULL;
$arguments60['tabindex'] = NULL;
$arguments60['onclick'] = NULL;
$arguments60['queueIdentifier'] = NULL;
$renderChildrenClosure61 = function() {return NULL;};
$viewHelper62 = $self->getViewHelper('$viewHelper62', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper62->setArguments($arguments60);
$viewHelper62->setRenderingContext($renderingContext);
$viewHelper62->setRenderChildrenClosure($renderChildrenClosure61);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output0 .= $viewHelper62->initializeArgumentsAndRender();

$output0 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments63 = array();
$arguments63['section'] = 'content';
$arguments63['partial'] = NULL;
$arguments63['arguments'] = array (
);
$arguments63['optional'] = false;
$renderChildrenClosure64 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output0 .= '
            </div>
        </div>
    </body>
</html>';


return $output0;
}


}
#1573137316    18270     