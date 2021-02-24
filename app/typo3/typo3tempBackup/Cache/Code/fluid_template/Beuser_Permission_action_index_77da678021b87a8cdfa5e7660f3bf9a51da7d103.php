<?php
class FluidCache_Beuser_Permission_action_index_77da678021b87a8cdfa5e7660f3bf9a51da7d103 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Permission';
}
public function hasLayout() {
return TRUE;
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:permissions';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '</h1>
';


return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output3 = '';

$output3 .= '

	<div class="form-group">
		<label for="depth">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments4 = array();
$arguments4['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Depth';
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['htmlEscape'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= ':</label>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments6 = array();
$arguments6['class'] = 'form-control';
$arguments6['id'] = 'depth';
$arguments6['value'] = $currentVariableContainer->getOrNull('depth');
$arguments6['options'] = $currentVariableContainer->getOrNull('depthOptions');
// Rendering Array
$array7 = array();
$output8 = '';

$output8 .= 'jumpToUrl(\'';

$output8 .= $currentVariableContainer->getOrNull('depthBaseUrl');

$output8 .= '\'.replace(\'__DEPTH__\', this.options[this.selectedIndex].value), this);';
$array7['onchange'] = $output8;
$arguments6['additionalAttributes'] = $array7;
$arguments6['data'] = NULL;
$arguments6['name'] = NULL;
$arguments6['property'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['size'] = NULL;
$arguments6['disabled'] = NULL;
$arguments6['optionValueField'] = NULL;
$arguments6['optionLabelField'] = NULL;
$arguments6['sortByOptionLabel'] = false;
$arguments6['selectAllByDefault'] = false;
$arguments6['errorClass'] = 'f3-form-error';
$arguments6['prependOptionLabel'] = NULL;
$arguments6['prependOptionValue'] = NULL;
$arguments6['multiple'] = false;
$renderChildrenClosure9 = function() {return NULL;};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper10->setArguments($arguments6);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper10->initializeArgumentsAndRender();

$output3 .= '
	</div>

	<div class="panel panel-default panel-space">
		<div class="table-fit">
			<table class="table table-striped table-hover" id="typo3-permissionList">
				<thead>
				<tr>
					<th colspan="2">&nbsp;</th>
					<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments11 = array();
$arguments11['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Owner';
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output3 .= '</th>
					<th align="center">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments13 = array();
$arguments13['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Group';
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output3 .= '</th>
					<th align="center">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments15 = array();
$arguments15['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Everybody';
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output3 .= '</th>
					<th align="center">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments17 = array();
$arguments17['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock';
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output3 .= '</th>
				</tr>
				</thead>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments19 = array();
$arguments19['each'] = $currentVariableContainer->getOrNull('viewTree');
$arguments19['as'] = 'data';
$arguments19['key'] = '';
$arguments19['reverse'] = false;
$arguments19['iteration'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
					<tr>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments22 = array();
// Rendering Boolean node
$arguments22['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext));
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output24 = '';

$output24 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments25 = array();
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output27 = '';

$output27 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments28 = array();
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									A "normal" page row is rendered, not the root page
								';
};

$output27 .= '';

$output27 .= '

								<td align="left" nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments30 = array();
$arguments30['action'] = 'edit';
// Rendering Array
$array31 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments32 = array();
// Rendering Boolean node
$arguments32['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row._ORIG_uid', $renderingContext));
$arguments32['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row._ORIG_uid', $renderingContext);
$arguments32['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure33 = function() {return NULL;};
$array31['id'] = TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);
$array31['depth'] = $currentVariableContainer->getOrNull('depth');
$arguments30['arguments'] = $array31;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments34 = array();
$arguments34['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['htmlEscape'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$renderChildrenClosure35 = function() {return NULL;};
$arguments30['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);
$arguments30['additionalAttributes'] = NULL;
$arguments30['data'] = NULL;
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
$arguments30['class'] = NULL;
$arguments30['dir'] = NULL;
$arguments30['id'] = NULL;
$arguments30['lang'] = NULL;
$arguments30['style'] = NULL;
$arguments30['accesskey'] = NULL;
$arguments30['tabindex'] = NULL;
$arguments30['onclick'] = NULL;
$arguments30['name'] = NULL;
$arguments30['rel'] = NULL;
$arguments30['rev'] = NULL;
$arguments30['target'] = NULL;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output37 = '';

$output37 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments38 = array();
$arguments38['value'] = NULL;
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output40 = '';

$output40 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'depthData', $renderingContext);

$output40 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'HTML', $renderingContext);
return $output40;
};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments41 = array();
$arguments41['maxCharacters'] = '20';
$arguments41['append'] = '...';
$arguments41['respectWordBoundaries'] = true;
$arguments41['respectHtml'] = true;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments43 = array();
$arguments43['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.title', $renderingContext);
$arguments43['keepQuotes'] = false;
$arguments43['encoding'] = NULL;
$arguments43['doubleEncode'] = true;
$renderChildrenClosure44 = function() {return NULL;};
$value45 = ($arguments43['value'] !== NULL ? $arguments43['value'] : $renderChildrenClosure44());
return (!is_string($value45) ? $value45 : htmlspecialchars($value45, ($arguments43['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments43['encoding'] !== NULL ? $arguments43['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments43['doubleEncode']));
};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output37 .= '
									';
return $output37;
};
$viewHelper46 = $self->getViewHelper('$viewHelper46', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper46->setArguments($arguments30);
$viewHelper46->setRenderingContext($renderingContext);
$viewHelper46->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output27 .= $viewHelper46->initializeArgumentsAndRender();

$output27 .= '
								</td>

								<td>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments47 = array();
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										Edit link is workspace aware: If in ws, link to edit the ws overlay record is rendered
									';
};

$output27 .= '';

$output27 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments49 = array();
$arguments49['action'] = 'edit';
// Rendering Array
$array50 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments51 = array();
// Rendering Boolean node
$arguments51['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row._ORIG_uid', $renderingContext));
$arguments51['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row._ORIG_uid', $renderingContext);
$arguments51['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure52 = function() {return NULL;};
$array50['id'] = TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);
$array50['depth'] = $currentVariableContainer->getOrNull('depth');
$arguments49['arguments'] = $array50;
$arguments49['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments53 = array();
$arguments53['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';
$arguments53['id'] = NULL;
$arguments53['default'] = NULL;
$arguments53['htmlEscape'] = NULL;
$arguments53['arguments'] = NULL;
$arguments53['extensionName'] = NULL;
$renderChildrenClosure54 = function() {return NULL;};
$arguments49['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['controller'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['pluginName'] = NULL;
$arguments49['pageUid'] = NULL;
$arguments49['pageType'] = 0;
$arguments49['noCache'] = false;
$arguments49['noCacheHash'] = false;
$arguments49['section'] = '';
$arguments49['format'] = '';
$arguments49['linkAccessRestrictedPages'] = false;
$arguments49['additionalParams'] = array (
);
$arguments49['absolute'] = false;
$arguments49['addQueryString'] = false;
$arguments49['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments49['addQueryStringMethod'] = NULL;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['name'] = NULL;
$arguments49['rel'] = NULL;
$arguments49['rev'] = NULL;
$arguments49['target'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output56 = '';

$output56 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments57 = array();
$arguments57['identifier'] = 'actions-document-open';
$arguments57['size'] = 'small';
$arguments57['overlay'] = NULL;
$arguments57['state'] = 'default';
$arguments57['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure58 = function() {return NULL;};

$output56 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
									';
return $output56;
};
$viewHelper59 = $self->getViewHelper('$viewHelper59', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper59->setArguments($arguments49);
$viewHelper59->setRenderingContext($renderingContext);
$viewHelper59->setRenderChildrenClosure($renderChildrenClosure55);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output27 .= $viewHelper59->initializeArgumentsAndRender();

$output27 .= '
								</td>

								<td nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$arguments60 = array();
$arguments60['permission'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_user', $renderingContext);
$arguments60['scope'] = 'user';
$arguments60['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure61 = function() {return NULL;};

$output27 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output27 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments62 = array();
$arguments62['partial'] = 'Permission/Ownername';
// Rendering Array
$array63 = array();
$array63['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$array63['userId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_userid', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$arguments64 = array();
$arguments64['array'] = $currentVariableContainer->getOrNull('beUsers');
$arguments64['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_userid', $renderingContext);
$arguments64['subKey'] = 'username';
$renderChildrenClosure65 = function() {return NULL;};
$array63['username'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);
$arguments62['arguments'] = $array63;
$arguments62['section'] = NULL;
$arguments62['optional'] = false;
$renderChildrenClosure66 = function() {return NULL;};

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments62, $renderChildrenClosure66, $renderingContext);

$output27 .= '
								</td>

								<td nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$arguments67 = array();
$arguments67['permission'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_group', $renderingContext);
$arguments67['scope'] = 'group';
$arguments67['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure68 = function() {return NULL;};

$output27 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output27 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments69 = array();
$arguments69['partial'] = 'Permission/Groupname';
// Rendering Array
$array70 = array();
$array70['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$array70['groupId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_groupid', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$arguments71 = array();
$arguments71['array'] = $currentVariableContainer->getOrNull('beGroups');
$arguments71['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_groupid', $renderingContext);
$arguments71['subKey'] = 'title';
$renderChildrenClosure72 = function() {return NULL;};
$array70['groupname'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);
$arguments69['arguments'] = $array70;
$arguments69['section'] = NULL;
$arguments69['optional'] = false;
$renderChildrenClosure73 = function() {return NULL;};

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments69, $renderChildrenClosure73, $renderingContext);

$output27 .= '
								</td>

								<td nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$arguments74 = array();
$arguments74['permission'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_everybody', $renderingContext);
$arguments74['scope'] = 'everybody';
$arguments74['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure75 = function() {return NULL;};

$output27 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output27 .= '
								</td>

								<td nowrap="nowrap">
									<span id="el_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments76 = array();
$arguments76['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments76['keepQuotes'] = false;
$arguments76['encoding'] = NULL;
$arguments76['doubleEncode'] = true;
$renderChildrenClosure77 = function() {return NULL;};
$value78 = ($arguments76['value'] !== NULL ? $arguments76['value'] : $renderChildrenClosure77());

$output27 .= (!is_string($value78) ? $value78 : htmlspecialchars($value78, ($arguments76['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments76['encoding'] !== NULL ? $arguments76['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments76['doubleEncode']));

$output27 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments79 = array();
// Rendering Boolean node
$arguments79['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.editlock', $renderingContext));
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output81 = '';

$output81 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments82 = array();
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output84 = '';

$output84 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments85 = array();
$arguments85['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments85['keepQuotes'] = false;
$arguments85['encoding'] = NULL;
$arguments85['doubleEncode'] = true;
$renderChildrenClosure86 = function() {return NULL;};
$value87 = ($arguments85['value'] !== NULL ? $arguments85['value'] : $renderChildrenClosure86());

$output84 .= (!is_string($value87) ? $value87 : htmlspecialchars($value87, ($arguments85['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments85['encoding'] !== NULL ? $arguments85['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments85['doubleEncode']));

$output84 .= '"
													data-lockstate="1"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments88 = array();
$arguments88['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';
$arguments88['id'] = NULL;
$arguments88['default'] = NULL;
$arguments88['htmlEscape'] = NULL;
$arguments88['arguments'] = NULL;
$arguments88['extensionName'] = NULL;
$renderChildrenClosure89 = function() {return NULL;};

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output84 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments90 = array();
$arguments90['identifier'] = 'actions-lock';
$arguments90['size'] = 'small';
$arguments90['overlay'] = NULL;
$arguments90['state'] = 'default';
$arguments90['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure91 = function() {return NULL;};

$output84 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output84 .= '
												</a>
											';
return $output84;
};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments92 = array();
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output94 = '';

$output94 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments95 = array();
$arguments95['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments95['keepQuotes'] = false;
$arguments95['encoding'] = NULL;
$arguments95['doubleEncode'] = true;
$renderChildrenClosure96 = function() {return NULL;};
$value97 = ($arguments95['value'] !== NULL ? $arguments95['value'] : $renderChildrenClosure96());

$output94 .= (!is_string($value97) ? $value97 : htmlspecialchars($value97, ($arguments95['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments95['encoding'] !== NULL ? $arguments95['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments95['doubleEncode']));

$output94 .= '"
													data-lockstate="0"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments98 = array();
$arguments98['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';
$arguments98['id'] = NULL;
$arguments98['default'] = NULL;
$arguments98['htmlEscape'] = NULL;
$arguments98['arguments'] = NULL;
$arguments98['extensionName'] = NULL;
$renderChildrenClosure99 = function() {return NULL;};

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output94 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments100 = array();
$arguments100['identifier'] = 'actions-unlock';
$arguments100['size'] = 'small';
$arguments100['overlay'] = NULL;
$arguments100['state'] = 'default';
$arguments100['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure101 = function() {return NULL;};

$output94 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output94 .= '
												</a>
											';
return $output94;
};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output81 .= '
										';
return $output81;
};
$arguments79['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output102 = '';

$output102 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments103 = array();
$arguments103['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments103['keepQuotes'] = false;
$arguments103['encoding'] = NULL;
$arguments103['doubleEncode'] = true;
$renderChildrenClosure104 = function() {return NULL;};
$value105 = ($arguments103['value'] !== NULL ? $arguments103['value'] : $renderChildrenClosure104());

$output102 .= (!is_string($value105) ? $value105 : htmlspecialchars($value105, ($arguments103['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments103['encoding'] !== NULL ? $arguments103['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments103['doubleEncode']));

$output102 .= '"
													data-lockstate="1"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments106 = array();
$arguments106['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';
$arguments106['id'] = NULL;
$arguments106['default'] = NULL;
$arguments106['htmlEscape'] = NULL;
$arguments106['arguments'] = NULL;
$arguments106['extensionName'] = NULL;
$renderChildrenClosure107 = function() {return NULL;};

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output102 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments108 = array();
$arguments108['identifier'] = 'actions-lock';
$arguments108['size'] = 'small';
$arguments108['overlay'] = NULL;
$arguments108['state'] = 'default';
$arguments108['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure109 = function() {return NULL;};

$output102 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output102 .= '
												</a>
											';
return $output102;
};
$arguments79['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output110 = '';

$output110 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments111 = array();
$arguments111['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments111['keepQuotes'] = false;
$arguments111['encoding'] = NULL;
$arguments111['doubleEncode'] = true;
$renderChildrenClosure112 = function() {return NULL;};
$value113 = ($arguments111['value'] !== NULL ? $arguments111['value'] : $renderChildrenClosure112());

$output110 .= (!is_string($value113) ? $value113 : htmlspecialchars($value113, ($arguments111['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments111['encoding'] !== NULL ? $arguments111['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments111['doubleEncode']));

$output110 .= '"
													data-lockstate="0"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments114 = array();
$arguments114['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['htmlEscape'] = NULL;
$arguments114['arguments'] = NULL;
$arguments114['extensionName'] = NULL;
$renderChildrenClosure115 = function() {return NULL;};

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output110 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments116 = array();
$arguments116['identifier'] = 'actions-unlock';
$arguments116['size'] = 'small';
$arguments116['overlay'] = NULL;
$arguments116['state'] = 'default';
$arguments116['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure117 = function() {return NULL;};

$output110 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output110 .= '
												</a>
											';
return $output110;
};

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output27 .= '
									</span>
								</td>
							';
return $output27;
};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '

							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments118 = array();
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output120 = '';

$output120 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments121 = array();
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									Root page row is rendered
								';
};

$output120 .= '';

$output120 .= '
								<td align="left" nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments123 = array();
$arguments123['value'] = NULL;
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'HTML', $renderingContext);
};

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output120 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments125 = array();
$arguments125['maxCharacters'] = '20';
$arguments125['append'] = '...';
$arguments125['respectWordBoundaries'] = true;
$arguments125['respectHtml'] = true;
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments127 = array();
$arguments127['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.title', $renderingContext);
$arguments127['keepQuotes'] = false;
$arguments127['encoding'] = NULL;
$arguments127['doubleEncode'] = true;
$renderChildrenClosure128 = function() {return NULL;};
$value129 = ($arguments127['value'] !== NULL ? $arguments127['value'] : $renderChildrenClosure128());
return (!is_string($value129) ? $value129 : htmlspecialchars($value129, ($arguments127['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments127['encoding'] !== NULL ? $arguments127['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments127['doubleEncode']));
};

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output120 .= '
								</td>
								<td></td>
								<td nowrap="nowrap"></td>
								<td nowrap="nowrap"></td>
								<td nowrap="nowrap"></td>
								<td nowrap="nowrap"></td>
							';
return $output120;
};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output24 .= '
						';
return $output24;
};
$arguments22['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output130 = '';

$output130 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments131 = array();
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									A "normal" page row is rendered, not the root page
								';
};

$output130 .= '';

$output130 .= '

								<td align="left" nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments133 = array();
$arguments133['action'] = 'edit';
// Rendering Array
$array134 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments135 = array();
// Rendering Boolean node
$arguments135['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row._ORIG_uid', $renderingContext));
$arguments135['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row._ORIG_uid', $renderingContext);
$arguments135['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure136 = function() {return NULL;};
$array134['id'] = TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);
$array134['depth'] = $currentVariableContainer->getOrNull('depth');
$arguments133['arguments'] = $array134;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments137 = array();
$arguments137['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';
$arguments137['id'] = NULL;
$arguments137['default'] = NULL;
$arguments137['htmlEscape'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['extensionName'] = NULL;
$renderChildrenClosure138 = function() {return NULL;};
$arguments133['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);
$arguments133['additionalAttributes'] = NULL;
$arguments133['data'] = NULL;
$arguments133['controller'] = NULL;
$arguments133['extensionName'] = NULL;
$arguments133['pluginName'] = NULL;
$arguments133['pageUid'] = NULL;
$arguments133['pageType'] = 0;
$arguments133['noCache'] = false;
$arguments133['noCacheHash'] = false;
$arguments133['section'] = '';
$arguments133['format'] = '';
$arguments133['linkAccessRestrictedPages'] = false;
$arguments133['additionalParams'] = array (
);
$arguments133['absolute'] = false;
$arguments133['addQueryString'] = false;
$arguments133['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments133['addQueryStringMethod'] = NULL;
$arguments133['class'] = NULL;
$arguments133['dir'] = NULL;
$arguments133['id'] = NULL;
$arguments133['lang'] = NULL;
$arguments133['style'] = NULL;
$arguments133['accesskey'] = NULL;
$arguments133['tabindex'] = NULL;
$arguments133['onclick'] = NULL;
$arguments133['name'] = NULL;
$arguments133['rel'] = NULL;
$arguments133['rev'] = NULL;
$arguments133['target'] = NULL;
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output140 = '';

$output140 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments141 = array();
$arguments141['value'] = NULL;
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output143 = '';

$output143 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'depthData', $renderingContext);

$output143 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'HTML', $renderingContext);
return $output143;
};

$output140 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments144 = array();
$arguments144['maxCharacters'] = '20';
$arguments144['append'] = '...';
$arguments144['respectWordBoundaries'] = true;
$arguments144['respectHtml'] = true;
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments146 = array();
$arguments146['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.title', $renderingContext);
$arguments146['keepQuotes'] = false;
$arguments146['encoding'] = NULL;
$arguments146['doubleEncode'] = true;
$renderChildrenClosure147 = function() {return NULL;};
$value148 = ($arguments146['value'] !== NULL ? $arguments146['value'] : $renderChildrenClosure147());
return (!is_string($value148) ? $value148 : htmlspecialchars($value148, ($arguments146['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments146['encoding'] !== NULL ? $arguments146['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments146['doubleEncode']));
};

$output140 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output140 .= '
									';
return $output140;
};
$viewHelper149 = $self->getViewHelper('$viewHelper149', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper149->setArguments($arguments133);
$viewHelper149->setRenderingContext($renderingContext);
$viewHelper149->setRenderChildrenClosure($renderChildrenClosure139);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output130 .= $viewHelper149->initializeArgumentsAndRender();

$output130 .= '
								</td>

								<td>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments150 = array();
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										Edit link is workspace aware: If in ws, link to edit the ws overlay record is rendered
									';
};

$output130 .= '';

$output130 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments152 = array();
$arguments152['action'] = 'edit';
// Rendering Array
$array153 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments154 = array();
// Rendering Boolean node
$arguments154['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row._ORIG_uid', $renderingContext));
$arguments154['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row._ORIG_uid', $renderingContext);
$arguments154['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure155 = function() {return NULL;};
$array153['id'] = TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);
$array153['depth'] = $currentVariableContainer->getOrNull('depth');
$arguments152['arguments'] = $array153;
$arguments152['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments156 = array();
$arguments156['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';
$arguments156['id'] = NULL;
$arguments156['default'] = NULL;
$arguments156['htmlEscape'] = NULL;
$arguments156['arguments'] = NULL;
$arguments156['extensionName'] = NULL;
$renderChildrenClosure157 = function() {return NULL;};
$arguments152['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);
$arguments152['additionalAttributes'] = NULL;
$arguments152['data'] = NULL;
$arguments152['controller'] = NULL;
$arguments152['extensionName'] = NULL;
$arguments152['pluginName'] = NULL;
$arguments152['pageUid'] = NULL;
$arguments152['pageType'] = 0;
$arguments152['noCache'] = false;
$arguments152['noCacheHash'] = false;
$arguments152['section'] = '';
$arguments152['format'] = '';
$arguments152['linkAccessRestrictedPages'] = false;
$arguments152['additionalParams'] = array (
);
$arguments152['absolute'] = false;
$arguments152['addQueryString'] = false;
$arguments152['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments152['addQueryStringMethod'] = NULL;
$arguments152['dir'] = NULL;
$arguments152['id'] = NULL;
$arguments152['lang'] = NULL;
$arguments152['style'] = NULL;
$arguments152['accesskey'] = NULL;
$arguments152['tabindex'] = NULL;
$arguments152['onclick'] = NULL;
$arguments152['name'] = NULL;
$arguments152['rel'] = NULL;
$arguments152['rev'] = NULL;
$arguments152['target'] = NULL;
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output159 = '';

$output159 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments160 = array();
$arguments160['identifier'] = 'actions-document-open';
$arguments160['size'] = 'small';
$arguments160['overlay'] = NULL;
$arguments160['state'] = 'default';
$arguments160['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure161 = function() {return NULL;};

$output159 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output159 .= '
									';
return $output159;
};
$viewHelper162 = $self->getViewHelper('$viewHelper162', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper162->setArguments($arguments152);
$viewHelper162->setRenderingContext($renderingContext);
$viewHelper162->setRenderChildrenClosure($renderChildrenClosure158);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output130 .= $viewHelper162->initializeArgumentsAndRender();

$output130 .= '
								</td>

								<td nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$arguments163 = array();
$arguments163['permission'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_user', $renderingContext);
$arguments163['scope'] = 'user';
$arguments163['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure164 = function() {return NULL;};

$output130 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output130 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments165 = array();
$arguments165['partial'] = 'Permission/Ownername';
// Rendering Array
$array166 = array();
$array166['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$array166['userId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_userid', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$arguments167 = array();
$arguments167['array'] = $currentVariableContainer->getOrNull('beUsers');
$arguments167['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_userid', $renderingContext);
$arguments167['subKey'] = 'username';
$renderChildrenClosure168 = function() {return NULL;};
$array166['username'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);
$arguments165['arguments'] = $array166;
$arguments165['section'] = NULL;
$arguments165['optional'] = false;
$renderChildrenClosure169 = function() {return NULL;};

$output130 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments165, $renderChildrenClosure169, $renderingContext);

$output130 .= '
								</td>

								<td nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$arguments170 = array();
$arguments170['permission'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_group', $renderingContext);
$arguments170['scope'] = 'group';
$arguments170['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure171 = function() {return NULL;};

$output130 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output130 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments172 = array();
$arguments172['partial'] = 'Permission/Groupname';
// Rendering Array
$array173 = array();
$array173['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$array173['groupId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_groupid', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$arguments174 = array();
$arguments174['array'] = $currentVariableContainer->getOrNull('beGroups');
$arguments174['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_groupid', $renderingContext);
$arguments174['subKey'] = 'title';
$renderChildrenClosure175 = function() {return NULL;};
$array173['groupname'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);
$arguments172['arguments'] = $array173;
$arguments172['section'] = NULL;
$arguments172['optional'] = false;
$renderChildrenClosure176 = function() {return NULL;};

$output130 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments172, $renderChildrenClosure176, $renderingContext);

$output130 .= '
								</td>

								<td nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$arguments177 = array();
$arguments177['permission'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_everybody', $renderingContext);
$arguments177['scope'] = 'everybody';
$arguments177['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure178 = function() {return NULL;};

$output130 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output130 .= '
								</td>

								<td nowrap="nowrap">
									<span id="el_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments179 = array();
$arguments179['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments179['keepQuotes'] = false;
$arguments179['encoding'] = NULL;
$arguments179['doubleEncode'] = true;
$renderChildrenClosure180 = function() {return NULL;};
$value181 = ($arguments179['value'] !== NULL ? $arguments179['value'] : $renderChildrenClosure180());

$output130 .= (!is_string($value181) ? $value181 : htmlspecialchars($value181, ($arguments179['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments179['encoding'] !== NULL ? $arguments179['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments179['doubleEncode']));

$output130 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments182 = array();
// Rendering Boolean node
$arguments182['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.editlock', $renderingContext));
$arguments182['then'] = NULL;
$arguments182['else'] = NULL;
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output184 = '';

$output184 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments185 = array();
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output187 = '';

$output187 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments188 = array();
$arguments188['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments188['keepQuotes'] = false;
$arguments188['encoding'] = NULL;
$arguments188['doubleEncode'] = true;
$renderChildrenClosure189 = function() {return NULL;};
$value190 = ($arguments188['value'] !== NULL ? $arguments188['value'] : $renderChildrenClosure189());

$output187 .= (!is_string($value190) ? $value190 : htmlspecialchars($value190, ($arguments188['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments188['encoding'] !== NULL ? $arguments188['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments188['doubleEncode']));

$output187 .= '"
													data-lockstate="1"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments191 = array();
$arguments191['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';
$arguments191['id'] = NULL;
$arguments191['default'] = NULL;
$arguments191['htmlEscape'] = NULL;
$arguments191['arguments'] = NULL;
$arguments191['extensionName'] = NULL;
$renderChildrenClosure192 = function() {return NULL;};

$output187 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output187 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments193 = array();
$arguments193['identifier'] = 'actions-lock';
$arguments193['size'] = 'small';
$arguments193['overlay'] = NULL;
$arguments193['state'] = 'default';
$arguments193['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure194 = function() {return NULL;};

$output187 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output187 .= '
												</a>
											';
return $output187;
};

$output184 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output184 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments195 = array();
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output197 = '';

$output197 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments198 = array();
$arguments198['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments198['keepQuotes'] = false;
$arguments198['encoding'] = NULL;
$arguments198['doubleEncode'] = true;
$renderChildrenClosure199 = function() {return NULL;};
$value200 = ($arguments198['value'] !== NULL ? $arguments198['value'] : $renderChildrenClosure199());

$output197 .= (!is_string($value200) ? $value200 : htmlspecialchars($value200, ($arguments198['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments198['encoding'] !== NULL ? $arguments198['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments198['doubleEncode']));

$output197 .= '"
													data-lockstate="0"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments201 = array();
$arguments201['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';
$arguments201['id'] = NULL;
$arguments201['default'] = NULL;
$arguments201['htmlEscape'] = NULL;
$arguments201['arguments'] = NULL;
$arguments201['extensionName'] = NULL;
$renderChildrenClosure202 = function() {return NULL;};

$output197 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output197 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments203 = array();
$arguments203['identifier'] = 'actions-unlock';
$arguments203['size'] = 'small';
$arguments203['overlay'] = NULL;
$arguments203['state'] = 'default';
$arguments203['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure204 = function() {return NULL;};

$output197 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output197 .= '
												</a>
											';
return $output197;
};

$output184 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output184 .= '
										';
return $output184;
};
$arguments182['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output205 = '';

$output205 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments206 = array();
$arguments206['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments206['keepQuotes'] = false;
$arguments206['encoding'] = NULL;
$arguments206['doubleEncode'] = true;
$renderChildrenClosure207 = function() {return NULL;};
$value208 = ($arguments206['value'] !== NULL ? $arguments206['value'] : $renderChildrenClosure207());

$output205 .= (!is_string($value208) ? $value208 : htmlspecialchars($value208, ($arguments206['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments206['encoding'] !== NULL ? $arguments206['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments206['doubleEncode']));

$output205 .= '"
													data-lockstate="1"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments209 = array();
$arguments209['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';
$arguments209['id'] = NULL;
$arguments209['default'] = NULL;
$arguments209['htmlEscape'] = NULL;
$arguments209['arguments'] = NULL;
$arguments209['extensionName'] = NULL;
$renderChildrenClosure210 = function() {return NULL;};

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output205 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments211 = array();
$arguments211['identifier'] = 'actions-lock';
$arguments211['size'] = 'small';
$arguments211['overlay'] = NULL;
$arguments211['state'] = 'default';
$arguments211['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure212 = function() {return NULL;};

$output205 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output205 .= '
												</a>
											';
return $output205;
};
$arguments182['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output213 = '';

$output213 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments214 = array();
$arguments214['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments214['keepQuotes'] = false;
$arguments214['encoding'] = NULL;
$arguments214['doubleEncode'] = true;
$renderChildrenClosure215 = function() {return NULL;};
$value216 = ($arguments214['value'] !== NULL ? $arguments214['value'] : $renderChildrenClosure215());

$output213 .= (!is_string($value216) ? $value216 : htmlspecialchars($value216, ($arguments214['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments214['encoding'] !== NULL ? $arguments214['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments214['doubleEncode']));

$output213 .= '"
													data-lockstate="0"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments217 = array();
$arguments217['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';
$arguments217['id'] = NULL;
$arguments217['default'] = NULL;
$arguments217['htmlEscape'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['extensionName'] = NULL;
$renderChildrenClosure218 = function() {return NULL;};

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output213 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments219 = array();
$arguments219['identifier'] = 'actions-unlock';
$arguments219['size'] = 'small';
$arguments219['overlay'] = NULL;
$arguments219['state'] = 'default';
$arguments219['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure220 = function() {return NULL;};

$output213 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output213 .= '
												</a>
											';
return $output213;
};

$output130 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output130 .= '
									</span>
								</td>
							';
return $output130;
};
$arguments22['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output221 = '';

$output221 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments222 = array();
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									Root page row is rendered
								';
};

$output221 .= '';

$output221 .= '
								<td align="left" nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments224 = array();
$arguments224['value'] = NULL;
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'HTML', $renderingContext);
};

$output221 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output221 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments226 = array();
$arguments226['maxCharacters'] = '20';
$arguments226['append'] = '...';
$arguments226['respectWordBoundaries'] = true;
$arguments226['respectHtml'] = true;
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments228 = array();
$arguments228['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.title', $renderingContext);
$arguments228['keepQuotes'] = false;
$arguments228['encoding'] = NULL;
$arguments228['doubleEncode'] = true;
$renderChildrenClosure229 = function() {return NULL;};
$value230 = ($arguments228['value'] !== NULL ? $arguments228['value'] : $renderChildrenClosure229());
return (!is_string($value230) ? $value230 : htmlspecialchars($value230, ($arguments228['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments228['encoding'] !== NULL ? $arguments228['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments228['doubleEncode']));
};

$output221 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output221 .= '
								</td>
								<td></td>
								<td nowrap="nowrap"></td>
								<td nowrap="nowrap"></td>
								<td nowrap="nowrap"></td>
								<td nowrap="nowrap"></td>
							';
return $output221;
};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
					</tr>
				';
return $output21;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output3 .= '
			</table>
		</div>
	</div>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments231 = array();
$arguments231['value'] = NULL;
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('cshItem');
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output3 .= '

	<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments233 = array();
$arguments233['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Legend';
$arguments233['id'] = NULL;
$arguments233['default'] = NULL;
$arguments233['htmlEscape'] = NULL;
$arguments233['arguments'] = NULL;
$arguments233['extensionName'] = NULL;
$renderChildrenClosure234 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output3 .= ':</h3>
	<div class="beuser-legend">
		<table>
			<tr>
				<td nowrap="nowrap" class="edge"><span><span></span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap"><span class="number">1</span></td>
				<td nowrap="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments235 = array();
$arguments235['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1';
$arguments235['id'] = NULL;
$arguments235['default'] = NULL;
$arguments235['htmlEscape'] = NULL;
$arguments235['arguments'] = NULL;
$arguments235['extensionName'] = NULL;
$renderChildrenClosure236 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output3 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments237 = array();
$arguments237['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1_t';
$arguments237['id'] = NULL;
$arguments237['default'] = NULL;
$arguments237['htmlEscape'] = NULL;
$arguments237['arguments'] = NULL;
$arguments237['extensionName'] = NULL;
$renderChildrenClosure238 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output3 .= '</td>
			</tr>
			<tr>
				<td nowrap="nowrap" class="vr"><span></span></td>
				<td nowrap="nowrap" class="edge"><span><span></span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap"><span class="number">2</span></td>
				<td nowrap="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments239 = array();
$arguments239['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16';
$arguments239['id'] = NULL;
$arguments239['default'] = NULL;
$arguments239['htmlEscape'] = NULL;
$arguments239['arguments'] = NULL;
$arguments239['extensionName'] = NULL;
$renderChildrenClosure240 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output3 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments241 = array();
$arguments241['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16_t';
$arguments241['id'] = NULL;
$arguments241['default'] = NULL;
$arguments241['htmlEscape'] = NULL;
$arguments241['arguments'] = NULL;
$arguments241['extensionName'] = NULL;
$renderChildrenClosure242 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output3 .= '</td>
			</tr>
			<tr>
				<td nowrap="nowrap" class="vr"><span></span></td>
				<td nowrap="nowrap" class="vr"><span></span></td>
				<td nowrap="nowrap" class="edge"><span><span></span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap"><span class="number">3</span></td>
				<td nowrap="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments243 = array();
$arguments243['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2';
$arguments243['id'] = NULL;
$arguments243['default'] = NULL;
$arguments243['htmlEscape'] = NULL;
$arguments243['arguments'] = NULL;
$arguments243['extensionName'] = NULL;
$renderChildrenClosure244 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output3 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments245 = array();
$arguments245['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2_t';
$arguments245['id'] = NULL;
$arguments245['default'] = NULL;
$arguments245['htmlEscape'] = NULL;
$arguments245['arguments'] = NULL;
$arguments245['extensionName'] = NULL;
$renderChildrenClosure246 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output3 .= '</td>
			</tr>
			<tr>
				<td nowrap="nowrap" class="vr"><span></span></td>
				<td nowrap="nowrap" class="vr"><span></span></td>
				<td nowrap="nowrap" class="vr"><span></span></td>
				<td nowrap="nowrap" class="edge"><span><span></span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap"><span class="number">4</span></td>
				<td nowrap="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments247 = array();
$arguments247['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4';
$arguments247['id'] = NULL;
$arguments247['default'] = NULL;
$arguments247['htmlEscape'] = NULL;
$arguments247['arguments'] = NULL;
$arguments247['extensionName'] = NULL;
$renderChildrenClosure248 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output3 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments249 = array();
$arguments249['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4_t';
$arguments249['id'] = NULL;
$arguments249['default'] = NULL;
$arguments249['htmlEscape'] = NULL;
$arguments249['arguments'] = NULL;
$arguments249['extensionName'] = NULL;
$renderChildrenClosure250 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output3 .= '</td>
			</tr>
			<tr>
				<td nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments251 = array();
$arguments251['identifier'] = 'status-status-permission-granted';
$arguments251['size'] = 'small';
$arguments251['overlay'] = NULL;
$arguments251['state'] = 'default';
$arguments251['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure252 = function() {return NULL;};

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output3 .= '</td>
				<td nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments253 = array();
$arguments253['identifier'] = 'status-status-permission-denied';
$arguments253['size'] = 'small';
$arguments253['overlay'] = NULL;
$arguments253['state'] = 'default';
$arguments253['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure254 = function() {return NULL;};

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output3 .= '</td>
				<td nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments255 = array();
$arguments255['identifier'] = 'status-status-permission-granted';
$arguments255['size'] = 'small';
$arguments255['overlay'] = NULL;
$arguments255['state'] = 'default';
$arguments255['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure256 = function() {return NULL;};

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output3 .= '</td>
				<td nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments257 = array();
$arguments257['identifier'] = 'status-status-permission-denied';
$arguments257['size'] = 'small';
$arguments257['overlay'] = NULL;
$arguments257['state'] = 'default';
$arguments257['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure258 = function() {return NULL;};

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output3 .= '</td>
				<td nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments259 = array();
$arguments259['identifier'] = 'status-status-permission-denied';
$arguments259['size'] = 'small';
$arguments259['overlay'] = NULL;
$arguments259['state'] = 'default';
$arguments259['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure260 = function() {return NULL;};

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output3 .= '</td>
				<td nowrap="nowrap"><span class="number">5</span></td>
				<td nowrap="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments261 = array();
$arguments261['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8';
$arguments261['id'] = NULL;
$arguments261['default'] = NULL;
$arguments261['htmlEscape'] = NULL;
$arguments261['arguments'] = NULL;
$arguments261['extensionName'] = NULL;
$renderChildrenClosure262 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output3 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments263 = array();
$arguments263['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8_t';
$arguments263['id'] = NULL;
$arguments263['default'] = NULL;
$arguments263['htmlEscape'] = NULL;
$arguments263['arguments'] = NULL;
$arguments263['extensionName'] = NULL;
$renderChildrenClosure264 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output3 .= '</td>
			</tr>
		</table>
	</div>
	<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments265 = array();
$arguments265['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:def';
$arguments265['id'] = NULL;
$arguments265['default'] = NULL;
$arguments265['htmlEscape'] = NULL;
$arguments265['arguments'] = NULL;
$arguments265['extensionName'] = NULL;
$renderChildrenClosure266 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output3 .= '</p>
	<p>
		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments267 = array();
$arguments267['identifier'] = 'status-status-permission-granted';
$arguments267['size'] = 'small';
$arguments267['overlay'] = NULL;
$arguments267['state'] = 'default';
$arguments267['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure268 = function() {return NULL;};

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output3 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments269 = array();
$arguments269['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:A_Granted';
$arguments269['id'] = NULL;
$arguments269['default'] = NULL;
$arguments269['htmlEscape'] = NULL;
$arguments269['arguments'] = NULL;
$arguments269['extensionName'] = NULL;
$renderChildrenClosure270 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output3 .= '<br/>
		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments271 = array();
$arguments271['identifier'] = 'status-status-permission-denied';
$arguments271['size'] = 'small';
$arguments271['overlay'] = NULL;
$arguments271['state'] = 'default';
$arguments271['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure272 = function() {return NULL;};

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext);

$output3 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments273 = array();
$arguments273['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:A_Denied';
$arguments273['id'] = NULL;
$arguments273['default'] = NULL;
$arguments273['htmlEscape'] = NULL;
$arguments273['arguments'] = NULL;
$arguments273['extensionName'] = NULL;
$renderChildrenClosure274 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);

$output3 .= '
	</p>
';


return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output275 = '';

$output275 .= '



';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments276 = array();
$arguments276['name'] = 'Permission';
$renderChildrenClosure277 = function() {return NULL;};
$viewHelper278 = $self->getViewHelper('$viewHelper278', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper278->setArguments($arguments276);
$viewHelper278->setRenderingContext($renderingContext);
$viewHelper278->setRenderChildrenClosure($renderChildrenClosure277);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output275 .= $viewHelper278->initializeArgumentsAndRender();

$output275 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments279 = array();
$arguments279['name'] = 'headline';
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output281 = '';

$output281 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments282 = array();
$arguments282['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:permissions';
$arguments282['id'] = NULL;
$arguments282['default'] = NULL;
$arguments282['htmlEscape'] = NULL;
$arguments282['arguments'] = NULL;
$arguments282['extensionName'] = NULL;
$renderChildrenClosure283 = function() {return NULL;};

$output281 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output281 .= '</h1>
';
return $output281;
};

$output275 .= '';

$output275 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments284 = array();
$arguments284['name'] = 'content';
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output286 = '';

$output286 .= '

	<div class="form-group">
		<label for="depth">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments287 = array();
$arguments287['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Depth';
$arguments287['id'] = NULL;
$arguments287['default'] = NULL;
$arguments287['htmlEscape'] = NULL;
$arguments287['arguments'] = NULL;
$arguments287['extensionName'] = NULL;
$renderChildrenClosure288 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);

$output286 .= ':</label>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments289 = array();
$arguments289['class'] = 'form-control';
$arguments289['id'] = 'depth';
$arguments289['value'] = $currentVariableContainer->getOrNull('depth');
$arguments289['options'] = $currentVariableContainer->getOrNull('depthOptions');
// Rendering Array
$array290 = array();
$output291 = '';

$output291 .= 'jumpToUrl(\'';

$output291 .= $currentVariableContainer->getOrNull('depthBaseUrl');

$output291 .= '\'.replace(\'__DEPTH__\', this.options[this.selectedIndex].value), this);';
$array290['onchange'] = $output291;
$arguments289['additionalAttributes'] = $array290;
$arguments289['data'] = NULL;
$arguments289['name'] = NULL;
$arguments289['property'] = NULL;
$arguments289['dir'] = NULL;
$arguments289['lang'] = NULL;
$arguments289['style'] = NULL;
$arguments289['title'] = NULL;
$arguments289['accesskey'] = NULL;
$arguments289['tabindex'] = NULL;
$arguments289['onclick'] = NULL;
$arguments289['size'] = NULL;
$arguments289['disabled'] = NULL;
$arguments289['optionValueField'] = NULL;
$arguments289['optionLabelField'] = NULL;
$arguments289['sortByOptionLabel'] = false;
$arguments289['selectAllByDefault'] = false;
$arguments289['errorClass'] = 'f3-form-error';
$arguments289['prependOptionLabel'] = NULL;
$arguments289['prependOptionValue'] = NULL;
$arguments289['multiple'] = false;
$renderChildrenClosure292 = function() {return NULL;};
$viewHelper293 = $self->getViewHelper('$viewHelper293', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper293->setArguments($arguments289);
$viewHelper293->setRenderingContext($renderingContext);
$viewHelper293->setRenderChildrenClosure($renderChildrenClosure292);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output286 .= $viewHelper293->initializeArgumentsAndRender();

$output286 .= '
	</div>

	<div class="panel panel-default panel-space">
		<div class="table-fit">
			<table class="table table-striped table-hover" id="typo3-permissionList">
				<thead>
				<tr>
					<th colspan="2">&nbsp;</th>
					<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments294 = array();
$arguments294['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Owner';
$arguments294['id'] = NULL;
$arguments294['default'] = NULL;
$arguments294['htmlEscape'] = NULL;
$arguments294['arguments'] = NULL;
$arguments294['extensionName'] = NULL;
$renderChildrenClosure295 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output286 .= '</th>
					<th align="center">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments296 = array();
$arguments296['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Group';
$arguments296['id'] = NULL;
$arguments296['default'] = NULL;
$arguments296['htmlEscape'] = NULL;
$arguments296['arguments'] = NULL;
$arguments296['extensionName'] = NULL;
$renderChildrenClosure297 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output286 .= '</th>
					<th align="center">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments298 = array();
$arguments298['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Everybody';
$arguments298['id'] = NULL;
$arguments298['default'] = NULL;
$arguments298['htmlEscape'] = NULL;
$arguments298['arguments'] = NULL;
$arguments298['extensionName'] = NULL;
$renderChildrenClosure299 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext);

$output286 .= '</th>
					<th align="center">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments300 = array();
$arguments300['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock';
$arguments300['id'] = NULL;
$arguments300['default'] = NULL;
$arguments300['htmlEscape'] = NULL;
$arguments300['arguments'] = NULL;
$arguments300['extensionName'] = NULL;
$renderChildrenClosure301 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);

$output286 .= '</th>
				</tr>
				</thead>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments302 = array();
$arguments302['each'] = $currentVariableContainer->getOrNull('viewTree');
$arguments302['as'] = 'data';
$arguments302['key'] = '';
$arguments302['reverse'] = false;
$arguments302['iteration'] = NULL;
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output304 = '';

$output304 .= '
					<tr>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments305 = array();
// Rendering Boolean node
$arguments305['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext));
$arguments305['then'] = NULL;
$arguments305['else'] = NULL;
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output307 = '';

$output307 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments308 = array();
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output310 = '';

$output310 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments311 = array();
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									A "normal" page row is rendered, not the root page
								';
};

$output310 .= '';

$output310 .= '

								<td align="left" nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments313 = array();
$arguments313['action'] = 'edit';
// Rendering Array
$array314 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments315 = array();
// Rendering Boolean node
$arguments315['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row._ORIG_uid', $renderingContext));
$arguments315['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row._ORIG_uid', $renderingContext);
$arguments315['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure316 = function() {return NULL;};
$array314['id'] = TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);
$array314['depth'] = $currentVariableContainer->getOrNull('depth');
$arguments313['arguments'] = $array314;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments317 = array();
$arguments317['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';
$arguments317['id'] = NULL;
$arguments317['default'] = NULL;
$arguments317['htmlEscape'] = NULL;
$arguments317['arguments'] = NULL;
$arguments317['extensionName'] = NULL;
$renderChildrenClosure318 = function() {return NULL;};
$arguments313['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);
$arguments313['additionalAttributes'] = NULL;
$arguments313['data'] = NULL;
$arguments313['controller'] = NULL;
$arguments313['extensionName'] = NULL;
$arguments313['pluginName'] = NULL;
$arguments313['pageUid'] = NULL;
$arguments313['pageType'] = 0;
$arguments313['noCache'] = false;
$arguments313['noCacheHash'] = false;
$arguments313['section'] = '';
$arguments313['format'] = '';
$arguments313['linkAccessRestrictedPages'] = false;
$arguments313['additionalParams'] = array (
);
$arguments313['absolute'] = false;
$arguments313['addQueryString'] = false;
$arguments313['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments313['addQueryStringMethod'] = NULL;
$arguments313['class'] = NULL;
$arguments313['dir'] = NULL;
$arguments313['id'] = NULL;
$arguments313['lang'] = NULL;
$arguments313['style'] = NULL;
$arguments313['accesskey'] = NULL;
$arguments313['tabindex'] = NULL;
$arguments313['onclick'] = NULL;
$arguments313['name'] = NULL;
$arguments313['rel'] = NULL;
$arguments313['rev'] = NULL;
$arguments313['target'] = NULL;
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output320 = '';

$output320 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments321 = array();
$arguments321['value'] = NULL;
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output323 = '';

$output323 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'depthData', $renderingContext);

$output323 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'HTML', $renderingContext);
return $output323;
};

$output320 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output320 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments324 = array();
$arguments324['maxCharacters'] = '20';
$arguments324['append'] = '...';
$arguments324['respectWordBoundaries'] = true;
$arguments324['respectHtml'] = true;
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments326 = array();
$arguments326['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.title', $renderingContext);
$arguments326['keepQuotes'] = false;
$arguments326['encoding'] = NULL;
$arguments326['doubleEncode'] = true;
$renderChildrenClosure327 = function() {return NULL;};
$value328 = ($arguments326['value'] !== NULL ? $arguments326['value'] : $renderChildrenClosure327());
return (!is_string($value328) ? $value328 : htmlspecialchars($value328, ($arguments326['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments326['encoding'] !== NULL ? $arguments326['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments326['doubleEncode']));
};

$output320 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output320 .= '
									';
return $output320;
};
$viewHelper329 = $self->getViewHelper('$viewHelper329', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper329->setArguments($arguments313);
$viewHelper329->setRenderingContext($renderingContext);
$viewHelper329->setRenderChildrenClosure($renderChildrenClosure319);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output310 .= $viewHelper329->initializeArgumentsAndRender();

$output310 .= '
								</td>

								<td>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments330 = array();
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										Edit link is workspace aware: If in ws, link to edit the ws overlay record is rendered
									';
};

$output310 .= '';

$output310 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments332 = array();
$arguments332['action'] = 'edit';
// Rendering Array
$array333 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments334 = array();
// Rendering Boolean node
$arguments334['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row._ORIG_uid', $renderingContext));
$arguments334['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row._ORIG_uid', $renderingContext);
$arguments334['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure335 = function() {return NULL;};
$array333['id'] = TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext);
$array333['depth'] = $currentVariableContainer->getOrNull('depth');
$arguments332['arguments'] = $array333;
$arguments332['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments336 = array();
$arguments336['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';
$arguments336['id'] = NULL;
$arguments336['default'] = NULL;
$arguments336['htmlEscape'] = NULL;
$arguments336['arguments'] = NULL;
$arguments336['extensionName'] = NULL;
$renderChildrenClosure337 = function() {return NULL;};
$arguments332['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments336, $renderChildrenClosure337, $renderingContext);
$arguments332['additionalAttributes'] = NULL;
$arguments332['data'] = NULL;
$arguments332['controller'] = NULL;
$arguments332['extensionName'] = NULL;
$arguments332['pluginName'] = NULL;
$arguments332['pageUid'] = NULL;
$arguments332['pageType'] = 0;
$arguments332['noCache'] = false;
$arguments332['noCacheHash'] = false;
$arguments332['section'] = '';
$arguments332['format'] = '';
$arguments332['linkAccessRestrictedPages'] = false;
$arguments332['additionalParams'] = array (
);
$arguments332['absolute'] = false;
$arguments332['addQueryString'] = false;
$arguments332['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments332['addQueryStringMethod'] = NULL;
$arguments332['dir'] = NULL;
$arguments332['id'] = NULL;
$arguments332['lang'] = NULL;
$arguments332['style'] = NULL;
$arguments332['accesskey'] = NULL;
$arguments332['tabindex'] = NULL;
$arguments332['onclick'] = NULL;
$arguments332['name'] = NULL;
$arguments332['rel'] = NULL;
$arguments332['rev'] = NULL;
$arguments332['target'] = NULL;
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output339 = '';

$output339 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments340 = array();
$arguments340['identifier'] = 'actions-document-open';
$arguments340['size'] = 'small';
$arguments340['overlay'] = NULL;
$arguments340['state'] = 'default';
$arguments340['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure341 = function() {return NULL;};

$output339 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext);

$output339 .= '
									';
return $output339;
};
$viewHelper342 = $self->getViewHelper('$viewHelper342', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper342->setArguments($arguments332);
$viewHelper342->setRenderingContext($renderingContext);
$viewHelper342->setRenderChildrenClosure($renderChildrenClosure338);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output310 .= $viewHelper342->initializeArgumentsAndRender();

$output310 .= '
								</td>

								<td nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$arguments343 = array();
$arguments343['permission'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_user', $renderingContext);
$arguments343['scope'] = 'user';
$arguments343['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure344 = function() {return NULL;};

$output310 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments343, $renderChildrenClosure344, $renderingContext);

$output310 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments345 = array();
$arguments345['partial'] = 'Permission/Ownername';
// Rendering Array
$array346 = array();
$array346['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$array346['userId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_userid', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$arguments347 = array();
$arguments347['array'] = $currentVariableContainer->getOrNull('beUsers');
$arguments347['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_userid', $renderingContext);
$arguments347['subKey'] = 'username';
$renderChildrenClosure348 = function() {return NULL;};
$array346['username'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);
$arguments345['arguments'] = $array346;
$arguments345['section'] = NULL;
$arguments345['optional'] = false;
$renderChildrenClosure349 = function() {return NULL;};

$output310 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments345, $renderChildrenClosure349, $renderingContext);

$output310 .= '
								</td>

								<td nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$arguments350 = array();
$arguments350['permission'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_group', $renderingContext);
$arguments350['scope'] = 'group';
$arguments350['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure351 = function() {return NULL;};

$output310 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext);

$output310 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments352 = array();
$arguments352['partial'] = 'Permission/Groupname';
// Rendering Array
$array353 = array();
$array353['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$array353['groupId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_groupid', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$arguments354 = array();
$arguments354['array'] = $currentVariableContainer->getOrNull('beGroups');
$arguments354['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_groupid', $renderingContext);
$arguments354['subKey'] = 'title';
$renderChildrenClosure355 = function() {return NULL;};
$array353['groupname'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext);
$arguments352['arguments'] = $array353;
$arguments352['section'] = NULL;
$arguments352['optional'] = false;
$renderChildrenClosure356 = function() {return NULL;};

$output310 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments352, $renderChildrenClosure356, $renderingContext);

$output310 .= '
								</td>

								<td nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$arguments357 = array();
$arguments357['permission'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_everybody', $renderingContext);
$arguments357['scope'] = 'everybody';
$arguments357['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure358 = function() {return NULL;};

$output310 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output310 .= '
								</td>

								<td nowrap="nowrap">
									<span id="el_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments359 = array();
$arguments359['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments359['keepQuotes'] = false;
$arguments359['encoding'] = NULL;
$arguments359['doubleEncode'] = true;
$renderChildrenClosure360 = function() {return NULL;};
$value361 = ($arguments359['value'] !== NULL ? $arguments359['value'] : $renderChildrenClosure360());

$output310 .= (!is_string($value361) ? $value361 : htmlspecialchars($value361, ($arguments359['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments359['encoding'] !== NULL ? $arguments359['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments359['doubleEncode']));

$output310 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments362 = array();
// Rendering Boolean node
$arguments362['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.editlock', $renderingContext));
$arguments362['then'] = NULL;
$arguments362['else'] = NULL;
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output364 = '';

$output364 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments365 = array();
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output367 = '';

$output367 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments368 = array();
$arguments368['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments368['keepQuotes'] = false;
$arguments368['encoding'] = NULL;
$arguments368['doubleEncode'] = true;
$renderChildrenClosure369 = function() {return NULL;};
$value370 = ($arguments368['value'] !== NULL ? $arguments368['value'] : $renderChildrenClosure369());

$output367 .= (!is_string($value370) ? $value370 : htmlspecialchars($value370, ($arguments368['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments368['encoding'] !== NULL ? $arguments368['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments368['doubleEncode']));

$output367 .= '"
													data-lockstate="1"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments371 = array();
$arguments371['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';
$arguments371['id'] = NULL;
$arguments371['default'] = NULL;
$arguments371['htmlEscape'] = NULL;
$arguments371['arguments'] = NULL;
$arguments371['extensionName'] = NULL;
$renderChildrenClosure372 = function() {return NULL;};

$output367 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext);

$output367 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments373 = array();
$arguments373['identifier'] = 'actions-lock';
$arguments373['size'] = 'small';
$arguments373['overlay'] = NULL;
$arguments373['state'] = 'default';
$arguments373['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure374 = function() {return NULL;};

$output367 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);

$output367 .= '
												</a>
											';
return $output367;
};

$output364 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext);

$output364 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments375 = array();
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output377 = '';

$output377 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments378 = array();
$arguments378['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments378['keepQuotes'] = false;
$arguments378['encoding'] = NULL;
$arguments378['doubleEncode'] = true;
$renderChildrenClosure379 = function() {return NULL;};
$value380 = ($arguments378['value'] !== NULL ? $arguments378['value'] : $renderChildrenClosure379());

$output377 .= (!is_string($value380) ? $value380 : htmlspecialchars($value380, ($arguments378['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments378['encoding'] !== NULL ? $arguments378['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments378['doubleEncode']));

$output377 .= '"
													data-lockstate="0"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments381 = array();
$arguments381['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';
$arguments381['id'] = NULL;
$arguments381['default'] = NULL;
$arguments381['htmlEscape'] = NULL;
$arguments381['arguments'] = NULL;
$arguments381['extensionName'] = NULL;
$renderChildrenClosure382 = function() {return NULL;};

$output377 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments381, $renderChildrenClosure382, $renderingContext);

$output377 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments383 = array();
$arguments383['identifier'] = 'actions-unlock';
$arguments383['size'] = 'small';
$arguments383['overlay'] = NULL;
$arguments383['state'] = 'default';
$arguments383['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure384 = function() {return NULL;};

$output377 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);

$output377 .= '
												</a>
											';
return $output377;
};

$output364 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext);

$output364 .= '
										';
return $output364;
};
$arguments362['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output385 = '';

$output385 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments386 = array();
$arguments386['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments386['keepQuotes'] = false;
$arguments386['encoding'] = NULL;
$arguments386['doubleEncode'] = true;
$renderChildrenClosure387 = function() {return NULL;};
$value388 = ($arguments386['value'] !== NULL ? $arguments386['value'] : $renderChildrenClosure387());

$output385 .= (!is_string($value388) ? $value388 : htmlspecialchars($value388, ($arguments386['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments386['encoding'] !== NULL ? $arguments386['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments386['doubleEncode']));

$output385 .= '"
													data-lockstate="1"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments389 = array();
$arguments389['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';
$arguments389['id'] = NULL;
$arguments389['default'] = NULL;
$arguments389['htmlEscape'] = NULL;
$arguments389['arguments'] = NULL;
$arguments389['extensionName'] = NULL;
$renderChildrenClosure390 = function() {return NULL;};

$output385 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);

$output385 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments391 = array();
$arguments391['identifier'] = 'actions-lock';
$arguments391['size'] = 'small';
$arguments391['overlay'] = NULL;
$arguments391['state'] = 'default';
$arguments391['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure392 = function() {return NULL;};

$output385 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext);

$output385 .= '
												</a>
											';
return $output385;
};
$arguments362['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output393 = '';

$output393 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments394 = array();
$arguments394['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments394['keepQuotes'] = false;
$arguments394['encoding'] = NULL;
$arguments394['doubleEncode'] = true;
$renderChildrenClosure395 = function() {return NULL;};
$value396 = ($arguments394['value'] !== NULL ? $arguments394['value'] : $renderChildrenClosure395());

$output393 .= (!is_string($value396) ? $value396 : htmlspecialchars($value396, ($arguments394['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments394['encoding'] !== NULL ? $arguments394['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments394['doubleEncode']));

$output393 .= '"
													data-lockstate="0"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments397 = array();
$arguments397['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';
$arguments397['id'] = NULL;
$arguments397['default'] = NULL;
$arguments397['htmlEscape'] = NULL;
$arguments397['arguments'] = NULL;
$arguments397['extensionName'] = NULL;
$renderChildrenClosure398 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output393 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments399 = array();
$arguments399['identifier'] = 'actions-unlock';
$arguments399['size'] = 'small';
$arguments399['overlay'] = NULL;
$arguments399['state'] = 'default';
$arguments399['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure400 = function() {return NULL;};

$output393 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext);

$output393 .= '
												</a>
											';
return $output393;
};

$output310 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);

$output310 .= '
									</span>
								</td>
							';
return $output310;
};

$output307 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output307 .= '

							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments401 = array();
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output403 = '';

$output403 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments404 = array();
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									Root page row is rendered
								';
};

$output403 .= '';

$output403 .= '
								<td align="left" nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments406 = array();
$arguments406['value'] = NULL;
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'HTML', $renderingContext);
};

$output403 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext);

$output403 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments408 = array();
$arguments408['maxCharacters'] = '20';
$arguments408['append'] = '...';
$arguments408['respectWordBoundaries'] = true;
$arguments408['respectHtml'] = true;
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments410 = array();
$arguments410['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.title', $renderingContext);
$arguments410['keepQuotes'] = false;
$arguments410['encoding'] = NULL;
$arguments410['doubleEncode'] = true;
$renderChildrenClosure411 = function() {return NULL;};
$value412 = ($arguments410['value'] !== NULL ? $arguments410['value'] : $renderChildrenClosure411());
return (!is_string($value412) ? $value412 : htmlspecialchars($value412, ($arguments410['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments410['encoding'] !== NULL ? $arguments410['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments410['doubleEncode']));
};

$output403 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output403 .= '
								</td>
								<td></td>
								<td nowrap="nowrap"></td>
								<td nowrap="nowrap"></td>
								<td nowrap="nowrap"></td>
								<td nowrap="nowrap"></td>
							';
return $output403;
};

$output307 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext);

$output307 .= '
						';
return $output307;
};
$arguments305['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output413 = '';

$output413 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments414 = array();
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									A "normal" page row is rendered, not the root page
								';
};

$output413 .= '';

$output413 .= '

								<td align="left" nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments416 = array();
$arguments416['action'] = 'edit';
// Rendering Array
$array417 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments418 = array();
// Rendering Boolean node
$arguments418['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row._ORIG_uid', $renderingContext));
$arguments418['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row._ORIG_uid', $renderingContext);
$arguments418['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure419 = function() {return NULL;};
$array417['id'] = TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext);
$array417['depth'] = $currentVariableContainer->getOrNull('depth');
$arguments416['arguments'] = $array417;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments420 = array();
$arguments420['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';
$arguments420['id'] = NULL;
$arguments420['default'] = NULL;
$arguments420['htmlEscape'] = NULL;
$arguments420['arguments'] = NULL;
$arguments420['extensionName'] = NULL;
$renderChildrenClosure421 = function() {return NULL;};
$arguments416['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);
$arguments416['additionalAttributes'] = NULL;
$arguments416['data'] = NULL;
$arguments416['controller'] = NULL;
$arguments416['extensionName'] = NULL;
$arguments416['pluginName'] = NULL;
$arguments416['pageUid'] = NULL;
$arguments416['pageType'] = 0;
$arguments416['noCache'] = false;
$arguments416['noCacheHash'] = false;
$arguments416['section'] = '';
$arguments416['format'] = '';
$arguments416['linkAccessRestrictedPages'] = false;
$arguments416['additionalParams'] = array (
);
$arguments416['absolute'] = false;
$arguments416['addQueryString'] = false;
$arguments416['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments416['addQueryStringMethod'] = NULL;
$arguments416['class'] = NULL;
$arguments416['dir'] = NULL;
$arguments416['id'] = NULL;
$arguments416['lang'] = NULL;
$arguments416['style'] = NULL;
$arguments416['accesskey'] = NULL;
$arguments416['tabindex'] = NULL;
$arguments416['onclick'] = NULL;
$arguments416['name'] = NULL;
$arguments416['rel'] = NULL;
$arguments416['rev'] = NULL;
$arguments416['target'] = NULL;
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output423 = '';

$output423 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments424 = array();
$arguments424['value'] = NULL;
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output426 = '';

$output426 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'depthData', $renderingContext);

$output426 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'HTML', $renderingContext);
return $output426;
};

$output423 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments424, $renderChildrenClosure425, $renderingContext);

$output423 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments427 = array();
$arguments427['maxCharacters'] = '20';
$arguments427['append'] = '...';
$arguments427['respectWordBoundaries'] = true;
$arguments427['respectHtml'] = true;
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments429 = array();
$arguments429['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.title', $renderingContext);
$arguments429['keepQuotes'] = false;
$arguments429['encoding'] = NULL;
$arguments429['doubleEncode'] = true;
$renderChildrenClosure430 = function() {return NULL;};
$value431 = ($arguments429['value'] !== NULL ? $arguments429['value'] : $renderChildrenClosure430());
return (!is_string($value431) ? $value431 : htmlspecialchars($value431, ($arguments429['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments429['encoding'] !== NULL ? $arguments429['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments429['doubleEncode']));
};

$output423 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext);

$output423 .= '
									';
return $output423;
};
$viewHelper432 = $self->getViewHelper('$viewHelper432', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper432->setArguments($arguments416);
$viewHelper432->setRenderingContext($renderingContext);
$viewHelper432->setRenderChildrenClosure($renderChildrenClosure422);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output413 .= $viewHelper432->initializeArgumentsAndRender();

$output413 .= '
								</td>

								<td>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments433 = array();
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										Edit link is workspace aware: If in ws, link to edit the ws overlay record is rendered
									';
};

$output413 .= '';

$output413 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments435 = array();
$arguments435['action'] = 'edit';
// Rendering Array
$array436 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments437 = array();
// Rendering Boolean node
$arguments437['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row._ORIG_uid', $renderingContext));
$arguments437['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row._ORIG_uid', $renderingContext);
$arguments437['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure438 = function() {return NULL;};
$array436['id'] = TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments437, $renderChildrenClosure438, $renderingContext);
$array436['depth'] = $currentVariableContainer->getOrNull('depth');
$arguments435['arguments'] = $array436;
$arguments435['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments439 = array();
$arguments439['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';
$arguments439['id'] = NULL;
$arguments439['default'] = NULL;
$arguments439['htmlEscape'] = NULL;
$arguments439['arguments'] = NULL;
$arguments439['extensionName'] = NULL;
$renderChildrenClosure440 = function() {return NULL;};
$arguments435['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);
$arguments435['additionalAttributes'] = NULL;
$arguments435['data'] = NULL;
$arguments435['controller'] = NULL;
$arguments435['extensionName'] = NULL;
$arguments435['pluginName'] = NULL;
$arguments435['pageUid'] = NULL;
$arguments435['pageType'] = 0;
$arguments435['noCache'] = false;
$arguments435['noCacheHash'] = false;
$arguments435['section'] = '';
$arguments435['format'] = '';
$arguments435['linkAccessRestrictedPages'] = false;
$arguments435['additionalParams'] = array (
);
$arguments435['absolute'] = false;
$arguments435['addQueryString'] = false;
$arguments435['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments435['addQueryStringMethod'] = NULL;
$arguments435['dir'] = NULL;
$arguments435['id'] = NULL;
$arguments435['lang'] = NULL;
$arguments435['style'] = NULL;
$arguments435['accesskey'] = NULL;
$arguments435['tabindex'] = NULL;
$arguments435['onclick'] = NULL;
$arguments435['name'] = NULL;
$arguments435['rel'] = NULL;
$arguments435['rev'] = NULL;
$arguments435['target'] = NULL;
$renderChildrenClosure441 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output442 = '';

$output442 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments443 = array();
$arguments443['identifier'] = 'actions-document-open';
$arguments443['size'] = 'small';
$arguments443['overlay'] = NULL;
$arguments443['state'] = 'default';
$arguments443['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure444 = function() {return NULL;};

$output442 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext);

$output442 .= '
									';
return $output442;
};
$viewHelper445 = $self->getViewHelper('$viewHelper445', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper445->setArguments($arguments435);
$viewHelper445->setRenderingContext($renderingContext);
$viewHelper445->setRenderChildrenClosure($renderChildrenClosure441);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output413 .= $viewHelper445->initializeArgumentsAndRender();

$output413 .= '
								</td>

								<td nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$arguments446 = array();
$arguments446['permission'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_user', $renderingContext);
$arguments446['scope'] = 'user';
$arguments446['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure447 = function() {return NULL;};

$output413 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments446, $renderChildrenClosure447, $renderingContext);

$output413 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments448 = array();
$arguments448['partial'] = 'Permission/Ownername';
// Rendering Array
$array449 = array();
$array449['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$array449['userId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_userid', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$arguments450 = array();
$arguments450['array'] = $currentVariableContainer->getOrNull('beUsers');
$arguments450['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_userid', $renderingContext);
$arguments450['subKey'] = 'username';
$renderChildrenClosure451 = function() {return NULL;};
$array449['username'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);
$arguments448['arguments'] = $array449;
$arguments448['section'] = NULL;
$arguments448['optional'] = false;
$renderChildrenClosure452 = function() {return NULL;};

$output413 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments448, $renderChildrenClosure452, $renderingContext);

$output413 .= '
								</td>

								<td nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$arguments453 = array();
$arguments453['permission'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_group', $renderingContext);
$arguments453['scope'] = 'group';
$arguments453['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure454 = function() {return NULL;};

$output413 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);

$output413 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments455 = array();
$arguments455['partial'] = 'Permission/Groupname';
// Rendering Array
$array456 = array();
$array456['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$array456['groupId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_groupid', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$arguments457 = array();
$arguments457['array'] = $currentVariableContainer->getOrNull('beGroups');
$arguments457['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_groupid', $renderingContext);
$arguments457['subKey'] = 'title';
$renderChildrenClosure458 = function() {return NULL;};
$array456['groupname'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext);
$arguments455['arguments'] = $array456;
$arguments455['section'] = NULL;
$arguments455['optional'] = false;
$renderChildrenClosure459 = function() {return NULL;};

$output413 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments455, $renderChildrenClosure459, $renderingContext);

$output413 .= '
								</td>

								<td nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$arguments460 = array();
$arguments460['permission'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.perms_everybody', $renderingContext);
$arguments460['scope'] = 'everybody';
$arguments460['pageId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$renderChildrenClosure461 = function() {return NULL;};

$output413 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext);

$output413 .= '
								</td>

								<td nowrap="nowrap">
									<span id="el_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments462 = array();
$arguments462['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments462['keepQuotes'] = false;
$arguments462['encoding'] = NULL;
$arguments462['doubleEncode'] = true;
$renderChildrenClosure463 = function() {return NULL;};
$value464 = ($arguments462['value'] !== NULL ? $arguments462['value'] : $renderChildrenClosure463());

$output413 .= (!is_string($value464) ? $value464 : htmlspecialchars($value464, ($arguments462['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments462['encoding'] !== NULL ? $arguments462['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments462['doubleEncode']));

$output413 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments465 = array();
// Rendering Boolean node
$arguments465['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.editlock', $renderingContext));
$arguments465['then'] = NULL;
$arguments465['else'] = NULL;
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output467 = '';

$output467 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments468 = array();
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output470 = '';

$output470 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments471 = array();
$arguments471['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments471['keepQuotes'] = false;
$arguments471['encoding'] = NULL;
$arguments471['doubleEncode'] = true;
$renderChildrenClosure472 = function() {return NULL;};
$value473 = ($arguments471['value'] !== NULL ? $arguments471['value'] : $renderChildrenClosure472());

$output470 .= (!is_string($value473) ? $value473 : htmlspecialchars($value473, ($arguments471['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments471['encoding'] !== NULL ? $arguments471['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments471['doubleEncode']));

$output470 .= '"
													data-lockstate="1"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments474 = array();
$arguments474['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';
$arguments474['id'] = NULL;
$arguments474['default'] = NULL;
$arguments474['htmlEscape'] = NULL;
$arguments474['arguments'] = NULL;
$arguments474['extensionName'] = NULL;
$renderChildrenClosure475 = function() {return NULL;};

$output470 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext);

$output470 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments476 = array();
$arguments476['identifier'] = 'actions-lock';
$arguments476['size'] = 'small';
$arguments476['overlay'] = NULL;
$arguments476['state'] = 'default';
$arguments476['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure477 = function() {return NULL;};

$output470 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext);

$output470 .= '
												</a>
											';
return $output470;
};

$output467 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);

$output467 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments478 = array();
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output480 = '';

$output480 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments481 = array();
$arguments481['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments481['keepQuotes'] = false;
$arguments481['encoding'] = NULL;
$arguments481['doubleEncode'] = true;
$renderChildrenClosure482 = function() {return NULL;};
$value483 = ($arguments481['value'] !== NULL ? $arguments481['value'] : $renderChildrenClosure482());

$output480 .= (!is_string($value483) ? $value483 : htmlspecialchars($value483, ($arguments481['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments481['encoding'] !== NULL ? $arguments481['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments481['doubleEncode']));

$output480 .= '"
													data-lockstate="0"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments484 = array();
$arguments484['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';
$arguments484['id'] = NULL;
$arguments484['default'] = NULL;
$arguments484['htmlEscape'] = NULL;
$arguments484['arguments'] = NULL;
$arguments484['extensionName'] = NULL;
$renderChildrenClosure485 = function() {return NULL;};

$output480 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext);

$output480 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments486 = array();
$arguments486['identifier'] = 'actions-unlock';
$arguments486['size'] = 'small';
$arguments486['overlay'] = NULL;
$arguments486['state'] = 'default';
$arguments486['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure487 = function() {return NULL;};

$output480 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output480 .= '
												</a>
											';
return $output480;
};

$output467 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output467 .= '
										';
return $output467;
};
$arguments465['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output488 = '';

$output488 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments489 = array();
$arguments489['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments489['keepQuotes'] = false;
$arguments489['encoding'] = NULL;
$arguments489['doubleEncode'] = true;
$renderChildrenClosure490 = function() {return NULL;};
$value491 = ($arguments489['value'] !== NULL ? $arguments489['value'] : $renderChildrenClosure490());

$output488 .= (!is_string($value491) ? $value491 : htmlspecialchars($value491, ($arguments489['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments489['encoding'] !== NULL ? $arguments489['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments489['doubleEncode']));

$output488 .= '"
													data-lockstate="1"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments492 = array();
$arguments492['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';
$arguments492['id'] = NULL;
$arguments492['default'] = NULL;
$arguments492['htmlEscape'] = NULL;
$arguments492['arguments'] = NULL;
$arguments492['extensionName'] = NULL;
$renderChildrenClosure493 = function() {return NULL;};

$output488 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments492, $renderChildrenClosure493, $renderingContext);

$output488 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments494 = array();
$arguments494['identifier'] = 'actions-lock';
$arguments494['size'] = 'small';
$arguments494['overlay'] = NULL;
$arguments494['state'] = 'default';
$arguments494['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure495 = function() {return NULL;};

$output488 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments494, $renderChildrenClosure495, $renderingContext);

$output488 .= '
												</a>
											';
return $output488;
};
$arguments465['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output496 = '';

$output496 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments497 = array();
$arguments497['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.uid', $renderingContext);
$arguments497['keepQuotes'] = false;
$arguments497['encoding'] = NULL;
$arguments497['doubleEncode'] = true;
$renderChildrenClosure498 = function() {return NULL;};
$value499 = ($arguments497['value'] !== NULL ? $arguments497['value'] : $renderChildrenClosure498());

$output496 .= (!is_string($value499) ? $value499 : htmlspecialchars($value499, ($arguments497['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments497['encoding'] !== NULL ? $arguments497['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments497['doubleEncode']));

$output496 .= '"
													data-lockstate="0"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments500 = array();
$arguments500['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';
$arguments500['id'] = NULL;
$arguments500['default'] = NULL;
$arguments500['htmlEscape'] = NULL;
$arguments500['arguments'] = NULL;
$arguments500['extensionName'] = NULL;
$renderChildrenClosure501 = function() {return NULL;};

$output496 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext);

$output496 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments502 = array();
$arguments502['identifier'] = 'actions-unlock';
$arguments502['size'] = 'small';
$arguments502['overlay'] = NULL;
$arguments502['state'] = 'default';
$arguments502['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure503 = function() {return NULL;};

$output496 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments502, $renderChildrenClosure503, $renderingContext);

$output496 .= '
												</a>
											';
return $output496;
};

$output413 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext);

$output413 .= '
									</span>
								</td>
							';
return $output413;
};
$arguments305['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output504 = '';

$output504 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments505 = array();
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									Root page row is rendered
								';
};

$output504 .= '';

$output504 .= '
								<td align="left" nowrap="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments507 = array();
$arguments507['value'] = NULL;
$renderChildrenClosure508 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'HTML', $renderingContext);
};

$output504 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments507, $renderChildrenClosure508, $renderingContext);

$output504 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments509 = array();
$arguments509['maxCharacters'] = '20';
$arguments509['append'] = '...';
$arguments509['respectWordBoundaries'] = true;
$arguments509['respectHtml'] = true;
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments511 = array();
$arguments511['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'row.title', $renderingContext);
$arguments511['keepQuotes'] = false;
$arguments511['encoding'] = NULL;
$arguments511['doubleEncode'] = true;
$renderChildrenClosure512 = function() {return NULL;};
$value513 = ($arguments511['value'] !== NULL ? $arguments511['value'] : $renderChildrenClosure512());
return (!is_string($value513) ? $value513 : htmlspecialchars($value513, ($arguments511['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments511['encoding'] !== NULL ? $arguments511['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments511['doubleEncode']));
};

$output504 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext);

$output504 .= '
								</td>
								<td></td>
								<td nowrap="nowrap"></td>
								<td nowrap="nowrap"></td>
								<td nowrap="nowrap"></td>
								<td nowrap="nowrap"></td>
							';
return $output504;
};

$output304 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output304 .= '
					</tr>
				';
return $output304;
};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output286 .= '
			</table>
		</div>
	</div>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments514 = array();
$arguments514['value'] = NULL;
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('cshItem');
};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext);

$output286 .= '

	<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments516 = array();
$arguments516['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Legend';
$arguments516['id'] = NULL;
$arguments516['default'] = NULL;
$arguments516['htmlEscape'] = NULL;
$arguments516['arguments'] = NULL;
$arguments516['extensionName'] = NULL;
$renderChildrenClosure517 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments516, $renderChildrenClosure517, $renderingContext);

$output286 .= ':</h3>
	<div class="beuser-legend">
		<table>
			<tr>
				<td nowrap="nowrap" class="edge"><span><span></span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap"><span class="number">1</span></td>
				<td nowrap="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments518 = array();
$arguments518['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1';
$arguments518['id'] = NULL;
$arguments518['default'] = NULL;
$arguments518['htmlEscape'] = NULL;
$arguments518['arguments'] = NULL;
$arguments518['extensionName'] = NULL;
$renderChildrenClosure519 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments518, $renderChildrenClosure519, $renderingContext);

$output286 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments520 = array();
$arguments520['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1_t';
$arguments520['id'] = NULL;
$arguments520['default'] = NULL;
$arguments520['htmlEscape'] = NULL;
$arguments520['arguments'] = NULL;
$arguments520['extensionName'] = NULL;
$renderChildrenClosure521 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext);

$output286 .= '</td>
			</tr>
			<tr>
				<td nowrap="nowrap" class="vr"><span></span></td>
				<td nowrap="nowrap" class="edge"><span><span></span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap"><span class="number">2</span></td>
				<td nowrap="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments522 = array();
$arguments522['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16';
$arguments522['id'] = NULL;
$arguments522['default'] = NULL;
$arguments522['htmlEscape'] = NULL;
$arguments522['arguments'] = NULL;
$arguments522['extensionName'] = NULL;
$renderChildrenClosure523 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments522, $renderChildrenClosure523, $renderingContext);

$output286 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments524 = array();
$arguments524['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16_t';
$arguments524['id'] = NULL;
$arguments524['default'] = NULL;
$arguments524['htmlEscape'] = NULL;
$arguments524['arguments'] = NULL;
$arguments524['extensionName'] = NULL;
$renderChildrenClosure525 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments524, $renderChildrenClosure525, $renderingContext);

$output286 .= '</td>
			</tr>
			<tr>
				<td nowrap="nowrap" class="vr"><span></span></td>
				<td nowrap="nowrap" class="vr"><span></span></td>
				<td nowrap="nowrap" class="edge"><span><span></span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap"><span class="number">3</span></td>
				<td nowrap="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments526 = array();
$arguments526['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2';
$arguments526['id'] = NULL;
$arguments526['default'] = NULL;
$arguments526['htmlEscape'] = NULL;
$arguments526['arguments'] = NULL;
$arguments526['extensionName'] = NULL;
$renderChildrenClosure527 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext);

$output286 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments528 = array();
$arguments528['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2_t';
$arguments528['id'] = NULL;
$arguments528['default'] = NULL;
$arguments528['htmlEscape'] = NULL;
$arguments528['arguments'] = NULL;
$arguments528['extensionName'] = NULL;
$renderChildrenClosure529 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments528, $renderChildrenClosure529, $renderingContext);

$output286 .= '</td>
			</tr>
			<tr>
				<td nowrap="nowrap" class="vr"><span></span></td>
				<td nowrap="nowrap" class="vr"><span></span></td>
				<td nowrap="nowrap" class="vr"><span></span></td>
				<td nowrap="nowrap" class="edge"><span><span></span></span></td>
				<td nowrap="nowrap" class="hr"><span></span></td>
				<td nowrap="nowrap"><span class="number">4</span></td>
				<td nowrap="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments530 = array();
$arguments530['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4';
$arguments530['id'] = NULL;
$arguments530['default'] = NULL;
$arguments530['htmlEscape'] = NULL;
$arguments530['arguments'] = NULL;
$arguments530['extensionName'] = NULL;
$renderChildrenClosure531 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments530, $renderChildrenClosure531, $renderingContext);

$output286 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments532 = array();
$arguments532['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4_t';
$arguments532['id'] = NULL;
$arguments532['default'] = NULL;
$arguments532['htmlEscape'] = NULL;
$arguments532['arguments'] = NULL;
$arguments532['extensionName'] = NULL;
$renderChildrenClosure533 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments532, $renderChildrenClosure533, $renderingContext);

$output286 .= '</td>
			</tr>
			<tr>
				<td nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments534 = array();
$arguments534['identifier'] = 'status-status-permission-granted';
$arguments534['size'] = 'small';
$arguments534['overlay'] = NULL;
$arguments534['state'] = 'default';
$arguments534['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure535 = function() {return NULL;};

$output286 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext);

$output286 .= '</td>
				<td nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments536 = array();
$arguments536['identifier'] = 'status-status-permission-denied';
$arguments536['size'] = 'small';
$arguments536['overlay'] = NULL;
$arguments536['state'] = 'default';
$arguments536['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure537 = function() {return NULL;};

$output286 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext);

$output286 .= '</td>
				<td nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments538 = array();
$arguments538['identifier'] = 'status-status-permission-granted';
$arguments538['size'] = 'small';
$arguments538['overlay'] = NULL;
$arguments538['state'] = 'default';
$arguments538['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure539 = function() {return NULL;};

$output286 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments538, $renderChildrenClosure539, $renderingContext);

$output286 .= '</td>
				<td nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments540 = array();
$arguments540['identifier'] = 'status-status-permission-denied';
$arguments540['size'] = 'small';
$arguments540['overlay'] = NULL;
$arguments540['state'] = 'default';
$arguments540['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure541 = function() {return NULL;};

$output286 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments540, $renderChildrenClosure541, $renderingContext);

$output286 .= '</td>
				<td nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments542 = array();
$arguments542['identifier'] = 'status-status-permission-denied';
$arguments542['size'] = 'small';
$arguments542['overlay'] = NULL;
$arguments542['state'] = 'default';
$arguments542['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure543 = function() {return NULL;};

$output286 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments542, $renderChildrenClosure543, $renderingContext);

$output286 .= '</td>
				<td nowrap="nowrap"><span class="number">5</span></td>
				<td nowrap="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments544 = array();
$arguments544['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8';
$arguments544['id'] = NULL;
$arguments544['default'] = NULL;
$arguments544['htmlEscape'] = NULL;
$arguments544['arguments'] = NULL;
$arguments544['extensionName'] = NULL;
$renderChildrenClosure545 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext);

$output286 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments546 = array();
$arguments546['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8_t';
$arguments546['id'] = NULL;
$arguments546['default'] = NULL;
$arguments546['htmlEscape'] = NULL;
$arguments546['arguments'] = NULL;
$arguments546['extensionName'] = NULL;
$renderChildrenClosure547 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments546, $renderChildrenClosure547, $renderingContext);

$output286 .= '</td>
			</tr>
		</table>
	</div>
	<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments548 = array();
$arguments548['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:def';
$arguments548['id'] = NULL;
$arguments548['default'] = NULL;
$arguments548['htmlEscape'] = NULL;
$arguments548['arguments'] = NULL;
$arguments548['extensionName'] = NULL;
$renderChildrenClosure549 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments548, $renderChildrenClosure549, $renderingContext);

$output286 .= '</p>
	<p>
		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments550 = array();
$arguments550['identifier'] = 'status-status-permission-granted';
$arguments550['size'] = 'small';
$arguments550['overlay'] = NULL;
$arguments550['state'] = 'default';
$arguments550['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure551 = function() {return NULL;};

$output286 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments550, $renderChildrenClosure551, $renderingContext);

$output286 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments552 = array();
$arguments552['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:A_Granted';
$arguments552['id'] = NULL;
$arguments552['default'] = NULL;
$arguments552['htmlEscape'] = NULL;
$arguments552['arguments'] = NULL;
$arguments552['extensionName'] = NULL;
$renderChildrenClosure553 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments552, $renderChildrenClosure553, $renderingContext);

$output286 .= '<br/>
		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments554 = array();
$arguments554['identifier'] = 'status-status-permission-denied';
$arguments554['size'] = 'small';
$arguments554['overlay'] = NULL;
$arguments554['state'] = 'default';
$arguments554['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure555 = function() {return NULL;};

$output286 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments554, $renderChildrenClosure555, $renderingContext);

$output286 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments556 = array();
$arguments556['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:A_Denied';
$arguments556['id'] = NULL;
$arguments556['default'] = NULL;
$arguments556['htmlEscape'] = NULL;
$arguments556['arguments'] = NULL;
$arguments556['extensionName'] = NULL;
$renderChildrenClosure557 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments556, $renderChildrenClosure557, $renderingContext);

$output286 .= '
	</p>
';
return $output286;
};

$output275 .= '';

$output275 .= '
';


return $output275;
}


}
#1571147016    170310    