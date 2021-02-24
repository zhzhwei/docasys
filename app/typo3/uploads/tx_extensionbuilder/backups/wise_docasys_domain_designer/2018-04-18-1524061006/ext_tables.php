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

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_komponententyp', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_komponententyp.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_komponententyp');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_ioschnittstelle', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_ioschnittstelle.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_ioschnittstelle');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_ressourcentyp', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_ressourcentyp.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_ressourcentyp');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_messungstyp', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_messungstyp.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_messungstyp');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_modelltyp', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_modelltyp.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_modelltyp');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_messparameter', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_messparameter.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_messparameter');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_parametereinheit', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_parametereinheit.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_parametereinheit');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_komponente', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_komponente.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_komponente');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_maschinensteuerung', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_maschinensteuerung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_maschinensteuerung');

    },
    $_EXTKEY
);
