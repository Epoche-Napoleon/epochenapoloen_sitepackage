<?php

defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT:source="FILE:EXT:'
    . $_EXTKEY .'/Configuration/PageTS/page.tsconfig">'
);
# Mit TYPO3 11 zu entfernen oder EXT:studiomitte/recordlist-thumbnail installieren
#$GLOBALS['TCA']['pages']['ctrl']['thumbnail'] = 'fal_media';
