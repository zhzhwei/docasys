<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modelltyp',
        'label' => 'typbezeichnung',
        'default_sortby' => 'ORDER BY typbezeichnung ASC',
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
        ],
		'searchFields' => 'typbezeichnung,zweck,anfangsbedingungen,randbedingungen,erforderliche_modellguete,modellierungssoftware,modellklasse,abbildungsbereich,modellumfang,modellstruktur,parametrisierungsart',
        'iconfile' => 'EXT:wise_docasys_domain_designer/Resources/Public/Icons/tx_wisedocasysdomaindesigner_domain_model_modelltyp.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, typbezeichnung, zweck, anfangsbedingungen, randbedingungen, erforderliche_modellguete, modellierungssoftware, modellklasse, abbildungsbereich, modellumfang, modellstruktur, parametrisierungsart',
    ],
    'types' => [
		'1' => ['showitem' => '
            --div--; Allgemein,         l10n_parent, l10n_diffsource, hidden, typbezeichnung, zweck, 
            --div--; Eigenschaften,     modellklasse, abbildungsbereich, modellumfang, modellstruktur, parametrisierungsart,
            --div--; Software,          modellierungssoftware,
            --div--; Bedingungen,       anfangsbedingungen, randbedingungen, erforderliche_modellguete,
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
                'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_modelltyp',
                'foreign_table_where' => 'AND tx_wisedocasysdomaindesigner_domain_model_modelltyp.pid=###CURRENT_PID### AND tx_wisedocasysdomaindesigner_domain_model_modelltyp.sys_language_uid IN (-1,0)',
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
        'typbezeichnung' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modelltyp.typbezeichnung',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'zweck' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modelltyp.zweck',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim'
			]
	    ],
	    'anfangsbedingungen' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modelltyp.anfangsbedingungen',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim'
			]
	    ],
	    'randbedingungen' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modelltyp.randbedingungen',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim'
			]
	    ],
	    'erforderliche_modellguete' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modelltyp.erforderliche_modellguete',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'modellierungssoftware' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modelltyp.modellierungssoftware',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'modellklasse' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modelltyp.modellklasse',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:empty', 0],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellklasse.1', 1],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellklasse.2', 2],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellklasse.3', 3],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellklasse.4', 4],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellklasse.5', 5],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellklasse.6', 6],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellklasse.7', 7],
			    ],
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
	    'abbildungsbereich' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modelltyp.abbildungsbereich',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:empty', 0],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:abbildungsbereich.1', 1],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:abbildungsbereich.2', 2],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:abbildungsbereich.3', 3],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:abbildungsbereich.4', 4],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:abbildungsbereich.5', 5],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:abbildungsbereich.6', 6],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:abbildungsbereich.7', 7],
			    ],
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
	    'modellumfang' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modelltyp.modellumfang',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:empty', 0],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellumfang.1', 1],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellumfang.2', 2],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellumfang.3', 3],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellumfang.4', 4],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellumfang.5', 5],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellumfang.6', 6],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellumfang.7', 7],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellumfang.8', 8],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellumfang.9', 9],
			    ],
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
	    'modellstruktur' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modelltyp.modellstruktur',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:empty', 0],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellstruktur.1', 1],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellstruktur.2', 2],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:modellstruktur.3', 3],
			    ],
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
	    'parametrisierungsart' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_modelltyp.parametrisierungsart',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:empty', 0],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:parametrierungsart.1', 1],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:parametrierungsart.2', 2],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:parametrierungsart.3', 3],
                    ['LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db_selectfields.xlf:parametrierungsart.4', 4],
			    ],
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
    ],
];
