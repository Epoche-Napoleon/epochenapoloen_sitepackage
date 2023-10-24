<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') || die();
call_user_func(function () {
    /**
     * EXtension key
     */
    $extensionKey = 'epochenapoleon_sitepackage';

    /**
     * Default Typoscript
     */
    ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/PageTS/page.ts',
        'EPOCHE NAPOLEON Sitepackage'
    );
});

# Mit TYPO3 11 zu entfernen oder EXT:studiomitte/recordlist-thumbnail installieren
$GLOBALS['TCA']['pages']['ctrl']['thumbnail'] = 'fal_media';
