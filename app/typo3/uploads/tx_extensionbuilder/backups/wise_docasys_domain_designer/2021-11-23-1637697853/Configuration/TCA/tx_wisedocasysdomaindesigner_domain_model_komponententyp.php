<?php
    return [
        'ctrl' => [
            'title'	=> 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_komponententyp',
            'label' => 'bezeichnung',
            'label_userFunc' => 'Wise\\WiseDocasysDomainDesigner\\Userfuncs\\Tca->komponententypTitle',
            'default_sortby' => 'ORDER BY bezeichnung ASC',
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
            'searchFields' => 'bezeichnung,beschreibung,komponentenart,bestandteile,achsenanzahl,fuehrungsart,antriebsart',
            'iconfile' => 'EXT:wise_docasys_domain_designer/Resources/Public/Icons/tx_wisedocasysdomaindesigner_domain_model_komponententyp.gif'
        ],
        'interface' => [
            'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, bezeichnung, beschreibung, komponentenart, bestandteile, auf_visualisierung_anzeigen, auf_visualisierung_x, auf_visualisierung_y, auf_visualisierung_breite, auf_visualisierung_hoehe,',
        ],
        'types' => [
            '1' => ['showitem' => '
                --div--; Allgemein, l10n_parent, l10n_diffsource, bezeichnung, beschreibung,   
                --div--; Art, komponentenart, 
                --div--; Struktur, bestandteile,
                --div--; Spezifische Eigenschaften, achsenanzahl, fuehrungsart, antriebsart,
                --div--; Visualisierung, auf_visualisierung_anzeigen, auf_visualisierung_x, auf_visualisierung_y, auf_visualisierung_breite, auf_visualisierung_hoehe,
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
                    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_komponententyp',
                    'foreign_table_where' => 'AND tx_wisedocasysdomaindesigner_domain_model_komponententyp.pid=###CURRENT_PID### AND tx_wisedocasysdomaindesigner_domain_model_komponententyp.sys_language_uid IN (-1,0)',
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
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_komponententyp.bezeichnung',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim,required'
                ],
            ],
            'beschreibung' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_komponententyp.beschreibung',
                'config' => [
                    'type' => 'text',
                    'cols' => 40,
                    'rows' => 5,
                    'eval' => 'trim'
                ]
            ],
            'komponentenart' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_komponententyp.komponentenart',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:not_applicable', -1],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:komponentenart.0', 0],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:komponentenart.1', 1],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:komponentenart.6', 6],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:komponentenart.2', 2],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:komponentenart.3', 3],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:komponentenart.4', 4],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:komponentenart.5', 5],
                    ],
                    'size' => 1,
                    'maxitems' => 1,
                    'eval' => ''
                ],
            ],
            'bestandteile' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_komponententyp.bestandteile',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectMultipleSideBySide',
                    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_komponententyp',
                    'foreign_table_where' => ' AND komponentenart IN(0, 3, 4) ORDER BY bezeichnung ASC',
                    'MM' => 'tx_wisedocasysdomaindesigner_komponententyp_komponententyp_mm',
                    'enableMultiSelectFilterTextfield' => true,
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
                                'table' => 'tx_wisedocasysdomaindesigner_domain_model_komponententyp',
                                'pid' => '###CURRENT_PID###',
                                'setValue' => 'prepend'
                            ],
                        ],
                    ],
                ],
            ],
            'achsenanzahl' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_komponententyp.achsenanzahl',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:not_applicable', -1],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:empty', 0],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:achsenanzahl.1', 1],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:achsenanzahl.2', 2],
                    ],
                    'size' => 1,
                    'maxitems' => 1,
                    'eval' => 'required'
                ],
            ],
            'fuehrungsart' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_komponententyp.fuehrungsart',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:not_applicable', -1],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:empty', 0],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:fuehrungsart.1', 1],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:fuehrungsart.2', 2],
                    ],
                    'size' => 1,
                    'maxitems' => 1,
                    'eval' => 'required'
                ],
            ],
            'antriebsart' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_komponententyp.antriebsart',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:not_applicable', -1],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:empty', 0],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:antriebsart.1', 1],
                        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:antriebsart.2', 2],
                    ],
                    'size' => 1,
                    'maxitems' => 1,
                    'eval' => 'required'
                ],
            ],
            'auf_visualisierung_anzeigen' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_komponententyp.auf_visualisierung_anzeigen',
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
            'auf_visualisierung_x' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_komponententyp.auf_visualisierung_x',
                'config' => [
                    'type' => 'input',
                    'size' => 4,
                    'eval' => 'int'
                ]
            ],
            'auf_visualisierung_y' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_komponententyp.auf_visualisierung_y',
                'config' => [
                    'type' => 'input',
                    'size' => 4,
                    'eval' => 'int'
                ]
            ],
            'auf_visualisierung_breite' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_komponententyp.auf_visualisierung_breite',
                'config' => [
                    'type' => 'input',
                    'size' => 4,
                    'eval' => 'int'
                ]
            ],
            'auf_visualisierung_hoehe' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_komponententyp.auf_visualisierung_hoehe',
                'config' => [
                    'type' => 'input',
                    'size' => 4,
                    'eval' => 'int'
                ]
            ],
            'loesung' => [
                'config' => [
                    'type' => 'passthrough',
                ],
            ],
            'modell' => [
                'config' => [
                    'type' => 'passthrough',
                ],
            ],
            'maschinenkomponente' => [
                'config' => [
                    'type' => 'passthrough',
                ],
            ],
            'komponentenauswirkung' => [
                'config' => [
                    'type' => 'passthrough',
                ],
            ],
            'lsgressourceinput' => [
                'config' => [
                    'type' => 'passthrough',
                ],
            ],
            'lsgressourceoutput' => [
                'config' => [
                    'type' => 'passthrough',
                ],
            ],
            'lstmodellinput' => [
                'config' => [
                    'type' => 'passthrough',
                ],
            ],
            'lstmodelloutput' => [
                'config' => [
                    'type' => 'passthrough',
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