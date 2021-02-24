<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Digiturax.DxPswProducts',
            'Products',
            'Angebote'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Digiturax.DxPswProducts',
            'Filter',
            'Filter'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Digiturax.DxPswProducts',
            'Detailheader',
            'Detail-Header'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Digiturax.DxPswProducts',
            'Detailform',
            'Detail-Formular'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'PSW-Angebote');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dxpswproducts_domain_model_productcategory', 'EXT:dx_psw_products/Resources/Private/Language/locallang_csh_tx_dxpswproducts_domain_model_productcategory.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dxpswproducts_domain_model_productcategory');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dxpswproducts_domain_model_product', 'EXT:dx_psw_products/Resources/Private/Language/locallang_csh_tx_dxpswproducts_domain_model_product.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dxpswproducts_domain_model_product');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dxpswproducts_domain_model_inquiry', 'EXT:dx_psw_products/Resources/Private/Language/locallang_csh_tx_dxpswproducts_domain_model_inquiry.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dxpswproducts_domain_model_inquiry');

    },
    $_EXTKEY
);
