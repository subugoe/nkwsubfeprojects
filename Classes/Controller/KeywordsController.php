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

/**
 * Controller for Keywords
 *
 * @author Ingo Pfennigstorf <pfennigstorf@sub-goettingen.de>, Goettingen State Library
 * $Id: KeywordsController.php 1689 2012-02-23 13:56:57Z pfennigstorf $
 */
class Tx_Nkwsubfeprojects_Controller_KeywordsController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_Nkwsubfeprojects_Domain_Repository_KeywordsRepository
	 * @inject
	 */
	protected $keywordsRepository;

	/**
	 * @var Tx_Nkwsubfeprojects_Domain_Repository_ProjectRepository
	 * @inject
	 */
	protected $projectRepository;

	/**
	 * List all Keywords
	 */
	public function listAction() {
		$keywords = $this->keywordsRepostitory->findAll();
		$this->view->assign('keywords', $keywords);
	}

	/**
	 * Get details and projects for a specified Keyword
	 *
	 * @param Tx_Nkwsubfeprojects_Domain_Model_Keywords $keyword
	 */
	public function detailAction(Tx_Nkwsubfeprojects_Domain_Model_Keywords $keyword) {

		$newHeader = $this->configurationManager->getContentObject()->data['header'] . ' ' . $keyword->getTitle();

		$projects = $this->projectRepository->findProjectByKeywords($keyword);
		$this->view->assignMultiple(
			array(
				'projects' => $projects,
				'header' => $newHeader,
				'keyword' => $keyword
			)
		);

			// Change page title
		$GLOBALS['TSFE']->page['title'] = $newHeader;
	}
}