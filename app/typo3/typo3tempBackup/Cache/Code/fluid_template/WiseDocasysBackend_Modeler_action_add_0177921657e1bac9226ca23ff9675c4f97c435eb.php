<?php
class FluidCache_WiseDocasysBackend_Modeler_action_add_0177921657e1bac9226ca23ff9675c4f97c435eb extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Modeler';
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
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = $currentVariableContainer->getOrNull('language');
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));

$output0 .= '-Modell erstellen</h1>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments4 = array();
$arguments4['name'] = 'save-xml';
$arguments4['action'] = 'save';
$arguments4['method'] = 'post';
$arguments4['id'] = 'save-form';
$arguments4['style'] = 'width: 100%;';
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['controller'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['pluginName'] = NULL;
$arguments4['pageUid'] = NULL;
$arguments4['object'] = NULL;
$arguments4['pageType'] = 0;
$arguments4['noCache'] = false;
$arguments4['noCacheHash'] = false;
$arguments4['section'] = '';
$arguments4['format'] = '';
$arguments4['additionalParams'] = array (
);
$arguments4['absolute'] = false;
$arguments4['addQueryString'] = false;
$arguments4['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments4['fieldNamePrefix'] = NULL;
$arguments4['actionUri'] = NULL;
$arguments4['objectName'] = NULL;
$arguments4['hiddenFieldClassName'] = NULL;
$arguments4['addQueryStringMethod'] = '';
$arguments4['enctype'] = NULL;
$arguments4['onreset'] = NULL;
$arguments4['onsubmit'] = NULL;
$arguments4['target'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
        <label>Dateiname:</label>
        <div class="row">
            <div class="form-group col-md-2">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments7 = array();
$arguments7['property'] = 'prefix';
$arguments7['type'] = 'text';
// Rendering Boolean node
$arguments7['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments7['class'] = 'form-control';
$arguments7['placeholder'] = 'Präfix';
$arguments7['maxlength'] = '4';
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['name'] = NULL;
$arguments7['value'] = NULL;
$arguments7['autofocus'] = NULL;
$arguments7['disabled'] = NULL;
$arguments7['readonly'] = NULL;
$arguments7['size'] = NULL;
$arguments7['pattern'] = NULL;
$arguments7['errorClass'] = 'f3-form-error';
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output6 .= $viewHelper9->initializeArgumentsAndRender();

$output6 .= '
            </div>
            <div class="form-group col-md-10">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments10 = array();
$arguments10['property'] = 'title';
$arguments10['type'] = 'text';
// Rendering Boolean node
$arguments10['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments10['class'] = 'form-control';
$arguments10['placeholder'] = 'Name';
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['name'] = NULL;
$arguments10['value'] = NULL;
$arguments10['autofocus'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['maxlength'] = NULL;
$arguments10['readonly'] = NULL;
$arguments10['size'] = NULL;
$arguments10['pattern'] = NULL;
$arguments10['errorClass'] = 'f3-form-error';
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output6 .= $viewHelper12->initializeArgumentsAndRender();

$output6 .= '
            </div>
        </div>
        <div class="hide">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments13 = array();
$arguments13['property'] = 'type';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$arguments14 = array();
$arguments14['mode'] = 'lower';
$arguments14['value'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('language');
};
$arguments13['value'] = TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['name'] = NULL;
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper17->setArguments($arguments13);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure16);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output6 .= $viewHelper17->initializeArgumentsAndRender();

$output6 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper
$arguments18 = array();
$arguments18['property'] = 'xml';
$arguments18['id'] = 'modeler-save-value';
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['name'] = NULL;
$arguments18['value'] = NULL;
$arguments18['autofocus'] = NULL;
$arguments18['rows'] = NULL;
$arguments18['cols'] = NULL;
$arguments18['disabled'] = NULL;
$arguments18['placeholder'] = NULL;
$arguments18['errorClass'] = 'f3-form-error';
$arguments18['class'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper

$output6 .= $viewHelper20->initializeArgumentsAndRender();

$output6 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments21 = array();
$arguments21['value'] = 'XML speichern';
$arguments21['id'] = 'modeler-save-submit';
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['name'] = NULL;
$arguments21['property'] = NULL;
$arguments21['disabled'] = NULL;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$renderChildrenClosure22 = function() {return NULL;};
$viewHelper23 = $self->getViewHelper('$viewHelper23', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper23->setArguments($arguments21);
$viewHelper23->setRenderingContext($renderingContext);
$viewHelper23->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output6 .= $viewHelper23->initializeArgumentsAndRender();

$output6 .= '
        </div>
    ';
return $output6;
};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper24->setArguments($arguments4);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper24->initializeArgumentsAndRender();

$output0 .= '

    <div class="canvas-wrapper-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$arguments25 = array();
$arguments25['mode'] = 'lower';
$arguments25['value'] = NULL;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments27 = array();
$arguments27['value'] = $currentVariableContainer->getOrNull('language');
$arguments27['keepQuotes'] = false;
$arguments27['encoding'] = NULL;
$arguments27['doubleEncode'] = true;
$renderChildrenClosure28 = function() {return NULL;};
$value29 = ($arguments27['value'] !== NULL ? $arguments27['value'] : $renderChildrenClosure28());
return (!is_string($value29) ? $value29 : htmlspecialchars($value29, ($arguments27['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments27['encoding'] !== NULL ? $arguments27['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments27['doubleEncode']));
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output0 .= '" id="canvas-wrapper">
        <div id="canvas"></div>
    </div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper
$arguments30 = array();
$arguments30['expression'] = $currentVariableContainer->getOrNull('language');
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output32 = '';

$output32 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments33 = array();
$arguments33['value'] = 'BPMN';
$arguments33['default'] = false;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
            <script>
                var diagramUrl = \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments36 = array();
$arguments36['path'] = 'BpmnJs/empty.bpmn';
$arguments36['extensionName'] = NULL;
$arguments36['absolute'] = false;
$renderChildrenClosure37 = function() {return NULL;};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '\';
            </script>
            <script src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments38 = array();
$arguments38['path'] = 'JavaScript/BpmnModeler.js';
$arguments38['extensionName'] = NULL;
$arguments38['absolute'] = false;
$renderChildrenClosure39 = function() {return NULL;};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output35 .= '"></script>
        ';
return $output35;
};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments40 = array();
$arguments40['value'] = 'CMMN';
$arguments40['default'] = false;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output42 = '';

$output42 .= '
             <script>
                var diagramUrl = \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments43 = array();
$arguments43['path'] = 'CmmnJs/empty.cmmn';
$arguments43['extensionName'] = NULL;
$arguments43['absolute'] = false;
$renderChildrenClosure44 = function() {return NULL;};

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '\';
            </script>
            <script src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments45 = array();
$arguments45['path'] = 'JavaScript/CmmnModeler.js';
$arguments45['extensionName'] = NULL;
$arguments45['absolute'] = false;
$renderChildrenClosure46 = function() {return NULL;};

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output42 .= '"></script>           
        ';
return $output42;
};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output32 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments47 = array();
$arguments47['value'] = 'DMN';
$arguments47['default'] = false;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output49 = '';

$output49 .= '
             <script>
                var diagramUrl = \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments50 = array();
$arguments50['path'] = 'DmnJs/empty.dmn';
$arguments50['extensionName'] = NULL;
$arguments50['absolute'] = false;
$renderChildrenClosure51 = function() {return NULL;};

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '\';
            </script>
            <script src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments52 = array();
$arguments52['path'] = 'JavaScript/DmnModeler.js';
$arguments52['extensionName'] = NULL;
$arguments52['absolute'] = false;
$renderChildrenClosure53 = function() {return NULL;};

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output49 .= '"></script>           
        ';
return $output49;
};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output32 .= '
    ';
return $output32;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output0 .= '
    
    <script>
        $.get(diagramUrl, openDiagram, \'text\');

        $(\'a.modeler-save\').click(function(e) {
            e.stopPropagation();
            e.preventDefault();

            if(confirm(\'Soll das Modell jetzt gespeichert werden?\')) {
                exportDiagram(); 
                if($(\'textarea#modeler-save-value\').val() != \'\') {
                    $(\'form#save-form\').submit();
                }
            } 
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

$output54 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments55 = array();
$arguments55['name'] = 'Modeler';
$renderChildrenClosure56 = function() {return NULL;};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper57->setArguments($arguments55);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure56);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output54 .= $viewHelper57->initializeArgumentsAndRender();

$output54 .= ' 
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments58 = array();
$arguments58['name'] = 'content';
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output60 = '';

$output60 .= '
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments61 = array();
$arguments61['value'] = $currentVariableContainer->getOrNull('language');
$arguments61['keepQuotes'] = false;
$arguments61['encoding'] = NULL;
$arguments61['doubleEncode'] = true;
$renderChildrenClosure62 = function() {return NULL;};
$value63 = ($arguments61['value'] !== NULL ? $arguments61['value'] : $renderChildrenClosure62());

$output60 .= (!is_string($value63) ? $value63 : htmlspecialchars($value63, ($arguments61['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments61['encoding'] !== NULL ? $arguments61['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments61['doubleEncode']));

$output60 .= '-Modell erstellen</h1>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments64 = array();
$arguments64['name'] = 'save-xml';
$arguments64['action'] = 'save';
$arguments64['method'] = 'post';
$arguments64['id'] = 'save-form';
$arguments64['style'] = 'width: 100%;';
$arguments64['additionalAttributes'] = NULL;
$arguments64['data'] = NULL;
$arguments64['arguments'] = array (
);
$arguments64['controller'] = NULL;
$arguments64['extensionName'] = NULL;
$arguments64['pluginName'] = NULL;
$arguments64['pageUid'] = NULL;
$arguments64['object'] = NULL;
$arguments64['pageType'] = 0;
$arguments64['noCache'] = false;
$arguments64['noCacheHash'] = false;
$arguments64['section'] = '';
$arguments64['format'] = '';
$arguments64['additionalParams'] = array (
);
$arguments64['absolute'] = false;
$arguments64['addQueryString'] = false;
$arguments64['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments64['fieldNamePrefix'] = NULL;
$arguments64['actionUri'] = NULL;
$arguments64['objectName'] = NULL;
$arguments64['hiddenFieldClassName'] = NULL;
$arguments64['addQueryStringMethod'] = '';
$arguments64['enctype'] = NULL;
$arguments64['onreset'] = NULL;
$arguments64['onsubmit'] = NULL;
$arguments64['target'] = NULL;
$arguments64['class'] = NULL;
$arguments64['dir'] = NULL;
$arguments64['lang'] = NULL;
$arguments64['title'] = NULL;
$arguments64['accesskey'] = NULL;
$arguments64['tabindex'] = NULL;
$arguments64['onclick'] = NULL;
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output66 = '';

$output66 .= '
        <label>Dateiname:</label>
        <div class="row">
            <div class="form-group col-md-2">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments67 = array();
$arguments67['property'] = 'prefix';
$arguments67['type'] = 'text';
// Rendering Boolean node
$arguments67['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments67['class'] = 'form-control';
$arguments67['placeholder'] = 'Präfix';
$arguments67['maxlength'] = '4';
$arguments67['additionalAttributes'] = NULL;
$arguments67['data'] = NULL;
$arguments67['name'] = NULL;
$arguments67['value'] = NULL;
$arguments67['autofocus'] = NULL;
$arguments67['disabled'] = NULL;
$arguments67['readonly'] = NULL;
$arguments67['size'] = NULL;
$arguments67['pattern'] = NULL;
$arguments67['errorClass'] = 'f3-form-error';
$arguments67['dir'] = NULL;
$arguments67['id'] = NULL;
$arguments67['lang'] = NULL;
$arguments67['style'] = NULL;
$arguments67['title'] = NULL;
$arguments67['accesskey'] = NULL;
$arguments67['tabindex'] = NULL;
$arguments67['onclick'] = NULL;
$renderChildrenClosure68 = function() {return NULL;};
$viewHelper69 = $self->getViewHelper('$viewHelper69', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper69->setArguments($arguments67);
$viewHelper69->setRenderingContext($renderingContext);
$viewHelper69->setRenderChildrenClosure($renderChildrenClosure68);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output66 .= $viewHelper69->initializeArgumentsAndRender();

$output66 .= '
            </div>
            <div class="form-group col-md-10">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments70 = array();
$arguments70['property'] = 'title';
$arguments70['type'] = 'text';
// Rendering Boolean node
$arguments70['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments70['class'] = 'form-control';
$arguments70['placeholder'] = 'Name';
$arguments70['additionalAttributes'] = NULL;
$arguments70['data'] = NULL;
$arguments70['name'] = NULL;
$arguments70['value'] = NULL;
$arguments70['autofocus'] = NULL;
$arguments70['disabled'] = NULL;
$arguments70['maxlength'] = NULL;
$arguments70['readonly'] = NULL;
$arguments70['size'] = NULL;
$arguments70['pattern'] = NULL;
$arguments70['errorClass'] = 'f3-form-error';
$arguments70['dir'] = NULL;
$arguments70['id'] = NULL;
$arguments70['lang'] = NULL;
$arguments70['style'] = NULL;
$arguments70['title'] = NULL;
$arguments70['accesskey'] = NULL;
$arguments70['tabindex'] = NULL;
$arguments70['onclick'] = NULL;
$renderChildrenClosure71 = function() {return NULL;};
$viewHelper72 = $self->getViewHelper('$viewHelper72', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper72->setArguments($arguments70);
$viewHelper72->setRenderingContext($renderingContext);
$viewHelper72->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output66 .= $viewHelper72->initializeArgumentsAndRender();

$output66 .= '
            </div>
        </div>
        <div class="hide">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments73 = array();
$arguments73['property'] = 'type';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$arguments74 = array();
$arguments74['mode'] = 'lower';
$arguments74['value'] = NULL;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('language');
};
$arguments73['value'] = TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);
$arguments73['additionalAttributes'] = NULL;
$arguments73['data'] = NULL;
$arguments73['name'] = NULL;
$arguments73['class'] = NULL;
$arguments73['dir'] = NULL;
$arguments73['id'] = NULL;
$arguments73['lang'] = NULL;
$arguments73['style'] = NULL;
$arguments73['title'] = NULL;
$arguments73['accesskey'] = NULL;
$arguments73['tabindex'] = NULL;
$arguments73['onclick'] = NULL;
$renderChildrenClosure76 = function() {return NULL;};
$viewHelper77 = $self->getViewHelper('$viewHelper77', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper77->setArguments($arguments73);
$viewHelper77->setRenderingContext($renderingContext);
$viewHelper77->setRenderChildrenClosure($renderChildrenClosure76);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output66 .= $viewHelper77->initializeArgumentsAndRender();

$output66 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper
$arguments78 = array();
$arguments78['property'] = 'xml';
$arguments78['id'] = 'modeler-save-value';
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['name'] = NULL;
$arguments78['value'] = NULL;
$arguments78['autofocus'] = NULL;
$arguments78['rows'] = NULL;
$arguments78['cols'] = NULL;
$arguments78['disabled'] = NULL;
$arguments78['placeholder'] = NULL;
$arguments78['errorClass'] = 'f3-form-error';
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$renderChildrenClosure79 = function() {return NULL;};
$viewHelper80 = $self->getViewHelper('$viewHelper80', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper');
$viewHelper80->setArguments($arguments78);
$viewHelper80->setRenderingContext($renderingContext);
$viewHelper80->setRenderChildrenClosure($renderChildrenClosure79);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper

$output66 .= $viewHelper80->initializeArgumentsAndRender();

$output66 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments81 = array();
$arguments81['value'] = 'XML speichern';
$arguments81['id'] = 'modeler-save-submit';
$arguments81['additionalAttributes'] = NULL;
$arguments81['data'] = NULL;
$arguments81['name'] = NULL;
$arguments81['property'] = NULL;
$arguments81['disabled'] = NULL;
$arguments81['class'] = NULL;
$arguments81['dir'] = NULL;
$arguments81['lang'] = NULL;
$arguments81['style'] = NULL;
$arguments81['title'] = NULL;
$arguments81['accesskey'] = NULL;
$arguments81['tabindex'] = NULL;
$arguments81['onclick'] = NULL;
$renderChildrenClosure82 = function() {return NULL;};
$viewHelper83 = $self->getViewHelper('$viewHelper83', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper83->setArguments($arguments81);
$viewHelper83->setRenderingContext($renderingContext);
$viewHelper83->setRenderChildrenClosure($renderChildrenClosure82);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output66 .= $viewHelper83->initializeArgumentsAndRender();

$output66 .= '
        </div>
    ';
return $output66;
};
$viewHelper84 = $self->getViewHelper('$viewHelper84', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper84->setArguments($arguments64);
$viewHelper84->setRenderingContext($renderingContext);
$viewHelper84->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output60 .= $viewHelper84->initializeArgumentsAndRender();

$output60 .= '

    <div class="canvas-wrapper-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$arguments85 = array();
$arguments85['mode'] = 'lower';
$arguments85['value'] = NULL;
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments87 = array();
$arguments87['value'] = $currentVariableContainer->getOrNull('language');
$arguments87['keepQuotes'] = false;
$arguments87['encoding'] = NULL;
$arguments87['doubleEncode'] = true;
$renderChildrenClosure88 = function() {return NULL;};
$value89 = ($arguments87['value'] !== NULL ? $arguments87['value'] : $renderChildrenClosure88());
return (!is_string($value89) ? $value89 : htmlspecialchars($value89, ($arguments87['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments87['encoding'] !== NULL ? $arguments87['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments87['doubleEncode']));
};

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output60 .= '" id="canvas-wrapper">
        <div id="canvas"></div>
    </div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper
$arguments90 = array();
$arguments90['expression'] = $currentVariableContainer->getOrNull('language');
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments93 = array();
$arguments93['value'] = 'BPMN';
$arguments93['default'] = false;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output95 = '';

$output95 .= '
            <script>
                var diagramUrl = \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments96 = array();
$arguments96['path'] = 'BpmnJs/empty.bpmn';
$arguments96['extensionName'] = NULL;
$arguments96['absolute'] = false;
$renderChildrenClosure97 = function() {return NULL;};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '\';
            </script>
            <script src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments98 = array();
$arguments98['path'] = 'JavaScript/BpmnModeler.js';
$arguments98['extensionName'] = NULL;
$arguments98['absolute'] = false;
$renderChildrenClosure99 = function() {return NULL;};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output95 .= '"></script>
        ';
return $output95;
};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments100 = array();
$arguments100['value'] = 'CMMN';
$arguments100['default'] = false;
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output102 = '';

$output102 .= '
             <script>
                var diagramUrl = \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments103 = array();
$arguments103['path'] = 'CmmnJs/empty.cmmn';
$arguments103['extensionName'] = NULL;
$arguments103['absolute'] = false;
$renderChildrenClosure104 = function() {return NULL;};

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output102 .= '\';
            </script>
            <script src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments105 = array();
$arguments105['path'] = 'JavaScript/CmmnModeler.js';
$arguments105['extensionName'] = NULL;
$arguments105['absolute'] = false;
$renderChildrenClosure106 = function() {return NULL;};

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output102 .= '"></script>           
        ';
return $output102;
};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output92 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments107 = array();
$arguments107['value'] = 'DMN';
$arguments107['default'] = false;
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output109 = '';

$output109 .= '
             <script>
                var diagramUrl = \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments110 = array();
$arguments110['path'] = 'DmnJs/empty.dmn';
$arguments110['extensionName'] = NULL;
$arguments110['absolute'] = false;
$renderChildrenClosure111 = function() {return NULL;};

$output109 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= '\';
            </script>
            <script src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments112 = array();
$arguments112['path'] = 'JavaScript/DmnModeler.js';
$arguments112['extensionName'] = NULL;
$arguments112['absolute'] = false;
$renderChildrenClosure113 = function() {return NULL;};

$output109 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output109 .= '"></script>           
        ';
return $output109;
};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output92 .= '
    ';
return $output92;
};

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output60 .= '
    
    <script>
        $.get(diagramUrl, openDiagram, \'text\');

        $(\'a.modeler-save\').click(function(e) {
            e.stopPropagation();
            e.preventDefault();

            if(confirm(\'Soll das Modell jetzt gespeichert werden?\')) {
                exportDiagram(); 
                if($(\'textarea#modeler-save-value\').val() != \'\') {
                    $(\'form#save-form\').submit();
                }
            } 
        });  
    </script>
';
return $output60;
};

$output54 .= '';


return $output54;
}


}
#1569488001    35969     