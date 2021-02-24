<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        if (TYPO3_MODE === 'BE') {

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'Wise.WiseDocasysBpmnModeler',
                'web', // Make module a submodule of 'web'
                'wisebpmnmodeler', // Submodule key
                '', // Position
                [
                    'index' => 'overview, model'
                ],
                [
                    'access' => 'user,group',
					'icon'   => 'EXT:' . $extKey . '/Resources/Public/Icons/user_mod_wisebpmnmodeler.svg',
                    'labels' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_wisebpmnmodeler.xlf',
                ]
            );

        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'BPMN Modeler');

    },
    $_EXTKEY
);
