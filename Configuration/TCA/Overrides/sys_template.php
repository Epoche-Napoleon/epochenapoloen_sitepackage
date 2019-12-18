<?php
/**
 * Created by PhpStorm.
 * User: Michael Gnessner
 * Date: 26.08.2018
 * Time: 12:33
 */
defined('TYPO3_MODE') || die();

call_user_func(function ()
{
    /**
     * EXtension key
     */
    $extensionKey = 'epochenapoleon_sitepackage';

    /**
     * Default Typoscript
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/Typoscript',
        'EPOCHE NAPOLEON Sitepackage'
    );
});
