<?php

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Ingo Pfennigstorf <pfennigstorf@sub-goettingen.de>
 *      Goettingen State Library
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
$TCA['tx_nkwsubfeprojects_domain_model_institution'] = [
    'ctrl' => $TCA['tx_nkwsubfeprojects_domain_model_institution']['ctrl'],
    'interface' => ['showRecordFieldList' => 'hidden,title,acronym,descr,address,url,logo'],
    'feInterface' => $TCA['tx_nkwsubfeprojects_domain_model_institution']['feInterface'],
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
                'foreign_table' => 'tx_nkwsubfeprojects_domain_model_institution',
                'foreign_table_where' => 'AND tx_nkwsubfeprojects_domain_model_institution.pid=###CURRENT_PID### AND tx_nkwsubfeprojects_domain_model_institution.sys_language_uid IN (-1,0)',
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
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_institution.title_de',
            'config' => ['type' => 'input', 'size' => '30', 'eval' => 'required,trim']
        ],
        'acronym' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_institution.acronym',
            'config' => ['type' => 'input', 'size' => '30', 'eval' => 'trim']
        ],
        'descr' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_institution.descr_de',
            'config' => ['type' => 'text', 'cols' => '30', 'rows' => '5']
        ],
        'address' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_institution.address',
            'config' => ['type' => 'input', 'cols' => '30', 'rows' => '3']
        ],
        'url' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_institution.url',
            'config' => ['type' => 'input', 'size' => '30', 'eval' => 'trim']
        ],
        'logo' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_institution.logo',
            'config' => [
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'uploadfolder' => 'uploads/tx_nkwsubfeprojects',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ]
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'hidden;;1;;1-1-1, title;;;;2-2-2, acronym;;;;3-3-3, descr, address, url, logo']
    ],
    'palettes' => ['1' => ['showitem' => '']]
];
