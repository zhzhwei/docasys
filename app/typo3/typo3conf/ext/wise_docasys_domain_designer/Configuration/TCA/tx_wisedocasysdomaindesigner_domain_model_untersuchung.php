<?php
return [
    'ctrl' => [
        'title'    => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_untersuchung',
        'label' => 'verfahrensbezeichnung',
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
        'searchFields' => 'verfahrensbezeichnung,untersuchungsart,messprinzip,messgenauigkeit,messgroesse,messablauf,vorgehen,entscheidungen,erforderliche_ressourcen,erforderliche_modelle,erforderliche_messverfahren',
        'iconfile' => 'EXT:wise_docasys_domain_designer/Resources/Public/Icons/tx_wisedocasysdomaindesigner_domain_model_untersuchung.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, verfahrensbezeichnung, untersuchungsart, messprinzip, messgenauigkeit, messgroesse, messablauf, vorgehen, entscheidungen, erforderliche_ressourcen, erforderliche_modelle, erforderliche_messverfahren',
    ],
    'types' => [
        '1' => ['showitem' => '
                --div--; Allgemein, l10n_parent, l10n_diffsource, verfahrensbezeichnung, untersuchungsart,
                --div--; Vorgehen, vorgehen, entscheidungen,
                --div--; Ressourcen, erforderliche_ressourcen, erforderliche_modelle, erforderliche_messverfahren,
                --div--; Messverfahren, messprinzip, messgenauigkeit, messgroesse, messablauf, 
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
                'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_untersuchung',
                'foreign_table_where' => 'AND tx_wisedocasysdomaindesigner_domain_model_untersuchung.pid=###CURRENT_PID### AND tx_wisedocasysdomaindesigner_domain_model_untersuchung.sys_language_uid IN (-1,0)',
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
        'verfahrensbezeichnung' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_untersuchung.verfahrensbezeichnung',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'untersuchungsart' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_untersuchung.untersuchungsart',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:not_applicable', -1],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:empty', 0],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:untersuchungsart.1', 1],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:untersuchungsart.2', 2],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:untersuchungsart.3', 3],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:untersuchungsart.4', 4],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'messprinzip' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_untersuchung.messprinzip',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'messgenauigkeit' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_untersuchung.messgenauigkeit',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'messgroesse' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_untersuchung.messgroesse',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'messablauf' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_untersuchung.messablauf',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'vorgehen' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_untersuchung.vorgehen',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_vorgehensbeschreibung',
                'foreign_field' => 'untersuchung',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'entscheidungen' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_untersuchung.entscheidungen',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_entscheidung',
                'foreign_field' => 'untersuchung',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'erforderliche_ressourcen' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_untersuchung.erforderliche_ressourcen',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_ressource',
                'MM' => 'tx_wisedocasysdomaindesigner_untersuchung_ressource_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'enableMultiSelectFilterTextfield' => true,
                'wizards' => [
                    '_PADDING' => 1,
                    '_VERTICAL' => 1,
                    'edit' => [
                        'module' => [
                            'name' => 'wizard_edit',
                        ],
                        'type' => 'popup',
                        'icon' => 'actions-open',
                        'popup_onlyOpenIfSelected' => 1,
                        'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
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
        'erforderliche_modelle' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_untersuchung.erforderliche_modelle',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_modell',
                'MM' => 'tx_wisedocasysdomaindesigner_untersuchung_modell_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'enableMultiSelectFilterTextfield' => true,
                'wizards' => [
                    '_PADDING' => 1,
                    '_VERTICAL' => 1,
                    'edit' => [
                        'module' => [
                            'name' => 'wizard_edit',
                        ],
                        'type' => 'popup',
                        'icon' => 'actions-open',
                        'popup_onlyOpenIfSelected' => 1,
                        'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                    ],
                    'add' => [
                        'module' => [
                            'name' => 'wizard_add',
                        ],
                        'type' => 'script',
                        'icon' => 'actions-add',
                        'params' => [
                            'table' => 'tx_wisedocasysdomaindesigner_domain_model_modell',
                            'pid' => '###CURRENT_PID###',
                            'setValue' => 'prepend'
                        ],
                    ],
                ],
            ],
        ],
        'erforderliche_messverfahren' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_untersuchung.erforderliche_messverfahren',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_messverfahren',
                'MM' => 'tx_wisedocasysdomaindesigner_untersuchung_messverfahren_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'wizards' => [
                    '_PADDING' => 1,
                    '_VERTICAL' => 1,
                    'edit' => [
                        'module' => [
                            'name' => 'wizard_edit',
                        ],
                        'type' => 'popup',
                        'icon' => 'actions-open',
                        'popup_onlyOpenIfSelected' => 1,
                        'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                    ],
                    'add' => [
                        'module' => [
                            'name' => 'wizard_add',
                        ],
                        'type' => 'script',
                        'icon' => 'actions-add',
                        'params' => [
                            'table' => 'tx_wisedocasysdomaindesigner_domain_model_messverfahren',
                            'pid' => '###CURRENT_PID###',
                            'setValue' => 'prepend'
                        ],
                    ],
                ],
            ],
        ],
        'loesungsuntersuchung' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
