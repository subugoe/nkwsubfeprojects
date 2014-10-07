<?php
/***************************************************************
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
 ***************************************************************/
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// pi1 Project list vieww
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Subugoe.' . $_EXTKEY,
		'pi1',
		array(
				'Project' => 'list',
		)
);

// pi2 Project details - single view
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Subugoe.' . $_EXTKEY,
		'pi2',
		array(
				'Project' => 'detail',
		)
);

// pi3 Keywords - list view
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Subugoe.' . $_EXTKEY,
		'pi3',
		array(
				'Keywords' => 'list',
		)
);

// pi4 Keyword and Institutions details
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Subugoe.' . $_EXTKEY,
		'pi4',
		array(
				'Keywords' => 'detail',
		)
);

// pi5 institution list vieww
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Subugoe.' . $_EXTKEY,
		'pi5',
		array(
				'Institution' => 'list',
		)
);

// pi6 institution detail vieww
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Subugoe.' . $_EXTKEY,
		'pi6',
		array(
				'Institution' => 'detail',
		)
);
