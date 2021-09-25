<?php
    defined('TYPO3_MODE') || die();


    if (!\TYPO3\CMS\Core\Core\Environment::getContext()->isProduction()
) {
    $GLOBALS['TBE_STYLES']['skins']['epochenapoleon'] = [
        'name' => 'Development',
        'stylesheetDirectories' => [
            'css' => 'EXT:epochenapoleon_sitepackage/Resources/Public/Css/backend.css'
        ]
    ];
}
