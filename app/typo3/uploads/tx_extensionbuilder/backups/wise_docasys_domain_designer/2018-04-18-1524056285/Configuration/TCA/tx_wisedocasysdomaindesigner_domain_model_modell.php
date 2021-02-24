<?php
    return [
        'ctrl' => [
            'title'	=> 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modell',
            'label' => 'modellbezeichnung',
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
            'searchFields' => 'modellbezeichnung,anfangsbedingungen,modellierungszweck,randbedingungen,erforderliche_modellguete,modellierungssoftware,modelltyp,abbildungsbereich,modellumfang,modellstruktur,parametrierungsart',
            'iconfile' => 'EXT:wise_docasys_domain_designer/Resources/Public/Icons/tx_wisedocasysdomaindesigner_domain_model_modell.gif'
        ],
        'interface' => [
            'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, modellbezeichnung, anfangsbedingungen, modellierungszweck, randbedingungen, erforderliche_modellguete, modellierungssoftware, modelltyp, abbildungsbereich, modellumfang, modellstruktur, parametrierungsart',
        ],
        'types' => [
            '1' => ['showitem' => '
                --div--; Allgemein, l10n_parent, l10n_diffsource, hidden, modellbezeichnung, modellierungszweck, modellierungssoftware,
                --div--; Eigenschaften, modelltyp, abbildungsbereich, modellumfang, modellstruktur, parametrierungsart,
                --div--; Bedingungen, anfangsbedingungen, randbedingungen, erforderliche_modellguete, erforderliches_modell,
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
                    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_modell',
                    'foreign_table_where' => 'AND tx_wisedocasysdomaindesigner_domain_model_modell.pid=###CURRENT_PID### AND tx_wisedocasysdomaindesigner_domain_model_modell.sys_language_uid IN (-1,0)',
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
            'modellbezeichnung' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modell.modellbezeichnung',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim',
                    'required' => 1,
                ],
            ],
            'anfangsbedingungen' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modell.anfangsbedingungen',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                ],
            ],
            'modellierungszweck' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modell.modellierungszweck',
                'config' => [
                    'type' => 'text',
                    'cols' => 40,
                    'rows' => 5,
                    'eval' => 'trim'
                ]
            ],
            'randbedingungen' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modell.randbedingungen',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                ],
            ],
            'erforderliche_modellguete' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modell.erforderliche_modellguete',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                ],
            ],
            'modellierungssoftware' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modell.modellierungssoftware',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                ],
            ],
            'modelltyp' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modell.modelltyp',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        ['Keiner', 0],
                        ['Gleichung', 1],
                        ['Finite Elemente', 2],
                        ['Knoten-Element-Netzwerk', 3],
                        ['Mehrkörpersystem', 4],
                        ['Kennfeld', 5],
                        ['Neuronales Netz', 6],
                    ],
                    'size' => 1,
                    'maxitems' => 1,
                    'eval' => ''
                ],
            ],
            'abbildungsbereich' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modell.abbildungsbereich',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        ['Keiner', 0],
                        ['Physikalische Domäne', 1],
                        ['Verhaltensbereiche', 2],
                        ['Steuerung', 3],
                        ['Regelung', 4],
                        ['Technologie', 5],
                        ['Wirtschaftliche Aspekte', 6],
                    ],
                    'size' => 1,
                    'maxitems' => 1,
                    'eval' => ''
                ],
            ],
            'modellumfang' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modell.modellumfang',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        ['Keiner', 0],
                        ['Bauteil', 1],
                        ['Baugruppe', 2],
                        ['Maschine', 3],
                        ['Werkzeug', 4],
                        ['Werkstück', 5],
                        ['Steuerung', 6],
                        ['Umgebung', 7],
                        ['Technologie', 8],
                        ['Organisation', 9],
                    ],
                    'size' => 1,
                    'maxitems' => 1,
                    'eval' => ''
                ],
            ],
            'modellstruktur' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modell.modellstruktur',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        ['Keine', 0],
                        ['Teilmodelle', 1],
                        ['Verknüpfungen', 2],
                        ['Kopplungen', 3],
                    ],
                    'size' => 1,
                    'maxitems' => 1,
                    'eval' => ''
                ],
            ],
            'parametrierungsart' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modell.parametrierungsart',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        ['Keine', 0],
                        ['abstrakt', 1],
                        ['integral', 2],
                        ['empirisch', 3],
                        ['physikalisch interpretierbar', 4],
                    ],
                    'size' => 1,
                    'maxitems' => 1,
                    'eval' => ''
                ],
            ],
            'erforderliches_modell' => [
                'exclude' => true,
                'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesung.erforderliches_modell',
                'config' => [
                    'type' => 'select',                        
                    'renderType' => 'selectMultipleSideBySide',
                    'enableMultiSelectFilterTextfield' => true,
                    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_modell',
                    'minitems' => 0,
                    'maxitems' => 9999,
                    
                    /*
                    'type' => 'inline',
                    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_modell',
                    'foreign_field' => 'loesung',
                    'maxitems' => 9999,
                    'appearance' => [
                        'collapseAll' => 0,
                        'levelLinksPosition' => 'top',
                        'showSynchronizationLink' => 1,
                        'showPossibleLocalizationRecords' => 1,
                        'showAllLocalizationLink' => 1
                    ],
                    */
                ],
            ],
        ],
    ];
