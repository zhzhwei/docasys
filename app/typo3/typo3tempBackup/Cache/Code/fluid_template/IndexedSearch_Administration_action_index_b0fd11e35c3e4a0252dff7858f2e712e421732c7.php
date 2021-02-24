<?php
class FluidCache_IndexedSearch_Administration_action_index_b0fd11e35c3e4a0252dff7858f2e712e421732c7 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Administration';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	<p class="lead">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'administration.index.description';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '</p>

	<div class="row">
		<div class="col-md-6">
			<h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments3 = array();
$arguments3['key'] = 'administration.statistics.header';
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['htmlEscape'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '</h4>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments5 = array();
$arguments5['key'] = 'administration.statistics.name';
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['htmlEscape'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$renderChildrenClosure6 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7 = array();
$arguments7['key'] = 'administration.statistics.count';
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '</th>
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments9 = array();
$arguments9['each'] = $currentVariableContainer->getOrNull('records');
$arguments9['as'] = 'count';
$arguments9['key'] = 'name';
$arguments9['reverse'] = false;
$arguments9['iteration'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
						<tr>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments12 = array();
$arguments12['value'] = $currentVariableContainer->getOrNull('name');
$arguments12['keepQuotes'] = false;
$arguments12['encoding'] = NULL;
$arguments12['doubleEncode'] = true;
$renderChildrenClosure13 = function() {return NULL;};
$value14 = ($arguments12['value'] !== NULL ? $arguments12['value'] : $renderChildrenClosure13());

$output11 .= (!is_string($value14) ? $value14 : htmlspecialchars($value14, ($arguments12['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments12['encoding'] !== NULL ? $arguments12['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments12['doubleEncode']));

$output11 .= '</td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments15 = array();
$arguments15['value'] = $currentVariableContainer->getOrNull('count');
$arguments15['keepQuotes'] = false;
$arguments15['encoding'] = NULL;
$arguments15['doubleEncode'] = true;
$renderChildrenClosure16 = function() {return NULL;};
$value17 = ($arguments15['value'] !== NULL ? $arguments15['value'] : $renderChildrenClosure16());

$output11 .= (!is_string($value17) ? $value17 : htmlspecialchars($value17, ($arguments15['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments15['encoding'] !== NULL ? $arguments15['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments15['doubleEncode']));

$output11 .= '</td>
						</tr>
					';
return $output11;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
				</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments18 = array();
$arguments18['key'] = 'administration.statistics.headerTypes';
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['htmlEscape'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output0 .= '</h4>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments20 = array();
$arguments20['key'] = 'administration.statistics.name';
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['htmlEscape'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$renderChildrenClosure21 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments22 = array();
$arguments22['key'] = 'administration.statistics.count';
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['htmlEscape'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$renderChildrenClosure23 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output0 .= '</th>
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments24 = array();
$arguments24['each'] = $currentVariableContainer->getOrNull('phash');
$arguments24['as'] = 'data';
$arguments24['key'] = '';
$arguments24['reverse'] = false;
$arguments24['iteration'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output26 = '';

$output26 .= '
						<tr>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments27 = array();
$arguments27['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'name', $renderingContext);
$arguments27['keepQuotes'] = false;
$arguments27['encoding'] = NULL;
$arguments27['doubleEncode'] = true;
$renderChildrenClosure28 = function() {return NULL;};
$value29 = ($arguments27['value'] !== NULL ? $arguments27['value'] : $renderChildrenClosure28());

$output26 .= (!is_string($value29) ? $value29 : htmlspecialchars($value29, ($arguments27['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments27['encoding'] !== NULL ? $arguments27['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments27['doubleEncode']));

$output26 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments30 = array();
$arguments30['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'type', $renderingContext);
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = NULL;
$arguments30['doubleEncode'] = true;
$renderChildrenClosure31 = function() {return NULL;};
$value32 = ($arguments30['value'] !== NULL ? $arguments30['value'] : $renderChildrenClosure31());

$output26 .= (!is_string($value32) ? $value32 : htmlspecialchars($value32, ($arguments30['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments30['encoding'] !== NULL ? $arguments30['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments30['doubleEncode']));

$output26 .= ')</td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments33 = array();
$arguments33['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'count', $renderingContext);
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = NULL;
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() {return NULL;};
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());

$output26 .= (!is_string($value35) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments33['encoding'] !== NULL ? $arguments33['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments33['doubleEncode']));

$output26 .= ' / ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments36 = array();
$arguments36['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uniqueCount', $renderingContext);
$arguments36['keepQuotes'] = false;
$arguments36['encoding'] = NULL;
$arguments36['doubleEncode'] = true;
$renderChildrenClosure37 = function() {return NULL;};
$value38 = ($arguments36['value'] !== NULL ? $arguments36['value'] : $renderChildrenClosure37());

$output26 .= (!is_string($value38) ? $value38 : htmlspecialchars($value38, ($arguments36['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments36['encoding'] !== NULL ? $arguments36['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments36['doubleEncode']));

$output26 .= '</td>
						</tr>
					';
return $output26;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output0 .= '
				</tbody>
			</table>
		</div>
	</div>

	<h3>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments39 = array();
$arguments39['key'] = 'administration.statistics.mostSearched.title';
$arguments39['id'] = NULL;
$arguments39['default'] = NULL;
$arguments39['htmlEscape'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
$renderChildrenClosure40 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output0 .= '
	</h3>
	<p>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments41 = array();
$arguments41['key'] = 'administration.statistics.mostSearched.description';
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['htmlEscape'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$renderChildrenClosure42 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output0 .= '
	</p>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments43 = array();
// Rendering Boolean node
$arguments43['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('pageUid'));
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments46 = array();
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments49 = array();
// Rendering Boolean node
$arguments49['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('all'));
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output51 = '';

$output51 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments52 = array();
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output54 = '';

$output54 .= '
					<div class="row">
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments55 = array();
$arguments55['section'] = 'statistic';
// Rendering Array
$array56 = array();
$array56['statistic'] = $currentVariableContainer->getOrNull('all');
$array56['title'] = 'all';
$arguments55['arguments'] = $array56;
$arguments55['partial'] = NULL;
$arguments55['optional'] = false;
$renderChildrenClosure57 = function() {return NULL;};

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments55, $renderChildrenClosure57, $renderingContext);

$output54 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments58 = array();
$arguments58['section'] = 'statistic';
// Rendering Array
$array59 = array();
$array59['statistic'] = $currentVariableContainer->getOrNull('last24hours');
$array59['title'] = 'last24hours';
$arguments58['arguments'] = $array59;
$arguments58['partial'] = NULL;
$arguments58['optional'] = false;
$renderChildrenClosure60 = function() {return NULL;};

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments58, $renderChildrenClosure60, $renderingContext);

$output54 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments61 = array();
$arguments61['section'] = 'statistic';
// Rendering Array
$array62 = array();
$array62['statistic'] = $currentVariableContainer->getOrNull('last30days');
$array62['title'] = 'last30days';
$arguments61['arguments'] = $array62;
$arguments61['partial'] = NULL;
$arguments61['optional'] = false;
$renderChildrenClosure63 = function() {return NULL;};

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments61, $renderChildrenClosure63, $renderingContext);

$output54 .= '
						</div>
					</div>
				';
return $output54;
};

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments64 = array();
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output66 = '';

$output66 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments67 = array();
$arguments67['title'] = NULL;
$arguments67['message'] = NULL;
$arguments67['state'] = -2;
$arguments67['iconName'] = NULL;
$arguments67['disableIcon'] = false;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output69 = '';

$output69 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments70 = array();
$arguments70['key'] = 'administration.statistics.noResultForPage';
$arguments70['id'] = NULL;
$arguments70['default'] = NULL;
$arguments70['htmlEscape'] = NULL;
$arguments70['arguments'] = NULL;
$arguments70['extensionName'] = NULL;
$renderChildrenClosure71 = function() {return NULL;};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '
					';
return $output69;
};

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
				';
return $output66;
};

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output51 .= '
			';
return $output51;
};
$arguments49['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output72 = '';

$output72 .= '
					<div class="row">
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments73 = array();
$arguments73['section'] = 'statistic';
// Rendering Array
$array74 = array();
$array74['statistic'] = $currentVariableContainer->getOrNull('all');
$array74['title'] = 'all';
$arguments73['arguments'] = $array74;
$arguments73['partial'] = NULL;
$arguments73['optional'] = false;
$renderChildrenClosure75 = function() {return NULL;};

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments73, $renderChildrenClosure75, $renderingContext);

$output72 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments76 = array();
$arguments76['section'] = 'statistic';
// Rendering Array
$array77 = array();
$array77['statistic'] = $currentVariableContainer->getOrNull('last24hours');
$array77['title'] = 'last24hours';
$arguments76['arguments'] = $array77;
$arguments76['partial'] = NULL;
$arguments76['optional'] = false;
$renderChildrenClosure78 = function() {return NULL;};

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments76, $renderChildrenClosure78, $renderingContext);

$output72 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments79 = array();
$arguments79['section'] = 'statistic';
// Rendering Array
$array80 = array();
$array80['statistic'] = $currentVariableContainer->getOrNull('last30days');
$array80['title'] = 'last30days';
$arguments79['arguments'] = $array80;
$arguments79['partial'] = NULL;
$arguments79['optional'] = false;
$renderChildrenClosure81 = function() {return NULL;};

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments79, $renderChildrenClosure81, $renderingContext);

$output72 .= '
						</div>
					</div>
				';
return $output72;
};
$arguments49['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output82 = '';

$output82 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments83 = array();
$arguments83['title'] = NULL;
$arguments83['message'] = NULL;
$arguments83['state'] = -2;
$arguments83['iconName'] = NULL;
$arguments83['disableIcon'] = false;
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output85 = '';

$output85 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments86 = array();
$arguments86['key'] = 'administration.statistics.noResultForPage';
$arguments86['id'] = NULL;
$arguments86['default'] = NULL;
$arguments86['htmlEscape'] = NULL;
$arguments86['arguments'] = NULL;
$arguments86['extensionName'] = NULL;
$renderChildrenClosure87 = function() {return NULL;};

$output85 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '
					';
return $output85;
};

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
				';
return $output82;
};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '

		';
return $output48;
};

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments88 = array();
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output90 = '';

$output90 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments91 = array();
$arguments91['state'] = '-1';
$arguments91['title'] = NULL;
$arguments91['message'] = NULL;
$arguments91['iconName'] = NULL;
$arguments91['disableIcon'] = false;
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output93 = '';

$output93 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments94 = array();
$arguments94['key'] = 'administration.statistics.selectPage';
$arguments94['id'] = NULL;
$arguments94['default'] = NULL;
$arguments94['htmlEscape'] = NULL;
$arguments94['arguments'] = NULL;
$arguments94['extensionName'] = NULL;
$renderChildrenClosure95 = function() {return NULL;};

$output93 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output93 .= '
			';
return $output93;
};

$output90 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output90 .= '
		';
return $output90;
};

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output45 .= '
	';
return $output45;
};
$arguments43['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output96 = '';

$output96 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments97 = array();
// Rendering Boolean node
$arguments97['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('all'));
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output99 = '';

$output99 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments100 = array();
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output102 = '';

$output102 .= '
					<div class="row">
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments103 = array();
$arguments103['section'] = 'statistic';
// Rendering Array
$array104 = array();
$array104['statistic'] = $currentVariableContainer->getOrNull('all');
$array104['title'] = 'all';
$arguments103['arguments'] = $array104;
$arguments103['partial'] = NULL;
$arguments103['optional'] = false;
$renderChildrenClosure105 = function() {return NULL;};

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments103, $renderChildrenClosure105, $renderingContext);

$output102 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments106 = array();
$arguments106['section'] = 'statistic';
// Rendering Array
$array107 = array();
$array107['statistic'] = $currentVariableContainer->getOrNull('last24hours');
$array107['title'] = 'last24hours';
$arguments106['arguments'] = $array107;
$arguments106['partial'] = NULL;
$arguments106['optional'] = false;
$renderChildrenClosure108 = function() {return NULL;};

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments106, $renderChildrenClosure108, $renderingContext);

$output102 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments109 = array();
$arguments109['section'] = 'statistic';
// Rendering Array
$array110 = array();
$array110['statistic'] = $currentVariableContainer->getOrNull('last30days');
$array110['title'] = 'last30days';
$arguments109['arguments'] = $array110;
$arguments109['partial'] = NULL;
$arguments109['optional'] = false;
$renderChildrenClosure111 = function() {return NULL;};

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments109, $renderChildrenClosure111, $renderingContext);

$output102 .= '
						</div>
					</div>
				';
return $output102;
};

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments112 = array();
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output114 = '';

$output114 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments115 = array();
$arguments115['title'] = NULL;
$arguments115['message'] = NULL;
$arguments115['state'] = -2;
$arguments115['iconName'] = NULL;
$arguments115['disableIcon'] = false;
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output117 = '';

$output117 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments118 = array();
$arguments118['key'] = 'administration.statistics.noResultForPage';
$arguments118['id'] = NULL;
$arguments118['default'] = NULL;
$arguments118['htmlEscape'] = NULL;
$arguments118['arguments'] = NULL;
$arguments118['extensionName'] = NULL;
$renderChildrenClosure119 = function() {return NULL;};

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
					';
return $output117;
};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '
				';
return $output114;
};

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output99 .= '
			';
return $output99;
};
$arguments97['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output120 = '';

$output120 .= '
					<div class="row">
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments121 = array();
$arguments121['section'] = 'statistic';
// Rendering Array
$array122 = array();
$array122['statistic'] = $currentVariableContainer->getOrNull('all');
$array122['title'] = 'all';
$arguments121['arguments'] = $array122;
$arguments121['partial'] = NULL;
$arguments121['optional'] = false;
$renderChildrenClosure123 = function() {return NULL;};

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments121, $renderChildrenClosure123, $renderingContext);

$output120 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments124 = array();
$arguments124['section'] = 'statistic';
// Rendering Array
$array125 = array();
$array125['statistic'] = $currentVariableContainer->getOrNull('last24hours');
$array125['title'] = 'last24hours';
$arguments124['arguments'] = $array125;
$arguments124['partial'] = NULL;
$arguments124['optional'] = false;
$renderChildrenClosure126 = function() {return NULL;};

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments124, $renderChildrenClosure126, $renderingContext);

$output120 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments127 = array();
$arguments127['section'] = 'statistic';
// Rendering Array
$array128 = array();
$array128['statistic'] = $currentVariableContainer->getOrNull('last30days');
$array128['title'] = 'last30days';
$arguments127['arguments'] = $array128;
$arguments127['partial'] = NULL;
$arguments127['optional'] = false;
$renderChildrenClosure129 = function() {return NULL;};

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments127, $renderChildrenClosure129, $renderingContext);

$output120 .= '
						</div>
					</div>
				';
return $output120;
};
$arguments97['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output130 = '';

$output130 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments131 = array();
$arguments131['title'] = NULL;
$arguments131['message'] = NULL;
$arguments131['state'] = -2;
$arguments131['iconName'] = NULL;
$arguments131['disableIcon'] = false;
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output133 = '';

$output133 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments134 = array();
$arguments134['key'] = 'administration.statistics.noResultForPage';
$arguments134['id'] = NULL;
$arguments134['default'] = NULL;
$arguments134['htmlEscape'] = NULL;
$arguments134['arguments'] = NULL;
$arguments134['extensionName'] = NULL;
$renderChildrenClosure135 = function() {return NULL;};

$output133 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
					';
return $output133;
};

$output130 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output130 .= '
				';
return $output130;
};

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '

		';
return $output96;
};
$arguments43['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output136 = '';

$output136 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments137 = array();
$arguments137['state'] = '-1';
$arguments137['title'] = NULL;
$arguments137['message'] = NULL;
$arguments137['iconName'] = NULL;
$arguments137['disableIcon'] = false;
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output139 = '';

$output139 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments140 = array();
$arguments140['key'] = 'administration.statistics.selectPage';
$arguments140['id'] = NULL;
$arguments140['default'] = NULL;
$arguments140['htmlEscape'] = NULL;
$arguments140['arguments'] = NULL;
$arguments140['extensionName'] = NULL;
$renderChildrenClosure141 = function() {return NULL;};

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '
			';
return $output139;
};

$output136 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output136 .= '
		';
return $output136;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output0 .= '
';


return $output0;
}
/**
 * section statistic
 */
public function section_b482dfd7888552644911ba741a53cee27e9d364d(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output142 = '';

$output142 .= '
	<h4>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments143 = array();
$output144 = '';

$output144 .= 'administration.statistics.mostSearched.';

$output144 .= $currentVariableContainer->getOrNull('title');
$arguments143['key'] = $output144;
$arguments143['id'] = NULL;
$arguments143['default'] = NULL;
$arguments143['htmlEscape'] = NULL;
$arguments143['arguments'] = NULL;
$arguments143['extensionName'] = NULL;
$renderChildrenClosure145 = function() {return NULL;};

$output142 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments143, $renderChildrenClosure145, $renderingContext);

$output142 .= '
	</h4>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments146 = array();
// Rendering Boolean node
$arguments146['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('statistic'));
$arguments146['then'] = NULL;
$arguments146['else'] = NULL;
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output148 = '';

$output148 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments149 = array();
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output151 = '';

$output151 .= '
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class="nowrap">&nbsp;</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments152 = array();
$arguments152['key'] = 'administration.statistics.word';
$arguments152['id'] = NULL;
$arguments152['default'] = NULL;
$arguments152['htmlEscape'] = NULL;
$arguments152['arguments'] = NULL;
$arguments152['extensionName'] = NULL;
$renderChildrenClosure153 = function() {return NULL;};

$output151 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output151 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments154 = array();
$arguments154['key'] = 'administration.statistics.count';
$arguments154['id'] = NULL;
$arguments154['default'] = NULL;
$arguments154['htmlEscape'] = NULL;
$arguments154['arguments'] = NULL;
$arguments154['extensionName'] = NULL;
$renderChildrenClosure155 = function() {return NULL;};

$output151 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output151 .= '</th>
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments156 = array();
$arguments156['each'] = $currentVariableContainer->getOrNull('statistic');
$arguments156['as'] = 'line';
$arguments156['iteration'] = 'i';
$arguments156['key'] = '';
$arguments156['reverse'] = false;
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output158 = '';

$output158 .= '
						<tr>
							<td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments159 = array();
$arguments159['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('i'), 'cycle', $renderingContext);
$arguments159['keepQuotes'] = false;
$arguments159['encoding'] = NULL;
$arguments159['doubleEncode'] = true;
$renderChildrenClosure160 = function() {return NULL;};
$value161 = ($arguments159['value'] !== NULL ? $arguments159['value'] : $renderChildrenClosure160());

$output158 .= (!is_string($value161) ? $value161 : htmlspecialchars($value161, ($arguments159['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments159['encoding'] !== NULL ? $arguments159['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments159['doubleEncode']));

$output158 .= '.</strong></td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments162 = array();
$arguments162['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('line'), 'word', $renderingContext);
$arguments162['keepQuotes'] = false;
$arguments162['encoding'] = NULL;
$arguments162['doubleEncode'] = true;
$renderChildrenClosure163 = function() {return NULL;};
$value164 = ($arguments162['value'] !== NULL ? $arguments162['value'] : $renderChildrenClosure163());

$output158 .= (!is_string($value164) ? $value164 : htmlspecialchars($value164, ($arguments162['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments162['encoding'] !== NULL ? $arguments162['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments162['doubleEncode']));

$output158 .= '</td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments165 = array();
$arguments165['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('line'), 'c', $renderingContext);
$arguments165['keepQuotes'] = false;
$arguments165['encoding'] = NULL;
$arguments165['doubleEncode'] = true;
$renderChildrenClosure166 = function() {return NULL;};
$value167 = ($arguments165['value'] !== NULL ? $arguments165['value'] : $renderChildrenClosure166());

$output158 .= (!is_string($value167) ? $value167 : htmlspecialchars($value167, ($arguments165['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments165['encoding'] !== NULL ? $arguments165['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments165['doubleEncode']));

$output158 .= '</td>
						</tr>
					';
return $output158;
};

$output151 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output151 .= '
				</tbody>
			</table>
		';
return $output151;
};

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output148 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments168 = array();
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output170 = '';

$output170 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments171 = array();
$arguments171['state'] = '2';
$arguments171['title'] = NULL;
$arguments171['message'] = NULL;
$arguments171['iconName'] = NULL;
$arguments171['disableIcon'] = false;
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output173 = '';

$output173 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments174 = array();
$arguments174['key'] = 'administration.statistics.noResult';
$arguments174['id'] = NULL;
$arguments174['default'] = NULL;
$arguments174['htmlEscape'] = NULL;
$arguments174['arguments'] = NULL;
$arguments174['extensionName'] = NULL;
$renderChildrenClosure175 = function() {return NULL;};

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output173 .= '
			';
return $output173;
};

$output170 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output170 .= '
		';
return $output170;
};

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output148 .= '
	';
return $output148;
};
$arguments146['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output176 = '';

$output176 .= '
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class="nowrap">&nbsp;</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments177 = array();
$arguments177['key'] = 'administration.statistics.word';
$arguments177['id'] = NULL;
$arguments177['default'] = NULL;
$arguments177['htmlEscape'] = NULL;
$arguments177['arguments'] = NULL;
$arguments177['extensionName'] = NULL;
$renderChildrenClosure178 = function() {return NULL;};

$output176 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output176 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments179 = array();
$arguments179['key'] = 'administration.statistics.count';
$arguments179['id'] = NULL;
$arguments179['default'] = NULL;
$arguments179['htmlEscape'] = NULL;
$arguments179['arguments'] = NULL;
$arguments179['extensionName'] = NULL;
$renderChildrenClosure180 = function() {return NULL;};

$output176 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output176 .= '</th>
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments181 = array();
$arguments181['each'] = $currentVariableContainer->getOrNull('statistic');
$arguments181['as'] = 'line';
$arguments181['iteration'] = 'i';
$arguments181['key'] = '';
$arguments181['reverse'] = false;
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output183 = '';

$output183 .= '
						<tr>
							<td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments184 = array();
$arguments184['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('i'), 'cycle', $renderingContext);
$arguments184['keepQuotes'] = false;
$arguments184['encoding'] = NULL;
$arguments184['doubleEncode'] = true;
$renderChildrenClosure185 = function() {return NULL;};
$value186 = ($arguments184['value'] !== NULL ? $arguments184['value'] : $renderChildrenClosure185());

$output183 .= (!is_string($value186) ? $value186 : htmlspecialchars($value186, ($arguments184['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments184['encoding'] !== NULL ? $arguments184['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments184['doubleEncode']));

$output183 .= '.</strong></td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments187 = array();
$arguments187['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('line'), 'word', $renderingContext);
$arguments187['keepQuotes'] = false;
$arguments187['encoding'] = NULL;
$arguments187['doubleEncode'] = true;
$renderChildrenClosure188 = function() {return NULL;};
$value189 = ($arguments187['value'] !== NULL ? $arguments187['value'] : $renderChildrenClosure188());

$output183 .= (!is_string($value189) ? $value189 : htmlspecialchars($value189, ($arguments187['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments187['encoding'] !== NULL ? $arguments187['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments187['doubleEncode']));

$output183 .= '</td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments190 = array();
$arguments190['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('line'), 'c', $renderingContext);
$arguments190['keepQuotes'] = false;
$arguments190['encoding'] = NULL;
$arguments190['doubleEncode'] = true;
$renderChildrenClosure191 = function() {return NULL;};
$value192 = ($arguments190['value'] !== NULL ? $arguments190['value'] : $renderChildrenClosure191());

$output183 .= (!is_string($value192) ? $value192 : htmlspecialchars($value192, ($arguments190['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments190['encoding'] !== NULL ? $arguments190['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments190['doubleEncode']));

$output183 .= '</td>
						</tr>
					';
return $output183;
};

$output176 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output176 .= '
				</tbody>
			</table>
		';
return $output176;
};
$arguments146['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output193 = '';

$output193 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments194 = array();
$arguments194['state'] = '2';
$arguments194['title'] = NULL;
$arguments194['message'] = NULL;
$arguments194['iconName'] = NULL;
$arguments194['disableIcon'] = false;
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output196 = '';

$output196 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments197 = array();
$arguments197['key'] = 'administration.statistics.noResult';
$arguments197['id'] = NULL;
$arguments197['default'] = NULL;
$arguments197['htmlEscape'] = NULL;
$arguments197['arguments'] = NULL;
$arguments197['extensionName'] = NULL;
$renderChildrenClosure198 = function() {return NULL;};

$output196 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output196 .= '
			';
return $output196;
};

$output193 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output193 .= '
		';
return $output193;
};

$output142 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output142 .= '
';


return $output142;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output199 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments200 = array();
$arguments200['name'] = 'Administration';
$renderChildrenClosure201 = function() {return NULL;};
$viewHelper202 = $self->getViewHelper('$viewHelper202', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper202->setArguments($arguments200);
$viewHelper202->setRenderingContext($renderingContext);
$viewHelper202->setRenderChildrenClosure($renderChildrenClosure201);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output199 .= $viewHelper202->initializeArgumentsAndRender();

$output199 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments203 = array();
$arguments203['name'] = 'Content';
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output205 = '';

$output205 .= '
	<p class="lead">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments206 = array();
$arguments206['key'] = 'administration.index.description';
$arguments206['id'] = NULL;
$arguments206['default'] = NULL;
$arguments206['htmlEscape'] = NULL;
$arguments206['arguments'] = NULL;
$arguments206['extensionName'] = NULL;
$renderChildrenClosure207 = function() {return NULL;};

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output205 .= '</p>

	<div class="row">
		<div class="col-md-6">
			<h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments208 = array();
$arguments208['key'] = 'administration.statistics.header';
$arguments208['id'] = NULL;
$arguments208['default'] = NULL;
$arguments208['htmlEscape'] = NULL;
$arguments208['arguments'] = NULL;
$arguments208['extensionName'] = NULL;
$renderChildrenClosure209 = function() {return NULL;};

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output205 .= '</h4>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments210 = array();
$arguments210['key'] = 'administration.statistics.name';
$arguments210['id'] = NULL;
$arguments210['default'] = NULL;
$arguments210['htmlEscape'] = NULL;
$arguments210['arguments'] = NULL;
$arguments210['extensionName'] = NULL;
$renderChildrenClosure211 = function() {return NULL;};

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output205 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments212 = array();
$arguments212['key'] = 'administration.statistics.count';
$arguments212['id'] = NULL;
$arguments212['default'] = NULL;
$arguments212['htmlEscape'] = NULL;
$arguments212['arguments'] = NULL;
$arguments212['extensionName'] = NULL;
$renderChildrenClosure213 = function() {return NULL;};

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output205 .= '</th>
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments214 = array();
$arguments214['each'] = $currentVariableContainer->getOrNull('records');
$arguments214['as'] = 'count';
$arguments214['key'] = 'name';
$arguments214['reverse'] = false;
$arguments214['iteration'] = NULL;
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output216 = '';

$output216 .= '
						<tr>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments217 = array();
$arguments217['value'] = $currentVariableContainer->getOrNull('name');
$arguments217['keepQuotes'] = false;
$arguments217['encoding'] = NULL;
$arguments217['doubleEncode'] = true;
$renderChildrenClosure218 = function() {return NULL;};
$value219 = ($arguments217['value'] !== NULL ? $arguments217['value'] : $renderChildrenClosure218());

$output216 .= (!is_string($value219) ? $value219 : htmlspecialchars($value219, ($arguments217['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments217['encoding'] !== NULL ? $arguments217['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments217['doubleEncode']));

$output216 .= '</td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments220 = array();
$arguments220['value'] = $currentVariableContainer->getOrNull('count');
$arguments220['keepQuotes'] = false;
$arguments220['encoding'] = NULL;
$arguments220['doubleEncode'] = true;
$renderChildrenClosure221 = function() {return NULL;};
$value222 = ($arguments220['value'] !== NULL ? $arguments220['value'] : $renderChildrenClosure221());

$output216 .= (!is_string($value222) ? $value222 : htmlspecialchars($value222, ($arguments220['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments220['encoding'] !== NULL ? $arguments220['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments220['doubleEncode']));

$output216 .= '</td>
						</tr>
					';
return $output216;
};

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output205 .= '
				</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments223 = array();
$arguments223['key'] = 'administration.statistics.headerTypes';
$arguments223['id'] = NULL;
$arguments223['default'] = NULL;
$arguments223['htmlEscape'] = NULL;
$arguments223['arguments'] = NULL;
$arguments223['extensionName'] = NULL;
$renderChildrenClosure224 = function() {return NULL;};

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output205 .= '</h4>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments225 = array();
$arguments225['key'] = 'administration.statistics.name';
$arguments225['id'] = NULL;
$arguments225['default'] = NULL;
$arguments225['htmlEscape'] = NULL;
$arguments225['arguments'] = NULL;
$arguments225['extensionName'] = NULL;
$renderChildrenClosure226 = function() {return NULL;};

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output205 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments227 = array();
$arguments227['key'] = 'administration.statistics.count';
$arguments227['id'] = NULL;
$arguments227['default'] = NULL;
$arguments227['htmlEscape'] = NULL;
$arguments227['arguments'] = NULL;
$arguments227['extensionName'] = NULL;
$renderChildrenClosure228 = function() {return NULL;};

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output205 .= '</th>
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments229 = array();
$arguments229['each'] = $currentVariableContainer->getOrNull('phash');
$arguments229['as'] = 'data';
$arguments229['key'] = '';
$arguments229['reverse'] = false;
$arguments229['iteration'] = NULL;
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output231 = '';

$output231 .= '
						<tr>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments232 = array();
$arguments232['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'name', $renderingContext);
$arguments232['keepQuotes'] = false;
$arguments232['encoding'] = NULL;
$arguments232['doubleEncode'] = true;
$renderChildrenClosure233 = function() {return NULL;};
$value234 = ($arguments232['value'] !== NULL ? $arguments232['value'] : $renderChildrenClosure233());

$output231 .= (!is_string($value234) ? $value234 : htmlspecialchars($value234, ($arguments232['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments232['encoding'] !== NULL ? $arguments232['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments232['doubleEncode']));

$output231 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments235 = array();
$arguments235['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'type', $renderingContext);
$arguments235['keepQuotes'] = false;
$arguments235['encoding'] = NULL;
$arguments235['doubleEncode'] = true;
$renderChildrenClosure236 = function() {return NULL;};
$value237 = ($arguments235['value'] !== NULL ? $arguments235['value'] : $renderChildrenClosure236());

$output231 .= (!is_string($value237) ? $value237 : htmlspecialchars($value237, ($arguments235['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments235['encoding'] !== NULL ? $arguments235['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments235['doubleEncode']));

$output231 .= ')</td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments238 = array();
$arguments238['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'count', $renderingContext);
$arguments238['keepQuotes'] = false;
$arguments238['encoding'] = NULL;
$arguments238['doubleEncode'] = true;
$renderChildrenClosure239 = function() {return NULL;};
$value240 = ($arguments238['value'] !== NULL ? $arguments238['value'] : $renderChildrenClosure239());

$output231 .= (!is_string($value240) ? $value240 : htmlspecialchars($value240, ($arguments238['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments238['encoding'] !== NULL ? $arguments238['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments238['doubleEncode']));

$output231 .= ' / ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments241 = array();
$arguments241['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uniqueCount', $renderingContext);
$arguments241['keepQuotes'] = false;
$arguments241['encoding'] = NULL;
$arguments241['doubleEncode'] = true;
$renderChildrenClosure242 = function() {return NULL;};
$value243 = ($arguments241['value'] !== NULL ? $arguments241['value'] : $renderChildrenClosure242());

$output231 .= (!is_string($value243) ? $value243 : htmlspecialchars($value243, ($arguments241['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments241['encoding'] !== NULL ? $arguments241['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments241['doubleEncode']));

$output231 .= '</td>
						</tr>
					';
return $output231;
};

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output205 .= '
				</tbody>
			</table>
		</div>
	</div>

	<h3>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments244 = array();
$arguments244['key'] = 'administration.statistics.mostSearched.title';
$arguments244['id'] = NULL;
$arguments244['default'] = NULL;
$arguments244['htmlEscape'] = NULL;
$arguments244['arguments'] = NULL;
$arguments244['extensionName'] = NULL;
$renderChildrenClosure245 = function() {return NULL;};

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output205 .= '
	</h3>
	<p>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments246 = array();
$arguments246['key'] = 'administration.statistics.mostSearched.description';
$arguments246['id'] = NULL;
$arguments246['default'] = NULL;
$arguments246['htmlEscape'] = NULL;
$arguments246['arguments'] = NULL;
$arguments246['extensionName'] = NULL;
$renderChildrenClosure247 = function() {return NULL;};

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output205 .= '
	</p>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments248 = array();
// Rendering Boolean node
$arguments248['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('pageUid'));
$arguments248['then'] = NULL;
$arguments248['else'] = NULL;
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output250 = '';

$output250 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments251 = array();
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output253 = '';

$output253 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments254 = array();
// Rendering Boolean node
$arguments254['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('all'));
$arguments254['then'] = NULL;
$arguments254['else'] = NULL;
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output256 = '';

$output256 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments257 = array();
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output259 = '';

$output259 .= '
					<div class="row">
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments260 = array();
$arguments260['section'] = 'statistic';
// Rendering Array
$array261 = array();
$array261['statistic'] = $currentVariableContainer->getOrNull('all');
$array261['title'] = 'all';
$arguments260['arguments'] = $array261;
$arguments260['partial'] = NULL;
$arguments260['optional'] = false;
$renderChildrenClosure262 = function() {return NULL;};

$output259 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments260, $renderChildrenClosure262, $renderingContext);

$output259 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments263 = array();
$arguments263['section'] = 'statistic';
// Rendering Array
$array264 = array();
$array264['statistic'] = $currentVariableContainer->getOrNull('last24hours');
$array264['title'] = 'last24hours';
$arguments263['arguments'] = $array264;
$arguments263['partial'] = NULL;
$arguments263['optional'] = false;
$renderChildrenClosure265 = function() {return NULL;};

$output259 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments263, $renderChildrenClosure265, $renderingContext);

$output259 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments266 = array();
$arguments266['section'] = 'statistic';
// Rendering Array
$array267 = array();
$array267['statistic'] = $currentVariableContainer->getOrNull('last30days');
$array267['title'] = 'last30days';
$arguments266['arguments'] = $array267;
$arguments266['partial'] = NULL;
$arguments266['optional'] = false;
$renderChildrenClosure268 = function() {return NULL;};

$output259 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments266, $renderChildrenClosure268, $renderingContext);

$output259 .= '
						</div>
					</div>
				';
return $output259;
};

$output256 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output256 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments269 = array();
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output271 = '';

$output271 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments272 = array();
$arguments272['title'] = NULL;
$arguments272['message'] = NULL;
$arguments272['state'] = -2;
$arguments272['iconName'] = NULL;
$arguments272['disableIcon'] = false;
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output274 = '';

$output274 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments275 = array();
$arguments275['key'] = 'administration.statistics.noResultForPage';
$arguments275['id'] = NULL;
$arguments275['default'] = NULL;
$arguments275['htmlEscape'] = NULL;
$arguments275['arguments'] = NULL;
$arguments275['extensionName'] = NULL;
$renderChildrenClosure276 = function() {return NULL;};

$output274 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output274 .= '
					';
return $output274;
};

$output271 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output271 .= '
				';
return $output271;
};

$output256 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output256 .= '
			';
return $output256;
};
$arguments254['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output277 = '';

$output277 .= '
					<div class="row">
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments278 = array();
$arguments278['section'] = 'statistic';
// Rendering Array
$array279 = array();
$array279['statistic'] = $currentVariableContainer->getOrNull('all');
$array279['title'] = 'all';
$arguments278['arguments'] = $array279;
$arguments278['partial'] = NULL;
$arguments278['optional'] = false;
$renderChildrenClosure280 = function() {return NULL;};

$output277 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments278, $renderChildrenClosure280, $renderingContext);

$output277 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments281 = array();
$arguments281['section'] = 'statistic';
// Rendering Array
$array282 = array();
$array282['statistic'] = $currentVariableContainer->getOrNull('last24hours');
$array282['title'] = 'last24hours';
$arguments281['arguments'] = $array282;
$arguments281['partial'] = NULL;
$arguments281['optional'] = false;
$renderChildrenClosure283 = function() {return NULL;};

$output277 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments281, $renderChildrenClosure283, $renderingContext);

$output277 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments284 = array();
$arguments284['section'] = 'statistic';
// Rendering Array
$array285 = array();
$array285['statistic'] = $currentVariableContainer->getOrNull('last30days');
$array285['title'] = 'last30days';
$arguments284['arguments'] = $array285;
$arguments284['partial'] = NULL;
$arguments284['optional'] = false;
$renderChildrenClosure286 = function() {return NULL;};

$output277 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments284, $renderChildrenClosure286, $renderingContext);

$output277 .= '
						</div>
					</div>
				';
return $output277;
};
$arguments254['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output287 = '';

$output287 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments288 = array();
$arguments288['title'] = NULL;
$arguments288['message'] = NULL;
$arguments288['state'] = -2;
$arguments288['iconName'] = NULL;
$arguments288['disableIcon'] = false;
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output290 = '';

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments291 = array();
$arguments291['key'] = 'administration.statistics.noResultForPage';
$arguments291['id'] = NULL;
$arguments291['default'] = NULL;
$arguments291['htmlEscape'] = NULL;
$arguments291['arguments'] = NULL;
$arguments291['extensionName'] = NULL;
$renderChildrenClosure292 = function() {return NULL;};

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

$output290 .= '
					';
return $output290;
};

$output287 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output287 .= '
				';
return $output287;
};

$output253 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output253 .= '

		';
return $output253;
};

$output250 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output250 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments293 = array();
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output295 = '';

$output295 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments296 = array();
$arguments296['state'] = '-1';
$arguments296['title'] = NULL;
$arguments296['message'] = NULL;
$arguments296['iconName'] = NULL;
$arguments296['disableIcon'] = false;
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output298 = '';

$output298 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments299 = array();
$arguments299['key'] = 'administration.statistics.selectPage';
$arguments299['id'] = NULL;
$arguments299['default'] = NULL;
$arguments299['htmlEscape'] = NULL;
$arguments299['arguments'] = NULL;
$arguments299['extensionName'] = NULL;
$renderChildrenClosure300 = function() {return NULL;};

$output298 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output298 .= '
			';
return $output298;
};

$output295 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output295 .= '
		';
return $output295;
};

$output250 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output250 .= '
	';
return $output250;
};
$arguments248['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output301 = '';

$output301 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments302 = array();
// Rendering Boolean node
$arguments302['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('all'));
$arguments302['then'] = NULL;
$arguments302['else'] = NULL;
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output304 = '';

$output304 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments305 = array();
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output307 = '';

$output307 .= '
					<div class="row">
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments308 = array();
$arguments308['section'] = 'statistic';
// Rendering Array
$array309 = array();
$array309['statistic'] = $currentVariableContainer->getOrNull('all');
$array309['title'] = 'all';
$arguments308['arguments'] = $array309;
$arguments308['partial'] = NULL;
$arguments308['optional'] = false;
$renderChildrenClosure310 = function() {return NULL;};

$output307 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments308, $renderChildrenClosure310, $renderingContext);

$output307 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments311 = array();
$arguments311['section'] = 'statistic';
// Rendering Array
$array312 = array();
$array312['statistic'] = $currentVariableContainer->getOrNull('last24hours');
$array312['title'] = 'last24hours';
$arguments311['arguments'] = $array312;
$arguments311['partial'] = NULL;
$arguments311['optional'] = false;
$renderChildrenClosure313 = function() {return NULL;};

$output307 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments311, $renderChildrenClosure313, $renderingContext);

$output307 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments314 = array();
$arguments314['section'] = 'statistic';
// Rendering Array
$array315 = array();
$array315['statistic'] = $currentVariableContainer->getOrNull('last30days');
$array315['title'] = 'last30days';
$arguments314['arguments'] = $array315;
$arguments314['partial'] = NULL;
$arguments314['optional'] = false;
$renderChildrenClosure316 = function() {return NULL;};

$output307 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments314, $renderChildrenClosure316, $renderingContext);

$output307 .= '
						</div>
					</div>
				';
return $output307;
};

$output304 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output304 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments317 = array();
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output319 = '';

$output319 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments320 = array();
$arguments320['title'] = NULL;
$arguments320['message'] = NULL;
$arguments320['state'] = -2;
$arguments320['iconName'] = NULL;
$arguments320['disableIcon'] = false;
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output322 = '';

$output322 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments323 = array();
$arguments323['key'] = 'administration.statistics.noResultForPage';
$arguments323['id'] = NULL;
$arguments323['default'] = NULL;
$arguments323['htmlEscape'] = NULL;
$arguments323['arguments'] = NULL;
$arguments323['extensionName'] = NULL;
$renderChildrenClosure324 = function() {return NULL;};

$output322 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output322 .= '
					';
return $output322;
};

$output319 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output319 .= '
				';
return $output319;
};

$output304 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output304 .= '
			';
return $output304;
};
$arguments302['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output325 = '';

$output325 .= '
					<div class="row">
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments326 = array();
$arguments326['section'] = 'statistic';
// Rendering Array
$array327 = array();
$array327['statistic'] = $currentVariableContainer->getOrNull('all');
$array327['title'] = 'all';
$arguments326['arguments'] = $array327;
$arguments326['partial'] = NULL;
$arguments326['optional'] = false;
$renderChildrenClosure328 = function() {return NULL;};

$output325 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments326, $renderChildrenClosure328, $renderingContext);

$output325 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments329 = array();
$arguments329['section'] = 'statistic';
// Rendering Array
$array330 = array();
$array330['statistic'] = $currentVariableContainer->getOrNull('last24hours');
$array330['title'] = 'last24hours';
$arguments329['arguments'] = $array330;
$arguments329['partial'] = NULL;
$arguments329['optional'] = false;
$renderChildrenClosure331 = function() {return NULL;};

$output325 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments329, $renderChildrenClosure331, $renderingContext);

$output325 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments332 = array();
$arguments332['section'] = 'statistic';
// Rendering Array
$array333 = array();
$array333['statistic'] = $currentVariableContainer->getOrNull('last30days');
$array333['title'] = 'last30days';
$arguments332['arguments'] = $array333;
$arguments332['partial'] = NULL;
$arguments332['optional'] = false;
$renderChildrenClosure334 = function() {return NULL;};

$output325 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments332, $renderChildrenClosure334, $renderingContext);

$output325 .= '
						</div>
					</div>
				';
return $output325;
};
$arguments302['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output335 = '';

$output335 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments336 = array();
$arguments336['title'] = NULL;
$arguments336['message'] = NULL;
$arguments336['state'] = -2;
$arguments336['iconName'] = NULL;
$arguments336['disableIcon'] = false;
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output338 = '';

$output338 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments339 = array();
$arguments339['key'] = 'administration.statistics.noResultForPage';
$arguments339['id'] = NULL;
$arguments339['default'] = NULL;
$arguments339['htmlEscape'] = NULL;
$arguments339['arguments'] = NULL;
$arguments339['extensionName'] = NULL;
$renderChildrenClosure340 = function() {return NULL;};

$output338 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext);

$output338 .= '
					';
return $output338;
};

$output335 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments336, $renderChildrenClosure337, $renderingContext);

$output335 .= '
				';
return $output335;
};

$output301 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output301 .= '

		';
return $output301;
};
$arguments248['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output341 = '';

$output341 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments342 = array();
$arguments342['state'] = '-1';
$arguments342['title'] = NULL;
$arguments342['message'] = NULL;
$arguments342['iconName'] = NULL;
$arguments342['disableIcon'] = false;
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output344 = '';

$output344 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments345 = array();
$arguments345['key'] = 'administration.statistics.selectPage';
$arguments345['id'] = NULL;
$arguments345['default'] = NULL;
$arguments345['htmlEscape'] = NULL;
$arguments345['arguments'] = NULL;
$arguments345['extensionName'] = NULL;
$renderChildrenClosure346 = function() {return NULL;};

$output344 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output344 .= '
			';
return $output344;
};

$output341 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext);

$output341 .= '
		';
return $output341;
};

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output205 .= '
';
return $output205;
};

$output199 .= '';

$output199 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments347 = array();
$arguments347['name'] = 'statistic';
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output349 = '';

$output349 .= '
	<h4>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments350 = array();
$output351 = '';

$output351 .= 'administration.statistics.mostSearched.';

$output351 .= $currentVariableContainer->getOrNull('title');
$arguments350['key'] = $output351;
$arguments350['id'] = NULL;
$arguments350['default'] = NULL;
$arguments350['htmlEscape'] = NULL;
$arguments350['arguments'] = NULL;
$arguments350['extensionName'] = NULL;
$renderChildrenClosure352 = function() {return NULL;};

$output349 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments350, $renderChildrenClosure352, $renderingContext);

$output349 .= '
	</h4>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments353 = array();
// Rendering Boolean node
$arguments353['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('statistic'));
$arguments353['then'] = NULL;
$arguments353['else'] = NULL;
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output355 = '';

$output355 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments356 = array();
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output358 = '';

$output358 .= '
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class="nowrap">&nbsp;</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments359 = array();
$arguments359['key'] = 'administration.statistics.word';
$arguments359['id'] = NULL;
$arguments359['default'] = NULL;
$arguments359['htmlEscape'] = NULL;
$arguments359['arguments'] = NULL;
$arguments359['extensionName'] = NULL;
$renderChildrenClosure360 = function() {return NULL;};

$output358 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext);

$output358 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments361 = array();
$arguments361['key'] = 'administration.statistics.count';
$arguments361['id'] = NULL;
$arguments361['default'] = NULL;
$arguments361['htmlEscape'] = NULL;
$arguments361['arguments'] = NULL;
$arguments361['extensionName'] = NULL;
$renderChildrenClosure362 = function() {return NULL;};

$output358 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);

$output358 .= '</th>
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments363 = array();
$arguments363['each'] = $currentVariableContainer->getOrNull('statistic');
$arguments363['as'] = 'line';
$arguments363['iteration'] = 'i';
$arguments363['key'] = '';
$arguments363['reverse'] = false;
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output365 = '';

$output365 .= '
						<tr>
							<td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments366 = array();
$arguments366['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('i'), 'cycle', $renderingContext);
$arguments366['keepQuotes'] = false;
$arguments366['encoding'] = NULL;
$arguments366['doubleEncode'] = true;
$renderChildrenClosure367 = function() {return NULL;};
$value368 = ($arguments366['value'] !== NULL ? $arguments366['value'] : $renderChildrenClosure367());

$output365 .= (!is_string($value368) ? $value368 : htmlspecialchars($value368, ($arguments366['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments366['encoding'] !== NULL ? $arguments366['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments366['doubleEncode']));

$output365 .= '.</strong></td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments369 = array();
$arguments369['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('line'), 'word', $renderingContext);
$arguments369['keepQuotes'] = false;
$arguments369['encoding'] = NULL;
$arguments369['doubleEncode'] = true;
$renderChildrenClosure370 = function() {return NULL;};
$value371 = ($arguments369['value'] !== NULL ? $arguments369['value'] : $renderChildrenClosure370());

$output365 .= (!is_string($value371) ? $value371 : htmlspecialchars($value371, ($arguments369['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments369['encoding'] !== NULL ? $arguments369['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments369['doubleEncode']));

$output365 .= '</td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments372 = array();
$arguments372['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('line'), 'c', $renderingContext);
$arguments372['keepQuotes'] = false;
$arguments372['encoding'] = NULL;
$arguments372['doubleEncode'] = true;
$renderChildrenClosure373 = function() {return NULL;};
$value374 = ($arguments372['value'] !== NULL ? $arguments372['value'] : $renderChildrenClosure373());

$output365 .= (!is_string($value374) ? $value374 : htmlspecialchars($value374, ($arguments372['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments372['encoding'] !== NULL ? $arguments372['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments372['doubleEncode']));

$output365 .= '</td>
						</tr>
					';
return $output365;
};

$output358 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext);

$output358 .= '
				</tbody>
			</table>
		';
return $output358;
};

$output355 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output355 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments375 = array();
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output377 = '';

$output377 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments378 = array();
$arguments378['state'] = '2';
$arguments378['title'] = NULL;
$arguments378['message'] = NULL;
$arguments378['iconName'] = NULL;
$arguments378['disableIcon'] = false;
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output380 = '';

$output380 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments381 = array();
$arguments381['key'] = 'administration.statistics.noResult';
$arguments381['id'] = NULL;
$arguments381['default'] = NULL;
$arguments381['htmlEscape'] = NULL;
$arguments381['arguments'] = NULL;
$arguments381['extensionName'] = NULL;
$renderChildrenClosure382 = function() {return NULL;};

$output380 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments381, $renderChildrenClosure382, $renderingContext);

$output380 .= '
			';
return $output380;
};

$output377 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments378, $renderChildrenClosure379, $renderingContext);

$output377 .= '
		';
return $output377;
};

$output355 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext);

$output355 .= '
	';
return $output355;
};
$arguments353['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output383 = '';

$output383 .= '
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class="nowrap">&nbsp;</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments384 = array();
$arguments384['key'] = 'administration.statistics.word';
$arguments384['id'] = NULL;
$arguments384['default'] = NULL;
$arguments384['htmlEscape'] = NULL;
$arguments384['arguments'] = NULL;
$arguments384['extensionName'] = NULL;
$renderChildrenClosure385 = function() {return NULL;};

$output383 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext);

$output383 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments386 = array();
$arguments386['key'] = 'administration.statistics.count';
$arguments386['id'] = NULL;
$arguments386['default'] = NULL;
$arguments386['htmlEscape'] = NULL;
$arguments386['arguments'] = NULL;
$arguments386['extensionName'] = NULL;
$renderChildrenClosure387 = function() {return NULL;};

$output383 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments386, $renderChildrenClosure387, $renderingContext);

$output383 .= '</th>
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments388 = array();
$arguments388['each'] = $currentVariableContainer->getOrNull('statistic');
$arguments388['as'] = 'line';
$arguments388['iteration'] = 'i';
$arguments388['key'] = '';
$arguments388['reverse'] = false;
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output390 = '';

$output390 .= '
						<tr>
							<td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments391 = array();
$arguments391['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('i'), 'cycle', $renderingContext);
$arguments391['keepQuotes'] = false;
$arguments391['encoding'] = NULL;
$arguments391['doubleEncode'] = true;
$renderChildrenClosure392 = function() {return NULL;};
$value393 = ($arguments391['value'] !== NULL ? $arguments391['value'] : $renderChildrenClosure392());

$output390 .= (!is_string($value393) ? $value393 : htmlspecialchars($value393, ($arguments391['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments391['encoding'] !== NULL ? $arguments391['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments391['doubleEncode']));

$output390 .= '.</strong></td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments394 = array();
$arguments394['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('line'), 'word', $renderingContext);
$arguments394['keepQuotes'] = false;
$arguments394['encoding'] = NULL;
$arguments394['doubleEncode'] = true;
$renderChildrenClosure395 = function() {return NULL;};
$value396 = ($arguments394['value'] !== NULL ? $arguments394['value'] : $renderChildrenClosure395());

$output390 .= (!is_string($value396) ? $value396 : htmlspecialchars($value396, ($arguments394['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments394['encoding'] !== NULL ? $arguments394['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments394['doubleEncode']));

$output390 .= '</td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments397 = array();
$arguments397['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('line'), 'c', $renderingContext);
$arguments397['keepQuotes'] = false;
$arguments397['encoding'] = NULL;
$arguments397['doubleEncode'] = true;
$renderChildrenClosure398 = function() {return NULL;};
$value399 = ($arguments397['value'] !== NULL ? $arguments397['value'] : $renderChildrenClosure398());

$output390 .= (!is_string($value399) ? $value399 : htmlspecialchars($value399, ($arguments397['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments397['encoding'] !== NULL ? $arguments397['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments397['doubleEncode']));

$output390 .= '</td>
						</tr>
					';
return $output390;
};

$output383 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext);

$output383 .= '
				</tbody>
			</table>
		';
return $output383;
};
$arguments353['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output400 = '';

$output400 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments401 = array();
$arguments401['state'] = '2';
$arguments401['title'] = NULL;
$arguments401['message'] = NULL;
$arguments401['iconName'] = NULL;
$arguments401['disableIcon'] = false;
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output403 = '';

$output403 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments404 = array();
$arguments404['key'] = 'administration.statistics.noResult';
$arguments404['id'] = NULL;
$arguments404['default'] = NULL;
$arguments404['htmlEscape'] = NULL;
$arguments404['arguments'] = NULL;
$arguments404['extensionName'] = NULL;
$renderChildrenClosure405 = function() {return NULL;};

$output403 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output403 .= '
			';
return $output403;
};

$output400 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext);

$output400 .= '
		';
return $output400;
};

$output349 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output349 .= '
';
return $output349;
};

$output199 .= '';

$output199 .= '
';


return $output199;
}


}
#1573137217    97939     