<?php
    defined('TYPO3_MODE') || die();

    $extensionKey = 'epochenapoleon_sitepackage';

    if (\TYPO3\CMS\Core\Utility\GeneralUtility::getApplicationContext() == "Development") {
        $GLOBALS['TBE_STYLES']['skins']['backend']['stylesheetDirectories'] = 'EXT:epochenapoleon_sitepackage/Resources/Public/Backend/Stage/Css/Skin';
    }
    else {
        $GLOBALS['TBE_STYLES']['skins']['backend']['stylesheetDirectories'] = 'EXT:epochenapoleon_sitepackage/Resources/Public/Backend/Live/Css/Skin';
    }
