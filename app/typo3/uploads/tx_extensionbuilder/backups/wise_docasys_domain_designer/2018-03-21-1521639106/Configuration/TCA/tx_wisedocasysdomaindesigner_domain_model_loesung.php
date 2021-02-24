<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesung',
        'label' => 'loesungsbezeichnung',
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
		'searchFields' => 'loesungsbezeichnung,teilprojektnummer,gestaltungsweise,betrifft_hersteller,betrifft_betreiber,bemerkung,risiko,blocker,loesungsklasse,phase_der_thermischen_wirkkette,gestaltungsart,wirkungsziel,erforderliche_maschinenkonfiguration,ressourcentyp,repraesentativer_lastfall, erforderliches_modell',
        'iconfile' => 'EXT:wise_docasys_domain_designer/Resources/Public/Icons/tx_wisedocasysdomaindesigner_domain_model_loesung.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, loesungsbezeichnung, teilprojektnummer, gestaltungsweise, betrifft_hersteller, betrifft_betreiber, bemerkung, risiko, blocker, loesungsklasse, phase_der_thermischen_wirkkette, gestaltungsart, wirkungsziel, erforderliche_maschinenkonfiguration, ressourcentyp, repraesentativer_lastfall, erforderliches_modell',
    ],
    'types' => [
        // '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, loesungsbezeichnung, teilprojektnummer, gestaltungsweise, betrifft_hersteller, betrifft_betreiber, bemerkung, risiko, blocker, loesungsklasse, phase_der_thermischen_wirkkette, gestaltungsart, wirkungsziel, erforderliche_maschinenkonfiguration, ressourcentyp, repraesentativer_lastfall, erforderliches_modell, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
		'1' => ['showitem' => 'l10n_parent, l10n_diffsource, hidden, loesungsbezeichnung, teilprojektnummer, gestaltungsweise, betrifft_hersteller, betrifft_betreiber, bemerkung, risiko, blocker, loesungsklasse, phase_der_thermischen_wirkkette, gestaltungsart, wirkungsziel, erforderliche_maschinenkonfiguration, ressourcentyp, repraesentativer_lastfall, erforderliches_modell'],
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
                'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_loesung',
                'foreign_table_where' => 'AND tx_wisedocasysdomaindesigner_domain_model_loesung.pid=###CURRENT_PID### AND tx_wisedocasysdomaindesigner_domain_model_loesung.sys_language_uid IN (-1,0)',
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
        'loesungsbezeichnung' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesung.loesungsbezeichnung',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required',
                'required' => 1
			],
	    ],
	    'teilprojektnummer' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesung.teilprojektnummer',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'gestaltungsweise' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesung.gestaltungsweise',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 5,
			    'eval' => 'trim'
			]
	    ],
	    'betrifft_hersteller' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesung.betrifft_hersteller',
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
	    'betrifft_betreiber' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesung.betrifft_betreiber',
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
	    'bemerkung' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesung.bemerkung',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 5,
			    'eval' => 'trim'
			]
	    ],
	    'risiko' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesung.risiko',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 5,
			    'eval' => 'trim'
			]
	    ],
	    'blocker' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesung.blocker',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 5,
			    'eval' => 'trim'
			]
	    ],
	    'loesungsklasse' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesung.loesungsklasse',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
                    ['Keine', 0],
                    ['Komponentenkühlkonzept', 1],
                    ['Systemkühlkonzept', 2],
                    ['Hauptmotor', 3],
                    ['Thermische Tilger', 4],
                    ['Strukturmodellbasierte Korrektur', 5],
                    ['Eigenschaftsmodellbasierte Korrektur', 6],
                    ['Kennfeldbasierte Korrektur', 7],
			        ['Messtechnisch basierte Korrektur', 8],
			    ],
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
	    'phase_der_thermischen_wirkkette' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesung.phase_der_thermischen_wirkkette',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
                    ['Keine', 0],
                    ['Thermische Last', 1],
                    ['Verlustleistung', 2],
                    ['Wärmestrom', 3],
                    ['Temperaturfeld', 4],
                    ['Verformungsfeld', 5],
                    ['Maschinenkinematik', 5],
			        ['Fehler am TCP', 7],
			    ],
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
	    'gestaltungsart' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesung.gestaltungsart',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
                    ['Keine', 0],
                    ['konstruktiv', 1],
                    ['messtechnisch', 2],
			        ['steuerungstechnisch', 3],
			    ],
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
	    'wirkungsziel' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesung.wirkungsziel',
	        'config' => [
			    'type' => 'select',
			    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_wirkungsziel',
			    'foreign_field' => 'loesung',
                'renderType' => 'selectMultipleSideBySide',
                'enableMultiSelectFilterTextfield' => true,
			    'maxitems' => 9999,
			],
	    ],
	    'erforderliche_maschinenkonfiguration' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesung.erforderliche_maschinenkonfiguration',
	        'config' => [
			    'type' => 'select',
			    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschinentyp',
			    'foreign_field' => 'loesung',
                'renderType' => 'selectMultipleSideBySide',
                'enableMultiSelectFilterTextfield' => true,
			    'maxitems' => 9999,
			],
	    ],
	    'ressourcentyp' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesung.ressourcentyp',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectMultipleSideBySide',
                'enableMultiSelectFilterTextfield' => true,
			    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_ressourcentyp',
			    'MM' => 'tx_wisedocasysdomaindesigner_loesung_ressourcentyp_mm',
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
			                'table' => 'tx_wisedocasysdomaindesigner_domain_model_ressourcentyp',
			                'pid' => '###CURRENT_PID###',
			                'setValue' => 'prepend'
			            ],
			        ],
			    ],
			],
	    ],
	    'repraesentativer_lastfall' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_db.xlf:tx_wisedocasysdomaindesigner_domain_model_loesung.repraesentativer_lastfall',
	        'config' => [
			    'type' => 'inline',
			    'foreign_table' => 'tx_wisedocasysdomaindesigner_domain_model_lastfall',
			    'foreign_field' => 'loesung',
			    'maxitems' => 9999,
			    'appearance' => [
			        'collapseAll' => 0,
			        'levelLinksPosition' => 'top',
			        'showSynchronizationLink' => 1,
			        'showPossibleLocalizationRecords' => 1,
			        'showAllLocalizationLink' => 1
			    ],
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
                'maxitems' => 9999,
            ],
        ],
    ],
];
