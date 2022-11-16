<?php

$EM_CONF['db_friendlycaptcha'] = [
    'title' => 'Friendly Captcha',
    'description' => 'Implements Friendly Captcha in EXT:form',
    'category' => 'fe',
    'author' => 'Dragan Balatinac',
    'state' => 'stable',
    'version' => '9.5.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.99',
        ],
    ],
];
