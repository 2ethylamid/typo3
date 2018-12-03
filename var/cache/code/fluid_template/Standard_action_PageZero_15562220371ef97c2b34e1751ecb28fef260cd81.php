<?php

class Standard_action_PageZero_15562220371ef97c2b34e1751ecb28fef260cd81 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
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
));
}

/**
 * section PageZeroTableRow
 */
public function section_b1edc275d881f3156f547d1f0d6261281c53f832(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['value'] = NULL;
$arguments1['name'] = NULL;
$arguments1['name'] = 'maxCharacters';
$arguments1['value'] = 30;
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
    <tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = array();
$array6 = array (
);$array5['0'] = $renderingContext->getVariableProvider()->getByPath('page.hidden', $array6);

$expression7 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression7(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['then'] = 'inactive';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '">
        <td class="nowrap">
            <span style="width: 1px; height: 1px; display:inline-block; margin-left: ';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string8 = '{level * 20}';
$array9 = array (
  0 => '{level * 20}',
  1 => '{level * 20}',
);

$output0 .= \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string8, $array9);

$output0 .= 'px"></span>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments105 = array();
$arguments105['route'] = NULL;
$arguments105['parameters'] = array (
);
$arguments105['referenceType'] = 'absolute';
$arguments105['route'] = 'web_ts';
// Rendering Array
$array107 = array();
$array108 = array (
);$array107['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array108);
$arguments105['parameters'] = $array107;

$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext)]);

$output104 .= '"
                               title="ID: ';
$array109 = array (
);
$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array109)]);

$output104 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['table'] = NULL;
$arguments110['row'] = NULL;
$arguments110['size'] = 'small';
$arguments110['alternativeMarkupIdentifier'] = NULL;
$arguments110['table'] = 'pages';
$array112 = array (
);$arguments110['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array112);

$output104 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output104 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$array116 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array116)]);
};
$arguments113 = array();
$arguments113['maxCharacters'] = NULL;
$arguments113['append'] = '&hellip;';
$arguments113['respectWordBoundaries'] = true;
$arguments113['respectHtml'] = true;
$array115 = array (
);$arguments113['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array115);

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output104 .= '
                            </a>
                        ';
return $output104;
};
$arguments102 = array();

$output101 .= '';

$output101 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
                            <span title="ID: ';
$array120 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array120)]);

$output119 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['table'] = NULL;
$arguments121['row'] = NULL;
$arguments121['size'] = 'small';
$arguments121['alternativeMarkupIdentifier'] = NULL;
$arguments121['table'] = 'pages';
$array123 = array (
);$arguments121['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array123);

$output119 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output119 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$array127 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array127)]);
};
$arguments124 = array();
$arguments124['maxCharacters'] = NULL;
$arguments124['append'] = '&hellip;';
$arguments124['respectWordBoundaries'] = true;
$arguments124['respectHtml'] = true;
$array126 = array (
);$arguments124['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array126);

$output119 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output119 .= '
                            </span>
                        ';
return $output119;
};
$arguments117 = array();
$arguments117['if'] = NULL;

$output101 .= '';

$output101 .= '
                    ';
return $output101;
};
$arguments74 = array();
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$arguments74['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['0'] = $renderingContext->getVariableProvider()->getByPath('page._templates', $array99);

$expression100 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments74['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)
					),
					$renderingContext
				);
$arguments74['__thenClosure'] = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['route'] = NULL;
$arguments77['parameters'] = array (
);
$arguments77['referenceType'] = 'absolute';
$arguments77['route'] = 'web_ts';
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array80);
$arguments77['parameters'] = $array79;

$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output76 .= '"
                               title="ID: ';
$array81 = array (
);
$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array81)]);

$output76 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['table'] = NULL;
$arguments82['row'] = NULL;
$arguments82['size'] = 'small';
$arguments82['alternativeMarkupIdentifier'] = NULL;
$arguments82['table'] = 'pages';
$array84 = array (
);$arguments82['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array84);

$output76 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output76 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$array88 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array88)]);
};
$arguments85 = array();
$arguments85['maxCharacters'] = NULL;
$arguments85['append'] = '&hellip;';
$arguments85['respectWordBoundaries'] = true;
$arguments85['respectHtml'] = true;
$array87 = array (
);$arguments85['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array87);

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output76 .= '
                            </a>
                        ';
return $output76;
};
$arguments74['__elseClosures'][] = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
                            <span title="ID: ';
$array90 = array (
);
$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array90)]);

$output89 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['table'] = NULL;
$arguments91['row'] = NULL;
$arguments91['size'] = 'small';
$arguments91['alternativeMarkupIdentifier'] = NULL;
$arguments91['table'] = 'pages';
$array93 = array (
);$arguments91['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array93);

$output89 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output89 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$array97 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array97)]);
};
$arguments94 = array();
$arguments94['maxCharacters'] = NULL;
$arguments94['append'] = '&hellip;';
$arguments94['respectWordBoundaries'] = true;
$arguments94['respectHtml'] = true;
$array96 = array (
);$arguments94['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array96);

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output89 .= '
                            </span>
                        ';
return $output89;
};

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
                ';
return $output73;
};
$arguments71 = array();

$output70 .= '';

$output70 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};
$arguments128 = array();
$arguments128['if'] = NULL;

$output70 .= '';

$output70 .= '
            ';
return $output70;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['0'] = $renderingContext->getVariableProvider()->getByPath('page', $array68);

$expression69 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array67)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['route'] = NULL;
$arguments44['parameters'] = array (
);
$arguments44['referenceType'] = 'absolute';
$arguments44['route'] = 'web_ts';
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array47);
$arguments44['parameters'] = $array46;

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output43 .= '"
                               title="ID: ';
$array48 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array48)]);

$output43 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['table'] = NULL;
$arguments49['row'] = NULL;
$arguments49['size'] = 'small';
$arguments49['alternativeMarkupIdentifier'] = NULL;
$arguments49['table'] = 'pages';
$array51 = array (
);$arguments49['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array51);

$output43 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output43 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$array55 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array55)]);
};
$arguments52 = array();
$arguments52['maxCharacters'] = NULL;
$arguments52['append'] = '&hellip;';
$arguments52['respectWordBoundaries'] = true;
$arguments52['respectHtml'] = true;
$array54 = array (
);$arguments52['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array54);

$output43 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output43 .= '
                            </a>
                        ';
return $output43;
};
$arguments41 = array();

$output40 .= '';

$output40 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
                            <span title="ID: ';
$array59 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array59)]);

$output58 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['table'] = NULL;
$arguments60['row'] = NULL;
$arguments60['size'] = 'small';
$arguments60['alternativeMarkupIdentifier'] = NULL;
$arguments60['table'] = 'pages';
$array62 = array (
);$arguments60['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array62);

$output58 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output58 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$array66 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array66)]);
};
$arguments63 = array();
$arguments63['maxCharacters'] = NULL;
$arguments63['append'] = '&hellip;';
$arguments63['respectWordBoundaries'] = true;
$arguments63['respectHtml'] = true;
$array65 = array (
);$arguments63['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array65);

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output58 .= '
                            </span>
                        ';
return $output58;
};
$arguments56 = array();
$arguments56['if'] = NULL;

$output40 .= '';

$output40 .= '
                    ';
return $output40;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('page._templates', $array38);

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['route'] = NULL;
$arguments16['parameters'] = array (
);
$arguments16['referenceType'] = 'absolute';
$arguments16['route'] = 'web_ts';
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array19);
$arguments16['parameters'] = $array18;

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);

$output15 .= '"
                               title="ID: ';
$array20 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array20)]);

$output15 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['table'] = NULL;
$arguments21['row'] = NULL;
$arguments21['size'] = 'small';
$arguments21['alternativeMarkupIdentifier'] = NULL;
$arguments21['table'] = 'pages';
$array23 = array (
);$arguments21['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array23);

$output15 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output15 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$array27 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array27)]);
};
$arguments24 = array();
$arguments24['maxCharacters'] = NULL;
$arguments24['append'] = '&hellip;';
$arguments24['respectWordBoundaries'] = true;
$arguments24['respectHtml'] = true;
$array26 = array (
);$arguments24['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array26);

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output15 .= '
                            </a>
                        ';
return $output15;
};
$arguments13['__elseClosures'][] = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
                            <span title="ID: ';
$array29 = array (
);
$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array29)]);

$output28 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['table'] = NULL;
$arguments30['row'] = NULL;
$arguments30['size'] = 'small';
$arguments30['alternativeMarkupIdentifier'] = NULL;
$arguments30['table'] = 'pages';
$array32 = array (
);$arguments30['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array32);

$output28 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output28 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$array36 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array36)]);
};
$arguments33 = array();
$arguments33['maxCharacters'] = NULL;
$arguments33['append'] = '&hellip;';
$arguments33['respectWordBoundaries'] = true;
$arguments33['respectHtml'] = true;
$array35 = array (
);$arguments33['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array35);

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output28 .= '
                            </span>
                        ';
return $output28;
};

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
                ';
return $output12;
};
$arguments10['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
        </td>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$output156 = '';

$output156 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['value'] = NULL;
$arguments157['name'] = NULL;
$arguments157['name'] = 'web_ts_parameters';
// Rendering Array
$array159 = array();
$array160 = array (
);$array159['id'] = $renderingContext->getVariableProvider()->getByPath('template.pid', $array160);
$array161 = array (
);$array159['SET[templatesOnPage]'] = $renderingContext->getVariableProvider()->getByPath('template.uid', $array161);
$arguments157['value'] = $array159;
$renderChildrenClosure158 = ($arguments157['value'] !== null) ? function() use ($arguments157) { return $arguments157['value']; } : $renderChildrenClosure158;
$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext)]);

$output156 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['route'] = NULL;
$arguments162['parameters'] = array (
);
$arguments162['referenceType'] = 'absolute';
$arguments162['route'] = 'web_ts';
$array164 = array (
);$arguments162['parameters'] = $renderingContext->getVariableProvider()->getByPath('web_ts_parameters', $array164);

$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext)]);

$output156 .= '"
                       title="ID: ';
$array165 = array (
);
$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.uid', $array165)]);

$output156 .= ' ';
$array166 = array (
);
$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.sitetitle', $array166)]);

$output156 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['table'] = NULL;
$arguments167['row'] = NULL;
$arguments167['size'] = 'small';
$arguments167['alternativeMarkupIdentifier'] = NULL;
$arguments167['table'] = 'sys_template';
$array169 = array (
);$arguments167['row'] = $renderingContext->getVariableProvider()->getByPath('template', $array169);

$output156 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output156 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$array173 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.title', $array173)]);
};
$arguments170 = array();
$arguments170['maxCharacters'] = NULL;
$arguments170['append'] = '&hellip;';
$arguments170['respectWordBoundaries'] = true;
$arguments170['respectHtml'] = true;
$array172 = array (
);$arguments170['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array172);

$output156 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output156 .= '
                    </a>
                ';
return $output156;
};
$arguments154 = array();

$output153 .= '';

$output153 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};
$arguments174 = array();
$arguments174['if'] = NULL;

$output153 .= '';

$output153 .= '
            ';
return $output153;
};
$arguments130 = array();
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$arguments130['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array150 = array();
$array151 = array (
);$array150['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array151);

$expression152 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments130['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression152(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array150)
					),
					$renderingContext
				);
$arguments130['__thenClosure'] = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['value'] = NULL;
$arguments133['name'] = NULL;
$arguments133['name'] = 'web_ts_parameters';
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['id'] = $renderingContext->getVariableProvider()->getByPath('template.pid', $array136);
$array137 = array (
);$array135['SET[templatesOnPage]'] = $renderingContext->getVariableProvider()->getByPath('template.uid', $array137);
$arguments133['value'] = $array135;
$renderChildrenClosure134 = ($arguments133['value'] !== null) ? function() use ($arguments133) { return $arguments133['value']; } : $renderChildrenClosure134;
$output132 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext)]);

$output132 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['route'] = NULL;
$arguments138['parameters'] = array (
);
$arguments138['referenceType'] = 'absolute';
$arguments138['route'] = 'web_ts';
$array140 = array (
);$arguments138['parameters'] = $renderingContext->getVariableProvider()->getByPath('web_ts_parameters', $array140);

$output132 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext)]);

$output132 .= '"
                       title="ID: ';
$array141 = array (
);
$output132 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.uid', $array141)]);

$output132 .= ' ';
$array142 = array (
);
$output132 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.sitetitle', $array142)]);

$output132 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['table'] = NULL;
$arguments143['row'] = NULL;
$arguments143['size'] = 'small';
$arguments143['alternativeMarkupIdentifier'] = NULL;
$arguments143['table'] = 'sys_template';
$array145 = array (
);$arguments143['row'] = $renderingContext->getVariableProvider()->getByPath('template', $array145);

$output132 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output132 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$array149 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.title', $array149)]);
};
$arguments146 = array();
$arguments146['maxCharacters'] = NULL;
$arguments146['append'] = '&hellip;';
$arguments146['respectWordBoundaries'] = true;
$arguments146['respectHtml'] = true;
$array148 = array (
);$arguments146['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array148);

$output132 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output132 .= '
                    </a>
                ';
return $output132;
};
$arguments130['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output0 .= '
        </td>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['then'] = NULL;
$arguments182['else'] = NULL;
$arguments182['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array184 = array();
$array185 = array (
);$array184['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.root', $array185)]);

$expression186 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments182['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression186(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array184)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['identifier'] = NULL;
$arguments187['size'] = 'small';
$arguments187['overlay'] = NULL;
$arguments187['state'] = 'default';
$arguments187['alternativeMarkupIdentifier'] = NULL;
$arguments187['identifier'] = 'status-status-checked';
$arguments182['then'] = TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output181 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '
            ';
return $output181;
};
$arguments176 = array();
$arguments176['then'] = NULL;
$arguments176['else'] = NULL;
$arguments176['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array178 = array();
$array179 = array (
);$array178['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array179);

$expression180 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments176['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression180(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)
					),
					$renderingContext
				);
$arguments176['__thenClosure'] = $renderChildrenClosure177;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output0 .= '
        </td>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$output194 = '';

$output194 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['then'] = NULL;
$arguments195['else'] = NULL;
$arguments195['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array197 = array();
$array197['0'] = '!';
$array198 = array (
);$array197['1'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.root', $array198)]);

$expression199 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments195['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression199(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array197)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments200 = array();
$arguments200['identifier'] = NULL;
$arguments200['size'] = 'small';
$arguments200['overlay'] = NULL;
$arguments200['state'] = 'default';
$arguments200['alternativeMarkupIdentifier'] = NULL;
$arguments200['identifier'] = 'status-status-checked';
$arguments195['then'] = TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output194 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output194 .= '
            ';
return $output194;
};
$arguments189 = array();
$arguments189['then'] = NULL;
$arguments189['else'] = NULL;
$arguments189['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array191 = array();
$array192 = array (
);$array191['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array192);

$expression193 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments189['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression193(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array191)
					),
					$renderingContext
				);
$arguments189['__thenClosure'] = $renderChildrenClosure190;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output0 .= '
        </td>
    </tr>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
        <!-- Additional templates -->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output212 = '';

$output212 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$output222 = '';

$output222 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments223 = array();
$arguments223['section'] = NULL;
$arguments223['partial'] = NULL;
$arguments223['delegate'] = NULL;
$arguments223['renderable'] = NULL;
$arguments223['arguments'] = array (
);
$arguments223['optional'] = false;
$arguments223['default'] = NULL;
$arguments223['contentAs'] = NULL;
$arguments223['debug'] = true;
$arguments223['section'] = 'PageZeroTableRow';
// Rendering Array
$array225 = array();
$array225['page'] = 0;
$array226 = array (
);$array225['level'] = $renderingContext->getVariableProvider()->getByPath('level', $array226);
$array227 = array (
);$array225['template'] = $renderingContext->getVariableProvider()->getByPath('template', $array227);
$arguments223['arguments'] = $array225;

$output222 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output222 .= '
                ';
return $output222;
};
$arguments217 = array();
$arguments217['then'] = NULL;
$arguments217['else'] = NULL;
$arguments217['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array219 = array();
$array220 = array (
);$array219['0'] = $renderingContext->getVariableProvider()->getByPath('i.index', $array220);
$array219['1'] = ' > 0';

$expression221 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments217['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression221(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array219)
					),
					$renderingContext
				);
$arguments217['__thenClosure'] = $renderChildrenClosure218;

$output216 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '
            ';
return $output216;
};
$arguments213 = array();
$arguments213['each'] = NULL;
$arguments213['as'] = NULL;
$arguments213['key'] = NULL;
$arguments213['reverse'] = false;
$arguments213['iteration'] = NULL;
$array215 = array (
);$arguments213['each'] = $renderingContext->getVariableProvider()->getByPath('page._templates', $array215);
$arguments213['as'] = 'template';
$arguments213['iteration'] = 'i';

$output212 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output212 .= '
        ';
return $output212;
};
$arguments208 = array();
$arguments208['then'] = NULL;
$arguments208['else'] = NULL;
$arguments208['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array210 = array();
$array210['0'] = '{f:count({page._templates})}';

$expression211 = function($context) {return "{f";};
$arguments208['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression211(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array210)
					),
					$renderingContext
				);
$arguments208['__thenClosure'] = $renderChildrenClosure209;

$output207 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output207 .= '
        <!-- Subpages -->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['section'] = NULL;
$arguments237['partial'] = NULL;
$arguments237['delegate'] = NULL;
$arguments237['renderable'] = NULL;
$arguments237['arguments'] = array (
);
$arguments237['optional'] = false;
$arguments237['default'] = NULL;
$arguments237['contentAs'] = NULL;
$arguments237['debug'] = true;
$arguments237['section'] = 'PageZeroTableRow';
// Rendering Array
$array239 = array();
$array240 = array (
);$array239['page'] = $renderingContext->getVariableProvider()->getByPath('page', $array240);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string241 = '{level + 1}';
$array242 = array (
  0 => '{level + 1}',
  1 => '{level + 1}',
);
$array239['level'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string241, $array242);
$array243 = array (
);$array239['template'] = $renderingContext->getVariableProvider()->getByPath('page._templates.0', $array243);
$arguments237['arguments'] = $array239;

$output236 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output236 .= '
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
);$arguments233['each'] = $renderingContext->getVariableProvider()->getByPath('page._nodes', $array235);
$arguments233['as'] = 'page';

$output232 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output232 .= '
        ';
return $output232;
};
$arguments228 = array();
$arguments228['then'] = NULL;
$arguments228['else'] = NULL;
$arguments228['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array230 = array();
$array230['0'] = '{f:count({page._nodes})}';

$expression231 = function($context) {return "{f";};
$arguments228['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression231(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array230)
					),
					$renderingContext
				);
$arguments228['__thenClosure'] = $renderChildrenClosure229;

$output207 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output207 .= '
    ';
return $output207;
};
$arguments202 = array();
$arguments202['then'] = NULL;
$arguments202['else'] = NULL;
$arguments202['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array204 = array();
$array205 = array (
);$array204['0'] = $renderingContext->getVariableProvider()->getByPath('page', $array205);

$expression206 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments202['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression206(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array204)
					),
					$renderingContext
				);
$arguments202['__thenClosure'] = $renderChildrenClosure203;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output244 = '';

$output244 .= '
<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['key'] = NULL;
$arguments245['id'] = NULL;
$arguments245['default'] = NULL;
$arguments245['arguments'] = NULL;
$arguments245['extensionName'] = NULL;
$arguments245['languageKey'] = NULL;
$arguments245['alternativeLanguageKeys'] = NULL;
$arguments245['key'] = 'moduleTitle';

$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext)]);

$output244 .= '</h1>
<div>
    <p class="lead">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments247 = array();
$arguments247['key'] = NULL;
$arguments247['id'] = NULL;
$arguments247['default'] = NULL;
$arguments247['arguments'] = NULL;
$arguments247['extensionName'] = NULL;
$arguments247['languageKey'] = NULL;
$arguments247['alternativeLanguageKeys'] = NULL;
$arguments247['key'] = 'overview';

$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext)]);

$output244 .= '</p>
    <div class="table-fit">
        <table class="table table-striped table-hover" id="ts-overview">
        <thead>
            <tr>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments249 = array();
$arguments249['key'] = NULL;
$arguments249['id'] = NULL;
$arguments249['default'] = NULL;
$arguments249['arguments'] = NULL;
$arguments249['extensionName'] = NULL;
$arguments249['languageKey'] = NULL;
$arguments249['alternativeLanguageKeys'] = NULL;
$arguments249['key'] = 'pageName';

$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext)]);

$output244 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments251 = array();
$arguments251['key'] = NULL;
$arguments251['id'] = NULL;
$arguments251['default'] = NULL;
$arguments251['arguments'] = NULL;
$arguments251['extensionName'] = NULL;
$arguments251['languageKey'] = NULL;
$arguments251['alternativeLanguageKeys'] = NULL;
$arguments251['key'] = 'templates';

$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext)]);

$output244 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['key'] = NULL;
$arguments253['id'] = NULL;
$arguments253['default'] = NULL;
$arguments253['arguments'] = NULL;
$arguments253['extensionName'] = NULL;
$arguments253['languageKey'] = NULL;
$arguments253['alternativeLanguageKeys'] = NULL;
$arguments253['key'] = 'isRoot';

$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext)]);

$output244 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments255 = array();
$arguments255['key'] = NULL;
$arguments255['id'] = NULL;
$arguments255['default'] = NULL;
$arguments255['arguments'] = NULL;
$arguments255['extensionName'] = NULL;
$arguments255['languageKey'] = NULL;
$arguments255['alternativeLanguageKeys'] = NULL;
$arguments255['key'] = 'isExt';

$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext)]);

$output244 .= '</th>
            </tr>
        </thead>
        <tbody>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments261 = array();
$arguments261['section'] = NULL;
$arguments261['partial'] = NULL;
$arguments261['delegate'] = NULL;
$arguments261['renderable'] = NULL;
$arguments261['arguments'] = array (
);
$arguments261['optional'] = false;
$arguments261['default'] = NULL;
$arguments261['contentAs'] = NULL;
$arguments261['debug'] = true;
$arguments261['section'] = 'PageZeroTableRow';
// Rendering Array
$array263 = array();
$array264 = array (
);$array263['page'] = $renderingContext->getVariableProvider()->getByPath('page', $array264);
$array263['level'] = 0;
$array265 = array (
);$array263['template'] = $renderingContext->getVariableProvider()->getByPath('page._templates.0', $array265);
$arguments261['arguments'] = $array263;

$output260 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output260 .= '
            ';
return $output260;
};
$arguments257 = array();
$arguments257['each'] = NULL;
$arguments257['as'] = NULL;
$arguments257['key'] = NULL;
$arguments257['reverse'] = false;
$arguments257['iteration'] = NULL;
$array259 = array (
);$arguments257['each'] = $renderingContext->getVariableProvider()->getByPath('pageTree', $array259);
$arguments257['as'] = 'page';

$output244 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output244 .= '
        </tbody>
        </table>
    </div>
</div>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments269 = array();
$arguments269['value'] = NULL;
$arguments269['name'] = NULL;
$arguments269['name'] = 'maxCharacters';
$arguments269['value'] = 30;
$renderChildrenClosure270 = ($arguments269['value'] !== null) ? function() use ($arguments269) { return $arguments269['value']; } : $renderChildrenClosure270;
$output268 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext)]);

$output268 .= '
    <tr class="';
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
);$array273['0'] = $renderingContext->getVariableProvider()->getByPath('page.hidden', $array274);

$expression275 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments271['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression275(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array273)
					),
					$renderingContext
				);
$arguments271['then'] = 'inactive';

$output268 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext);

$output268 .= '">
        <td class="nowrap">
            <span style="width: 1px; height: 1px; display:inline-block; margin-left: ';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string276 = '{level * 20}';
$array277 = array (
  0 => '{level * 20}',
  1 => '{level * 20}',
);

$output268 .= \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string276, $array277);

$output268 .= 'px"></span>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$output338 = '';

$output338 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
$output341 = '';

$output341 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
$output369 = '';

$output369 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
$output372 = '';

$output372 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments373 = array();
$arguments373['route'] = NULL;
$arguments373['parameters'] = array (
);
$arguments373['referenceType'] = 'absolute';
$arguments373['route'] = 'web_ts';
// Rendering Array
$array375 = array();
$array376 = array (
);$array375['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array376);
$arguments373['parameters'] = $array375;

$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext)]);

$output372 .= '"
                               title="ID: ';
$array377 = array (
);
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array377)]);

$output372 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments378 = array();
$arguments378['table'] = NULL;
$arguments378['row'] = NULL;
$arguments378['size'] = 'small';
$arguments378['alternativeMarkupIdentifier'] = NULL;
$arguments378['table'] = 'pages';
$array380 = array (
);$arguments378['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array380);

$output372 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments378, $renderChildrenClosure379, $renderingContext);

$output372 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure382 = function() use ($renderingContext, $self) {
$array384 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array384)]);
};
$arguments381 = array();
$arguments381['maxCharacters'] = NULL;
$arguments381['append'] = '&hellip;';
$arguments381['respectWordBoundaries'] = true;
$arguments381['respectHtml'] = true;
$array383 = array (
);$arguments381['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array383);

$output372 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments381, $renderChildrenClosure382, $renderingContext);

$output372 .= '
                            </a>
                        ';
return $output372;
};
$arguments370 = array();

$output369 .= '';

$output369 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
$output387 = '';

$output387 .= '
                            <span title="ID: ';
$array388 = array (
);
$output387 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array388)]);

$output387 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments389 = array();
$arguments389['table'] = NULL;
$arguments389['row'] = NULL;
$arguments389['size'] = 'small';
$arguments389['alternativeMarkupIdentifier'] = NULL;
$arguments389['table'] = 'pages';
$array391 = array (
);$arguments389['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array391);

$output387 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);

$output387 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
$array395 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array395)]);
};
$arguments392 = array();
$arguments392['maxCharacters'] = NULL;
$arguments392['append'] = '&hellip;';
$arguments392['respectWordBoundaries'] = true;
$arguments392['respectHtml'] = true;
$array394 = array (
);$arguments392['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array394);

$output387 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments392, $renderChildrenClosure393, $renderingContext);

$output387 .= '
                            </span>
                        ';
return $output387;
};
$arguments385 = array();
$arguments385['if'] = NULL;

$output369 .= '';

$output369 .= '
                    ';
return $output369;
};
$arguments342 = array();
$arguments342['then'] = NULL;
$arguments342['else'] = NULL;
$arguments342['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array366 = array();
$array367 = array (
);$array366['0'] = $renderingContext->getVariableProvider()->getByPath('page._templates', $array367);

$expression368 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments342['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression368(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array366)
					),
					$renderingContext
				);
$arguments342['__thenClosure'] = function() use ($renderingContext, $self) {
$output344 = '';

$output344 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments345 = array();
$arguments345['route'] = NULL;
$arguments345['parameters'] = array (
);
$arguments345['referenceType'] = 'absolute';
$arguments345['route'] = 'web_ts';
// Rendering Array
$array347 = array();
$array348 = array (
);$array347['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array348);
$arguments345['parameters'] = $array347;

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext)]);

$output344 .= '"
                               title="ID: ';
$array349 = array (
);
$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array349)]);

$output344 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments350 = array();
$arguments350['table'] = NULL;
$arguments350['row'] = NULL;
$arguments350['size'] = 'small';
$arguments350['alternativeMarkupIdentifier'] = NULL;
$arguments350['table'] = 'pages';
$array352 = array (
);$arguments350['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array352);

$output344 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext);

$output344 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$array356 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array356)]);
};
$arguments353 = array();
$arguments353['maxCharacters'] = NULL;
$arguments353['append'] = '&hellip;';
$arguments353['respectWordBoundaries'] = true;
$arguments353['respectHtml'] = true;
$array355 = array (
);$arguments353['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array355);

$output344 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output344 .= '
                            </a>
                        ';
return $output344;
};
$arguments342['__elseClosures'][] = function() use ($renderingContext, $self) {
$output357 = '';

$output357 .= '
                            <span title="ID: ';
$array358 = array (
);
$output357 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array358)]);

$output357 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments359 = array();
$arguments359['table'] = NULL;
$arguments359['row'] = NULL;
$arguments359['size'] = 'small';
$arguments359['alternativeMarkupIdentifier'] = NULL;
$arguments359['table'] = 'pages';
$array361 = array (
);$arguments359['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array361);

$output357 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext);

$output357 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
$array365 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array365)]);
};
$arguments362 = array();
$arguments362['maxCharacters'] = NULL;
$arguments362['append'] = '&hellip;';
$arguments362['respectWordBoundaries'] = true;
$arguments362['respectHtml'] = true;
$array364 = array (
);$arguments362['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array364);

$output357 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);

$output357 .= '
                            </span>
                        ';
return $output357;
};

$output341 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext);

$output341 .= '
                ';
return $output341;
};
$arguments339 = array();

$output338 .= '';

$output338 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};
$arguments396 = array();
$arguments396['if'] = NULL;

$output338 .= '';

$output338 .= '
            ';
return $output338;
};
$arguments278 = array();
$arguments278['then'] = NULL;
$arguments278['else'] = NULL;
$arguments278['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array335 = array();
$array336 = array (
);$array335['0'] = $renderingContext->getVariableProvider()->getByPath('page', $array336);

$expression337 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments278['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression337(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array335)
					),
					$renderingContext
				);
$arguments278['__thenClosure'] = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
$output308 = '';

$output308 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$output311 = '';

$output311 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments312 = array();
$arguments312['route'] = NULL;
$arguments312['parameters'] = array (
);
$arguments312['referenceType'] = 'absolute';
$arguments312['route'] = 'web_ts';
// Rendering Array
$array314 = array();
$array315 = array (
);$array314['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array315);
$arguments312['parameters'] = $array314;

$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext)]);

$output311 .= '"
                               title="ID: ';
$array316 = array (
);
$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array316)]);

$output311 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments317 = array();
$arguments317['table'] = NULL;
$arguments317['row'] = NULL;
$arguments317['size'] = 'small';
$arguments317['alternativeMarkupIdentifier'] = NULL;
$arguments317['table'] = 'pages';
$array319 = array (
);$arguments317['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array319);

$output311 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output311 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
$array323 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array323)]);
};
$arguments320 = array();
$arguments320['maxCharacters'] = NULL;
$arguments320['append'] = '&hellip;';
$arguments320['respectWordBoundaries'] = true;
$arguments320['respectHtml'] = true;
$array322 = array (
);$arguments320['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array322);

$output311 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output311 .= '
                            </a>
                        ';
return $output311;
};
$arguments309 = array();

$output308 .= '';

$output308 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$output326 = '';

$output326 .= '
                            <span title="ID: ';
$array327 = array (
);
$output326 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array327)]);

$output326 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments328 = array();
$arguments328['table'] = NULL;
$arguments328['row'] = NULL;
$arguments328['size'] = 'small';
$arguments328['alternativeMarkupIdentifier'] = NULL;
$arguments328['table'] = 'pages';
$array330 = array (
);$arguments328['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array330);

$output326 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output326 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
$array334 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array334)]);
};
$arguments331 = array();
$arguments331['maxCharacters'] = NULL;
$arguments331['append'] = '&hellip;';
$arguments331['respectWordBoundaries'] = true;
$arguments331['respectHtml'] = true;
$array333 = array (
);$arguments331['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array333);

$output326 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);

$output326 .= '
                            </span>
                        ';
return $output326;
};
$arguments324 = array();
$arguments324['if'] = NULL;

$output308 .= '';

$output308 .= '
                    ';
return $output308;
};
$arguments281 = array();
$arguments281['then'] = NULL;
$arguments281['else'] = NULL;
$arguments281['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array305 = array();
$array306 = array (
);$array305['0'] = $renderingContext->getVariableProvider()->getByPath('page._templates', $array306);

$expression307 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments281['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression307(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array305)
					),
					$renderingContext
				);
$arguments281['__thenClosure'] = function() use ($renderingContext, $self) {
$output283 = '';

$output283 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments284 = array();
$arguments284['route'] = NULL;
$arguments284['parameters'] = array (
);
$arguments284['referenceType'] = 'absolute';
$arguments284['route'] = 'web_ts';
// Rendering Array
$array286 = array();
$array287 = array (
);$array286['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array287);
$arguments284['parameters'] = $array286;

$output283 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext)]);

$output283 .= '"
                               title="ID: ';
$array288 = array (
);
$output283 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array288)]);

$output283 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments289 = array();
$arguments289['table'] = NULL;
$arguments289['row'] = NULL;
$arguments289['size'] = 'small';
$arguments289['alternativeMarkupIdentifier'] = NULL;
$arguments289['table'] = 'pages';
$array291 = array (
);$arguments289['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array291);

$output283 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);

$output283 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$array295 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array295)]);
};
$arguments292 = array();
$arguments292['maxCharacters'] = NULL;
$arguments292['append'] = '&hellip;';
$arguments292['respectWordBoundaries'] = true;
$arguments292['respectHtml'] = true;
$array294 = array (
);$arguments292['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array294);

$output283 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output283 .= '
                            </a>
                        ';
return $output283;
};
$arguments281['__elseClosures'][] = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= '
                            <span title="ID: ';
$array297 = array (
);
$output296 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array297)]);

$output296 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments298 = array();
$arguments298['table'] = NULL;
$arguments298['row'] = NULL;
$arguments298['size'] = 'small';
$arguments298['alternativeMarkupIdentifier'] = NULL;
$arguments298['table'] = 'pages';
$array300 = array (
);$arguments298['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array300);

$output296 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext);

$output296 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
$array304 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array304)]);
};
$arguments301 = array();
$arguments301['maxCharacters'] = NULL;
$arguments301['append'] = '&hellip;';
$arguments301['respectWordBoundaries'] = true;
$arguments301['respectHtml'] = true;
$array303 = array (
);$arguments301['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array303);

$output296 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext);

$output296 .= '
                            </span>
                        ';
return $output296;
};

$output280 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output280 .= '
                ';
return $output280;
};
$arguments278['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};

$output268 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output268 .= '
        </td>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
$output421 = '';

$output421 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
$output424 = '';

$output424 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments425 = array();
$arguments425['value'] = NULL;
$arguments425['name'] = NULL;
$arguments425['name'] = 'web_ts_parameters';
// Rendering Array
$array427 = array();
$array428 = array (
);$array427['id'] = $renderingContext->getVariableProvider()->getByPath('template.pid', $array428);
$array429 = array (
);$array427['SET[templatesOnPage]'] = $renderingContext->getVariableProvider()->getByPath('template.uid', $array429);
$arguments425['value'] = $array427;
$renderChildrenClosure426 = ($arguments425['value'] !== null) ? function() use ($arguments425) { return $arguments425['value']; } : $renderChildrenClosure426;
$output424 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext)]);

$output424 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments430 = array();
$arguments430['route'] = NULL;
$arguments430['parameters'] = array (
);
$arguments430['referenceType'] = 'absolute';
$arguments430['route'] = 'web_ts';
$array432 = array (
);$arguments430['parameters'] = $renderingContext->getVariableProvider()->getByPath('web_ts_parameters', $array432);

$output424 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext)]);

$output424 .= '"
                       title="ID: ';
$array433 = array (
);
$output424 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.uid', $array433)]);

$output424 .= ' ';
$array434 = array (
);
$output424 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.sitetitle', $array434)]);

$output424 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments435 = array();
$arguments435['table'] = NULL;
$arguments435['row'] = NULL;
$arguments435['size'] = 'small';
$arguments435['alternativeMarkupIdentifier'] = NULL;
$arguments435['table'] = 'sys_template';
$array437 = array (
);$arguments435['row'] = $renderingContext->getVariableProvider()->getByPath('template', $array437);

$output424 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);

$output424 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure439 = function() use ($renderingContext, $self) {
$array441 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.title', $array441)]);
};
$arguments438 = array();
$arguments438['maxCharacters'] = NULL;
$arguments438['append'] = '&hellip;';
$arguments438['respectWordBoundaries'] = true;
$arguments438['respectHtml'] = true;
$array440 = array (
);$arguments438['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array440);

$output424 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments438, $renderChildrenClosure439, $renderingContext);

$output424 .= '
                    </a>
                ';
return $output424;
};
$arguments422 = array();

$output421 .= '';

$output421 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};
$arguments442 = array();
$arguments442['if'] = NULL;

$output421 .= '';

$output421 .= '
            ';
return $output421;
};
$arguments398 = array();
$arguments398['then'] = NULL;
$arguments398['else'] = NULL;
$arguments398['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array418 = array();
$array419 = array (
);$array418['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array419);

$expression420 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments398['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression420(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array418)
					),
					$renderingContext
				);
$arguments398['__thenClosure'] = function() use ($renderingContext, $self) {
$output400 = '';

$output400 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments401 = array();
$arguments401['value'] = NULL;
$arguments401['name'] = NULL;
$arguments401['name'] = 'web_ts_parameters';
// Rendering Array
$array403 = array();
$array404 = array (
);$array403['id'] = $renderingContext->getVariableProvider()->getByPath('template.pid', $array404);
$array405 = array (
);$array403['SET[templatesOnPage]'] = $renderingContext->getVariableProvider()->getByPath('template.uid', $array405);
$arguments401['value'] = $array403;
$renderChildrenClosure402 = ($arguments401['value'] !== null) ? function() use ($arguments401) { return $arguments401['value']; } : $renderChildrenClosure402;
$output400 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext)]);

$output400 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments406 = array();
$arguments406['route'] = NULL;
$arguments406['parameters'] = array (
);
$arguments406['referenceType'] = 'absolute';
$arguments406['route'] = 'web_ts';
$array408 = array (
);$arguments406['parameters'] = $renderingContext->getVariableProvider()->getByPath('web_ts_parameters', $array408);

$output400 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext)]);

$output400 .= '"
                       title="ID: ';
$array409 = array (
);
$output400 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.uid', $array409)]);

$output400 .= ' ';
$array410 = array (
);
$output400 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.sitetitle', $array410)]);

$output400 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments411 = array();
$arguments411['table'] = NULL;
$arguments411['row'] = NULL;
$arguments411['size'] = 'small';
$arguments411['alternativeMarkupIdentifier'] = NULL;
$arguments411['table'] = 'sys_template';
$array413 = array (
);$arguments411['row'] = $renderingContext->getVariableProvider()->getByPath('template', $array413);

$output400 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments411, $renderChildrenClosure412, $renderingContext);

$output400 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
$array417 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.title', $array417)]);
};
$arguments414 = array();
$arguments414['maxCharacters'] = NULL;
$arguments414['append'] = '&hellip;';
$arguments414['respectWordBoundaries'] = true;
$arguments414['respectHtml'] = true;
$array416 = array (
);$arguments414['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array416);

$output400 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext);

$output400 .= '
                    </a>
                ';
return $output400;
};
$arguments398['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};

$output268 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext);

$output268 .= '
        </td>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure445 = function() use ($renderingContext, $self) {
$output449 = '';

$output449 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments450 = array();
$arguments450['then'] = NULL;
$arguments450['else'] = NULL;
$arguments450['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array452 = array();
$array453 = array (
);$array452['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.root', $array453)]);

$expression454 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments450['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression454(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array452)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure456 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments455 = array();
$arguments455['identifier'] = NULL;
$arguments455['size'] = 'small';
$arguments455['overlay'] = NULL;
$arguments455['state'] = 'default';
$arguments455['alternativeMarkupIdentifier'] = NULL;
$arguments455['identifier'] = 'status-status-checked';
$arguments450['then'] = TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments455, $renderChildrenClosure456, $renderingContext);

$output449 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output449 .= '
            ';
return $output449;
};
$arguments444 = array();
$arguments444['then'] = NULL;
$arguments444['else'] = NULL;
$arguments444['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array446 = array();
$array447 = array (
);$array446['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array447);

$expression448 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments444['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression448(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array446)
					),
					$renderingContext
				);
$arguments444['__thenClosure'] = $renderChildrenClosure445;

$output268 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext);

$output268 .= '
        </td>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
$output462 = '';

$output462 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments463 = array();
$arguments463['then'] = NULL;
$arguments463['else'] = NULL;
$arguments463['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array465 = array();
$array465['0'] = '!';
$array466 = array (
);$array465['1'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.root', $array466)]);

$expression467 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments463['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression467(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array465)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments468 = array();
$arguments468['identifier'] = NULL;
$arguments468['size'] = 'small';
$arguments468['overlay'] = NULL;
$arguments468['state'] = 'default';
$arguments468['alternativeMarkupIdentifier'] = NULL;
$arguments468['identifier'] = 'status-status-checked';
$arguments463['then'] = TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);

$output462 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext);

$output462 .= '
            ';
return $output462;
};
$arguments457 = array();
$arguments457['then'] = NULL;
$arguments457['else'] = NULL;
$arguments457['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array459 = array();
$array460 = array (
);$array459['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array460);

$expression461 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments457['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression461(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array459)
					),
					$renderingContext
				);
$arguments457['__thenClosure'] = $renderChildrenClosure458;

$output268 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext);

$output268 .= '
        </td>
    </tr>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
$output475 = '';

$output475 .= '
        <!-- Additional templates -->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
$output480 = '';

$output480 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
$output484 = '';

$output484 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
$output490 = '';

$output490 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments491 = array();
$arguments491['section'] = NULL;
$arguments491['partial'] = NULL;
$arguments491['delegate'] = NULL;
$arguments491['renderable'] = NULL;
$arguments491['arguments'] = array (
);
$arguments491['optional'] = false;
$arguments491['default'] = NULL;
$arguments491['contentAs'] = NULL;
$arguments491['debug'] = true;
$arguments491['section'] = 'PageZeroTableRow';
// Rendering Array
$array493 = array();
$array493['page'] = 0;
$array494 = array (
);$array493['level'] = $renderingContext->getVariableProvider()->getByPath('level', $array494);
$array495 = array (
);$array493['template'] = $renderingContext->getVariableProvider()->getByPath('template', $array495);
$arguments491['arguments'] = $array493;

$output490 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext);

$output490 .= '
                ';
return $output490;
};
$arguments485 = array();
$arguments485['then'] = NULL;
$arguments485['else'] = NULL;
$arguments485['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array487 = array();
$array488 = array (
);$array487['0'] = $renderingContext->getVariableProvider()->getByPath('i.index', $array488);
$array487['1'] = ' > 0';

$expression489 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments485['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression489(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array487)
					),
					$renderingContext
				);
$arguments485['__thenClosure'] = $renderChildrenClosure486;

$output484 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext);

$output484 .= '
            ';
return $output484;
};
$arguments481 = array();
$arguments481['each'] = NULL;
$arguments481['as'] = NULL;
$arguments481['key'] = NULL;
$arguments481['reverse'] = false;
$arguments481['iteration'] = NULL;
$array483 = array (
);$arguments481['each'] = $renderingContext->getVariableProvider()->getByPath('page._templates', $array483);
$arguments481['as'] = 'template';
$arguments481['iteration'] = 'i';

$output480 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments481, $renderChildrenClosure482, $renderingContext);

$output480 .= '
        ';
return $output480;
};
$arguments476 = array();
$arguments476['then'] = NULL;
$arguments476['else'] = NULL;
$arguments476['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array478 = array();
$array478['0'] = '{f:count({page._templates})}';

$expression479 = function($context) {return "{f";};
$arguments476['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression479(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array478)
					),
					$renderingContext
				);
$arguments476['__thenClosure'] = $renderChildrenClosure477;

$output475 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext);

$output475 .= '
        <!-- Subpages -->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
$output500 = '';

$output500 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
$output504 = '';

$output504 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments505 = array();
$arguments505['section'] = NULL;
$arguments505['partial'] = NULL;
$arguments505['delegate'] = NULL;
$arguments505['renderable'] = NULL;
$arguments505['arguments'] = array (
);
$arguments505['optional'] = false;
$arguments505['default'] = NULL;
$arguments505['contentAs'] = NULL;
$arguments505['debug'] = true;
$arguments505['section'] = 'PageZeroTableRow';
// Rendering Array
$array507 = array();
$array508 = array (
);$array507['page'] = $renderingContext->getVariableProvider()->getByPath('page', $array508);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string509 = '{level + 1}';
$array510 = array (
  0 => '{level + 1}',
  1 => '{level + 1}',
);
$array507['level'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string509, $array510);
$array511 = array (
);$array507['template'] = $renderingContext->getVariableProvider()->getByPath('page._templates.0', $array511);
$arguments505['arguments'] = $array507;

$output504 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext);

$output504 .= '
            ';
return $output504;
};
$arguments501 = array();
$arguments501['each'] = NULL;
$arguments501['as'] = NULL;
$arguments501['key'] = NULL;
$arguments501['reverse'] = false;
$arguments501['iteration'] = NULL;
$array503 = array (
);$arguments501['each'] = $renderingContext->getVariableProvider()->getByPath('page._nodes', $array503);
$arguments501['as'] = 'page';

$output500 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments501, $renderChildrenClosure502, $renderingContext);

$output500 .= '
        ';
return $output500;
};
$arguments496 = array();
$arguments496['then'] = NULL;
$arguments496['else'] = NULL;
$arguments496['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array498 = array();
$array498['0'] = '{f:count({page._nodes})}';

$expression499 = function($context) {return "{f";};
$arguments496['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression499(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array498)
					),
					$renderingContext
				);
$arguments496['__thenClosure'] = $renderChildrenClosure497;

$output475 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);

$output475 .= '
    ';
return $output475;
};
$arguments470 = array();
$arguments470['then'] = NULL;
$arguments470['else'] = NULL;
$arguments470['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array472 = array();
$array473 = array (
);$array472['0'] = $renderingContext->getVariableProvider()->getByPath('page', $array473);

$expression474 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments470['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression474(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array472)
					),
					$renderingContext
				);
$arguments470['__thenClosure'] = $renderChildrenClosure471;

$output268 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output268 .= '
';
return $output268;
};
$arguments266 = array();
$arguments266['name'] = NULL;
$arguments266['name'] = 'PageZeroTableRow';

$output244 .= NULL;

$output244 .= '
';

return $output244;
}


}
#