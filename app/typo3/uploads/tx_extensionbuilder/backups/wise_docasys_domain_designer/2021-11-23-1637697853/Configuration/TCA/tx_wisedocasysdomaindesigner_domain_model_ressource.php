<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_ressource',
        'label' => 'bezeichnung',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'default_sortby' => 'ORDER BY bezeichnung ASC',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
		'searchFields' => 'bezeichnung,zweck,beschreibung,ist_buendel,hersteller,wert,einheit,art',
        'iconfile' => 'EXT:wise_docasys_domain_designer/Resources/Public/Icons/tx_wisedocasysdomaindesigner_domain_model_ressource.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, bezeichnung, zweck, beschreibung, ist_buendel, hersteller, ressourcenart, wert, einheit, art',
    ],
    'types' => [
          '1' => ['showitem' => '
              --div--; Allgemein, l10n_parent, l10n_diffsource, bezeichnung, zweck, beschreibung,
              --div--; Eigenschaften, ist_buendel, hersteller, wert, einheit, art
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
                'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_ressource',
                'foreign_table_where' => 'AND tx_wisedocasysdomaindesigner_domain_model_ressource.pid=###CURRENT_PID### AND tx_wisedocasysdomaindesigner_domain_model_ressource.sys_language_uid IN (-1,0)',
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
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_ressource.bezeichnung',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'zweck' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_ressource.zweck',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 5,
			    'eval' => 'trim'
			]
	    ],
	    'beschreibung' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_ressource.beschreibung',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 5,
			    'eval' => 'trim'
			],
	    ],
	    'ist_buendel' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_ressource.ist_buendel',
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
	    'hersteller' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_ressource.hersteller',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'ressourcenart' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_ressource.ressourcenart',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
                       ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:not_applicable', -1],
                       ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:empty', 0],
                       ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:ressourcenart.1', 1],
                       ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:ressourcenart.2', 2],
                       ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:ressourcenart.3', 3],
                       ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:ressourcenart.4', 4],
                       ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:ressourcenart.5', 5],
                       ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:ressourcenart.6', 6],
                       ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:ressourcenart.7', 7],
			    ],
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
	    'wert' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_ressource.wert',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'double2'
			]
	    ],
	    'einheit' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_ressource.einheit',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
                       ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:empty', 0],
                       ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:unit.1', 1],
                       ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:unit.2', 2],
			    ],
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
	    'art' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_ressource.art',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_ressourcenart',
			    'foreign_field' => 'ressource',
			    'default' => '',
			    'size' => 1,
			    'eval' => ''
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
    ],
];