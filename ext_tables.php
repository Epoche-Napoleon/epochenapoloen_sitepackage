<?php
    defined('TYPO3_MODE') || die();

    $extensionKey = 'epochenapoleon_sitepackage';

    $GLOBALS['TBE_STYLES']['skins']['backend'] = [
        'name' => 'epochenapoleon',
    ];

    if (\TYPO3\CMS\Core\Utility\GeneralUtility::getApplicationContext() == "Development") {
        $GLOBALS['TBE_STYLES']['skins']['epochenapoleon'] ['epochenapoleon']['stylesheetDirectories']['live'] = 'EXT:'.$extensionKey. '/Resources/Public/Backend/Stage/Css/Skin';
    }
    else {
        $GLOBALS['TBE_STYLES']['skins']['epochenapoleon'][stylesheetDirectories]['live'] = 'EXT:'.$extensionKey.'/Resources/Public/Backend/Live/Css/Skin';
    }
