<?php
return [
    'frontend' => [
        'sitepackage-undefinedtypenumerrorhandling' => [
            'target' => \epochenapoleon\EpochenapoleonSitepackage\Middleware\UndefinedTypeNumErrorHandling::class,
            'before' => [
                'typo3/cms-redirects/redirecthandler'
            ],
            'after' => [
                'typo3/cms-frontend/site',
            ]
        ]
    ]
];
