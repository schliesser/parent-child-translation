<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || exit;

if (method_exists(ExtensionManagementUtility::class, 'allowTableOnStandardPages')) {
    ExtensionManagementUtility::allowTableOnStandardPages('tx_parentchildtranslation_domain_model_main');
    ExtensionManagementUtility::allowTableOnStandardPages('tx_parentchildtranslation_domain_model_squeeze');
    ExtensionManagementUtility::allowTableOnStandardPages('tx_parentchildtranslation_domain_model_child');
}
