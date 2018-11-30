<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SYS']['linkHandler']['tel'] =
    \VV\T3telephone\LinkHandling\TelLinkHandler::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_content.php']['typolinkLinkHandler']['tel'] =
    \VV\T3telephone\Hooks\TypoLinkHandler::class;

// Register new link handler
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    TCEMAIN.linkHandler {
        tel {
            handler = VV\\T3telephone\\Recordlist\\LinkHandler\\TelLinkHandler
            label = LLL:EXT:t3telephone/Resources/Private/Language/locallang_browse_links.xlf:tel
            scanAfter = page
        }
    }
');
