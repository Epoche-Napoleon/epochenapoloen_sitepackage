<?php
    defined('TYPO3_MODE') || die();

    if (getenv('TYPO3_ENV') !== "Production") {
        $GLOBALS['TBE_STYLES']['stylesheet'] = 'EXT:epochenapoleon_sitepackage/Resources/Public/Css/backend.css';
    }

    /*
    if (!\TYPO3\CMS\Core\Core\Environment::getContext()->isProduction()
) {
    $GLOBALS['TBE_STYLES']['skins']['epochenapoleon_sitepackage'] = [
        'name' => 'Development',
        'stylesheetDirectories' => [
            'css' => 'EXT:epochenapoleon_sitepackage/Resources/Public/Css/backend.css'
        ]
    ];
}
    */
