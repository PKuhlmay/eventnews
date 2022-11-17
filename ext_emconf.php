<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'News events',
    'description' => 'Events for news',
    'category' => 'plugin',
    'author' => 'Georg Ringer',
    'author_email' => '',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '5.0.2',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'news' => '9.2.0-10.9.9',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
