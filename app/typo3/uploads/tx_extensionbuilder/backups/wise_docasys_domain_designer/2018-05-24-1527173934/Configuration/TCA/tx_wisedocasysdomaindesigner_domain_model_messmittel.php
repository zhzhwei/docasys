<?php
    return [
        'ctrl' => [
            'title'	=> 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_messmittel',
            'label' => 'bezeichnung',
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
            'searchFields' => 'bezeichnung,zweck,beschreibung,messsoftware,messart,messparameter',
            'iconfile' => 'EXT:wise_docasys_domain_designer/Resources/Public/Icons/tx_wisedocasysdomaindesigner_domain_model_messmittel.gif'
        ],
        'interface' => [
            'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, bezeichnung, zweck, beschreibung, messsoftware, messart, messparameter',
        ],
        'types' => [
            '1' => ['showitem' => '
                --div--; Allgemein, l10n_parent, l10n_diffsource, hidden, bezeichnung, beschreibung,
                --div--; Eigenschaften, messart, zweck, messsoftware,
                --div--; Parameter, messparameter, 
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
                    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_messmittel',
                    'foreign_table_where' => 'AND tx_wisedocasysdomaindesigner_domain_model_messmittel.pid=###CURRENT_PID### AND tx_wisedocasysdomaindesigner_domain_model_messmittel.sys_language_uid IN (-1,0)',
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
            'bezeichnung' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_messmittel.bezeichnung',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim,required'
                ],
            ],
            'zweck' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_messmittel.zweck',
                'config' => [
                    'type' => 'text',
                    'cols' => 40,
                    'rows' => 15,
                    'eval' => 'trim'
                ]
            ],
            'beschreibung' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_messmittel.beschreibung',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                ],
            ],
            'messsoftware' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_messmittel.messsoftware',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                ],
            ],
            'messart' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_messmittel.messart',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:empty', 0],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:messart.1', 1],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:messart.2', 2],
                    ],
                    'size' => 1,
                    'maxitems' => 1,
                    'eval' => ''
                ],
            ],
            'messparameter' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_messmittel.messparameter',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectMultipleSideBySide',
                    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_messparameter',
                    'MM' => 'tx_wisedocasysdomaindesigner_messmittel_messparameter_mm',
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
                            'title' => 'Edit', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.edit
                            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
                            'popup_onlyOpenIfSelected' => 1,
                            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                        ],
                        'add' => [
                            'module' => [
                                'name' => 'wizard_add',
                            ],
                            'type' => 'script',
                            'title' => 'Create new', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.add
                            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
                            'params' => [
                                'table' => 'tx_wisedocasysdomaindesigner_domain_model_messparameter',
                                'pid' => '###CURRENT_PID###',
                                'setValue' => 'prepend'
                            ],
                        ],
                    ],
                ],
            ],
            'lsgmessmittelinput' => [
                'config' => [
                    'type' => 'passthrough',
                ],
            ],
            'lsgmessmitteloutput' => [
                'config' => [
                    'type' => 'passthrough',
                ],
            ],
        ],
    ];
