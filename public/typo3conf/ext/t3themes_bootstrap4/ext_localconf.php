<?php
defined('TYPO3_MODE') || die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['editorExtended'] = 'EXT:t3themes_bootstrap4/Configuration/RTE/EditorExtended.yaml';

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('flux')) {
	\FluidTYPO3\Flux\Core::registerProviderExtensionKey('SalvatoreEckel.T3themesBootstrap4', 'Content');
}
