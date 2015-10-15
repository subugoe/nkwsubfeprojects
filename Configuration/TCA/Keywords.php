<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
$TCA['tx_nkwsubfeprojects_domain_model_keywords'] = array(
    'ctrl' => $TCA['tx_nkwsubfeprojects_domain_model_keywords']['ctrl'],
    'interface' => array('showRecordFieldList' => 'hidden,title'),
    'feInterface' => $TCA['tx_nkwsubfeprojects_domain_model_keywords']['feInterface'],
    'columns' => array(
        'sys_language_uid' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => array(
                    array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages', -1),
                    array('LLL:EXT:lang/locallang_general.php:LGL.default_value', 0)
                ),
            ),
        ),
        'l18n_parent' => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_nkwsubfeprojects_keywords',
                'foreign_table_where' => 'AND tx_nkwsubfeprojects_domain_model_keywords.pid=###CURRENT_PID### AND tx_nkwsubfeprojects_domain_model_keywords.sys_language_uid IN (-1,0)',
            ),
        ),
        'l18n_diffsource' => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
        't3ver_label' => array(
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'max' => '255',
            )
        ),
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config' => array('type' => 'check', 'default' => '0')
        ),
        'title' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_keywords.title_de',
            'config' => array('type' => 'input', 'size' => '30', 'eval' => 'required,trim')
        ),
    ),
    'types' => array('0' => array('showitem' => 'hidden;;1;;1-1-1, title;;;;2-2-2')),
    'palettes' => array('1' => array('showitem' => ''))
);
