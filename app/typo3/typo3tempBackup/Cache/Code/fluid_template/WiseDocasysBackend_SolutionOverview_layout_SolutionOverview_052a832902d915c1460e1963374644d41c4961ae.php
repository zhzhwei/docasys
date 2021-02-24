<?php
class FluidCache_WiseDocasysBackend_SolutionOverview_layout_SolutionOverview_052a832902d915c1460e1963374644d41c4961ae extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

        <link rel="stylesheet" type="text/css" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments1 = array();
$arguments1['path'] = 'Bootstrap/bootstrap.min.css';
$arguments1['extensionName'] = NULL;
$arguments1['absolute'] = false;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '" media="all">
        <link rel="stylesheet" type="text/css" href="sysext/t3skin/stylesheets/sprites/t3skin.css?1507965001" media="all">
        <link rel="stylesheet" type="text/css" href="sysext/t3skin/Resources/Public/Css/backend.css?1507964998" media="all">  
        <link rel="stylesheet" type="text/css" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments3 = array();
$arguments3['path'] = 'StyleSheets/Module.css';
$arguments3['extensionName'] = NULL;
$arguments3['absolute'] = false;
$renderChildrenClosure4 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '" media="all">

        <script src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments5 = array();
$arguments5['path'] = 'JavaScript/jquery-3.3.1.min.js';
$arguments5['extensionName'] = NULL;
$arguments5['absolute'] = false;
$renderChildrenClosure6 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '"></script>
        <script src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments7 = array();
$arguments7['path'] = 'JavaScript/Module.js';
$arguments7['extensionName'] = NULL;
$arguments7['absolute'] = false;
$renderChildrenClosure8 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '"></script>
        <script src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments9 = array();
$arguments9['path'] = 'Bootstrap/bootstrap.min.js';
$arguments9['extensionName'] = NULL;
$arguments9['absolute'] = false;
$renderChildrenClosure10 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '"></script>
        <script src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments11 = array();
$arguments11['path'] = 'CytospaceJs/js_cytoscape.min.js';
$arguments11['extensionName'] = NULL;
$arguments11['absolute'] = false;
$renderChildrenClosure12 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '"></script>
        <script src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments13 = array();
$arguments13['path'] = 'ChartJs/dist/Chart.bundle.js';
$arguments13['extensionName'] = NULL;
$arguments13['absolute'] = false;
$renderChildrenClosure14 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '"></script>
        <script src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments15 = array();
$arguments15['path'] = 'ChartJs/samples/utils.js';
$arguments15['extensionName'] = NULL;
$arguments15['absolute'] = false;
$renderChildrenClosure16 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '"></script>
    </head>
    <body>
        <div class="module">
            <div class="module-docheader hidden-print">
                <div class="typo3-docheader-functions">
                    <div class="module-docheader-bar module-docheader-bar-navigation">
                        <div class="module-docheader-bar-column-left">
                            <div class="btn-toolbar">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments17 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments18 = array();
$arguments18['action'] = 'index';
$arguments18['arguments'] = array (
);
$arguments18['controller'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['pluginName'] = NULL;
$arguments18['pageUid'] = NULL;
$arguments18['pageType'] = 0;
$arguments18['noCache'] = false;
$arguments18['noCacheHash'] = false;
$arguments18['section'] = '';
$arguments18['format'] = '';
$arguments18['linkAccessRestrictedPages'] = false;
$arguments18['additionalParams'] = array (
);
$arguments18['absolute'] = false;
$arguments18['addQueryString'] = false;
$arguments18['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments18['addQueryStringMethod'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments17['uri'] = $viewHelper20->initializeArgumentsAndRender();
$arguments17['icon'] = 'actions-system-options-view';
$arguments17['title'] = 'Übersicht';
// Rendering Array
$array21 = array();
$array21['class'] = 'btn btn-default dx-labeled-buttons';
$arguments17['additionalAttributes'] = $array21;
$renderChildrenClosure22 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments17, $renderChildrenClosure22, $renderingContext);

$output0 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments23 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments24 = array();
$arguments24['action'] = 'referencemachine';
$arguments24['arguments'] = array (
);
$arguments24['controller'] = NULL;
$arguments24['extensionName'] = NULL;
$arguments24['pluginName'] = NULL;
$arguments24['pageUid'] = NULL;
$arguments24['pageType'] = 0;
$arguments24['noCache'] = false;
$arguments24['noCacheHash'] = false;
$arguments24['section'] = '';
$arguments24['format'] = '';
$arguments24['linkAccessRestrictedPages'] = false;
$arguments24['additionalParams'] = array (
);
$arguments24['absolute'] = false;
$arguments24['addQueryString'] = false;
$arguments24['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments24['addQueryStringMethod'] = NULL;
$renderChildrenClosure25 = function() {return NULL;};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper26->setArguments($arguments24);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments23['uri'] = $viewHelper26->initializeArgumentsAndRender();
$arguments23['icon'] = 'actions-view-table-expand';
$arguments23['title'] = 'Referenzmaschine';
// Rendering Array
$array27 = array();
$array27['class'] = 'btn btn-default dx-labeled-buttons';
$arguments23['additionalAttributes'] = $array27;
$renderChildrenClosure28 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments23, $renderChildrenClosure28, $renderingContext);

$output0 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments29 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments30 = array();
$arguments30['action'] = 'matrix';
$arguments30['arguments'] = array (
);
$arguments30['controller'] = NULL;
$arguments30['extensionName'] = NULL;
$arguments30['pluginName'] = NULL;
$arguments30['pageUid'] = NULL;
$arguments30['pageType'] = 0;
$arguments30['noCache'] = false;
$arguments30['noCacheHash'] = false;
$arguments30['section'] = '';
$arguments30['format'] = '';
$arguments30['linkAccessRestrictedPages'] = false;
$arguments30['additionalParams'] = array (
);
$arguments30['absolute'] = false;
$arguments30['addQueryString'] = false;
$arguments30['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments30['addQueryStringMethod'] = NULL;
$renderChildrenClosure31 = function() {return NULL;};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper32->setArguments($arguments30);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments29['uri'] = $viewHelper32->initializeArgumentsAndRender();
$arguments29['icon'] = 'actions-view-table-expand';
$arguments29['title'] = 'Anwendungsfälle';
// Rendering Array
$array33 = array();
$array33['class'] = 'btn btn-default dx-labeled-buttons';
$arguments29['additionalAttributes'] = $array33;
$renderChildrenClosure34 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments29, $renderChildrenClosure34, $renderingContext);

$output0 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments35 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments36 = array();
$arguments36['action'] = 'summary';
$arguments36['arguments'] = array (
);
$arguments36['controller'] = NULL;
$arguments36['extensionName'] = NULL;
$arguments36['pluginName'] = NULL;
$arguments36['pageUid'] = NULL;
$arguments36['pageType'] = 0;
$arguments36['noCache'] = false;
$arguments36['noCacheHash'] = false;
$arguments36['section'] = '';
$arguments36['format'] = '';
$arguments36['linkAccessRestrictedPages'] = false;
$arguments36['additionalParams'] = array (
);
$arguments36['absolute'] = false;
$arguments36['addQueryString'] = false;
$arguments36['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments36['addQueryStringMethod'] = NULL;
$renderChildrenClosure37 = function() {return NULL;};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper38->setArguments($arguments36);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments35['uri'] = $viewHelper38->initializeArgumentsAndRender();
$arguments35['icon'] = 'actions-view-table-expand';
$arguments35['title'] = 'Lösungen';
// Rendering Array
$array39 = array();
$array39['class'] = 'btn btn-default dx-labeled-buttons';
$arguments35['additionalAttributes'] = $array39;
$renderChildrenClosure40 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments35, $renderChildrenClosure40, $renderingContext);

$output0 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments41 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments42 = array();
$arguments42['action'] = 'examinations';
$arguments42['arguments'] = array (
);
$arguments42['controller'] = NULL;
$arguments42['extensionName'] = NULL;
$arguments42['pluginName'] = NULL;
$arguments42['pageUid'] = NULL;
$arguments42['pageType'] = 0;
$arguments42['noCache'] = false;
$arguments42['noCacheHash'] = false;
$arguments42['section'] = '';
$arguments42['format'] = '';
$arguments42['linkAccessRestrictedPages'] = false;
$arguments42['additionalParams'] = array (
);
$arguments42['absolute'] = false;
$arguments42['addQueryString'] = false;
$arguments42['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments42['addQueryStringMethod'] = NULL;
$renderChildrenClosure43 = function() {return NULL;};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper44->setArguments($arguments42);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments41['uri'] = $viewHelper44->initializeArgumentsAndRender();
$arguments41['icon'] = 'actions-view-table-expand';
$arguments41['title'] = 'Untersuchungen';
// Rendering Array
$array45 = array();
$array45['class'] = 'btn btn-default dx-labeled-buttons';
$arguments41['additionalAttributes'] = $array45;
$renderChildrenClosure46 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments41, $renderChildrenClosure46, $renderingContext);

$output0 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments47 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments48 = array();
$arguments48['action'] = 'network';
$arguments48['arguments'] = array (
);
$arguments48['controller'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['pluginName'] = NULL;
$arguments48['pageUid'] = NULL;
$arguments48['pageType'] = 0;
$arguments48['noCache'] = false;
$arguments48['noCacheHash'] = false;
$arguments48['section'] = '';
$arguments48['format'] = '';
$arguments48['linkAccessRestrictedPages'] = false;
$arguments48['additionalParams'] = array (
);
$arguments48['absolute'] = false;
$arguments48['addQueryString'] = false;
$arguments48['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments48['addQueryStringMethod'] = NULL;
$renderChildrenClosure49 = function() {return NULL;};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper50->setArguments($arguments48);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure49);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments47['uri'] = $viewHelper50->initializeArgumentsAndRender();
$arguments47['icon'] = 'actions-view-table-expand';
$arguments47['title'] = 'Input-Output-Netzwerk';
// Rendering Array
$array51 = array();
$array51['class'] = 'btn btn-default dx-labeled-buttons';
$arguments47['additionalAttributes'] = $array51;
$renderChildrenClosure52 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments47, $renderChildrenClosure52, $renderingContext);

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
$arguments53 = array();
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['renderMode'] = NULL;
$arguments53['as'] = NULL;
$arguments53['class'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$arguments53['queueIdentifier'] = NULL;
$renderChildrenClosure54 = function() {return NULL;};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper55->setArguments($arguments53);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output0 .= $viewHelper55->initializeArgumentsAndRender();

$output0 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments56 = array();
$arguments56['section'] = 'content';
$arguments56['partial'] = NULL;
$arguments56['arguments'] = array (
);
$arguments56['optional'] = false;
$renderChildrenClosure57 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output0 .= ' 
            </div>
        </div>
    </body>
</html>';


return $output0;
}


}
#1571146686    18386     