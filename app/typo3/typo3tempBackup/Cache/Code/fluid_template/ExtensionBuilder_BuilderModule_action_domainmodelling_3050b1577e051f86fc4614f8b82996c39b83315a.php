<?php
class FluidCache_ExtensionBuilder_BuilderModule_action_domainmodelling_3050b1577e051f86fc4614f8b82996c39b83315a extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section header
 */
public function section_594fd1615a341c77829e83ed988f137e1ba96231(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Be\ConfigurationViewHelper
$arguments1 = array();
$renderChildrenClosure2 = function() {return NULL;};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'EBT\ExtensionBuilder\ViewHelpers\Be\ConfigurationViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper EBT\ExtensionBuilder\ViewHelpers\Be\ConfigurationViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '
';


return $output0;
}
/**
 * section iconButtons
 */
public function section_cfe02ef001375ab02a741661b53c8aacfcbfd7a0(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();



return '
';
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();



return '
	<script type="text/javascript">
		// InputEx needs a correct path to this image
		inputEx.spacerUrl = TYPO3.settings.extensionBuilder.baseUrl + "Resources/Public/jsDomainModeling/wireit/lib/inputex/images/space.gif";

		YAHOO.util.Event.onDOMReady( function() {
			var editor = new WireIt.WiringEditor(extbaseModeling_wiringEditorLanguage);
		});
	</script>

	<div id="domainModelEditor" class="yui-skin-sam">

		<div id="left">
			<div id="propertiesForm"></div>
		</div>

		<div id="center">
			<div id="moduleBar"></div>
			<div id="modelingLayer"></div>
		</div>

		<div id="bottom">
		</div>

		<div id="helpPanel">

		</div>

	</div>
';
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output4 = '';

$output4 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments5 = array();
$arguments5['name'] = 'Default';
$renderChildrenClosure6 = function() {return NULL;};
$viewHelper7 = $self->getViewHelper('$viewHelper7', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper7->setArguments($arguments5);
$viewHelper7->setRenderingContext($renderingContext);
$viewHelper7->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output4 .= $viewHelper7->initializeArgumentsAndRender();

$output4 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments8 = array();
$arguments8['name'] = 'header';
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output10 = '';

$output10 .= '
	';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Be\ConfigurationViewHelper
$arguments11 = array();
$renderChildrenClosure12 = function() {return NULL;};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'EBT\ExtensionBuilder\ViewHelpers\Be\ConfigurationViewHelper');
$viewHelper13->setArguments($arguments11);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper EBT\ExtensionBuilder\ViewHelpers\Be\ConfigurationViewHelper

$output10 .= $viewHelper13->initializeArgumentsAndRender();

$output10 .= '
';
return $output10;
};

$output4 .= '';

$output4 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments14 = array();
$arguments14['name'] = 'iconButtons';
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
';
};

$output4 .= '';

$output4 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments16 = array();
$arguments16['name'] = 'content';
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
	<script type="text/javascript">
		// InputEx needs a correct path to this image
		inputEx.spacerUrl = TYPO3.settings.extensionBuilder.baseUrl + "Resources/Public/jsDomainModeling/wireit/lib/inputex/images/space.gif";

		YAHOO.util.Event.onDOMReady( function() {
			var editor = new WireIt.WiringEditor(extbaseModeling_wiringEditorLanguage);
		});
	</script>

	<div id="domainModelEditor" class="yui-skin-sam">

		<div id="left">
			<div id="propertiesForm"></div>
		</div>

		<div id="center">
			<div id="moduleBar"></div>
			<div id="modelingLayer"></div>
		</div>

		<div id="bottom">
		</div>

		<div id="helpPanel">

		</div>

	</div>
';
};

$output4 .= '';


return $output4;
}


}
#1573137896    5888      