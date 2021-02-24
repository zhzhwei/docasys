<?php
    return [
        'ctrl' => [
            'title'	=> 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_lsgressourceinput',
            'label' => 'phase_der_thermischen_wirkkette',
            'label_alt' => ',ressource',
            'label_alt_force' => 1,
            'tstamp' => 'tstamp',
            'crdate' => 'crdate',
            'cruser_id' => 'cruser_id',
            'versioningWS' => true,
            'languageField' => 'sys_language_uid',
            'transOrigPointerField' => 'l10n_parent',
            'transOrigDiffSourceField' => 'l10n_diffsource',
            'delete' => 'deleted',
            'enablecolumns' => [
                'disabled' => 'hidden',
                'starttime' => 'starttime',
                'endtime' => 'endtime',
            ],
            'searchFields' => 'phase_der_thermischen_wirkkette,ressource,struktur',
            'iconfile' => 'EXT:wise_docasys_domain_designer/Resources/Public/Icons/tx_wisedocasysdomaindesigner_domain_model_lsgressourceinput.gif',
            'hideTable' => 1
        ],
        'interface' => [
            'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, phase_der_thermischen_wirkkette, ressource, struktur',
        ],
        'types' => [
            '1' => ['showitem' => '
                l10n_parent, l10n_diffsource, phase_der_thermischen_wirkkette, ressource, struktur,
            '],
        ],
        'columns' => [
            'sys_language_uid' => [
                'exclude' => true,
                'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'special' => 'languages',
                    'items' => [
                        [
                            'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                            -1,
                            'flags-multiple'
                        ]
                    ],
                    'default' => 0,
                ],
            ],
            'l10n_parent' => [
                'displayCond' => 'FIELD:sys_language_uid:>:0',
                'exclude' => true,
                'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        ['', 0],
                    ],
                    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_lsgressourceinput',
                    'foreign_table_where' => 'AND tx_wisedocasysdomaindesigner_domain_model_lsgressourceinput.pid=###CURRENT_PID### AND tx_wisedocasysdomaindesigner_domain_model_lsgressourceinput.sys_language_uid IN (-1,0)',
                ],
            ],
            'l10n_diffsource' => [
                'config' => [
                    'type' => 'passthrough',
                ],
            ],
            't3ver_label' => [
                'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'max' => 255,
                ],
            ],
            'hidden' => [
                'exclude' => true,
                'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
                'config' => [
                    'type' => 'check',
                    'items' => [
                        '1' => [
                            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                        ]
                    ],
                ],
            ],
            'starttime' => [
                'exclude' => true,
                'l10n_mode' => 'mergeIfNotBlank',
                'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
                'config' => [
                    'type' => 'input',
                    'size' => 13,
                    'eval' => 'datetime',
                    'default' => 0,
                ]
            ],
            'endtime' => [
                'exclude' => true,
                'l10n_mode' => 'mergeIfNotBlank',
                'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
                'config' => [
                    'type' => 'input',
                    'size' => 13,
                    'eval' => 'datetime',
                    'default' => 0,
                    'range' => [
                        'upper' => mktime(0, 0, 0, 1, 1, 2038)
                    ]
                ],
            ],
            'phase_der_thermischen_wirkkette' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_lsgressourceinput.phase_der_thermischen_wirkkette',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:empty', 0],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:phase_thermische_wirkkette.1', 1],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:phase_thermische_wirkkette.2', 2],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:phase_thermische_wirkkette.3', 3],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:phase_thermische_wirkkette.4', 4],
                    ],
                    'size' => 1,
                    'maxitems' => 1,
                    'eval' => ''
                ],
            ],
            'ressource' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_lsgressourceinput.ressource',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectMultipleSideBySide',
                    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_ressource',
                    'minitems' => 1,
                    'maxitems' => 1,
                    'enableMultiSelectFilterTextfield' => true,
                    'wizards' => [
                        '_PADDING'  => 1,
                        '_VERTICAL' => 1,
                        'edit' => [
                            'module' => [
                                'name' => 'wizard_edit',
                            ],
                            'type' => 'popup',
                            'icon' => 'actions-open',
                        ],
                        'add' => [
                            'module' => [
                                'name' => 'wizard_add',
                            ],
                            'type' => 'script',
                            'icon' => 'actions-add',
                            'params' => [
                                'table' => 'tx_wisedocasysdomaindesigner_domain_model_ressource',
                                'pid' => '###CURRENT_PID###',
                                'setValue' => 'prepend'
                            ],
                        ],
                    ],
                ],   
            ],
            'struktur' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_lsgressourceinput.struktur',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_komponententyp',
                    'foreign_field' => 'lsgressourceinput',
                    'minitems' => 0,
                    'maxitems' => 1,
                    'items' => [
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:empty', 0],
                    ],
                    'appearance' => [
                        'collapseAll' => 0,
                        'levelLinksPosition' => 'top',
                        'showSynchronizationLink' => 1,
                        'showPossibleLocalizationRecords' => 1,
                        'showAllLocalizationLink' => 1
                    ],
                ],
            ],
            'loesung' => [
                'config' => [
                    'type' => 'passthrough',
                ],
            ],
        ],
    ];
