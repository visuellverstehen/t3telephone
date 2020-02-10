<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 't3telephone',
    'description' => 'TYPO3 LinkHandler for handling telephone links via tel protocol.',
    'category' => 'misc',
    'author' => 'visuellverstehen',
    'author_email' => 'kontakt@visuellverstehen.de',
    'author_company' => 'visuellverstehen',
    'state' => 'stable',
    'clearCacheOnLoad' => false,
    'version' => '1.0.6',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
        ]
    ]
];
