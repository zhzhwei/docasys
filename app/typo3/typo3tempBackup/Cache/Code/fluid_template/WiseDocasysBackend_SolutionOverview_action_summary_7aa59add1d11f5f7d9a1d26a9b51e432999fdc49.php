<?php
class FluidCache_WiseDocasysBackend_SolutionOverview_action_summary_7aa59add1d11f5f7d9a1d26a9b51e432999fdc49 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['name'] = 'summary-submit';
$arguments1['action'] = 'summary';
$arguments1['method'] = 'post';
$arguments1['style'] = 'width: 100%;';
$arguments1['class'] = 'hidden-print';
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['controller'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['object'] = NULL;
$arguments1['pageType'] = 0;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['fieldNamePrefix'] = NULL;
$arguments1['actionUri'] = NULL;
$arguments1['objectName'] = NULL;
$arguments1['hiddenFieldClassName'] = NULL;
$arguments1['addQueryStringMethod'] = '';
$arguments1['enctype'] = NULL;
$arguments1['onreset'] = NULL;
$arguments1['onsubmit'] = NULL;
$arguments1['target'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
        <div class="row">
            <div class="form-group col-md-10">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments4 = array();
$arguments4['name'] = 'solution';
$arguments4['options'] = $currentVariableContainer->getOrNull('solutions');
$arguments4['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'uid', $renderingContext);
$arguments4['class'] = 'form-control';
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['property'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['size'] = NULL;
$arguments4['disabled'] = NULL;
$arguments4['optionValueField'] = NULL;
$arguments4['optionLabelField'] = NULL;
$arguments4['sortByOptionLabel'] = false;
$arguments4['selectAllByDefault'] = false;
$arguments4['errorClass'] = 'f3-form-error';
$arguments4['prependOptionLabel'] = NULL;
$arguments4['prependOptionValue'] = NULL;
$arguments4['multiple'] = false;
$renderChildrenClosure5 = function() {return NULL;};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper6->initializeArgumentsAndRender();

$output3 .= '
            </div>
            <div class="form-group col-md-2">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments7 = array();
$arguments7['value'] = 'Anzeigen';
$arguments7['id'] = 'summary-submit';
$arguments7['class'] = 'btn btn-primary';
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['name'] = NULL;
$arguments7['property'] = NULL;
$arguments7['disabled'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output3 .= $viewHelper9->initializeArgumentsAndRender();

$output3 .= '
            </div>
        </div>
    ';
return $output3;
};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper10->setArguments($arguments1);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper10->initializeArgumentsAndRender();

$output0 .= ' 

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments11 = array();
// Rendering Boolean node
$arguments11['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('solution'));
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output13 = '';

$output13 .= '                                
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>
                        <span class="label label-primary">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments14 = array();
$arguments14['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'teilprojektnummer', $renderingContext);
$arguments14['keepQuotes'] = false;
$arguments14['encoding'] = NULL;
$arguments14['doubleEncode'] = true;
$renderChildrenClosure15 = function() {return NULL;};
$value16 = ($arguments14['value'] !== NULL ? $arguments14['value'] : $renderChildrenClosure15());

$output13 .= (!is_string($value16) ? $value16 : htmlspecialchars($value16, ($arguments14['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments14['encoding'] !== NULL ? $arguments14['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments14['doubleEncode']));

$output13 .= '</span>
                        ';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper
$arguments17 = array();
$output18 = '';

$output18 .= 'edit[tx_wisedocasysdomaindesigner_domain_model_loesung][';

$output18 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'uid', $renderingContext);

$output18 .= ']=edit';
$arguments17['parameters'] = $output18;
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['returnUrl'] = '';
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['name'] = NULL;
$arguments17['target'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments21 = array();
$arguments21['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'loesungsbezeichnung', $renderingContext);
$arguments21['keepQuotes'] = false;
$arguments21['encoding'] = NULL;
$arguments21['doubleEncode'] = true;
$renderChildrenClosure22 = function() {return NULL;};
$value23 = ($arguments21['value'] !== NULL ? $arguments21['value'] : $renderChildrenClosure22());

$output20 .= (!is_string($value23) ? $value23 : htmlspecialchars($value23, ($arguments21['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments21['encoding'] !== NULL ? $arguments21['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments21['doubleEncode']));

$output20 .= '
                        ';
return $output20;
};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper');
$viewHelper24->setArguments($arguments17);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper

$output13 .= $viewHelper24->initializeArgumentsAndRender();

$output13 .= '
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel-group">
                    <div class="panel panel-default panel-solution">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse1">&Uuml;bersicht und Klassifikation</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <dl>
                                            <dt>Art</dt>
                                            <dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments25 = array();
$output26 = '';

$output26 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:loesungsart.';

$output26 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'loesungsart', $renderingContext);
$arguments25['key'] = $output26;
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['htmlEscape'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure27, $renderingContext);

$output13 .= '</dd>
                                        </dl>
                                    </div>
                                    <div class="col-xs-2">
                                        <dl>
                                            <dt>L&ouml;sungsklasse</dt>
                                            <dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments28 = array();
$output29 = '';

$output29 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:loesungsklasse.';

$output29 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'loesungsklasse', $renderingContext);
$arguments28['key'] = $output29;
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['htmlEscape'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$renderChildrenClosure30 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure30, $renderingContext);

$output13 .= '</dd>
                                        </dl>
                                    </div>
                                    <div class="col-xs-2">
                                        <dl>
                                            <dt>Phase der themischen Wirkkette</dt>
                                            <dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments31 = array();
$output32 = '';

$output32 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:phase_thermische_wirkkette.';

$output32 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'phaseDerThermischenWirkkette', $renderingContext);
$arguments31['key'] = $output32;
$arguments31['id'] = NULL;
$arguments31['default'] = NULL;
$arguments31['htmlEscape'] = NULL;
$arguments31['arguments'] = NULL;
$arguments31['extensionName'] = NULL;
$renderChildrenClosure33 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure33, $renderingContext);

$output13 .= '</dd>
                                        </dl>
                                    </div>
                                    <div class="col-xs-2">
                                        <dl>
                                            <dt>Physikalischer Effekt</dt>
                                            <dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments34 = array();
$output35 = '';

$output35 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:physikalischer_effekt.';

$output35 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'physikalischerEffekt', $renderingContext);
$arguments34['key'] = $output35;
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['htmlEscape'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$renderChildrenClosure36 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure36, $renderingContext);

$output13 .= '</dd>
                                        </dl>
                                    </div>
                                    <div class="col-xs-2">
                                        <dl>
                                            <dt>Betrifft</dt>
                                            <dd>
                                                Hersteller: 
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments37 = array();
// Rendering Boolean node
$arguments37['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'betrifftHersteller', $renderingContext), 1);
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output39 = '';

$output39 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments40 = array();
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                        <span class="badge badge-success">Ja</span>
                                                    ';
};

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments42 = array();
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                        <span class="badge badge-danger">Nein</span>
                                                    ';
};

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output39 .= '
                                                ';
return $output39;
};
$arguments37['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                        <span class="badge badge-success">Ja</span>
                                                    ';
};
$arguments37['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                        <span class="badge badge-danger">Nein</span>
                                                    ';
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output13 .= '
                                                <br>
                                                Betreiber:
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments44 = array();
// Rendering Boolean node
$arguments44['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'betrifftBetreiber', $renderingContext), 1);
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output46 = '';

$output46 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments47 = array();
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                        <span class="badge badge-success">Ja</span>
                                                    ';
};

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments49 = array();
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                        <span class="badge badge-danger">Nein</span>
                                                    ';
};

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output46 .= '
                                                ';
return $output46;
};
$arguments44['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                        <span class="badge badge-success">Ja</span>
                                                    ';
};
$arguments44['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                        <span class="badge badge-danger">Nein</span>
                                                    ';
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output13 .= '
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="col-xs-2">
                                        <dl>
                                            <dt>Gestaltungsarten</dt>
                                            <dd>
                                                <ul>
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments51 = array();
$arguments51['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'gestaltungsart', $renderingContext);
$arguments51['as'] = 'ga';
$arguments51['key'] = '';
$arguments51['reverse'] = false;
$arguments51['iteration'] = NULL;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output53 = '';

$output53 .= '
                                                        <li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments54 = array();
$arguments54['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('ga'), 'bezeichnung', $renderingContext);
$arguments54['keepQuotes'] = false;
$arguments54['encoding'] = NULL;
$arguments54['doubleEncode'] = true;
$renderChildrenClosure55 = function() {return NULL;};
$value56 = ($arguments54['value'] !== NULL ? $arguments54['value'] : $renderChildrenClosure55());

$output53 .= (!is_string($value56) ? $value56 : htmlspecialchars($value56, ($arguments54['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments54['encoding'] !== NULL ? $arguments54['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments54['doubleEncode']));

$output53 .= '</li> 
                                                    ';
return $output53;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output13 .= '
                                                </ul>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse2">Voraussetzungen, Anwendung, Ergebnisse</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="page-header">
                                            <h4>Voraussetzungen und Bedingungen</h4> 
                                        </div>
                                        <div class="io-objects">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments57 = array();
$arguments57['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'inputRessource', $renderingContext);
$arguments57['as'] = 'inputRessource';
$arguments57['key'] = '';
$arguments57['reverse'] = false;
$arguments57['iteration'] = NULL;
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments60 = array();
$arguments60['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('inputRessource'), 'ressource', $renderingContext);
$arguments60['as'] = 'ressource';
$arguments60['key'] = '';
$arguments60['reverse'] = false;
$arguments60['iteration'] = NULL;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output62 = '';

$output62 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments63 = array();
$arguments63['partial'] = 'SolutionOverview/RessourcePanel';
// Rendering Array
$array64 = array();
$array64['ressource'] = $currentVariableContainer->getOrNull('ressource');
$array64['ressourceContainer'] = $currentVariableContainer->getOrNull('inputRessource');
$arguments63['arguments'] = $array64;
$arguments63['section'] = NULL;
$arguments63['optional'] = false;
$renderChildrenClosure65 = function() {return NULL;};

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments63, $renderChildrenClosure65, $renderingContext);

$output62 .= '
                                                ';
return $output62;
};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
                                            ';
return $output59;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output13 .= '

                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments66 = array();
$arguments66['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'inputModell', $renderingContext);
$arguments66['as'] = 'inputModell';
$arguments66['key'] = '';
$arguments66['reverse'] = false;
$arguments66['iteration'] = NULL;
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output68 = '';

$output68 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments69 = array();
$arguments69['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('inputModell'), 'modell', $renderingContext);
$arguments69['as'] = 'modell';
$arguments69['key'] = '';
$arguments69['reverse'] = false;
$arguments69['iteration'] = NULL;
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output71 = '';

$output71 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments72 = array();
$arguments72['partial'] = 'SolutionOverview/ModellPanel';
// Rendering Array
$array73 = array();
$array73['modell'] = $currentVariableContainer->getOrNull('modell');
$array73['modellContainer'] = $currentVariableContainer->getOrNull('inputModell');
$arguments72['arguments'] = $array73;
$arguments72['section'] = NULL;
$arguments72['optional'] = false;
$renderChildrenClosure74 = function() {return NULL;};

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments72, $renderChildrenClosure74, $renderingContext);

$output71 .= '    
                                                ';
return $output71;
};

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output68 .= '
                                            ';
return $output68;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output13 .= '

                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments75 = array();
$arguments75['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'inputMessmittel', $renderingContext);
$arguments75['as'] = 'inputMessmittel';
$arguments75['key'] = '';
$arguments75['reverse'] = false;
$arguments75['iteration'] = NULL;
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output77 = '';

$output77 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments78 = array();
$arguments78['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('inputMessmittel'), 'messmittel', $renderingContext);
$arguments78['as'] = 'messmittel';
$arguments78['key'] = '';
$arguments78['reverse'] = false;
$arguments78['iteration'] = NULL;
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output80 = '';

$output80 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments81 = array();
$arguments81['partial'] = 'SolutionOverview/MessmittelPanel';
// Rendering Array
$array82 = array();
$array82['messmittel'] = $currentVariableContainer->getOrNull('messmittel');
$array82['messmittelContainer'] = $currentVariableContainer->getOrNull('inputMessmittel');
$arguments81['arguments'] = $array82;
$arguments81['section'] = NULL;
$arguments81['optional'] = false;
$renderChildrenClosure83 = function() {return NULL;};

$output80 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments81, $renderChildrenClosure83, $renderingContext);

$output80 .= '    
                                                ';
return $output80;
};

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
                                            ';
return $output77;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output13 .= '

                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments84 = array();
$arguments84['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'inputDaten', $renderingContext);
$arguments84['as'] = 'inputDaten';
$arguments84['key'] = '';
$arguments84['reverse'] = false;
$arguments84['iteration'] = NULL;
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output86 = '';

$output86 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments87 = array();
$arguments87['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('inputDaten'), 'daten', $renderingContext);
$arguments87['as'] = 'daten';
$arguments87['key'] = '';
$arguments87['reverse'] = false;
$arguments87['iteration'] = NULL;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output89 = '';

$output89 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments90 = array();
$arguments90['partial'] = 'SolutionOverview/DatenPanel';
// Rendering Array
$array91 = array();
$array91['daten'] = $currentVariableContainer->getOrNull('daten');
$array91['datenContainer'] = $currentVariableContainer->getOrNull('inputDaten');
$arguments90['arguments'] = $array91;
$arguments90['section'] = NULL;
$arguments90['optional'] = false;
$renderChildrenClosure92 = function() {return NULL;};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments90, $renderChildrenClosure92, $renderingContext);

$output89 .= '
                                                ';
return $output89;
};

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '
                                            ';
return $output86;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output13 .= '
                                        </div>

                                        <div class="page-header margin-top">
                                            <h4>Voraussetzungen</h4> 
                                        </div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments93 = array();
// Rendering Boolean node
$arguments93['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'komponentenbedingung', $renderingContext));
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output95 = '';

$output95 .= '
                                            <ul>
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments96 = array();
$arguments96['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'komponentenbedingung', $renderingContext);
$arguments96['as'] = 'kb';
$arguments96['key'] = '';
$arguments96['reverse'] = false;
$arguments96['iteration'] = NULL;
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output98 = '';

$output98 .= '
                                                    <li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments99 = array();
$arguments99['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('kb'), 'objekt.bezeichnung', $renderingContext);
$arguments99['keepQuotes'] = false;
$arguments99['encoding'] = NULL;
$arguments99['doubleEncode'] = true;
$renderChildrenClosure100 = function() {return NULL;};
$value101 = ($arguments99['value'] !== NULL ? $arguments99['value'] : $renderChildrenClosure100());

$output98 .= (!is_string($value101) ? $value101 : htmlspecialchars($value101, ($arguments99['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments99['encoding'] !== NULL ? $arguments99['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments99['doubleEncode']));

$output98 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments102 = array();
$output103 = '';

$output103 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:operator.';

$output103 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('kb'), 'operator', $renderingContext);
$arguments102['key'] = $output103;
$arguments102['id'] = NULL;
$arguments102['default'] = NULL;
$arguments102['htmlEscape'] = NULL;
$arguments102['arguments'] = NULL;
$arguments102['extensionName'] = NULL;
$renderChildrenClosure104 = function() {return NULL;};

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure104, $renderingContext);

$output98 .= ' "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments105 = array();
$arguments105['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('kb'), 'wert', $renderingContext);
$arguments105['keepQuotes'] = false;
$arguments105['encoding'] = NULL;
$arguments105['doubleEncode'] = true;
$renderChildrenClosure106 = function() {return NULL;};
$value107 = ($arguments105['value'] !== NULL ? $arguments105['value'] : $renderChildrenClosure106());

$output98 .= (!is_string($value107) ? $value107 : htmlspecialchars($value107, ($arguments105['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments105['encoding'] !== NULL ? $arguments105['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments105['doubleEncode']));

$output98 .= '"</li>
                                                ';
return $output98;
};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
                                            </ul>
                                        ';
return $output95;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output13 .= '
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="page-header">
                                            <h4>Anwendungen und Arbeitsschritte</h4> 
                                        </div>
                                        <div class="row steps">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments108 = array();
$arguments108['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'arbeitsschritte', $renderingContext);
$arguments108['as'] = 'arbeitsschritt';
$arguments108['iteration'] = 'iterator';
$arguments108['key'] = '';
$arguments108['reverse'] = false;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output110 = '';

$output110 .= '
                                                <div class="col-xs-4">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments111 = array();
$arguments111['partial'] = 'SolutionOverview/Step';
// Rendering Array
$array112 = array();
$array112['step'] = $currentVariableContainer->getOrNull('arbeitsschritt');
$array112['number'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'cycle', $renderingContext);
$arguments111['arguments'] = $array112;
$arguments111['section'] = NULL;
$arguments111['optional'] = false;
$renderChildrenClosure113 = function() {return NULL;};

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments111, $renderChildrenClosure113, $renderingContext);

$output110 .= '    
                                                </div>
                                            ';
return $output110;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output13 .= '
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="page-header margin-top">
                                                    <h4>Ablaufmodelle BPMN, CMMN</h4>
                                                </div>
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments114 = array();
// Rendering Boolean node
$arguments114['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'ablauf', $renderingContext));
$arguments114['then'] = NULL;
$arguments114['else'] = NULL;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output116 = '';

$output116 .= '
                                                    <ul class="list-group">
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments117 = array();
$arguments117['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('modelFiles'), 'bpmn', $renderingContext);
$arguments117['as'] = 'file';
$arguments117['key'] = '';
$arguments117['reverse'] = false;
$arguments117['iteration'] = NULL;
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output119 = '';

$output119 .= '
                                                            <li class="list-group-item">
                                                                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments120 = array();
$arguments120['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('file'), 'modelerReference', $renderingContext);
$arguments120['keepQuotes'] = false;
$arguments120['encoding'] = NULL;
$arguments120['doubleEncode'] = true;
$renderChildrenClosure121 = function() {return NULL;};
$value122 = ($arguments120['value'] !== NULL ? $arguments120['value'] : $renderChildrenClosure121());

$output119 .= (!is_string($value122) ? $value122 : htmlspecialchars($value122, ($arguments120['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments120['encoding'] !== NULL ? $arguments120['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments120['doubleEncode']));

$output119 .= '" title="Modell im Modeler anzeigen" target="_blank">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments123 = array();
$arguments123['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('file'), 'name', $renderingContext);
$arguments123['keepQuotes'] = false;
$arguments123['encoding'] = NULL;
$arguments123['doubleEncode'] = true;
$renderChildrenClosure124 = function() {return NULL;};
$value125 = ($arguments123['value'] !== NULL ? $arguments123['value'] : $renderChildrenClosure124());

$output119 .= (!is_string($value125) ? $value125 : htmlspecialchars($value125, ($arguments123['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments123['encoding'] !== NULL ? $arguments123['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments123['doubleEncode']));

$output119 .= '</a>
                                                            </li>
                                                        ';
return $output119;
};

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '
                                                    </ul>
                                                ';
return $output116;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output13 .= '
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="page-header margin-top">
                                                    <h4>Entscheidungsmodelle DMN</h4>
                                                </div>
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments126 = array();
// Rendering Boolean node
$arguments126['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'entscheidungen', $renderingContext));
$arguments126['then'] = NULL;
$arguments126['else'] = NULL;
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output128 = '';

$output128 .= '
                                                    <ul class="list-group">
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments129 = array();
$arguments129['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('modelFiles'), 'dmn', $renderingContext);
$arguments129['as'] = 'file';
$arguments129['key'] = '';
$arguments129['reverse'] = false;
$arguments129['iteration'] = NULL;
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output131 = '';

$output131 .= '
                                                            <li class="list-group-item">
                                                                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments132 = array();
$arguments132['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('file'), 'modelerReference', $renderingContext);
$arguments132['keepQuotes'] = false;
$arguments132['encoding'] = NULL;
$arguments132['doubleEncode'] = true;
$renderChildrenClosure133 = function() {return NULL;};
$value134 = ($arguments132['value'] !== NULL ? $arguments132['value'] : $renderChildrenClosure133());

$output131 .= (!is_string($value134) ? $value134 : htmlspecialchars($value134, ($arguments132['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments132['encoding'] !== NULL ? $arguments132['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments132['doubleEncode']));

$output131 .= '" title="Modell im Modeler anzeigen" target="_blank">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments135 = array();
$arguments135['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('file'), 'name', $renderingContext);
$arguments135['keepQuotes'] = false;
$arguments135['encoding'] = NULL;
$arguments135['doubleEncode'] = true;
$renderChildrenClosure136 = function() {return NULL;};
$value137 = ($arguments135['value'] !== NULL ? $arguments135['value'] : $renderChildrenClosure136());

$output131 .= (!is_string($value137) ? $value137 : htmlspecialchars($value137, ($arguments135['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments135['encoding'] !== NULL ? $arguments135['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments135['doubleEncode']));

$output131 .= '</a>
                                                            </li>
                                                        ';
return $output131;
};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output128 .= '
                                                    </ul>
                                                ';
return $output128;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output13 .= '
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="page-header">
                                            <h4>L&ouml;sungs-Output</h4> 
                                        </div>
                                        <div class="io-objects">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments138 = array();
$arguments138['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'outputRessource', $renderingContext);
$arguments138['as'] = 'outputRessource';
$arguments138['key'] = '';
$arguments138['reverse'] = false;
$arguments138['iteration'] = NULL;
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output140 = '';

$output140 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments141 = array();
$arguments141['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('outputRessource'), 'ressource', $renderingContext);
$arguments141['as'] = 'ressource';
$arguments141['key'] = '';
$arguments141['reverse'] = false;
$arguments141['iteration'] = NULL;
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output143 = '';

$output143 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments144 = array();
$arguments144['partial'] = 'SolutionOverview/RessourcePanel';
// Rendering Array
$array145 = array();
$array145['ressource'] = $currentVariableContainer->getOrNull('ressource');
$array145['ressourceContainer'] = $currentVariableContainer->getOrNull('outputRessource');
$arguments144['arguments'] = $array145;
$arguments144['section'] = NULL;
$arguments144['optional'] = false;
$renderChildrenClosure146 = function() {return NULL;};

$output143 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments144, $renderChildrenClosure146, $renderingContext);

$output143 .= '
                                                ';
return $output143;
};

$output140 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '
                                            ';
return $output140;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output13 .= '

                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments147 = array();
$arguments147['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'outputModell', $renderingContext);
$arguments147['as'] = 'outputModell';
$arguments147['key'] = '';
$arguments147['reverse'] = false;
$arguments147['iteration'] = NULL;
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output149 = '';

$output149 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments150 = array();
$arguments150['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('outputModell'), 'modell', $renderingContext);
$arguments150['as'] = 'modell';
$arguments150['key'] = '';
$arguments150['reverse'] = false;
$arguments150['iteration'] = NULL;
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output152 = '';

$output152 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments153 = array();
$arguments153['partial'] = 'SolutionOverview/ModellPanel';
// Rendering Array
$array154 = array();
$array154['modell'] = $currentVariableContainer->getOrNull('modell');
$array154['modellContainer'] = $currentVariableContainer->getOrNull('outputModell');
$arguments153['arguments'] = $array154;
$arguments153['section'] = NULL;
$arguments153['optional'] = false;
$renderChildrenClosure155 = function() {return NULL;};

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments153, $renderChildrenClosure155, $renderingContext);

$output152 .= '    
                                                ';
return $output152;
};

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
                                            ';
return $output149;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output13 .= '

                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments156 = array();
$arguments156['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'outputMessmittel', $renderingContext);
$arguments156['as'] = 'outputMessmittel';
$arguments156['key'] = '';
$arguments156['reverse'] = false;
$arguments156['iteration'] = NULL;
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output158 = '';

$output158 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments159 = array();
$arguments159['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('outputMessmittel'), 'messmittel', $renderingContext);
$arguments159['as'] = 'messmittel';
$arguments159['key'] = '';
$arguments159['reverse'] = false;
$arguments159['iteration'] = NULL;
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output161 = '';

$output161 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments162 = array();
$arguments162['partial'] = 'SolutionOverview/MessmittelPanel';
// Rendering Array
$array163 = array();
$array163['messmittel'] = $currentVariableContainer->getOrNull('messmittel');
$array163['messmittelContainer'] = $currentVariableContainer->getOrNull('outputMessmittel');
$arguments162['arguments'] = $array163;
$arguments162['section'] = NULL;
$arguments162['optional'] = false;
$renderChildrenClosure164 = function() {return NULL;};

$output161 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments162, $renderChildrenClosure164, $renderingContext);

$output161 .= '    
                                                ';
return $output161;
};

$output158 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output158 .= '
                                            ';
return $output158;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output13 .= '

                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments165 = array();
$arguments165['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'outputDaten', $renderingContext);
$arguments165['as'] = 'outputDaten';
$arguments165['key'] = '';
$arguments165['reverse'] = false;
$arguments165['iteration'] = NULL;
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output167 = '';

$output167 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments168 = array();
$arguments168['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('outputDaten'), 'daten', $renderingContext);
$arguments168['as'] = 'daten';
$arguments168['key'] = '';
$arguments168['reverse'] = false;
$arguments168['iteration'] = NULL;
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output170 = '';

$output170 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments171 = array();
$arguments171['partial'] = 'SolutionOverview/DatenPanel';
// Rendering Array
$array172 = array();
$array172['daten'] = $currentVariableContainer->getOrNull('daten');
$array172['datenContainer'] = $currentVariableContainer->getOrNull('outputDaten');
$arguments171['arguments'] = $array172;
$arguments171['section'] = NULL;
$arguments171['optional'] = false;
$renderChildrenClosure173 = function() {return NULL;};

$output170 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments171, $renderChildrenClosure173, $renderingContext);

$output170 .= '
                                                ';
return $output170;
};

$output167 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '
                                            ';
return $output167;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output13 .= '

                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments174 = array();
$arguments174['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'outputMethoden', $renderingContext);
$arguments174['as'] = 'outputMethoden';
$arguments174['key'] = '';
$arguments174['reverse'] = false;
$arguments174['iteration'] = NULL;
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output176 = '';

$output176 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments177 = array();
$arguments177['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('outputMethoden'), 'methode', $renderingContext);
$arguments177['as'] = 'methode';
$arguments177['key'] = '';
$arguments177['reverse'] = false;
$arguments177['iteration'] = NULL;
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output179 = '';

$output179 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments180 = array();
$arguments180['partial'] = 'SolutionOverview/MethodenPanel';
// Rendering Array
$array181 = array();
$array181['methode'] = $currentVariableContainer->getOrNull('methode');
$array181['methodenContainer'] = $currentVariableContainer->getOrNull('outputMethoden');
$arguments180['arguments'] = $array181;
$arguments180['section'] = NULL;
$arguments180['optional'] = false;
$renderChildrenClosure182 = function() {return NULL;};

$output179 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments180, $renderChildrenClosure182, $renderingContext);

$output179 .= '
                                                ';
return $output179;
};

$output176 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output176 .= '
                                            ';
return $output176;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output13 .= '
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse3">Anwendungsf&auml;lle und Untersuchungen</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <div class="page-header">
                                            <h4>M&ouml;gliche Anwendungsf&auml;lle (auf Basis der Lastf&auml;lle)</h4> 
                                        </div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments183 = array();
// Rendering Boolean node
$arguments183['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('applicationCases'));
$arguments183['then'] = NULL;
$arguments183['else'] = NULL;
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output185 = '';

$output185 .= '
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th style="width: 40%">Anwendungsfall</th>
                                                    <th style="width: 30%">Art</th>
                                                    <th style="width: 30%">Bemerkung</th>
                                                </tr>
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments186 = array();
$arguments186['each'] = $currentVariableContainer->getOrNull('applicationCases');
$arguments186['as'] = 'applicationCase';
$arguments186['key'] = '';
$arguments186['reverse'] = false;
$arguments186['iteration'] = NULL;
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output188 = '';

$output188 .= '
                                                    <tr>
                                                        <td>
                                                            ';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper
$arguments189 = array();
$output190 = '';

$output190 .= 'edit[tx_wisedocasysdomaindesigner_domain_model_fachanwendungsfall][';

$output190 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('applicationCase'), 'applicationCase.uid', $renderingContext);

$output190 .= ']=edit';
$arguments189['parameters'] = $output190;
$arguments189['additionalAttributes'] = NULL;
$arguments189['data'] = NULL;
$arguments189['returnUrl'] = '';
$arguments189['class'] = NULL;
$arguments189['dir'] = NULL;
$arguments189['id'] = NULL;
$arguments189['lang'] = NULL;
$arguments189['style'] = NULL;
$arguments189['title'] = NULL;
$arguments189['accesskey'] = NULL;
$arguments189['tabindex'] = NULL;
$arguments189['onclick'] = NULL;
$arguments189['name'] = NULL;
$arguments189['target'] = NULL;
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output192 = '';

$output192 .= '
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments193 = array();
$arguments193['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('applicationCase'), 'applicationCase.bezeichnung', $renderingContext);
$arguments193['keepQuotes'] = false;
$arguments193['encoding'] = NULL;
$arguments193['doubleEncode'] = true;
$renderChildrenClosure194 = function() {return NULL;};
$value195 = ($arguments193['value'] !== NULL ? $arguments193['value'] : $renderChildrenClosure194());

$output192 .= (!is_string($value195) ? $value195 : htmlspecialchars($value195, ($arguments193['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments193['encoding'] !== NULL ? $arguments193['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments193['doubleEncode']));

$output192 .= '
                                                            ';
return $output192;
};
$viewHelper196 = $self->getViewHelper('$viewHelper196', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper');
$viewHelper196->setArguments($arguments189);
$viewHelper196->setRenderingContext($renderingContext);
$viewHelper196->setRenderChildrenClosure($renderChildrenClosure191);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper

$output188 .= $viewHelper196->initializeArgumentsAndRender();

$output188 .= '
                                                            &nbsp;
                                                            <span class="label label-primary">
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments197 = array();
$output198 = '';

$output198 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:szenarioart.';

$output198 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('applicationCase'), 'applicationCase.szenarioart', $renderingContext);
$arguments197['key'] = $output198;
$arguments197['id'] = NULL;
$arguments197['default'] = NULL;
$arguments197['htmlEscape'] = NULL;
$arguments197['arguments'] = NULL;
$arguments197['extensionName'] = NULL;
$renderChildrenClosure199 = function() {return NULL;};

$output188 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments197, $renderChildrenClosure199, $renderingContext);

$output188 .= '
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <div class="alert alert-info">
                                                                <strong>Untersuchungen fanden statt</strong>
                                                            </div>     
                                                        </td>
                                                        <td>
                                                            <b>Mapping auf Basis von: </b><br>
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments200 = array();
$arguments200['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('applicationCase'), 'loadCases', $renderingContext);
$arguments200['as'] = 'loadCase';
$arguments200['key'] = '';
$arguments200['reverse'] = false;
$arguments200['iteration'] = NULL;
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output202 = '';

$output202 .= '
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments203 = array();
$arguments203['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('loadCase'), 'fallbezeichnung', $renderingContext);
$arguments203['keepQuotes'] = false;
$arguments203['encoding'] = NULL;
$arguments203['doubleEncode'] = true;
$renderChildrenClosure204 = function() {return NULL;};
$value205 = ($arguments203['value'] !== NULL ? $arguments203['value'] : $renderChildrenClosure204());

$output202 .= (!is_string($value205) ? $value205 : htmlspecialchars($value205, ($arguments203['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments203['encoding'] !== NULL ? $arguments203['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments203['doubleEncode']));

$output202 .= '<br>
                                                            ';
return $output202;
};

$output188 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output188 .= '     
                                                        </td>
                                                    </tr>    
                                                ';
return $output188;
};

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output185 .= '
                                            </table>
                                        ';
return $output185;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output13 .= '
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="page-header">
                                            <h4>Untersuchungen</h4> 
                                        </div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments206 = array();
$arguments206['action'] = 'examinations';
// Rendering Array
$array207 = array();
$array207['solution'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'uid', $renderingContext);
$arguments206['arguments'] = $array207;
$arguments206['target'] = '_blank';
$arguments206['class'] = 'btn btn-primary';
$arguments206['additionalAttributes'] = NULL;
$arguments206['data'] = NULL;
$arguments206['controller'] = NULL;
$arguments206['extensionName'] = NULL;
$arguments206['pluginName'] = NULL;
$arguments206['pageUid'] = NULL;
$arguments206['pageType'] = 0;
$arguments206['noCache'] = false;
$arguments206['noCacheHash'] = false;
$arguments206['section'] = '';
$arguments206['format'] = '';
$arguments206['linkAccessRestrictedPages'] = false;
$arguments206['additionalParams'] = array (
);
$arguments206['absolute'] = false;
$arguments206['addQueryString'] = false;
$arguments206['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments206['addQueryStringMethod'] = NULL;
$arguments206['dir'] = NULL;
$arguments206['id'] = NULL;
$arguments206['lang'] = NULL;
$arguments206['style'] = NULL;
$arguments206['title'] = NULL;
$arguments206['accesskey'] = NULL;
$arguments206['tabindex'] = NULL;
$arguments206['onclick'] = NULL;
$arguments206['name'] = NULL;
$arguments206['rel'] = NULL;
$arguments206['rev'] = NULL;
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output209 = '';

$output209 .= '
                                            Alle Untersuchungen von ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments210 = array();
$arguments210['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'teilprojektnummer', $renderingContext);
$arguments210['keepQuotes'] = false;
$arguments210['encoding'] = NULL;
$arguments210['doubleEncode'] = true;
$renderChildrenClosure211 = function() {return NULL;};
$value212 = ($arguments210['value'] !== NULL ? $arguments210['value'] : $renderChildrenClosure211());

$output209 .= (!is_string($value212) ? $value212 : htmlspecialchars($value212, ($arguments210['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments210['encoding'] !== NULL ? $arguments210['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments210['doubleEncode']));

$output209 .= '
                                        ';
return $output209;
};
$viewHelper213 = $self->getViewHelper('$viewHelper213', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper213->setArguments($arguments206);
$viewHelper213->setRenderingContext($renderingContext);
$viewHelper213->setRenderChildrenClosure($renderChildrenClosure208);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output13 .= $viewHelper213->initializeArgumentsAndRender();

$output13 .= '
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-9">
                                        <div class="page-header">
                                            <h4>Bewertung hinsichtlich Anwendungsf&auml;lle (aus Eignungsprofilen)</h4>
                                        </div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments214 = array();
// Rendering Boolean node
$arguments214['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('aptitudes'));
$arguments214['then'] = NULL;
$arguments214['else'] = NULL;
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output216 = '';

$output216 .= '
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th style="width: 40%">Anwendungsfall</th>
                                                    <th style="width: 15%">Bewertung</th>
                                                    <th style="width: 15%">Status</th>
                                                    <th style="width: 30%">Bemerkung</th>
                                                </tr>
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments217 = array();
$arguments217['each'] = $currentVariableContainer->getOrNull('aptitudes');
$arguments217['as'] = 'aptitude';
$arguments217['key'] = '';
$arguments217['reverse'] = false;
$arguments217['iteration'] = NULL;
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output219 = '';

$output219 .= '
                                                    <tr>
                                                        <td>
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments220 = array();
$arguments220['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('aptitude'), 'anwendungsfall', $renderingContext);
$arguments220['as'] = 'aptitudeApplicationCase';
$arguments220['key'] = '';
$arguments220['reverse'] = false;
$arguments220['iteration'] = NULL;
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output222 = '';

$output222 .= '
                                                                ';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper
$arguments223 = array();
$output224 = '';

$output224 .= 'edit[tx_wisedocasysdomaindesigner_domain_model_fachanwendungsfall][';

$output224 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('aptitudeApplicationCase'), 'uid', $renderingContext);

$output224 .= ']=edit';
$arguments223['parameters'] = $output224;
$arguments223['additionalAttributes'] = NULL;
$arguments223['data'] = NULL;
$arguments223['returnUrl'] = '';
$arguments223['class'] = NULL;
$arguments223['dir'] = NULL;
$arguments223['id'] = NULL;
$arguments223['lang'] = NULL;
$arguments223['style'] = NULL;
$arguments223['title'] = NULL;
$arguments223['accesskey'] = NULL;
$arguments223['tabindex'] = NULL;
$arguments223['onclick'] = NULL;
$arguments223['name'] = NULL;
$arguments223['target'] = NULL;
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output226 = '';

$output226 .= '
                                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments227 = array();
$arguments227['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('aptitudeApplicationCase'), 'bezeichnung', $renderingContext);
$arguments227['keepQuotes'] = false;
$arguments227['encoding'] = NULL;
$arguments227['doubleEncode'] = true;
$renderChildrenClosure228 = function() {return NULL;};
$value229 = ($arguments227['value'] !== NULL ? $arguments227['value'] : $renderChildrenClosure228());

$output226 .= (!is_string($value229) ? $value229 : htmlspecialchars($value229, ($arguments227['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments227['encoding'] !== NULL ? $arguments227['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments227['doubleEncode']));

$output226 .= '
                                                                ';
return $output226;
};
$viewHelper230 = $self->getViewHelper('$viewHelper230', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper');
$viewHelper230->setArguments($arguments223);
$viewHelper230->setRenderingContext($renderingContext);
$viewHelper230->setRenderChildrenClosure($renderChildrenClosure225);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper

$output222 .= $viewHelper230->initializeArgumentsAndRender();

$output222 .= '
                                                                &nbsp;
                                                                <span class="label label-primary">
                                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments231 = array();
$output232 = '';

$output232 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:szenarioart.';

$output232 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('aptitudeApplicationCase'), 'szenarioart', $renderingContext);
$arguments231['key'] = $output232;
$arguments231['id'] = NULL;
$arguments231['default'] = NULL;
$arguments231['htmlEscape'] = NULL;
$arguments231['arguments'] = NULL;
$arguments231['extensionName'] = NULL;
$renderChildrenClosure233 = function() {return NULL;};

$output222 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments231, $renderChildrenClosure233, $renderingContext);

$output222 .= '
                                                                </span>
                                                            ';
return $output222;
};

$output219 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output219 .= '
                                                        </td>
                                                        <td>
                                                            <div class="alert alert-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments234 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments235 = array();
$arguments235['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('aptitude'), 'eignungsgrad', $renderingContext);
$arguments235['keepQuotes'] = false;
$arguments235['encoding'] = NULL;
$arguments235['doubleEncode'] = true;
$renderChildrenClosure236 = function() {return NULL;};
$value237 = ($arguments235['value'] !== NULL ? $arguments235['value'] : $renderChildrenClosure236());
$arguments234['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<=', (!is_string($value237) ? $value237 : htmlspecialchars($value237, ($arguments235['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments235['encoding'] !== NULL ? $arguments235['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments235['doubleEncode'])), 2);
$arguments234['then'] = 'danger';
$arguments234['else'] = 'success';
$renderChildrenClosure238 = function() {return NULL;};

$output219 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments234, $renderChildrenClosure238, $renderingContext);

$output219 .= '">
                                                                <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments239 = array();
$output240 = '';

$output240 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:eignungsgrad.';

$output240 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('aptitude'), 'eignungsgrad', $renderingContext);
$arguments239['key'] = $output240;
$arguments239['id'] = NULL;
$arguments239['default'] = NULL;
$arguments239['htmlEscape'] = NULL;
$arguments239['arguments'] = NULL;
$arguments239['extensionName'] = NULL;
$renderChildrenClosure241 = function() {return NULL;};

$output219 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments239, $renderChildrenClosure241, $renderingContext);

$output219 .= '</strong><br>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments242 = array();
$output243 = '';

$output243 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:eignungsprofilstatus.';

$output243 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('aptitude'), 'eignungsprofilstatus', $renderingContext);
$arguments242['key'] = $output243;
$arguments242['id'] = NULL;
$arguments242['default'] = NULL;
$arguments242['htmlEscape'] = NULL;
$arguments242['arguments'] = NULL;
$arguments242['extensionName'] = NULL;
$renderChildrenClosure244 = function() {return NULL;};

$output219 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments242, $renderChildrenClosure244, $renderingContext);

$output219 .= '
                                                        </td>
                                                        <td>
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments245 = array();
$arguments245['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('aptitude'), 'bemerkung', $renderingContext);
$arguments245['keepQuotes'] = false;
$arguments245['encoding'] = NULL;
$arguments245['doubleEncode'] = true;
$renderChildrenClosure246 = function() {return NULL;};
$value247 = ($arguments245['value'] !== NULL ? $arguments245['value'] : $renderChildrenClosure246());

$output219 .= (!is_string($value247) ? $value247 : htmlspecialchars($value247, ($arguments245['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments245['encoding'] !== NULL ? $arguments245['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments245['doubleEncode']));

$output219 .= '
                                                        </td>
                                                    </tr>
                                                ';
return $output219;
};

$output216 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '
                                            </table>
                                        ';
return $output216;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output13 .= '
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse4">Bewertungen und Auswertungen</a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <div class="page-header">
                                            <h4>Auswirkungen</h4>
                                        </div> 
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments248 = array();
// Rendering Boolean node
$arguments248['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'auswirkung', $renderingContext));
$arguments248['then'] = NULL;
$arguments248['else'] = NULL;
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output250 = '';

$output250 .= '
                                            <div class="table-fit">
                                                <table class="table table-striped table-hover">
                                                    <tr>
                                                        <th style="width: 30%">Auswirkung</th>
                                                        <th style="width: 20%">Parameter</th>
                                                        <th style="width: 20%">Tendenz</th>
                                                        <th class="right" style="width: 10%">Wert</th>
                                                        <th class="right" style="width: 10%">Wert (von)</th>
                                                        <th class="right" style="width: 10%">Wert (bis)</th>
                                                    </tr>
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments251 = array();
$arguments251['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'auswirkung', $renderingContext);
$arguments251['as'] = 'auswirkung';
$arguments251['key'] = '';
$arguments251['reverse'] = false;
$arguments251['iteration'] = NULL;
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output253 = '';

$output253 .= '
                                                        <tr> 
                                                            <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments254 = array();
$arguments254['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'bezeichnung', $renderingContext);
$arguments254['keepQuotes'] = false;
$arguments254['encoding'] = NULL;
$arguments254['doubleEncode'] = true;
$renderChildrenClosure255 = function() {return NULL;};
$value256 = ($arguments254['value'] !== NULL ? $arguments254['value'] : $renderChildrenClosure255());

$output253 .= (!is_string($value256) ? $value256 : htmlspecialchars($value256, ($arguments254['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments254['encoding'] !== NULL ? $arguments254['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments254['doubleEncode']));

$output253 .= '</td>
                                                            <td>
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments257 = array();
// Rendering Boolean node
$arguments257['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'zielparameter', $renderingContext));
$arguments257['then'] = NULL;
$arguments257['else'] = NULL;
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output259 = '';

$output259 .= '
                                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments260 = array();
$arguments260['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'zielparameter', $renderingContext);
$arguments260['as'] = 'zielparameter';
$arguments260['key'] = '';
$arguments260['reverse'] = false;
$arguments260['iteration'] = NULL;
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output262 = '';

$output262 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments263 = array();
$arguments263['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('zielparameter'), 'parametername', $renderingContext);
$arguments263['keepQuotes'] = false;
$arguments263['encoding'] = NULL;
$arguments263['doubleEncode'] = true;
$renderChildrenClosure264 = function() {return NULL;};
$value265 = ($arguments263['value'] !== NULL ? $arguments263['value'] : $renderChildrenClosure264());

$output262 .= (!is_string($value265) ? $value265 : htmlspecialchars($value265, ($arguments263['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments263['encoding'] !== NULL ? $arguments263['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments263['doubleEncode']));

$output262 .= '<br>
                                                                    ';
return $output262;
};

$output259 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output259 .= '
                                                                ';
return $output259;
};

$output253 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output253 .= '
                                                            </td>
                                                            <td>
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments266 = array();
$output267 = '';

$output267 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:tendenz.';

$output267 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'tendenz', $renderingContext);
$arguments266['key'] = $output267;
$arguments266['id'] = NULL;
$arguments266['default'] = NULL;
$arguments266['htmlEscape'] = NULL;
$arguments266['arguments'] = NULL;
$arguments266['extensionName'] = NULL;
$renderChildrenClosure268 = function() {return NULL;};

$output253 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments266, $renderChildrenClosure268, $renderingContext);

$output253 .= '   
                                                            </td>
                                                            <td class="right">
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments269 = array();
// Rendering Boolean node
$arguments269['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'wert', $renderingContext), 0);
$arguments269['then'] = NULL;
$arguments269['else'] = NULL;
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output271 = '';

$output271 .= '
                                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments272 = array();
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output274 = '';

$output274 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper
$arguments275 = array();
$arguments275['decimals'] = '2';
$arguments275['decimalSeparator'] = ',';
$arguments275['thousandsSeparator'] = ',';
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments277 = array();
$arguments277['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'wert', $renderingContext);
$arguments277['keepQuotes'] = false;
$arguments277['encoding'] = NULL;
$arguments277['doubleEncode'] = true;
$renderChildrenClosure278 = function() {return NULL;};
$value279 = ($arguments277['value'] !== NULL ? $arguments277['value'] : $renderChildrenClosure278());
return (!is_string($value279) ? $value279 : htmlspecialchars($value279, ($arguments277['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments277['encoding'] !== NULL ? $arguments277['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments277['doubleEncode']));
};

$output274 .= TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output274 .= '
                                                                    ';
return $output274;
};

$output271 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output271 .= '
                                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments280 = array();
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                                        -
                                                                    ';
};

$output271 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output271 .= '
                                                                ';
return $output271;
};
$arguments269['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output282 = '';

$output282 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper
$arguments283 = array();
$arguments283['decimals'] = '2';
$arguments283['decimalSeparator'] = ',';
$arguments283['thousandsSeparator'] = ',';
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments285 = array();
$arguments285['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'wert', $renderingContext);
$arguments285['keepQuotes'] = false;
$arguments285['encoding'] = NULL;
$arguments285['doubleEncode'] = true;
$renderChildrenClosure286 = function() {return NULL;};
$value287 = ($arguments285['value'] !== NULL ? $arguments285['value'] : $renderChildrenClosure286());
return (!is_string($value287) ? $value287 : htmlspecialchars($value287, ($arguments285['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments285['encoding'] !== NULL ? $arguments285['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments285['doubleEncode']));
};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output282 .= '
                                                                    ';
return $output282;
};
$arguments269['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                                        -
                                                                    ';
};

$output253 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output253 .= '    
                                                            </td>
                                                            <td class="right">
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments288 = array();
// Rendering Boolean node
$arguments288['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'wertVon', $renderingContext), 0);
$arguments288['then'] = NULL;
$arguments288['else'] = NULL;
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output290 = '';

$output290 .= '
                                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments291 = array();
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output293 = '';

$output293 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper
$arguments294 = array();
$arguments294['decimals'] = '2';
$arguments294['decimalSeparator'] = ',';
$arguments294['thousandsSeparator'] = ',';
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments296 = array();
$arguments296['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'wertVon', $renderingContext);
$arguments296['keepQuotes'] = false;
$arguments296['encoding'] = NULL;
$arguments296['doubleEncode'] = true;
$renderChildrenClosure297 = function() {return NULL;};
$value298 = ($arguments296['value'] !== NULL ? $arguments296['value'] : $renderChildrenClosure297());
return (!is_string($value298) ? $value298 : htmlspecialchars($value298, ($arguments296['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments296['encoding'] !== NULL ? $arguments296['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments296['doubleEncode']));
};

$output293 .= TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output293 .= '
                                                                    ';
return $output293;
};

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

$output290 .= '
                                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments299 = array();
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                                        -
                                                                    ';
};

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output290 .= '
                                                                ';
return $output290;
};
$arguments288['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output301 = '';

$output301 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper
$arguments302 = array();
$arguments302['decimals'] = '2';
$arguments302['decimalSeparator'] = ',';
$arguments302['thousandsSeparator'] = ',';
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments304 = array();
$arguments304['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'wertVon', $renderingContext);
$arguments304['keepQuotes'] = false;
$arguments304['encoding'] = NULL;
$arguments304['doubleEncode'] = true;
$renderChildrenClosure305 = function() {return NULL;};
$value306 = ($arguments304['value'] !== NULL ? $arguments304['value'] : $renderChildrenClosure305());
return (!is_string($value306) ? $value306 : htmlspecialchars($value306, ($arguments304['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments304['encoding'] !== NULL ? $arguments304['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments304['doubleEncode']));
};

$output301 .= TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output301 .= '
                                                                    ';
return $output301;
};
$arguments288['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                                        -
                                                                    ';
};

$output253 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output253 .= '
                                                            </td>
                                                            <td class="right">
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments307 = array();
// Rendering Boolean node
$arguments307['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'wertBis', $renderingContext), 0);
$arguments307['then'] = NULL;
$arguments307['else'] = NULL;
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output309 = '';

$output309 .= '
                                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments310 = array();
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output312 = '';

$output312 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper
$arguments313 = array();
$arguments313['decimals'] = '2';
$arguments313['decimalSeparator'] = ',';
$arguments313['thousandsSeparator'] = ',';
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments315 = array();
$arguments315['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'wertBis', $renderingContext);
$arguments315['keepQuotes'] = false;
$arguments315['encoding'] = NULL;
$arguments315['doubleEncode'] = true;
$renderChildrenClosure316 = function() {return NULL;};
$value317 = ($arguments315['value'] !== NULL ? $arguments315['value'] : $renderChildrenClosure316());
return (!is_string($value317) ? $value317 : htmlspecialchars($value317, ($arguments315['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments315['encoding'] !== NULL ? $arguments315['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments315['doubleEncode']));
};

$output312 .= TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output312 .= '
                                                                    ';
return $output312;
};

$output309 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);

$output309 .= '
                                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments318 = array();
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                                        -
                                                                    ';
};

$output309 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output309 .= '
                                                                ';
return $output309;
};
$arguments307['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output320 = '';

$output320 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper
$arguments321 = array();
$arguments321['decimals'] = '2';
$arguments321['decimalSeparator'] = ',';
$arguments321['thousandsSeparator'] = ',';
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments323 = array();
$arguments323['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'wertBis', $renderingContext);
$arguments323['keepQuotes'] = false;
$arguments323['encoding'] = NULL;
$arguments323['doubleEncode'] = true;
$renderChildrenClosure324 = function() {return NULL;};
$value325 = ($arguments323['value'] !== NULL ? $arguments323['value'] : $renderChildrenClosure324());
return (!is_string($value325) ? $value325 : htmlspecialchars($value325, ($arguments323['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments323['encoding'] !== NULL ? $arguments323['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments323['doubleEncode']));
};

$output320 .= TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output320 .= '
                                                                    ';
return $output320;
};
$arguments307['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                                        -
                                                                    ';
};

$output253 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output253 .= '   
                                                            </td>
                                                        </tr>
                                                    ';
return $output253;
};

$output250 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output250 .= '
                                                </table>
                                            </div>
                                        ';
return $output250;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output13 .= '   
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="page-header">
                                            <h4>Sonstiges</h4> 
                                        </div>
                                        <dl>
                                            <dt>Invasivit&auml;tsgrad:</dt>
                                            <dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments326 = array();
$output327 = '';

$output327 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:invasivitaetsgrad.';

$output327 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'invasivitaetsgrad', $renderingContext);
$arguments326['key'] = $output327;
$arguments326['id'] = NULL;
$arguments326['default'] = NULL;
$arguments326['htmlEscape'] = NULL;
$arguments326['arguments'] = NULL;
$arguments326['extensionName'] = NULL;
$renderChildrenClosure328 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments326, $renderChildrenClosure328, $renderingContext);

$output13 .= '</dd>
                                            <dt>Wartungsintervall:</dt>
                                            <dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments329 = array();
$output330 = '';

$output330 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:wartungsintervall.';

$output330 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'wartungsintervall', $renderingContext);
$arguments329['key'] = $output330;
$arguments329['id'] = NULL;
$arguments329['default'] = NULL;
$arguments329['htmlEscape'] = NULL;
$arguments329['arguments'] = NULL;
$arguments329['extensionName'] = NULL;
$renderChildrenClosure331 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments329, $renderChildrenClosure331, $renderingContext);

$output13 .= '</dd>
                                            <dt>Realisierungsrisiko:</dt>
                                            <dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments332 = array();
$arguments332['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'realisierungsrisiko', $renderingContext);
$arguments332['keepQuotes'] = false;
$arguments332['encoding'] = NULL;
$arguments332['doubleEncode'] = true;
$renderChildrenClosure333 = function() {return NULL;};
$value334 = ($arguments332['value'] !== NULL ? $arguments332['value'] : $renderChildrenClosure333());

$output13 .= (!is_string($value334) ? $value334 : htmlspecialchars($value334, ($arguments332['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments332['encoding'] !== NULL ? $arguments332['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments332['doubleEncode']));

$output13 .= '</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse5">Bemerkungen</a>
                            </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments335 = array();
// Rendering Boolean node
$arguments335['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'bemerkung', $renderingContext));
$arguments335['then'] = NULL;
$arguments335['else'] = NULL;
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output337 = '';

$output337 .= '
                                            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$arguments338 = array();
$arguments338['value'] = NULL;
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments340 = array();
$arguments340['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'bemerkung', $renderingContext);
$arguments340['keepQuotes'] = false;
$arguments340['encoding'] = NULL;
$arguments340['doubleEncode'] = true;
$renderChildrenClosure341 = function() {return NULL;};
$value342 = ($arguments340['value'] !== NULL ? $arguments340['value'] : $renderChildrenClosure341());
return (!is_string($value342) ? $value342 : htmlspecialchars($value342, ($arguments340['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments340['encoding'] !== NULL ? $arguments340['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments340['doubleEncode']));
};

$output337 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);

$output337 .= '</p>
                                        ';
return $output337;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output13 .= '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    ';
return $output13;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output343 = '';

$output343 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments344 = array();
$arguments344['name'] = 'SolutionOverview';
$renderChildrenClosure345 = function() {return NULL;};
$viewHelper346 = $self->getViewHelper('$viewHelper346', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper346->setArguments($arguments344);
$viewHelper346->setRenderingContext($renderingContext);
$viewHelper346->setRenderChildrenClosure($renderChildrenClosure345);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output343 .= $viewHelper346->initializeArgumentsAndRender();

$output343 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments347 = array();
$arguments347['name'] = 'content';
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output349 = '';

$output349 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments350 = array();
$arguments350['name'] = 'summary-submit';
$arguments350['action'] = 'summary';
$arguments350['method'] = 'post';
$arguments350['style'] = 'width: 100%;';
$arguments350['class'] = 'hidden-print';
$arguments350['additionalAttributes'] = NULL;
$arguments350['data'] = NULL;
$arguments350['arguments'] = array (
);
$arguments350['controller'] = NULL;
$arguments350['extensionName'] = NULL;
$arguments350['pluginName'] = NULL;
$arguments350['pageUid'] = NULL;
$arguments350['object'] = NULL;
$arguments350['pageType'] = 0;
$arguments350['noCache'] = false;
$arguments350['noCacheHash'] = false;
$arguments350['section'] = '';
$arguments350['format'] = '';
$arguments350['additionalParams'] = array (
);
$arguments350['absolute'] = false;
$arguments350['addQueryString'] = false;
$arguments350['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments350['fieldNamePrefix'] = NULL;
$arguments350['actionUri'] = NULL;
$arguments350['objectName'] = NULL;
$arguments350['hiddenFieldClassName'] = NULL;
$arguments350['addQueryStringMethod'] = '';
$arguments350['enctype'] = NULL;
$arguments350['onreset'] = NULL;
$arguments350['onsubmit'] = NULL;
$arguments350['target'] = NULL;
$arguments350['dir'] = NULL;
$arguments350['id'] = NULL;
$arguments350['lang'] = NULL;
$arguments350['title'] = NULL;
$arguments350['accesskey'] = NULL;
$arguments350['tabindex'] = NULL;
$arguments350['onclick'] = NULL;
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output352 = '';

$output352 .= '
        <div class="row">
            <div class="form-group col-md-10">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments353 = array();
$arguments353['name'] = 'solution';
$arguments353['options'] = $currentVariableContainer->getOrNull('solutions');
$arguments353['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'uid', $renderingContext);
$arguments353['class'] = 'form-control';
$arguments353['additionalAttributes'] = NULL;
$arguments353['data'] = NULL;
$arguments353['property'] = NULL;
$arguments353['dir'] = NULL;
$arguments353['id'] = NULL;
$arguments353['lang'] = NULL;
$arguments353['style'] = NULL;
$arguments353['title'] = NULL;
$arguments353['accesskey'] = NULL;
$arguments353['tabindex'] = NULL;
$arguments353['onclick'] = NULL;
$arguments353['size'] = NULL;
$arguments353['disabled'] = NULL;
$arguments353['optionValueField'] = NULL;
$arguments353['optionLabelField'] = NULL;
$arguments353['sortByOptionLabel'] = false;
$arguments353['selectAllByDefault'] = false;
$arguments353['errorClass'] = 'f3-form-error';
$arguments353['prependOptionLabel'] = NULL;
$arguments353['prependOptionValue'] = NULL;
$arguments353['multiple'] = false;
$renderChildrenClosure354 = function() {return NULL;};
$viewHelper355 = $self->getViewHelper('$viewHelper355', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper355->setArguments($arguments353);
$viewHelper355->setRenderingContext($renderingContext);
$viewHelper355->setRenderChildrenClosure($renderChildrenClosure354);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output352 .= $viewHelper355->initializeArgumentsAndRender();

$output352 .= '
            </div>
            <div class="form-group col-md-2">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments356 = array();
$arguments356['value'] = 'Anzeigen';
$arguments356['id'] = 'summary-submit';
$arguments356['class'] = 'btn btn-primary';
$arguments356['additionalAttributes'] = NULL;
$arguments356['data'] = NULL;
$arguments356['name'] = NULL;
$arguments356['property'] = NULL;
$arguments356['disabled'] = NULL;
$arguments356['dir'] = NULL;
$arguments356['lang'] = NULL;
$arguments356['style'] = NULL;
$arguments356['title'] = NULL;
$arguments356['accesskey'] = NULL;
$arguments356['tabindex'] = NULL;
$arguments356['onclick'] = NULL;
$renderChildrenClosure357 = function() {return NULL;};
$viewHelper358 = $self->getViewHelper('$viewHelper358', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper358->setArguments($arguments356);
$viewHelper358->setRenderingContext($renderingContext);
$viewHelper358->setRenderChildrenClosure($renderChildrenClosure357);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output352 .= $viewHelper358->initializeArgumentsAndRender();

$output352 .= '
            </div>
        </div>
    ';
return $output352;
};
$viewHelper359 = $self->getViewHelper('$viewHelper359', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper359->setArguments($arguments350);
$viewHelper359->setRenderingContext($renderingContext);
$viewHelper359->setRenderChildrenClosure($renderChildrenClosure351);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output349 .= $viewHelper359->initializeArgumentsAndRender();

$output349 .= ' 

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments360 = array();
// Rendering Boolean node
$arguments360['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('solution'));
$arguments360['then'] = NULL;
$arguments360['else'] = NULL;
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output362 = '';

$output362 .= '                                
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>
                        <span class="label label-primary">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments363 = array();
$arguments363['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'teilprojektnummer', $renderingContext);
$arguments363['keepQuotes'] = false;
$arguments363['encoding'] = NULL;
$arguments363['doubleEncode'] = true;
$renderChildrenClosure364 = function() {return NULL;};
$value365 = ($arguments363['value'] !== NULL ? $arguments363['value'] : $renderChildrenClosure364());

$output362 .= (!is_string($value365) ? $value365 : htmlspecialchars($value365, ($arguments363['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments363['encoding'] !== NULL ? $arguments363['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments363['doubleEncode']));

$output362 .= '</span>
                        ';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper
$arguments366 = array();
$output367 = '';

$output367 .= 'edit[tx_wisedocasysdomaindesigner_domain_model_loesung][';

$output367 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'uid', $renderingContext);

$output367 .= ']=edit';
$arguments366['parameters'] = $output367;
$arguments366['additionalAttributes'] = NULL;
$arguments366['data'] = NULL;
$arguments366['returnUrl'] = '';
$arguments366['class'] = NULL;
$arguments366['dir'] = NULL;
$arguments366['id'] = NULL;
$arguments366['lang'] = NULL;
$arguments366['style'] = NULL;
$arguments366['title'] = NULL;
$arguments366['accesskey'] = NULL;
$arguments366['tabindex'] = NULL;
$arguments366['onclick'] = NULL;
$arguments366['name'] = NULL;
$arguments366['target'] = NULL;
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output369 = '';

$output369 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments370 = array();
$arguments370['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'loesungsbezeichnung', $renderingContext);
$arguments370['keepQuotes'] = false;
$arguments370['encoding'] = NULL;
$arguments370['doubleEncode'] = true;
$renderChildrenClosure371 = function() {return NULL;};
$value372 = ($arguments370['value'] !== NULL ? $arguments370['value'] : $renderChildrenClosure371());

$output369 .= (!is_string($value372) ? $value372 : htmlspecialchars($value372, ($arguments370['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments370['encoding'] !== NULL ? $arguments370['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments370['doubleEncode']));

$output369 .= '
                        ';
return $output369;
};
$viewHelper373 = $self->getViewHelper('$viewHelper373', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper');
$viewHelper373->setArguments($arguments366);
$viewHelper373->setRenderingContext($renderingContext);
$viewHelper373->setRenderChildrenClosure($renderChildrenClosure368);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper

$output362 .= $viewHelper373->initializeArgumentsAndRender();

$output362 .= '
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel-group">
                    <div class="panel panel-default panel-solution">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse1">&Uuml;bersicht und Klassifikation</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <dl>
                                            <dt>Art</dt>
                                            <dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments374 = array();
$output375 = '';

$output375 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:loesungsart.';

$output375 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'loesungsart', $renderingContext);
$arguments374['key'] = $output375;
$arguments374['id'] = NULL;
$arguments374['default'] = NULL;
$arguments374['htmlEscape'] = NULL;
$arguments374['arguments'] = NULL;
$arguments374['extensionName'] = NULL;
$renderChildrenClosure376 = function() {return NULL;};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments374, $renderChildrenClosure376, $renderingContext);

$output362 .= '</dd>
                                        </dl>
                                    </div>
                                    <div class="col-xs-2">
                                        <dl>
                                            <dt>L&ouml;sungsklasse</dt>
                                            <dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments377 = array();
$output378 = '';

$output378 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:loesungsklasse.';

$output378 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'loesungsklasse', $renderingContext);
$arguments377['key'] = $output378;
$arguments377['id'] = NULL;
$arguments377['default'] = NULL;
$arguments377['htmlEscape'] = NULL;
$arguments377['arguments'] = NULL;
$arguments377['extensionName'] = NULL;
$renderChildrenClosure379 = function() {return NULL;};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments377, $renderChildrenClosure379, $renderingContext);

$output362 .= '</dd>
                                        </dl>
                                    </div>
                                    <div class="col-xs-2">
                                        <dl>
                                            <dt>Phase der themischen Wirkkette</dt>
                                            <dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments380 = array();
$output381 = '';

$output381 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:phase_thermische_wirkkette.';

$output381 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'phaseDerThermischenWirkkette', $renderingContext);
$arguments380['key'] = $output381;
$arguments380['id'] = NULL;
$arguments380['default'] = NULL;
$arguments380['htmlEscape'] = NULL;
$arguments380['arguments'] = NULL;
$arguments380['extensionName'] = NULL;
$renderChildrenClosure382 = function() {return NULL;};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments380, $renderChildrenClosure382, $renderingContext);

$output362 .= '</dd>
                                        </dl>
                                    </div>
                                    <div class="col-xs-2">
                                        <dl>
                                            <dt>Physikalischer Effekt</dt>
                                            <dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments383 = array();
$output384 = '';

$output384 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:physikalischer_effekt.';

$output384 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'physikalischerEffekt', $renderingContext);
$arguments383['key'] = $output384;
$arguments383['id'] = NULL;
$arguments383['default'] = NULL;
$arguments383['htmlEscape'] = NULL;
$arguments383['arguments'] = NULL;
$arguments383['extensionName'] = NULL;
$renderChildrenClosure385 = function() {return NULL;};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments383, $renderChildrenClosure385, $renderingContext);

$output362 .= '</dd>
                                        </dl>
                                    </div>
                                    <div class="col-xs-2">
                                        <dl>
                                            <dt>Betrifft</dt>
                                            <dd>
                                                Hersteller: 
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments386 = array();
// Rendering Boolean node
$arguments386['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'betrifftHersteller', $renderingContext), 1);
$arguments386['then'] = NULL;
$arguments386['else'] = NULL;
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output388 = '';

$output388 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments389 = array();
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                        <span class="badge badge-success">Ja</span>
                                                    ';
};

$output388 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);

$output388 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments391 = array();
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                        <span class="badge badge-danger">Nein</span>
                                                    ';
};

$output388 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext);

$output388 .= '
                                                ';
return $output388;
};
$arguments386['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                        <span class="badge badge-success">Ja</span>
                                                    ';
};
$arguments386['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                        <span class="badge badge-danger">Nein</span>
                                                    ';
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments386, $renderChildrenClosure387, $renderingContext);

$output362 .= '
                                                <br>
                                                Betreiber:
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments393 = array();
// Rendering Boolean node
$arguments393['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'betrifftBetreiber', $renderingContext), 1);
$arguments393['then'] = NULL;
$arguments393['else'] = NULL;
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output395 = '';

$output395 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments396 = array();
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                        <span class="badge badge-success">Ja</span>
                                                    ';
};

$output395 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output395 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments398 = array();
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                        <span class="badge badge-danger">Nein</span>
                                                    ';
};

$output395 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext);

$output395 .= '
                                                ';
return $output395;
};
$arguments393['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                        <span class="badge badge-success">Ja</span>
                                                    ';
};
$arguments393['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                        <span class="badge badge-danger">Nein</span>
                                                    ';
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext);

$output362 .= '
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="col-xs-2">
                                        <dl>
                                            <dt>Gestaltungsarten</dt>
                                            <dd>
                                                <ul>
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments400 = array();
$arguments400['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'gestaltungsart', $renderingContext);
$arguments400['as'] = 'ga';
$arguments400['key'] = '';
$arguments400['reverse'] = false;
$arguments400['iteration'] = NULL;
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output402 = '';

$output402 .= '
                                                        <li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments403 = array();
$arguments403['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('ga'), 'bezeichnung', $renderingContext);
$arguments403['keepQuotes'] = false;
$arguments403['encoding'] = NULL;
$arguments403['doubleEncode'] = true;
$renderChildrenClosure404 = function() {return NULL;};
$value405 = ($arguments403['value'] !== NULL ? $arguments403['value'] : $renderChildrenClosure404());

$output402 .= (!is_string($value405) ? $value405 : htmlspecialchars($value405, ($arguments403['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments403['encoding'] !== NULL ? $arguments403['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments403['doubleEncode']));

$output402 .= '</li> 
                                                    ';
return $output402;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext);

$output362 .= '
                                                </ul>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse2">Voraussetzungen, Anwendung, Ergebnisse</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="page-header">
                                            <h4>Voraussetzungen und Bedingungen</h4> 
                                        </div>
                                        <div class="io-objects">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments406 = array();
$arguments406['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'inputRessource', $renderingContext);
$arguments406['as'] = 'inputRessource';
$arguments406['key'] = '';
$arguments406['reverse'] = false;
$arguments406['iteration'] = NULL;
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output408 = '';

$output408 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments409 = array();
$arguments409['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('inputRessource'), 'ressource', $renderingContext);
$arguments409['as'] = 'ressource';
$arguments409['key'] = '';
$arguments409['reverse'] = false;
$arguments409['iteration'] = NULL;
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output411 = '';

$output411 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments412 = array();
$arguments412['partial'] = 'SolutionOverview/RessourcePanel';
// Rendering Array
$array413 = array();
$array413['ressource'] = $currentVariableContainer->getOrNull('ressource');
$array413['ressourceContainer'] = $currentVariableContainer->getOrNull('inputRessource');
$arguments412['arguments'] = $array413;
$arguments412['section'] = NULL;
$arguments412['optional'] = false;
$renderChildrenClosure414 = function() {return NULL;};

$output411 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments412, $renderChildrenClosure414, $renderingContext);

$output411 .= '
                                                ';
return $output411;
};

$output408 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext);

$output408 .= '
                                            ';
return $output408;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext);

$output362 .= '

                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments415 = array();
$arguments415['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'inputModell', $renderingContext);
$arguments415['as'] = 'inputModell';
$arguments415['key'] = '';
$arguments415['reverse'] = false;
$arguments415['iteration'] = NULL;
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output417 = '';

$output417 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments418 = array();
$arguments418['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('inputModell'), 'modell', $renderingContext);
$arguments418['as'] = 'modell';
$arguments418['key'] = '';
$arguments418['reverse'] = false;
$arguments418['iteration'] = NULL;
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output420 = '';

$output420 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments421 = array();
$arguments421['partial'] = 'SolutionOverview/ModellPanel';
// Rendering Array
$array422 = array();
$array422['modell'] = $currentVariableContainer->getOrNull('modell');
$array422['modellContainer'] = $currentVariableContainer->getOrNull('inputModell');
$arguments421['arguments'] = $array422;
$arguments421['section'] = NULL;
$arguments421['optional'] = false;
$renderChildrenClosure423 = function() {return NULL;};

$output420 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments421, $renderChildrenClosure423, $renderingContext);

$output420 .= '    
                                                ';
return $output420;
};

$output417 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext);

$output417 .= '
                                            ';
return $output417;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments415, $renderChildrenClosure416, $renderingContext);

$output362 .= '

                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments424 = array();
$arguments424['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'inputMessmittel', $renderingContext);
$arguments424['as'] = 'inputMessmittel';
$arguments424['key'] = '';
$arguments424['reverse'] = false;
$arguments424['iteration'] = NULL;
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output426 = '';

$output426 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments427 = array();
$arguments427['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('inputMessmittel'), 'messmittel', $renderingContext);
$arguments427['as'] = 'messmittel';
$arguments427['key'] = '';
$arguments427['reverse'] = false;
$arguments427['iteration'] = NULL;
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output429 = '';

$output429 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments430 = array();
$arguments430['partial'] = 'SolutionOverview/MessmittelPanel';
// Rendering Array
$array431 = array();
$array431['messmittel'] = $currentVariableContainer->getOrNull('messmittel');
$array431['messmittelContainer'] = $currentVariableContainer->getOrNull('inputMessmittel');
$arguments430['arguments'] = $array431;
$arguments430['section'] = NULL;
$arguments430['optional'] = false;
$renderChildrenClosure432 = function() {return NULL;};

$output429 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments430, $renderChildrenClosure432, $renderingContext);

$output429 .= '    
                                                ';
return $output429;
};

$output426 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext);

$output426 .= '
                                            ';
return $output426;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments424, $renderChildrenClosure425, $renderingContext);

$output362 .= '

                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments433 = array();
$arguments433['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'inputDaten', $renderingContext);
$arguments433['as'] = 'inputDaten';
$arguments433['key'] = '';
$arguments433['reverse'] = false;
$arguments433['iteration'] = NULL;
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output435 = '';

$output435 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments436 = array();
$arguments436['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('inputDaten'), 'daten', $renderingContext);
$arguments436['as'] = 'daten';
$arguments436['key'] = '';
$arguments436['reverse'] = false;
$arguments436['iteration'] = NULL;
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output438 = '';

$output438 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments439 = array();
$arguments439['partial'] = 'SolutionOverview/DatenPanel';
// Rendering Array
$array440 = array();
$array440['daten'] = $currentVariableContainer->getOrNull('daten');
$array440['datenContainer'] = $currentVariableContainer->getOrNull('inputDaten');
$arguments439['arguments'] = $array440;
$arguments439['section'] = NULL;
$arguments439['optional'] = false;
$renderChildrenClosure441 = function() {return NULL;};

$output438 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments439, $renderChildrenClosure441, $renderingContext);

$output438 .= '
                                                ';
return $output438;
};

$output435 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext);

$output435 .= '
                                            ';
return $output435;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext);

$output362 .= '
                                        </div>

                                        <div class="page-header margin-top">
                                            <h4>Voraussetzungen</h4> 
                                        </div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments442 = array();
// Rendering Boolean node
$arguments442['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'komponentenbedingung', $renderingContext));
$arguments442['then'] = NULL;
$arguments442['else'] = NULL;
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output444 = '';

$output444 .= '
                                            <ul>
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments445 = array();
$arguments445['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'komponentenbedingung', $renderingContext);
$arguments445['as'] = 'kb';
$arguments445['key'] = '';
$arguments445['reverse'] = false;
$arguments445['iteration'] = NULL;
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output447 = '';

$output447 .= '
                                                    <li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments448 = array();
$arguments448['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('kb'), 'objekt.bezeichnung', $renderingContext);
$arguments448['keepQuotes'] = false;
$arguments448['encoding'] = NULL;
$arguments448['doubleEncode'] = true;
$renderChildrenClosure449 = function() {return NULL;};
$value450 = ($arguments448['value'] !== NULL ? $arguments448['value'] : $renderChildrenClosure449());

$output447 .= (!is_string($value450) ? $value450 : htmlspecialchars($value450, ($arguments448['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments448['encoding'] !== NULL ? $arguments448['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments448['doubleEncode']));

$output447 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments451 = array();
$output452 = '';

$output452 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:operator.';

$output452 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('kb'), 'operator', $renderingContext);
$arguments451['key'] = $output452;
$arguments451['id'] = NULL;
$arguments451['default'] = NULL;
$arguments451['htmlEscape'] = NULL;
$arguments451['arguments'] = NULL;
$arguments451['extensionName'] = NULL;
$renderChildrenClosure453 = function() {return NULL;};

$output447 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments451, $renderChildrenClosure453, $renderingContext);

$output447 .= ' "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments454 = array();
$arguments454['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('kb'), 'wert', $renderingContext);
$arguments454['keepQuotes'] = false;
$arguments454['encoding'] = NULL;
$arguments454['doubleEncode'] = true;
$renderChildrenClosure455 = function() {return NULL;};
$value456 = ($arguments454['value'] !== NULL ? $arguments454['value'] : $renderChildrenClosure455());

$output447 .= (!is_string($value456) ? $value456 : htmlspecialchars($value456, ($arguments454['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments454['encoding'] !== NULL ? $arguments454['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments454['doubleEncode']));

$output447 .= '"</li>
                                                ';
return $output447;
};

$output444 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext);

$output444 .= '
                                            </ul>
                                        ';
return $output444;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);

$output362 .= '
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="page-header">
                                            <h4>Anwendungen und Arbeitsschritte</h4> 
                                        </div>
                                        <div class="row steps">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments457 = array();
$arguments457['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'arbeitsschritte', $renderingContext);
$arguments457['as'] = 'arbeitsschritt';
$arguments457['iteration'] = 'iterator';
$arguments457['key'] = '';
$arguments457['reverse'] = false;
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output459 = '';

$output459 .= '
                                                <div class="col-xs-4">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments460 = array();
$arguments460['partial'] = 'SolutionOverview/Step';
// Rendering Array
$array461 = array();
$array461['step'] = $currentVariableContainer->getOrNull('arbeitsschritt');
$array461['number'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'cycle', $renderingContext);
$arguments460['arguments'] = $array461;
$arguments460['section'] = NULL;
$arguments460['optional'] = false;
$renderChildrenClosure462 = function() {return NULL;};

$output459 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments460, $renderChildrenClosure462, $renderingContext);

$output459 .= '    
                                                </div>
                                            ';
return $output459;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext);

$output362 .= '
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="page-header margin-top">
                                                    <h4>Ablaufmodelle BPMN, CMMN</h4>
                                                </div>
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments463 = array();
// Rendering Boolean node
$arguments463['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'ablauf', $renderingContext));
$arguments463['then'] = NULL;
$arguments463['else'] = NULL;
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output465 = '';

$output465 .= '
                                                    <ul class="list-group">
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments466 = array();
$arguments466['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('modelFiles'), 'bpmn', $renderingContext);
$arguments466['as'] = 'file';
$arguments466['key'] = '';
$arguments466['reverse'] = false;
$arguments466['iteration'] = NULL;
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output468 = '';

$output468 .= '
                                                            <li class="list-group-item">
                                                                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments469 = array();
$arguments469['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('file'), 'modelerReference', $renderingContext);
$arguments469['keepQuotes'] = false;
$arguments469['encoding'] = NULL;
$arguments469['doubleEncode'] = true;
$renderChildrenClosure470 = function() {return NULL;};
$value471 = ($arguments469['value'] !== NULL ? $arguments469['value'] : $renderChildrenClosure470());

$output468 .= (!is_string($value471) ? $value471 : htmlspecialchars($value471, ($arguments469['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments469['encoding'] !== NULL ? $arguments469['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments469['doubleEncode']));

$output468 .= '" title="Modell im Modeler anzeigen" target="_blank">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments472 = array();
$arguments472['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('file'), 'name', $renderingContext);
$arguments472['keepQuotes'] = false;
$arguments472['encoding'] = NULL;
$arguments472['doubleEncode'] = true;
$renderChildrenClosure473 = function() {return NULL;};
$value474 = ($arguments472['value'] !== NULL ? $arguments472['value'] : $renderChildrenClosure473());

$output468 .= (!is_string($value474) ? $value474 : htmlspecialchars($value474, ($arguments472['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments472['encoding'] !== NULL ? $arguments472['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments472['doubleEncode']));

$output468 .= '</a>
                                                            </li>
                                                        ';
return $output468;
};

$output465 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext);

$output465 .= '
                                                    </ul>
                                                ';
return $output465;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext);

$output362 .= '
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="page-header margin-top">
                                                    <h4>Entscheidungsmodelle DMN</h4>
                                                </div>
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments475 = array();
// Rendering Boolean node
$arguments475['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'entscheidungen', $renderingContext));
$arguments475['then'] = NULL;
$arguments475['else'] = NULL;
$renderChildrenClosure476 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output477 = '';

$output477 .= '
                                                    <ul class="list-group">
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments478 = array();
$arguments478['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('modelFiles'), 'dmn', $renderingContext);
$arguments478['as'] = 'file';
$arguments478['key'] = '';
$arguments478['reverse'] = false;
$arguments478['iteration'] = NULL;
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output480 = '';

$output480 .= '
                                                            <li class="list-group-item">
                                                                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments481 = array();
$arguments481['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('file'), 'modelerReference', $renderingContext);
$arguments481['keepQuotes'] = false;
$arguments481['encoding'] = NULL;
$arguments481['doubleEncode'] = true;
$renderChildrenClosure482 = function() {return NULL;};
$value483 = ($arguments481['value'] !== NULL ? $arguments481['value'] : $renderChildrenClosure482());

$output480 .= (!is_string($value483) ? $value483 : htmlspecialchars($value483, ($arguments481['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments481['encoding'] !== NULL ? $arguments481['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments481['doubleEncode']));

$output480 .= '" title="Modell im Modeler anzeigen" target="_blank">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments484 = array();
$arguments484['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('file'), 'name', $renderingContext);
$arguments484['keepQuotes'] = false;
$arguments484['encoding'] = NULL;
$arguments484['doubleEncode'] = true;
$renderChildrenClosure485 = function() {return NULL;};
$value486 = ($arguments484['value'] !== NULL ? $arguments484['value'] : $renderChildrenClosure485());

$output480 .= (!is_string($value486) ? $value486 : htmlspecialchars($value486, ($arguments484['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments484['encoding'] !== NULL ? $arguments484['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments484['doubleEncode']));

$output480 .= '</a>
                                                            </li>
                                                        ';
return $output480;
};

$output477 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output477 .= '
                                                    </ul>
                                                ';
return $output477;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments475, $renderChildrenClosure476, $renderingContext);

$output362 .= '
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="page-header">
                                            <h4>L&ouml;sungs-Output</h4> 
                                        </div>
                                        <div class="io-objects">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments487 = array();
$arguments487['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'outputRessource', $renderingContext);
$arguments487['as'] = 'outputRessource';
$arguments487['key'] = '';
$arguments487['reverse'] = false;
$arguments487['iteration'] = NULL;
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output489 = '';

$output489 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments490 = array();
$arguments490['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('outputRessource'), 'ressource', $renderingContext);
$arguments490['as'] = 'ressource';
$arguments490['key'] = '';
$arguments490['reverse'] = false;
$arguments490['iteration'] = NULL;
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output492 = '';

$output492 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments493 = array();
$arguments493['partial'] = 'SolutionOverview/RessourcePanel';
// Rendering Array
$array494 = array();
$array494['ressource'] = $currentVariableContainer->getOrNull('ressource');
$array494['ressourceContainer'] = $currentVariableContainer->getOrNull('outputRessource');
$arguments493['arguments'] = $array494;
$arguments493['section'] = NULL;
$arguments493['optional'] = false;
$renderChildrenClosure495 = function() {return NULL;};

$output492 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments493, $renderChildrenClosure495, $renderingContext);

$output492 .= '
                                                ';
return $output492;
};

$output489 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext);

$output489 .= '
                                            ';
return $output489;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments487, $renderChildrenClosure488, $renderingContext);

$output362 .= '

                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments496 = array();
$arguments496['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'outputModell', $renderingContext);
$arguments496['as'] = 'outputModell';
$arguments496['key'] = '';
$arguments496['reverse'] = false;
$arguments496['iteration'] = NULL;
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output498 = '';

$output498 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments499 = array();
$arguments499['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('outputModell'), 'modell', $renderingContext);
$arguments499['as'] = 'modell';
$arguments499['key'] = '';
$arguments499['reverse'] = false;
$arguments499['iteration'] = NULL;
$renderChildrenClosure500 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output501 = '';

$output501 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments502 = array();
$arguments502['partial'] = 'SolutionOverview/ModellPanel';
// Rendering Array
$array503 = array();
$array503['modell'] = $currentVariableContainer->getOrNull('modell');
$array503['modellContainer'] = $currentVariableContainer->getOrNull('outputModell');
$arguments502['arguments'] = $array503;
$arguments502['section'] = NULL;
$arguments502['optional'] = false;
$renderChildrenClosure504 = function() {return NULL;};

$output501 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments502, $renderChildrenClosure504, $renderingContext);

$output501 .= '    
                                                ';
return $output501;
};

$output498 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments499, $renderChildrenClosure500, $renderingContext);

$output498 .= '
                                            ';
return $output498;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);

$output362 .= '

                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments505 = array();
$arguments505['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'outputMessmittel', $renderingContext);
$arguments505['as'] = 'outputMessmittel';
$arguments505['key'] = '';
$arguments505['reverse'] = false;
$arguments505['iteration'] = NULL;
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output507 = '';

$output507 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments508 = array();
$arguments508['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('outputMessmittel'), 'messmittel', $renderingContext);
$arguments508['as'] = 'messmittel';
$arguments508['key'] = '';
$arguments508['reverse'] = false;
$arguments508['iteration'] = NULL;
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output510 = '';

$output510 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments511 = array();
$arguments511['partial'] = 'SolutionOverview/MessmittelPanel';
// Rendering Array
$array512 = array();
$array512['messmittel'] = $currentVariableContainer->getOrNull('messmittel');
$array512['messmittelContainer'] = $currentVariableContainer->getOrNull('outputMessmittel');
$arguments511['arguments'] = $array512;
$arguments511['section'] = NULL;
$arguments511['optional'] = false;
$renderChildrenClosure513 = function() {return NULL;};

$output510 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments511, $renderChildrenClosure513, $renderingContext);

$output510 .= '    
                                                ';
return $output510;
};

$output507 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext);

$output507 .= '
                                            ';
return $output507;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext);

$output362 .= '

                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments514 = array();
$arguments514['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'outputDaten', $renderingContext);
$arguments514['as'] = 'outputDaten';
$arguments514['key'] = '';
$arguments514['reverse'] = false;
$arguments514['iteration'] = NULL;
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output516 = '';

$output516 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments517 = array();
$arguments517['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('outputDaten'), 'daten', $renderingContext);
$arguments517['as'] = 'daten';
$arguments517['key'] = '';
$arguments517['reverse'] = false;
$arguments517['iteration'] = NULL;
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output519 = '';

$output519 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments520 = array();
$arguments520['partial'] = 'SolutionOverview/DatenPanel';
// Rendering Array
$array521 = array();
$array521['daten'] = $currentVariableContainer->getOrNull('daten');
$array521['datenContainer'] = $currentVariableContainer->getOrNull('outputDaten');
$arguments520['arguments'] = $array521;
$arguments520['section'] = NULL;
$arguments520['optional'] = false;
$renderChildrenClosure522 = function() {return NULL;};

$output519 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments520, $renderChildrenClosure522, $renderingContext);

$output519 .= '
                                                ';
return $output519;
};

$output516 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments517, $renderChildrenClosure518, $renderingContext);

$output516 .= '
                                            ';
return $output516;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext);

$output362 .= '

                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments523 = array();
$arguments523['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'outputMethoden', $renderingContext);
$arguments523['as'] = 'outputMethoden';
$arguments523['key'] = '';
$arguments523['reverse'] = false;
$arguments523['iteration'] = NULL;
$renderChildrenClosure524 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output525 = '';

$output525 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments526 = array();
$arguments526['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('outputMethoden'), 'methode', $renderingContext);
$arguments526['as'] = 'methode';
$arguments526['key'] = '';
$arguments526['reverse'] = false;
$arguments526['iteration'] = NULL;
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output528 = '';

$output528 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments529 = array();
$arguments529['partial'] = 'SolutionOverview/MethodenPanel';
// Rendering Array
$array530 = array();
$array530['methode'] = $currentVariableContainer->getOrNull('methode');
$array530['methodenContainer'] = $currentVariableContainer->getOrNull('outputMethoden');
$arguments529['arguments'] = $array530;
$arguments529['section'] = NULL;
$arguments529['optional'] = false;
$renderChildrenClosure531 = function() {return NULL;};

$output528 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments529, $renderChildrenClosure531, $renderingContext);

$output528 .= '
                                                ';
return $output528;
};

$output525 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext);

$output525 .= '
                                            ';
return $output525;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments523, $renderChildrenClosure524, $renderingContext);

$output362 .= '
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse3">Anwendungsf&auml;lle und Untersuchungen</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <div class="page-header">
                                            <h4>M&ouml;gliche Anwendungsf&auml;lle (auf Basis der Lastf&auml;lle)</h4> 
                                        </div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments532 = array();
// Rendering Boolean node
$arguments532['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('applicationCases'));
$arguments532['then'] = NULL;
$arguments532['else'] = NULL;
$renderChildrenClosure533 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output534 = '';

$output534 .= '
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th style="width: 40%">Anwendungsfall</th>
                                                    <th style="width: 30%">Art</th>
                                                    <th style="width: 30%">Bemerkung</th>
                                                </tr>
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments535 = array();
$arguments535['each'] = $currentVariableContainer->getOrNull('applicationCases');
$arguments535['as'] = 'applicationCase';
$arguments535['key'] = '';
$arguments535['reverse'] = false;
$arguments535['iteration'] = NULL;
$renderChildrenClosure536 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output537 = '';

$output537 .= '
                                                    <tr>
                                                        <td>
                                                            ';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper
$arguments538 = array();
$output539 = '';

$output539 .= 'edit[tx_wisedocasysdomaindesigner_domain_model_fachanwendungsfall][';

$output539 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('applicationCase'), 'applicationCase.uid', $renderingContext);

$output539 .= ']=edit';
$arguments538['parameters'] = $output539;
$arguments538['additionalAttributes'] = NULL;
$arguments538['data'] = NULL;
$arguments538['returnUrl'] = '';
$arguments538['class'] = NULL;
$arguments538['dir'] = NULL;
$arguments538['id'] = NULL;
$arguments538['lang'] = NULL;
$arguments538['style'] = NULL;
$arguments538['title'] = NULL;
$arguments538['accesskey'] = NULL;
$arguments538['tabindex'] = NULL;
$arguments538['onclick'] = NULL;
$arguments538['name'] = NULL;
$arguments538['target'] = NULL;
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output541 = '';

$output541 .= '
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments542 = array();
$arguments542['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('applicationCase'), 'applicationCase.bezeichnung', $renderingContext);
$arguments542['keepQuotes'] = false;
$arguments542['encoding'] = NULL;
$arguments542['doubleEncode'] = true;
$renderChildrenClosure543 = function() {return NULL;};
$value544 = ($arguments542['value'] !== NULL ? $arguments542['value'] : $renderChildrenClosure543());

$output541 .= (!is_string($value544) ? $value544 : htmlspecialchars($value544, ($arguments542['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments542['encoding'] !== NULL ? $arguments542['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments542['doubleEncode']));

$output541 .= '
                                                            ';
return $output541;
};
$viewHelper545 = $self->getViewHelper('$viewHelper545', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper');
$viewHelper545->setArguments($arguments538);
$viewHelper545->setRenderingContext($renderingContext);
$viewHelper545->setRenderChildrenClosure($renderChildrenClosure540);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper

$output537 .= $viewHelper545->initializeArgumentsAndRender();

$output537 .= '
                                                            &nbsp;
                                                            <span class="label label-primary">
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments546 = array();
$output547 = '';

$output547 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:szenarioart.';

$output547 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('applicationCase'), 'applicationCase.szenarioart', $renderingContext);
$arguments546['key'] = $output547;
$arguments546['id'] = NULL;
$arguments546['default'] = NULL;
$arguments546['htmlEscape'] = NULL;
$arguments546['arguments'] = NULL;
$arguments546['extensionName'] = NULL;
$renderChildrenClosure548 = function() {return NULL;};

$output537 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments546, $renderChildrenClosure548, $renderingContext);

$output537 .= '
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <div class="alert alert-info">
                                                                <strong>Untersuchungen fanden statt</strong>
                                                            </div>     
                                                        </td>
                                                        <td>
                                                            <b>Mapping auf Basis von: </b><br>
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments549 = array();
$arguments549['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('applicationCase'), 'loadCases', $renderingContext);
$arguments549['as'] = 'loadCase';
$arguments549['key'] = '';
$arguments549['reverse'] = false;
$arguments549['iteration'] = NULL;
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output551 = '';

$output551 .= '
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments552 = array();
$arguments552['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('loadCase'), 'fallbezeichnung', $renderingContext);
$arguments552['keepQuotes'] = false;
$arguments552['encoding'] = NULL;
$arguments552['doubleEncode'] = true;
$renderChildrenClosure553 = function() {return NULL;};
$value554 = ($arguments552['value'] !== NULL ? $arguments552['value'] : $renderChildrenClosure553());

$output551 .= (!is_string($value554) ? $value554 : htmlspecialchars($value554, ($arguments552['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments552['encoding'] !== NULL ? $arguments552['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments552['doubleEncode']));

$output551 .= '<br>
                                                            ';
return $output551;
};

$output537 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext);

$output537 .= '     
                                                        </td>
                                                    </tr>    
                                                ';
return $output537;
};

$output534 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments535, $renderChildrenClosure536, $renderingContext);

$output534 .= '
                                            </table>
                                        ';
return $output534;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments532, $renderChildrenClosure533, $renderingContext);

$output362 .= '
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="page-header">
                                            <h4>Untersuchungen</h4> 
                                        </div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments555 = array();
$arguments555['action'] = 'examinations';
// Rendering Array
$array556 = array();
$array556['solution'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'uid', $renderingContext);
$arguments555['arguments'] = $array556;
$arguments555['target'] = '_blank';
$arguments555['class'] = 'btn btn-primary';
$arguments555['additionalAttributes'] = NULL;
$arguments555['data'] = NULL;
$arguments555['controller'] = NULL;
$arguments555['extensionName'] = NULL;
$arguments555['pluginName'] = NULL;
$arguments555['pageUid'] = NULL;
$arguments555['pageType'] = 0;
$arguments555['noCache'] = false;
$arguments555['noCacheHash'] = false;
$arguments555['section'] = '';
$arguments555['format'] = '';
$arguments555['linkAccessRestrictedPages'] = false;
$arguments555['additionalParams'] = array (
);
$arguments555['absolute'] = false;
$arguments555['addQueryString'] = false;
$arguments555['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments555['addQueryStringMethod'] = NULL;
$arguments555['dir'] = NULL;
$arguments555['id'] = NULL;
$arguments555['lang'] = NULL;
$arguments555['style'] = NULL;
$arguments555['title'] = NULL;
$arguments555['accesskey'] = NULL;
$arguments555['tabindex'] = NULL;
$arguments555['onclick'] = NULL;
$arguments555['name'] = NULL;
$arguments555['rel'] = NULL;
$arguments555['rev'] = NULL;
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output558 = '';

$output558 .= '
                                            Alle Untersuchungen von ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments559 = array();
$arguments559['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'teilprojektnummer', $renderingContext);
$arguments559['keepQuotes'] = false;
$arguments559['encoding'] = NULL;
$arguments559['doubleEncode'] = true;
$renderChildrenClosure560 = function() {return NULL;};
$value561 = ($arguments559['value'] !== NULL ? $arguments559['value'] : $renderChildrenClosure560());

$output558 .= (!is_string($value561) ? $value561 : htmlspecialchars($value561, ($arguments559['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments559['encoding'] !== NULL ? $arguments559['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments559['doubleEncode']));

$output558 .= '
                                        ';
return $output558;
};
$viewHelper562 = $self->getViewHelper('$viewHelper562', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper562->setArguments($arguments555);
$viewHelper562->setRenderingContext($renderingContext);
$viewHelper562->setRenderChildrenClosure($renderChildrenClosure557);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output362 .= $viewHelper562->initializeArgumentsAndRender();

$output362 .= '
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-9">
                                        <div class="page-header">
                                            <h4>Bewertung hinsichtlich Anwendungsf&auml;lle (aus Eignungsprofilen)</h4>
                                        </div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments563 = array();
// Rendering Boolean node
$arguments563['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('aptitudes'));
$arguments563['then'] = NULL;
$arguments563['else'] = NULL;
$renderChildrenClosure564 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output565 = '';

$output565 .= '
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th style="width: 40%">Anwendungsfall</th>
                                                    <th style="width: 15%">Bewertung</th>
                                                    <th style="width: 15%">Status</th>
                                                    <th style="width: 30%">Bemerkung</th>
                                                </tr>
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments566 = array();
$arguments566['each'] = $currentVariableContainer->getOrNull('aptitudes');
$arguments566['as'] = 'aptitude';
$arguments566['key'] = '';
$arguments566['reverse'] = false;
$arguments566['iteration'] = NULL;
$renderChildrenClosure567 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output568 = '';

$output568 .= '
                                                    <tr>
                                                        <td>
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments569 = array();
$arguments569['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('aptitude'), 'anwendungsfall', $renderingContext);
$arguments569['as'] = 'aptitudeApplicationCase';
$arguments569['key'] = '';
$arguments569['reverse'] = false;
$arguments569['iteration'] = NULL;
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output571 = '';

$output571 .= '
                                                                ';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper
$arguments572 = array();
$output573 = '';

$output573 .= 'edit[tx_wisedocasysdomaindesigner_domain_model_fachanwendungsfall][';

$output573 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('aptitudeApplicationCase'), 'uid', $renderingContext);

$output573 .= ']=edit';
$arguments572['parameters'] = $output573;
$arguments572['additionalAttributes'] = NULL;
$arguments572['data'] = NULL;
$arguments572['returnUrl'] = '';
$arguments572['class'] = NULL;
$arguments572['dir'] = NULL;
$arguments572['id'] = NULL;
$arguments572['lang'] = NULL;
$arguments572['style'] = NULL;
$arguments572['title'] = NULL;
$arguments572['accesskey'] = NULL;
$arguments572['tabindex'] = NULL;
$arguments572['onclick'] = NULL;
$arguments572['name'] = NULL;
$arguments572['target'] = NULL;
$renderChildrenClosure574 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output575 = '';

$output575 .= '
                                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments576 = array();
$arguments576['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('aptitudeApplicationCase'), 'bezeichnung', $renderingContext);
$arguments576['keepQuotes'] = false;
$arguments576['encoding'] = NULL;
$arguments576['doubleEncode'] = true;
$renderChildrenClosure577 = function() {return NULL;};
$value578 = ($arguments576['value'] !== NULL ? $arguments576['value'] : $renderChildrenClosure577());

$output575 .= (!is_string($value578) ? $value578 : htmlspecialchars($value578, ($arguments576['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments576['encoding'] !== NULL ? $arguments576['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments576['doubleEncode']));

$output575 .= '
                                                                ';
return $output575;
};
$viewHelper579 = $self->getViewHelper('$viewHelper579', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper');
$viewHelper579->setArguments($arguments572);
$viewHelper579->setRenderingContext($renderingContext);
$viewHelper579->setRenderChildrenClosure($renderChildrenClosure574);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper

$output571 .= $viewHelper579->initializeArgumentsAndRender();

$output571 .= '
                                                                &nbsp;
                                                                <span class="label label-primary">
                                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments580 = array();
$output581 = '';

$output581 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:szenarioart.';

$output581 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('aptitudeApplicationCase'), 'szenarioart', $renderingContext);
$arguments580['key'] = $output581;
$arguments580['id'] = NULL;
$arguments580['default'] = NULL;
$arguments580['htmlEscape'] = NULL;
$arguments580['arguments'] = NULL;
$arguments580['extensionName'] = NULL;
$renderChildrenClosure582 = function() {return NULL;};

$output571 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments580, $renderChildrenClosure582, $renderingContext);

$output571 .= '
                                                                </span>
                                                            ';
return $output571;
};

$output568 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext);

$output568 .= '
                                                        </td>
                                                        <td>
                                                            <div class="alert alert-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments583 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments584 = array();
$arguments584['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('aptitude'), 'eignungsgrad', $renderingContext);
$arguments584['keepQuotes'] = false;
$arguments584['encoding'] = NULL;
$arguments584['doubleEncode'] = true;
$renderChildrenClosure585 = function() {return NULL;};
$value586 = ($arguments584['value'] !== NULL ? $arguments584['value'] : $renderChildrenClosure585());
$arguments583['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<=', (!is_string($value586) ? $value586 : htmlspecialchars($value586, ($arguments584['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments584['encoding'] !== NULL ? $arguments584['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments584['doubleEncode'])), 2);
$arguments583['then'] = 'danger';
$arguments583['else'] = 'success';
$renderChildrenClosure587 = function() {return NULL;};

$output568 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments583, $renderChildrenClosure587, $renderingContext);

$output568 .= '">
                                                                <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments588 = array();
$output589 = '';

$output589 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:eignungsgrad.';

$output589 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('aptitude'), 'eignungsgrad', $renderingContext);
$arguments588['key'] = $output589;
$arguments588['id'] = NULL;
$arguments588['default'] = NULL;
$arguments588['htmlEscape'] = NULL;
$arguments588['arguments'] = NULL;
$arguments588['extensionName'] = NULL;
$renderChildrenClosure590 = function() {return NULL;};

$output568 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments588, $renderChildrenClosure590, $renderingContext);

$output568 .= '</strong><br>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments591 = array();
$output592 = '';

$output592 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:eignungsprofilstatus.';

$output592 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('aptitude'), 'eignungsprofilstatus', $renderingContext);
$arguments591['key'] = $output592;
$arguments591['id'] = NULL;
$arguments591['default'] = NULL;
$arguments591['htmlEscape'] = NULL;
$arguments591['arguments'] = NULL;
$arguments591['extensionName'] = NULL;
$renderChildrenClosure593 = function() {return NULL;};

$output568 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments591, $renderChildrenClosure593, $renderingContext);

$output568 .= '
                                                        </td>
                                                        <td>
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments594 = array();
$arguments594['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('aptitude'), 'bemerkung', $renderingContext);
$arguments594['keepQuotes'] = false;
$arguments594['encoding'] = NULL;
$arguments594['doubleEncode'] = true;
$renderChildrenClosure595 = function() {return NULL;};
$value596 = ($arguments594['value'] !== NULL ? $arguments594['value'] : $renderChildrenClosure595());

$output568 .= (!is_string($value596) ? $value596 : htmlspecialchars($value596, ($arguments594['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments594['encoding'] !== NULL ? $arguments594['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments594['doubleEncode']));

$output568 .= '
                                                        </td>
                                                    </tr>
                                                ';
return $output568;
};

$output565 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments566, $renderChildrenClosure567, $renderingContext);

$output565 .= '
                                            </table>
                                        ';
return $output565;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments563, $renderChildrenClosure564, $renderingContext);

$output362 .= '
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse4">Bewertungen und Auswertungen</a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <div class="page-header">
                                            <h4>Auswirkungen</h4>
                                        </div> 
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments597 = array();
// Rendering Boolean node
$arguments597['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'auswirkung', $renderingContext));
$arguments597['then'] = NULL;
$arguments597['else'] = NULL;
$renderChildrenClosure598 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output599 = '';

$output599 .= '
                                            <div class="table-fit">
                                                <table class="table table-striped table-hover">
                                                    <tr>
                                                        <th style="width: 30%">Auswirkung</th>
                                                        <th style="width: 20%">Parameter</th>
                                                        <th style="width: 20%">Tendenz</th>
                                                        <th class="right" style="width: 10%">Wert</th>
                                                        <th class="right" style="width: 10%">Wert (von)</th>
                                                        <th class="right" style="width: 10%">Wert (bis)</th>
                                                    </tr>
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments600 = array();
$arguments600['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'auswirkung', $renderingContext);
$arguments600['as'] = 'auswirkung';
$arguments600['key'] = '';
$arguments600['reverse'] = false;
$arguments600['iteration'] = NULL;
$renderChildrenClosure601 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output602 = '';

$output602 .= '
                                                        <tr> 
                                                            <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments603 = array();
$arguments603['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'bezeichnung', $renderingContext);
$arguments603['keepQuotes'] = false;
$arguments603['encoding'] = NULL;
$arguments603['doubleEncode'] = true;
$renderChildrenClosure604 = function() {return NULL;};
$value605 = ($arguments603['value'] !== NULL ? $arguments603['value'] : $renderChildrenClosure604());

$output602 .= (!is_string($value605) ? $value605 : htmlspecialchars($value605, ($arguments603['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments603['encoding'] !== NULL ? $arguments603['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments603['doubleEncode']));

$output602 .= '</td>
                                                            <td>
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments606 = array();
// Rendering Boolean node
$arguments606['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'zielparameter', $renderingContext));
$arguments606['then'] = NULL;
$arguments606['else'] = NULL;
$renderChildrenClosure607 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output608 = '';

$output608 .= '
                                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments609 = array();
$arguments609['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'zielparameter', $renderingContext);
$arguments609['as'] = 'zielparameter';
$arguments609['key'] = '';
$arguments609['reverse'] = false;
$arguments609['iteration'] = NULL;
$renderChildrenClosure610 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output611 = '';

$output611 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments612 = array();
$arguments612['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('zielparameter'), 'parametername', $renderingContext);
$arguments612['keepQuotes'] = false;
$arguments612['encoding'] = NULL;
$arguments612['doubleEncode'] = true;
$renderChildrenClosure613 = function() {return NULL;};
$value614 = ($arguments612['value'] !== NULL ? $arguments612['value'] : $renderChildrenClosure613());

$output611 .= (!is_string($value614) ? $value614 : htmlspecialchars($value614, ($arguments612['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments612['encoding'] !== NULL ? $arguments612['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments612['doubleEncode']));

$output611 .= '<br>
                                                                    ';
return $output611;
};

$output608 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments609, $renderChildrenClosure610, $renderingContext);

$output608 .= '
                                                                ';
return $output608;
};

$output602 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments606, $renderChildrenClosure607, $renderingContext);

$output602 .= '
                                                            </td>
                                                            <td>
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments615 = array();
$output616 = '';

$output616 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:tendenz.';

$output616 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'tendenz', $renderingContext);
$arguments615['key'] = $output616;
$arguments615['id'] = NULL;
$arguments615['default'] = NULL;
$arguments615['htmlEscape'] = NULL;
$arguments615['arguments'] = NULL;
$arguments615['extensionName'] = NULL;
$renderChildrenClosure617 = function() {return NULL;};

$output602 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments615, $renderChildrenClosure617, $renderingContext);

$output602 .= '   
                                                            </td>
                                                            <td class="right">
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments618 = array();
// Rendering Boolean node
$arguments618['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'wert', $renderingContext), 0);
$arguments618['then'] = NULL;
$arguments618['else'] = NULL;
$renderChildrenClosure619 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output620 = '';

$output620 .= '
                                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments621 = array();
$renderChildrenClosure622 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output623 = '';

$output623 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper
$arguments624 = array();
$arguments624['decimals'] = '2';
$arguments624['decimalSeparator'] = ',';
$arguments624['thousandsSeparator'] = ',';
$renderChildrenClosure625 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments626 = array();
$arguments626['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'wert', $renderingContext);
$arguments626['keepQuotes'] = false;
$arguments626['encoding'] = NULL;
$arguments626['doubleEncode'] = true;
$renderChildrenClosure627 = function() {return NULL;};
$value628 = ($arguments626['value'] !== NULL ? $arguments626['value'] : $renderChildrenClosure627());
return (!is_string($value628) ? $value628 : htmlspecialchars($value628, ($arguments626['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments626['encoding'] !== NULL ? $arguments626['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments626['doubleEncode']));
};

$output623 .= TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper::renderStatic($arguments624, $renderChildrenClosure625, $renderingContext);

$output623 .= '
                                                                    ';
return $output623;
};

$output620 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments621, $renderChildrenClosure622, $renderingContext);

$output620 .= '
                                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments629 = array();
$renderChildrenClosure630 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                                        -
                                                                    ';
};

$output620 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments629, $renderChildrenClosure630, $renderingContext);

$output620 .= '
                                                                ';
return $output620;
};
$arguments618['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output631 = '';

$output631 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper
$arguments632 = array();
$arguments632['decimals'] = '2';
$arguments632['decimalSeparator'] = ',';
$arguments632['thousandsSeparator'] = ',';
$renderChildrenClosure633 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments634 = array();
$arguments634['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'wert', $renderingContext);
$arguments634['keepQuotes'] = false;
$arguments634['encoding'] = NULL;
$arguments634['doubleEncode'] = true;
$renderChildrenClosure635 = function() {return NULL;};
$value636 = ($arguments634['value'] !== NULL ? $arguments634['value'] : $renderChildrenClosure635());
return (!is_string($value636) ? $value636 : htmlspecialchars($value636, ($arguments634['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments634['encoding'] !== NULL ? $arguments634['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments634['doubleEncode']));
};

$output631 .= TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper::renderStatic($arguments632, $renderChildrenClosure633, $renderingContext);

$output631 .= '
                                                                    ';
return $output631;
};
$arguments618['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                                        -
                                                                    ';
};

$output602 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments618, $renderChildrenClosure619, $renderingContext);

$output602 .= '    
                                                            </td>
                                                            <td class="right">
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments637 = array();
// Rendering Boolean node
$arguments637['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'wertVon', $renderingContext), 0);
$arguments637['then'] = NULL;
$arguments637['else'] = NULL;
$renderChildrenClosure638 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output639 = '';

$output639 .= '
                                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments640 = array();
$renderChildrenClosure641 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output642 = '';

$output642 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper
$arguments643 = array();
$arguments643['decimals'] = '2';
$arguments643['decimalSeparator'] = ',';
$arguments643['thousandsSeparator'] = ',';
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments645 = array();
$arguments645['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'wertVon', $renderingContext);
$arguments645['keepQuotes'] = false;
$arguments645['encoding'] = NULL;
$arguments645['doubleEncode'] = true;
$renderChildrenClosure646 = function() {return NULL;};
$value647 = ($arguments645['value'] !== NULL ? $arguments645['value'] : $renderChildrenClosure646());
return (!is_string($value647) ? $value647 : htmlspecialchars($value647, ($arguments645['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments645['encoding'] !== NULL ? $arguments645['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments645['doubleEncode']));
};

$output642 .= TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper::renderStatic($arguments643, $renderChildrenClosure644, $renderingContext);

$output642 .= '
                                                                    ';
return $output642;
};

$output639 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments640, $renderChildrenClosure641, $renderingContext);

$output639 .= '
                                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments648 = array();
$renderChildrenClosure649 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                                        -
                                                                    ';
};

$output639 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments648, $renderChildrenClosure649, $renderingContext);

$output639 .= '
                                                                ';
return $output639;
};
$arguments637['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output650 = '';

$output650 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper
$arguments651 = array();
$arguments651['decimals'] = '2';
$arguments651['decimalSeparator'] = ',';
$arguments651['thousandsSeparator'] = ',';
$renderChildrenClosure652 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments653 = array();
$arguments653['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'wertVon', $renderingContext);
$arguments653['keepQuotes'] = false;
$arguments653['encoding'] = NULL;
$arguments653['doubleEncode'] = true;
$renderChildrenClosure654 = function() {return NULL;};
$value655 = ($arguments653['value'] !== NULL ? $arguments653['value'] : $renderChildrenClosure654());
return (!is_string($value655) ? $value655 : htmlspecialchars($value655, ($arguments653['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments653['encoding'] !== NULL ? $arguments653['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments653['doubleEncode']));
};

$output650 .= TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper::renderStatic($arguments651, $renderChildrenClosure652, $renderingContext);

$output650 .= '
                                                                    ';
return $output650;
};
$arguments637['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                                        -
                                                                    ';
};

$output602 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments637, $renderChildrenClosure638, $renderingContext);

$output602 .= '
                                                            </td>
                                                            <td class="right">
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments656 = array();
// Rendering Boolean node
$arguments656['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'wertBis', $renderingContext), 0);
$arguments656['then'] = NULL;
$arguments656['else'] = NULL;
$renderChildrenClosure657 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output658 = '';

$output658 .= '
                                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments659 = array();
$renderChildrenClosure660 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output661 = '';

$output661 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper
$arguments662 = array();
$arguments662['decimals'] = '2';
$arguments662['decimalSeparator'] = ',';
$arguments662['thousandsSeparator'] = ',';
$renderChildrenClosure663 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments664 = array();
$arguments664['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'wertBis', $renderingContext);
$arguments664['keepQuotes'] = false;
$arguments664['encoding'] = NULL;
$arguments664['doubleEncode'] = true;
$renderChildrenClosure665 = function() {return NULL;};
$value666 = ($arguments664['value'] !== NULL ? $arguments664['value'] : $renderChildrenClosure665());
return (!is_string($value666) ? $value666 : htmlspecialchars($value666, ($arguments664['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments664['encoding'] !== NULL ? $arguments664['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments664['doubleEncode']));
};

$output661 .= TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper::renderStatic($arguments662, $renderChildrenClosure663, $renderingContext);

$output661 .= '
                                                                    ';
return $output661;
};

$output658 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments659, $renderChildrenClosure660, $renderingContext);

$output658 .= '
                                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments667 = array();
$renderChildrenClosure668 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                                        -
                                                                    ';
};

$output658 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments667, $renderChildrenClosure668, $renderingContext);

$output658 .= '
                                                                ';
return $output658;
};
$arguments656['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output669 = '';

$output669 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper
$arguments670 = array();
$arguments670['decimals'] = '2';
$arguments670['decimalSeparator'] = ',';
$arguments670['thousandsSeparator'] = ',';
$renderChildrenClosure671 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments672 = array();
$arguments672['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('auswirkung'), 'wertBis', $renderingContext);
$arguments672['keepQuotes'] = false;
$arguments672['encoding'] = NULL;
$arguments672['doubleEncode'] = true;
$renderChildrenClosure673 = function() {return NULL;};
$value674 = ($arguments672['value'] !== NULL ? $arguments672['value'] : $renderChildrenClosure673());
return (!is_string($value674) ? $value674 : htmlspecialchars($value674, ($arguments672['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments672['encoding'] !== NULL ? $arguments672['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments672['doubleEncode']));
};

$output669 .= TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper::renderStatic($arguments670, $renderChildrenClosure671, $renderingContext);

$output669 .= '
                                                                    ';
return $output669;
};
$arguments656['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                                                        -
                                                                    ';
};

$output602 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments656, $renderChildrenClosure657, $renderingContext);

$output602 .= '   
                                                            </td>
                                                        </tr>
                                                    ';
return $output602;
};

$output599 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments600, $renderChildrenClosure601, $renderingContext);

$output599 .= '
                                                </table>
                                            </div>
                                        ';
return $output599;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments597, $renderChildrenClosure598, $renderingContext);

$output362 .= '   
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="page-header">
                                            <h4>Sonstiges</h4> 
                                        </div>
                                        <dl>
                                            <dt>Invasivit&auml;tsgrad:</dt>
                                            <dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments675 = array();
$output676 = '';

$output676 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:invasivitaetsgrad.';

$output676 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'invasivitaetsgrad', $renderingContext);
$arguments675['key'] = $output676;
$arguments675['id'] = NULL;
$arguments675['default'] = NULL;
$arguments675['htmlEscape'] = NULL;
$arguments675['arguments'] = NULL;
$arguments675['extensionName'] = NULL;
$renderChildrenClosure677 = function() {return NULL;};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments675, $renderChildrenClosure677, $renderingContext);

$output362 .= '</dd>
                                            <dt>Wartungsintervall:</dt>
                                            <dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments678 = array();
$output679 = '';

$output679 .= 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:wartungsintervall.';

$output679 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'wartungsintervall', $renderingContext);
$arguments678['key'] = $output679;
$arguments678['id'] = NULL;
$arguments678['default'] = NULL;
$arguments678['htmlEscape'] = NULL;
$arguments678['arguments'] = NULL;
$arguments678['extensionName'] = NULL;
$renderChildrenClosure680 = function() {return NULL;};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments678, $renderChildrenClosure680, $renderingContext);

$output362 .= '</dd>
                                            <dt>Realisierungsrisiko:</dt>
                                            <dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments681 = array();
$arguments681['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'realisierungsrisiko', $renderingContext);
$arguments681['keepQuotes'] = false;
$arguments681['encoding'] = NULL;
$arguments681['doubleEncode'] = true;
$renderChildrenClosure682 = function() {return NULL;};
$value683 = ($arguments681['value'] !== NULL ? $arguments681['value'] : $renderChildrenClosure682());

$output362 .= (!is_string($value683) ? $value683 : htmlspecialchars($value683, ($arguments681['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments681['encoding'] !== NULL ? $arguments681['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments681['doubleEncode']));

$output362 .= '</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse5">Bemerkungen</a>
                            </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments684 = array();
// Rendering Boolean node
$arguments684['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'bemerkung', $renderingContext));
$arguments684['then'] = NULL;
$arguments684['else'] = NULL;
$renderChildrenClosure685 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output686 = '';

$output686 .= '
                                            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$arguments687 = array();
$arguments687['value'] = NULL;
$renderChildrenClosure688 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments689 = array();
$arguments689['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'bemerkung', $renderingContext);
$arguments689['keepQuotes'] = false;
$arguments689['encoding'] = NULL;
$arguments689['doubleEncode'] = true;
$renderChildrenClosure690 = function() {return NULL;};
$value691 = ($arguments689['value'] !== NULL ? $arguments689['value'] : $renderChildrenClosure690());
return (!is_string($value691) ? $value691 : htmlspecialchars($value691, ($arguments689['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments689['encoding'] !== NULL ? $arguments689['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments689['doubleEncode']));
};

$output686 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments687, $renderChildrenClosure688, $renderingContext);

$output686 .= '</p>
                                        ';
return $output686;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments684, $renderChildrenClosure685, $renderingContext);

$output362 .= '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    ';
return $output362;
};

$output349 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext);

$output349 .= '
';
return $output349;
};

$output343 .= '';


return $output343;
}


}
#1571077858    244340    