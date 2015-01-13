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
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'nkwsubfeprojects');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
		'Subugoe.' . $_EXTKEY, 'pi1', 'Project List'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
		'Subugoe.' . $_EXTKEY, 'pi2', 'Project Detail'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
		'Subugoe.' . $_EXTKEY, 'pi3', 'Keyword List'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
		'Subugoe.' . $_EXTKEY, 'pi4', 'Keyword Details and Projects'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
		'Subugoe.' . $_EXTKEY, 'pi5', 'Institution List'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
		'Subugoe.' . $_EXTKEY, 'pi6', 'Institution Detail'
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
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Project.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Img/icon_tx_nkwsubfeprojects_domain_model_project.gif',
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
		'versioningWS' => TRUE,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array('disabled' => 'hidden'),
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Institution.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Img/icon_tx_nkwsubfeprojects_domain_model_institution.gif',
		'searchFields' => 'title_de, acronym, title'
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
		'versioningWS' => TRUE,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array('disabled' => 'hidden'),
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Keywords.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Img/icon_tx_nkwsubfeprojects_domain_model_keywords.gif',
		'searchFields' => 'title'
	)
);

$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_pi1'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($_EXTKEY . '_pi1', 'FILE:EXT:nkwsubfeprojects/Configuration/FlexForms/ProjectList.xml');
