<?php

defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT:source="FILE:EXT:'
    . $_EXTKEY .'/Configuration/PageTS/page.tsconfig">'
);

// Update für sourceIdentifier
$tca = array(
    'source_identifier' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:beaconizer/Resources/Private/Language/locallang_db.xlf:pages.source_identifier',
        'config' => array(
            'type' => 'input',
            'size' => '30',
            'max' => '40',
            'eval' => 'nospace,unique',
        )
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $tca);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages', // Table name
    'source_identifier', // Field list to add
    '', // List of specific types to add the field list to. (If empty, all type entries are affected)
    'after:alias' // Insert fields before (default) or after one, or replace a field
);

$GLOBALS['TCA']['pages']['columns']['alias']['config']['eval'] = 'nospace,alphanum_x,unique';
