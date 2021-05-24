<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_domain_model_main',
        'label' => 'description',
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
        'searchFields' => 'description,my_rte,title,my_percent,my_money,my_boolean',
        'iconfile' => 'EXT:simpledataedittest/Resources/Public/Icons/tx_simpledataedittest_domain_model_main.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, description, my_rte, title, my_percent, my_money, my_float, my_integer, my_boolean, my_time, my_timesstamp, my_datetime, my_images, my_files, my_list, my_children, my_parent, my_peergroup',
    ],
    'types' => [
        '1' => ['showitem' => 'title, description, my_rte,  my_percent, my_money, my_float, my_integer, my_boolean, my_time, my_timesstamp, my_datetime, my_images, my_files, my_list, my_children, my_parent, my_peergroup, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime, sys_language_uid, l10n_parent, l10n_diffsource, hidden,'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_simpledataedittest_domain_model_main',
                'foreign_table_where' => 'AND {#tx_simpledataedittest_domain_model_main}.{#pid}=###CURRENT_PID### AND {#tx_simpledataedittest_domain_model_main}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_domain_model_main.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'my_rte' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_domain_model_main.my_rte',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],

        ],
        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_domain_model_main.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'my_percent' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_domain_model_main.my_percent',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'my_money' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_domain_model_main.my_money',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'my_float' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_domain_model_main.my_float',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'is_in',
                'is_in' => '0123456789,.+-',
            ]
        ],
        'my_integer' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_domain_model_main.my_integer',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,int'
            ]
        ],
        'my_boolean' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_domain_model_main.my_boolean',
            'config' => [
                'type' => 'check',
            ],
        ],
        'my_time' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_domain_model_main.my_time',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 4,
                'eval' => 'time',
                'default' => time()
            ]
        ],
        'my_timesstamp' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_domain_model_main.my_timesstamp',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 10,
                'eval' => 'datetime',
                'default' => time()
            ],
        ],
        'my_datetime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_domain_model_main.my_datetime',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 12,
                'eval' => 'datetime',
                'default' => 'null',
            ],
        ],
        'my_images' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_domain_model_main.my_images',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'my_images',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ]
                    ],
                    'foreign_match_fields' => [
                        'fieldname' => 'my_images',
                        'tablenames' => 'tx_simpledataedittest_domain_model_main',
                        'table_local' => 'sys_file',
                    ],
                    'maxitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),

        ],
        'my_files' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_domain_model_main.my_files',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'my_files',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ]
                    ],
                    'foreign_match_fields' => [
                        'fieldname' => 'my_files',
                        'tablenames' => 'tx_simpledataedittest_domain_model_main',
                        'table_local' => 'sys_file',
                    ],
                    'maxitems' => 1
                ]
            ),

        ],
        'my_list' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_domain_model_main.my_list',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingleBox',
                'allowNonIdValues' => 1,
                'items' => [
                    ['--', ''],
                    ['List Hallo', 'hallo'],
                    ['List Toll', 'toll'],
                    ['List Super', 'super'],
                    ['List Egal', 'noMatter'],
                    ['List Egal', 'noMatter'],
                ],
                'size' => 1,
                'maxitems' => 3,
                'eval' => 'trim'
            ],
        ],
        'my_children' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_domain_model_main.my_children',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_simpledataedittest_domain_model_child',
                'foreign_field' => 'main',
                'maxitems' => 99,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'my_parent' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_domain_model_main.my_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_simpledataedittest_domain_model_progenitor',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
        'my_peergroup' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_domain_model_main.my_peergroup',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_simpledataedittest_domain_model_peer',
                'MM' => 'tx_simpledataedittest_main_peer_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],

    ],
];
