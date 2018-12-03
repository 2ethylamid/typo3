<?php

class List_action_index_24dc452bb25e8e2dcaf2408dee71ca75f5fcc034 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'main';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'em' => 
  array (
    0 => 'TYPO3\\CMS\\Extensionmanager\\ViewHelpers',
  ),
));
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'installedExtensions';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['renderable'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['debug'] = true;
$arguments4['partial'] = 'List/UploadForm';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['name'] = NULL;
$arguments6['value'] = NULL;
$arguments6['property'] = NULL;
$arguments6['autofocus'] = NULL;
$arguments6['disabled'] = NULL;
$arguments6['maxlength'] = NULL;
$arguments6['readonly'] = NULL;
$arguments6['size'] = NULL;
$arguments6['placeholder'] = NULL;
$arguments6['pattern'] = NULL;
$arguments6['errorClass'] = 'f3-form-error';
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['required'] = false;
$arguments6['type'] = 'text';
$arguments6['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['key'] = NULL;
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$arguments8['languageKey'] = NULL;
$arguments8['alternativeLanguageKeys'] = NULL;
$arguments8['key'] = 'extensionList.search';
$arguments6['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
$arguments6['id'] = 'Tx_Extensionmanager_extensionkey';
$array10 = array (
);$arguments6['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array10);
$arguments6['class'] = 'form-control';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
		</div>
	</form>
	<br>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['languageKey'] = NULL;
$arguments11['alternativeLanguageKeys'] = NULL;
$arguments11['key'] = 'extensionList.header.title.update';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output3 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['languageKey'] = NULL;
$arguments13['alternativeLanguageKeys'] = NULL;
$arguments13['key'] = 'extensionList.header.update';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output3 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['languageKey'] = NULL;
$arguments15['alternativeLanguageKeys'] = NULL;
$arguments15['key'] = 'extensionList.header.title.activate';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output3 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['languageKey'] = NULL;
$arguments17['alternativeLanguageKeys'] = NULL;
$arguments17['key'] = 'extensionList.header.activate';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['languageKey'] = NULL;
$arguments19['alternativeLanguageKeys'] = NULL;
$arguments19['key'] = 'extensionList.header.extensionName';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['key'] = NULL;
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['languageKey'] = NULL;
$arguments21['alternativeLanguageKeys'] = NULL;
$arguments21['key'] = 'extensionList.header.extensionKey';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['languageKey'] = NULL;
$arguments23['alternativeLanguageKeys'] = NULL;
$arguments23['key'] = 'extensionList.header.extensionVersion';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['key'] = NULL;
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['languageKey'] = NULL;
$arguments25['alternativeLanguageKeys'] = NULL;
$arguments25['key'] = 'extensionList.header.extensionState';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['key'] = NULL;
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['languageKey'] = NULL;
$arguments27['alternativeLanguageKeys'] = NULL;
$arguments27['key'] = 'extensionList.header.extensionType';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['key'] = NULL;
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['languageKey'] = NULL;
$arguments29['alternativeLanguageKeys'] = NULL;
$arguments29['key'] = 'extensionList.header.extensionActions';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output3 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
						<tr id="';
$array68 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array68)]);

$output67 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$arguments69['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array72)]);
$array71['1'] = ' == -1';

$expression73 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments69['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression73(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$arguments69['then'] = 'insecure';

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$arguments74['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array76 = array();
$array77 = array (
);$array76['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array77)]);
$array76['1'] = ' == -2';

$expression78 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments74['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);
$arguments74['then'] = 'outdated';

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output67 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array82)]);

$expression83 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['then'] = '';
$arguments79['else'] = 'inactive';

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output67 .= '">
					';
return $output67;
};
$arguments65 = array();

$output64 .= '';

$output64 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
						<tr id="';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array87)]);

$output86 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array91)]);

$expression92 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
$arguments88['then'] = '';
$arguments88['else'] = 'inactive';

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output86 .= '">
					';
return $output86;
};
$arguments84 = array();
$arguments84['if'] = NULL;

$output64 .= '';

$output64 .= '
				';
return $output64;
};
$arguments35 = array();
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$arguments35['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array61 = array();
$array62 = array (
);$array61['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject', $array62);

$expression63 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments35['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression63(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)
					),
					$renderingContext
				);
$arguments35['__thenClosure'] = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
						<tr id="';
$array38 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array38)]);

$output37 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array42)]);
$array41['1'] = ' == -1';

$expression43 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments39['then'] = 'insecure';

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array47)]);
$array46['1'] = ' == -2';

$expression48 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments44['then'] = 'outdated';

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output37 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$arguments49['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array52)]);

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments49['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);
$arguments49['then'] = '';
$arguments49['else'] = 'inactive';

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output37 .= '">
					';
return $output37;
};
$arguments35['__elseClosures'][] = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
						<tr id="';
$array55 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array55)]);

$output54 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$arguments56['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array58 = array();
$array59 = array (
);$array58['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array59)]);

$expression60 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments56['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)
					),
					$renderingContext
				);
$arguments56['then'] = '';
$arguments56['else'] = 'inactive';

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output54 .= '">
					';
return $output54;
};

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['key'] = NULL;
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['languageKey'] = NULL;
$arguments128['alternativeLanguageKeys'] = NULL;
$arguments128['key'] = 'extensionList.updateDisabled';

$output127 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext)]);

$output127 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['identifier'] = NULL;
$arguments130['size'] = 'small';
$arguments130['overlay'] = NULL;
$arguments130['state'] = 'default';
$arguments130['alternativeMarkupIdentifier'] = NULL;
$arguments130['identifier'] = 'actions-system-extension-update';

$output127 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output127 .= '
								</span>
							';
return $output127;
};
$arguments125 = array();

$output124 .= '';

$output124 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output146 = '';

$output146 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['identifier'] = NULL;
$arguments147['size'] = 'small';
$arguments147['overlay'] = NULL;
$arguments147['state'] = 'default';
$arguments147['alternativeMarkupIdentifier'] = NULL;
$arguments147['identifier'] = 'actions-system-extension-update';

$output146 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output146 .= '
									';
return $output146;
};
$arguments135 = array();
$arguments135['additionalAttributes'] = NULL;
$arguments135['data'] = NULL;
$arguments135['class'] = NULL;
$arguments135['dir'] = NULL;
$arguments135['id'] = NULL;
$arguments135['lang'] = NULL;
$arguments135['style'] = NULL;
$arguments135['title'] = NULL;
$arguments135['accesskey'] = NULL;
$arguments135['tabindex'] = NULL;
$arguments135['onclick'] = NULL;
$arguments135['name'] = NULL;
$arguments135['rel'] = NULL;
$arguments135['rev'] = NULL;
$arguments135['target'] = NULL;
$arguments135['action'] = NULL;
$arguments135['controller'] = NULL;
$arguments135['extensionName'] = NULL;
$arguments135['pluginName'] = NULL;
$arguments135['pageUid'] = NULL;
$arguments135['pageType'] = NULL;
$arguments135['noCache'] = NULL;
$arguments135['noCacheHash'] = NULL;
$arguments135['section'] = NULL;
$arguments135['format'] = NULL;
$arguments135['linkAccessRestrictedPages'] = NULL;
$arguments135['additionalParams'] = NULL;
$arguments135['absolute'] = NULL;
$arguments135['addQueryString'] = NULL;
$arguments135['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments135['addQueryStringMethod'] = NULL;
$arguments135['arguments'] = NULL;
$arguments135['action'] = 'updateCommentForUpdatableVersions';
$arguments135['class'] = 'btn btn-default';
// Rendering Array
$array137 = array();
$array137['data-action'] = 'update-extension';
$arguments135['additionalAttributes'] = $array137;
$arguments135['format'] = 'json';
$arguments135['controller'] = 'Download';
// Rendering Array
$array138 = array();
$array139 = array (
);$array138['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array139);
$array140 = array (
);$array138['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array140);
$array141 = array (
);$array138['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array141);
$arguments135['arguments'] = $array138;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['key'] = NULL;
$arguments142['id'] = NULL;
$arguments142['default'] = NULL;
$arguments142['arguments'] = NULL;
$arguments142['extensionName'] = NULL;
$arguments142['languageKey'] = NULL;
$arguments142['alternativeLanguageKeys'] = NULL;
$arguments142['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array144 = array();
$array145 = array (
);$array144['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array145);
$arguments142['arguments'] = $array144;
$arguments135['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
							';
return $output134;
};
$arguments132 = array();
$arguments132['if'] = NULL;

$output124 .= '';

$output124 .= '
						';
return $output124;
};
$arguments99 = array();
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$arguments99['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array121 = array();
$array122 = array (
);$array121['0'] = $renderingContext->getVariableProvider()->getByPath('extension.state', $array122);
$array121['1'] = ' == \'excludeFromUpdates\'';

$expression123 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'excludeFromUpdates');};
$arguments99['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression123(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)
					),
					$renderingContext
				);
$arguments99['__thenClosure'] = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['key'] = NULL;
$arguments102['id'] = NULL;
$arguments102['default'] = NULL;
$arguments102['arguments'] = NULL;
$arguments102['extensionName'] = NULL;
$arguments102['languageKey'] = NULL;
$arguments102['alternativeLanguageKeys'] = NULL;
$arguments102['key'] = 'extensionList.updateDisabled';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext)]);

$output101 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['identifier'] = NULL;
$arguments104['size'] = 'small';
$arguments104['overlay'] = NULL;
$arguments104['state'] = 'default';
$arguments104['alternativeMarkupIdentifier'] = NULL;
$arguments104['identifier'] = 'actions-system-extension-update';

$output101 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output101 .= '
								</span>
							';
return $output101;
};
$arguments99['__elseClosures'][] = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['identifier'] = NULL;
$arguments119['size'] = 'small';
$arguments119['overlay'] = NULL;
$arguments119['state'] = 'default';
$arguments119['alternativeMarkupIdentifier'] = NULL;
$arguments119['identifier'] = 'actions-system-extension-update';

$output118 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
									';
return $output118;
};
$arguments107 = array();
$arguments107['additionalAttributes'] = NULL;
$arguments107['data'] = NULL;
$arguments107['class'] = NULL;
$arguments107['dir'] = NULL;
$arguments107['id'] = NULL;
$arguments107['lang'] = NULL;
$arguments107['style'] = NULL;
$arguments107['title'] = NULL;
$arguments107['accesskey'] = NULL;
$arguments107['tabindex'] = NULL;
$arguments107['onclick'] = NULL;
$arguments107['name'] = NULL;
$arguments107['rel'] = NULL;
$arguments107['rev'] = NULL;
$arguments107['target'] = NULL;
$arguments107['action'] = NULL;
$arguments107['controller'] = NULL;
$arguments107['extensionName'] = NULL;
$arguments107['pluginName'] = NULL;
$arguments107['pageUid'] = NULL;
$arguments107['pageType'] = NULL;
$arguments107['noCache'] = NULL;
$arguments107['noCacheHash'] = NULL;
$arguments107['section'] = NULL;
$arguments107['format'] = NULL;
$arguments107['linkAccessRestrictedPages'] = NULL;
$arguments107['additionalParams'] = NULL;
$arguments107['absolute'] = NULL;
$arguments107['addQueryString'] = NULL;
$arguments107['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments107['addQueryStringMethod'] = NULL;
$arguments107['arguments'] = NULL;
$arguments107['action'] = 'updateCommentForUpdatableVersions';
$arguments107['class'] = 'btn btn-default';
// Rendering Array
$array109 = array();
$array109['data-action'] = 'update-extension';
$arguments107['additionalAttributes'] = $array109;
$arguments107['format'] = 'json';
$arguments107['controller'] = 'Download';
// Rendering Array
$array110 = array();
$array111 = array (
);$array110['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array111);
$array112 = array (
);$array110['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array112);
$array113 = array (
);$array110['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array113);
$arguments107['arguments'] = $array110;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['key'] = NULL;
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['arguments'] = NULL;
$arguments114['extensionName'] = NULL;
$arguments114['languageKey'] = NULL;
$arguments114['alternativeLanguageKeys'] = NULL;
$arguments114['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array116 = array();
$array117 = array (
);$array116['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array117);
$arguments114['arguments'] = $array116;
$arguments107['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
							';
return $output106;
};

$output98 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
					';
return $output98;
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments93['__thenClosure'] = $renderChildrenClosure94;

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output34 .= '
				</td>
				<td data-order="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['then'] = NULL;
$arguments149['else'] = NULL;
$arguments149['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array151 = array();
$array152 = array (
);$array151['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array152);

$expression153 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments149['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression153(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array151)
					),
					$renderingContext
				);
$arguments149['then'] = 'active';
$arguments149['else'] = 'inactive';

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output34 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['additionalAttributes'] = NULL;
$arguments154['data'] = NULL;
$arguments154['class'] = NULL;
$arguments154['dir'] = NULL;
$arguments154['id'] = NULL;
$arguments154['lang'] = NULL;
$arguments154['style'] = NULL;
$arguments154['title'] = NULL;
$arguments154['accesskey'] = NULL;
$arguments154['tabindex'] = NULL;
$arguments154['onclick'] = NULL;
$arguments154['name'] = NULL;
$arguments154['rel'] = NULL;
$arguments154['rev'] = NULL;
$arguments154['target'] = NULL;
$arguments154['action'] = NULL;
$arguments154['controller'] = NULL;
$arguments154['extensionName'] = NULL;
$arguments154['pluginName'] = NULL;
$arguments154['pageUid'] = NULL;
$arguments154['pageType'] = NULL;
$arguments154['noCache'] = NULL;
$arguments154['noCacheHash'] = NULL;
$arguments154['section'] = NULL;
$arguments154['format'] = NULL;
$arguments154['linkAccessRestrictedPages'] = NULL;
$arguments154['additionalParams'] = NULL;
$arguments154['absolute'] = NULL;
$arguments154['addQueryString'] = NULL;
$arguments154['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments154['addQueryStringMethod'] = NULL;
$arguments154['arguments'] = NULL;
$arguments154['extension'] = NULL;
$array156 = array (
);$arguments154['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array156);

$output34 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output34 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$output162 = '';

$output162 .= '
						<img class="ext-icon" src="../';
$array163 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.siteRelPath', $array163)]);
$array164 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array164)]);

$output162 .= '" alt="';
$array165 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array165)]);

$output162 .= '" />
					';
return $output162;
};
$arguments157 = array();
$arguments157['then'] = NULL;
$arguments157['else'] = NULL;
$arguments157['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array159 = array();
$array160 = array (
);$array159['0'] = $renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array160);

$expression161 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments157['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression161(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array159)
					),
					$renderingContext
				);
$arguments157['__thenClosure'] = $renderChildrenClosure158;

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output34 .= '
					<span title="';
$array166 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.description', $array166)]);

$output34 .= '">';
$array167 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array167)]);

$output34 .= '</span>
				</td>
				<td>
					';
$array168 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array168)]);

$output34 .= '
				</td>
				<td>
					';
$array169 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.version', $array169)]);

$output34 .= '
				</td>
				<td>
					<span class="label label-';
$array170 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array170)]);

$output34 .= '">';
$array171 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array171)]);

$output34 .= '</span>
				</td>
				<td>
					';
$array172 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.type', $array172)]);

$output34 .= '
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['additionalAttributes'] = NULL;
$arguments177['data'] = NULL;
$arguments177['class'] = NULL;
$arguments177['dir'] = NULL;
$arguments177['id'] = NULL;
$arguments177['lang'] = NULL;
$arguments177['style'] = NULL;
$arguments177['title'] = NULL;
$arguments177['accesskey'] = NULL;
$arguments177['tabindex'] = NULL;
$arguments177['onclick'] = NULL;
$arguments177['name'] = NULL;
$arguments177['rel'] = NULL;
$arguments177['rev'] = NULL;
$arguments177['target'] = NULL;
$arguments177['action'] = NULL;
$arguments177['controller'] = NULL;
$arguments177['extensionName'] = NULL;
$arguments177['pluginName'] = NULL;
$arguments177['pageUid'] = NULL;
$arguments177['pageType'] = NULL;
$arguments177['noCache'] = NULL;
$arguments177['noCacheHash'] = NULL;
$arguments177['section'] = NULL;
$arguments177['format'] = NULL;
$arguments177['linkAccessRestrictedPages'] = NULL;
$arguments177['additionalParams'] = NULL;
$arguments177['absolute'] = NULL;
$arguments177['addQueryString'] = NULL;
$arguments177['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments177['addQueryStringMethod'] = NULL;
$arguments177['arguments'] = NULL;
$arguments177['extensionKey'] = NULL;
$arguments177['class'] = 'btn btn-default';
$array179 = array (
);$arguments177['extensionKey'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array179);

$output176 .= TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output176 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['additionalAttributes'] = NULL;
$arguments180['data'] = NULL;
$arguments180['class'] = NULL;
$arguments180['dir'] = NULL;
$arguments180['id'] = NULL;
$arguments180['lang'] = NULL;
$arguments180['style'] = NULL;
$arguments180['title'] = NULL;
$arguments180['accesskey'] = NULL;
$arguments180['tabindex'] = NULL;
$arguments180['onclick'] = NULL;
$arguments180['name'] = NULL;
$arguments180['rel'] = NULL;
$arguments180['rev'] = NULL;
$arguments180['target'] = NULL;
$arguments180['action'] = NULL;
$arguments180['controller'] = NULL;
$arguments180['extensionName'] = NULL;
$arguments180['pluginName'] = NULL;
$arguments180['pageUid'] = NULL;
$arguments180['pageType'] = NULL;
$arguments180['noCache'] = NULL;
$arguments180['noCacheHash'] = NULL;
$arguments180['section'] = NULL;
$arguments180['format'] = NULL;
$arguments180['linkAccessRestrictedPages'] = NULL;
$arguments180['additionalParams'] = NULL;
$arguments180['absolute'] = NULL;
$arguments180['addQueryString'] = NULL;
$arguments180['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments180['addQueryStringMethod'] = NULL;
$arguments180['arguments'] = NULL;
$arguments180['extension'] = NULL;
$arguments180['class'] = 'btn btn-default';
$array182 = array (
);$arguments180['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array182);

$output176 .= TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output176 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output189 = '';

$output189 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['identifier'] = NULL;
$arguments190['size'] = 'small';
$arguments190['overlay'] = NULL;
$arguments190['state'] = 'default';
$arguments190['alternativeMarkupIdentifier'] = NULL;
$arguments190['identifier'] = 'actions-system-extension-download';

$output189 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output189 .= '
							';
return $output189;
};
$arguments183 = array();
$arguments183['additionalAttributes'] = NULL;
$arguments183['data'] = NULL;
$arguments183['class'] = NULL;
$arguments183['dir'] = NULL;
$arguments183['id'] = NULL;
$arguments183['lang'] = NULL;
$arguments183['style'] = NULL;
$arguments183['title'] = NULL;
$arguments183['accesskey'] = NULL;
$arguments183['tabindex'] = NULL;
$arguments183['onclick'] = NULL;
$arguments183['name'] = NULL;
$arguments183['rel'] = NULL;
$arguments183['rev'] = NULL;
$arguments183['target'] = NULL;
$arguments183['action'] = NULL;
$arguments183['controller'] = NULL;
$arguments183['extensionName'] = NULL;
$arguments183['pluginName'] = NULL;
$arguments183['pageUid'] = NULL;
$arguments183['pageType'] = NULL;
$arguments183['noCache'] = NULL;
$arguments183['noCacheHash'] = NULL;
$arguments183['section'] = NULL;
$arguments183['format'] = NULL;
$arguments183['linkAccessRestrictedPages'] = NULL;
$arguments183['additionalParams'] = NULL;
$arguments183['absolute'] = NULL;
$arguments183['addQueryString'] = NULL;
$arguments183['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments183['addQueryStringMethod'] = NULL;
$arguments183['arguments'] = NULL;
$arguments183['action'] = 'downloadExtensionZip';
$arguments183['controller'] = 'Action';
// Rendering Array
$array185 = array();
$array186 = array (
);$array185['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array186);
$arguments183['arguments'] = $array185;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['key'] = NULL;
$arguments187['id'] = NULL;
$arguments187['default'] = NULL;
$arguments187['arguments'] = NULL;
$arguments187['extensionName'] = NULL;
$arguments187['languageKey'] = NULL;
$arguments187['alternativeLanguageKeys'] = NULL;
$arguments187['key'] = 'extensionList.downloadzip';
$arguments183['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);
$arguments183['class'] = 'btn btn-default';

$output176 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output176 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['additionalAttributes'] = NULL;
$arguments192['data'] = NULL;
$arguments192['class'] = NULL;
$arguments192['dir'] = NULL;
$arguments192['id'] = NULL;
$arguments192['lang'] = NULL;
$arguments192['style'] = NULL;
$arguments192['title'] = NULL;
$arguments192['accesskey'] = NULL;
$arguments192['tabindex'] = NULL;
$arguments192['onclick'] = NULL;
$arguments192['name'] = NULL;
$arguments192['rel'] = NULL;
$arguments192['rev'] = NULL;
$arguments192['target'] = NULL;
$arguments192['action'] = NULL;
$arguments192['controller'] = NULL;
$arguments192['extensionName'] = NULL;
$arguments192['pluginName'] = NULL;
$arguments192['pageUid'] = NULL;
$arguments192['pageType'] = NULL;
$arguments192['noCache'] = NULL;
$arguments192['noCacheHash'] = NULL;
$arguments192['section'] = NULL;
$arguments192['format'] = NULL;
$arguments192['linkAccessRestrictedPages'] = NULL;
$arguments192['additionalParams'] = NULL;
$arguments192['absolute'] = NULL;
$arguments192['addQueryString'] = NULL;
$arguments192['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments192['addQueryStringMethod'] = NULL;
$arguments192['arguments'] = NULL;
$arguments192['extension'] = NULL;
$arguments192['class'] = 'btn btn-default';
$array194 = array (
);$arguments192['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array194);

$output176 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output176 .= '
						';
return $output176;
};
$arguments173 = array();
$arguments173['additionalAttributes'] = NULL;
$arguments173['data'] = NULL;
$arguments173['extension'] = NULL;
$array175 = array (
);$arguments173['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array175);

$output34 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output34 .= '
					</div>
				</td>
				</tr>
			';
return $output34;
};
$arguments31 = array();
$arguments31['each'] = NULL;
$arguments31['as'] = NULL;
$arguments31['key'] = NULL;
$arguments31['reverse'] = false;
$arguments31['iteration'] = NULL;
$array33 = array (
);$arguments31['each'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array33);
$arguments31['as'] = 'extension';
$arguments31['key'] = 'extensionKey';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output3 .= '
		</tbody>
	</table>
	</div>
';

return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output195 = '';

$output195 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments196 = array();
$arguments196['name'] = NULL;
$arguments196['name'] = 'main';

$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output195 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$output200 = '';

$output200 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['key'] = NULL;
$arguments201['id'] = NULL;
$arguments201['default'] = NULL;
$arguments201['arguments'] = NULL;
$arguments201['extensionName'] = NULL;
$arguments201['languageKey'] = NULL;
$arguments201['alternativeLanguageKeys'] = NULL;
$arguments201['key'] = 'installedExtensions';

$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext)]);

$output200 .= '</h1>
';
return $output200;
};
$arguments198 = array();
$arguments198['name'] = NULL;
$arguments198['name'] = 'headline';

$output195 .= NULL;

$output195 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['section'] = NULL;
$arguments206['partial'] = NULL;
$arguments206['delegate'] = NULL;
$arguments206['renderable'] = NULL;
$arguments206['arguments'] = array (
);
$arguments206['optional'] = false;
$arguments206['default'] = NULL;
$arguments206['contentAs'] = NULL;
$arguments206['debug'] = true;
$arguments206['partial'] = 'List/UploadForm';

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output205 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();
$arguments208['additionalAttributes'] = NULL;
$arguments208['data'] = NULL;
$arguments208['name'] = NULL;
$arguments208['value'] = NULL;
$arguments208['property'] = NULL;
$arguments208['autofocus'] = NULL;
$arguments208['disabled'] = NULL;
$arguments208['maxlength'] = NULL;
$arguments208['readonly'] = NULL;
$arguments208['size'] = NULL;
$arguments208['placeholder'] = NULL;
$arguments208['pattern'] = NULL;
$arguments208['errorClass'] = 'f3-form-error';
$arguments208['class'] = NULL;
$arguments208['dir'] = NULL;
$arguments208['id'] = NULL;
$arguments208['lang'] = NULL;
$arguments208['style'] = NULL;
$arguments208['title'] = NULL;
$arguments208['accesskey'] = NULL;
$arguments208['tabindex'] = NULL;
$arguments208['onclick'] = NULL;
$arguments208['required'] = false;
$arguments208['type'] = 'text';
$arguments208['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['key'] = NULL;
$arguments210['id'] = NULL;
$arguments210['default'] = NULL;
$arguments210['arguments'] = NULL;
$arguments210['extensionName'] = NULL;
$arguments210['languageKey'] = NULL;
$arguments210['alternativeLanguageKeys'] = NULL;
$arguments210['key'] = 'extensionList.search';
$arguments208['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);
$arguments208['id'] = 'Tx_Extensionmanager_extensionkey';
$array212 = array (
);$arguments208['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array212);
$arguments208['class'] = 'form-control';

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output205 .= '
		</div>
	</form>
	<br>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['key'] = NULL;
$arguments213['id'] = NULL;
$arguments213['default'] = NULL;
$arguments213['arguments'] = NULL;
$arguments213['extensionName'] = NULL;
$arguments213['languageKey'] = NULL;
$arguments213['alternativeLanguageKeys'] = NULL;
$arguments213['key'] = 'extensionList.header.title.update';

$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext)]);

$output205 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['key'] = NULL;
$arguments215['id'] = NULL;
$arguments215['default'] = NULL;
$arguments215['arguments'] = NULL;
$arguments215['extensionName'] = NULL;
$arguments215['languageKey'] = NULL;
$arguments215['alternativeLanguageKeys'] = NULL;
$arguments215['key'] = 'extensionList.header.update';

$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext)]);

$output205 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['key'] = NULL;
$arguments217['id'] = NULL;
$arguments217['default'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['extensionName'] = NULL;
$arguments217['languageKey'] = NULL;
$arguments217['alternativeLanguageKeys'] = NULL;
$arguments217['key'] = 'extensionList.header.title.activate';

$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext)]);

$output205 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['key'] = NULL;
$arguments219['id'] = NULL;
$arguments219['default'] = NULL;
$arguments219['arguments'] = NULL;
$arguments219['extensionName'] = NULL;
$arguments219['languageKey'] = NULL;
$arguments219['alternativeLanguageKeys'] = NULL;
$arguments219['key'] = 'extensionList.header.activate';

$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext)]);

$output205 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['key'] = NULL;
$arguments221['id'] = NULL;
$arguments221['default'] = NULL;
$arguments221['arguments'] = NULL;
$arguments221['extensionName'] = NULL;
$arguments221['languageKey'] = NULL;
$arguments221['alternativeLanguageKeys'] = NULL;
$arguments221['key'] = 'extensionList.header.extensionName';

$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext)]);

$output205 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments223 = array();
$arguments223['key'] = NULL;
$arguments223['id'] = NULL;
$arguments223['default'] = NULL;
$arguments223['arguments'] = NULL;
$arguments223['extensionName'] = NULL;
$arguments223['languageKey'] = NULL;
$arguments223['alternativeLanguageKeys'] = NULL;
$arguments223['key'] = 'extensionList.header.extensionKey';

$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext)]);

$output205 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments225 = array();
$arguments225['key'] = NULL;
$arguments225['id'] = NULL;
$arguments225['default'] = NULL;
$arguments225['arguments'] = NULL;
$arguments225['extensionName'] = NULL;
$arguments225['languageKey'] = NULL;
$arguments225['alternativeLanguageKeys'] = NULL;
$arguments225['key'] = 'extensionList.header.extensionVersion';

$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext)]);

$output205 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['key'] = NULL;
$arguments227['id'] = NULL;
$arguments227['default'] = NULL;
$arguments227['arguments'] = NULL;
$arguments227['extensionName'] = NULL;
$arguments227['languageKey'] = NULL;
$arguments227['alternativeLanguageKeys'] = NULL;
$arguments227['key'] = 'extensionList.header.extensionState';

$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext)]);

$output205 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['key'] = NULL;
$arguments229['id'] = NULL;
$arguments229['default'] = NULL;
$arguments229['arguments'] = NULL;
$arguments229['extensionName'] = NULL;
$arguments229['languageKey'] = NULL;
$arguments229['alternativeLanguageKeys'] = NULL;
$arguments229['key'] = 'extensionList.header.extensionType';

$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext)]);

$output205 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['key'] = NULL;
$arguments231['id'] = NULL;
$arguments231['default'] = NULL;
$arguments231['arguments'] = NULL;
$arguments231['extensionName'] = NULL;
$arguments231['languageKey'] = NULL;
$arguments231['alternativeLanguageKeys'] = NULL;
$arguments231['key'] = 'extensionList.header.extensionActions';

$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext)]);

$output205 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$output266 = '';

$output266 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
$output269 = '';

$output269 .= '
						<tr id="';
$array270 = array (
);
$output269 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array270)]);

$output269 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments271 = array();
$arguments271['then'] = NULL;
$arguments271['else'] = NULL;
$arguments271['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array273 = array();
$array274 = array (
);$array273['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array274)]);
$array273['1'] = ' == -1';

$expression275 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments271['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression275(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array273)
					),
					$renderingContext
				);
$arguments271['then'] = 'insecure';

$output269 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments276 = array();
$arguments276['then'] = NULL;
$arguments276['else'] = NULL;
$arguments276['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array278 = array();
$array279 = array (
);$array278['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array279)]);
$array278['1'] = ' == -2';

$expression280 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments276['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression280(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array278)
					),
					$renderingContext
				);
$arguments276['then'] = 'outdated';

$output269 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output269 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['then'] = NULL;
$arguments281['else'] = NULL;
$arguments281['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array283 = array();
$array284 = array (
);$array283['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array284)]);

$expression285 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments281['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression285(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array283)
					),
					$renderingContext
				);
$arguments281['then'] = '';
$arguments281['else'] = 'inactive';

$output269 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output269 .= '">
					';
return $output269;
};
$arguments267 = array();

$output266 .= '';

$output266 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
$output288 = '';

$output288 .= '
						<tr id="';
$array289 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array289)]);

$output288 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments290 = array();
$arguments290['then'] = NULL;
$arguments290['else'] = NULL;
$arguments290['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array292 = array();
$array293 = array (
);$array292['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array293)]);

$expression294 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments290['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression294(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array292)
					),
					$renderingContext
				);
$arguments290['then'] = '';
$arguments290['else'] = 'inactive';

$output288 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext);

$output288 .= '">
					';
return $output288;
};
$arguments286 = array();
$arguments286['if'] = NULL;

$output266 .= '';

$output266 .= '
				';
return $output266;
};
$arguments237 = array();
$arguments237['then'] = NULL;
$arguments237['else'] = NULL;
$arguments237['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array263 = array();
$array264 = array (
);$array263['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject', $array264);

$expression265 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments237['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression265(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array263)
					),
					$renderingContext
				);
$arguments237['__thenClosure'] = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
						<tr id="';
$array240 = array (
);
$output239 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array240)]);

$output239 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['then'] = NULL;
$arguments241['else'] = NULL;
$arguments241['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array243 = array();
$array244 = array (
);$array243['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array244)]);
$array243['1'] = ' == -1';

$expression245 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments241['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression245(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array243)
					),
					$renderingContext
				);
$arguments241['then'] = 'insecure';

$output239 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments246 = array();
$arguments246['then'] = NULL;
$arguments246['else'] = NULL;
$arguments246['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array248 = array();
$array249 = array (
);$array248['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array249)]);
$array248['1'] = ' == -2';

$expression250 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments246['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression250(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array248)
					),
					$renderingContext
				);
$arguments246['then'] = 'outdated';

$output239 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output239 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments251 = array();
$arguments251['then'] = NULL;
$arguments251['else'] = NULL;
$arguments251['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array253 = array();
$array254 = array (
);$array253['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array254)]);

$expression255 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments251['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression255(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array253)
					),
					$renderingContext
				);
$arguments251['then'] = '';
$arguments251['else'] = 'inactive';

$output239 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output239 .= '">
					';
return $output239;
};
$arguments237['__elseClosures'][] = function() use ($renderingContext, $self) {
$output256 = '';

$output256 .= '
						<tr id="';
$array257 = array (
);
$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array257)]);

$output256 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments258 = array();
$arguments258['then'] = NULL;
$arguments258['else'] = NULL;
$arguments258['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array260 = array();
$array261 = array (
);$array260['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array261)]);

$expression262 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments258['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression262(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array260)
					),
					$renderingContext
				);
$arguments258['then'] = '';
$arguments258['else'] = 'inactive';

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output256 .= '">
					';
return $output256;
};

$output236 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output236 .= '
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
$output300 = '';

$output300 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
$output326 = '';

$output326 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
$output329 = '';

$output329 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments330 = array();
$arguments330['key'] = NULL;
$arguments330['id'] = NULL;
$arguments330['default'] = NULL;
$arguments330['arguments'] = NULL;
$arguments330['extensionName'] = NULL;
$arguments330['languageKey'] = NULL;
$arguments330['alternativeLanguageKeys'] = NULL;
$arguments330['key'] = 'extensionList.updateDisabled';

$output329 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments330, $renderChildrenClosure331, $renderingContext)]);

$output329 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['identifier'] = NULL;
$arguments332['size'] = 'small';
$arguments332['overlay'] = NULL;
$arguments332['state'] = 'default';
$arguments332['alternativeMarkupIdentifier'] = NULL;
$arguments332['identifier'] = 'actions-system-extension-update';

$output329 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output329 .= '
								</span>
							';
return $output329;
};
$arguments327 = array();

$output326 .= '';

$output326 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
$output336 = '';

$output336 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments349 = array();
$arguments349['identifier'] = NULL;
$arguments349['size'] = 'small';
$arguments349['overlay'] = NULL;
$arguments349['state'] = 'default';
$arguments349['alternativeMarkupIdentifier'] = NULL;
$arguments349['identifier'] = 'actions-system-extension-update';

$output348 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);

$output348 .= '
									';
return $output348;
};
$arguments337 = array();
$arguments337['additionalAttributes'] = NULL;
$arguments337['data'] = NULL;
$arguments337['class'] = NULL;
$arguments337['dir'] = NULL;
$arguments337['id'] = NULL;
$arguments337['lang'] = NULL;
$arguments337['style'] = NULL;
$arguments337['title'] = NULL;
$arguments337['accesskey'] = NULL;
$arguments337['tabindex'] = NULL;
$arguments337['onclick'] = NULL;
$arguments337['name'] = NULL;
$arguments337['rel'] = NULL;
$arguments337['rev'] = NULL;
$arguments337['target'] = NULL;
$arguments337['action'] = NULL;
$arguments337['controller'] = NULL;
$arguments337['extensionName'] = NULL;
$arguments337['pluginName'] = NULL;
$arguments337['pageUid'] = NULL;
$arguments337['pageType'] = NULL;
$arguments337['noCache'] = NULL;
$arguments337['noCacheHash'] = NULL;
$arguments337['section'] = NULL;
$arguments337['format'] = NULL;
$arguments337['linkAccessRestrictedPages'] = NULL;
$arguments337['additionalParams'] = NULL;
$arguments337['absolute'] = NULL;
$arguments337['addQueryString'] = NULL;
$arguments337['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments337['addQueryStringMethod'] = NULL;
$arguments337['arguments'] = NULL;
$arguments337['action'] = 'updateCommentForUpdatableVersions';
$arguments337['class'] = 'btn btn-default';
// Rendering Array
$array339 = array();
$array339['data-action'] = 'update-extension';
$arguments337['additionalAttributes'] = $array339;
$arguments337['format'] = 'json';
$arguments337['controller'] = 'Download';
// Rendering Array
$array340 = array();
$array341 = array (
);$array340['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array341);
$array342 = array (
);$array340['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array342);
$array343 = array (
);$array340['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array343);
$arguments337['arguments'] = $array340;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments344 = array();
$arguments344['key'] = NULL;
$arguments344['id'] = NULL;
$arguments344['default'] = NULL;
$arguments344['arguments'] = NULL;
$arguments344['extensionName'] = NULL;
$arguments344['languageKey'] = NULL;
$arguments344['alternativeLanguageKeys'] = NULL;
$arguments344['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array346 = array();
$array347 = array (
);$array346['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array347);
$arguments344['arguments'] = $array346;
$arguments337['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext);

$output336 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);

$output336 .= '
							';
return $output336;
};
$arguments334 = array();
$arguments334['if'] = NULL;

$output326 .= '';

$output326 .= '
						';
return $output326;
};
$arguments301 = array();
$arguments301['then'] = NULL;
$arguments301['else'] = NULL;
$arguments301['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array323 = array();
$array324 = array (
);$array323['0'] = $renderingContext->getVariableProvider()->getByPath('extension.state', $array324);
$array323['1'] = ' == \'excludeFromUpdates\'';

$expression325 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'excludeFromUpdates');};
$arguments301['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression325(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array323)
					),
					$renderingContext
				);
$arguments301['__thenClosure'] = function() use ($renderingContext, $self) {
$output303 = '';

$output303 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['key'] = NULL;
$arguments304['id'] = NULL;
$arguments304['default'] = NULL;
$arguments304['arguments'] = NULL;
$arguments304['extensionName'] = NULL;
$arguments304['languageKey'] = NULL;
$arguments304['alternativeLanguageKeys'] = NULL;
$arguments304['key'] = 'extensionList.updateDisabled';

$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext)]);

$output303 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['identifier'] = NULL;
$arguments306['size'] = 'small';
$arguments306['overlay'] = NULL;
$arguments306['state'] = 'default';
$arguments306['alternativeMarkupIdentifier'] = NULL;
$arguments306['identifier'] = 'actions-system-extension-update';

$output303 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output303 .= '
								</span>
							';
return $output303;
};
$arguments301['__elseClosures'][] = function() use ($renderingContext, $self) {
$output308 = '';

$output308 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$output320 = '';

$output320 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments321 = array();
$arguments321['identifier'] = NULL;
$arguments321['size'] = 'small';
$arguments321['overlay'] = NULL;
$arguments321['state'] = 'default';
$arguments321['alternativeMarkupIdentifier'] = NULL;
$arguments321['identifier'] = 'actions-system-extension-update';

$output320 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output320 .= '
									';
return $output320;
};
$arguments309 = array();
$arguments309['additionalAttributes'] = NULL;
$arguments309['data'] = NULL;
$arguments309['class'] = NULL;
$arguments309['dir'] = NULL;
$arguments309['id'] = NULL;
$arguments309['lang'] = NULL;
$arguments309['style'] = NULL;
$arguments309['title'] = NULL;
$arguments309['accesskey'] = NULL;
$arguments309['tabindex'] = NULL;
$arguments309['onclick'] = NULL;
$arguments309['name'] = NULL;
$arguments309['rel'] = NULL;
$arguments309['rev'] = NULL;
$arguments309['target'] = NULL;
$arguments309['action'] = NULL;
$arguments309['controller'] = NULL;
$arguments309['extensionName'] = NULL;
$arguments309['pluginName'] = NULL;
$arguments309['pageUid'] = NULL;
$arguments309['pageType'] = NULL;
$arguments309['noCache'] = NULL;
$arguments309['noCacheHash'] = NULL;
$arguments309['section'] = NULL;
$arguments309['format'] = NULL;
$arguments309['linkAccessRestrictedPages'] = NULL;
$arguments309['additionalParams'] = NULL;
$arguments309['absolute'] = NULL;
$arguments309['addQueryString'] = NULL;
$arguments309['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments309['addQueryStringMethod'] = NULL;
$arguments309['arguments'] = NULL;
$arguments309['action'] = 'updateCommentForUpdatableVersions';
$arguments309['class'] = 'btn btn-default';
// Rendering Array
$array311 = array();
$array311['data-action'] = 'update-extension';
$arguments309['additionalAttributes'] = $array311;
$arguments309['format'] = 'json';
$arguments309['controller'] = 'Download';
// Rendering Array
$array312 = array();
$array313 = array (
);$array312['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array313);
$array314 = array (
);$array312['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array314);
$array315 = array (
);$array312['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array315);
$arguments309['arguments'] = $array312;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments316 = array();
$arguments316['key'] = NULL;
$arguments316['id'] = NULL;
$arguments316['default'] = NULL;
$arguments316['arguments'] = NULL;
$arguments316['extensionName'] = NULL;
$arguments316['languageKey'] = NULL;
$arguments316['alternativeLanguageKeys'] = NULL;
$arguments316['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array318 = array();
$array319 = array (
);$array318['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array319);
$arguments316['arguments'] = $array318;
$arguments309['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output308 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output308 .= '
							';
return $output308;
};

$output300 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext);

$output300 .= '
					';
return $output300;
};
$arguments295 = array();
$arguments295['then'] = NULL;
$arguments295['else'] = NULL;
$arguments295['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array297 = array();
$array298 = array (
);$array297['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable', $array298);

$expression299 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments295['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression299(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array297)
					),
					$renderingContext
				);
$arguments295['__thenClosure'] = $renderChildrenClosure296;

$output236 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output236 .= '
				</td>
				<td data-order="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments351 = array();
$arguments351['then'] = NULL;
$arguments351['else'] = NULL;
$arguments351['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array353 = array();
$array354 = array (
);$array353['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array354);

$expression355 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments351['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression355(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array353)
					),
					$renderingContext
				);
$arguments351['then'] = 'active';
$arguments351['else'] = 'inactive';

$output236 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output236 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments356 = array();
$arguments356['additionalAttributes'] = NULL;
$arguments356['data'] = NULL;
$arguments356['class'] = NULL;
$arguments356['dir'] = NULL;
$arguments356['id'] = NULL;
$arguments356['lang'] = NULL;
$arguments356['style'] = NULL;
$arguments356['title'] = NULL;
$arguments356['accesskey'] = NULL;
$arguments356['tabindex'] = NULL;
$arguments356['onclick'] = NULL;
$arguments356['name'] = NULL;
$arguments356['rel'] = NULL;
$arguments356['rev'] = NULL;
$arguments356['target'] = NULL;
$arguments356['action'] = NULL;
$arguments356['controller'] = NULL;
$arguments356['extensionName'] = NULL;
$arguments356['pluginName'] = NULL;
$arguments356['pageUid'] = NULL;
$arguments356['pageType'] = NULL;
$arguments356['noCache'] = NULL;
$arguments356['noCacheHash'] = NULL;
$arguments356['section'] = NULL;
$arguments356['format'] = NULL;
$arguments356['linkAccessRestrictedPages'] = NULL;
$arguments356['additionalParams'] = NULL;
$arguments356['absolute'] = NULL;
$arguments356['addQueryString'] = NULL;
$arguments356['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments356['addQueryStringMethod'] = NULL;
$arguments356['arguments'] = NULL;
$arguments356['extension'] = NULL;
$array358 = array (
);$arguments356['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array358);

$output236 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output236 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
$output364 = '';

$output364 .= '
						<img class="ext-icon" src="../';
$array365 = array (
);
$output364 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.siteRelPath', $array365)]);
$array366 = array (
);
$output364 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array366)]);

$output364 .= '" alt="';
$array367 = array (
);
$output364 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array367)]);

$output364 .= '" />
					';
return $output364;
};
$arguments359 = array();
$arguments359['then'] = NULL;
$arguments359['else'] = NULL;
$arguments359['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array361 = array();
$array362 = array (
);$array361['0'] = $renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array362);

$expression363 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments359['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression363(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array361)
					),
					$renderingContext
				);
$arguments359['__thenClosure'] = $renderChildrenClosure360;

$output236 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext);

$output236 .= '
					<span title="';
$array368 = array (
);
$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.description', $array368)]);

$output236 .= '">';
$array369 = array (
);
$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array369)]);

$output236 .= '</span>
				</td>
				<td>
					';
$array370 = array (
);
$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array370)]);

$output236 .= '
				</td>
				<td>
					';
$array371 = array (
);
$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.version', $array371)]);

$output236 .= '
				</td>
				<td>
					<span class="label label-';
$array372 = array (
);
$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array372)]);

$output236 .= '">';
$array373 = array (
);
$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array373)]);

$output236 .= '</span>
				</td>
				<td>
					';
$array374 = array (
);
$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.type', $array374)]);

$output236 .= '
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
$output378 = '';

$output378 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments379 = array();
$arguments379['additionalAttributes'] = NULL;
$arguments379['data'] = NULL;
$arguments379['class'] = NULL;
$arguments379['dir'] = NULL;
$arguments379['id'] = NULL;
$arguments379['lang'] = NULL;
$arguments379['style'] = NULL;
$arguments379['title'] = NULL;
$arguments379['accesskey'] = NULL;
$arguments379['tabindex'] = NULL;
$arguments379['onclick'] = NULL;
$arguments379['name'] = NULL;
$arguments379['rel'] = NULL;
$arguments379['rev'] = NULL;
$arguments379['target'] = NULL;
$arguments379['action'] = NULL;
$arguments379['controller'] = NULL;
$arguments379['extensionName'] = NULL;
$arguments379['pluginName'] = NULL;
$arguments379['pageUid'] = NULL;
$arguments379['pageType'] = NULL;
$arguments379['noCache'] = NULL;
$arguments379['noCacheHash'] = NULL;
$arguments379['section'] = NULL;
$arguments379['format'] = NULL;
$arguments379['linkAccessRestrictedPages'] = NULL;
$arguments379['additionalParams'] = NULL;
$arguments379['absolute'] = NULL;
$arguments379['addQueryString'] = NULL;
$arguments379['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments379['addQueryStringMethod'] = NULL;
$arguments379['arguments'] = NULL;
$arguments379['extensionKey'] = NULL;
$arguments379['class'] = 'btn btn-default';
$array381 = array (
);$arguments379['extensionKey'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array381);

$output378 .= TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext);

$output378 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments382 = array();
$arguments382['additionalAttributes'] = NULL;
$arguments382['data'] = NULL;
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
$arguments382['rel'] = NULL;
$arguments382['rev'] = NULL;
$arguments382['target'] = NULL;
$arguments382['action'] = NULL;
$arguments382['controller'] = NULL;
$arguments382['extensionName'] = NULL;
$arguments382['pluginName'] = NULL;
$arguments382['pageUid'] = NULL;
$arguments382['pageType'] = NULL;
$arguments382['noCache'] = NULL;
$arguments382['noCacheHash'] = NULL;
$arguments382['section'] = NULL;
$arguments382['format'] = NULL;
$arguments382['linkAccessRestrictedPages'] = NULL;
$arguments382['additionalParams'] = NULL;
$arguments382['absolute'] = NULL;
$arguments382['addQueryString'] = NULL;
$arguments382['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments382['addQueryStringMethod'] = NULL;
$arguments382['arguments'] = NULL;
$arguments382['extension'] = NULL;
$arguments382['class'] = 'btn btn-default';
$array384 = array (
);$arguments382['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array384);

$output378 .= TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output378 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
$output391 = '';

$output391 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments392 = array();
$arguments392['identifier'] = NULL;
$arguments392['size'] = 'small';
$arguments392['overlay'] = NULL;
$arguments392['state'] = 'default';
$arguments392['alternativeMarkupIdentifier'] = NULL;
$arguments392['identifier'] = 'actions-system-extension-download';

$output391 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments392, $renderChildrenClosure393, $renderingContext);

$output391 .= '
							';
return $output391;
};
$arguments385 = array();
$arguments385['additionalAttributes'] = NULL;
$arguments385['data'] = NULL;
$arguments385['class'] = NULL;
$arguments385['dir'] = NULL;
$arguments385['id'] = NULL;
$arguments385['lang'] = NULL;
$arguments385['style'] = NULL;
$arguments385['title'] = NULL;
$arguments385['accesskey'] = NULL;
$arguments385['tabindex'] = NULL;
$arguments385['onclick'] = NULL;
$arguments385['name'] = NULL;
$arguments385['rel'] = NULL;
$arguments385['rev'] = NULL;
$arguments385['target'] = NULL;
$arguments385['action'] = NULL;
$arguments385['controller'] = NULL;
$arguments385['extensionName'] = NULL;
$arguments385['pluginName'] = NULL;
$arguments385['pageUid'] = NULL;
$arguments385['pageType'] = NULL;
$arguments385['noCache'] = NULL;
$arguments385['noCacheHash'] = NULL;
$arguments385['section'] = NULL;
$arguments385['format'] = NULL;
$arguments385['linkAccessRestrictedPages'] = NULL;
$arguments385['additionalParams'] = NULL;
$arguments385['absolute'] = NULL;
$arguments385['addQueryString'] = NULL;
$arguments385['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments385['addQueryStringMethod'] = NULL;
$arguments385['arguments'] = NULL;
$arguments385['action'] = 'downloadExtensionZip';
$arguments385['controller'] = 'Action';
// Rendering Array
$array387 = array();
$array388 = array (
);$array387['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array388);
$arguments385['arguments'] = $array387;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments389 = array();
$arguments389['key'] = NULL;
$arguments389['id'] = NULL;
$arguments389['default'] = NULL;
$arguments389['arguments'] = NULL;
$arguments389['extensionName'] = NULL;
$arguments389['languageKey'] = NULL;
$arguments389['alternativeLanguageKeys'] = NULL;
$arguments389['key'] = 'extensionList.downloadzip';
$arguments385['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);
$arguments385['class'] = 'btn btn-default';

$output378 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);

$output378 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments394 = array();
$arguments394['additionalAttributes'] = NULL;
$arguments394['data'] = NULL;
$arguments394['class'] = NULL;
$arguments394['dir'] = NULL;
$arguments394['id'] = NULL;
$arguments394['lang'] = NULL;
$arguments394['style'] = NULL;
$arguments394['title'] = NULL;
$arguments394['accesskey'] = NULL;
$arguments394['tabindex'] = NULL;
$arguments394['onclick'] = NULL;
$arguments394['name'] = NULL;
$arguments394['rel'] = NULL;
$arguments394['rev'] = NULL;
$arguments394['target'] = NULL;
$arguments394['action'] = NULL;
$arguments394['controller'] = NULL;
$arguments394['extensionName'] = NULL;
$arguments394['pluginName'] = NULL;
$arguments394['pageUid'] = NULL;
$arguments394['pageType'] = NULL;
$arguments394['noCache'] = NULL;
$arguments394['noCacheHash'] = NULL;
$arguments394['section'] = NULL;
$arguments394['format'] = NULL;
$arguments394['linkAccessRestrictedPages'] = NULL;
$arguments394['additionalParams'] = NULL;
$arguments394['absolute'] = NULL;
$arguments394['addQueryString'] = NULL;
$arguments394['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments394['addQueryStringMethod'] = NULL;
$arguments394['arguments'] = NULL;
$arguments394['extension'] = NULL;
$arguments394['class'] = 'btn btn-default';
$array396 = array (
);$arguments394['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array396);

$output378 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);

$output378 .= '
						';
return $output378;
};
$arguments375 = array();
$arguments375['additionalAttributes'] = NULL;
$arguments375['data'] = NULL;
$arguments375['extension'] = NULL;
$array377 = array (
);$arguments375['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array377);

$output236 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext);

$output236 .= '
					</div>
				</td>
				</tr>
			';
return $output236;
};
$arguments233 = array();
$arguments233['each'] = NULL;
$arguments233['as'] = NULL;
$arguments233['key'] = NULL;
$arguments233['reverse'] = false;
$arguments233['iteration'] = NULL;
$array235 = array (
);$arguments233['each'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array235);
$arguments233['as'] = 'extension';
$arguments233['key'] = 'extensionKey';

$output205 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output205 .= '
		</tbody>
	</table>
	</div>
';
return $output205;
};
$arguments203 = array();
$arguments203['name'] = NULL;
$arguments203['name'] = 'content';

$output195 .= NULL;

$output195 .= '
';

return $output195;
}


}
#