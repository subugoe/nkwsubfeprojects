<?php
namespace Subugoe\Nkwsubfeprojects\Controller;

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

use Subugoe\Nkwsubfeprojects\Domain\Repository\KeywordsRepository;
use Subugoe\Nkwsubfeprojects\Domain\Repository\ProjectRepository;
use Subugoe\Nkwsubfeprojects\Service\AssetService;

/**
 * Controller for Keywords
 */
class KeywordsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * @var \Subugoe\Nkwsubfeprojects\Domain\Repository\KeywordsRepository
     */
    protected $keywordsRepository;

    /**
     * @var \Subugoe\Nkwsubfeprojects\Domain\Repository\ProjectRepository
     */
    protected $projectRepository;

    public function initializeAction()
    {
        $assetService = $this->objectManager->get(AssetService::class);
        $assetService->includeCss($this->settings);
    }

    /**
     * KeywordsController constructor.
     * @param KeywordsRepository $keywordsRepository
     * @param ProjectRepository $projectRepository
     */
    public function __construct(KeywordsRepository $keywordsRepository, ProjectRepository $projectRepository)
    {
        parent::__construct();

        $this->keywordsRepository = $keywordsRepository;
        $this->projectRepository = $projectRepository;
    }

    /**
     * List all Keywords
     */
    public function listAction()
    {
        $keywords = $this->keywordsRepository->findAll();
        $this->view->assign('keywords', $keywords);
    }

    /**
     * Get details and projects for a specified Keyword
     *
     * @param \Subugoe\Nkwsubfeprojects\Domain\Model\Keywords $keyword
     */
    public function detailAction(\Subugoe\Nkwsubfeprojects\Domain\Model\Keywords $keyword)
    {
        $newHeader = $this->configurationManager->getContentObject()->data['header'] . ' ' . $keyword->getTitle();

        $projects = $this->projectRepository->findProjectByKeywords($keyword);
        $this->view->assignMultiple(
            [
                'projects' => $projects,
                'header' => $newHeader,
                'keyword' => $keyword
            ]
        );

        // Change page title
        $GLOBALS['TSFE']->page['title'] = $newHeader;
    }
}
