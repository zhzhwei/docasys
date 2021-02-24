<?php
class FluidCache_WiseDocasysBackend_Filter_action_index_baa08f8d8e56eea2c724ccc4374ce51c8f8d203e extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    <h1>Filter</h1>  

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['name'] = 'filter-submit';
$arguments1['action'] = 'index';
$arguments1['method'] = 'post';
$arguments1['style'] = 'width: 100%;';
$arguments1['class'] = 'form-horizontal hidden-print';
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
        <ul class="nav nav-tabs">
            <li class="';
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
                <a data-toggle="tab" href="#menu1">Eigenschaften</a>
            </li>
            <li>
                <a data-toggle="tab" href="#menu2">Anwendungsf&auml;lle</a>
            </li>
            <li>
                <a data-toggle="tab" href="#menu3">Optimierungsziele</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="menu1" class="tab-pane fade in ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments9 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = $currentVariableContainer->getOrNull('results');
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = NULL;
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() {return NULL;};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());
$arguments9['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments10['encoding'] !== NULL ? $arguments10['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments10['doubleEncode'])));
$arguments9['then'] = '';
$arguments9['else'] = 'active';
$renderChildrenClosure13 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure13, $renderingContext);

$output3 .= '">
                <div class="padding">
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            L&ouml;sungsart:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments14 = array();
$arguments14['property'] = 'operator.kind';
$arguments14['options'] = $currentVariableContainer->getOrNull('operators');
$arguments14['class'] = 'form-control';
$arguments14['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.kind', $renderingContext);
$arguments14['additionalAttributes'] = NULL;
$arguments14['data'] = NULL;
$arguments14['name'] = NULL;
$arguments14['dir'] = NULL;
$arguments14['id'] = NULL;
$arguments14['lang'] = NULL;
$arguments14['style'] = NULL;
$arguments14['title'] = NULL;
$arguments14['accesskey'] = NULL;
$arguments14['tabindex'] = NULL;
$arguments14['onclick'] = NULL;
$arguments14['size'] = NULL;
$arguments14['disabled'] = NULL;
$arguments14['optionValueField'] = NULL;
$arguments14['optionLabelField'] = NULL;
$arguments14['sortByOptionLabel'] = false;
$arguments14['selectAllByDefault'] = false;
$arguments14['errorClass'] = 'f3-form-error';
$arguments14['prependOptionLabel'] = NULL;
$arguments14['prependOptionValue'] = NULL;
$arguments14['multiple'] = false;
$renderChildrenClosure15 = function() {return NULL;};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper16->setArguments($arguments14);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper16->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments17 = array();
$arguments17['property'] = 'kind';
$arguments17['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments18 = array();
$arguments18['property'] = 'loesungsart';
$arguments18['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments17['options'] = $viewHelper20->initializeArgumentsAndRender();
$arguments17['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'kind', $renderingContext);
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['name'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['size'] = NULL;
$arguments17['disabled'] = NULL;
$arguments17['optionValueField'] = NULL;
$arguments17['optionLabelField'] = NULL;
$arguments17['sortByOptionLabel'] = false;
$arguments17['selectAllByDefault'] = false;
$arguments17['errorClass'] = 'f3-form-error';
$arguments17['prependOptionLabel'] = NULL;
$arguments17['prependOptionValue'] = NULL;
$arguments17['multiple'] = false;
$renderChildrenClosure21 = function() {return NULL;};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper22->setArguments($arguments17);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper22->initializeArgumentsAndRender();

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
$arguments23 = array();
$arguments23['property'] = 'operator.name';
$arguments23['options'] = $currentVariableContainer->getOrNull('operators');
$arguments23['class'] = 'form-control';
$arguments23['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.name', $renderingContext);
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['name'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['size'] = NULL;
$arguments23['disabled'] = NULL;
$arguments23['optionValueField'] = NULL;
$arguments23['optionLabelField'] = NULL;
$arguments23['sortByOptionLabel'] = false;
$arguments23['selectAllByDefault'] = false;
$arguments23['errorClass'] = 'f3-form-error';
$arguments23['prependOptionLabel'] = NULL;
$arguments23['prependOptionValue'] = NULL;
$arguments23['multiple'] = false;
$renderChildrenClosure24 = function() {return NULL;};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper25->setArguments($arguments23);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper25->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments26 = array();
$arguments26['property'] = 'name';
$arguments26['class'] = 'form-control';
$arguments26['placeholder'] = 'Bezeichnung';
$arguments26['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'name', $renderingContext);
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['required'] = false;
$arguments26['type'] = 'text';
$arguments26['name'] = NULL;
$arguments26['autofocus'] = NULL;
$arguments26['disabled'] = NULL;
$arguments26['maxlength'] = NULL;
$arguments26['readonly'] = NULL;
$arguments26['size'] = NULL;
$arguments26['pattern'] = NULL;
$arguments26['errorClass'] = 'f3-form-error';
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper28->setArguments($arguments26);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper28->initializeArgumentsAndRender();

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
$arguments29 = array();
$arguments29['property'] = 'operator.class';
$arguments29['options'] = $currentVariableContainer->getOrNull('operators');
$arguments29['class'] = 'form-control';
$arguments29['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.class', $renderingContext);
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['name'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['size'] = NULL;
$arguments29['disabled'] = NULL;
$arguments29['optionValueField'] = NULL;
$arguments29['optionLabelField'] = NULL;
$arguments29['sortByOptionLabel'] = false;
$arguments29['selectAllByDefault'] = false;
$arguments29['errorClass'] = 'f3-form-error';
$arguments29['prependOptionLabel'] = NULL;
$arguments29['prependOptionValue'] = NULL;
$arguments29['multiple'] = false;
$renderChildrenClosure30 = function() {return NULL;};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper31->setArguments($arguments29);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper31->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments32 = array();
$arguments32['property'] = 'class';
$arguments32['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments33 = array();
$arguments33['property'] = 'loesungsklasse';
$arguments33['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure34 = function() {return NULL;};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper35->setArguments($arguments33);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments32['options'] = $viewHelper35->initializeArgumentsAndRender();
$arguments32['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'class', $renderingContext);
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['name'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['size'] = NULL;
$arguments32['disabled'] = NULL;
$arguments32['optionValueField'] = NULL;
$arguments32['optionLabelField'] = NULL;
$arguments32['sortByOptionLabel'] = false;
$arguments32['selectAllByDefault'] = false;
$arguments32['errorClass'] = 'f3-form-error';
$arguments32['prependOptionLabel'] = NULL;
$arguments32['prependOptionValue'] = NULL;
$arguments32['multiple'] = false;
$renderChildrenClosure36 = function() {return NULL;};
$viewHelper37 = $self->getViewHelper('$viewHelper37', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper37->setArguments($arguments32);
$viewHelper37->setRenderingContext($renderingContext);
$viewHelper37->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper37->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                    </div>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments38 = array();
$arguments38['each'] = $currentVariableContainer->getOrNull('maxDesigntypes');
$arguments38['as'] = 'dt';
$arguments38['key'] = 'i';
$arguments38['reverse'] = false;
$arguments38['iteration'] = NULL;
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output40 = '';

$output40 .= '
                        <div class="row form-group">
                            <label class="control-label col-sm-2">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments41 = array();
// Rendering Boolean node
$arguments41['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('i'), 0);
$arguments41['then'] = NULL;
$arguments41['else'] = NULL;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    Gestaltungsart(en):
                                ';
};

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
                            </label>
                            <div class="col-sm-2">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments43 = array();
$output44 = '';

$output44 .= 'operator.designtype.';

$output44 .= $currentVariableContainer->getOrNull('i');
$arguments43['property'] = $output44;
$arguments43['options'] = $currentVariableContainer->getOrNull('operators');
$arguments43['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments45 = array();
$arguments45['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.designtype', $renderingContext);
$arguments45['index'] = $currentVariableContainer->getOrNull('i');
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['sub'] = NULL;
$renderChildrenClosure46 = function() {return NULL;};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper47->setArguments($arguments45);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure46);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments43['value'] = $viewHelper47->initializeArgumentsAndRender();
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['name'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['size'] = NULL;
$arguments43['disabled'] = NULL;
$arguments43['optionValueField'] = NULL;
$arguments43['optionLabelField'] = NULL;
$arguments43['sortByOptionLabel'] = false;
$arguments43['selectAllByDefault'] = false;
$arguments43['errorClass'] = 'f3-form-error';
$arguments43['prependOptionLabel'] = NULL;
$arguments43['prependOptionValue'] = NULL;
$arguments43['multiple'] = false;
$renderChildrenClosure48 = function() {return NULL;};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper49->setArguments($arguments43);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure48);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output40 .= $viewHelper49->initializeArgumentsAndRender();

$output40 .= '
                            </div>
                            <div class="col-sm-8">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments50 = array();
$output51 = '';

$output51 .= 'designtype.';

$output51 .= $currentVariableContainer->getOrNull('i');
$arguments50['property'] = $output51;
$arguments50['options'] = $currentVariableContainer->getOrNull('designtypes');
$arguments50['class'] = 'form-control';
$arguments50['optionValueField'] = 'uid';
$arguments50['optionLabelField'] = 'bezeichnung';
// Rendering Boolean node
$arguments50['sortByOptionLabel'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments50['prependOptionLabel'] = 'Ignorieren';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments52 = array();
$arguments52['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'designtype', $renderingContext);
$arguments52['index'] = $currentVariableContainer->getOrNull('i');
$arguments52['additionalAttributes'] = NULL;
$arguments52['data'] = NULL;
$arguments52['sub'] = NULL;
$renderChildrenClosure53 = function() {return NULL;};
$viewHelper54 = $self->getViewHelper('$viewHelper54', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper54->setArguments($arguments52);
$viewHelper54->setRenderingContext($renderingContext);
$viewHelper54->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments50['value'] = $viewHelper54->initializeArgumentsAndRender();
$arguments50['additionalAttributes'] = NULL;
$arguments50['data'] = NULL;
$arguments50['name'] = NULL;
$arguments50['dir'] = NULL;
$arguments50['id'] = NULL;
$arguments50['lang'] = NULL;
$arguments50['style'] = NULL;
$arguments50['title'] = NULL;
$arguments50['accesskey'] = NULL;
$arguments50['tabindex'] = NULL;
$arguments50['onclick'] = NULL;
$arguments50['size'] = NULL;
$arguments50['disabled'] = NULL;
$arguments50['selectAllByDefault'] = false;
$arguments50['errorClass'] = 'f3-form-error';
$arguments50['prependOptionValue'] = NULL;
$arguments50['multiple'] = false;
$renderChildrenClosure55 = function() {return NULL;};
$viewHelper56 = $self->getViewHelper('$viewHelper56', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper56->setArguments($arguments50);
$viewHelper56->setRenderingContext($renderingContext);
$viewHelper56->setRenderChildrenClosure($renderChildrenClosure55);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output40 .= $viewHelper56->initializeArgumentsAndRender();

$output40 .= '
                            </div>
                        </div>
                    ';
return $output40;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output3 .= '
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Phase:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments57 = array();
$arguments57['property'] = 'operator.phase';
$arguments57['options'] = $currentVariableContainer->getOrNull('operators');
$arguments57['class'] = 'form-control';
$arguments57['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.phase', $renderingContext);
$arguments57['additionalAttributes'] = NULL;
$arguments57['data'] = NULL;
$arguments57['name'] = NULL;
$arguments57['dir'] = NULL;
$arguments57['id'] = NULL;
$arguments57['lang'] = NULL;
$arguments57['style'] = NULL;
$arguments57['title'] = NULL;
$arguments57['accesskey'] = NULL;
$arguments57['tabindex'] = NULL;
$arguments57['onclick'] = NULL;
$arguments57['size'] = NULL;
$arguments57['disabled'] = NULL;
$arguments57['optionValueField'] = NULL;
$arguments57['optionLabelField'] = NULL;
$arguments57['sortByOptionLabel'] = false;
$arguments57['selectAllByDefault'] = false;
$arguments57['errorClass'] = 'f3-form-error';
$arguments57['prependOptionLabel'] = NULL;
$arguments57['prependOptionValue'] = NULL;
$arguments57['multiple'] = false;
$renderChildrenClosure58 = function() {return NULL;};
$viewHelper59 = $self->getViewHelper('$viewHelper59', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper59->setArguments($arguments57);
$viewHelper59->setRenderingContext($renderingContext);
$viewHelper59->setRenderChildrenClosure($renderChildrenClosure58);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper59->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments60 = array();
$arguments60['property'] = 'phase';
$arguments60['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments61 = array();
$arguments61['property'] = 'phaseDerThermischenWirkkette';
$arguments61['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure62 = function() {return NULL;};
$viewHelper63 = $self->getViewHelper('$viewHelper63', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper63->setArguments($arguments61);
$viewHelper63->setRenderingContext($renderingContext);
$viewHelper63->setRenderChildrenClosure($renderChildrenClosure62);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments60['options'] = $viewHelper63->initializeArgumentsAndRender();
$arguments60['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'phase', $renderingContext);
$arguments60['additionalAttributes'] = NULL;
$arguments60['data'] = NULL;
$arguments60['name'] = NULL;
$arguments60['dir'] = NULL;
$arguments60['id'] = NULL;
$arguments60['lang'] = NULL;
$arguments60['style'] = NULL;
$arguments60['title'] = NULL;
$arguments60['accesskey'] = NULL;
$arguments60['tabindex'] = NULL;
$arguments60['onclick'] = NULL;
$arguments60['size'] = NULL;
$arguments60['disabled'] = NULL;
$arguments60['optionValueField'] = NULL;
$arguments60['optionLabelField'] = NULL;
$arguments60['sortByOptionLabel'] = false;
$arguments60['selectAllByDefault'] = false;
$arguments60['errorClass'] = 'f3-form-error';
$arguments60['prependOptionLabel'] = NULL;
$arguments60['prependOptionValue'] = NULL;
$arguments60['multiple'] = false;
$renderChildrenClosure64 = function() {return NULL;};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper65->setArguments($arguments60);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper65->initializeArgumentsAndRender();

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
$arguments66 = array();
$arguments66['property'] = 'operator.effect';
$arguments66['options'] = $currentVariableContainer->getOrNull('operators');
$arguments66['class'] = 'form-control';
$arguments66['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.effect', $renderingContext);
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['name'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['size'] = NULL;
$arguments66['disabled'] = NULL;
$arguments66['optionValueField'] = NULL;
$arguments66['optionLabelField'] = NULL;
$arguments66['sortByOptionLabel'] = false;
$arguments66['selectAllByDefault'] = false;
$arguments66['errorClass'] = 'f3-form-error';
$arguments66['prependOptionLabel'] = NULL;
$arguments66['prependOptionValue'] = NULL;
$arguments66['multiple'] = false;
$renderChildrenClosure67 = function() {return NULL;};
$viewHelper68 = $self->getViewHelper('$viewHelper68', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper68->setArguments($arguments66);
$viewHelper68->setRenderingContext($renderingContext);
$viewHelper68->setRenderChildrenClosure($renderChildrenClosure67);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper68->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments69 = array();
$arguments69['property'] = 'effect';
$arguments69['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments70 = array();
$arguments70['property'] = 'physikalischerEffekt';
$arguments70['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure71 = function() {return NULL;};
$viewHelper72 = $self->getViewHelper('$viewHelper72', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper72->setArguments($arguments70);
$viewHelper72->setRenderingContext($renderingContext);
$viewHelper72->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments69['options'] = $viewHelper72->initializeArgumentsAndRender();
$arguments69['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'effect', $renderingContext);
$arguments69['additionalAttributes'] = NULL;
$arguments69['data'] = NULL;
$arguments69['name'] = NULL;
$arguments69['dir'] = NULL;
$arguments69['id'] = NULL;
$arguments69['lang'] = NULL;
$arguments69['style'] = NULL;
$arguments69['title'] = NULL;
$arguments69['accesskey'] = NULL;
$arguments69['tabindex'] = NULL;
$arguments69['onclick'] = NULL;
$arguments69['size'] = NULL;
$arguments69['disabled'] = NULL;
$arguments69['optionValueField'] = NULL;
$arguments69['optionLabelField'] = NULL;
$arguments69['sortByOptionLabel'] = false;
$arguments69['selectAllByDefault'] = false;
$arguments69['errorClass'] = 'f3-form-error';
$arguments69['prependOptionLabel'] = NULL;
$arguments69['prependOptionValue'] = NULL;
$arguments69['multiple'] = false;
$renderChildrenClosure73 = function() {return NULL;};
$viewHelper74 = $self->getViewHelper('$viewHelper74', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper74->setArguments($arguments69);
$viewHelper74->setRenderingContext($renderingContext);
$viewHelper74->setRenderChildrenClosure($renderChildrenClosure73);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper74->initializeArgumentsAndRender();

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
$arguments75 = array();
$arguments75['property'] = 'operator.producer';
$arguments75['options'] = $currentVariableContainer->getOrNull('operators');
$arguments75['class'] = 'form-control';
$arguments75['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.producer', $renderingContext);
$arguments75['additionalAttributes'] = NULL;
$arguments75['data'] = NULL;
$arguments75['name'] = NULL;
$arguments75['dir'] = NULL;
$arguments75['id'] = NULL;
$arguments75['lang'] = NULL;
$arguments75['style'] = NULL;
$arguments75['title'] = NULL;
$arguments75['accesskey'] = NULL;
$arguments75['tabindex'] = NULL;
$arguments75['onclick'] = NULL;
$arguments75['size'] = NULL;
$arguments75['disabled'] = NULL;
$arguments75['optionValueField'] = NULL;
$arguments75['optionLabelField'] = NULL;
$arguments75['sortByOptionLabel'] = false;
$arguments75['selectAllByDefault'] = false;
$arguments75['errorClass'] = 'f3-form-error';
$arguments75['prependOptionLabel'] = NULL;
$arguments75['prependOptionValue'] = NULL;
$arguments75['multiple'] = false;
$renderChildrenClosure76 = function() {return NULL;};
$viewHelper77 = $self->getViewHelper('$viewHelper77', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper77->setArguments($arguments75);
$viewHelper77->setRenderingContext($renderingContext);
$viewHelper77->setRenderChildrenClosure($renderChildrenClosure76);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper77->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments78 = array();
$arguments78['property'] = 'producer';
$arguments78['options'] = $currentVariableContainer->getOrNull('booleanValues');
$arguments78['class'] = 'form-control';
$arguments78['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'producer', $renderingContext);
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['name'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['size'] = NULL;
$arguments78['disabled'] = NULL;
$arguments78['optionValueField'] = NULL;
$arguments78['optionLabelField'] = NULL;
$arguments78['sortByOptionLabel'] = false;
$arguments78['selectAllByDefault'] = false;
$arguments78['errorClass'] = 'f3-form-error';
$arguments78['prependOptionLabel'] = NULL;
$arguments78['prependOptionValue'] = NULL;
$arguments78['multiple'] = false;
$renderChildrenClosure79 = function() {return NULL;};
$viewHelper80 = $self->getViewHelper('$viewHelper80', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper80->setArguments($arguments78);
$viewHelper80->setRenderingContext($renderingContext);
$viewHelper80->setRenderChildrenClosure($renderChildrenClosure79);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper80->initializeArgumentsAndRender();

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
$arguments81 = array();
$arguments81['property'] = 'operator.consumer';
$arguments81['options'] = $currentVariableContainer->getOrNull('operators');
$arguments81['class'] = 'form-control';
$arguments81['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.consumer', $renderingContext);
$arguments81['additionalAttributes'] = NULL;
$arguments81['data'] = NULL;
$arguments81['name'] = NULL;
$arguments81['dir'] = NULL;
$arguments81['id'] = NULL;
$arguments81['lang'] = NULL;
$arguments81['style'] = NULL;
$arguments81['title'] = NULL;
$arguments81['accesskey'] = NULL;
$arguments81['tabindex'] = NULL;
$arguments81['onclick'] = NULL;
$arguments81['size'] = NULL;
$arguments81['disabled'] = NULL;
$arguments81['optionValueField'] = NULL;
$arguments81['optionLabelField'] = NULL;
$arguments81['sortByOptionLabel'] = false;
$arguments81['selectAllByDefault'] = false;
$arguments81['errorClass'] = 'f3-form-error';
$arguments81['prependOptionLabel'] = NULL;
$arguments81['prependOptionValue'] = NULL;
$arguments81['multiple'] = false;
$renderChildrenClosure82 = function() {return NULL;};
$viewHelper83 = $self->getViewHelper('$viewHelper83', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper83->setArguments($arguments81);
$viewHelper83->setRenderingContext($renderingContext);
$viewHelper83->setRenderChildrenClosure($renderChildrenClosure82);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper83->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments84 = array();
$arguments84['property'] = 'consumer';
$arguments84['options'] = $currentVariableContainer->getOrNull('booleanValues');
$arguments84['class'] = 'form-control';
$arguments84['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'consumer', $renderingContext);
$arguments84['additionalAttributes'] = NULL;
$arguments84['data'] = NULL;
$arguments84['name'] = NULL;
$arguments84['dir'] = NULL;
$arguments84['id'] = NULL;
$arguments84['lang'] = NULL;
$arguments84['style'] = NULL;
$arguments84['title'] = NULL;
$arguments84['accesskey'] = NULL;
$arguments84['tabindex'] = NULL;
$arguments84['onclick'] = NULL;
$arguments84['size'] = NULL;
$arguments84['disabled'] = NULL;
$arguments84['optionValueField'] = NULL;
$arguments84['optionLabelField'] = NULL;
$arguments84['sortByOptionLabel'] = false;
$arguments84['selectAllByDefault'] = false;
$arguments84['errorClass'] = 'f3-form-error';
$arguments84['prependOptionLabel'] = NULL;
$arguments84['prependOptionValue'] = NULL;
$arguments84['multiple'] = false;
$renderChildrenClosure85 = function() {return NULL;};
$viewHelper86 = $self->getViewHelper('$viewHelper86', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper86->setArguments($arguments84);
$viewHelper86->setRenderingContext($renderingContext);
$viewHelper86->setRenderChildrenClosure($renderChildrenClosure85);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper86->initializeArgumentsAndRender();

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
$arguments87 = array();
$arguments87['property'] = 'operator.invasivity';
$arguments87['options'] = $currentVariableContainer->getOrNull('operators');
$arguments87['class'] = 'form-control';
$arguments87['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.invasivity', $renderingContext);
$arguments87['additionalAttributes'] = NULL;
$arguments87['data'] = NULL;
$arguments87['name'] = NULL;
$arguments87['dir'] = NULL;
$arguments87['id'] = NULL;
$arguments87['lang'] = NULL;
$arguments87['style'] = NULL;
$arguments87['title'] = NULL;
$arguments87['accesskey'] = NULL;
$arguments87['tabindex'] = NULL;
$arguments87['onclick'] = NULL;
$arguments87['size'] = NULL;
$arguments87['disabled'] = NULL;
$arguments87['optionValueField'] = NULL;
$arguments87['optionLabelField'] = NULL;
$arguments87['sortByOptionLabel'] = false;
$arguments87['selectAllByDefault'] = false;
$arguments87['errorClass'] = 'f3-form-error';
$arguments87['prependOptionLabel'] = NULL;
$arguments87['prependOptionValue'] = NULL;
$arguments87['multiple'] = false;
$renderChildrenClosure88 = function() {return NULL;};
$viewHelper89 = $self->getViewHelper('$viewHelper89', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper89->setArguments($arguments87);
$viewHelper89->setRenderingContext($renderingContext);
$viewHelper89->setRenderChildrenClosure($renderChildrenClosure88);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper89->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments90 = array();
$arguments90['property'] = 'invasivity';
$arguments90['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments91 = array();
$arguments91['property'] = 'invasivitaetsgrad';
$arguments91['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure92 = function() {return NULL;};
$viewHelper93 = $self->getViewHelper('$viewHelper93', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper93->setArguments($arguments91);
$viewHelper93->setRenderingContext($renderingContext);
$viewHelper93->setRenderChildrenClosure($renderChildrenClosure92);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments90['options'] = $viewHelper93->initializeArgumentsAndRender();
$arguments90['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'invasivity', $renderingContext);
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['name'] = NULL;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['title'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$arguments90['size'] = NULL;
$arguments90['disabled'] = NULL;
$arguments90['optionValueField'] = NULL;
$arguments90['optionLabelField'] = NULL;
$arguments90['sortByOptionLabel'] = false;
$arguments90['selectAllByDefault'] = false;
$arguments90['errorClass'] = 'f3-form-error';
$arguments90['prependOptionLabel'] = NULL;
$arguments90['prependOptionValue'] = NULL;
$arguments90['multiple'] = false;
$renderChildrenClosure94 = function() {return NULL;};
$viewHelper95 = $self->getViewHelper('$viewHelper95', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper95->setArguments($arguments90);
$viewHelper95->setRenderingContext($renderingContext);
$viewHelper95->setRenderChildrenClosure($renderChildrenClosure94);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper95->initializeArgumentsAndRender();

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
$arguments96 = array();
$arguments96['property'] = 'operator.maintenance';
$arguments96['options'] = $currentVariableContainer->getOrNull('operators');
$arguments96['class'] = 'form-control';
$arguments96['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.maintenance', $renderingContext);
$arguments96['additionalAttributes'] = NULL;
$arguments96['data'] = NULL;
$arguments96['name'] = NULL;
$arguments96['dir'] = NULL;
$arguments96['id'] = NULL;
$arguments96['lang'] = NULL;
$arguments96['style'] = NULL;
$arguments96['title'] = NULL;
$arguments96['accesskey'] = NULL;
$arguments96['tabindex'] = NULL;
$arguments96['onclick'] = NULL;
$arguments96['size'] = NULL;
$arguments96['disabled'] = NULL;
$arguments96['optionValueField'] = NULL;
$arguments96['optionLabelField'] = NULL;
$arguments96['sortByOptionLabel'] = false;
$arguments96['selectAllByDefault'] = false;
$arguments96['errorClass'] = 'f3-form-error';
$arguments96['prependOptionLabel'] = NULL;
$arguments96['prependOptionValue'] = NULL;
$arguments96['multiple'] = false;
$renderChildrenClosure97 = function() {return NULL;};
$viewHelper98 = $self->getViewHelper('$viewHelper98', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper98->setArguments($arguments96);
$viewHelper98->setRenderingContext($renderingContext);
$viewHelper98->setRenderChildrenClosure($renderChildrenClosure97);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper98->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments99 = array();
$arguments99['property'] = 'maintenance';
$arguments99['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments100 = array();
$arguments100['property'] = 'invasivitaetsgrad';
$arguments100['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure101 = function() {return NULL;};
$viewHelper102 = $self->getViewHelper('$viewHelper102', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper102->setArguments($arguments100);
$viewHelper102->setRenderingContext($renderingContext);
$viewHelper102->setRenderChildrenClosure($renderChildrenClosure101);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments99['options'] = $viewHelper102->initializeArgumentsAndRender();
$arguments99['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'maintenance', $renderingContext);
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['name'] = NULL;
$arguments99['dir'] = NULL;
$arguments99['id'] = NULL;
$arguments99['lang'] = NULL;
$arguments99['style'] = NULL;
$arguments99['title'] = NULL;
$arguments99['accesskey'] = NULL;
$arguments99['tabindex'] = NULL;
$arguments99['onclick'] = NULL;
$arguments99['size'] = NULL;
$arguments99['disabled'] = NULL;
$arguments99['optionValueField'] = NULL;
$arguments99['optionLabelField'] = NULL;
$arguments99['sortByOptionLabel'] = false;
$arguments99['selectAllByDefault'] = false;
$arguments99['errorClass'] = 'f3-form-error';
$arguments99['prependOptionLabel'] = NULL;
$arguments99['prependOptionValue'] = NULL;
$arguments99['multiple'] = false;
$renderChildrenClosure103 = function() {return NULL;};
$viewHelper104 = $self->getViewHelper('$viewHelper104', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper104->setArguments($arguments99);
$viewHelper104->setRenderingContext($renderingContext);
$viewHelper104->setRenderChildrenClosure($renderChildrenClosure103);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper104->initializeArgumentsAndRender();

$output3 .= '
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu2" class="tab-pane fade">
                <div class="padding">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments105 = array();
$arguments105['each'] = $currentVariableContainer->getOrNull('maxApplicationCases');
$arguments105['as'] = 'obj';
$arguments105['key'] = 'i';
$arguments105['reverse'] = false;
$arguments105['iteration'] = NULL;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output107 = '';

$output107 .= '
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <label>Anwendungsfall:</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments108 = array();
$output109 = '';

$output109 .= 'applicationCase.';

$output109 .= $currentVariableContainer->getOrNull('i');

$output109 .= '.case';
$arguments108['property'] = $output109;
$arguments108['options'] = $currentVariableContainer->getOrNull('applicationCases');
$arguments108['class'] = 'form-control';
$arguments108['optionValueField'] = 'uid';
$arguments108['optionLabelField'] = 'bezeichnung';
// Rendering Boolean node
$arguments108['sortByOptionLabel'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments108['prependOptionLabel'] = 'Ignorieren';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments110 = array();
$arguments110['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'applicationCase', $renderingContext);
$arguments110['index'] = $currentVariableContainer->getOrNull('i');
$arguments110['sub'] = 'case';
$arguments110['additionalAttributes'] = NULL;
$arguments110['data'] = NULL;
$renderChildrenClosure111 = function() {return NULL;};
$viewHelper112 = $self->getViewHelper('$viewHelper112', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper112->setArguments($arguments110);
$viewHelper112->setRenderingContext($renderingContext);
$viewHelper112->setRenderChildrenClosure($renderChildrenClosure111);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments108['value'] = $viewHelper112->initializeArgumentsAndRender();
$arguments108['additionalAttributes'] = NULL;
$arguments108['data'] = NULL;
$arguments108['name'] = NULL;
$arguments108['dir'] = NULL;
$arguments108['id'] = NULL;
$arguments108['lang'] = NULL;
$arguments108['style'] = NULL;
$arguments108['title'] = NULL;
$arguments108['accesskey'] = NULL;
$arguments108['tabindex'] = NULL;
$arguments108['onclick'] = NULL;
$arguments108['size'] = NULL;
$arguments108['disabled'] = NULL;
$arguments108['selectAllByDefault'] = false;
$arguments108['errorClass'] = 'f3-form-error';
$arguments108['prependOptionValue'] = NULL;
$arguments108['multiple'] = false;
$renderChildrenClosure113 = function() {return NULL;};
$viewHelper114 = $self->getViewHelper('$viewHelper114', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper114->setArguments($arguments108);
$viewHelper114->setRenderingContext($renderingContext);
$viewHelper114->setRenderChildrenClosure($renderChildrenClosure113);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output107 .= $viewHelper114->initializeArgumentsAndRender();

$output107 .= '   
                            </div>
                            <div class="col-sm-2">
                                <label>Bewertung:</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments115 = array();
$output116 = '';

$output116 .= 'applicationCase.';

$output116 .= $currentVariableContainer->getOrNull('i');

$output116 .= '.rating';
$arguments115['property'] = $output116;
$arguments115['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments117 = array();
$arguments117['property'] = 'eignungsgrad';
$arguments117['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Eignungsprofil';
$renderChildrenClosure118 = function() {return NULL;};
$viewHelper119 = $self->getViewHelper('$viewHelper119', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper119->setArguments($arguments117);
$viewHelper119->setRenderingContext($renderingContext);
$viewHelper119->setRenderChildrenClosure($renderChildrenClosure118);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments115['options'] = $viewHelper119->initializeArgumentsAndRender();
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments120 = array();
$arguments120['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'applicationCase', $renderingContext);
$arguments120['index'] = $currentVariableContainer->getOrNull('i');
$arguments120['sub'] = 'rating';
$arguments120['additionalAttributes'] = NULL;
$arguments120['data'] = NULL;
$renderChildrenClosure121 = function() {return NULL;};
$viewHelper122 = $self->getViewHelper('$viewHelper122', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper122->setArguments($arguments120);
$viewHelper122->setRenderingContext($renderingContext);
$viewHelper122->setRenderChildrenClosure($renderChildrenClosure121);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments115['value'] = $viewHelper122->initializeArgumentsAndRender();
$arguments115['additionalAttributes'] = NULL;
$arguments115['data'] = NULL;
$arguments115['name'] = NULL;
$arguments115['dir'] = NULL;
$arguments115['id'] = NULL;
$arguments115['lang'] = NULL;
$arguments115['style'] = NULL;
$arguments115['title'] = NULL;
$arguments115['accesskey'] = NULL;
$arguments115['tabindex'] = NULL;
$arguments115['onclick'] = NULL;
$arguments115['size'] = NULL;
$arguments115['disabled'] = NULL;
$arguments115['optionValueField'] = NULL;
$arguments115['optionLabelField'] = NULL;
$arguments115['sortByOptionLabel'] = false;
$arguments115['selectAllByDefault'] = false;
$arguments115['errorClass'] = 'f3-form-error';
$arguments115['prependOptionLabel'] = NULL;
$arguments115['prependOptionValue'] = NULL;
$arguments115['multiple'] = false;
$renderChildrenClosure123 = function() {return NULL;};
$viewHelper124 = $self->getViewHelper('$viewHelper124', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper124->setArguments($arguments115);
$viewHelper124->setRenderingContext($renderingContext);
$viewHelper124->setRenderChildrenClosure($renderChildrenClosure123);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output107 .= $viewHelper124->initializeArgumentsAndRender();

$output107 .= '
                            </div>
                            <div class="col-sm-2">
                                <label>Bewertungsstatus:</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments125 = array();
$output126 = '';

$output126 .= 'applicationCase.';

$output126 .= $currentVariableContainer->getOrNull('i');

$output126 .= '.status';
$arguments125['property'] = $output126;
$arguments125['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments127 = array();
$arguments127['property'] = 'eignungsprofilstatus';
$arguments127['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Eignungsprofil';
$renderChildrenClosure128 = function() {return NULL;};
$viewHelper129 = $self->getViewHelper('$viewHelper129', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper129->setArguments($arguments127);
$viewHelper129->setRenderingContext($renderingContext);
$viewHelper129->setRenderChildrenClosure($renderChildrenClosure128);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments125['options'] = $viewHelper129->initializeArgumentsAndRender();
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments130 = array();
$arguments130['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'applicationCase', $renderingContext);
$arguments130['index'] = $currentVariableContainer->getOrNull('i');
$arguments130['sub'] = 'status';
$arguments130['additionalAttributes'] = NULL;
$arguments130['data'] = NULL;
$renderChildrenClosure131 = function() {return NULL;};
$viewHelper132 = $self->getViewHelper('$viewHelper132', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper132->setArguments($arguments130);
$viewHelper132->setRenderingContext($renderingContext);
$viewHelper132->setRenderChildrenClosure($renderChildrenClosure131);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments125['value'] = $viewHelper132->initializeArgumentsAndRender();
$arguments125['additionalAttributes'] = NULL;
$arguments125['data'] = NULL;
$arguments125['name'] = NULL;
$arguments125['dir'] = NULL;
$arguments125['id'] = NULL;
$arguments125['lang'] = NULL;
$arguments125['style'] = NULL;
$arguments125['title'] = NULL;
$arguments125['accesskey'] = NULL;
$arguments125['tabindex'] = NULL;
$arguments125['onclick'] = NULL;
$arguments125['size'] = NULL;
$arguments125['disabled'] = NULL;
$arguments125['optionValueField'] = NULL;
$arguments125['optionLabelField'] = NULL;
$arguments125['sortByOptionLabel'] = false;
$arguments125['selectAllByDefault'] = false;
$arguments125['errorClass'] = 'f3-form-error';
$arguments125['prependOptionLabel'] = NULL;
$arguments125['prependOptionValue'] = NULL;
$arguments125['multiple'] = false;
$renderChildrenClosure133 = function() {return NULL;};
$viewHelper134 = $self->getViewHelper('$viewHelper134', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper134->setArguments($arguments125);
$viewHelper134->setRenderingContext($renderingContext);
$viewHelper134->setRenderChildrenClosure($renderChildrenClosure133);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output107 .= $viewHelper134->initializeArgumentsAndRender();

$output107 .= '
                            </div>
                            <div class="col-sm-2">
                                <label>Nur untersuchte?</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments135 = array();
$output136 = '';

$output136 .= 'applicationCase.';

$output136 .= $currentVariableContainer->getOrNull('i');

$output136 .= '.includeUnvalidated';
$arguments135['property'] = $output136;
$arguments135['options'] = $currentVariableContainer->getOrNull('booleanValues');
$arguments135['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments137 = array();
$arguments137['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'applicationCase', $renderingContext);
$arguments137['index'] = $currentVariableContainer->getOrNull('i');
$arguments137['sub'] = 'includeUnvalidated';
$arguments137['additionalAttributes'] = NULL;
$arguments137['data'] = NULL;
$renderChildrenClosure138 = function() {return NULL;};
$viewHelper139 = $self->getViewHelper('$viewHelper139', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper139->setArguments($arguments137);
$viewHelper139->setRenderingContext($renderingContext);
$viewHelper139->setRenderChildrenClosure($renderChildrenClosure138);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments135['value'] = $viewHelper139->initializeArgumentsAndRender();
$arguments135['additionalAttributes'] = NULL;
$arguments135['data'] = NULL;
$arguments135['name'] = NULL;
$arguments135['dir'] = NULL;
$arguments135['id'] = NULL;
$arguments135['lang'] = NULL;
$arguments135['style'] = NULL;
$arguments135['title'] = NULL;
$arguments135['accesskey'] = NULL;
$arguments135['tabindex'] = NULL;
$arguments135['onclick'] = NULL;
$arguments135['size'] = NULL;
$arguments135['disabled'] = NULL;
$arguments135['optionValueField'] = NULL;
$arguments135['optionLabelField'] = NULL;
$arguments135['sortByOptionLabel'] = false;
$arguments135['selectAllByDefault'] = false;
$arguments135['errorClass'] = 'f3-form-error';
$arguments135['prependOptionLabel'] = NULL;
$arguments135['prependOptionValue'] = NULL;
$arguments135['multiple'] = false;
$renderChildrenClosure140 = function() {return NULL;};
$viewHelper141 = $self->getViewHelper('$viewHelper141', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper141->setArguments($arguments135);
$viewHelper141->setRenderingContext($renderingContext);
$viewHelper141->setRenderChildrenClosure($renderChildrenClosure140);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output107 .= $viewHelper141->initializeArgumentsAndRender();

$output107 .= '
                            </div>
                        </div>
                    ';
return $output107;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output3 .= '
                </div>
            </div>
            <div id="menu3" class="tab-pane fade">
                <div class="padding">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments142 = array();
$arguments142['each'] = $currentVariableContainer->getOrNull('maxObjectives');
$arguments142['as'] = 'obj';
$arguments142['key'] = 'i';
$arguments142['reverse'] = false;
$arguments142['iteration'] = NULL;
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output144 = '';

$output144 .= '
                        <div class="row form-group">
                            <div class="col-sm-8">
                                <label>Zielparameter:</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments145 = array();
$output146 = '';

$output146 .= 'objective.';

$output146 .= $currentVariableContainer->getOrNull('i');

$output146 .= '.parameter';
$arguments145['property'] = $output146;
$arguments145['options'] = $currentVariableContainer->getOrNull('objectives');
$arguments145['class'] = 'form-control';
$arguments145['optionValueField'] = 'uid';
$arguments145['optionLabelField'] = 'parametername';
// Rendering Boolean node
$arguments145['sortByOptionLabel'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments145['prependOptionLabel'] = 'Ignorieren';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments147 = array();
$arguments147['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'objective', $renderingContext);
$arguments147['index'] = $currentVariableContainer->getOrNull('i');
$arguments147['sub'] = 'parameter';
$arguments147['additionalAttributes'] = NULL;
$arguments147['data'] = NULL;
$renderChildrenClosure148 = function() {return NULL;};
$viewHelper149 = $self->getViewHelper('$viewHelper149', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper149->setArguments($arguments147);
$viewHelper149->setRenderingContext($renderingContext);
$viewHelper149->setRenderChildrenClosure($renderChildrenClosure148);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments145['value'] = $viewHelper149->initializeArgumentsAndRender();
$arguments145['additionalAttributes'] = NULL;
$arguments145['data'] = NULL;
$arguments145['name'] = NULL;
$arguments145['dir'] = NULL;
$arguments145['id'] = NULL;
$arguments145['lang'] = NULL;
$arguments145['style'] = NULL;
$arguments145['title'] = NULL;
$arguments145['accesskey'] = NULL;
$arguments145['tabindex'] = NULL;
$arguments145['onclick'] = NULL;
$arguments145['size'] = NULL;
$arguments145['disabled'] = NULL;
$arguments145['selectAllByDefault'] = false;
$arguments145['errorClass'] = 'f3-form-error';
$arguments145['prependOptionValue'] = NULL;
$arguments145['multiple'] = false;
$renderChildrenClosure150 = function() {return NULL;};
$viewHelper151 = $self->getViewHelper('$viewHelper151', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper151->setArguments($arguments145);
$viewHelper151->setRenderingContext($renderingContext);
$viewHelper151->setRenderChildrenClosure($renderChildrenClosure150);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output144 .= $viewHelper151->initializeArgumentsAndRender();

$output144 .= '   
                            </div>
                            <div class="col-sm-2">
                                <label>Untergrenze:</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments152 = array();
$output153 = '';

$output153 .= 'objective.';

$output153 .= $currentVariableContainer->getOrNull('i');

$output153 .= '.from';
$arguments152['property'] = $output153;
$arguments152['class'] = 'form-control';
$arguments152['placeholder'] = 'Von';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments154 = array();
$arguments154['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'objective', $renderingContext);
$arguments154['index'] = $currentVariableContainer->getOrNull('i');
$arguments154['sub'] = 'from';
$arguments154['additionalAttributes'] = NULL;
$arguments154['data'] = NULL;
$renderChildrenClosure155 = function() {return NULL;};
$viewHelper156 = $self->getViewHelper('$viewHelper156', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper156->setArguments($arguments154);
$viewHelper156->setRenderingContext($renderingContext);
$viewHelper156->setRenderChildrenClosure($renderChildrenClosure155);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments152['value'] = $viewHelper156->initializeArgumentsAndRender();
$arguments152['additionalAttributes'] = NULL;
$arguments152['data'] = NULL;
$arguments152['required'] = false;
$arguments152['type'] = 'text';
$arguments152['name'] = NULL;
$arguments152['autofocus'] = NULL;
$arguments152['disabled'] = NULL;
$arguments152['maxlength'] = NULL;
$arguments152['readonly'] = NULL;
$arguments152['size'] = NULL;
$arguments152['pattern'] = NULL;
$arguments152['errorClass'] = 'f3-form-error';
$arguments152['dir'] = NULL;
$arguments152['id'] = NULL;
$arguments152['lang'] = NULL;
$arguments152['style'] = NULL;
$arguments152['title'] = NULL;
$arguments152['accesskey'] = NULL;
$arguments152['tabindex'] = NULL;
$arguments152['onclick'] = NULL;
$renderChildrenClosure157 = function() {return NULL;};
$viewHelper158 = $self->getViewHelper('$viewHelper158', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper158->setArguments($arguments152);
$viewHelper158->setRenderingContext($renderingContext);
$viewHelper158->setRenderChildrenClosure($renderChildrenClosure157);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output144 .= $viewHelper158->initializeArgumentsAndRender();

$output144 .= '
                            </div>
                            <div class="col-sm-2">
                                <label>Obergrenze:</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments159 = array();
$output160 = '';

$output160 .= 'objective.';

$output160 .= $currentVariableContainer->getOrNull('i');

$output160 .= '.to';
$arguments159['property'] = $output160;
$arguments159['class'] = 'form-control';
$arguments159['placeholder'] = 'Bis';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments161 = array();
$arguments161['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'objective', $renderingContext);
$arguments161['index'] = $currentVariableContainer->getOrNull('i');
$arguments161['sub'] = 'to';
$arguments161['additionalAttributes'] = NULL;
$arguments161['data'] = NULL;
$renderChildrenClosure162 = function() {return NULL;};
$viewHelper163 = $self->getViewHelper('$viewHelper163', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper163->setArguments($arguments161);
$viewHelper163->setRenderingContext($renderingContext);
$viewHelper163->setRenderChildrenClosure($renderChildrenClosure162);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments159['value'] = $viewHelper163->initializeArgumentsAndRender();
$arguments159['additionalAttributes'] = NULL;
$arguments159['data'] = NULL;
$arguments159['required'] = false;
$arguments159['type'] = 'text';
$arguments159['name'] = NULL;
$arguments159['autofocus'] = NULL;
$arguments159['disabled'] = NULL;
$arguments159['maxlength'] = NULL;
$arguments159['readonly'] = NULL;
$arguments159['size'] = NULL;
$arguments159['pattern'] = NULL;
$arguments159['errorClass'] = 'f3-form-error';
$arguments159['dir'] = NULL;
$arguments159['id'] = NULL;
$arguments159['lang'] = NULL;
$arguments159['style'] = NULL;
$arguments159['title'] = NULL;
$arguments159['accesskey'] = NULL;
$arguments159['tabindex'] = NULL;
$arguments159['onclick'] = NULL;
$renderChildrenClosure164 = function() {return NULL;};
$viewHelper165 = $self->getViewHelper('$viewHelper165', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper165->setArguments($arguments159);
$viewHelper165->setRenderingContext($renderingContext);
$viewHelper165->setRenderChildrenClosure($renderChildrenClosure164);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output144 .= $viewHelper165->initializeArgumentsAndRender();

$output144 .= '
                            </div>
                        </div>
                    ';
return $output144;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output3 .= '
                </div>
            </div>
        </div>
        <div class="tab-footer-submit">
            <div class="row">
                <div class="col-sm-6"> 
                    <div class="padding">
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments166 = array();
$arguments166['action'] = 'index';
$arguments166['arguments'] = array (
);
$arguments166['controller'] = NULL;
$arguments166['extensionName'] = NULL;
$arguments166['pluginName'] = NULL;
$arguments166['pageUid'] = NULL;
$arguments166['pageType'] = 0;
$arguments166['noCache'] = false;
$arguments166['noCacheHash'] = false;
$arguments166['section'] = '';
$arguments166['format'] = '';
$arguments166['linkAccessRestrictedPages'] = false;
$arguments166['additionalParams'] = array (
);
$arguments166['absolute'] = false;
$arguments166['addQueryString'] = false;
$arguments166['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments166['addQueryStringMethod'] = NULL;
$renderChildrenClosure167 = function() {return NULL;};
$viewHelper168 = $self->getViewHelper('$viewHelper168', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper168->setArguments($arguments166);
$viewHelper168->setRenderingContext($renderingContext);
$viewHelper168->setRenderChildrenClosure($renderChildrenClosure167);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output3 .= $viewHelper168->initializeArgumentsAndRender();

$output3 .= '" class="btn btn-info">Filter zur&uuml;cksetzen</a>
                    </div> 
                </div> 
                <div class="col-sm-6"> 
                    <div class="right padding">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments169 = array();
$arguments169['value'] = 'Anzeigen';
$arguments169['id'] = 'summary-submit';
$arguments169['class'] = 'btn btn-primary';
$arguments169['additionalAttributes'] = NULL;
$arguments169['data'] = NULL;
$arguments169['name'] = NULL;
$arguments169['property'] = NULL;
$arguments169['disabled'] = NULL;
$arguments169['dir'] = NULL;
$arguments169['lang'] = NULL;
$arguments169['style'] = NULL;
$arguments169['title'] = NULL;
$arguments169['accesskey'] = NULL;
$arguments169['tabindex'] = NULL;
$arguments169['onclick'] = NULL;
$renderChildrenClosure170 = function() {return NULL;};
$viewHelper171 = $self->getViewHelper('$viewHelper171', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper171->setArguments($arguments169);
$viewHelper171->setRenderingContext($renderingContext);
$viewHelper171->setRenderChildrenClosure($renderChildrenClosure170);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output3 .= $viewHelper171->initializeArgumentsAndRender();

$output3 .= '
                    </div>
                </div>  
            </div>
        </div>
    ';
return $output3;
};
$viewHelper172 = $self->getViewHelper('$viewHelper172', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper172->setArguments($arguments1);
$viewHelper172->setRenderingContext($renderingContext);
$viewHelper172->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper172->initializeArgumentsAndRender();

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments173 = array();
// Rendering Boolean node
$arguments173['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('results'));
$arguments173['then'] = NULL;
$arguments173['else'] = NULL;
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output175 = '';

$output175 .= '
        <div class="page-header">
            <h2>
                Ergebnisliste <span class="label label-primary">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments176 = array();
$arguments176['subject'] = NULL;
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('results');
};

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output175 .= ' Treffer</span>
            </h2>
        </div>
        <div class="table-fit">
            <table class="table table-striped table-hover">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments178 = array();
$arguments178['each'] = $currentVariableContainer->getOrNull('results');
$arguments178['as'] = 'solution';
$arguments178['key'] = '';
$arguments178['reverse'] = false;
$arguments178['iteration'] = NULL;
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output180 = '';

$output180 .= '
                    <tr>
                        <td style="width: 10%">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments181 = array();
$arguments181['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'teilprojektnummer', $renderingContext);
$arguments181['keepQuotes'] = false;
$arguments181['encoding'] = NULL;
$arguments181['doubleEncode'] = true;
$renderChildrenClosure182 = function() {return NULL;};
$value183 = ($arguments181['value'] !== NULL ? $arguments181['value'] : $renderChildrenClosure182());

$output180 .= (!is_string($value183) ? $value183 : htmlspecialchars($value183, ($arguments181['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments181['encoding'] !== NULL ? $arguments181['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments181['doubleEncode']));

$output180 .= '    
                        </td>
                        <td>
                            ';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper
$arguments184 = array();
$output185 = '';

$output185 .= 'edit[tx_wisedocasysdomaindesigner_domain_model_loesung][';

$output185 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'uid', $renderingContext);

$output185 .= ']=edit';
$arguments184['parameters'] = $output185;
$arguments184['additionalAttributes'] = NULL;
$arguments184['data'] = NULL;
$arguments184['returnUrl'] = '';
$arguments184['class'] = NULL;
$arguments184['dir'] = NULL;
$arguments184['id'] = NULL;
$arguments184['lang'] = NULL;
$arguments184['style'] = NULL;
$arguments184['title'] = NULL;
$arguments184['accesskey'] = NULL;
$arguments184['tabindex'] = NULL;
$arguments184['onclick'] = NULL;
$arguments184['name'] = NULL;
$arguments184['target'] = NULL;
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output187 = '';

$output187 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments188 = array();
$arguments188['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'loesungsbezeichnung', $renderingContext);
$arguments188['keepQuotes'] = false;
$arguments188['encoding'] = NULL;
$arguments188['doubleEncode'] = true;
$renderChildrenClosure189 = function() {return NULL;};
$value190 = ($arguments188['value'] !== NULL ? $arguments188['value'] : $renderChildrenClosure189());

$output187 .= (!is_string($value190) ? $value190 : htmlspecialchars($value190, ($arguments188['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments188['encoding'] !== NULL ? $arguments188['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments188['doubleEncode']));

$output187 .= '
                            ';
return $output187;
};
$viewHelper191 = $self->getViewHelper('$viewHelper191', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper');
$viewHelper191->setArguments($arguments184);
$viewHelper191->setRenderingContext($renderingContext);
$viewHelper191->setRenderChildrenClosure($renderChildrenClosure186);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper

$output180 .= $viewHelper191->initializeArgumentsAndRender();

$output180 .= '
                        </td>
                    </tr>
                ';
return $output180;
};

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output175 .= '
            </table>
        </div>
    ';
return $output175;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

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

$output192 = '';

$output192 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments193 = array();
$arguments193['name'] = 'Filter';
$renderChildrenClosure194 = function() {return NULL;};
$viewHelper195 = $self->getViewHelper('$viewHelper195', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper195->setArguments($arguments193);
$viewHelper195->setRenderingContext($renderingContext);
$viewHelper195->setRenderChildrenClosure($renderChildrenClosure194);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output192 .= $viewHelper195->initializeArgumentsAndRender();

$output192 .= ' 
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments196 = array();
$arguments196['name'] = 'content';
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output198 = '';

$output198 .= '
    <h1>Filter</h1>  

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments199 = array();
$arguments199['name'] = 'filter-submit';
$arguments199['action'] = 'index';
$arguments199['method'] = 'post';
$arguments199['style'] = 'width: 100%;';
$arguments199['class'] = 'form-horizontal hidden-print';
$arguments199['additionalAttributes'] = NULL;
$arguments199['data'] = NULL;
$arguments199['arguments'] = array (
);
$arguments199['controller'] = NULL;
$arguments199['extensionName'] = NULL;
$arguments199['pluginName'] = NULL;
$arguments199['pageUid'] = NULL;
$arguments199['object'] = NULL;
$arguments199['pageType'] = 0;
$arguments199['noCache'] = false;
$arguments199['noCacheHash'] = false;
$arguments199['section'] = '';
$arguments199['format'] = '';
$arguments199['additionalParams'] = array (
);
$arguments199['absolute'] = false;
$arguments199['addQueryString'] = false;
$arguments199['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments199['fieldNamePrefix'] = NULL;
$arguments199['actionUri'] = NULL;
$arguments199['objectName'] = NULL;
$arguments199['hiddenFieldClassName'] = NULL;
$arguments199['addQueryStringMethod'] = '';
$arguments199['enctype'] = NULL;
$arguments199['onreset'] = NULL;
$arguments199['onsubmit'] = NULL;
$arguments199['target'] = NULL;
$arguments199['dir'] = NULL;
$arguments199['id'] = NULL;
$arguments199['lang'] = NULL;
$arguments199['title'] = NULL;
$arguments199['accesskey'] = NULL;
$arguments199['tabindex'] = NULL;
$arguments199['onclick'] = NULL;
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output201 = '';

$output201 .= '
        <ul class="nav nav-tabs">
            <li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments202 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments203 = array();
$arguments203['value'] = $currentVariableContainer->getOrNull('results');
$arguments203['keepQuotes'] = false;
$arguments203['encoding'] = NULL;
$arguments203['doubleEncode'] = true;
$renderChildrenClosure204 = function() {return NULL;};
$value205 = ($arguments203['value'] !== NULL ? $arguments203['value'] : $renderChildrenClosure204());
$arguments202['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value205) ? $value205 : htmlspecialchars($value205, ($arguments203['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments203['encoding'] !== NULL ? $arguments203['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments203['doubleEncode'])));
$arguments202['then'] = '';
$arguments202['else'] = 'active';
$renderChildrenClosure206 = function() {return NULL;};

$output201 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure206, $renderingContext);

$output201 .= '">
                <a data-toggle="tab" href="#menu1">Eigenschaften</a>
            </li>
            <li>
                <a data-toggle="tab" href="#menu2">Anwendungsf&auml;lle</a>
            </li>
            <li>
                <a data-toggle="tab" href="#menu3">Optimierungsziele</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="menu1" class="tab-pane fade in ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments207 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments208 = array();
$arguments208['value'] = $currentVariableContainer->getOrNull('results');
$arguments208['keepQuotes'] = false;
$arguments208['encoding'] = NULL;
$arguments208['doubleEncode'] = true;
$renderChildrenClosure209 = function() {return NULL;};
$value210 = ($arguments208['value'] !== NULL ? $arguments208['value'] : $renderChildrenClosure209());
$arguments207['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value210) ? $value210 : htmlspecialchars($value210, ($arguments208['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments208['encoding'] !== NULL ? $arguments208['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments208['doubleEncode'])));
$arguments207['then'] = '';
$arguments207['else'] = 'active';
$renderChildrenClosure211 = function() {return NULL;};

$output201 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments207, $renderChildrenClosure211, $renderingContext);

$output201 .= '">
                <div class="padding">
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            L&ouml;sungsart:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments212 = array();
$arguments212['property'] = 'operator.kind';
$arguments212['options'] = $currentVariableContainer->getOrNull('operators');
$arguments212['class'] = 'form-control';
$arguments212['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.kind', $renderingContext);
$arguments212['additionalAttributes'] = NULL;
$arguments212['data'] = NULL;
$arguments212['name'] = NULL;
$arguments212['dir'] = NULL;
$arguments212['id'] = NULL;
$arguments212['lang'] = NULL;
$arguments212['style'] = NULL;
$arguments212['title'] = NULL;
$arguments212['accesskey'] = NULL;
$arguments212['tabindex'] = NULL;
$arguments212['onclick'] = NULL;
$arguments212['size'] = NULL;
$arguments212['disabled'] = NULL;
$arguments212['optionValueField'] = NULL;
$arguments212['optionLabelField'] = NULL;
$arguments212['sortByOptionLabel'] = false;
$arguments212['selectAllByDefault'] = false;
$arguments212['errorClass'] = 'f3-form-error';
$arguments212['prependOptionLabel'] = NULL;
$arguments212['prependOptionValue'] = NULL;
$arguments212['multiple'] = false;
$renderChildrenClosure213 = function() {return NULL;};
$viewHelper214 = $self->getViewHelper('$viewHelper214', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper214->setArguments($arguments212);
$viewHelper214->setRenderingContext($renderingContext);
$viewHelper214->setRenderChildrenClosure($renderChildrenClosure213);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output201 .= $viewHelper214->initializeArgumentsAndRender();

$output201 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments215 = array();
$arguments215['property'] = 'kind';
$arguments215['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments216 = array();
$arguments216['property'] = 'loesungsart';
$arguments216['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure217 = function() {return NULL;};
$viewHelper218 = $self->getViewHelper('$viewHelper218', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper218->setArguments($arguments216);
$viewHelper218->setRenderingContext($renderingContext);
$viewHelper218->setRenderChildrenClosure($renderChildrenClosure217);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments215['options'] = $viewHelper218->initializeArgumentsAndRender();
$arguments215['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'kind', $renderingContext);
$arguments215['additionalAttributes'] = NULL;
$arguments215['data'] = NULL;
$arguments215['name'] = NULL;
$arguments215['dir'] = NULL;
$arguments215['id'] = NULL;
$arguments215['lang'] = NULL;
$arguments215['style'] = NULL;
$arguments215['title'] = NULL;
$arguments215['accesskey'] = NULL;
$arguments215['tabindex'] = NULL;
$arguments215['onclick'] = NULL;
$arguments215['size'] = NULL;
$arguments215['disabled'] = NULL;
$arguments215['optionValueField'] = NULL;
$arguments215['optionLabelField'] = NULL;
$arguments215['sortByOptionLabel'] = false;
$arguments215['selectAllByDefault'] = false;
$arguments215['errorClass'] = 'f3-form-error';
$arguments215['prependOptionLabel'] = NULL;
$arguments215['prependOptionValue'] = NULL;
$arguments215['multiple'] = false;
$renderChildrenClosure219 = function() {return NULL;};
$viewHelper220 = $self->getViewHelper('$viewHelper220', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper220->setArguments($arguments215);
$viewHelper220->setRenderingContext($renderingContext);
$viewHelper220->setRenderChildrenClosure($renderChildrenClosure219);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output201 .= $viewHelper220->initializeArgumentsAndRender();

$output201 .= '
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Bezeichnung:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments221 = array();
$arguments221['property'] = 'operator.name';
$arguments221['options'] = $currentVariableContainer->getOrNull('operators');
$arguments221['class'] = 'form-control';
$arguments221['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.name', $renderingContext);
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
$renderChildrenClosure222 = function() {return NULL;};
$viewHelper223 = $self->getViewHelper('$viewHelper223', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper223->setArguments($arguments221);
$viewHelper223->setRenderingContext($renderingContext);
$viewHelper223->setRenderChildrenClosure($renderChildrenClosure222);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output201 .= $viewHelper223->initializeArgumentsAndRender();

$output201 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments224 = array();
$arguments224['property'] = 'name';
$arguments224['class'] = 'form-control';
$arguments224['placeholder'] = 'Bezeichnung';
$arguments224['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'name', $renderingContext);
$arguments224['additionalAttributes'] = NULL;
$arguments224['data'] = NULL;
$arguments224['required'] = false;
$arguments224['type'] = 'text';
$arguments224['name'] = NULL;
$arguments224['autofocus'] = NULL;
$arguments224['disabled'] = NULL;
$arguments224['maxlength'] = NULL;
$arguments224['readonly'] = NULL;
$arguments224['size'] = NULL;
$arguments224['pattern'] = NULL;
$arguments224['errorClass'] = 'f3-form-error';
$arguments224['dir'] = NULL;
$arguments224['id'] = NULL;
$arguments224['lang'] = NULL;
$arguments224['style'] = NULL;
$arguments224['title'] = NULL;
$arguments224['accesskey'] = NULL;
$arguments224['tabindex'] = NULL;
$arguments224['onclick'] = NULL;
$renderChildrenClosure225 = function() {return NULL;};
$viewHelper226 = $self->getViewHelper('$viewHelper226', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper226->setArguments($arguments224);
$viewHelper226->setRenderingContext($renderingContext);
$viewHelper226->setRenderChildrenClosure($renderChildrenClosure225);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output201 .= $viewHelper226->initializeArgumentsAndRender();

$output201 .= '    
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            L&ouml;sungsklasse:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments227 = array();
$arguments227['property'] = 'operator.class';
$arguments227['options'] = $currentVariableContainer->getOrNull('operators');
$arguments227['class'] = 'form-control';
$arguments227['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.class', $renderingContext);
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

$output201 .= $viewHelper229->initializeArgumentsAndRender();

$output201 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments230 = array();
$arguments230['property'] = 'class';
$arguments230['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments231 = array();
$arguments231['property'] = 'loesungsklasse';
$arguments231['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure232 = function() {return NULL;};
$viewHelper233 = $self->getViewHelper('$viewHelper233', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper233->setArguments($arguments231);
$viewHelper233->setRenderingContext($renderingContext);
$viewHelper233->setRenderChildrenClosure($renderChildrenClosure232);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments230['options'] = $viewHelper233->initializeArgumentsAndRender();
$arguments230['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'class', $renderingContext);
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

$output201 .= $viewHelper235->initializeArgumentsAndRender();

$output201 .= '
                        </div>
                    </div>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments236 = array();
$arguments236['each'] = $currentVariableContainer->getOrNull('maxDesigntypes');
$arguments236['as'] = 'dt';
$arguments236['key'] = 'i';
$arguments236['reverse'] = false;
$arguments236['iteration'] = NULL;
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output238 = '';

$output238 .= '
                        <div class="row form-group">
                            <label class="control-label col-sm-2">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments239 = array();
// Rendering Boolean node
$arguments239['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('i'), 0);
$arguments239['then'] = NULL;
$arguments239['else'] = NULL;
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    Gestaltungsart(en):
                                ';
};

$output238 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output238 .= '
                            </label>
                            <div class="col-sm-2">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments241 = array();
$output242 = '';

$output242 .= 'operator.designtype.';

$output242 .= $currentVariableContainer->getOrNull('i');
$arguments241['property'] = $output242;
$arguments241['options'] = $currentVariableContainer->getOrNull('operators');
$arguments241['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments243 = array();
$arguments243['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.designtype', $renderingContext);
$arguments243['index'] = $currentVariableContainer->getOrNull('i');
$arguments243['additionalAttributes'] = NULL;
$arguments243['data'] = NULL;
$arguments243['sub'] = NULL;
$renderChildrenClosure244 = function() {return NULL;};
$viewHelper245 = $self->getViewHelper('$viewHelper245', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper245->setArguments($arguments243);
$viewHelper245->setRenderingContext($renderingContext);
$viewHelper245->setRenderChildrenClosure($renderChildrenClosure244);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments241['value'] = $viewHelper245->initializeArgumentsAndRender();
$arguments241['additionalAttributes'] = NULL;
$arguments241['data'] = NULL;
$arguments241['name'] = NULL;
$arguments241['dir'] = NULL;
$arguments241['id'] = NULL;
$arguments241['lang'] = NULL;
$arguments241['style'] = NULL;
$arguments241['title'] = NULL;
$arguments241['accesskey'] = NULL;
$arguments241['tabindex'] = NULL;
$arguments241['onclick'] = NULL;
$arguments241['size'] = NULL;
$arguments241['disabled'] = NULL;
$arguments241['optionValueField'] = NULL;
$arguments241['optionLabelField'] = NULL;
$arguments241['sortByOptionLabel'] = false;
$arguments241['selectAllByDefault'] = false;
$arguments241['errorClass'] = 'f3-form-error';
$arguments241['prependOptionLabel'] = NULL;
$arguments241['prependOptionValue'] = NULL;
$arguments241['multiple'] = false;
$renderChildrenClosure246 = function() {return NULL;};
$viewHelper247 = $self->getViewHelper('$viewHelper247', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper247->setArguments($arguments241);
$viewHelper247->setRenderingContext($renderingContext);
$viewHelper247->setRenderChildrenClosure($renderChildrenClosure246);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output238 .= $viewHelper247->initializeArgumentsAndRender();

$output238 .= '
                            </div>
                            <div class="col-sm-8">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments248 = array();
$output249 = '';

$output249 .= 'designtype.';

$output249 .= $currentVariableContainer->getOrNull('i');
$arguments248['property'] = $output249;
$arguments248['options'] = $currentVariableContainer->getOrNull('designtypes');
$arguments248['class'] = 'form-control';
$arguments248['optionValueField'] = 'uid';
$arguments248['optionLabelField'] = 'bezeichnung';
// Rendering Boolean node
$arguments248['sortByOptionLabel'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments248['prependOptionLabel'] = 'Ignorieren';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments250 = array();
$arguments250['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'designtype', $renderingContext);
$arguments250['index'] = $currentVariableContainer->getOrNull('i');
$arguments250['additionalAttributes'] = NULL;
$arguments250['data'] = NULL;
$arguments250['sub'] = NULL;
$renderChildrenClosure251 = function() {return NULL;};
$viewHelper252 = $self->getViewHelper('$viewHelper252', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper252->setArguments($arguments250);
$viewHelper252->setRenderingContext($renderingContext);
$viewHelper252->setRenderChildrenClosure($renderChildrenClosure251);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments248['value'] = $viewHelper252->initializeArgumentsAndRender();
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
$arguments248['selectAllByDefault'] = false;
$arguments248['errorClass'] = 'f3-form-error';
$arguments248['prependOptionValue'] = NULL;
$arguments248['multiple'] = false;
$renderChildrenClosure253 = function() {return NULL;};
$viewHelper254 = $self->getViewHelper('$viewHelper254', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper254->setArguments($arguments248);
$viewHelper254->setRenderingContext($renderingContext);
$viewHelper254->setRenderChildrenClosure($renderChildrenClosure253);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output238 .= $viewHelper254->initializeArgumentsAndRender();

$output238 .= '
                            </div>
                        </div>
                    ';
return $output238;
};

$output201 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output201 .= '
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Phase:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments255 = array();
$arguments255['property'] = 'operator.phase';
$arguments255['options'] = $currentVariableContainer->getOrNull('operators');
$arguments255['class'] = 'form-control';
$arguments255['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.phase', $renderingContext);
$arguments255['additionalAttributes'] = NULL;
$arguments255['data'] = NULL;
$arguments255['name'] = NULL;
$arguments255['dir'] = NULL;
$arguments255['id'] = NULL;
$arguments255['lang'] = NULL;
$arguments255['style'] = NULL;
$arguments255['title'] = NULL;
$arguments255['accesskey'] = NULL;
$arguments255['tabindex'] = NULL;
$arguments255['onclick'] = NULL;
$arguments255['size'] = NULL;
$arguments255['disabled'] = NULL;
$arguments255['optionValueField'] = NULL;
$arguments255['optionLabelField'] = NULL;
$arguments255['sortByOptionLabel'] = false;
$arguments255['selectAllByDefault'] = false;
$arguments255['errorClass'] = 'f3-form-error';
$arguments255['prependOptionLabel'] = NULL;
$arguments255['prependOptionValue'] = NULL;
$arguments255['multiple'] = false;
$renderChildrenClosure256 = function() {return NULL;};
$viewHelper257 = $self->getViewHelper('$viewHelper257', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper257->setArguments($arguments255);
$viewHelper257->setRenderingContext($renderingContext);
$viewHelper257->setRenderChildrenClosure($renderChildrenClosure256);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output201 .= $viewHelper257->initializeArgumentsAndRender();

$output201 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments258 = array();
$arguments258['property'] = 'phase';
$arguments258['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments259 = array();
$arguments259['property'] = 'phaseDerThermischenWirkkette';
$arguments259['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure260 = function() {return NULL;};
$viewHelper261 = $self->getViewHelper('$viewHelper261', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper261->setArguments($arguments259);
$viewHelper261->setRenderingContext($renderingContext);
$viewHelper261->setRenderChildrenClosure($renderChildrenClosure260);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments258['options'] = $viewHelper261->initializeArgumentsAndRender();
$arguments258['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'phase', $renderingContext);
$arguments258['additionalAttributes'] = NULL;
$arguments258['data'] = NULL;
$arguments258['name'] = NULL;
$arguments258['dir'] = NULL;
$arguments258['id'] = NULL;
$arguments258['lang'] = NULL;
$arguments258['style'] = NULL;
$arguments258['title'] = NULL;
$arguments258['accesskey'] = NULL;
$arguments258['tabindex'] = NULL;
$arguments258['onclick'] = NULL;
$arguments258['size'] = NULL;
$arguments258['disabled'] = NULL;
$arguments258['optionValueField'] = NULL;
$arguments258['optionLabelField'] = NULL;
$arguments258['sortByOptionLabel'] = false;
$arguments258['selectAllByDefault'] = false;
$arguments258['errorClass'] = 'f3-form-error';
$arguments258['prependOptionLabel'] = NULL;
$arguments258['prependOptionValue'] = NULL;
$arguments258['multiple'] = false;
$renderChildrenClosure262 = function() {return NULL;};
$viewHelper263 = $self->getViewHelper('$viewHelper263', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper263->setArguments($arguments258);
$viewHelper263->setRenderingContext($renderingContext);
$viewHelper263->setRenderChildrenClosure($renderChildrenClosure262);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output201 .= $viewHelper263->initializeArgumentsAndRender();

$output201 .= '
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Physikalischer Effekt:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments264 = array();
$arguments264['property'] = 'operator.effect';
$arguments264['options'] = $currentVariableContainer->getOrNull('operators');
$arguments264['class'] = 'form-control';
$arguments264['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.effect', $renderingContext);
$arguments264['additionalAttributes'] = NULL;
$arguments264['data'] = NULL;
$arguments264['name'] = NULL;
$arguments264['dir'] = NULL;
$arguments264['id'] = NULL;
$arguments264['lang'] = NULL;
$arguments264['style'] = NULL;
$arguments264['title'] = NULL;
$arguments264['accesskey'] = NULL;
$arguments264['tabindex'] = NULL;
$arguments264['onclick'] = NULL;
$arguments264['size'] = NULL;
$arguments264['disabled'] = NULL;
$arguments264['optionValueField'] = NULL;
$arguments264['optionLabelField'] = NULL;
$arguments264['sortByOptionLabel'] = false;
$arguments264['selectAllByDefault'] = false;
$arguments264['errorClass'] = 'f3-form-error';
$arguments264['prependOptionLabel'] = NULL;
$arguments264['prependOptionValue'] = NULL;
$arguments264['multiple'] = false;
$renderChildrenClosure265 = function() {return NULL;};
$viewHelper266 = $self->getViewHelper('$viewHelper266', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper266->setArguments($arguments264);
$viewHelper266->setRenderingContext($renderingContext);
$viewHelper266->setRenderChildrenClosure($renderChildrenClosure265);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output201 .= $viewHelper266->initializeArgumentsAndRender();

$output201 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments267 = array();
$arguments267['property'] = 'effect';
$arguments267['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments268 = array();
$arguments268['property'] = 'physikalischerEffekt';
$arguments268['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure269 = function() {return NULL;};
$viewHelper270 = $self->getViewHelper('$viewHelper270', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper270->setArguments($arguments268);
$viewHelper270->setRenderingContext($renderingContext);
$viewHelper270->setRenderChildrenClosure($renderChildrenClosure269);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments267['options'] = $viewHelper270->initializeArgumentsAndRender();
$arguments267['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'effect', $renderingContext);
$arguments267['additionalAttributes'] = NULL;
$arguments267['data'] = NULL;
$arguments267['name'] = NULL;
$arguments267['dir'] = NULL;
$arguments267['id'] = NULL;
$arguments267['lang'] = NULL;
$arguments267['style'] = NULL;
$arguments267['title'] = NULL;
$arguments267['accesskey'] = NULL;
$arguments267['tabindex'] = NULL;
$arguments267['onclick'] = NULL;
$arguments267['size'] = NULL;
$arguments267['disabled'] = NULL;
$arguments267['optionValueField'] = NULL;
$arguments267['optionLabelField'] = NULL;
$arguments267['sortByOptionLabel'] = false;
$arguments267['selectAllByDefault'] = false;
$arguments267['errorClass'] = 'f3-form-error';
$arguments267['prependOptionLabel'] = NULL;
$arguments267['prependOptionValue'] = NULL;
$arguments267['multiple'] = false;
$renderChildrenClosure271 = function() {return NULL;};
$viewHelper272 = $self->getViewHelper('$viewHelper272', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper272->setArguments($arguments267);
$viewHelper272->setRenderingContext($renderingContext);
$viewHelper272->setRenderChildrenClosure($renderChildrenClosure271);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output201 .= $viewHelper272->initializeArgumentsAndRender();

$output201 .= '
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Betrifft Hersteller:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments273 = array();
$arguments273['property'] = 'operator.producer';
$arguments273['options'] = $currentVariableContainer->getOrNull('operators');
$arguments273['class'] = 'form-control';
$arguments273['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.producer', $renderingContext);
$arguments273['additionalAttributes'] = NULL;
$arguments273['data'] = NULL;
$arguments273['name'] = NULL;
$arguments273['dir'] = NULL;
$arguments273['id'] = NULL;
$arguments273['lang'] = NULL;
$arguments273['style'] = NULL;
$arguments273['title'] = NULL;
$arguments273['accesskey'] = NULL;
$arguments273['tabindex'] = NULL;
$arguments273['onclick'] = NULL;
$arguments273['size'] = NULL;
$arguments273['disabled'] = NULL;
$arguments273['optionValueField'] = NULL;
$arguments273['optionLabelField'] = NULL;
$arguments273['sortByOptionLabel'] = false;
$arguments273['selectAllByDefault'] = false;
$arguments273['errorClass'] = 'f3-form-error';
$arguments273['prependOptionLabel'] = NULL;
$arguments273['prependOptionValue'] = NULL;
$arguments273['multiple'] = false;
$renderChildrenClosure274 = function() {return NULL;};
$viewHelper275 = $self->getViewHelper('$viewHelper275', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper275->setArguments($arguments273);
$viewHelper275->setRenderingContext($renderingContext);
$viewHelper275->setRenderChildrenClosure($renderChildrenClosure274);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output201 .= $viewHelper275->initializeArgumentsAndRender();

$output201 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments276 = array();
$arguments276['property'] = 'producer';
$arguments276['options'] = $currentVariableContainer->getOrNull('booleanValues');
$arguments276['class'] = 'form-control';
$arguments276['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'producer', $renderingContext);
$arguments276['additionalAttributes'] = NULL;
$arguments276['data'] = NULL;
$arguments276['name'] = NULL;
$arguments276['dir'] = NULL;
$arguments276['id'] = NULL;
$arguments276['lang'] = NULL;
$arguments276['style'] = NULL;
$arguments276['title'] = NULL;
$arguments276['accesskey'] = NULL;
$arguments276['tabindex'] = NULL;
$arguments276['onclick'] = NULL;
$arguments276['size'] = NULL;
$arguments276['disabled'] = NULL;
$arguments276['optionValueField'] = NULL;
$arguments276['optionLabelField'] = NULL;
$arguments276['sortByOptionLabel'] = false;
$arguments276['selectAllByDefault'] = false;
$arguments276['errorClass'] = 'f3-form-error';
$arguments276['prependOptionLabel'] = NULL;
$arguments276['prependOptionValue'] = NULL;
$arguments276['multiple'] = false;
$renderChildrenClosure277 = function() {return NULL;};
$viewHelper278 = $self->getViewHelper('$viewHelper278', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper278->setArguments($arguments276);
$viewHelper278->setRenderingContext($renderingContext);
$viewHelper278->setRenderChildrenClosure($renderChildrenClosure277);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output201 .= $viewHelper278->initializeArgumentsAndRender();

$output201 .= '   
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Betrifft Betrieber:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments279 = array();
$arguments279['property'] = 'operator.consumer';
$arguments279['options'] = $currentVariableContainer->getOrNull('operators');
$arguments279['class'] = 'form-control';
$arguments279['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.consumer', $renderingContext);
$arguments279['additionalAttributes'] = NULL;
$arguments279['data'] = NULL;
$arguments279['name'] = NULL;
$arguments279['dir'] = NULL;
$arguments279['id'] = NULL;
$arguments279['lang'] = NULL;
$arguments279['style'] = NULL;
$arguments279['title'] = NULL;
$arguments279['accesskey'] = NULL;
$arguments279['tabindex'] = NULL;
$arguments279['onclick'] = NULL;
$arguments279['size'] = NULL;
$arguments279['disabled'] = NULL;
$arguments279['optionValueField'] = NULL;
$arguments279['optionLabelField'] = NULL;
$arguments279['sortByOptionLabel'] = false;
$arguments279['selectAllByDefault'] = false;
$arguments279['errorClass'] = 'f3-form-error';
$arguments279['prependOptionLabel'] = NULL;
$arguments279['prependOptionValue'] = NULL;
$arguments279['multiple'] = false;
$renderChildrenClosure280 = function() {return NULL;};
$viewHelper281 = $self->getViewHelper('$viewHelper281', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper281->setArguments($arguments279);
$viewHelper281->setRenderingContext($renderingContext);
$viewHelper281->setRenderChildrenClosure($renderChildrenClosure280);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output201 .= $viewHelper281->initializeArgumentsAndRender();

$output201 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments282 = array();
$arguments282['property'] = 'consumer';
$arguments282['options'] = $currentVariableContainer->getOrNull('booleanValues');
$arguments282['class'] = 'form-control';
$arguments282['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'consumer', $renderingContext);
$arguments282['additionalAttributes'] = NULL;
$arguments282['data'] = NULL;
$arguments282['name'] = NULL;
$arguments282['dir'] = NULL;
$arguments282['id'] = NULL;
$arguments282['lang'] = NULL;
$arguments282['style'] = NULL;
$arguments282['title'] = NULL;
$arguments282['accesskey'] = NULL;
$arguments282['tabindex'] = NULL;
$arguments282['onclick'] = NULL;
$arguments282['size'] = NULL;
$arguments282['disabled'] = NULL;
$arguments282['optionValueField'] = NULL;
$arguments282['optionLabelField'] = NULL;
$arguments282['sortByOptionLabel'] = false;
$arguments282['selectAllByDefault'] = false;
$arguments282['errorClass'] = 'f3-form-error';
$arguments282['prependOptionLabel'] = NULL;
$arguments282['prependOptionValue'] = NULL;
$arguments282['multiple'] = false;
$renderChildrenClosure283 = function() {return NULL;};
$viewHelper284 = $self->getViewHelper('$viewHelper284', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper284->setArguments($arguments282);
$viewHelper284->setRenderingContext($renderingContext);
$viewHelper284->setRenderChildrenClosure($renderChildrenClosure283);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output201 .= $viewHelper284->initializeArgumentsAndRender();

$output201 .= '   
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Invasivit&auml;tsgrad:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments285 = array();
$arguments285['property'] = 'operator.invasivity';
$arguments285['options'] = $currentVariableContainer->getOrNull('operators');
$arguments285['class'] = 'form-control';
$arguments285['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.invasivity', $renderingContext);
$arguments285['additionalAttributes'] = NULL;
$arguments285['data'] = NULL;
$arguments285['name'] = NULL;
$arguments285['dir'] = NULL;
$arguments285['id'] = NULL;
$arguments285['lang'] = NULL;
$arguments285['style'] = NULL;
$arguments285['title'] = NULL;
$arguments285['accesskey'] = NULL;
$arguments285['tabindex'] = NULL;
$arguments285['onclick'] = NULL;
$arguments285['size'] = NULL;
$arguments285['disabled'] = NULL;
$arguments285['optionValueField'] = NULL;
$arguments285['optionLabelField'] = NULL;
$arguments285['sortByOptionLabel'] = false;
$arguments285['selectAllByDefault'] = false;
$arguments285['errorClass'] = 'f3-form-error';
$arguments285['prependOptionLabel'] = NULL;
$arguments285['prependOptionValue'] = NULL;
$arguments285['multiple'] = false;
$renderChildrenClosure286 = function() {return NULL;};
$viewHelper287 = $self->getViewHelper('$viewHelper287', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper287->setArguments($arguments285);
$viewHelper287->setRenderingContext($renderingContext);
$viewHelper287->setRenderChildrenClosure($renderChildrenClosure286);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output201 .= $viewHelper287->initializeArgumentsAndRender();

$output201 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments288 = array();
$arguments288['property'] = 'invasivity';
$arguments288['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments289 = array();
$arguments289['property'] = 'invasivitaetsgrad';
$arguments289['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure290 = function() {return NULL;};
$viewHelper291 = $self->getViewHelper('$viewHelper291', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper291->setArguments($arguments289);
$viewHelper291->setRenderingContext($renderingContext);
$viewHelper291->setRenderChildrenClosure($renderChildrenClosure290);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments288['options'] = $viewHelper291->initializeArgumentsAndRender();
$arguments288['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'invasivity', $renderingContext);
$arguments288['additionalAttributes'] = NULL;
$arguments288['data'] = NULL;
$arguments288['name'] = NULL;
$arguments288['dir'] = NULL;
$arguments288['id'] = NULL;
$arguments288['lang'] = NULL;
$arguments288['style'] = NULL;
$arguments288['title'] = NULL;
$arguments288['accesskey'] = NULL;
$arguments288['tabindex'] = NULL;
$arguments288['onclick'] = NULL;
$arguments288['size'] = NULL;
$arguments288['disabled'] = NULL;
$arguments288['optionValueField'] = NULL;
$arguments288['optionLabelField'] = NULL;
$arguments288['sortByOptionLabel'] = false;
$arguments288['selectAllByDefault'] = false;
$arguments288['errorClass'] = 'f3-form-error';
$arguments288['prependOptionLabel'] = NULL;
$arguments288['prependOptionValue'] = NULL;
$arguments288['multiple'] = false;
$renderChildrenClosure292 = function() {return NULL;};
$viewHelper293 = $self->getViewHelper('$viewHelper293', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper293->setArguments($arguments288);
$viewHelper293->setRenderingContext($renderingContext);
$viewHelper293->setRenderChildrenClosure($renderChildrenClosure292);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output201 .= $viewHelper293->initializeArgumentsAndRender();

$output201 .= '
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2">
                            Wartungsintervall:
                        </label>
                        <div class="col-sm-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments294 = array();
$arguments294['property'] = 'operator.maintenance';
$arguments294['options'] = $currentVariableContainer->getOrNull('operators');
$arguments294['class'] = 'form-control';
$arguments294['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'operator.maintenance', $renderingContext);
$arguments294['additionalAttributes'] = NULL;
$arguments294['data'] = NULL;
$arguments294['name'] = NULL;
$arguments294['dir'] = NULL;
$arguments294['id'] = NULL;
$arguments294['lang'] = NULL;
$arguments294['style'] = NULL;
$arguments294['title'] = NULL;
$arguments294['accesskey'] = NULL;
$arguments294['tabindex'] = NULL;
$arguments294['onclick'] = NULL;
$arguments294['size'] = NULL;
$arguments294['disabled'] = NULL;
$arguments294['optionValueField'] = NULL;
$arguments294['optionLabelField'] = NULL;
$arguments294['sortByOptionLabel'] = false;
$arguments294['selectAllByDefault'] = false;
$arguments294['errorClass'] = 'f3-form-error';
$arguments294['prependOptionLabel'] = NULL;
$arguments294['prependOptionValue'] = NULL;
$arguments294['multiple'] = false;
$renderChildrenClosure295 = function() {return NULL;};
$viewHelper296 = $self->getViewHelper('$viewHelper296', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper296->setArguments($arguments294);
$viewHelper296->setRenderingContext($renderingContext);
$viewHelper296->setRenderChildrenClosure($renderChildrenClosure295);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output201 .= $viewHelper296->initializeArgumentsAndRender();

$output201 .= '
                        </div>
                        <div class="col-sm-8">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments297 = array();
$arguments297['property'] = 'maintenance';
$arguments297['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments298 = array();
$arguments298['property'] = 'invasivitaetsgrad';
$arguments298['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Loesung';
$renderChildrenClosure299 = function() {return NULL;};
$viewHelper300 = $self->getViewHelper('$viewHelper300', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper300->setArguments($arguments298);
$viewHelper300->setRenderingContext($renderingContext);
$viewHelper300->setRenderChildrenClosure($renderChildrenClosure299);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments297['options'] = $viewHelper300->initializeArgumentsAndRender();
$arguments297['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'maintenance', $renderingContext);
$arguments297['additionalAttributes'] = NULL;
$arguments297['data'] = NULL;
$arguments297['name'] = NULL;
$arguments297['dir'] = NULL;
$arguments297['id'] = NULL;
$arguments297['lang'] = NULL;
$arguments297['style'] = NULL;
$arguments297['title'] = NULL;
$arguments297['accesskey'] = NULL;
$arguments297['tabindex'] = NULL;
$arguments297['onclick'] = NULL;
$arguments297['size'] = NULL;
$arguments297['disabled'] = NULL;
$arguments297['optionValueField'] = NULL;
$arguments297['optionLabelField'] = NULL;
$arguments297['sortByOptionLabel'] = false;
$arguments297['selectAllByDefault'] = false;
$arguments297['errorClass'] = 'f3-form-error';
$arguments297['prependOptionLabel'] = NULL;
$arguments297['prependOptionValue'] = NULL;
$arguments297['multiple'] = false;
$renderChildrenClosure301 = function() {return NULL;};
$viewHelper302 = $self->getViewHelper('$viewHelper302', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper302->setArguments($arguments297);
$viewHelper302->setRenderingContext($renderingContext);
$viewHelper302->setRenderChildrenClosure($renderChildrenClosure301);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output201 .= $viewHelper302->initializeArgumentsAndRender();

$output201 .= '
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu2" class="tab-pane fade">
                <div class="padding">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments303 = array();
$arguments303['each'] = $currentVariableContainer->getOrNull('maxApplicationCases');
$arguments303['as'] = 'obj';
$arguments303['key'] = 'i';
$arguments303['reverse'] = false;
$arguments303['iteration'] = NULL;
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output305 = '';

$output305 .= '
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <label>Anwendungsfall:</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments306 = array();
$output307 = '';

$output307 .= 'applicationCase.';

$output307 .= $currentVariableContainer->getOrNull('i');

$output307 .= '.case';
$arguments306['property'] = $output307;
$arguments306['options'] = $currentVariableContainer->getOrNull('applicationCases');
$arguments306['class'] = 'form-control';
$arguments306['optionValueField'] = 'uid';
$arguments306['optionLabelField'] = 'bezeichnung';
// Rendering Boolean node
$arguments306['sortByOptionLabel'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments306['prependOptionLabel'] = 'Ignorieren';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments308 = array();
$arguments308['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'applicationCase', $renderingContext);
$arguments308['index'] = $currentVariableContainer->getOrNull('i');
$arguments308['sub'] = 'case';
$arguments308['additionalAttributes'] = NULL;
$arguments308['data'] = NULL;
$renderChildrenClosure309 = function() {return NULL;};
$viewHelper310 = $self->getViewHelper('$viewHelper310', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper310->setArguments($arguments308);
$viewHelper310->setRenderingContext($renderingContext);
$viewHelper310->setRenderChildrenClosure($renderChildrenClosure309);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments306['value'] = $viewHelper310->initializeArgumentsAndRender();
$arguments306['additionalAttributes'] = NULL;
$arguments306['data'] = NULL;
$arguments306['name'] = NULL;
$arguments306['dir'] = NULL;
$arguments306['id'] = NULL;
$arguments306['lang'] = NULL;
$arguments306['style'] = NULL;
$arguments306['title'] = NULL;
$arguments306['accesskey'] = NULL;
$arguments306['tabindex'] = NULL;
$arguments306['onclick'] = NULL;
$arguments306['size'] = NULL;
$arguments306['disabled'] = NULL;
$arguments306['selectAllByDefault'] = false;
$arguments306['errorClass'] = 'f3-form-error';
$arguments306['prependOptionValue'] = NULL;
$arguments306['multiple'] = false;
$renderChildrenClosure311 = function() {return NULL;};
$viewHelper312 = $self->getViewHelper('$viewHelper312', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper312->setArguments($arguments306);
$viewHelper312->setRenderingContext($renderingContext);
$viewHelper312->setRenderChildrenClosure($renderChildrenClosure311);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output305 .= $viewHelper312->initializeArgumentsAndRender();

$output305 .= '   
                            </div>
                            <div class="col-sm-2">
                                <label>Bewertung:</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments313 = array();
$output314 = '';

$output314 .= 'applicationCase.';

$output314 .= $currentVariableContainer->getOrNull('i');

$output314 .= '.rating';
$arguments313['property'] = $output314;
$arguments313['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments315 = array();
$arguments315['property'] = 'eignungsgrad';
$arguments315['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Eignungsprofil';
$renderChildrenClosure316 = function() {return NULL;};
$viewHelper317 = $self->getViewHelper('$viewHelper317', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper317->setArguments($arguments315);
$viewHelper317->setRenderingContext($renderingContext);
$viewHelper317->setRenderChildrenClosure($renderChildrenClosure316);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments313['options'] = $viewHelper317->initializeArgumentsAndRender();
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments318 = array();
$arguments318['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'applicationCase', $renderingContext);
$arguments318['index'] = $currentVariableContainer->getOrNull('i');
$arguments318['sub'] = 'rating';
$arguments318['additionalAttributes'] = NULL;
$arguments318['data'] = NULL;
$renderChildrenClosure319 = function() {return NULL;};
$viewHelper320 = $self->getViewHelper('$viewHelper320', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper320->setArguments($arguments318);
$viewHelper320->setRenderingContext($renderingContext);
$viewHelper320->setRenderChildrenClosure($renderChildrenClosure319);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments313['value'] = $viewHelper320->initializeArgumentsAndRender();
$arguments313['additionalAttributes'] = NULL;
$arguments313['data'] = NULL;
$arguments313['name'] = NULL;
$arguments313['dir'] = NULL;
$arguments313['id'] = NULL;
$arguments313['lang'] = NULL;
$arguments313['style'] = NULL;
$arguments313['title'] = NULL;
$arguments313['accesskey'] = NULL;
$arguments313['tabindex'] = NULL;
$arguments313['onclick'] = NULL;
$arguments313['size'] = NULL;
$arguments313['disabled'] = NULL;
$arguments313['optionValueField'] = NULL;
$arguments313['optionLabelField'] = NULL;
$arguments313['sortByOptionLabel'] = false;
$arguments313['selectAllByDefault'] = false;
$arguments313['errorClass'] = 'f3-form-error';
$arguments313['prependOptionLabel'] = NULL;
$arguments313['prependOptionValue'] = NULL;
$arguments313['multiple'] = false;
$renderChildrenClosure321 = function() {return NULL;};
$viewHelper322 = $self->getViewHelper('$viewHelper322', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper322->setArguments($arguments313);
$viewHelper322->setRenderingContext($renderingContext);
$viewHelper322->setRenderChildrenClosure($renderChildrenClosure321);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output305 .= $viewHelper322->initializeArgumentsAndRender();

$output305 .= '
                            </div>
                            <div class="col-sm-2">
                                <label>Bewertungsstatus:</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments323 = array();
$output324 = '';

$output324 .= 'applicationCase.';

$output324 .= $currentVariableContainer->getOrNull('i');

$output324 .= '.status';
$arguments323['property'] = $output324;
$arguments323['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments325 = array();
$arguments325['property'] = 'eignungsprofilstatus';
$arguments325['subject'] = 'Wise\\WiseDocasysDomainDesigner\\Domain\\Model\\Eignungsprofil';
$renderChildrenClosure326 = function() {return NULL;};
$viewHelper327 = $self->getViewHelper('$viewHelper327', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper');
$viewHelper327->setArguments($arguments325);
$viewHelper327->setRenderingContext($renderingContext);
$viewHelper327->setRenderChildrenClosure($renderChildrenClosure326);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\TcaOptionsViewHelper
$arguments323['options'] = $viewHelper327->initializeArgumentsAndRender();
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments328 = array();
$arguments328['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'applicationCase', $renderingContext);
$arguments328['index'] = $currentVariableContainer->getOrNull('i');
$arguments328['sub'] = 'status';
$arguments328['additionalAttributes'] = NULL;
$arguments328['data'] = NULL;
$renderChildrenClosure329 = function() {return NULL;};
$viewHelper330 = $self->getViewHelper('$viewHelper330', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper330->setArguments($arguments328);
$viewHelper330->setRenderingContext($renderingContext);
$viewHelper330->setRenderChildrenClosure($renderChildrenClosure329);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments323['value'] = $viewHelper330->initializeArgumentsAndRender();
$arguments323['additionalAttributes'] = NULL;
$arguments323['data'] = NULL;
$arguments323['name'] = NULL;
$arguments323['dir'] = NULL;
$arguments323['id'] = NULL;
$arguments323['lang'] = NULL;
$arguments323['style'] = NULL;
$arguments323['title'] = NULL;
$arguments323['accesskey'] = NULL;
$arguments323['tabindex'] = NULL;
$arguments323['onclick'] = NULL;
$arguments323['size'] = NULL;
$arguments323['disabled'] = NULL;
$arguments323['optionValueField'] = NULL;
$arguments323['optionLabelField'] = NULL;
$arguments323['sortByOptionLabel'] = false;
$arguments323['selectAllByDefault'] = false;
$arguments323['errorClass'] = 'f3-form-error';
$arguments323['prependOptionLabel'] = NULL;
$arguments323['prependOptionValue'] = NULL;
$arguments323['multiple'] = false;
$renderChildrenClosure331 = function() {return NULL;};
$viewHelper332 = $self->getViewHelper('$viewHelper332', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper332->setArguments($arguments323);
$viewHelper332->setRenderingContext($renderingContext);
$viewHelper332->setRenderChildrenClosure($renderChildrenClosure331);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output305 .= $viewHelper332->initializeArgumentsAndRender();

$output305 .= '
                            </div>
                            <div class="col-sm-2">
                                <label>Nur untersuchte?</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments333 = array();
$output334 = '';

$output334 .= 'applicationCase.';

$output334 .= $currentVariableContainer->getOrNull('i');

$output334 .= '.includeUnvalidated';
$arguments333['property'] = $output334;
$arguments333['options'] = $currentVariableContainer->getOrNull('booleanValues');
$arguments333['class'] = 'form-control';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments335 = array();
$arguments335['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'applicationCase', $renderingContext);
$arguments335['index'] = $currentVariableContainer->getOrNull('i');
$arguments335['sub'] = 'includeUnvalidated';
$arguments335['additionalAttributes'] = NULL;
$arguments335['data'] = NULL;
$renderChildrenClosure336 = function() {return NULL;};
$viewHelper337 = $self->getViewHelper('$viewHelper337', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper337->setArguments($arguments335);
$viewHelper337->setRenderingContext($renderingContext);
$viewHelper337->setRenderChildrenClosure($renderChildrenClosure336);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments333['value'] = $viewHelper337->initializeArgumentsAndRender();
$arguments333['additionalAttributes'] = NULL;
$arguments333['data'] = NULL;
$arguments333['name'] = NULL;
$arguments333['dir'] = NULL;
$arguments333['id'] = NULL;
$arguments333['lang'] = NULL;
$arguments333['style'] = NULL;
$arguments333['title'] = NULL;
$arguments333['accesskey'] = NULL;
$arguments333['tabindex'] = NULL;
$arguments333['onclick'] = NULL;
$arguments333['size'] = NULL;
$arguments333['disabled'] = NULL;
$arguments333['optionValueField'] = NULL;
$arguments333['optionLabelField'] = NULL;
$arguments333['sortByOptionLabel'] = false;
$arguments333['selectAllByDefault'] = false;
$arguments333['errorClass'] = 'f3-form-error';
$arguments333['prependOptionLabel'] = NULL;
$arguments333['prependOptionValue'] = NULL;
$arguments333['multiple'] = false;
$renderChildrenClosure338 = function() {return NULL;};
$viewHelper339 = $self->getViewHelper('$viewHelper339', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper339->setArguments($arguments333);
$viewHelper339->setRenderingContext($renderingContext);
$viewHelper339->setRenderChildrenClosure($renderChildrenClosure338);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output305 .= $viewHelper339->initializeArgumentsAndRender();

$output305 .= '
                            </div>
                        </div>
                    ';
return $output305;
};

$output201 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output201 .= '
                </div>
            </div>
            <div id="menu3" class="tab-pane fade">
                <div class="padding">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments340 = array();
$arguments340['each'] = $currentVariableContainer->getOrNull('maxObjectives');
$arguments340['as'] = 'obj';
$arguments340['key'] = 'i';
$arguments340['reverse'] = false;
$arguments340['iteration'] = NULL;
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output342 = '';

$output342 .= '
                        <div class="row form-group">
                            <div class="col-sm-8">
                                <label>Zielparameter:</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments343 = array();
$output344 = '';

$output344 .= 'objective.';

$output344 .= $currentVariableContainer->getOrNull('i');

$output344 .= '.parameter';
$arguments343['property'] = $output344;
$arguments343['options'] = $currentVariableContainer->getOrNull('objectives');
$arguments343['class'] = 'form-control';
$arguments343['optionValueField'] = 'uid';
$arguments343['optionLabelField'] = 'parametername';
// Rendering Boolean node
$arguments343['sortByOptionLabel'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments343['prependOptionLabel'] = 'Ignorieren';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments345 = array();
$arguments345['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'objective', $renderingContext);
$arguments345['index'] = $currentVariableContainer->getOrNull('i');
$arguments345['sub'] = 'parameter';
$arguments345['additionalAttributes'] = NULL;
$arguments345['data'] = NULL;
$renderChildrenClosure346 = function() {return NULL;};
$viewHelper347 = $self->getViewHelper('$viewHelper347', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper347->setArguments($arguments345);
$viewHelper347->setRenderingContext($renderingContext);
$viewHelper347->setRenderChildrenClosure($renderChildrenClosure346);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments343['value'] = $viewHelper347->initializeArgumentsAndRender();
$arguments343['additionalAttributes'] = NULL;
$arguments343['data'] = NULL;
$arguments343['name'] = NULL;
$arguments343['dir'] = NULL;
$arguments343['id'] = NULL;
$arguments343['lang'] = NULL;
$arguments343['style'] = NULL;
$arguments343['title'] = NULL;
$arguments343['accesskey'] = NULL;
$arguments343['tabindex'] = NULL;
$arguments343['onclick'] = NULL;
$arguments343['size'] = NULL;
$arguments343['disabled'] = NULL;
$arguments343['selectAllByDefault'] = false;
$arguments343['errorClass'] = 'f3-form-error';
$arguments343['prependOptionValue'] = NULL;
$arguments343['multiple'] = false;
$renderChildrenClosure348 = function() {return NULL;};
$viewHelper349 = $self->getViewHelper('$viewHelper349', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper349->setArguments($arguments343);
$viewHelper349->setRenderingContext($renderingContext);
$viewHelper349->setRenderChildrenClosure($renderChildrenClosure348);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output342 .= $viewHelper349->initializeArgumentsAndRender();

$output342 .= '   
                            </div>
                            <div class="col-sm-2">
                                <label>Untergrenze:</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments350 = array();
$output351 = '';

$output351 .= 'objective.';

$output351 .= $currentVariableContainer->getOrNull('i');

$output351 .= '.from';
$arguments350['property'] = $output351;
$arguments350['class'] = 'form-control';
$arguments350['placeholder'] = 'Von';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments352 = array();
$arguments352['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'objective', $renderingContext);
$arguments352['index'] = $currentVariableContainer->getOrNull('i');
$arguments352['sub'] = 'from';
$arguments352['additionalAttributes'] = NULL;
$arguments352['data'] = NULL;
$renderChildrenClosure353 = function() {return NULL;};
$viewHelper354 = $self->getViewHelper('$viewHelper354', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper354->setArguments($arguments352);
$viewHelper354->setRenderingContext($renderingContext);
$viewHelper354->setRenderChildrenClosure($renderChildrenClosure353);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments350['value'] = $viewHelper354->initializeArgumentsAndRender();
$arguments350['additionalAttributes'] = NULL;
$arguments350['data'] = NULL;
$arguments350['required'] = false;
$arguments350['type'] = 'text';
$arguments350['name'] = NULL;
$arguments350['autofocus'] = NULL;
$arguments350['disabled'] = NULL;
$arguments350['maxlength'] = NULL;
$arguments350['readonly'] = NULL;
$arguments350['size'] = NULL;
$arguments350['pattern'] = NULL;
$arguments350['errorClass'] = 'f3-form-error';
$arguments350['dir'] = NULL;
$arguments350['id'] = NULL;
$arguments350['lang'] = NULL;
$arguments350['style'] = NULL;
$arguments350['title'] = NULL;
$arguments350['accesskey'] = NULL;
$arguments350['tabindex'] = NULL;
$arguments350['onclick'] = NULL;
$renderChildrenClosure355 = function() {return NULL;};
$viewHelper356 = $self->getViewHelper('$viewHelper356', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper356->setArguments($arguments350);
$viewHelper356->setRenderingContext($renderingContext);
$viewHelper356->setRenderChildrenClosure($renderChildrenClosure355);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output342 .= $viewHelper356->initializeArgumentsAndRender();

$output342 .= '
                            </div>
                            <div class="col-sm-2">
                                <label>Obergrenze:</label>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments357 = array();
$output358 = '';

$output358 .= 'objective.';

$output358 .= $currentVariableContainer->getOrNull('i');

$output358 .= '.to';
$arguments357['property'] = $output358;
$arguments357['class'] = 'form-control';
$arguments357['placeholder'] = 'Bis';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments359 = array();
$arguments359['array'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('values'), 'objective', $renderingContext);
$arguments359['index'] = $currentVariableContainer->getOrNull('i');
$arguments359['sub'] = 'to';
$arguments359['additionalAttributes'] = NULL;
$arguments359['data'] = NULL;
$renderChildrenClosure360 = function() {return NULL;};
$viewHelper361 = $self->getViewHelper('$viewHelper361', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper');
$viewHelper361->setArguments($arguments359);
$viewHelper361->setRenderingContext($renderingContext);
$viewHelper361->setRenderChildrenClosure($renderChildrenClosure360);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\DynamicArrayIndexViewHelper
$arguments357['value'] = $viewHelper361->initializeArgumentsAndRender();
$arguments357['additionalAttributes'] = NULL;
$arguments357['data'] = NULL;
$arguments357['required'] = false;
$arguments357['type'] = 'text';
$arguments357['name'] = NULL;
$arguments357['autofocus'] = NULL;
$arguments357['disabled'] = NULL;
$arguments357['maxlength'] = NULL;
$arguments357['readonly'] = NULL;
$arguments357['size'] = NULL;
$arguments357['pattern'] = NULL;
$arguments357['errorClass'] = 'f3-form-error';
$arguments357['dir'] = NULL;
$arguments357['id'] = NULL;
$arguments357['lang'] = NULL;
$arguments357['style'] = NULL;
$arguments357['title'] = NULL;
$arguments357['accesskey'] = NULL;
$arguments357['tabindex'] = NULL;
$arguments357['onclick'] = NULL;
$renderChildrenClosure362 = function() {return NULL;};
$viewHelper363 = $self->getViewHelper('$viewHelper363', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper363->setArguments($arguments357);
$viewHelper363->setRenderingContext($renderingContext);
$viewHelper363->setRenderChildrenClosure($renderChildrenClosure362);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output342 .= $viewHelper363->initializeArgumentsAndRender();

$output342 .= '
                            </div>
                        </div>
                    ';
return $output342;
};

$output201 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext);

$output201 .= '
                </div>
            </div>
        </div>
        <div class="tab-footer-submit">
            <div class="row">
                <div class="col-sm-6"> 
                    <div class="padding">
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments364 = array();
$arguments364['action'] = 'index';
$arguments364['arguments'] = array (
);
$arguments364['controller'] = NULL;
$arguments364['extensionName'] = NULL;
$arguments364['pluginName'] = NULL;
$arguments364['pageUid'] = NULL;
$arguments364['pageType'] = 0;
$arguments364['noCache'] = false;
$arguments364['noCacheHash'] = false;
$arguments364['section'] = '';
$arguments364['format'] = '';
$arguments364['linkAccessRestrictedPages'] = false;
$arguments364['additionalParams'] = array (
);
$arguments364['absolute'] = false;
$arguments364['addQueryString'] = false;
$arguments364['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments364['addQueryStringMethod'] = NULL;
$renderChildrenClosure365 = function() {return NULL;};
$viewHelper366 = $self->getViewHelper('$viewHelper366', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper366->setArguments($arguments364);
$viewHelper366->setRenderingContext($renderingContext);
$viewHelper366->setRenderChildrenClosure($renderChildrenClosure365);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output201 .= $viewHelper366->initializeArgumentsAndRender();

$output201 .= '" class="btn btn-info">Filter zur&uuml;cksetzen</a>
                    </div> 
                </div> 
                <div class="col-sm-6"> 
                    <div class="right padding">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments367 = array();
$arguments367['value'] = 'Anzeigen';
$arguments367['id'] = 'summary-submit';
$arguments367['class'] = 'btn btn-primary';
$arguments367['additionalAttributes'] = NULL;
$arguments367['data'] = NULL;
$arguments367['name'] = NULL;
$arguments367['property'] = NULL;
$arguments367['disabled'] = NULL;
$arguments367['dir'] = NULL;
$arguments367['lang'] = NULL;
$arguments367['style'] = NULL;
$arguments367['title'] = NULL;
$arguments367['accesskey'] = NULL;
$arguments367['tabindex'] = NULL;
$arguments367['onclick'] = NULL;
$renderChildrenClosure368 = function() {return NULL;};
$viewHelper369 = $self->getViewHelper('$viewHelper369', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper369->setArguments($arguments367);
$viewHelper369->setRenderingContext($renderingContext);
$viewHelper369->setRenderChildrenClosure($renderChildrenClosure368);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output201 .= $viewHelper369->initializeArgumentsAndRender();

$output201 .= '
                    </div>
                </div>  
            </div>
        </div>
    ';
return $output201;
};
$viewHelper370 = $self->getViewHelper('$viewHelper370', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper370->setArguments($arguments199);
$viewHelper370->setRenderingContext($renderingContext);
$viewHelper370->setRenderChildrenClosure($renderChildrenClosure200);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output198 .= $viewHelper370->initializeArgumentsAndRender();

$output198 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments371 = array();
// Rendering Boolean node
$arguments371['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('results'));
$arguments371['then'] = NULL;
$arguments371['else'] = NULL;
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output373 = '';

$output373 .= '
        <div class="page-header">
            <h2>
                Ergebnisliste <span class="label label-primary">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments374 = array();
$arguments374['subject'] = NULL;
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('results');
};

$output373 .= TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext);

$output373 .= ' Treffer</span>
            </h2>
        </div>
        <div class="table-fit">
            <table class="table table-striped table-hover">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments376 = array();
$arguments376['each'] = $currentVariableContainer->getOrNull('results');
$arguments376['as'] = 'solution';
$arguments376['key'] = '';
$arguments376['reverse'] = false;
$arguments376['iteration'] = NULL;
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output378 = '';

$output378 .= '
                    <tr>
                        <td style="width: 10%">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments379 = array();
$arguments379['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'teilprojektnummer', $renderingContext);
$arguments379['keepQuotes'] = false;
$arguments379['encoding'] = NULL;
$arguments379['doubleEncode'] = true;
$renderChildrenClosure380 = function() {return NULL;};
$value381 = ($arguments379['value'] !== NULL ? $arguments379['value'] : $renderChildrenClosure380());

$output378 .= (!is_string($value381) ? $value381 : htmlspecialchars($value381, ($arguments379['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments379['encoding'] !== NULL ? $arguments379['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments379['doubleEncode']));

$output378 .= '    
                        </td>
                        <td>
                            ';
// Rendering ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper
$arguments382 = array();
$output383 = '';

$output383 .= 'edit[tx_wisedocasysdomaindesigner_domain_model_loesung][';

$output383 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'uid', $renderingContext);

$output383 .= ']=edit';
$arguments382['parameters'] = $output383;
$arguments382['additionalAttributes'] = NULL;
$arguments382['data'] = NULL;
$arguments382['returnUrl'] = '';
$arguments382['class'] = NULL;
$arguments382['dir'] = NULL;
$arguments382['id'] = NULL;
$arguments382['lang'] = NULL;
$arguments382['style'] = NULL;
$arguments382['title'] = NULL;
$arguments382['accesskey'] = NULL;
$arguments382['tabindex'] = NULL;
$arguments382['onclick'] = NULL;
$arguments382['name'] = NULL;
$arguments382['target'] = NULL;
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output385 = '';

$output385 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments386 = array();
$arguments386['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('solution'), 'loesungsbezeichnung', $renderingContext);
$arguments386['keepQuotes'] = false;
$arguments386['encoding'] = NULL;
$arguments386['doubleEncode'] = true;
$renderChildrenClosure387 = function() {return NULL;};
$value388 = ($arguments386['value'] !== NULL ? $arguments386['value'] : $renderChildrenClosure387());

$output385 .= (!is_string($value388) ? $value388 : htmlspecialchars($value388, ($arguments386['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments386['encoding'] !== NULL ? $arguments386['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments386['doubleEncode']));

$output385 .= '
                            ';
return $output385;
};
$viewHelper389 = $self->getViewHelper('$viewHelper389', $renderingContext, 'Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper');
$viewHelper389->setArguments($arguments382);
$viewHelper389->setRenderingContext($renderingContext);
$viewHelper389->setRenderChildrenClosure($renderChildrenClosure384);
// End of ViewHelper Wise\WiseDocasysBackend\ViewHelpers\Be\EditLinkViewHelper

$output378 .= $viewHelper389->initializeArgumentsAndRender();

$output378 .= '
                        </td>
                    </tr>
                ';
return $output378;
};

$output373 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output373 .= '
            </table>
        </div>
    ';
return $output373;
};

$output198 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext);

$output198 .= '
';
return $output198;
};

$output192 .= '';


return $output192;
}


}
#1573137881    168117    