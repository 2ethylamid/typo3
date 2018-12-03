<?php

class layout_Default_html_150f8248b0027dc960bbedde11de514beba25276 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLayoutViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['pageTitle'] = '';
$arguments4['includeCssFiles'] = NULL;
$arguments4['includeJsFiles'] = NULL;
$arguments4['addJsInlineLabels'] = NULL;
$arguments4['includeRequireJsModules'] = NULL;
$arguments4['addInlineSettings'] = NULL;
// Rendering Array
$array6 = array();
$array6['0'] = 'TYPO3/CMS/Backend/ContextMenu';
$array6['1'] = 'TYPO3/CMS/Backend/Modal';
$arguments4['includeRequireJsModules'] = $array6;

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuItemViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['label'] = NULL;
$arguments10['uri'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['key'] = NULL;
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$arguments12['languageKey'] = NULL;
$arguments12['alternativeLanguageKeys'] = NULL;
$arguments12['id'] = 'backendUsers';
$arguments10['label'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['action'] = NULL;
$arguments14['arguments'] = array (
);
$arguments14['controller'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['pluginName'] = NULL;
$arguments14['pageUid'] = NULL;
$arguments14['pageType'] = 0;
$arguments14['noCache'] = false;
$arguments14['noCacheHash'] = false;
$arguments14['section'] = '';
$arguments14['format'] = '';
$arguments14['linkAccessRestrictedPages'] = false;
$arguments14['additionalParams'] = array (
);
$arguments14['absolute'] = false;
$arguments14['addQueryString'] = false;
$arguments14['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments14['addQueryStringMethod'] = NULL;
$arguments14['controller'] = 'BackendUser';
$arguments14['action'] = 'index';
$arguments10['uri'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output9 .= TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuItemViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuItemViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['label'] = NULL;
$arguments16['uri'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['key'] = NULL;
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['languageKey'] = NULL;
$arguments18['alternativeLanguageKeys'] = NULL;
$arguments18['id'] = 'backendUserGroupsMenu';
$arguments16['label'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['action'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['controller'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['pluginName'] = NULL;
$arguments20['pageUid'] = NULL;
$arguments20['pageType'] = 0;
$arguments20['noCache'] = false;
$arguments20['noCacheHash'] = false;
$arguments20['section'] = '';
$arguments20['format'] = '';
$arguments20['linkAccessRestrictedPages'] = false;
$arguments20['additionalParams'] = array (
);
$arguments20['absolute'] = false;
$arguments20['addQueryString'] = false;
$arguments20['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments20['addQueryStringMethod'] = NULL;
$arguments20['controller'] = 'BackendUserGroup';
$arguments20['action'] = 'index';
$arguments16['uri'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output9 .= TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuItemViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output9 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuItemViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['label'] = NULL;
$arguments22['uri'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['key'] = NULL;
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['extensionName'] = NULL;
$arguments24['languageKey'] = NULL;
$arguments24['alternativeLanguageKeys'] = NULL;
$arguments24['id'] = 'onlineUsers';
$arguments22['label'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['action'] = NULL;
$arguments26['arguments'] = array (
);
$arguments26['controller'] = NULL;
$arguments26['extensionName'] = NULL;
$arguments26['pluginName'] = NULL;
$arguments26['pageUid'] = NULL;
$arguments26['pageType'] = 0;
$arguments26['noCache'] = false;
$arguments26['noCacheHash'] = false;
$arguments26['section'] = '';
$arguments26['format'] = '';
$arguments26['linkAccessRestrictedPages'] = false;
$arguments26['additionalParams'] = array (
);
$arguments26['absolute'] = false;
$arguments26['addQueryString'] = false;
$arguments26['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments26['addQueryStringMethod'] = NULL;
$arguments26['controller'] = 'BackendUser';
$arguments26['action'] = 'online';
$arguments22['uri'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output9 .= TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuItemViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output9 .= '
	';
return $output9;
};
$arguments7 = array();
$arguments7['identifier'] = NULL;
$arguments7['identifier'] = 'BackendUserModuleMenu';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output3 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['section'] = NULL;
$arguments28['partial'] = NULL;
$arguments28['delegate'] = NULL;
$arguments28['renderable'] = NULL;
$arguments28['arguments'] = array (
);
$arguments28['optional'] = false;
$arguments28['default'] = NULL;
$arguments28['contentAs'] = NULL;
$arguments28['debug'] = true;
$arguments28['section'] = 'Buttons';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\Button\ShortcutButtonViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['icon'] = NULL;
$arguments30['title'] = NULL;
$arguments30['disabled'] = false;
$arguments30['showLabel'] = false;
$arguments30['position'] = NULL;
$arguments30['group'] = NULL;
$arguments30['displayName'] = NULL;
$arguments30['getVars'] = array (
);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['key'] = NULL;
$arguments32['id'] = NULL;
$arguments32['default'] = NULL;
$arguments32['arguments'] = NULL;
$arguments32['extensionName'] = NULL;
$arguments32['languageKey'] = NULL;
$arguments32['alternativeLanguageKeys'] = NULL;
$array34 = array (
);$arguments32['id'] = $renderingContext->getVariableProvider()->getByPath('shortcutLabel', $array34);
$arguments30['displayName'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\Button\ShortcutButtonViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output3 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['section'] = NULL;
$arguments35['partial'] = NULL;
$arguments35['delegate'] = NULL;
$arguments35['renderable'] = NULL;
$arguments35['arguments'] = array (
);
$arguments35['optional'] = false;
$arguments35['default'] = NULL;
$arguments35['contentAs'] = NULL;
$arguments35['debug'] = true;
$arguments35['section'] = 'Content';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output3 .= '

';
return $output3;
};
$arguments1 = array();

$output0 .= TYPO3\CMS\Backend\ViewHelpers\ModuleLayoutViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '


';

return $output0;
}


}
#