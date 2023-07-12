<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || exit;

ExtensionManagementUtility::addStaticFile('parent_child_translation', 'Configuration/TypoScript', 'Parent Child Translation');
