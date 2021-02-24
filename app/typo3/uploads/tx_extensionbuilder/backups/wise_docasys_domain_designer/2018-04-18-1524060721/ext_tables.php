<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Domain Designer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_loesung', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_loesung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_loesung');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_auswirkung', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_auswirkung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_auswirkung');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_wirkungsziel', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_wirkungsziel.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_wirkungsziel');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_komponentenauswirkung', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_komponentenauswirkung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_komponentenauswirkung');

    },
    $_EXTKEY
);
