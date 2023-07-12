<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'parent_child_translation',
    'description' => 'Test extension for Forge issue #92768',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-13.99.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Twt\\ParentChildTranslation\\' => 'Classes/',
        ],
    ],
];
