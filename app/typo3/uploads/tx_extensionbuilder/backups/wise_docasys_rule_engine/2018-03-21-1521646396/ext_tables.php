<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
            'Wise.WiseDocasysRuleEngine',
            'docasys', 
            'wiseruleengine', 
            '10',
            [
                'index' => 'overview, model'
            ],
            [
                'access' => 'user,group',
                'icon'   => 'EXT:' . $extKey . '/Resources/Public/Icons/tud.svg',
                'labels' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_wisebpmnmodeler.xlf',  
            ]
        );
        
        
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Rule Engine');

    },
    $_EXTKEY
);
