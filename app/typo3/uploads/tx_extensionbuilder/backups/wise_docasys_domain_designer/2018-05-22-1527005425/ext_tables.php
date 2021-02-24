<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Domain Designer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_parametereinheit', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_parametereinheit.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_parametereinheit');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_loesung', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_loesung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_loesung');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_modell', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_modell.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_modell');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_werkstueck', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_werkstueck.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_werkstueck');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_maschinensteuerung', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_maschinensteuerung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_maschinensteuerung');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_lastfall', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_lastfall.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_lastfall');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_wirkungsziel', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_wirkungsziel.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_wirkungsziel');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_ressource', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_ressource.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_ressource');

    },
    $_EXTKEY
);
