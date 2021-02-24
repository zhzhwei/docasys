<?php
class FluidCache_ExtensionBuilder_BuilderModule_action_index_a05509e43cb76374fc5c866ab3f2a592c9d01141 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
	<link rel="stylesheet" type="text/css" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments1 = array();
$arguments1['path'] = 'jsDomainModeling/extbaseModeling.css';
$arguments1['extensionName'] = NULL;
$arguments1['absolute'] = false;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '" />
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

$output3 = '';

$output3 .= '
	<h1>Extension Builder</h1>
	<p class="bodytext"> This page is intended to give you some overview about the workflow we suggest.</p>
	<h2>What is this extension builder about?</h2>
	<ul>
		<li>This extension builder helps you to build and manage applications based on <b>Extbase</b> and <b>Fluid</b>.</li>
		<li>We also want to provide a learning tool for <b>Domain-Driven Design</b></li>
	</ul>
	<h2>Domain Driven Design</h2>
	View <a href="http://www.infoq.com/presentations/model-to-work-evans" target="_blank">Putting the Model to Work and Strategic Design</a> by Eric Evans to get an introduction into Domain Driven Design (DDD).
	<h2>Domain Modelling</h2>
	At first, you will start creating your <b>Domain Model</b> with a graphical editor. This editor will do the following for you:
	<ul>
		<li><b>Extension Skeleton</b>: will create the extension directory structure needed</li>
		<li><b>Domain Model</b>: Will create basic classes for the Domain Model, residing under Domain/Model/</li>
		<li><b>Database Tables and TCA</b>: Will create Database Tables and TCA definitions which fit to the domain model.</li>
		<li><b>Skeleton Locallang Files</b>: Will create skeleton locallang files</li>
		<li><b>Plugin Configuration</b>: Will create a plugin configuration, so it will work out-of-the-box.</li>
		<li><b>Dynamic Scaffolding</b>: Automatically create all CRUD actions (Create, Read, Update, Delete) for Aggregate Roots!</li>
	</ul>
	Have a look at the Documentation <a href="https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html" target="_blank" >Using the Extension Builder</a> for more details.
	<br /><br />
	<p><b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments4 = array();
$arguments4['action'] = 'domainmodelling';
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['controller'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['pluginName'] = NULL;
$arguments4['pageUid'] = NULL;
$arguments4['pageType'] = 0;
$arguments4['noCache'] = false;
$arguments4['noCacheHash'] = false;
$arguments4['section'] = '';
$arguments4['format'] = '';
$arguments4['linkAccessRestrictedPages'] = false;
$arguments4['additionalParams'] = array (
);
$arguments4['absolute'] = false;
$arguments4['addQueryString'] = false;
$arguments4['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments4['addQueryStringMethod'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['name'] = NULL;
$arguments4['rel'] = NULL;
$arguments4['rev'] = NULL;
$arguments4['target'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Go to the Domain Modeller';
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output3 .= $viewHelper6->initializeArgumentsAndRender();

$output3 .= '</b></p>

	<h2>Iterative model refinement</h2>
	The first version of the model will usually not be the one you\'ll use lateron. That\'s why you should take your time, and improve your model.<br />
	Useful things to know:
	<ul>
		<li><b>Dynamic Scaffolding</b>: The Scaffolding will automatically adjust the templates needed to render CRUD-functionality for your domain models.
			That is, if you modify your domain model by adding or removing fields, the standard CRUD actions display the new fields as well.
	</ul>
	When you start to modify the generated files, but still want to use the graphical modeler to extend your model, you have to enable the roundtrip feature
	in the Extension Builder settings in the Extension Manager. <br />
	You will find a file in your extension directory Configuration/ExtensionBuilder/settings.yaml.<br />
	There you can configure which files should be overwritten, kept or merged if you save your model.<br />
	A good practice would be, to let the Extension Builder generate the Partials for form fields and properties for you and include them in your templates.
	<br /><br />
	<h3>Please have a look at the <a href="https://docs.typo3.org/typo3cms/extensions/extension_builder/Developer/PublishToTer.html#security" target="_blank" >Security section</a> to avoid unsecure extensions!</h3>
';


return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output7 = '';

$output7 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments8 = array();
$arguments8['name'] = 'Default';
$renderChildrenClosure9 = function() {return NULL;};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper10->setArguments($arguments8);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output7 .= $viewHelper10->initializeArgumentsAndRender();

$output7 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments11 = array();
$arguments11['name'] = 'header';
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output13 = '';

$output13 .= '
	<link rel="stylesheet" type="text/css" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments14 = array();
$arguments14['path'] = 'jsDomainModeling/extbaseModeling.css';
$arguments14['extensionName'] = NULL;
$arguments14['absolute'] = false;
$renderChildrenClosure15 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '" />
';
return $output13;
};

$output7 .= '';

$output7 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments16 = array();
$arguments16['name'] = 'iconButtons';
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
';
};

$output7 .= '';

$output7 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments18 = array();
$arguments18['name'] = 'content';
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
	<h1>Extension Builder</h1>
	<p class="bodytext"> This page is intended to give you some overview about the workflow we suggest.</p>
	<h2>What is this extension builder about?</h2>
	<ul>
		<li>This extension builder helps you to build and manage applications based on <b>Extbase</b> and <b>Fluid</b>.</li>
		<li>We also want to provide a learning tool for <b>Domain-Driven Design</b></li>
	</ul>
	<h2>Domain Driven Design</h2>
	View <a href="http://www.infoq.com/presentations/model-to-work-evans" target="_blank">Putting the Model to Work and Strategic Design</a> by Eric Evans to get an introduction into Domain Driven Design (DDD).
	<h2>Domain Modelling</h2>
	At first, you will start creating your <b>Domain Model</b> with a graphical editor. This editor will do the following for you:
	<ul>
		<li><b>Extension Skeleton</b>: will create the extension directory structure needed</li>
		<li><b>Domain Model</b>: Will create basic classes for the Domain Model, residing under Domain/Model/</li>
		<li><b>Database Tables and TCA</b>: Will create Database Tables and TCA definitions which fit to the domain model.</li>
		<li><b>Skeleton Locallang Files</b>: Will create skeleton locallang files</li>
		<li><b>Plugin Configuration</b>: Will create a plugin configuration, so it will work out-of-the-box.</li>
		<li><b>Dynamic Scaffolding</b>: Automatically create all CRUD actions (Create, Read, Update, Delete) for Aggregate Roots!</li>
	</ul>
	Have a look at the Documentation <a href="https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html" target="_blank" >Using the Extension Builder</a> for more details.
	<br /><br />
	<p><b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments21 = array();
$arguments21['action'] = 'domainmodelling';
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['arguments'] = array (
);
$arguments21['controller'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['pluginName'] = NULL;
$arguments21['pageUid'] = NULL;
$arguments21['pageType'] = 0;
$arguments21['noCache'] = false;
$arguments21['noCacheHash'] = false;
$arguments21['section'] = '';
$arguments21['format'] = '';
$arguments21['linkAccessRestrictedPages'] = false;
$arguments21['additionalParams'] = array (
);
$arguments21['absolute'] = false;
$arguments21['addQueryString'] = false;
$arguments21['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments21['addQueryStringMethod'] = NULL;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['name'] = NULL;
$arguments21['rel'] = NULL;
$arguments21['rev'] = NULL;
$arguments21['target'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Go to the Domain Modeller';
};
$viewHelper23 = $self->getViewHelper('$viewHelper23', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper23->setArguments($arguments21);
$viewHelper23->setRenderingContext($renderingContext);
$viewHelper23->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output20 .= $viewHelper23->initializeArgumentsAndRender();

$output20 .= '</b></p>

	<h2>Iterative model refinement</h2>
	The first version of the model will usually not be the one you\'ll use lateron. That\'s why you should take your time, and improve your model.<br />
	Useful things to know:
	<ul>
		<li><b>Dynamic Scaffolding</b>: The Scaffolding will automatically adjust the templates needed to render CRUD-functionality for your domain models.
			That is, if you modify your domain model by adding or removing fields, the standard CRUD actions display the new fields as well.
	</ul>
	When you start to modify the generated files, but still want to use the graphical modeler to extend your model, you have to enable the roundtrip feature
	in the Extension Builder settings in the Extension Manager. <br />
	You will find a file in your extension directory Configuration/ExtensionBuilder/settings.yaml.<br />
	There you can configure which files should be overwritten, kept or merged if you save your model.<br />
	A good practice would be, to let the Extension Builder generate the Partials for form fields and properties for you and include them in your templates.
	<br /><br />
	<h3>Please have a look at the <a href="https://docs.typo3.org/typo3cms/extensions/extension_builder/Developer/PublishToTer.html#security" target="_blank" >Security section</a> to avoid unsecure extensions!</h3>
';
return $output20;
};

$output7 .= '';


return $output7;
}


}
#1573133192    14047     