<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Digiturax.DxUploadNotification',
            'Uploadinfo',
            'Upload-Info'
        );

        $pluginSignature = str_replace('_', '', $extKey) . '_uploadinfo';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $extKey . '/Configuration/FlexForms/flexform_uploadinfo.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Upload Notification');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dxuploadnotification_domain_model_uploadnotification', 'EXT:dx_upload_notification/Resources/Private/Language/locallang_csh_tx_dxuploadnotification_domain_model_uploadnotification.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dxuploadnotification_domain_model_uploadnotification');

    },
    $_EXTKEY
);
