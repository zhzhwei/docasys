<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function ($extKey) {
        if (TYPO3_MODE === 'BE') {

            // Area grouping for all DOCASYS backend modules
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'Wise.' . $extKey,
                'docasys',
                '',
                '',
                [],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:' . $extKey . '/Resources/Public/Icons/cubes.svg',
                    'labels' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_area.xlf'
                ]
            );

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'Wise.' . $extKey,
                'docasys',
                'wisedashboard',
                '1',
                [
                    'Dashboard' => 'overview'
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:' . $extKey . '/Resources/Public/Icons/tud.svg',
                    'labels' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_wisedashboard.xlf',
                ]
            );

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'Wise.' . $extKey,
                'docasys',
                'wisedomainmanager',
                '5',
                [
                    'DomainManager' => 'overview'
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:' . $extKey . '/Resources/Public/Icons/tud.svg',
                    'labels' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_wisedomainmanager.xlf',
                ]
            );

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'Wise.' . $extKey,
                'docasys',
                'wisesolutionoverview',
                '6',
                [
                    'SolutionOverview' => 'index, referencemachine, network, summary, examinations, detail, examinationsFilter, matrix'
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:' . $extKey . '/Resources/Public/Icons/tud.svg',
                    'labels' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_wisesolutionoverview.xlf',
                ]
            );

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'Wise.' . $extKey,
                'docasys',
                'wisemodeler',
                '10',
                [
                    'Modeler' => 'list, add, edit, save, remove, update'
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:' . $extKey . '/Resources/Public/Icons/tud.svg',
                    'labels' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_wisebackend.xlf',
                ]
            );

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'Wise.' . $extKey,
                'docasys',
                'wiseruleengine',
                '20',
                [
                    'RuleEngine' => 'index'
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:' . $extKey . '/Resources/Public/Icons/tud.svg',
                    'labels' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_wiseruleengine.xlf',
                ]
            );

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'Wise.' . $extKey,
                'docasys',
                'wisefilter',
                '25',
                [
                    'Filter' => 'index'
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:' . $extKey . '/Resources/Public/Icons/tud.svg',
                    'labels' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_wisefilter.xlf',
                ]
            );

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'Wise.' . $extKey,
                'docasys',
                'wiserecommender',
                '30',
                [
                    'Recommender' => 'index, summary'
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:' . $extKey . '/Resources/Public/Icons/tud.svg',
                    'labels' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_wiserecommender.xlf',
                ]
            );

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'Wise.' . $extKey,
                'docasys',
                'wisenewsite',
                'bottom',
                [
                    'NewSite' => 'index'
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:' . $extKey . '/Resources/Public/Icons/tud.svg',
                    'labels' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_wisenewsite.xlf',
                ]
            );
        }
    },
    $_EXTKEY
);
