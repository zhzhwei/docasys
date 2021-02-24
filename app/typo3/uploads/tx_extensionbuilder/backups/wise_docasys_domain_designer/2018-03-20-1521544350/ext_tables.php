<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Domain Designer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_loesung', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_loesung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_loesung');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_modell', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_modell.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_modell');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung');

    },
    $_EXTKEY
);
