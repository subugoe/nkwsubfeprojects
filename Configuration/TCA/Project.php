<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
$TCA['tx_nkwsubfeprojects_domain_model_project'] = [
    'ctrl' => $TCA['tx_nkwsubfeprojects_domain_model_project']['ctrl'],
    'interface' => [
        'showRecordFieldList' => 'hidden,title,subtitle,acronym,descr,runningtimestart,runningtimeend,fundingtimestart,fundingtimeend,url1,url2,url3,url4,url5,status,notes,images,internalnotes,funding,fundingsum,leadinstitution,institutions,keywords,freekeywords,leadperson,person,department,blacklisted,ehemalige'
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid;;;;1-1-1,hidden,title, subtitle, acronym, descr;;;richtext[]:rte_transform[mode=ts_css], runningtimestart, runningtimeend, fundingtimestart, fundingtimeend, url1, url2, url3, url4, url5, status, images, notes,  internalnotes, funding, fundingsum, leadinstitution, institutions, keywords, freekeywords, leadperson, person, department, blacklisted, ehemalige']
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
    'feInterface' => $TCA['tx_nkwsubfeprojects_domain_model_project']['feInterface'],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => [
                    ['LLL:EXT:lang/locallang_general.php:LGL.allLanguages', -1],
                    ['LLL:EXT:lang/locallang_general.php:LGL.default_value', 0]
                ],
            ],
        ],
        'l18n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_nkwsubfeprojects_domain_model_project',
                'foreign_table_where' => 'AND tx_nkwsubfeprojects_domain_model_project.pid=###CURRENT_PID### AND tx_nkwsubfeprojects_domain_model_project.sys_language_uid IN (-1,0)',
            ],
        ],
        'l18n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '255',
            ]
        ],
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config' => ['type' => 'check', 'default' => '0']
        ],
        'title' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.title',
            'config' => ['type' => 'input', 'size' => '30', 'eval' => 'required,trim']
        ],
        'subtitle' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.subtitle',
            'config' => ['type' => 'text', 'cols' => '30', 'rows' => '2']
        ],
        'acronym' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.acronym',
            'config' => ['type' => 'input', 'size' => '30', 'eval' => 'trim']
        ],
        'descr' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.descr',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
                'wizards' => [
                    '_PADDING' => 2,
                    'RTE' => [
                        'notNewRecords' => 1,
                        'RTEonly' => 1,
                        'type' => 'script',
                        'title' => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
                        'icon' => 'wizard_rte2.gif',
                        'module' => [
                            'name' => 'wizard_rte'
                        ],
                    ],
                ],
            ]
        ],
        'runningtimestart' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.runningtimestart',
            'config' => [
                'type' => 'input',
                'size' => '8',
                'max' => '20',
                'eval' => 'date',
                'checkbox' => '0',
                'default' => '0'
            ]
        ],
        'runningtimeend' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.runningtimeend',
            'config' => [
                'type' => 'input',
                'size' => '8',
                'max' => '20',
                'eval' => 'date',
                'checkbox' => '0',
                'default' => '0'
            ]
        ],
        'fundingtimestart' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.fundingtimestart',
            'config' => [
                'type' => 'input',
                'size' => '8',
                'max' => '20',
                'eval' => 'date',
                'checkbox' => '0',
                'default' => '0'
            ]
        ],
        'fundingtimeend' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.fundingtimeend',
            'config' => [
                'type' => 'input',
                'size' => '8',
                'max' => '20',
                'eval' => 'date',
                'checkbox' => '0',
                'default' => '0'
            ]
        ],
        'url1' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.url1',
            'config' => ['type' => 'input', 'size' => '30', 'eval' => 'trim']
        ],
        'url2' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.url2',
            'config' => ['type' => 'input', 'size' => '30', 'eval' => 'trim']
        ],
        'url3' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.url3',
            'config' => ['type' => 'input', 'size' => '30', 'eval' => 'trim']
        ],
        'url4' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.url4',
            'config' => ['type' => 'input', 'size' => '30', 'eval' => 'trim']
        ],
        'url5' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.url5',
            'config' => ['type' => 'input', 'size' => '30', 'eval' => 'trim']
        ],
        'status' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.status',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.status.I.0',
                        '0'
                    ],
                    [
                        'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.status.I.1',
                        '1'
                    ],
                    [
                        'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.status.I.2',
                        '2'
                    ],
                    [
                        'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.status.I.3',
                        '3'
                    ],
                    [
                        'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.status.I.4',
                        '4'
                    ]
                ],
                'size' => 1,
                'maxitems' => 1
            ]
        ],
        'images' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_images',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_nkwsubfeprojects_domain_model_images',
                'maxitems' => 9999,
                'appearance' => [
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 0,
                    'expandSingle' => 1,
                ],
            ],
        ],
        'notes' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.notes',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5'
            ]
        ],
        'internalnotes' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.internalnotes',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5'
            ]
        ],
        'funding' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.funding',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_nkwsubfeprojects_domain_model_institution',
                'size' => 5,
                'minitems' => 0,
                'maxitems' => 99,
                'foreign_sortby' => 'title'
            ]
        ],
        'fundingsum' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.fundingSum',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim,num'
            ]
        ],
        'leadinstitution' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.leadinstitution',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_nkwsubfeprojects_domain_model_institution',
                'size' => 5,
                'minitems' => 0,
                'maxitems' => 99,
                'foreign_sortby' => 'title'
            ]
        ],
        'institutions' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.institutions',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_nkwsubfeprojects_domain_model_institution',
                'size' => 10,
                'minitems' => 0,
                'maxitems' => 99,
                'foreign_sortby' => 'title'
            ]
        ],
        'keywords' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.keywords',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_nkwsubfeprojects_domain_model_keywords',
                'size' => 10,
                'minitems' => 0,
                'maxitems' => 99,
                'foreign_sortby' => 'title'
            ]
        ],
        'freekeywords' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.freekeywords',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5'
            ]
        ],
        'leadperson' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.leadperson',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tt_address',
                'foreign_table_where' => ' ORDER BY tt_address.last_name ASC',
                'size' => 5,
                'autoSizeMax' => 25,
                'multiple' => 0,
                'minitems' => 0,
                'maxitems' => 99,
                'MM' => 'tx_nkwsubfeprojects_leadperson_tt_address_mm',
                'wizards' => [
                    'suggest' => [
                        'type' => 'suggest',
                        'maxItemsInResultList' => 25,
                    ],
                ],
            ]
        ],
        'person' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.person',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tt_address',
                'foreign_table_where' => ' ORDER BY tt_address.last_name ASC',
                'size' => 5,
                'autoSizeMax' => 25,
                'multiple' => 0,
                'minitems' => 0,
                'maxitems' => 99,
                'MM' => 'tx_nkwsubfeprojects_person_tt_address_mm',
                'wizards' => [
                    'suggest' => [
                        'type' => 'suggest',
                        'maxItemsInResultList' => 25,
                    ],
                ],
            ]
        ],
        'department' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.department',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tt_address_group',
                'foreign_table_where' => ' ORDER BY tt_address_group.title ASC',
                'size' => 5,
                'autoSizeMax' => 25,
                'multiple' => 0,
                'minitems' => 0,
                'maxitems' => 99,
                'MM' => 'tx_nkwsubfeprojects_group_tt_address_mm',
                'wizards' => [
                    'suggest' => [
                        'type' => 'suggest',
                        'maxItemsInResultList' => 25,
                    ],
                ],
            ]
        ],
        'blacklisted' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.blacklisted',
            'config' => ['type' => 'check', 'default' => '0']
        ],
        'ehemalige' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.ehemalige',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5'
            ]
        ]
    ],
];
