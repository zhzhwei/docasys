<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Digiturax.DxPswProducts',
            'Products',
            [
                'Productcategory' => 'list',
                'Product' => 'list'
            ],
            // non-cacheable actions
            [
                'Productcategory' => '',
                'Product' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Digiturax.DxPswProducts',
            'Filter',
            [
                'Productcategory' => 'list',
                'Product' => 'list'
            ],
            // non-cacheable actions
            [
                'Productcategory' => '',
                'Product' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Digiturax.DxPswProducts',
            'Detailheader',
            [
                'Productcategory' => 'list',
                'Product' => 'list'
            ],
            // non-cacheable actions
            [
                'Productcategory' => '',
                'Product' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Digiturax.DxPswProducts',
            'Detailform',
            [
                'Productcategory' => 'list',
                'Product' => 'list'
            ],
            // non-cacheable actions
            [
                'Productcategory' => '',
                'Product' => ''
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					products {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_products.svg
						title = LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dx_psw_products_domain_model_products
						description = LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dx_psw_products_domain_model_products.description
						tt_content_defValues {
							CType = list
							list_type = dxpswproducts_products
						}
					}
					filter {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_filter.svg
						title = LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dx_psw_products_domain_model_filter
						description = LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dx_psw_products_domain_model_filter.description
						tt_content_defValues {
							CType = list
							list_type = dxpswproducts_filter
						}
					}
					detailheader {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_detailheader.svg
						title = LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dx_psw_products_domain_model_detailheader
						description = LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dx_psw_products_domain_model_detailheader.description
						tt_content_defValues {
							CType = list
							list_type = dxpswproducts_detailheader
						}
					}
					detailform {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_detailform.svg
						title = LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dx_psw_products_domain_model_detailform
						description = LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dx_psw_products_domain_model_detailform.description
						tt_content_defValues {
							CType = list
							list_type = dxpswproducts_detailform
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
