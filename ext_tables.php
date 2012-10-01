<?php

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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

	// TypoScript
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'nkwsubfeprojects');

Tx_Extbase_Utility_Extension::registerPlugin(
		$_EXTKEY, 'pi1', 'Project List'
);

Tx_Extbase_Utility_Extension::registerPlugin(
		$_EXTKEY, 'pi2', 'Project Detail'
);

Tx_Extbase_Utility_Extension::registerPlugin(
		$_EXTKEY, 'pi3', 'Keyword List'
);

Tx_Extbase_Utility_Extension::registerPlugin(
		$_EXTKEY, 'pi4', 'Keyword Details and Projects'
);

Tx_Extbase_Utility_Extension::registerPlugin(
		$_EXTKEY, 'pi5', 'Institution List'
);

Tx_Extbase_Utility_Extension::registerPlugin(
		$_EXTKEY, 'pi6', 'Institution Detail'
);

$TCA['tx_nkwsubfeprojects_domain_model_project'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_project',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY title',
		'delete' => 'deleted',
		'enablecolumns' => array('disabled' => 'hidden'),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Project.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Img/icon_tx_nkwsubfeprojects_domain_model_project.gif',
		'searchFields' => 'title',
		'versioningWS' => TRUE,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
	)
);
$TCA['tx_nkwsubfeprojects_domain_model_institution'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_institution',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY title',
		'searchFields' => 'title_de',
		'versioningWS' => TRUE,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array('disabled' => 'hidden'),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Institution.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Img/icon_tx_nkwsubfeprojects_domain_model_institution.gif',
		'searchFields' => 'acronym, title'
	)
);
$TCA['tx_nkwsubfeprojects_domain_model_keywords'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:nkwsubfeprojects/Resources/Private/Language/locallang_db.xml:tx_nkwsubfeprojects_domain_model_keywords',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY title',
		'searchFields' => 'title',
		'versioningWS' => TRUE,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array('disabled' => 'hidden'),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Keywords.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Img/icon_tx_nkwsubfeprojects_domain_model_keywords.gif',
		'searchFields' => 'title'
	)
);

$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_pi1'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_pi1', 'FILE:EXT:nkwsubfeprojects/Configuration/FlexForms/ProjectList.xml');

?>