<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung',
        'label' => 'quelle',
        'label_alt' => 'senke',
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
		'searchFields' => 'randbedingungen,ist_anwendbar,hat_anpassungsnotwendigkeit,anpassungsgrad,beschreibung,loesungsbeziehungsart,quelle,senke',
        'iconfile' => 'EXT:wise_docasys_domain_designer/Resources/Public/Icons/tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, randbedingungen, ist_anwendbar, hat_anpassungsnotwendigkeit, anpassungsgrad, beschreibung, loesungsbeziehungsart, quelle, senke',
    ],
    'types' => [
        '1' => ['showitem' => '
            --div--; Allgemein,         l10n_parent, l10n_diffsource, quelle, senke, loesungsbeziehungsart, beschreibung, 
            --div--; Bedingungen,       ist_anwendbar, randbedingungen,
            --div--; Anpassungen,       hat_anpassungsnotwendigkeit, anpassungsgrad,
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
                'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung',
                'foreign_table_where' => 'AND tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung.pid=###CURRENT_PID### AND tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung.sys_language_uid IN (-1,0)',
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
        'randbedingungen' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung.randbedingungen',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 5,
			    'eval' => 'trim'
			]
	    ],
	    'ist_anwendbar' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung.ist_anwendbar',
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
	    'hat_anpassungsnotwendigkeit' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung.hat_anpassungsnotwendigkeit',
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
	    'anpassungsgrad' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung.anpassungsgrad',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'beschreibung' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung.beschreibung',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 5,
			    'eval' => 'trim'
			]
	    ],
	    'loesungsbeziehungsart' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung.loesungsbeziehungsart',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:not_applicable', -1],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:empty', 0],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:loesungsbeziehungsart.1', 1],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:loesungsbeziehungsart.2', 2],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:loesungsbeziehungsart.3', 3],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:loesungsbeziehungsart.4', 4],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:loesungsbeziehungsart.5', 5],
                ],
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
	    'quelle' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung.quelle',
	        'config' => [
			    'type' => 'select',
                'renderType' => 'selectSingle',
			    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_loesung',
			    'foreign_field' => 'loesungsbeziehung',
			    'minitems' => 1,
                'maxitems' => 1,
			    'appearance' => [
			        'collapseAll' => 1,
			        'levelLinksPosition' => 'top',
			        'showSynchronizationLink' => 1,
			        'showPossibleLocalizationRecords' => 1,
			        'showAllLocalizationLink' => 1
			    ],
			],
	    ],
	    'senke' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung.senke',
	        'config' => [
			    'type' => 'select',
                'renderType' => 'selectSingle',
			    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_loesung',
			    'foreign_field' => 'loesungsbeziehung1',
			    'minitems' => 1,
                'maxitems' => 1,
			    'appearance' => [
			        'collapseAll' => 1,
			        'levelLinksPosition' => 'top',
			        'showSynchronizationLink' => 1,
			        'showPossibleLocalizationRecords' => 1,
			        'showAllLocalizationLink' => 1
			    ],
			],
	    ],
    ],
];