<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'News events',
    'description' => 'Events for news',
    'category' => 'plugin',
    'author' => 'Georg Ringer',
    'author_email' => '',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'version' => '4.0.0',
    'constraints' => [
        'depends' => [
<<<<<<< HEAD
            'typo3' => '9.5.9-10.2.99',
            'news' => '8.0.0-8.9.99',
=======
            'typo3' => '9.5.13-10.5.99',
            'news' => '7.0.0-8.9.99',
>>>>>>> [TASK] Start with 4.0
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
