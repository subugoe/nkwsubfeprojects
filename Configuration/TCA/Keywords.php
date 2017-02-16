<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
$TCA['tx_nkwsubfeprojects_domain_model_keywords'] = [
    'ctrl' => $TCA['tx_nkwsubfeprojects_domain_model_keywords']['ctrl'],
    'interface' => ['showRecordFieldList' => 'hidden,title'],
    'feInterface' => $TCA['tx_nkwsubfeprojects_domain_model_keywords']['feInterface'],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
            'config' => [
                'type' => 'select',
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
                'foreign_table' => 'tx_nkwsubfeprojects_domain_model_keywords',
                'foreign_table_where' => 'AND tx_nkwsubfeprojects_domain_model_keywords.pid=###CURRENT_PID### AND tx_nkwsubfeprojects_domain_model_keywords.sys_language_uid IN (-1,0)',
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
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_keywords.title',
            'config' => ['type' => 'input', 'size' => '30', 'eval' => 'required,trim']
        ],
    ],
    'types' => ['0' => ['showitem' => 'hidden;;1;;1-1-1, title;;;;2-2-2']],
    'palettes' => ['1' => ['showitem' => '']]
];
