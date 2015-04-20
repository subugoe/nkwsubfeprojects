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
$TCA['tx_nkwsubfeprojects_domain_model_project'] = array(
		'ctrl' => $TCA['tx_nkwsubfeprojects_domain_model_project']['ctrl'],
		'interface' => array(
				'showRecordFieldList' => 'hidden,title,subtitle,acronym,descr,runningtimestart,runningtimeend,fundingtimestart,fundingtimeend,url1,url2,url3,url4,url5,status,notes,images,internalnotes,funding,fundingsum,leadinstitution,institutions,keywords,freekeywords,leadperson,person,department,blacklisted,ehemalige'
		),
		'types' => array(
				'1' => array('showitem' => 'sys_language_uid;;;;1-1-1,hidden,title, subtitle, acronym, descr;;;richtext[]:rte_transform[mode=ts_css], runningtimestart, runningtimeend, fundingtimestart, fundingtimeend, url1, url2, url3, url4, url5, status, images, notes,  internalnotes, funding, fundingsum, leadinstitution, institutions, keywords, freekeywords, leadperson, person, department, blacklisted, ehemalige')
		),
		'palettes' => array(
				'1' => array('showitem' => '')
		),
		'feInterface' => $TCA['tx_nkwsubfeprojects_domain_model_project']['feInterface'],
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
								'foreign_table' => 'tx_nkwsubfeprojects_domain_model_project',
								'foreign_table_where' => 'AND tx_nkwsubfeprojects_domain_model_project.pid=###CURRENT_PID### AND tx_nkwsubfeprojects_domain_model_project.sys_language_uid IN (-1,0)',
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
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.title_de',
						'config' => array('type' => 'input', 'size' => '30', 'eval' => 'required,trim')
				),
				'subtitle' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.subtitle_de',
						'config' => array('type' => 'text', 'cols' => '30', 'rows' => '2')
				),
				'acronym' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.acronym',
						'config' => array('type' => 'input', 'size' => '30', 'eval' => 'trim')
				),
				'descr' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.descr_de',
						'config' => array(
								'type' => 'text',
								'cols' => '30',
								'rows' => '5',
								'wizards' => array(
										'_PADDING' => 2,
										'RTE' => array(
												'notNewRecords' => 1,
												'RTEonly' => 1,
												'type' => 'script',
												'title' => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
												'icon' => 'wizard_rte2.gif',
												'script' => 'wizard_rte.php',
										),
								),
						)
				),
				'runningtimestart' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.runningtimestart',
						'config' => array(
								'type' => 'input',
								'size' => '8',
								'max' => '20',
								'eval' => 'date',
								'checkbox' => '0',
								'default' => '0'
						)
				),
				'runningtimeend' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.runningtimeend',
						'config' => array(
								'type' => 'input',
								'size' => '8',
								'max' => '20',
								'eval' => 'date',
								'checkbox' => '0',
								'default' => '0'
						)
				),
				'fundingtimestart' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.fundingtimestart',
						'config' => array(
								'type' => 'input',
								'size' => '8',
								'max' => '20',
								'eval' => 'date',
								'checkbox' => '0',
								'default' => '0'
						)
				),
				'fundingtimeend' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.fundingtimeend',
						'config' => array(
								'type' => 'input',
								'size' => '8',
								'max' => '20',
								'eval' => 'date',
								'checkbox' => '0',
								'default' => '0'
						)
				),
				'url1' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.url1',
						'config' => array('type' => 'input', 'size' => '30', 'eval' => 'trim')
				),
				'url2' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.url2',
						'config' => array('type' => 'input', 'size' => '30', 'eval' => 'trim')
				),
				'url3' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.url3',
						'config' => array('type' => 'input', 'size' => '30', 'eval' => 'trim')
				),
				'url4' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.url4',
						'config' => array('type' => 'input', 'size' => '30', 'eval' => 'trim')
				),
				'url5' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.url5',
						'config' => array('type' => 'input', 'size' => '30', 'eval' => 'trim')
				),
				'status' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.status',
						'config' => array(
								'type' => 'select',
								'items' => array(
										array('LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.status.I.0', '0'),
										array('LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.status.I.1', '1'),
										array('LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.status.I.2', '2'),
										array('LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.status.I.3', '3'),
										array('LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.status.I.4', '4')
								),
								'size' => 1,
								'maxitems' => 1
						)
				),
				'images' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_images',
						'config' => array(
								'type' => 'inline',
								'foreign_table' => 'tx_nkwsubfeprojects_domain_model_images',
								'maxitems' => 9999,
								'appearance' => array(
										'newRecordLinkPosition' => 'bottom',
										'collapseAll' => 0,
										'expandSingle' => 1,
								),
						),
				),
				'notes' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.notes_de',
						'config' => array('type' => 'text', 'cols' => '30', 'rows' => '5')
				),
				'internalnotes' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.internalnotes_de',
						'config' => array('type' => 'text', 'cols' => '30', 'rows' => '5')
				),
				'funding' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.funding',
						'config' => array(
								'type' => 'group',
								'internal_type' => 'db',
								'allowed' => 'tx_nkwsubfeprojects_domain_model_institution',
								'size' => 5,
								'minitems' => 0,
								'maxitems' => 99,
								'foreign_sortby' => 'title'
						)
				),
				'fundingsum' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.fundingSum',
						'config' => array(
								'type' => 'input',
								'size' => '30',
								'eval' => 'trim,num'
						)
				),
				'leadinstitution' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.leadinstitution',
						'config' => array(
								'type' => 'group',
								'internal_type' => 'db',
								'allowed' => 'tx_nkwsubfeprojects_domain_model_institution',
								'size' => 5,
								'minitems' => 0,
								'maxitems' => 99,
								'foreign_sortby' => 'title'
						)
				),
				'institutions' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.institutions',
						'config' => array(
								'type' => 'group',
								'internal_type' => 'db',
								'allowed' => 'tx_nkwsubfeprojects_domain_model_institution',
								'size' => 10,
								'minitems' => 0,
								'maxitems' => 99,
								'foreign_sortby' => 'title'
						)
				),
				'keywords' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.keywords',
						'config' => array(
								'type' => 'group',
								'internal_type' => 'db',
								'allowed' => 'tx_nkwsubfeprojects_domain_model_keywords',
								'size' => 10,
								'minitems' => 0,
								'maxitems' => 99,
								'foreign_sortby' => 'title'
						)
				),
				'freekeywords' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.freekeywords_de',
						'config' => array('type' => 'text', 'cols' => '30', 'rows' => '5')
				),
				'leadperson' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.leadperson',
						'config' => array(
								'type' => 'select',
								'foreign_table' => 'tt_address',
								'foreign_table_where' => ' ORDER BY tt_address.last_name ASC',
								'size' => 5,
								'autoSizeMax' => 25,
								'multiple' => 0,
								'minitems' => 0,
								'maxitems' => 99,
								'MM' => 'tx_nkwsubfeprojects_leadperson_tt_address_mm',
								'wizards' => array(
										'suggest' => array(
												'type' => 'suggest',
												'maxItemsInResultList' => 25,
										),
								),
						)
				),
				'person' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.person',
						'config' => array(
								'type' => 'select',
								'foreign_table' => 'tt_address',
								'foreign_table_where' => ' ORDER BY tt_address.last_name ASC',
								'size' => 5,
								'autoSizeMax' => 25,
								'multiple' => 0,
								'minitems' => 0,
								'maxitems' => 99,
								'MM' => 'tx_nkwsubfeprojects_person_tt_address_mm',
								'wizards' => array(
										'suggest' => array(
												'type' => 'suggest',
												'maxItemsInResultList' => 25,
										),
								),
						)
				),
				'department' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.department',
						'config' => array(
								'type' => 'select',
								'foreign_table' => 'tt_address_group',
								'foreign_table_where' => ' ORDER BY tt_address_group.title ASC',
								'size' => 5,
								'autoSizeMax' => 25,
								'multiple' => 0,
								'minitems' => 0,
								'maxitems' => 99,
								'MM' => 'tx_nkwsubfeprojects_group_tt_address_mm',
								'wizards' => array(
										'suggest' => array(
												'type' => 'suggest',
												'maxItemsInResultList' => 25,
										),
								),
						)
				),
				'blacklisted' => array(
						'exclude' => 1,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.blacklisted',
						'config' => array('type' => 'check', 'default' => '0')
				),
				'ehemalige' => array(
						'exclude' => 0,
						'label' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project.ehemalige',
						'config' => array('type' => 'text', 'cols' => '30', 'rows' => '5')
				)
		),
);
