<?php
class FluidCache_WiseDocasysBackend_Recommender_action_index_45253c2a56ad2f499c574b7df5198e4bfdfad2e0 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Filter';
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
    <h1>Recommender</h1> 
    <h3>Bewertungsmetrik</h3>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['name'] = 'filter-submit';
$arguments1['action'] = 'index';
$arguments1['method'] = 'post';
$arguments1['style'] = 'width: 100%;';
$arguments1['class'] = 'form-horizontal hidden-print';
$arguments1['id'] = 'recommender';
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
$arguments1['lang'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
        <ul class="nav nav-tabs">
            <li class="active">
                <a data-toggle="tab" href="#menu1">L&ouml;sungseigenschaften</a>
            </li>
            <li>
                <a data-toggle="tab" href="#menu2">Technische Auswirkung</a>
            </li>
            <li>
                <a data-toggle="tab" href="#menu3">Anwendungsf&auml;lle</a>
            </li>
            <li>
                <a data-toggle="tab" href="#menu4">Aufwand und Ressourcen</a>
            </li>
            <li>
                <a data-toggle="tab" href="#menu5">Kombinierbarkeit</a>
            </li>
            <li>
                <a data-toggle="tab" href="#menu6">Langzeitwirkung</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="menu1" class="tab-pane fade in ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments5 = array();
$arguments5['value'] = $currentVariableContainer->getOrNull('results');
$arguments5['keepQuotes'] = false;
$arguments5['encoding'] = NULL;
$arguments5['doubleEncode'] = true;
$renderChildrenClosure6 = function() {return NULL;};
$value7 = ($arguments5['value'] !== NULL ? $arguments5['value'] : $renderChildrenClosure6());
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value7) ? $value7 : htmlspecialchars($value7, ($arguments5['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments5['encoding'] !== NULL ? $arguments5['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments5['doubleEncode'])));
$arguments4['then'] = '';
$arguments4['else'] = 'active';
$renderChildrenClosure8 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure8, $renderingContext);

$output3 .= '">
                <div class="padding">
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            L&ouml;sungsart:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments9 = array();
$arguments9['property'] = 'operator.kind';
$arguments9['options'] = $currentVariableContainer->getOrNull('operators');
$arguments9['class'] = 'form-control';
$arguments9['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.kind', $renderingContext);
$arguments9['additionalAttributes'] = NULL;
$arguments9['data'] = NULL;
$arguments9['name'] = NULL;
$arguments9['dir'] = NULL;
$arguments9['id'] = NULL;
$arguments9['lang'] = NULL;
$arguments9['style'] = NULL;
$arguments9['title'] = NULL;
$arguments9['accesskey'] = NULL;
$arguments9['tabindex'] = NULL;
$arguments9['onclick'] = NULL;
$arguments9['size'] = NULL;
$arguments9['disabled'] = NULL;
$arguments9['optionValueField'] = NULL;
$arguments9['optionLabelField'] = NULL;
$arguments9['sortByOptionLabel'] = false;
$arguments9['selectAllByDefault'] = false;
$arguments9['errorClass'] = 'f3-form-error';
$arguments9['prependOptionLabel'] = NULL;
$arguments9['prependOptionValue'] = NULL;
$arguments9['multiple'] = false;
$renderChildrenClosure10 = function() {return NULL;};
$viewHelper11 = $self->getViewHelper('$viewHelper11', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper11->setArguments($arguments9);
$viewHelper11->setRenderingContext($renderingContext);
$viewHelper11->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper11->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments12 = array();
$arguments12['property'] = 'kind';
$arguments12['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments13 = array();
$arguments13['property'] = 'loesungsart';
$arguments13['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure14 = function() {return NULL;};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments12['options'] = $viewHelper15->initializeArgumentsAndRender();
$arguments12['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'kind', $renderingContext);
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['name'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$arguments12['size'] = NULL;
$arguments12['disabled'] = NULL;
$arguments12['optionValueField'] = NULL;
$arguments12['optionLabelField'] = NULL;
$arguments12['sortByOptionLabel'] = false;
$arguments12['selectAllByDefault'] = false;
$arguments12['errorClass'] = 'f3-form-error';
$arguments12['prependOptionLabel'] = NULL;
$arguments12['prependOptionValue'] = NULL;
$arguments12['multiple'] = false;
$renderChildrenClosure16 = function() {return NULL;};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper17->setArguments($arguments12);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure16);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper17->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Bezeichnung:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments18 = array();
$arguments18['property'] = 'operator.name';
$arguments18['options'] = $currentVariableContainer->getOrNull('operators');
$arguments18['class'] = 'form-control';
$arguments18['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.name', $renderingContext);
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['name'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$arguments18['size'] = NULL;
$arguments18['disabled'] = NULL;
$arguments18['optionValueField'] = NULL;
$arguments18['optionLabelField'] = NULL;
$arguments18['sortByOptionLabel'] = false;
$arguments18['selectAllByDefault'] = false;
$arguments18['errorClass'] = 'f3-form-error';
$arguments18['prependOptionLabel'] = NULL;
$arguments18['prependOptionValue'] = NULL;
$arguments18['multiple'] = false;
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper20->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments21 = array();
$arguments21['property'] = 'name';
$arguments21['class'] = 'form-control';
$arguments21['placeholder'] = 'Bezeichnung';
$arguments21['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'name', $renderingContext);
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['required'] = false;
$arguments21['type'] = 'text';
$arguments21['name'] = NULL;
$arguments21['autofocus'] = NULL;
$arguments21['disabled'] = NULL;
$arguments21['maxlength'] = NULL;
$arguments21['readonly'] = NULL;
$arguments21['size'] = NULL;
$arguments21['pattern'] = NULL;
$arguments21['errorClass'] = 'f3-form-error';
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$renderChildrenClosure22 = function() {return NULL;};
$viewHelper23 = $self->getViewHelper('$viewHelper23', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper23->setArguments($arguments21);
$viewHelper23->setRenderingContext($renderingContext);
$viewHelper23->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper23->initializeArgumentsAndRender();

$output3 .= '    
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            L&ouml;sungsklasse:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments24 = array();
$arguments24['property'] = 'operator.class';
$arguments24['options'] = $currentVariableContainer->getOrNull('operators');
$arguments24['class'] = 'form-control';
$arguments24['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.class', $renderingContext);
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['name'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['size'] = NULL;
$arguments24['disabled'] = NULL;
$arguments24['optionValueField'] = NULL;
$arguments24['optionLabelField'] = NULL;
$arguments24['sortByOptionLabel'] = false;
$arguments24['selectAllByDefault'] = false;
$arguments24['errorClass'] = 'f3-form-error';
$arguments24['prependOptionLabel'] = NULL;
$arguments24['prependOptionValue'] = NULL;
$arguments24['multiple'] = false;
$renderChildrenClosure25 = function() {return NULL;};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper26->setArguments($arguments24);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper26->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments27 = array();
$arguments27['property'] = 'class';
$arguments27['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments28 = array();
$arguments28['property'] = 'loesungsklasse';
$arguments28['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure29 = function() {return NULL;};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper30->setArguments($arguments28);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments27['options'] = $viewHelper30->initializeArgumentsAndRender();
$arguments27['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'class', $renderingContext);
$arguments27['additionalAttributes'] = NULL;
$arguments27['data'] = NULL;
$arguments27['name'] = NULL;
$arguments27['dir'] = NULL;
$arguments27['id'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['title'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$arguments27['size'] = NULL;
$arguments27['disabled'] = NULL;
$arguments27['optionValueField'] = NULL;
$arguments27['optionLabelField'] = NULL;
$arguments27['sortByOptionLabel'] = false;
$arguments27['selectAllByDefault'] = false;
$arguments27['errorClass'] = 'f3-form-error';
$arguments27['prependOptionLabel'] = NULL;
$arguments27['prependOptionValue'] = NULL;
$arguments27['multiple'] = false;
$renderChildrenClosure31 = function() {return NULL;};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper32->setArguments($arguments27);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper32->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                    </div>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments33 = array();
$arguments33['each'] = $currentVariableContainer->getOrNull('maxDesigntypes');
$arguments33['as'] = 'dt';
$arguments33['key'] = 'i';
$arguments33['reverse'] = false;
$arguments33['iteration'] = NULL;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
                        <div class="row form-group">
                            <label class="control-label col-sm-2">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments36 = array();
// Rendering Boolean node
$arguments36['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('i'), 0);
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    Gestaltungsart(en):
                                ';
};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
                            </label>
                            <div class="col-sm-2">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments38 = array();
$output39 = '';

$output39 .= 'operator.designtype.';

$output39 .= $currentVariableContainer->getOrNull('i');
$arguments38['property'] = $output39;
$arguments38['options'] = $currentVariableContainer->getOrNull('operators');
$arguments38['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments40 = array();
$arguments40['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.designtype', $renderingContext);
$arguments40['index'] = $currentVariableContainer->getOrNull('i');
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['sub'] = NULL;
$renderChildrenClosure41 = function() {return NULL;};
$viewHelper42 = $self->getViewHelper('$viewHelper42', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper42->setArguments($arguments40);
$viewHelper42->setRenderingContext($renderingContext);
$viewHelper42->setRenderChildrenClosure($renderChildrenClosure41);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments38['value'] = $viewHelper42->initializeArgumentsAndRender();
$arguments38['additionalAttributes'] = NULL;
$arguments38['data'] = NULL;
$arguments38['name'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['id'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$arguments38['size'] = NULL;
$arguments38['disabled'] = NULL;
$arguments38['optionValueField'] = NULL;
$arguments38['optionLabelField'] = NULL;
$arguments38['sortByOptionLabel'] = false;
$arguments38['selectAllByDefault'] = false;
$arguments38['errorClass'] = 'f3-form-error';
$arguments38['prependOptionLabel'] = NULL;
$arguments38['prependOptionValue'] = NULL;
$arguments38['multiple'] = false;
$renderChildrenClosure43 = function() {return NULL;};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper44->setArguments($arguments38);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output35 .= $viewHelper44->initializeArgumentsAndRender();

$output35 .= '
                            </div>
                            <div class="col-sm-8">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments45 = array();
$output46 = '';

$output46 .= 'designtype.';

$output46 .= $currentVariableContainer->getOrNull('i');
$arguments45['property'] = $output46;
$arguments45['options'] = $currentVariableContainer->getOrNull('designtypes');
$arguments45['class'] = 'form-control';
$arguments45['optionValueField'] = 'uid';
$arguments45['optionLabelField'] = 'bezeichnung';
// Rendering Boolean node
$arguments45['sortByOptionLabel'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments45['prependOptionLabel'] = 'Ignorieren';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments47 = array();
$arguments47['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'designtype', $renderingContext);
$arguments47['index'] = $currentVariableContainer->getOrNull('i');
$arguments47['additionalAttributes'] = NULL;
$arguments47['data'] = NULL;
$arguments47['sub'] = NULL;
$renderChildrenClosure48 = function() {return NULL;};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper49->setArguments($arguments47);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure48);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments45['value'] = $viewHelper49->initializeArgumentsAndRender();
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['name'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['size'] = NULL;
$arguments45['disabled'] = NULL;
$arguments45['selectAllByDefault'] = false;
$arguments45['errorClass'] = 'f3-form-error';
$arguments45['prependOptionValue'] = NULL;
$arguments45['multiple'] = false;
$renderChildrenClosure50 = function() {return NULL;};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper51->setArguments($arguments45);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output35 .= $viewHelper51->initializeArgumentsAndRender();

$output35 .= '
                            </div>
                        </div>
                    ';
return $output35;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output3 .= '
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Phase:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments52 = array();
$arguments52['property'] = 'operator.phase';
$arguments52['options'] = $currentVariableContainer->getOrNull('operators');
$arguments52['class'] = 'form-control';
$arguments52['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.phase', $renderingContext);
$arguments52['additionalAttributes'] = NULL;
$arguments52['data'] = NULL;
$arguments52['name'] = NULL;
$arguments52['dir'] = NULL;
$arguments52['id'] = NULL;
$arguments52['lang'] = NULL;
$arguments52['style'] = NULL;
$arguments52['title'] = NULL;
$arguments52['accesskey'] = NULL;
$arguments52['tabindex'] = NULL;
$arguments52['onclick'] = NULL;
$arguments52['size'] = NULL;
$arguments52['disabled'] = NULL;
$arguments52['optionValueField'] = NULL;
$arguments52['optionLabelField'] = NULL;
$arguments52['sortByOptionLabel'] = false;
$arguments52['selectAllByDefault'] = false;
$arguments52['errorClass'] = 'f3-form-error';
$arguments52['prependOptionLabel'] = NULL;
$arguments52['prependOptionValue'] = NULL;
$arguments52['multiple'] = false;
$renderChildrenClosure53 = function() {return NULL;};
$viewHelper54 = $self->getViewHelper('$viewHelper54', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper54->setArguments($arguments52);
$viewHelper54->setRenderingContext($renderingContext);
$viewHelper54->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper54->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments55 = array();
$arguments55['property'] = 'phase';
$arguments55['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments56 = array();
$arguments56['property'] = 'phaseDerThermischenWirkkette';
$arguments56['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure57 = function() {return NULL;};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper58->setArguments($arguments56);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure57);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments55['options'] = $viewHelper58->initializeArgumentsAndRender();
$arguments55['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'phase', $renderingContext);
$arguments55['additionalAttributes'] = NULL;
$arguments55['data'] = NULL;
$arguments55['name'] = NULL;
$arguments55['dir'] = NULL;
$arguments55['id'] = NULL;
$arguments55['lang'] = NULL;
$arguments55['style'] = NULL;
$arguments55['title'] = NULL;
$arguments55['accesskey'] = NULL;
$arguments55['tabindex'] = NULL;
$arguments55['onclick'] = NULL;
$arguments55['size'] = NULL;
$arguments55['disabled'] = NULL;
$arguments55['optionValueField'] = NULL;
$arguments55['optionLabelField'] = NULL;
$arguments55['sortByOptionLabel'] = false;
$arguments55['selectAllByDefault'] = false;
$arguments55['errorClass'] = 'f3-form-error';
$arguments55['prependOptionLabel'] = NULL;
$arguments55['prependOptionValue'] = NULL;
$arguments55['multiple'] = false;
$renderChildrenClosure59 = function() {return NULL;};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper60->setArguments($arguments55);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper60->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Physikalischer Effekt:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments61 = array();
$arguments61['property'] = 'operator.effect';
$arguments61['options'] = $currentVariableContainer->getOrNull('operators');
$arguments61['class'] = 'form-control';
$arguments61['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.effect', $renderingContext);
$arguments61['additionalAttributes'] = NULL;
$arguments61['data'] = NULL;
$arguments61['name'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$arguments61['size'] = NULL;
$arguments61['disabled'] = NULL;
$arguments61['optionValueField'] = NULL;
$arguments61['optionLabelField'] = NULL;
$arguments61['sortByOptionLabel'] = false;
$arguments61['selectAllByDefault'] = false;
$arguments61['errorClass'] = 'f3-form-error';
$arguments61['prependOptionLabel'] = NULL;
$arguments61['prependOptionValue'] = NULL;
$arguments61['multiple'] = false;
$renderChildrenClosure62 = function() {return NULL;};
$viewHelper63 = $self->getViewHelper('$viewHelper63', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper63->setArguments($arguments61);
$viewHelper63->setRenderingContext($renderingContext);
$viewHelper63->setRenderChildrenClosure($renderChildrenClosure62);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper63->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments64 = array();
$arguments64['property'] = 'effect';
$arguments64['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments65 = array();
$arguments65['property'] = 'physikalischerEffekt';
$arguments65['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure66 = function() {return NULL;};
$viewHelper67 = $self->getViewHelper('$viewHelper67', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper67->setArguments($arguments65);
$viewHelper67->setRenderingContext($renderingContext);
$viewHelper67->setRenderChildrenClosure($renderChildrenClosure66);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments64['options'] = $viewHelper67->initializeArgumentsAndRender();
$arguments64['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'effect', $renderingContext);
$arguments64['additionalAttributes'] = NULL;
$arguments64['data'] = NULL;
$arguments64['name'] = NULL;
$arguments64['dir'] = NULL;
$arguments64['id'] = NULL;
$arguments64['lang'] = NULL;
$arguments64['style'] = NULL;
$arguments64['title'] = NULL;
$arguments64['accesskey'] = NULL;
$arguments64['tabindex'] = NULL;
$arguments64['onclick'] = NULL;
$arguments64['size'] = NULL;
$arguments64['disabled'] = NULL;
$arguments64['optionValueField'] = NULL;
$arguments64['optionLabelField'] = NULL;
$arguments64['sortByOptionLabel'] = false;
$arguments64['selectAllByDefault'] = false;
$arguments64['errorClass'] = 'f3-form-error';
$arguments64['prependOptionLabel'] = NULL;
$arguments64['prependOptionValue'] = NULL;
$arguments64['multiple'] = false;
$renderChildrenClosure68 = function() {return NULL;};
$viewHelper69 = $self->getViewHelper('$viewHelper69', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper69->setArguments($arguments64);
$viewHelper69->setRenderingContext($renderingContext);
$viewHelper69->setRenderChildrenClosure($renderChildrenClosure68);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper69->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Betrifft Hersteller:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments70 = array();
$arguments70['property'] = 'operator.producer';
$arguments70['options'] = $currentVariableContainer->getOrNull('operators');
$arguments70['class'] = 'form-control';
$arguments70['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.producer', $renderingContext);
$arguments70['additionalAttributes'] = NULL;
$arguments70['data'] = NULL;
$arguments70['name'] = NULL;
$arguments70['dir'] = NULL;
$arguments70['id'] = NULL;
$arguments70['lang'] = NULL;
$arguments70['style'] = NULL;
$arguments70['title'] = NULL;
$arguments70['accesskey'] = NULL;
$arguments70['tabindex'] = NULL;
$arguments70['onclick'] = NULL;
$arguments70['size'] = NULL;
$arguments70['disabled'] = NULL;
$arguments70['optionValueField'] = NULL;
$arguments70['optionLabelField'] = NULL;
$arguments70['sortByOptionLabel'] = false;
$arguments70['selectAllByDefault'] = false;
$arguments70['errorClass'] = 'f3-form-error';
$arguments70['prependOptionLabel'] = NULL;
$arguments70['prependOptionValue'] = NULL;
$arguments70['multiple'] = false;
$renderChildrenClosure71 = function() {return NULL;};
$viewHelper72 = $self->getViewHelper('$viewHelper72', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper72->setArguments($arguments70);
$viewHelper72->setRenderingContext($renderingContext);
$viewHelper72->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper72->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments73 = array();
$arguments73['property'] = 'producer';
$arguments73['options'] = $currentVariableContainer->getOrNull('booleanValues');
$arguments73['class'] = 'form-control';
$arguments73['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'producer', $renderingContext);
$arguments73['additionalAttributes'] = NULL;
$arguments73['data'] = NULL;
$arguments73['name'] = NULL;
$arguments73['dir'] = NULL;
$arguments73['id'] = NULL;
$arguments73['lang'] = NULL;
$arguments73['style'] = NULL;
$arguments73['title'] = NULL;
$arguments73['accesskey'] = NULL;
$arguments73['tabindex'] = NULL;
$arguments73['onclick'] = NULL;
$arguments73['size'] = NULL;
$arguments73['disabled'] = NULL;
$arguments73['optionValueField'] = NULL;
$arguments73['optionLabelField'] = NULL;
$arguments73['sortByOptionLabel'] = false;
$arguments73['selectAllByDefault'] = false;
$arguments73['errorClass'] = 'f3-form-error';
$arguments73['prependOptionLabel'] = NULL;
$arguments73['prependOptionValue'] = NULL;
$arguments73['multiple'] = false;
$renderChildrenClosure74 = function() {return NULL;};
$viewHelper75 = $self->getViewHelper('$viewHelper75', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper75->setArguments($arguments73);
$viewHelper75->setRenderingContext($renderingContext);
$viewHelper75->setRenderChildrenClosure($renderChildrenClosure74);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper75->initializeArgumentsAndRender();

$output3 .= '   
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Betrifft Betrieber:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments76 = array();
$arguments76['property'] = 'operator.consumer';
$arguments76['options'] = $currentVariableContainer->getOrNull('operators');
$arguments76['class'] = 'form-control';
$arguments76['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.consumer', $renderingContext);
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['name'] = NULL;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['title'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$arguments76['size'] = NULL;
$arguments76['disabled'] = NULL;
$arguments76['optionValueField'] = NULL;
$arguments76['optionLabelField'] = NULL;
$arguments76['sortByOptionLabel'] = false;
$arguments76['selectAllByDefault'] = false;
$arguments76['errorClass'] = 'f3-form-error';
$arguments76['prependOptionLabel'] = NULL;
$arguments76['prependOptionValue'] = NULL;
$arguments76['multiple'] = false;
$renderChildrenClosure77 = function() {return NULL;};
$viewHelper78 = $self->getViewHelper('$viewHelper78', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper78->setArguments($arguments76);
$viewHelper78->setRenderingContext($renderingContext);
$viewHelper78->setRenderChildrenClosure($renderChildrenClosure77);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper78->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments79 = array();
$arguments79['property'] = 'consumer';
$arguments79['options'] = $currentVariableContainer->getOrNull('booleanValues');
$arguments79['class'] = 'form-control';
$arguments79['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'consumer', $renderingContext);
$arguments79['additionalAttributes'] = NULL;
$arguments79['data'] = NULL;
$arguments79['name'] = NULL;
$arguments79['dir'] = NULL;
$arguments79['id'] = NULL;
$arguments79['lang'] = NULL;
$arguments79['style'] = NULL;
$arguments79['title'] = NULL;
$arguments79['accesskey'] = NULL;
$arguments79['tabindex'] = NULL;
$arguments79['onclick'] = NULL;
$arguments79['size'] = NULL;
$arguments79['disabled'] = NULL;
$arguments79['optionValueField'] = NULL;
$arguments79['optionLabelField'] = NULL;
$arguments79['sortByOptionLabel'] = false;
$arguments79['selectAllByDefault'] = false;
$arguments79['errorClass'] = 'f3-form-error';
$arguments79['prependOptionLabel'] = NULL;
$arguments79['prependOptionValue'] = NULL;
$arguments79['multiple'] = false;
$renderChildrenClosure80 = function() {return NULL;};
$viewHelper81 = $self->getViewHelper('$viewHelper81', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper81->setArguments($arguments79);
$viewHelper81->setRenderingContext($renderingContext);
$viewHelper81->setRenderChildrenClosure($renderChildrenClosure80);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper81->initializeArgumentsAndRender();

$output3 .= '   
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Invasivit&auml;tsgrad:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments82 = array();
$arguments82['property'] = 'operator.invasivity';
$arguments82['options'] = $currentVariableContainer->getOrNull('operators');
$arguments82['class'] = 'form-control';
$arguments82['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.invasivity', $renderingContext);
$arguments82['additionalAttributes'] = NULL;
$arguments82['data'] = NULL;
$arguments82['name'] = NULL;
$arguments82['dir'] = NULL;
$arguments82['id'] = NULL;
$arguments82['lang'] = NULL;
$arguments82['style'] = NULL;
$arguments82['title'] = NULL;
$arguments82['accesskey'] = NULL;
$arguments82['tabindex'] = NULL;
$arguments82['onclick'] = NULL;
$arguments82['size'] = NULL;
$arguments82['disabled'] = NULL;
$arguments82['optionValueField'] = NULL;
$arguments82['optionLabelField'] = NULL;
$arguments82['sortByOptionLabel'] = false;
$arguments82['selectAllByDefault'] = false;
$arguments82['errorClass'] = 'f3-form-error';
$arguments82['prependOptionLabel'] = NULL;
$arguments82['prependOptionValue'] = NULL;
$arguments82['multiple'] = false;
$renderChildrenClosure83 = function() {return NULL;};
$viewHelper84 = $self->getViewHelper('$viewHelper84', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper84->setArguments($arguments82);
$viewHelper84->setRenderingContext($renderingContext);
$viewHelper84->setRenderChildrenClosure($renderChildrenClosure83);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper84->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments85 = array();
$arguments85['property'] = 'invasivity';
$arguments85['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments86 = array();
$arguments86['property'] = 'invasivitaetsgrad';
$arguments86['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure87 = function() {return NULL;};
$viewHelper88 = $self->getViewHelper('$viewHelper88', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper88->setArguments($arguments86);
$viewHelper88->setRenderingContext($renderingContext);
$viewHelper88->setRenderChildrenClosure($renderChildrenClosure87);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments85['options'] = $viewHelper88->initializeArgumentsAndRender();
$arguments85['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'invasivity', $renderingContext);
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['name'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['size'] = NULL;
$arguments85['disabled'] = NULL;
$arguments85['optionValueField'] = NULL;
$arguments85['optionLabelField'] = NULL;
$arguments85['sortByOptionLabel'] = false;
$arguments85['selectAllByDefault'] = false;
$arguments85['errorClass'] = 'f3-form-error';
$arguments85['prependOptionLabel'] = NULL;
$arguments85['prependOptionValue'] = NULL;
$arguments85['multiple'] = false;
$renderChildrenClosure89 = function() {return NULL;};
$viewHelper90 = $self->getViewHelper('$viewHelper90', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper90->setArguments($arguments85);
$viewHelper90->setRenderingContext($renderingContext);
$viewHelper90->setRenderChildrenClosure($renderChildrenClosure89);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper90->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Wartungsintervall:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments91 = array();
$arguments91['property'] = 'operator.maintenance';
$arguments91['options'] = $currentVariableContainer->getOrNull('operators');
$arguments91['class'] = 'form-control';
$arguments91['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.maintenance', $renderingContext);
$arguments91['additionalAttributes'] = NULL;
$arguments91['data'] = NULL;
$arguments91['name'] = NULL;
$arguments91['dir'] = NULL;
$arguments91['id'] = NULL;
$arguments91['lang'] = NULL;
$arguments91['style'] = NULL;
$arguments91['title'] = NULL;
$arguments91['accesskey'] = NULL;
$arguments91['tabindex'] = NULL;
$arguments91['onclick'] = NULL;
$arguments91['size'] = NULL;
$arguments91['disabled'] = NULL;
$arguments91['optionValueField'] = NULL;
$arguments91['optionLabelField'] = NULL;
$arguments91['sortByOptionLabel'] = false;
$arguments91['selectAllByDefault'] = false;
$arguments91['errorClass'] = 'f3-form-error';
$arguments91['prependOptionLabel'] = NULL;
$arguments91['prependOptionValue'] = NULL;
$arguments91['multiple'] = false;
$renderChildrenClosure92 = function() {return NULL;};
$viewHelper93 = $self->getViewHelper('$viewHelper93', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper93->setArguments($arguments91);
$viewHelper93->setRenderingContext($renderingContext);
$viewHelper93->setRenderChildrenClosure($renderChildrenClosure92);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper93->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments94 = array();
$arguments94['property'] = 'maintenance';
$arguments94['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments95 = array();
$arguments95['property'] = 'invasivitaetsgrad';
$arguments95['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure96 = function() {return NULL;};
$viewHelper97 = $self->getViewHelper('$viewHelper97', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper97->setArguments($arguments95);
$viewHelper97->setRenderingContext($renderingContext);
$viewHelper97->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments94['options'] = $viewHelper97->initializeArgumentsAndRender();
$arguments94['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'maintenance', $renderingContext);
$arguments94['additionalAttributes'] = NULL;
$arguments94['data'] = NULL;
$arguments94['name'] = NULL;
$arguments94['dir'] = NULL;
$arguments94['id'] = NULL;
$arguments94['lang'] = NULL;
$arguments94['style'] = NULL;
$arguments94['title'] = NULL;
$arguments94['accesskey'] = NULL;
$arguments94['tabindex'] = NULL;
$arguments94['onclick'] = NULL;
$arguments94['size'] = NULL;
$arguments94['disabled'] = NULL;
$arguments94['optionValueField'] = NULL;
$arguments94['optionLabelField'] = NULL;
$arguments94['sortByOptionLabel'] = false;
$arguments94['selectAllByDefault'] = false;
$arguments94['errorClass'] = 'f3-form-error';
$arguments94['prependOptionLabel'] = NULL;
$arguments94['prependOptionValue'] = NULL;
$arguments94['multiple'] = false;
$renderChildrenClosure98 = function() {return NULL;};
$viewHelper99 = $self->getViewHelper('$viewHelper99', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper99->setArguments($arguments94);
$viewHelper99->setRenderingContext($renderingContext);
$viewHelper99->setRenderChildrenClosure($renderChildrenClosure98);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper99->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu2" class="tab-pane fade">
                <div class="padding">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments100 = array();
$arguments100['each'] = $currentVariableContainer->getOrNull('maxObjectives');
$arguments100['as'] = 'obj';
$arguments100['key'] = 'i';
$arguments100['reverse'] = false;
$arguments100['iteration'] = NULL;
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output102 = '';

$output102 .= '
                        <div class="row form-group">
                            <div class="col-sm-8">
                                <label>Zielparameter:</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments103 = array();
$output104 = '';

$output104 .= 'objective.';

$output104 .= $currentVariableContainer->getOrNull('i');

$output104 .= '.parameter';
$arguments103['property'] = $output104;
$arguments103['options'] = $currentVariableContainer->getOrNull('objectives');
$arguments103['class'] = 'form-control';
$arguments103['optionValueField'] = 'uid';
$arguments103['optionLabelField'] = 'parametername';
// Rendering Boolean node
$arguments103['sortByOptionLabel'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments103['prependOptionLabel'] = 'Ignorieren';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments105 = array();
$arguments105['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'objective', $renderingContext);
$arguments105['index'] = $currentVariableContainer->getOrNull('i');
$arguments105['sub'] = 'parameter';
$arguments105['additionalAttributes'] = NULL;
$arguments105['data'] = NULL;
$renderChildrenClosure106 = function() {return NULL;};
$viewHelper107 = $self->getViewHelper('$viewHelper107', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper107->setArguments($arguments105);
$viewHelper107->setRenderingContext($renderingContext);
$viewHelper107->setRenderChildrenClosure($renderChildrenClosure106);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments103['value'] = $viewHelper107->initializeArgumentsAndRender();
$arguments103['additionalAttributes'] = NULL;
$arguments103['data'] = NULL;
$arguments103['name'] = NULL;
$arguments103['dir'] = NULL;
$arguments103['id'] = NULL;
$arguments103['lang'] = NULL;
$arguments103['style'] = NULL;
$arguments103['title'] = NULL;
$arguments103['accesskey'] = NULL;
$arguments103['tabindex'] = NULL;
$arguments103['onclick'] = NULL;
$arguments103['size'] = NULL;
$arguments103['disabled'] = NULL;
$arguments103['selectAllByDefault'] = false;
$arguments103['errorClass'] = 'f3-form-error';
$arguments103['prependOptionValue'] = NULL;
$arguments103['multiple'] = false;
$renderChildrenClosure108 = function() {return NULL;};
$viewHelper109 = $self->getViewHelper('$viewHelper109', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper109->setArguments($arguments103);
$viewHelper109->setRenderingContext($renderingContext);
$viewHelper109->setRenderChildrenClosure($renderChildrenClosure108);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output102 .= $viewHelper109->initializeArgumentsAndRender();

$output102 .= '   
                            </div>
                            <div class="col-sm-2">
                                <label>Untergrenze:</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments110 = array();
$output111 = '';

$output111 .= 'objective.';

$output111 .= $currentVariableContainer->getOrNull('i');

$output111 .= '.from';
$arguments110['property'] = $output111;
$arguments110['class'] = 'form-control';
$arguments110['placeholder'] = 'Von';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments112 = array();
$arguments112['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'objective', $renderingContext);
$arguments112['index'] = $currentVariableContainer->getOrNull('i');
$arguments112['sub'] = 'from';
$arguments112['additionalAttributes'] = NULL;
$arguments112['data'] = NULL;
$renderChildrenClosure113 = function() {return NULL;};
$viewHelper114 = $self->getViewHelper('$viewHelper114', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper114->setArguments($arguments112);
$viewHelper114->setRenderingContext($renderingContext);
$viewHelper114->setRenderChildrenClosure($renderChildrenClosure113);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments110['value'] = $viewHelper114->initializeArgumentsAndRender();
$arguments110['additionalAttributes'] = NULL;
$arguments110['data'] = NULL;
$arguments110['required'] = false;
$arguments110['type'] = 'text';
$arguments110['name'] = NULL;
$arguments110['autofocus'] = NULL;
$arguments110['disabled'] = NULL;
$arguments110['maxlength'] = NULL;
$arguments110['readonly'] = NULL;
$arguments110['size'] = NULL;
$arguments110['pattern'] = NULL;
$arguments110['errorClass'] = 'f3-form-error';
$arguments110['dir'] = NULL;
$arguments110['id'] = NULL;
$arguments110['lang'] = NULL;
$arguments110['style'] = NULL;
$arguments110['title'] = NULL;
$arguments110['accesskey'] = NULL;
$arguments110['tabindex'] = NULL;
$arguments110['onclick'] = NULL;
$renderChildrenClosure115 = function() {return NULL;};
$viewHelper116 = $self->getViewHelper('$viewHelper116', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper116->setArguments($arguments110);
$viewHelper116->setRenderingContext($renderingContext);
$viewHelper116->setRenderChildrenClosure($renderChildrenClosure115);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output102 .= $viewHelper116->initializeArgumentsAndRender();

$output102 .= '
                            </div>
                            <div class="col-sm-2">
                                <label>Obergrenze:</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments117 = array();
$output118 = '';

$output118 .= 'objective.';

$output118 .= $currentVariableContainer->getOrNull('i');

$output118 .= '.to';
$arguments117['property'] = $output118;
$arguments117['class'] = 'form-control';
$arguments117['placeholder'] = 'Bis';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments119 = array();
$arguments119['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'objective', $renderingContext);
$arguments119['index'] = $currentVariableContainer->getOrNull('i');
$arguments119['sub'] = 'to';
$arguments119['additionalAttributes'] = NULL;
$arguments119['data'] = NULL;
$renderChildrenClosure120 = function() {return NULL;};
$viewHelper121 = $self->getViewHelper('$viewHelper121', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper121->setArguments($arguments119);
$viewHelper121->setRenderingContext($renderingContext);
$viewHelper121->setRenderChildrenClosure($renderChildrenClosure120);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments117['value'] = $viewHelper121->initializeArgumentsAndRender();
$arguments117['additionalAttributes'] = NULL;
$arguments117['data'] = NULL;
$arguments117['required'] = false;
$arguments117['type'] = 'text';
$arguments117['name'] = NULL;
$arguments117['autofocus'] = NULL;
$arguments117['disabled'] = NULL;
$arguments117['maxlength'] = NULL;
$arguments117['readonly'] = NULL;
$arguments117['size'] = NULL;
$arguments117['pattern'] = NULL;
$arguments117['errorClass'] = 'f3-form-error';
$arguments117['dir'] = NULL;
$arguments117['id'] = NULL;
$arguments117['lang'] = NULL;
$arguments117['style'] = NULL;
$arguments117['title'] = NULL;
$arguments117['accesskey'] = NULL;
$arguments117['tabindex'] = NULL;
$arguments117['onclick'] = NULL;
$renderChildrenClosure122 = function() {return NULL;};
$viewHelper123 = $self->getViewHelper('$viewHelper123', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper123->setArguments($arguments117);
$viewHelper123->setRenderingContext($renderingContext);
$viewHelper123->setRenderChildrenClosure($renderChildrenClosure122);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output102 .= $viewHelper123->initializeArgumentsAndRender();

$output102 .= '
                            </div>
                        </div>
                    ';
return $output102;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output3 .= '
                </div>
            </div>
            <div id="menu3" class="tab-pane fade">
                <div class="padding">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments124 = array();
$arguments124['each'] = $currentVariableContainer->getOrNull('maxApplicationCases');
$arguments124['as'] = 'obj';
$arguments124['key'] = 'i';
$arguments124['reverse'] = false;
$arguments124['iteration'] = NULL;
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output126 = '';

$output126 .= '
                        <div class="row form-group">
                            <label class="control-label col-sm-2">
                                Fachlicher Anwendungsfall:
                            </label>
                            <div class="col-sm-10">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments127 = array();
$output128 = '';

$output128 .= 'applicationCase.';

$output128 .= $currentVariableContainer->getOrNull('i');

$output128 .= '.case';
$arguments127['property'] = $output128;
$arguments127['options'] = $currentVariableContainer->getOrNull('applicationCases');
$arguments127['class'] = 'form-control';
$arguments127['optionValueField'] = 'uid';
$arguments127['optionLabelField'] = 'bezeichnung';
// Rendering Boolean node
$arguments127['sortByOptionLabel'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments127['prependOptionLabel'] = 'Ignorieren';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments129 = array();
$arguments129['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'applicationCase', $renderingContext);
$arguments129['index'] = $currentVariableContainer->getOrNull('i');
$arguments129['sub'] = 'case';
$arguments129['additionalAttributes'] = NULL;
$arguments129['data'] = NULL;
$renderChildrenClosure130 = function() {return NULL;};
$viewHelper131 = $self->getViewHelper('$viewHelper131', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper131->setArguments($arguments129);
$viewHelper131->setRenderingContext($renderingContext);
$viewHelper131->setRenderChildrenClosure($renderChildrenClosure130);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments127['value'] = $viewHelper131->initializeArgumentsAndRender();
$arguments127['additionalAttributes'] = NULL;
$arguments127['data'] = NULL;
$arguments127['name'] = NULL;
$arguments127['dir'] = NULL;
$arguments127['id'] = NULL;
$arguments127['lang'] = NULL;
$arguments127['style'] = NULL;
$arguments127['title'] = NULL;
$arguments127['accesskey'] = NULL;
$arguments127['tabindex'] = NULL;
$arguments127['onclick'] = NULL;
$arguments127['size'] = NULL;
$arguments127['disabled'] = NULL;
$arguments127['selectAllByDefault'] = false;
$arguments127['errorClass'] = 'f3-form-error';
$arguments127['prependOptionValue'] = NULL;
$arguments127['multiple'] = false;
$renderChildrenClosure132 = function() {return NULL;};
$viewHelper133 = $self->getViewHelper('$viewHelper133', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper133->setArguments($arguments127);
$viewHelper133->setRenderingContext($renderingContext);
$viewHelper133->setRenderChildrenClosure($renderChildrenClosure132);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output126 .= $viewHelper133->initializeArgumentsAndRender();

$output126 .= '   
                            </div>
                        </div>
                        <div class="alert alert-warning">Definition des <u>Anwendungsfalls</u></div>
                    ';
return $output126;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output3 .= '
                </div>
            </div>
            <div id="menu4" class="tab-pane fade">
                <div class="padding">
                    <div class="alert alert-warning">Verf&uuml;gbare Ressource des Anwenders</div>
                    <div class="alert alert-warning">Systemseitige R&uuml;ckfrage je Anwendungsfall</div>
                </div>
            </div>
            <div id="menu5" class="tab-pane fade">
                <div class="padding">
                    <div class="alert alert-warning">Kombination von L&ouml;sungsverfahren</div>
                </div>
            </div>
            <div id="menu6" class="tab-pane fade">
                <div class="padding">
                    <div class="alert alert-warning">Langzeitwirkung</div>
                </div>
            </div>
        </div>
        <div class="tab-footer-submit">
            <div class="row">
                <div class="col-sm-12">
                    <div class="padding">
                        <div class="progress hide">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
                                ...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6"> 
                    <div class="padding">
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments134 = array();
$arguments134['action'] = 'index';
$arguments134['arguments'] = array (
);
$arguments134['controller'] = NULL;
$arguments134['extensionName'] = NULL;
$arguments134['pluginName'] = NULL;
$arguments134['pageUid'] = NULL;
$arguments134['pageType'] = 0;
$arguments134['noCache'] = false;
$arguments134['noCacheHash'] = false;
$arguments134['section'] = '';
$arguments134['format'] = '';
$arguments134['linkAccessRestrictedPages'] = false;
$arguments134['additionalParams'] = array (
);
$arguments134['absolute'] = false;
$arguments134['addQueryString'] = false;
$arguments134['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments134['addQueryStringMethod'] = NULL;
$renderChildrenClosure135 = function() {return NULL;};
$viewHelper136 = $self->getViewHelper('$viewHelper136', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper136->setArguments($arguments134);
$viewHelper136->setRenderingContext($renderingContext);
$viewHelper136->setRenderChildrenClosure($renderChildrenClosure135);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output3 .= $viewHelper136->initializeArgumentsAndRender();

$output3 .= '" class="btn btn-info">Eingaben zur&uuml;cksetzen</a>
                    </div> 
                </div> 
                <div class="col-sm-6"> 
                    <div class="right padding">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments137 = array();
$arguments137['value'] = 'Suchen';
$arguments137['id'] = 'summary-submit';
$arguments137['class'] = 'btn btn-primary';
$arguments137['additionalAttributes'] = NULL;
$arguments137['data'] = NULL;
$arguments137['name'] = NULL;
$arguments137['property'] = NULL;
$arguments137['disabled'] = NULL;
$arguments137['dir'] = NULL;
$arguments137['lang'] = NULL;
$arguments137['style'] = NULL;
$arguments137['title'] = NULL;
$arguments137['accesskey'] = NULL;
$arguments137['tabindex'] = NULL;
$arguments137['onclick'] = NULL;
$renderChildrenClosure138 = function() {return NULL;};
$viewHelper139 = $self->getViewHelper('$viewHelper139', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper139->setArguments($arguments137);
$viewHelper139->setRenderingContext($renderingContext);
$viewHelper139->setRenderChildrenClosure($renderChildrenClosure138);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output3 .= $viewHelper139->initializeArgumentsAndRender();

$output3 .= '
                    </div>
                </div>  
            </div>
        </div>
    ';
return $output3;
};
$viewHelper140 = $self->getViewHelper('$viewHelper140', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper140->setArguments($arguments1);
$viewHelper140->setRenderingContext($renderingContext);
$viewHelper140->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper140->initializeArgumentsAndRender();

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments141 = array();
// Rendering Boolean node
$arguments141['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('results'));
$arguments141['then'] = NULL;
$arguments141['else'] = NULL;
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output143 = '';

$output143 .= '
        <div class="page-header">
            <h2>
                Ergebnisliste <span class="label label-primary">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments144 = array();
$arguments144['subject'] = NULL;
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('results');
};

$output143 .= TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output143 .= ' Treffer</span>
            </h2>
        </div>
        <div class="table-fit">
            <table class="table table-striped table-hover">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments146 = array();
$arguments146['each'] = $currentVariableContainer->getOrNull('results');
$arguments146['as'] = 'solution';
$arguments146['key'] = '';
$arguments146['reverse'] = false;
$arguments146['iteration'] = NULL;
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output148 = '';

$output148 .= '
                    <tr>
                        <td style="width: 10%">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments149 = array();
$arguments149['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'teilprojektnummer', $renderingContext);
$arguments149['keepQuotes'] = false;
$arguments149['encoding'] = NULL;
$arguments149['doubleEncode'] = true;
$renderChildrenClosure150 = function() {return NULL;};
$value151 = ($arguments149['value'] !== NULL ? $arguments149['value'] : $renderChildrenClosure150());

$output148 .= (!is_string($value151) ? $value151 : htmlspecialchars($value151, ($arguments149['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments149['encoding'] !== NULL ? $arguments149['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments149['doubleEncode']));

$output148 .= '    
                        </td>
                        <td>
                            ';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper
$arguments152 = array();
$output153 = '';

$output153 .= 'edit[tx_wisedocasysdomaindesigner_domain_model_loesung][';

$output153 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'uid', $renderingContext);

$output153 .= ']=edit';
$arguments152['parameters'] = $output153;
$arguments152['additionalAttributes'] = NULL;
$arguments152['data'] = NULL;
$arguments152['returnUrl'] = '';
$arguments152['class'] = NULL;
$arguments152['dir'] = NULL;
$arguments152['id'] = NULL;
$arguments152['lang'] = NULL;
$arguments152['style'] = NULL;
$arguments152['title'] = NULL;
$arguments152['accesskey'] = NULL;
$arguments152['tabindex'] = NULL;
$arguments152['onclick'] = NULL;
$arguments152['name'] = NULL;
$arguments152['target'] = NULL;
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output155 = '';

$output155 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments156 = array();
$arguments156['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'loesungsbezeichnung', $renderingContext);
$arguments156['keepQuotes'] = false;
$arguments156['encoding'] = NULL;
$arguments156['doubleEncode'] = true;
$renderChildrenClosure157 = function() {return NULL;};
$value158 = ($arguments156['value'] !== NULL ? $arguments156['value'] : $renderChildrenClosure157());

$output155 .= (!is_string($value158) ? $value158 : htmlspecialchars($value158, ($arguments156['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments156['encoding'] !== NULL ? $arguments156['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments156['doubleEncode']));

$output155 .= '
                            ';
return $output155;
};
$viewHelper159 = $self->getViewHelper('$viewHelper159', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper');
$viewHelper159->setArguments($arguments152);
$viewHelper159->setRenderingContext($renderingContext);
$viewHelper159->setRenderChildrenClosure($renderChildrenClosure154);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper

$output148 .= $viewHelper159->initializeArgumentsAndRender();

$output148 .= '
                        </td>
                    </tr>
                ';
return $output148;
};

$output143 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output143 .= '
            </table>
        </div>
    ';
return $output143;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output0 .= ' 
    <script> 
        $("form#recommender").submit(function(e){ 
            $(".progress").removeClass(\'hide\');
            e.preventDefault();
            var step = 1;
            var stepMax = 8;
            var t = \'\';
            var interval = setInterval(function() { 
                if (step <= stepMax) { 
                    switch(step) {
                        case 1:
                            t = \'Eingabeverarbeitung\';
                        break;
                        case 2:
                            t = \'Eignungsmatrix berechnen - Filter\';
                        break;
                        case 3:
                            t = \'Eignungsmatrix berechnen - Anwendungsfall und Zielparameter\';
                        break;
                        case 4:
                            t = \'Aufwandsmatrix berechnen - Generischer Aufwand\';
                        break;
                        case 5:
                            t = \'Aufwandsmatrix berechnen - Unternehmensspezifischer Aufwand\';
                        break;
                        case 6:
                            t = \'Robustheitsvektor einbeziehen\';
                        break;
                        case 7:
                            t = \'Rangfolge erstellen\';
                        break;
                        case 8:
                            t = \'Ausgabe vorbereiten\';
                        break;
                    }
                    $(".progress-bar-success").attr(\'aria-valuenow\', (100/stepMax) * step).css(\'width\', (100/stepMax) * step + \'%\').text(t);
                    step++;
                } else {
                    clearInterval(interval);
                    $("form#recommender").unbind().submit();
                }
            }, 2000);
        });
    </script>
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output160 = '';

$output160 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments161 = array();
$arguments161['name'] = 'Filter';
$renderChildrenClosure162 = function() {return NULL;};
$viewHelper163 = $self->getViewHelper('$viewHelper163', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper163->setArguments($arguments161);
$viewHelper163->setRenderingContext($renderingContext);
$viewHelper163->setRenderChildrenClosure($renderChildrenClosure162);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output160 .= $viewHelper163->initializeArgumentsAndRender();

$output160 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments164 = array();
$arguments164['name'] = 'content';
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output166 = '';

$output166 .= '
    <h1>Recommender</h1> 
    <h3>Bewertungsmetrik</h3>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments167 = array();
$arguments167['name'] = 'filter-submit';
$arguments167['action'] = 'index';
$arguments167['method'] = 'post';
$arguments167['style'] = 'width: 100%;';
$arguments167['class'] = 'form-horizontal hidden-print';
$arguments167['id'] = 'recommender';
$arguments167['additionalAttributes'] = NULL;
$arguments167['data'] = NULL;
$arguments167['arguments'] = array (
);
$arguments167['controller'] = NULL;
$arguments167['extensionName'] = NULL;
$arguments167['pluginName'] = NULL;
$arguments167['pageUid'] = NULL;
$arguments167['object'] = NULL;
$arguments167['pageType'] = 0;
$arguments167['noCache'] = false;
$arguments167['noCacheHash'] = false;
$arguments167['section'] = '';
$arguments167['format'] = '';
$arguments167['additionalParams'] = array (
);
$arguments167['absolute'] = false;
$arguments167['addQueryString'] = false;
$arguments167['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments167['fieldNamePrefix'] = NULL;
$arguments167['actionUri'] = NULL;
$arguments167['objectName'] = NULL;
$arguments167['hiddenFieldClassName'] = NULL;
$arguments167['addQueryStringMethod'] = '';
$arguments167['enctype'] = NULL;
$arguments167['onreset'] = NULL;
$arguments167['onsubmit'] = NULL;
$arguments167['target'] = NULL;
$arguments167['dir'] = NULL;
$arguments167['lang'] = NULL;
$arguments167['title'] = NULL;
$arguments167['accesskey'] = NULL;
$arguments167['tabindex'] = NULL;
$arguments167['onclick'] = NULL;
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output169 = '';

$output169 .= '
        <ul class="nav nav-tabs">
            <li class="active">
                <a data-toggle="tab" href="#menu1">L&ouml;sungseigenschaften</a>
            </li>
            <li>
                <a data-toggle="tab" href="#menu2">Technische Auswirkung</a>
            </li>
            <li>
                <a data-toggle="tab" href="#menu3">Anwendungsf&auml;lle</a>
            </li>
            <li>
                <a data-toggle="tab" href="#menu4">Aufwand und Ressourcen</a>
            </li>
            <li>
                <a data-toggle="tab" href="#menu5">Kombinierbarkeit</a>
            </li>
            <li>
                <a data-toggle="tab" href="#menu6">Langzeitwirkung</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="menu1" class="tab-pane fade in ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments170 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments171 = array();
$arguments171['value'] = $currentVariableContainer->getOrNull('results');
$arguments171['keepQuotes'] = false;
$arguments171['encoding'] = NULL;
$arguments171['doubleEncode'] = true;
$renderChildrenClosure172 = function() {return NULL;};
$value173 = ($arguments171['value'] !== NULL ? $arguments171['value'] : $renderChildrenClosure172());
$arguments170['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value173) ? $value173 : htmlspecialchars($value173, ($arguments171['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments171['encoding'] !== NULL ? $arguments171['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments171['doubleEncode'])));
$arguments170['then'] = '';
$arguments170['else'] = 'active';
$renderChildrenClosure174 = function() {return NULL;};

$output169 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments170, $renderChildrenClosure174, $renderingContext);

$output169 .= '">
                <div class="padding">
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            L&ouml;sungsart:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments175 = array();
$arguments175['property'] = 'operator.kind';
$arguments175['options'] = $currentVariableContainer->getOrNull('operators');
$arguments175['class'] = 'form-control';
$arguments175['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.kind', $renderingContext);
$arguments175['additionalAttributes'] = NULL;
$arguments175['data'] = NULL;
$arguments175['name'] = NULL;
$arguments175['dir'] = NULL;
$arguments175['id'] = NULL;
$arguments175['lang'] = NULL;
$arguments175['style'] = NULL;
$arguments175['title'] = NULL;
$arguments175['accesskey'] = NULL;
$arguments175['tabindex'] = NULL;
$arguments175['onclick'] = NULL;
$arguments175['size'] = NULL;
$arguments175['disabled'] = NULL;
$arguments175['optionValueField'] = NULL;
$arguments175['optionLabelField'] = NULL;
$arguments175['sortByOptionLabel'] = false;
$arguments175['selectAllByDefault'] = false;
$arguments175['errorClass'] = 'f3-form-error';
$arguments175['prependOptionLabel'] = NULL;
$arguments175['prependOptionValue'] = NULL;
$arguments175['multiple'] = false;
$renderChildrenClosure176 = function() {return NULL;};
$viewHelper177 = $self->getViewHelper('$viewHelper177', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper177->setArguments($arguments175);
$viewHelper177->setRenderingContext($renderingContext);
$viewHelper177->setRenderChildrenClosure($renderChildrenClosure176);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output169 .= $viewHelper177->initializeArgumentsAndRender();

$output169 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments178 = array();
$arguments178['property'] = 'kind';
$arguments178['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments179 = array();
$arguments179['property'] = 'loesungsart';
$arguments179['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure180 = function() {return NULL;};
$viewHelper181 = $self->getViewHelper('$viewHelper181', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper181->setArguments($arguments179);
$viewHelper181->setRenderingContext($renderingContext);
$viewHelper181->setRenderChildrenClosure($renderChildrenClosure180);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments178['options'] = $viewHelper181->initializeArgumentsAndRender();
$arguments178['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'kind', $renderingContext);
$arguments178['additionalAttributes'] = NULL;
$arguments178['data'] = NULL;
$arguments178['name'] = NULL;
$arguments178['dir'] = NULL;
$arguments178['id'] = NULL;
$arguments178['lang'] = NULL;
$arguments178['style'] = NULL;
$arguments178['title'] = NULL;
$arguments178['accesskey'] = NULL;
$arguments178['tabindex'] = NULL;
$arguments178['onclick'] = NULL;
$arguments178['size'] = NULL;
$arguments178['disabled'] = NULL;
$arguments178['optionValueField'] = NULL;
$arguments178['optionLabelField'] = NULL;
$arguments178['sortByOptionLabel'] = false;
$arguments178['selectAllByDefault'] = false;
$arguments178['errorClass'] = 'f3-form-error';
$arguments178['prependOptionLabel'] = NULL;
$arguments178['prependOptionValue'] = NULL;
$arguments178['multiple'] = false;
$renderChildrenClosure182 = function() {return NULL;};
$viewHelper183 = $self->getViewHelper('$viewHelper183', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper183->setArguments($arguments178);
$viewHelper183->setRenderingContext($renderingContext);
$viewHelper183->setRenderChildrenClosure($renderChildrenClosure182);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output169 .= $viewHelper183->initializeArgumentsAndRender();

$output169 .= '
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Bezeichnung:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments184 = array();
$arguments184['property'] = 'operator.name';
$arguments184['options'] = $currentVariableContainer->getOrNull('operators');
$arguments184['class'] = 'form-control';
$arguments184['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.name', $renderingContext);
$arguments184['additionalAttributes'] = NULL;
$arguments184['data'] = NULL;
$arguments184['name'] = NULL;
$arguments184['dir'] = NULL;
$arguments184['id'] = NULL;
$arguments184['lang'] = NULL;
$arguments184['style'] = NULL;
$arguments184['title'] = NULL;
$arguments184['accesskey'] = NULL;
$arguments184['tabindex'] = NULL;
$arguments184['onclick'] = NULL;
$arguments184['size'] = NULL;
$arguments184['disabled'] = NULL;
$arguments184['optionValueField'] = NULL;
$arguments184['optionLabelField'] = NULL;
$arguments184['sortByOptionLabel'] = false;
$arguments184['selectAllByDefault'] = false;
$arguments184['errorClass'] = 'f3-form-error';
$arguments184['prependOptionLabel'] = NULL;
$arguments184['prependOptionValue'] = NULL;
$arguments184['multiple'] = false;
$renderChildrenClosure185 = function() {return NULL;};
$viewHelper186 = $self->getViewHelper('$viewHelper186', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper186->setArguments($arguments184);
$viewHelper186->setRenderingContext($renderingContext);
$viewHelper186->setRenderChildrenClosure($renderChildrenClosure185);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output169 .= $viewHelper186->initializeArgumentsAndRender();

$output169 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments187 = array();
$arguments187['property'] = 'name';
$arguments187['class'] = 'form-control';
$arguments187['placeholder'] = 'Bezeichnung';
$arguments187['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'name', $renderingContext);
$arguments187['additionalAttributes'] = NULL;
$arguments187['data'] = NULL;
$arguments187['required'] = false;
$arguments187['type'] = 'text';
$arguments187['name'] = NULL;
$arguments187['autofocus'] = NULL;
$arguments187['disabled'] = NULL;
$arguments187['maxlength'] = NULL;
$arguments187['readonly'] = NULL;
$arguments187['size'] = NULL;
$arguments187['pattern'] = NULL;
$arguments187['errorClass'] = 'f3-form-error';
$arguments187['dir'] = NULL;
$arguments187['id'] = NULL;
$arguments187['lang'] = NULL;
$arguments187['style'] = NULL;
$arguments187['title'] = NULL;
$arguments187['accesskey'] = NULL;
$arguments187['tabindex'] = NULL;
$arguments187['onclick'] = NULL;
$renderChildrenClosure188 = function() {return NULL;};
$viewHelper189 = $self->getViewHelper('$viewHelper189', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper189->setArguments($arguments187);
$viewHelper189->setRenderingContext($renderingContext);
$viewHelper189->setRenderChildrenClosure($renderChildrenClosure188);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output169 .= $viewHelper189->initializeArgumentsAndRender();

$output169 .= '    
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            L&ouml;sungsklasse:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments190 = array();
$arguments190['property'] = 'operator.class';
$arguments190['options'] = $currentVariableContainer->getOrNull('operators');
$arguments190['class'] = 'form-control';
$arguments190['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.class', $renderingContext);
$arguments190['additionalAttributes'] = NULL;
$arguments190['data'] = NULL;
$arguments190['name'] = NULL;
$arguments190['dir'] = NULL;
$arguments190['id'] = NULL;
$arguments190['lang'] = NULL;
$arguments190['style'] = NULL;
$arguments190['title'] = NULL;
$arguments190['accesskey'] = NULL;
$arguments190['tabindex'] = NULL;
$arguments190['onclick'] = NULL;
$arguments190['size'] = NULL;
$arguments190['disabled'] = NULL;
$arguments190['optionValueField'] = NULL;
$arguments190['optionLabelField'] = NULL;
$arguments190['sortByOptionLabel'] = false;
$arguments190['selectAllByDefault'] = false;
$arguments190['errorClass'] = 'f3-form-error';
$arguments190['prependOptionLabel'] = NULL;
$arguments190['prependOptionValue'] = NULL;
$arguments190['multiple'] = false;
$renderChildrenClosure191 = function() {return NULL;};
$viewHelper192 = $self->getViewHelper('$viewHelper192', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper192->setArguments($arguments190);
$viewHelper192->setRenderingContext($renderingContext);
$viewHelper192->setRenderChildrenClosure($renderChildrenClosure191);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output169 .= $viewHelper192->initializeArgumentsAndRender();

$output169 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments193 = array();
$arguments193['property'] = 'class';
$arguments193['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments194 = array();
$arguments194['property'] = 'loesungsklasse';
$arguments194['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure195 = function() {return NULL;};
$viewHelper196 = $self->getViewHelper('$viewHelper196', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper196->setArguments($arguments194);
$viewHelper196->setRenderingContext($renderingContext);
$viewHelper196->setRenderChildrenClosure($renderChildrenClosure195);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments193['options'] = $viewHelper196->initializeArgumentsAndRender();
$arguments193['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'class', $renderingContext);
$arguments193['additionalAttributes'] = NULL;
$arguments193['data'] = NULL;
$arguments193['name'] = NULL;
$arguments193['dir'] = NULL;
$arguments193['id'] = NULL;
$arguments193['lang'] = NULL;
$arguments193['style'] = NULL;
$arguments193['title'] = NULL;
$arguments193['accesskey'] = NULL;
$arguments193['tabindex'] = NULL;
$arguments193['onclick'] = NULL;
$arguments193['size'] = NULL;
$arguments193['disabled'] = NULL;
$arguments193['optionValueField'] = NULL;
$arguments193['optionLabelField'] = NULL;
$arguments193['sortByOptionLabel'] = false;
$arguments193['selectAllByDefault'] = false;
$arguments193['errorClass'] = 'f3-form-error';
$arguments193['prependOptionLabel'] = NULL;
$arguments193['prependOptionValue'] = NULL;
$arguments193['multiple'] = false;
$renderChildrenClosure197 = function() {return NULL;};
$viewHelper198 = $self->getViewHelper('$viewHelper198', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper198->setArguments($arguments193);
$viewHelper198->setRenderingContext($renderingContext);
$viewHelper198->setRenderChildrenClosure($renderChildrenClosure197);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output169 .= $viewHelper198->initializeArgumentsAndRender();

$output169 .= '
                        </div>
                    </div>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments199 = array();
$arguments199['each'] = $currentVariableContainer->getOrNull('maxDesigntypes');
$arguments199['as'] = 'dt';
$arguments199['key'] = 'i';
$arguments199['reverse'] = false;
$arguments199['iteration'] = NULL;
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output201 = '';

$output201 .= '
                        <div class="row form-group">
                            <label class="control-label col-sm-2">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments202 = array();
// Rendering Boolean node
$arguments202['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('i'), 0);
$arguments202['then'] = NULL;
$arguments202['else'] = NULL;
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    Gestaltungsart(en):
                                ';
};

$output201 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output201 .= '
                            </label>
                            <div class="col-sm-2">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments204 = array();
$output205 = '';

$output205 .= 'operator.designtype.';

$output205 .= $currentVariableContainer->getOrNull('i');
$arguments204['property'] = $output205;
$arguments204['options'] = $currentVariableContainer->getOrNull('operators');
$arguments204['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments206 = array();
$arguments206['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.designtype', $renderingContext);
$arguments206['index'] = $currentVariableContainer->getOrNull('i');
$arguments206['additionalAttributes'] = NULL;
$arguments206['data'] = NULL;
$arguments206['sub'] = NULL;
$renderChildrenClosure207 = function() {return NULL;};
$viewHelper208 = $self->getViewHelper('$viewHelper208', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper208->setArguments($arguments206);
$viewHelper208->setRenderingContext($renderingContext);
$viewHelper208->setRenderChildrenClosure($renderChildrenClosure207);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments204['value'] = $viewHelper208->initializeArgumentsAndRender();
$arguments204['additionalAttributes'] = NULL;
$arguments204['data'] = NULL;
$arguments204['name'] = NULL;
$arguments204['dir'] = NULL;
$arguments204['id'] = NULL;
$arguments204['lang'] = NULL;
$arguments204['style'] = NULL;
$arguments204['title'] = NULL;
$arguments204['accesskey'] = NULL;
$arguments204['tabindex'] = NULL;
$arguments204['onclick'] = NULL;
$arguments204['size'] = NULL;
$arguments204['disabled'] = NULL;
$arguments204['optionValueField'] = NULL;
$arguments204['optionLabelField'] = NULL;
$arguments204['sortByOptionLabel'] = false;
$arguments204['selectAllByDefault'] = false;
$arguments204['errorClass'] = 'f3-form-error';
$arguments204['prependOptionLabel'] = NULL;
$arguments204['prependOptionValue'] = NULL;
$arguments204['multiple'] = false;
$renderChildrenClosure209 = function() {return NULL;};
$viewHelper210 = $self->getViewHelper('$viewHelper210', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper210->setArguments($arguments204);
$viewHelper210->setRenderingContext($renderingContext);
$viewHelper210->setRenderChildrenClosure($renderChildrenClosure209);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output201 .= $viewHelper210->initializeArgumentsAndRender();

$output201 .= '
                            </div>
                            <div class="col-sm-8">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments211 = array();
$output212 = '';

$output212 .= 'designtype.';

$output212 .= $currentVariableContainer->getOrNull('i');
$arguments211['property'] = $output212;
$arguments211['options'] = $currentVariableContainer->getOrNull('designtypes');
$arguments211['class'] = 'form-control';
$arguments211['optionValueField'] = 'uid';
$arguments211['optionLabelField'] = 'bezeichnung';
// Rendering Boolean node
$arguments211['sortByOptionLabel'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments211['prependOptionLabel'] = 'Ignorieren';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments213 = array();
$arguments213['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'designtype', $renderingContext);
$arguments213['index'] = $currentVariableContainer->getOrNull('i');
$arguments213['additionalAttributes'] = NULL;
$arguments213['data'] = NULL;
$arguments213['sub'] = NULL;
$renderChildrenClosure214 = function() {return NULL;};
$viewHelper215 = $self->getViewHelper('$viewHelper215', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper215->setArguments($arguments213);
$viewHelper215->setRenderingContext($renderingContext);
$viewHelper215->setRenderChildrenClosure($renderChildrenClosure214);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments211['value'] = $viewHelper215->initializeArgumentsAndRender();
$arguments211['additionalAttributes'] = NULL;
$arguments211['data'] = NULL;
$arguments211['name'] = NULL;
$arguments211['dir'] = NULL;
$arguments211['id'] = NULL;
$arguments211['lang'] = NULL;
$arguments211['style'] = NULL;
$arguments211['title'] = NULL;
$arguments211['accesskey'] = NULL;
$arguments211['tabindex'] = NULL;
$arguments211['onclick'] = NULL;
$arguments211['size'] = NULL;
$arguments211['disabled'] = NULL;
$arguments211['selectAllByDefault'] = false;
$arguments211['errorClass'] = 'f3-form-error';
$arguments211['prependOptionValue'] = NULL;
$arguments211['multiple'] = false;
$renderChildrenClosure216 = function() {return NULL;};
$viewHelper217 = $self->getViewHelper('$viewHelper217', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper217->setArguments($arguments211);
$viewHelper217->setRenderingContext($renderingContext);
$viewHelper217->setRenderChildrenClosure($renderChildrenClosure216);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output201 .= $viewHelper217->initializeArgumentsAndRender();

$output201 .= '
                            </div>
                        </div>
                    ';
return $output201;
};

$output169 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output169 .= '
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Phase:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments218 = array();
$arguments218['property'] = 'operator.phase';
$arguments218['options'] = $currentVariableContainer->getOrNull('operators');
$arguments218['class'] = 'form-control';
$arguments218['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.phase', $renderingContext);
$arguments218['additionalAttributes'] = NULL;
$arguments218['data'] = NULL;
$arguments218['name'] = NULL;
$arguments218['dir'] = NULL;
$arguments218['id'] = NULL;
$arguments218['lang'] = NULL;
$arguments218['style'] = NULL;
$arguments218['title'] = NULL;
$arguments218['accesskey'] = NULL;
$arguments218['tabindex'] = NULL;
$arguments218['onclick'] = NULL;
$arguments218['size'] = NULL;
$arguments218['disabled'] = NULL;
$arguments218['optionValueField'] = NULL;
$arguments218['optionLabelField'] = NULL;
$arguments218['sortByOptionLabel'] = false;
$arguments218['selectAllByDefault'] = false;
$arguments218['errorClass'] = 'f3-form-error';
$arguments218['prependOptionLabel'] = NULL;
$arguments218['prependOptionValue'] = NULL;
$arguments218['multiple'] = false;
$renderChildrenClosure219 = function() {return NULL;};
$viewHelper220 = $self->getViewHelper('$viewHelper220', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper220->setArguments($arguments218);
$viewHelper220->setRenderingContext($renderingContext);
$viewHelper220->setRenderChildrenClosure($renderChildrenClosure219);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output169 .= $viewHelper220->initializeArgumentsAndRender();

$output169 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments221 = array();
$arguments221['property'] = 'phase';
$arguments221['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments222 = array();
$arguments222['property'] = 'phaseDerThermischenWirkkette';
$arguments222['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure223 = function() {return NULL;};
$viewHelper224 = $self->getViewHelper('$viewHelper224', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper224->setArguments($arguments222);
$viewHelper224->setRenderingContext($renderingContext);
$viewHelper224->setRenderChildrenClosure($renderChildrenClosure223);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments221['options'] = $viewHelper224->initializeArgumentsAndRender();
$arguments221['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'phase', $renderingContext);
$arguments221['additionalAttributes'] = NULL;
$arguments221['data'] = NULL;
$arguments221['name'] = NULL;
$arguments221['dir'] = NULL;
$arguments221['id'] = NULL;
$arguments221['lang'] = NULL;
$arguments221['style'] = NULL;
$arguments221['title'] = NULL;
$arguments221['accesskey'] = NULL;
$arguments221['tabindex'] = NULL;
$arguments221['onclick'] = NULL;
$arguments221['size'] = NULL;
$arguments221['disabled'] = NULL;
$arguments221['optionValueField'] = NULL;
$arguments221['optionLabelField'] = NULL;
$arguments221['sortByOptionLabel'] = false;
$arguments221['selectAllByDefault'] = false;
$arguments221['errorClass'] = 'f3-form-error';
$arguments221['prependOptionLabel'] = NULL;
$arguments221['prependOptionValue'] = NULL;
$arguments221['multiple'] = false;
$renderChildrenClosure225 = function() {return NULL;};
$viewHelper226 = $self->getViewHelper('$viewHelper226', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper226->setArguments($arguments221);
$viewHelper226->setRenderingContext($renderingContext);
$viewHelper226->setRenderChildrenClosure($renderChildrenClosure225);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output169 .= $viewHelper226->initializeArgumentsAndRender();

$output169 .= '
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Physikalischer Effekt:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments227 = array();
$arguments227['property'] = 'operator.effect';
$arguments227['options'] = $currentVariableContainer->getOrNull('operators');
$arguments227['class'] = 'form-control';
$arguments227['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.effect', $renderingContext);
$arguments227['additionalAttributes'] = NULL;
$arguments227['data'] = NULL;
$arguments227['name'] = NULL;
$arguments227['dir'] = NULL;
$arguments227['id'] = NULL;
$arguments227['lang'] = NULL;
$arguments227['style'] = NULL;
$arguments227['title'] = NULL;
$arguments227['accesskey'] = NULL;
$arguments227['tabindex'] = NULL;
$arguments227['onclick'] = NULL;
$arguments227['size'] = NULL;
$arguments227['disabled'] = NULL;
$arguments227['optionValueField'] = NULL;
$arguments227['optionLabelField'] = NULL;
$arguments227['sortByOptionLabel'] = false;
$arguments227['selectAllByDefault'] = false;
$arguments227['errorClass'] = 'f3-form-error';
$arguments227['prependOptionLabel'] = NULL;
$arguments227['prependOptionValue'] = NULL;
$arguments227['multiple'] = false;
$renderChildrenClosure228 = function() {return NULL;};
$viewHelper229 = $self->getViewHelper('$viewHelper229', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper229->setArguments($arguments227);
$viewHelper229->setRenderingContext($renderingContext);
$viewHelper229->setRenderChildrenClosure($renderChildrenClosure228);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output169 .= $viewHelper229->initializeArgumentsAndRender();

$output169 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments230 = array();
$arguments230['property'] = 'effect';
$arguments230['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments231 = array();
$arguments231['property'] = 'physikalischerEffekt';
$arguments231['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure232 = function() {return NULL;};
$viewHelper233 = $self->getViewHelper('$viewHelper233', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper233->setArguments($arguments231);
$viewHelper233->setRenderingContext($renderingContext);
$viewHelper233->setRenderChildrenClosure($renderChildrenClosure232);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments230['options'] = $viewHelper233->initializeArgumentsAndRender();
$arguments230['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'effect', $renderingContext);
$arguments230['additionalAttributes'] = NULL;
$arguments230['data'] = NULL;
$arguments230['name'] = NULL;
$arguments230['dir'] = NULL;
$arguments230['id'] = NULL;
$arguments230['lang'] = NULL;
$arguments230['style'] = NULL;
$arguments230['title'] = NULL;
$arguments230['accesskey'] = NULL;
$arguments230['tabindex'] = NULL;
$arguments230['onclick'] = NULL;
$arguments230['size'] = NULL;
$arguments230['disabled'] = NULL;
$arguments230['optionValueField'] = NULL;
$arguments230['optionLabelField'] = NULL;
$arguments230['sortByOptionLabel'] = false;
$arguments230['selectAllByDefault'] = false;
$arguments230['errorClass'] = 'f3-form-error';
$arguments230['prependOptionLabel'] = NULL;
$arguments230['prependOptionValue'] = NULL;
$arguments230['multiple'] = false;
$renderChildrenClosure234 = function() {return NULL;};
$viewHelper235 = $self->getViewHelper('$viewHelper235', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper235->setArguments($arguments230);
$viewHelper235->setRenderingContext($renderingContext);
$viewHelper235->setRenderChildrenClosure($renderChildrenClosure234);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output169 .= $viewHelper235->initializeArgumentsAndRender();

$output169 .= '
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Betrifft Hersteller:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments236 = array();
$arguments236['property'] = 'operator.producer';
$arguments236['options'] = $currentVariableContainer->getOrNull('operators');
$arguments236['class'] = 'form-control';
$arguments236['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.producer', $renderingContext);
$arguments236['additionalAttributes'] = NULL;
$arguments236['data'] = NULL;
$arguments236['name'] = NULL;
$arguments236['dir'] = NULL;
$arguments236['id'] = NULL;
$arguments236['lang'] = NULL;
$arguments236['style'] = NULL;
$arguments236['title'] = NULL;
$arguments236['accesskey'] = NULL;
$arguments236['tabindex'] = NULL;
$arguments236['onclick'] = NULL;
$arguments236['size'] = NULL;
$arguments236['disabled'] = NULL;
$arguments236['optionValueField'] = NULL;
$arguments236['optionLabelField'] = NULL;
$arguments236['sortByOptionLabel'] = false;
$arguments236['selectAllByDefault'] = false;
$arguments236['errorClass'] = 'f3-form-error';
$arguments236['prependOptionLabel'] = NULL;
$arguments236['prependOptionValue'] = NULL;
$arguments236['multiple'] = false;
$renderChildrenClosure237 = function() {return NULL;};
$viewHelper238 = $self->getViewHelper('$viewHelper238', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper238->setArguments($arguments236);
$viewHelper238->setRenderingContext($renderingContext);
$viewHelper238->setRenderChildrenClosure($renderChildrenClosure237);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output169 .= $viewHelper238->initializeArgumentsAndRender();

$output169 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments239 = array();
$arguments239['property'] = 'producer';
$arguments239['options'] = $currentVariableContainer->getOrNull('booleanValues');
$arguments239['class'] = 'form-control';
$arguments239['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'producer', $renderingContext);
$arguments239['additionalAttributes'] = NULL;
$arguments239['data'] = NULL;
$arguments239['name'] = NULL;
$arguments239['dir'] = NULL;
$arguments239['id'] = NULL;
$arguments239['lang'] = NULL;
$arguments239['style'] = NULL;
$arguments239['title'] = NULL;
$arguments239['accesskey'] = NULL;
$arguments239['tabindex'] = NULL;
$arguments239['onclick'] = NULL;
$arguments239['size'] = NULL;
$arguments239['disabled'] = NULL;
$arguments239['optionValueField'] = NULL;
$arguments239['optionLabelField'] = NULL;
$arguments239['sortByOptionLabel'] = false;
$arguments239['selectAllByDefault'] = false;
$arguments239['errorClass'] = 'f3-form-error';
$arguments239['prependOptionLabel'] = NULL;
$arguments239['prependOptionValue'] = NULL;
$arguments239['multiple'] = false;
$renderChildrenClosure240 = function() {return NULL;};
$viewHelper241 = $self->getViewHelper('$viewHelper241', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper241->setArguments($arguments239);
$viewHelper241->setRenderingContext($renderingContext);
$viewHelper241->setRenderChildrenClosure($renderChildrenClosure240);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output169 .= $viewHelper241->initializeArgumentsAndRender();

$output169 .= '   
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Betrifft Betrieber:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments242 = array();
$arguments242['property'] = 'operator.consumer';
$arguments242['options'] = $currentVariableContainer->getOrNull('operators');
$arguments242['class'] = 'form-control';
$arguments242['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.consumer', $renderingContext);
$arguments242['additionalAttributes'] = NULL;
$arguments242['data'] = NULL;
$arguments242['name'] = NULL;
$arguments242['dir'] = NULL;
$arguments242['id'] = NULL;
$arguments242['lang'] = NULL;
$arguments242['style'] = NULL;
$arguments242['title'] = NULL;
$arguments242['accesskey'] = NULL;
$arguments242['tabindex'] = NULL;
$arguments242['onclick'] = NULL;
$arguments242['size'] = NULL;
$arguments242['disabled'] = NULL;
$arguments242['optionValueField'] = NULL;
$arguments242['optionLabelField'] = NULL;
$arguments242['sortByOptionLabel'] = false;
$arguments242['selectAllByDefault'] = false;
$arguments242['errorClass'] = 'f3-form-error';
$arguments242['prependOptionLabel'] = NULL;
$arguments242['prependOptionValue'] = NULL;
$arguments242['multiple'] = false;
$renderChildrenClosure243 = function() {return NULL;};
$viewHelper244 = $self->getViewHelper('$viewHelper244', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper244->setArguments($arguments242);
$viewHelper244->setRenderingContext($renderingContext);
$viewHelper244->setRenderChildrenClosure($renderChildrenClosure243);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output169 .= $viewHelper244->initializeArgumentsAndRender();

$output169 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments245 = array();
$arguments245['property'] = 'consumer';
$arguments245['options'] = $currentVariableContainer->getOrNull('booleanValues');
$arguments245['class'] = 'form-control';
$arguments245['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'consumer', $renderingContext);
$arguments245['additionalAttributes'] = NULL;
$arguments245['data'] = NULL;
$arguments245['name'] = NULL;
$arguments245['dir'] = NULL;
$arguments245['id'] = NULL;
$arguments245['lang'] = NULL;
$arguments245['style'] = NULL;
$arguments245['title'] = NULL;
$arguments245['accesskey'] = NULL;
$arguments245['tabindex'] = NULL;
$arguments245['onclick'] = NULL;
$arguments245['size'] = NULL;
$arguments245['disabled'] = NULL;
$arguments245['optionValueField'] = NULL;
$arguments245['optionLabelField'] = NULL;
$arguments245['sortByOptionLabel'] = false;
$arguments245['selectAllByDefault'] = false;
$arguments245['errorClass'] = 'f3-form-error';
$arguments245['prependOptionLabel'] = NULL;
$arguments245['prependOptionValue'] = NULL;
$arguments245['multiple'] = false;
$renderChildrenClosure246 = function() {return NULL;};
$viewHelper247 = $self->getViewHelper('$viewHelper247', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper247->setArguments($arguments245);
$viewHelper247->setRenderingContext($renderingContext);
$viewHelper247->setRenderChildrenClosure($renderChildrenClosure246);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output169 .= $viewHelper247->initializeArgumentsAndRender();

$output169 .= '   
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Invasivit&auml;tsgrad:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments248 = array();
$arguments248['property'] = 'operator.invasivity';
$arguments248['options'] = $currentVariableContainer->getOrNull('operators');
$arguments248['class'] = 'form-control';
$arguments248['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.invasivity', $renderingContext);
$arguments248['additionalAttributes'] = NULL;
$arguments248['data'] = NULL;
$arguments248['name'] = NULL;
$arguments248['dir'] = NULL;
$arguments248['id'] = NULL;
$arguments248['lang'] = NULL;
$arguments248['style'] = NULL;
$arguments248['title'] = NULL;
$arguments248['accesskey'] = NULL;
$arguments248['tabindex'] = NULL;
$arguments248['onclick'] = NULL;
$arguments248['size'] = NULL;
$arguments248['disabled'] = NULL;
$arguments248['optionValueField'] = NULL;
$arguments248['optionLabelField'] = NULL;
$arguments248['sortByOptionLabel'] = false;
$arguments248['selectAllByDefault'] = false;
$arguments248['errorClass'] = 'f3-form-error';
$arguments248['prependOptionLabel'] = NULL;
$arguments248['prependOptionValue'] = NULL;
$arguments248['multiple'] = false;
$renderChildrenClosure249 = function() {return NULL;};
$viewHelper250 = $self->getViewHelper('$viewHelper250', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper250->setArguments($arguments248);
$viewHelper250->setRenderingContext($renderingContext);
$viewHelper250->setRenderChildrenClosure($renderChildrenClosure249);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output169 .= $viewHelper250->initializeArgumentsAndRender();

$output169 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments251 = array();
$arguments251['property'] = 'invasivity';
$arguments251['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments252 = array();
$arguments252['property'] = 'invasivitaetsgrad';
$arguments252['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure253 = function() {return NULL;};
$viewHelper254 = $self->getViewHelper('$viewHelper254', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper254->setArguments($arguments252);
$viewHelper254->setRenderingContext($renderingContext);
$viewHelper254->setRenderChildrenClosure($renderChildrenClosure253);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments251['options'] = $viewHelper254->initializeArgumentsAndRender();
$arguments251['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'invasivity', $renderingContext);
$arguments251['additionalAttributes'] = NULL;
$arguments251['data'] = NULL;
$arguments251['name'] = NULL;
$arguments251['dir'] = NULL;
$arguments251['id'] = NULL;
$arguments251['lang'] = NULL;
$arguments251['style'] = NULL;
$arguments251['title'] = NULL;
$arguments251['accesskey'] = NULL;
$arguments251['tabindex'] = NULL;
$arguments251['onclick'] = NULL;
$arguments251['size'] = NULL;
$arguments251['disabled'] = NULL;
$arguments251['optionValueField'] = NULL;
$arguments251['optionLabelField'] = NULL;
$arguments251['sortByOptionLabel'] = false;
$arguments251['selectAllByDefault'] = false;
$arguments251['errorClass'] = 'f3-form-error';
$arguments251['prependOptionLabel'] = NULL;
$arguments251['prependOptionValue'] = NULL;
$arguments251['multiple'] = false;
$renderChildrenClosure255 = function() {return NULL;};
$viewHelper256 = $self->getViewHelper('$viewHelper256', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper256->setArguments($arguments251);
$viewHelper256->setRenderingContext($renderingContext);
$viewHelper256->setRenderChildrenClosure($renderChildrenClosure255);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output169 .= $viewHelper256->initializeArgumentsAndRender();

$output169 .= '
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Wartungsintervall:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments257 = array();
$arguments257['property'] = 'operator.maintenance';
$arguments257['options'] = $currentVariableContainer->getOrNull('operators');
$arguments257['class'] = 'form-control';
$arguments257['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.maintenance', $renderingContext);
$arguments257['additionalAttributes'] = NULL;
$arguments257['data'] = NULL;
$arguments257['name'] = NULL;
$arguments257['dir'] = NULL;
$arguments257['id'] = NULL;
$arguments257['lang'] = NULL;
$arguments257['style'] = NULL;
$arguments257['title'] = NULL;
$arguments257['accesskey'] = NULL;
$arguments257['tabindex'] = NULL;
$arguments257['onclick'] = NULL;
$arguments257['size'] = NULL;
$arguments257['disabled'] = NULL;
$arguments257['optionValueField'] = NULL;
$arguments257['optionLabelField'] = NULL;
$arguments257['sortByOptionLabel'] = false;
$arguments257['selectAllByDefault'] = false;
$arguments257['errorClass'] = 'f3-form-error';
$arguments257['prependOptionLabel'] = NULL;
$arguments257['prependOptionValue'] = NULL;
$arguments257['multiple'] = false;
$renderChildrenClosure258 = function() {return NULL;};
$viewHelper259 = $self->getViewHelper('$viewHelper259', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper259->setArguments($arguments257);
$viewHelper259->setRenderingContext($renderingContext);
$viewHelper259->setRenderChildrenClosure($renderChildrenClosure258);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output169 .= $viewHelper259->initializeArgumentsAndRender();

$output169 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments260 = array();
$arguments260['property'] = 'maintenance';
$arguments260['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments261 = array();
$arguments261['property'] = 'invasivitaetsgrad';
$arguments261['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure262 = function() {return NULL;};
$viewHelper263 = $self->getViewHelper('$viewHelper263', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper263->setArguments($arguments261);
$viewHelper263->setRenderingContext($renderingContext);
$viewHelper263->setRenderChildrenClosure($renderChildrenClosure262);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments260['options'] = $viewHelper263->initializeArgumentsAndRender();
$arguments260['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'maintenance', $renderingContext);
$arguments260['additionalAttributes'] = NULL;
$arguments260['data'] = NULL;
$arguments260['name'] = NULL;
$arguments260['dir'] = NULL;
$arguments260['id'] = NULL;
$arguments260['lang'] = NULL;
$arguments260['style'] = NULL;
$arguments260['title'] = NULL;
$arguments260['accesskey'] = NULL;
$arguments260['tabindex'] = NULL;
$arguments260['onclick'] = NULL;
$arguments260['size'] = NULL;
$arguments260['disabled'] = NULL;
$arguments260['optionValueField'] = NULL;
$arguments260['optionLabelField'] = NULL;
$arguments260['sortByOptionLabel'] = false;
$arguments260['selectAllByDefault'] = false;
$arguments260['errorClass'] = 'f3-form-error';
$arguments260['prependOptionLabel'] = NULL;
$arguments260['prependOptionValue'] = NULL;
$arguments260['multiple'] = false;
$renderChildrenClosure264 = function() {return NULL;};
$viewHelper265 = $self->getViewHelper('$viewHelper265', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper265->setArguments($arguments260);
$viewHelper265->setRenderingContext($renderingContext);
$viewHelper265->setRenderChildrenClosure($renderChildrenClosure264);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output169 .= $viewHelper265->initializeArgumentsAndRender();

$output169 .= '
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu2" class="tab-pane fade">
                <div class="padding">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments266 = array();
$arguments266['each'] = $currentVariableContainer->getOrNull('maxObjectives');
$arguments266['as'] = 'obj';
$arguments266['key'] = 'i';
$arguments266['reverse'] = false;
$arguments266['iteration'] = NULL;
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output268 = '';

$output268 .= '
                        <div class="row form-group">
                            <div class="col-sm-8">
                                <label>Zielparameter:</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments269 = array();
$output270 = '';

$output270 .= 'objective.';

$output270 .= $currentVariableContainer->getOrNull('i');

$output270 .= '.parameter';
$arguments269['property'] = $output270;
$arguments269['options'] = $currentVariableContainer->getOrNull('objectives');
$arguments269['class'] = 'form-control';
$arguments269['optionValueField'] = 'uid';
$arguments269['optionLabelField'] = 'parametername';
// Rendering Boolean node
$arguments269['sortByOptionLabel'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments269['prependOptionLabel'] = 'Ignorieren';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments271 = array();
$arguments271['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'objective', $renderingContext);
$arguments271['index'] = $currentVariableContainer->getOrNull('i');
$arguments271['sub'] = 'parameter';
$arguments271['additionalAttributes'] = NULL;
$arguments271['data'] = NULL;
$renderChildrenClosure272 = function() {return NULL;};
$viewHelper273 = $self->getViewHelper('$viewHelper273', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper273->setArguments($arguments271);
$viewHelper273->setRenderingContext($renderingContext);
$viewHelper273->setRenderChildrenClosure($renderChildrenClosure272);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments269['value'] = $viewHelper273->initializeArgumentsAndRender();
$arguments269['additionalAttributes'] = NULL;
$arguments269['data'] = NULL;
$arguments269['name'] = NULL;
$arguments269['dir'] = NULL;
$arguments269['id'] = NULL;
$arguments269['lang'] = NULL;
$arguments269['style'] = NULL;
$arguments269['title'] = NULL;
$arguments269['accesskey'] = NULL;
$arguments269['tabindex'] = NULL;
$arguments269['onclick'] = NULL;
$arguments269['size'] = NULL;
$arguments269['disabled'] = NULL;
$arguments269['selectAllByDefault'] = false;
$arguments269['errorClass'] = 'f3-form-error';
$arguments269['prependOptionValue'] = NULL;
$arguments269['multiple'] = false;
$renderChildrenClosure274 = function() {return NULL;};
$viewHelper275 = $self->getViewHelper('$viewHelper275', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper275->setArguments($arguments269);
$viewHelper275->setRenderingContext($renderingContext);
$viewHelper275->setRenderChildrenClosure($renderChildrenClosure274);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output268 .= $viewHelper275->initializeArgumentsAndRender();

$output268 .= '   
                            </div>
                            <div class="col-sm-2">
                                <label>Untergrenze:</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments276 = array();
$output277 = '';

$output277 .= 'objective.';

$output277 .= $currentVariableContainer->getOrNull('i');

$output277 .= '.from';
$arguments276['property'] = $output277;
$arguments276['class'] = 'form-control';
$arguments276['placeholder'] = 'Von';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments278 = array();
$arguments278['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'objective', $renderingContext);
$arguments278['index'] = $currentVariableContainer->getOrNull('i');
$arguments278['sub'] = 'from';
$arguments278['additionalAttributes'] = NULL;
$arguments278['data'] = NULL;
$renderChildrenClosure279 = function() {return NULL;};
$viewHelper280 = $self->getViewHelper('$viewHelper280', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper280->setArguments($arguments278);
$viewHelper280->setRenderingContext($renderingContext);
$viewHelper280->setRenderChildrenClosure($renderChildrenClosure279);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments276['value'] = $viewHelper280->initializeArgumentsAndRender();
$arguments276['additionalAttributes'] = NULL;
$arguments276['data'] = NULL;
$arguments276['required'] = false;
$arguments276['type'] = 'text';
$arguments276['name'] = NULL;
$arguments276['autofocus'] = NULL;
$arguments276['disabled'] = NULL;
$arguments276['maxlength'] = NULL;
$arguments276['readonly'] = NULL;
$arguments276['size'] = NULL;
$arguments276['pattern'] = NULL;
$arguments276['errorClass'] = 'f3-form-error';
$arguments276['dir'] = NULL;
$arguments276['id'] = NULL;
$arguments276['lang'] = NULL;
$arguments276['style'] = NULL;
$arguments276['title'] = NULL;
$arguments276['accesskey'] = NULL;
$arguments276['tabindex'] = NULL;
$arguments276['onclick'] = NULL;
$renderChildrenClosure281 = function() {return NULL;};
$viewHelper282 = $self->getViewHelper('$viewHelper282', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper282->setArguments($arguments276);
$viewHelper282->setRenderingContext($renderingContext);
$viewHelper282->setRenderChildrenClosure($renderChildrenClosure281);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output268 .= $viewHelper282->initializeArgumentsAndRender();

$output268 .= '
                            </div>
                            <div class="col-sm-2">
                                <label>Obergrenze:</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments283 = array();
$output284 = '';

$output284 .= 'objective.';

$output284 .= $currentVariableContainer->getOrNull('i');

$output284 .= '.to';
$arguments283['property'] = $output284;
$arguments283['class'] = 'form-control';
$arguments283['placeholder'] = 'Bis';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments285 = array();
$arguments285['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'objective', $renderingContext);
$arguments285['index'] = $currentVariableContainer->getOrNull('i');
$arguments285['sub'] = 'to';
$arguments285['additionalAttributes'] = NULL;
$arguments285['data'] = NULL;
$renderChildrenClosure286 = function() {return NULL;};
$viewHelper287 = $self->getViewHelper('$viewHelper287', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper287->setArguments($arguments285);
$viewHelper287->setRenderingContext($renderingContext);
$viewHelper287->setRenderChildrenClosure($renderChildrenClosure286);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments283['value'] = $viewHelper287->initializeArgumentsAndRender();
$arguments283['additionalAttributes'] = NULL;
$arguments283['data'] = NULL;
$arguments283['required'] = false;
$arguments283['type'] = 'text';
$arguments283['name'] = NULL;
$arguments283['autofocus'] = NULL;
$arguments283['disabled'] = NULL;
$arguments283['maxlength'] = NULL;
$arguments283['readonly'] = NULL;
$arguments283['size'] = NULL;
$arguments283['pattern'] = NULL;
$arguments283['errorClass'] = 'f3-form-error';
$arguments283['dir'] = NULL;
$arguments283['id'] = NULL;
$arguments283['lang'] = NULL;
$arguments283['style'] = NULL;
$arguments283['title'] = NULL;
$arguments283['accesskey'] = NULL;
$arguments283['tabindex'] = NULL;
$arguments283['onclick'] = NULL;
$renderChildrenClosure288 = function() {return NULL;};
$viewHelper289 = $self->getViewHelper('$viewHelper289', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper289->setArguments($arguments283);
$viewHelper289->setRenderingContext($renderingContext);
$viewHelper289->setRenderChildrenClosure($renderChildrenClosure288);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output268 .= $viewHelper289->initializeArgumentsAndRender();

$output268 .= '
                            </div>
                        </div>
                    ';
return $output268;
};

$output169 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output169 .= '
                </div>
            </div>
            <div id="menu3" class="tab-pane fade">
                <div class="padding">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments290 = array();
$arguments290['each'] = $currentVariableContainer->getOrNull('maxApplicationCases');
$arguments290['as'] = 'obj';
$arguments290['key'] = 'i';
$arguments290['reverse'] = false;
$arguments290['iteration'] = NULL;
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output292 = '';

$output292 .= '
                        <div class="row form-group">
                            <label class="control-label col-sm-2">
                                Fachlicher Anwendungsfall:
                            </label>
                            <div class="col-sm-10">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments293 = array();
$output294 = '';

$output294 .= 'applicationCase.';

$output294 .= $currentVariableContainer->getOrNull('i');

$output294 .= '.case';
$arguments293['property'] = $output294;
$arguments293['options'] = $currentVariableContainer->getOrNull('applicationCases');
$arguments293['class'] = 'form-control';
$arguments293['optionValueField'] = 'uid';
$arguments293['optionLabelField'] = 'bezeichnung';
// Rendering Boolean node
$arguments293['sortByOptionLabel'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments293['prependOptionLabel'] = 'Ignorieren';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments295 = array();
$arguments295['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'applicationCase', $renderingContext);
$arguments295['index'] = $currentVariableContainer->getOrNull('i');
$arguments295['sub'] = 'case';
$arguments295['additionalAttributes'] = NULL;
$arguments295['data'] = NULL;
$renderChildrenClosure296 = function() {return NULL;};
$viewHelper297 = $self->getViewHelper('$viewHelper297', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper297->setArguments($arguments295);
$viewHelper297->setRenderingContext($renderingContext);
$viewHelper297->setRenderChildrenClosure($renderChildrenClosure296);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments293['value'] = $viewHelper297->initializeArgumentsAndRender();
$arguments293['additionalAttributes'] = NULL;
$arguments293['data'] = NULL;
$arguments293['name'] = NULL;
$arguments293['dir'] = NULL;
$arguments293['id'] = NULL;
$arguments293['lang'] = NULL;
$arguments293['style'] = NULL;
$arguments293['title'] = NULL;
$arguments293['accesskey'] = NULL;
$arguments293['tabindex'] = NULL;
$arguments293['onclick'] = NULL;
$arguments293['size'] = NULL;
$arguments293['disabled'] = NULL;
$arguments293['selectAllByDefault'] = false;
$arguments293['errorClass'] = 'f3-form-error';
$arguments293['prependOptionValue'] = NULL;
$arguments293['multiple'] = false;
$renderChildrenClosure298 = function() {return NULL;};
$viewHelper299 = $self->getViewHelper('$viewHelper299', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper299->setArguments($arguments293);
$viewHelper299->setRenderingContext($renderingContext);
$viewHelper299->setRenderChildrenClosure($renderChildrenClosure298);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output292 .= $viewHelper299->initializeArgumentsAndRender();

$output292 .= '   
                            </div>
                        </div>
                        <div class="alert alert-warning">Definition des <u>Anwendungsfalls</u></div>
                    ';
return $output292;
};

$output169 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext);

$output169 .= '
                </div>
            </div>
            <div id="menu4" class="tab-pane fade">
                <div class="padding">
                    <div class="alert alert-warning">Verf&uuml;gbare Ressource des Anwenders</div>
                    <div class="alert alert-warning">Systemseitige R&uuml;ckfrage je Anwendungsfall</div>
                </div>
            </div>
            <div id="menu5" class="tab-pane fade">
                <div class="padding">
                    <div class="alert alert-warning">Kombination von L&ouml;sungsverfahren</div>
                </div>
            </div>
            <div id="menu6" class="tab-pane fade">
                <div class="padding">
                    <div class="alert alert-warning">Langzeitwirkung</div>
                </div>
            </div>
        </div>
        <div class="tab-footer-submit">
            <div class="row">
                <div class="col-sm-12">
                    <div class="padding">
                        <div class="progress hide">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
                                ...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6"> 
                    <div class="padding">
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments300 = array();
$arguments300['action'] = 'index';
$arguments300['arguments'] = array (
);
$arguments300['controller'] = NULL;
$arguments300['extensionName'] = NULL;
$arguments300['pluginName'] = NULL;
$arguments300['pageUid'] = NULL;
$arguments300['pageType'] = 0;
$arguments300['noCache'] = false;
$arguments300['noCacheHash'] = false;
$arguments300['section'] = '';
$arguments300['format'] = '';
$arguments300['linkAccessRestrictedPages'] = false;
$arguments300['additionalParams'] = array (
);
$arguments300['absolute'] = false;
$arguments300['addQueryString'] = false;
$arguments300['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments300['addQueryStringMethod'] = NULL;
$renderChildrenClosure301 = function() {return NULL;};
$viewHelper302 = $self->getViewHelper('$viewHelper302', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper302->setArguments($arguments300);
$viewHelper302->setRenderingContext($renderingContext);
$viewHelper302->setRenderChildrenClosure($renderChildrenClosure301);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output169 .= $viewHelper302->initializeArgumentsAndRender();

$output169 .= '" class="btn btn-info">Eingaben zur&uuml;cksetzen</a>
                    </div> 
                </div> 
                <div class="col-sm-6"> 
                    <div class="right padding">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments303 = array();
$arguments303['value'] = 'Suchen';
$arguments303['id'] = 'summary-submit';
$arguments303['class'] = 'btn btn-primary';
$arguments303['additionalAttributes'] = NULL;
$arguments303['data'] = NULL;
$arguments303['name'] = NULL;
$arguments303['property'] = NULL;
$arguments303['disabled'] = NULL;
$arguments303['dir'] = NULL;
$arguments303['lang'] = NULL;
$arguments303['style'] = NULL;
$arguments303['title'] = NULL;
$arguments303['accesskey'] = NULL;
$arguments303['tabindex'] = NULL;
$arguments303['onclick'] = NULL;
$renderChildrenClosure304 = function() {return NULL;};
$viewHelper305 = $self->getViewHelper('$viewHelper305', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper305->setArguments($arguments303);
$viewHelper305->setRenderingContext($renderingContext);
$viewHelper305->setRenderChildrenClosure($renderChildrenClosure304);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output169 .= $viewHelper305->initializeArgumentsAndRender();

$output169 .= '
                    </div>
                </div>  
            </div>
        </div>
    ';
return $output169;
};
$viewHelper306 = $self->getViewHelper('$viewHelper306', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper306->setArguments($arguments167);
$viewHelper306->setRenderingContext($renderingContext);
$viewHelper306->setRenderChildrenClosure($renderChildrenClosure168);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output166 .= $viewHelper306->initializeArgumentsAndRender();

$output166 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments307 = array();
// Rendering Boolean node
$arguments307['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('results'));
$arguments307['then'] = NULL;
$arguments307['else'] = NULL;
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output309 = '';

$output309 .= '
        <div class="page-header">
            <h2>
                Ergebnisliste <span class="label label-primary">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments310 = array();
$arguments310['subject'] = NULL;
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('results');
};

$output309 .= TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);

$output309 .= ' Treffer</span>
            </h2>
        </div>
        <div class="table-fit">
            <table class="table table-striped table-hover">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments312 = array();
$arguments312['each'] = $currentVariableContainer->getOrNull('results');
$arguments312['as'] = 'solution';
$arguments312['key'] = '';
$arguments312['reverse'] = false;
$arguments312['iteration'] = NULL;
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output314 = '';

$output314 .= '
                    <tr>
                        <td style="width: 10%">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments315 = array();
$arguments315['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'teilprojektnummer', $renderingContext);
$arguments315['keepQuotes'] = false;
$arguments315['encoding'] = NULL;
$arguments315['doubleEncode'] = true;
$renderChildrenClosure316 = function() {return NULL;};
$value317 = ($arguments315['value'] !== NULL ? $arguments315['value'] : $renderChildrenClosure316());

$output314 .= (!is_string($value317) ? $value317 : htmlspecialchars($value317, ($arguments315['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments315['encoding'] !== NULL ? $arguments315['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments315['doubleEncode']));

$output314 .= '    
                        </td>
                        <td>
                            ';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper
$arguments318 = array();
$output319 = '';

$output319 .= 'edit[tx_wisedocasysdomaindesigner_domain_model_loesung][';

$output319 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'uid', $renderingContext);

$output319 .= ']=edit';
$arguments318['parameters'] = $output319;
$arguments318['additionalAttributes'] = NULL;
$arguments318['data'] = NULL;
$arguments318['returnUrl'] = '';
$arguments318['class'] = NULL;
$arguments318['dir'] = NULL;
$arguments318['id'] = NULL;
$arguments318['lang'] = NULL;
$arguments318['style'] = NULL;
$arguments318['title'] = NULL;
$arguments318['accesskey'] = NULL;
$arguments318['tabindex'] = NULL;
$arguments318['onclick'] = NULL;
$arguments318['name'] = NULL;
$arguments318['target'] = NULL;
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output321 = '';

$output321 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments322 = array();
$arguments322['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'loesungsbezeichnung', $renderingContext);
$arguments322['keepQuotes'] = false;
$arguments322['encoding'] = NULL;
$arguments322['doubleEncode'] = true;
$renderChildrenClosure323 = function() {return NULL;};
$value324 = ($arguments322['value'] !== NULL ? $arguments322['value'] : $renderChildrenClosure323());

$output321 .= (!is_string($value324) ? $value324 : htmlspecialchars($value324, ($arguments322['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments322['encoding'] !== NULL ? $arguments322['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments322['doubleEncode']));

$output321 .= '
                            ';
return $output321;
};
$viewHelper325 = $self->getViewHelper('$viewHelper325', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper');
$viewHelper325->setArguments($arguments318);
$viewHelper325->setRenderingContext($renderingContext);
$viewHelper325->setRenderChildrenClosure($renderChildrenClosure320);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper

$output314 .= $viewHelper325->initializeArgumentsAndRender();

$output314 .= '
                        </td>
                    </tr>
                ';
return $output314;
};

$output309 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);

$output309 .= '
            </table>
        </div>
    ';
return $output309;
};

$output166 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output166 .= ' 
    <script> 
        $("form#recommender").submit(function(e){ 
            $(".progress").removeClass(\'hide\');
            e.preventDefault();
            var step = 1;
            var stepMax = 8;
            var t = \'\';
            var interval = setInterval(function() { 
                if (step <= stepMax) { 
                    switch(step) {
                        case 1:
                            t = \'Eingabeverarbeitung\';
                        break;
                        case 2:
                            t = \'Eignungsmatrix berechnen - Filter\';
                        break;
                        case 3:
                            t = \'Eignungsmatrix berechnen - Anwendungsfall und Zielparameter\';
                        break;
                        case 4:
                            t = \'Aufwandsmatrix berechnen - Generischer Aufwand\';
                        break;
                        case 5:
                            t = \'Aufwandsmatrix berechnen - Unternehmensspezifischer Aufwand\';
                        break;
                        case 6:
                            t = \'Robustheitsvektor einbeziehen\';
                        break;
                        case 7:
                            t = \'Rangfolge erstellen\';
                        break;
                        case 8:
                            t = \'Ausgabe vorbereiten\';
                        break;
                    }
                    $(".progress-bar-success").attr(\'aria-valuenow\', (100/stepMax) * step).css(\'width\', (100/stepMax) * step + \'%\').text(t);
                    step++;
                } else {
                    clearInterval(interval);
                    $("form#recommender").unbind().submit();
                }
            }, 2000);
        });
    </script>
';
return $output166;
};

$output160 .= '';


return $output160;
}


}
#1572862221    152622    