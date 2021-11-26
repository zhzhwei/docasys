<?php
    return [
        'hideTable' => true,
        'ctrl' => [
            'title'	=> 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_lsgdateninput',
            'label' => 'daten',
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
            'searchFields' => 'bemerkung,ist_obligatorisch,daten',
            'iconfile' => 'EXT:wise_docasys_domain_designer/Resources/Public/Icons/tx_wisedocasysdomaindesigner_domain_model_lsgdateninput.gif',
            'hideTable' => true,
        ],
        'interface' => [
            'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, bemerkung, ist_obligatorisch, daten',
        ],
        'types' => [
            '1' => ['showitem' => '
                l10n_parent, l10n_diffsource, daten, bemerkung, ist_obligatorisch,
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
                    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_lsgdateninput',
                    'foreign_table_where' => 'AND tx_wisedocasysdomaindesigner_domain_model_lsgdateninput.pid=###CURRENT_PID### AND tx_wisedocasysdomaindesigner_domain_model_lsgdateninput.sys_language_uid IN (-1,0)',
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
            'bemerkung' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_lsgdateninput.bemerkung',
                'config' => [
                    'type' => 'text',
                    'cols' => 40,
                    'rows' => 5,
                    'eval' => 'trim'
                ]
            ],
            'ist_obligatorisch' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_lsgdateninput.ist_obligatorisch',
                'config' => [
                    'type' => 'check',
                    'items' => [
                        '1' => [
                            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                        ]
                    ],
                    'default' => 0
                ]
            ],
            'daten' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_lsgdateninput.daten',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectMultipleSideBySide',
                    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_daten',
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
                                'table' => 'tx_wisedocasysdomaindesigner_domain_model_daten',
                                'pid' => '###CURRENT_PID###',
                                'setValue' => 'prepend'
                            ],
                        ],
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
