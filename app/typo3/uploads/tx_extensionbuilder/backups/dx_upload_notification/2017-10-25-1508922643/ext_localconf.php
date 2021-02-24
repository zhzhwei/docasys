<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Digiturax.DxUploadNotification',
            'Uploadinfo',
            [
                'UploadNotification' => 'overview, send'
            ],
            // non-cacheable actions
            [
                'UploadNotification' => 'overview, send'
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					uploadinfo {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/module-icon.gif
						title = LLL:EXT:dx_upload_notification/Resources/Private/Language/locallang_db.xlf:tx_dx_upload_notification_domain_model_uploadinfo
						description = LLL:EXT:dx_upload_notification/Resources/Private/Language/locallang_db.xlf:tx_dx_upload_notification_domain_model_uploadinfo.description
						tt_content_defValues {
							CType = list
							list_type = dxuploadnotification_uploadinfo
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
