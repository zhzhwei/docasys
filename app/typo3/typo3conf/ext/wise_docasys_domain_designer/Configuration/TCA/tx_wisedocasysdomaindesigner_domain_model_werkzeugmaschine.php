<?php
return [
    'ctrl' => [
        'title'    => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine',
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
        'searchFields' => 'bezeichnung,hersteller,preis,kinematik,schmierungsart,maschinenkomponenten,maschinensteuerung,messkomponente',
        'iconfile' => 'EXT:wise_docasys_domain_designer/Resources/Public/Icons/tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, bezeichnung, hersteller, preis, kinematik, schmierungsart, maschinenkomponenten, maschinensteuerung, messkomponente',
    ],
    'types' => [
        '1' => ['showitem' => '
                --div--; Allgemein, l10n_parent, l10n_diffsource, bezeichnung, hersteller, preis,
                --div--; Struktur, maschinenkomponenten, maschinensteuerung,  
                --div--; Auslegung, kinematik, schmierungsart,
                --div--; Messung, messkomponente, 
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
                'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine',
                'foreign_table_where' => 'AND tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine.pid=###CURRENT_PID### AND tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine.sys_language_uid IN (-1,0)',
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
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine.bezeichnung',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'hersteller' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine.hersteller',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'preis' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine.preis',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'kinematik' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine.kinematik',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:not_applicable', -1],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:empty', 0],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:kinematik.1', 1],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:kinematik.2', 2],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:kinematik.3', 3],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:kinematik.4', 4],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'schmierungsart' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine.schmierungsart',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:not_applicable', -1],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:empty', 0],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:schmierungsart.1', 1],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:schmierungsart.2', 1],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:schmierungsart.3', 1],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'maschinenkomponenten' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine.maschinenkomponenten',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_maschinenkomponente',
                'foreign_field' => 'werkzeugmaschine',
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
        'maschinensteuerung' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine.maschinensteuerung',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'minitems' => 0,
                'maxitems' => 1,
                'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_maschinensteuerung',
                'foreign_field' => 'werkzeugmaschine',
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'messkomponente' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine.messkomponente',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_messkomponente',
                'foreign_field' => 'werkzeugmaschine',
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
        'fachanwendungsfall' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'unternehmen' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'loesungsuntersuchung' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
