<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SYS']['linkHandler']['tel'] = \VV\T3telephone\LinkHandling\TelLinkHandler::class;

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3telephone/Configuration/TSconfig/Page/LinkHandler.ts">'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_content.php']['typolinkLinkHandler']['tel'] = \VV\T3telephone\Hooks\TypoLinkHandler::class;
