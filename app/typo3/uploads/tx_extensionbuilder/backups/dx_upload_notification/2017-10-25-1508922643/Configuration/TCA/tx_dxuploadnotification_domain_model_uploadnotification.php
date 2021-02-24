<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:dx_upload_notification/Resources/Private/Language/locallang_db.xlf:tx_dxuploadnotification_domain_model_uploadnotification',
        'label' => 'subject',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
		'versioningWS' => true,
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
		'searchFields' => 'subject,body,timestamp,fe_group_id,fe_group_name,sys_collection_id',
        'iconfile' => 'EXT:dx_upload_notification/Resources/Public/Icons/tx_dxuploadnotification_domain_model_uploadnotification.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'hidden, subject, body, timestamp, fe_group_id, fe_group_name, sys_collection_id',
    ],
    'types' => [
		'1' => ['showitem' => 'hidden, subject, body, timestamp, fe_group_id, fe_group_name, sys_collection_id, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
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
        'subject' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:dx_upload_notification/Resources/Private/Language/locallang_db.xlf:tx_dxuploadnotification_domain_model_uploadnotification.subject',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'body' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:dx_upload_notification/Resources/Private/Language/locallang_db.xlf:tx_dxuploadnotification_domain_model_uploadnotification.body',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim',
			],
	        'defaultExtras' => 'richtext:rte_transform[mode=ts_css]'
	    ],
	    'timestamp' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:dx_upload_notification/Resources/Private/Language/locallang_db.xlf:tx_dxuploadnotification_domain_model_uploadnotification.timestamp',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'datetime',
			    'default' => time()
			],
	    ],
	    'fe_group_id' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:dx_upload_notification/Resources/Private/Language/locallang_db.xlf:tx_dxuploadnotification_domain_model_uploadnotification.fe_group_id',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int'
			]
	    ],
	    'fe_group_name' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:dx_upload_notification/Resources/Private/Language/locallang_db.xlf:tx_dxuploadnotification_domain_model_uploadnotification.fe_group_name',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'sys_collection_id' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:dx_upload_notification/Resources/Private/Language/locallang_db.xlf:tx_dxuploadnotification_domain_model_uploadnotification.sys_collection_id',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int'
			]
	    ],
    ],
];
