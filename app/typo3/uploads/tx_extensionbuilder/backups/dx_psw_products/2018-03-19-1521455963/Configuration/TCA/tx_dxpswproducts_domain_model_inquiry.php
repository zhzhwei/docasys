<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dxpswproducts_domain_model_inquiry',
        'label' => 'name',
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
		'searchFields' => 'name,prename,postalcontact,street,zip,city,callback,telephone,message,email,product,user',
        'iconfile' => 'EXT:dx_psw_products/Resources/Public/Icons/tx_dxpswproducts_domain_model_inquiry.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, prename, postalcontact, street, zip, city, callback, telephone, message, email, product, user',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, prename, postalcontact, street, zip, city, callback, telephone, message, email, product, user, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_dxpswproducts_domain_model_inquiry',
                'foreign_table_where' => 'AND tx_dxpswproducts_domain_model_inquiry.pid=###CURRENT_PID### AND tx_dxpswproducts_domain_model_inquiry.sys_language_uid IN (-1,0)',
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
        'name' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dxpswproducts_domain_model_inquiry.name',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'prename' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dxpswproducts_domain_model_inquiry.prename',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'postalcontact' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dxpswproducts_domain_model_inquiry.postalcontact',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'street' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dxpswproducts_domain_model_inquiry.street',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'zip' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dxpswproducts_domain_model_inquiry.zip',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'city' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dxpswproducts_domain_model_inquiry.city',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'callback' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dxpswproducts_domain_model_inquiry.callback',
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
	    'telephone' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dxpswproducts_domain_model_inquiry.telephone',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'message' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dxpswproducts_domain_model_inquiry.message',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'email' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dxpswproducts_domain_model_inquiry.email',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'product' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dxpswproducts_domain_model_inquiry.product',
	        'config' => [
			    'type' => 'inline',
			    'foreign_table' => 'tx_dxpswproducts_domain_model_product',
			    'minitems' => 0,
			    'maxitems' => 1,
			    'appearance' => [
			        'collapseAll' => 0,
			        'levelLinksPosition' => 'top',
			        'showSynchronizationLink' => 1,
			        'showPossibleLocalizationRecords' => 1,
			        'showAllLocalizationLink' => 1
			    ],
			],
	    ],
	    'user' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:dx_psw_products/Resources/Private/Language/locallang_db.xlf:tx_dxpswproducts_domain_model_inquiry.user',
	        'config' => [
			    'type' => 'inline',
			    'foreign_table' => '',
			    'minitems' => 0,
			    'maxitems' => 1,
			    'appearance' => [
			        'collapseAll' => 0,
			        'levelLinksPosition' => 'top',
			        'showSynchronizationLink' => 1,
			        'showPossibleLocalizationRecords' => 1,
			        'showAllLocalizationLink' => 1
			    ],
			],
	    ],
    ],
];
