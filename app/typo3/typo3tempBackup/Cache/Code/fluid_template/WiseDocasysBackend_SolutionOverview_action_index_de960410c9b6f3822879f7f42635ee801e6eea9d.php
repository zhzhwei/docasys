<?php
class FluidCache_WiseDocasysBackend_SolutionOverview_action_index_de960410c9b6f3822879f7f42635ee801e6eea9d extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'SolutionOverview';
}
public function hasLayout() {
return TRUE;
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
    <script>
        $(document).ready(function(){
            $(\'[data-toggle="tooltip"]\').tooltip(); 

            $(\'#reference-machine-image-displayer\').click(function() {
                $(this).toggleClass(\'active\');
                $(\'.reference-machine-link a.circle-link\').toggleClass(\'active\'); 
            });  
        });
    </script>
    <h1>DOCASYS - Documentation and Assistance System</h1>
    <p><a href="#" class="btn btn-secondary" id="reference-machine-image-displayer">Alle einblenden</a></p>
    <h2>L&ouml;sungs&uuml;bersicht</h2>
    <div class="reference-machine-image">
        <div class="reference-machine-image-container" style="background-image: url(\'{f:uri.resource(path: \'Images/Machine/wzm-struktur-v1-1.png\')}\')">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments1 = array();
$arguments1['each'] = $currentVariableContainer->getOrNull('componentTypes');
$arguments1['as'] = 'ct';
$arguments1['iteration'] = 'j';
$arguments1['key'] = '';
$arguments1['reverse'] = false;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
                <div class="reference-machine-link" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('ct'), 'obj.bezeichnung', $renderingContext);
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = NULL;
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() {return NULL;};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output3 .= (!is_string($value6) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments4['encoding'] !== NULL ? $arguments4['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments4['doubleEncode']));

$output3 .= '" data-toggle="tooltip" style="margin-top: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('ct'), 'obj.aufVisualisierungY', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = NULL;
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() {return NULL;};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output3 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments7['encoding'] !== NULL ? $arguments7['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments7['doubleEncode']));

$output3 .= 'px; margin-left: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('ct'), 'obj.aufVisualisierungX', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = NULL;
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() {return NULL;};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output3 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments10['encoding'] !== NULL ? $arguments10['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments10['doubleEncode']));

$output3 .= 'px; width: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('ct'), 'obj.aufVisualisierungBreite', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = NULL;
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() {return NULL;};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output3 .= (!is_string($value15) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments13['encoding'] !== NULL ? $arguments13['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments13['doubleEncode']));

$output3 .= 'px; height: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('ct'), 'obj.aufVisualisierungHoehe', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = NULL;
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() {return NULL;};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output3 .= (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments16['encoding'] !== NULL ? $arguments16['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments16['doubleEncode']));

$output3 .= 'px; z-index: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments19 = array();
$arguments19['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('j'), 'index', $renderingContext);
$arguments19['keepQuotes'] = false;
$arguments19['encoding'] = NULL;
$arguments19['doubleEncode'] = true;
$renderChildrenClosure20 = function() {return NULL;};
$value21 = ($arguments19['value'] !== NULL ? $arguments19['value'] : $renderChildrenClosure20());

$output3 .= (!is_string($value21) ? $value21 : htmlspecialchars($value21, ($arguments19['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments19['encoding'] !== NULL ? $arguments19['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments19['doubleEncode']));

$output3 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments22 = array();
$arguments22['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('ct'), 'solutions', $renderingContext);
$arguments22['as'] = 'solution';
$arguments22['key'] = '';
$arguments22['reverse'] = false;
$arguments22['iteration'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output24 = '';

$output24 .= '
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments25 = array();
$arguments25['action'] = 'summary';
// Rendering Array
$array26 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments27 = array();
$arguments27['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'uid', $renderingContext);
$arguments27['keepQuotes'] = false;
$arguments27['encoding'] = NULL;
$arguments27['doubleEncode'] = true;
$renderChildrenClosure28 = function() {return NULL;};
$value29 = ($arguments27['value'] !== NULL ? $arguments27['value'] : $renderChildrenClosure28());
$array26['solution'] = (!is_string($value29) ? $value29 : htmlspecialchars($value29, ($arguments27['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments27['encoding'] !== NULL ? $arguments27['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments27['doubleEncode']));
$arguments25['arguments'] = $array26;
$arguments25['controller'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['pluginName'] = NULL;
$arguments25['pageUid'] = NULL;
$arguments25['pageType'] = 0;
$arguments25['noCache'] = false;
$arguments25['noCacheHash'] = false;
$arguments25['section'] = '';
$arguments25['format'] = '';
$arguments25['linkAccessRestrictedPages'] = false;
$arguments25['additionalParams'] = array (
);
$arguments25['absolute'] = false;
$arguments25['addQueryString'] = false;
$arguments25['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments25['addQueryStringMethod'] = NULL;
$renderChildrenClosure30 = function() {return NULL;};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper31->setArguments($arguments25);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output24 .= $viewHelper31->initializeArgumentsAndRender();

$output24 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments32 = array();
$arguments32['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'loesungsbezeichnung', $renderingContext);
$arguments32['keepQuotes'] = false;
$arguments32['encoding'] = NULL;
$arguments32['doubleEncode'] = true;
$renderChildrenClosure33 = function() {return NULL;};
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());

$output24 .= (!is_string($value34) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments32['encoding'] !== NULL ? $arguments32['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments32['doubleEncode']));

$output24 .= '" class="circle-link">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments35 = array();
$arguments35['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'teilprojektnummer', $renderingContext);
$arguments35['keepQuotes'] = false;
$arguments35['encoding'] = NULL;
$arguments35['doubleEncode'] = true;
$renderChildrenClosure36 = function() {return NULL;};
$value37 = ($arguments35['value'] !== NULL ? $arguments35['value'] : $renderChildrenClosure36());

$output24 .= (!is_string($value37) ? $value37 : htmlspecialchars($value37, ($arguments35['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments35['encoding'] !== NULL ? $arguments35['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments35['doubleEncode']));

$output24 .= '</a>    
                    ';
return $output24;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output3 .= '
                </div>
            ';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
            <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments38 = array();
$arguments38['path'] = 'Images/Machine/wzm-struktur-v1-1.png';
$arguments38['extensionName'] = NULL;
$arguments38['absolute'] = false;
$renderChildrenClosure39 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output0 .= '">    
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="dx-user-head">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments40 = array();
$arguments40['identifier'] = 'content-special-menu';
$arguments40['size'] = 'large';
$arguments40['overlay'] = NULL;
$arguments40['state'] = 'default';
$arguments40['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure41 = function() {return NULL;};

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output0 .= '
                <h1>Strukturen</h1>
            </div>
            <div class="list-group">   
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments42 = array();
$arguments42['action'] = 'referencemachine';
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

$output0 .= $viewHelper44->initializeArgumentsAndRender();

$output0 .= '" class="list-group-item" title="Referenzmaschine">
                    <h4 class="list-group-item-heading">Referenzmaschine</h4>
                    <p class="list-group-item-text">Struktur aller Maschinenkomponenten und die derzeit daran wirkenden L&ouml;sungen</p>
                </a>
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments45 = array();
$arguments45['action'] = 'matrix';
$arguments45['arguments'] = array (
);
$arguments45['controller'] = NULL;
$arguments45['extensionName'] = NULL;
$arguments45['pluginName'] = NULL;
$arguments45['pageUid'] = NULL;
$arguments45['pageType'] = 0;
$arguments45['noCache'] = false;
$arguments45['noCacheHash'] = false;
$arguments45['section'] = '';
$arguments45['format'] = '';
$arguments45['linkAccessRestrictedPages'] = false;
$arguments45['additionalParams'] = array (
);
$arguments45['absolute'] = false;
$arguments45['addQueryString'] = false;
$arguments45['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments45['addQueryStringMethod'] = NULL;
$renderChildrenClosure46 = function() {return NULL;};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper47->setArguments($arguments45);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure46);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output0 .= $viewHelper47->initializeArgumentsAndRender();

$output0 .= '" class="list-group-item" title="Anwendungsf&auml;lle">
                    <h4 class="list-group-item-heading">Anwendungsf&auml;lle</h4>
                    <p class="list-group-item-text">Anwendungsf&auml;lle und ihre repr&auml;sentierenden Lastf&auml;lle in einer Matrix</p>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="dx-user-head">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments48 = array();
$arguments48['identifier'] = 'content-plugin';
$arguments48['size'] = 'large';
$arguments48['overlay'] = NULL;
$arguments48['state'] = 'default';
$arguments48['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure49 = function() {return NULL;};

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output0 .= '
                <h1>L&ouml;sungen</h1>
            </div>
            <div class="list-group">   
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments50 = array();
$arguments50['action'] = 'summary';
$arguments50['arguments'] = array (
);
$arguments50['controller'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['pluginName'] = NULL;
$arguments50['pageUid'] = NULL;
$arguments50['pageType'] = 0;
$arguments50['noCache'] = false;
$arguments50['noCacheHash'] = false;
$arguments50['section'] = '';
$arguments50['format'] = '';
$arguments50['linkAccessRestrictedPages'] = false;
$arguments50['additionalParams'] = array (
);
$arguments50['absolute'] = false;
$arguments50['addQueryString'] = false;
$arguments50['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments50['addQueryStringMethod'] = NULL;
$renderChildrenClosure51 = function() {return NULL;};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper52->setArguments($arguments50);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output0 .= $viewHelper52->initializeArgumentsAndRender();

$output0 .= '" class="list-group-item" title="L&ouml;sungen">
                    <h4 class="list-group-item-heading">L&ouml;sungen</h4>
                    <p class="list-group-item-text">Detaillierte Informationen zu jeder L&ouml;sung</p>
                </a>
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments53 = array();
$arguments53['action'] = 'network';
$arguments53['arguments'] = array (
);
$arguments53['controller'] = NULL;
$arguments53['extensionName'] = NULL;
$arguments53['pluginName'] = NULL;
$arguments53['pageUid'] = NULL;
$arguments53['pageType'] = 0;
$arguments53['noCache'] = false;
$arguments53['noCacheHash'] = false;
$arguments53['section'] = '';
$arguments53['format'] = '';
$arguments53['linkAccessRestrictedPages'] = false;
$arguments53['additionalParams'] = array (
);
$arguments53['absolute'] = false;
$arguments53['addQueryString'] = false;
$arguments53['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments53['addQueryStringMethod'] = NULL;
$renderChildrenClosure54 = function() {return NULL;};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper55->setArguments($arguments53);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output0 .= $viewHelper55->initializeArgumentsAndRender();

$output0 .= '" class="list-group-item" title="Input-Output-Netzwerk">
                    <h4 class="list-group-item-heading">Input-Output-Netzwerk</h4>
                    <p class="list-group-item-text">Darstellung aller Abh&auml;ngigkeiten und Austauschbeziehungen zwischen L&ouml;sungen</p>
                </a>
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments56 = array();
$arguments56['action'] = 'examinations';
$arguments56['arguments'] = array (
);
$arguments56['controller'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['pluginName'] = NULL;
$arguments56['pageUid'] = NULL;
$arguments56['pageType'] = 0;
$arguments56['noCache'] = false;
$arguments56['noCacheHash'] = false;
$arguments56['section'] = '';
$arguments56['format'] = '';
$arguments56['linkAccessRestrictedPages'] = false;
$arguments56['additionalParams'] = array (
);
$arguments56['absolute'] = false;
$arguments56['addQueryString'] = false;
$arguments56['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments56['addQueryStringMethod'] = NULL;
$renderChildrenClosure57 = function() {return NULL;};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper58->setArguments($arguments56);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure57);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output0 .= $viewHelper58->initializeArgumentsAndRender();

$output0 .= '" class="list-group-item" title="Untersuchungen">
                    <h4 class="list-group-item-heading">Untersuchungen</h4>
                    <p class="list-group-item-text">Dokumentation von Untersuchungen an Demonstratoren, Ergebnisfilterung und Visualisierung der Ergebnisentwicklung</p>
                </a>
            </div>
        </div>    
    </div>

    <!-- Skizze Entwurf Empfehlungssystem > RECOMMENDER -->
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output59 = '';

$output59 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments60 = array();
$arguments60['name'] = 'SolutionOverview';
$renderChildrenClosure61 = function() {return NULL;};
$viewHelper62 = $self->getViewHelper('$viewHelper62', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper62->setArguments($arguments60);
$viewHelper62->setRenderingContext($renderingContext);
$viewHelper62->setRenderChildrenClosure($renderChildrenClosure61);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output59 .= $viewHelper62->initializeArgumentsAndRender();

$output59 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments63 = array();
$arguments63['name'] = 'content';
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output65 = '';

$output65 .= '
    <script>
        $(document).ready(function(){
            $(\'[data-toggle="tooltip"]\').tooltip(); 

            $(\'#reference-machine-image-displayer\').click(function() {
                $(this).toggleClass(\'active\');
                $(\'.reference-machine-link a.circle-link\').toggleClass(\'active\'); 
            });  
        });
    </script>
    <h1>DOCASYS - Documentation and Assistance System</h1>
    <p><a href="#" class="btn btn-secondary" id="reference-machine-image-displayer">Alle einblenden</a></p>
    <h2>L&ouml;sungs&uuml;bersicht</h2>
    <div class="reference-machine-image">
        <div class="reference-machine-image-container" style="background-image: url(\'{f:uri.resource(path: \'Images/Machine/wzm-struktur-v1-1.png\')}\')">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments66 = array();
$arguments66['each'] = $currentVariableContainer->getOrNull('componentTypes');
$arguments66['as'] = 'ct';
$arguments66['iteration'] = 'j';
$arguments66['key'] = '';
$arguments66['reverse'] = false;
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output68 = '';

$output68 .= '
                <div class="reference-machine-link" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments69 = array();
$arguments69['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('ct'), 'obj.bezeichnung', $renderingContext);
$arguments69['keepQuotes'] = false;
$arguments69['encoding'] = NULL;
$arguments69['doubleEncode'] = true;
$renderChildrenClosure70 = function() {return NULL;};
$value71 = ($arguments69['value'] !== NULL ? $arguments69['value'] : $renderChildrenClosure70());

$output68 .= (!is_string($value71) ? $value71 : htmlspecialchars($value71, ($arguments69['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments69['encoding'] !== NULL ? $arguments69['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments69['doubleEncode']));

$output68 .= '" data-toggle="tooltip" style="margin-top: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments72 = array();
$arguments72['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('ct'), 'obj.aufVisualisierungY', $renderingContext);
$arguments72['keepQuotes'] = false;
$arguments72['encoding'] = NULL;
$arguments72['doubleEncode'] = true;
$renderChildrenClosure73 = function() {return NULL;};
$value74 = ($arguments72['value'] !== NULL ? $arguments72['value'] : $renderChildrenClosure73());

$output68 .= (!is_string($value74) ? $value74 : htmlspecialchars($value74, ($arguments72['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments72['encoding'] !== NULL ? $arguments72['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments72['doubleEncode']));

$output68 .= 'px; margin-left: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments75 = array();
$arguments75['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('ct'), 'obj.aufVisualisierungX', $renderingContext);
$arguments75['keepQuotes'] = false;
$arguments75['encoding'] = NULL;
$arguments75['doubleEncode'] = true;
$renderChildrenClosure76 = function() {return NULL;};
$value77 = ($arguments75['value'] !== NULL ? $arguments75['value'] : $renderChildrenClosure76());

$output68 .= (!is_string($value77) ? $value77 : htmlspecialchars($value77, ($arguments75['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments75['encoding'] !== NULL ? $arguments75['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments75['doubleEncode']));

$output68 .= 'px; width: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments78 = array();
$arguments78['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('ct'), 'obj.aufVisualisierungBreite', $renderingContext);
$arguments78['keepQuotes'] = false;
$arguments78['encoding'] = NULL;
$arguments78['doubleEncode'] = true;
$renderChildrenClosure79 = function() {return NULL;};
$value80 = ($arguments78['value'] !== NULL ? $arguments78['value'] : $renderChildrenClosure79());

$output68 .= (!is_string($value80) ? $value80 : htmlspecialchars($value80, ($arguments78['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments78['encoding'] !== NULL ? $arguments78['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments78['doubleEncode']));

$output68 .= 'px; height: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments81 = array();
$arguments81['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('ct'), 'obj.aufVisualisierungHoehe', $renderingContext);
$arguments81['keepQuotes'] = false;
$arguments81['encoding'] = NULL;
$arguments81['doubleEncode'] = true;
$renderChildrenClosure82 = function() {return NULL;};
$value83 = ($arguments81['value'] !== NULL ? $arguments81['value'] : $renderChildrenClosure82());

$output68 .= (!is_string($value83) ? $value83 : htmlspecialchars($value83, ($arguments81['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments81['encoding'] !== NULL ? $arguments81['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments81['doubleEncode']));

$output68 .= 'px; z-index: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments84 = array();
$arguments84['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('j'), 'index', $renderingContext);
$arguments84['keepQuotes'] = false;
$arguments84['encoding'] = NULL;
$arguments84['doubleEncode'] = true;
$renderChildrenClosure85 = function() {return NULL;};
$value86 = ($arguments84['value'] !== NULL ? $arguments84['value'] : $renderChildrenClosure85());

$output68 .= (!is_string($value86) ? $value86 : htmlspecialchars($value86, ($arguments84['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments84['encoding'] !== NULL ? $arguments84['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments84['doubleEncode']));

$output68 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments87 = array();
$arguments87['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('ct'), 'solutions', $renderingContext);
$arguments87['as'] = 'solution';
$arguments87['key'] = '';
$arguments87['reverse'] = false;
$arguments87['iteration'] = NULL;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output89 = '';

$output89 .= '
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments90 = array();
$arguments90['action'] = 'summary';
// Rendering Array
$array91 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments92 = array();
$arguments92['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'uid', $renderingContext);
$arguments92['keepQuotes'] = false;
$arguments92['encoding'] = NULL;
$arguments92['doubleEncode'] = true;
$renderChildrenClosure93 = function() {return NULL;};
$value94 = ($arguments92['value'] !== NULL ? $arguments92['value'] : $renderChildrenClosure93());
$array91['solution'] = (!is_string($value94) ? $value94 : htmlspecialchars($value94, ($arguments92['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments92['encoding'] !== NULL ? $arguments92['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments92['doubleEncode']));
$arguments90['arguments'] = $array91;
$arguments90['controller'] = NULL;
$arguments90['extensionName'] = NULL;
$arguments90['pluginName'] = NULL;
$arguments90['pageUid'] = NULL;
$arguments90['pageType'] = 0;
$arguments90['noCache'] = false;
$arguments90['noCacheHash'] = false;
$arguments90['section'] = '';
$arguments90['format'] = '';
$arguments90['linkAccessRestrictedPages'] = false;
$arguments90['additionalParams'] = array (
);
$arguments90['absolute'] = false;
$arguments90['addQueryString'] = false;
$arguments90['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments90['addQueryStringMethod'] = NULL;
$renderChildrenClosure95 = function() {return NULL;};
$viewHelper96 = $self->getViewHelper('$viewHelper96', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper96->setArguments($arguments90);
$viewHelper96->setRenderingContext($renderingContext);
$viewHelper96->setRenderChildrenClosure($renderChildrenClosure95);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output89 .= $viewHelper96->initializeArgumentsAndRender();

$output89 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments97 = array();
$arguments97['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'loesungsbezeichnung', $renderingContext);
$arguments97['keepQuotes'] = false;
$arguments97['encoding'] = NULL;
$arguments97['doubleEncode'] = true;
$renderChildrenClosure98 = function() {return NULL;};
$value99 = ($arguments97['value'] !== NULL ? $arguments97['value'] : $renderChildrenClosure98());

$output89 .= (!is_string($value99) ? $value99 : htmlspecialchars($value99, ($arguments97['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments97['encoding'] !== NULL ? $arguments97['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments97['doubleEncode']));

$output89 .= '" class="circle-link">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments100 = array();
$arguments100['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'teilprojektnummer', $renderingContext);
$arguments100['keepQuotes'] = false;
$arguments100['encoding'] = NULL;
$arguments100['doubleEncode'] = true;
$renderChildrenClosure101 = function() {return NULL;};
$value102 = ($arguments100['value'] !== NULL ? $arguments100['value'] : $renderChildrenClosure101());

$output89 .= (!is_string($value102) ? $value102 : htmlspecialchars($value102, ($arguments100['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments100['encoding'] !== NULL ? $arguments100['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments100['doubleEncode']));

$output89 .= '</a>    
                    ';
return $output89;
};

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output68 .= '
                </div>
            ';
return $output68;
};

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
            <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments103 = array();
$arguments103['path'] = 'Images/Machine/wzm-struktur-v1-1.png';
$arguments103['extensionName'] = NULL;
$arguments103['absolute'] = false;
$renderChildrenClosure104 = function() {return NULL;};

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output65 .= '">    
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="dx-user-head">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments105 = array();
$arguments105['identifier'] = 'content-special-menu';
$arguments105['size'] = 'large';
$arguments105['overlay'] = NULL;
$arguments105['state'] = 'default';
$arguments105['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure106 = function() {return NULL;};

$output65 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output65 .= '
                <h1>Strukturen</h1>
            </div>
            <div class="list-group">   
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments107 = array();
$arguments107['action'] = 'referencemachine';
$arguments107['arguments'] = array (
);
$arguments107['controller'] = NULL;
$arguments107['extensionName'] = NULL;
$arguments107['pluginName'] = NULL;
$arguments107['pageUid'] = NULL;
$arguments107['pageType'] = 0;
$arguments107['noCache'] = false;
$arguments107['noCacheHash'] = false;
$arguments107['section'] = '';
$arguments107['format'] = '';
$arguments107['linkAccessRestrictedPages'] = false;
$arguments107['additionalParams'] = array (
);
$arguments107['absolute'] = false;
$arguments107['addQueryString'] = false;
$arguments107['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments107['addQueryStringMethod'] = NULL;
$renderChildrenClosure108 = function() {return NULL;};
$viewHelper109 = $self->getViewHelper('$viewHelper109', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper109->setArguments($arguments107);
$viewHelper109->setRenderingContext($renderingContext);
$viewHelper109->setRenderChildrenClosure($renderChildrenClosure108);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output65 .= $viewHelper109->initializeArgumentsAndRender();

$output65 .= '" class="list-group-item" title="Referenzmaschine">
                    <h4 class="list-group-item-heading">Referenzmaschine</h4>
                    <p class="list-group-item-text">Struktur aller Maschinenkomponenten und die derzeit daran wirkenden L&ouml;sungen</p>
                </a>
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments110 = array();
$arguments110['action'] = 'matrix';
$arguments110['arguments'] = array (
);
$arguments110['controller'] = NULL;
$arguments110['extensionName'] = NULL;
$arguments110['pluginName'] = NULL;
$arguments110['pageUid'] = NULL;
$arguments110['pageType'] = 0;
$arguments110['noCache'] = false;
$arguments110['noCacheHash'] = false;
$arguments110['section'] = '';
$arguments110['format'] = '';
$arguments110['linkAccessRestrictedPages'] = false;
$arguments110['additionalParams'] = array (
);
$arguments110['absolute'] = false;
$arguments110['addQueryString'] = false;
$arguments110['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments110['addQueryStringMethod'] = NULL;
$renderChildrenClosure111 = function() {return NULL;};
$viewHelper112 = $self->getViewHelper('$viewHelper112', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper112->setArguments($arguments110);
$viewHelper112->setRenderingContext($renderingContext);
$viewHelper112->setRenderChildrenClosure($renderChildrenClosure111);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output65 .= $viewHelper112->initializeArgumentsAndRender();

$output65 .= '" class="list-group-item" title="Anwendungsf&auml;lle">
                    <h4 class="list-group-item-heading">Anwendungsf&auml;lle</h4>
                    <p class="list-group-item-text">Anwendungsf&auml;lle und ihre repr&auml;sentierenden Lastf&auml;lle in einer Matrix</p>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="dx-user-head">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments113 = array();
$arguments113['identifier'] = 'content-plugin';
$arguments113['size'] = 'large';
$arguments113['overlay'] = NULL;
$arguments113['state'] = 'default';
$arguments113['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure114 = function() {return NULL;};

$output65 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output65 .= '
                <h1>L&ouml;sungen</h1>
            </div>
            <div class="list-group">   
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments115 = array();
$arguments115['action'] = 'summary';
$arguments115['arguments'] = array (
);
$arguments115['controller'] = NULL;
$arguments115['extensionName'] = NULL;
$arguments115['pluginName'] = NULL;
$arguments115['pageUid'] = NULL;
$arguments115['pageType'] = 0;
$arguments115['noCache'] = false;
$arguments115['noCacheHash'] = false;
$arguments115['section'] = '';
$arguments115['format'] = '';
$arguments115['linkAccessRestrictedPages'] = false;
$arguments115['additionalParams'] = array (
);
$arguments115['absolute'] = false;
$arguments115['addQueryString'] = false;
$arguments115['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments115['addQueryStringMethod'] = NULL;
$renderChildrenClosure116 = function() {return NULL;};
$viewHelper117 = $self->getViewHelper('$viewHelper117', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper117->setArguments($arguments115);
$viewHelper117->setRenderingContext($renderingContext);
$viewHelper117->setRenderChildrenClosure($renderChildrenClosure116);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output65 .= $viewHelper117->initializeArgumentsAndRender();

$output65 .= '" class="list-group-item" title="L&ouml;sungen">
                    <h4 class="list-group-item-heading">L&ouml;sungen</h4>
                    <p class="list-group-item-text">Detaillierte Informationen zu jeder L&ouml;sung</p>
                </a>
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments118 = array();
$arguments118['action'] = 'network';
$arguments118['arguments'] = array (
);
$arguments118['controller'] = NULL;
$arguments118['extensionName'] = NULL;
$arguments118['pluginName'] = NULL;
$arguments118['pageUid'] = NULL;
$arguments118['pageType'] = 0;
$arguments118['noCache'] = false;
$arguments118['noCacheHash'] = false;
$arguments118['section'] = '';
$arguments118['format'] = '';
$arguments118['linkAccessRestrictedPages'] = false;
$arguments118['additionalParams'] = array (
);
$arguments118['absolute'] = false;
$arguments118['addQueryString'] = false;
$arguments118['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments118['addQueryStringMethod'] = NULL;
$renderChildrenClosure119 = function() {return NULL;};
$viewHelper120 = $self->getViewHelper('$viewHelper120', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper120->setArguments($arguments118);
$viewHelper120->setRenderingContext($renderingContext);
$viewHelper120->setRenderChildrenClosure($renderChildrenClosure119);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output65 .= $viewHelper120->initializeArgumentsAndRender();

$output65 .= '" class="list-group-item" title="Input-Output-Netzwerk">
                    <h4 class="list-group-item-heading">Input-Output-Netzwerk</h4>
                    <p class="list-group-item-text">Darstellung aller Abh&auml;ngigkeiten und Austauschbeziehungen zwischen L&ouml;sungen</p>
                </a>
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments121 = array();
$arguments121['action'] = 'examinations';
$arguments121['arguments'] = array (
);
$arguments121['controller'] = NULL;
$arguments121['extensionName'] = NULL;
$arguments121['pluginName'] = NULL;
$arguments121['pageUid'] = NULL;
$arguments121['pageType'] = 0;
$arguments121['noCache'] = false;
$arguments121['noCacheHash'] = false;
$arguments121['section'] = '';
$arguments121['format'] = '';
$arguments121['linkAccessRestrictedPages'] = false;
$arguments121['additionalParams'] = array (
);
$arguments121['absolute'] = false;
$arguments121['addQueryString'] = false;
$arguments121['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments121['addQueryStringMethod'] = NULL;
$renderChildrenClosure122 = function() {return NULL;};
$viewHelper123 = $self->getViewHelper('$viewHelper123', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper123->setArguments($arguments121);
$viewHelper123->setRenderingContext($renderingContext);
$viewHelper123->setRenderChildrenClosure($renderChildrenClosure122);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output65 .= $viewHelper123->initializeArgumentsAndRender();

$output65 .= '" class="list-group-item" title="Untersuchungen">
                    <h4 class="list-group-item-heading">Untersuchungen</h4>
                    <p class="list-group-item-text">Dokumentation von Untersuchungen an Demonstratoren, Ergebnisfilterung und Visualisierung der Ergebnisentwicklung</p>
                </a>
            </div>
        </div>    
    </div>

    <!-- Skizze Entwurf Empfehlungssystem > RECOMMENDER -->
';
return $output65;
};

$output59 .= '';


return $output59;
}


}
#1571146686    45569     