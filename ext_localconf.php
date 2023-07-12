<?php

use Twt\ParentChildTranslation\Controller\MainController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') || exit;

ExtensionUtility::configurePlugin(
    'ParentChildTranslation',
    'ParentChildTranslation',
    [
        MainController::class => 'list',
    ],
    // non-cacheable actions
    [
        MainController::class => 'list',
    ]
);
