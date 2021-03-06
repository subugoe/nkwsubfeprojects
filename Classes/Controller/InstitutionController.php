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

use Subugoe\Nkwsubfeprojects\Domain\Repository\ProjectRepository;
use Subugoe\Nkwsubfeprojects\Service\AssetService;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Controller for Institution Data
 */
class InstitutionController extends ActionController
{

    /**
     * @var \Subugoe\Nkwsubfeprojects\Domain\Repository\InstitutionRepository
     */
    protected $institutionRepostitory;

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
     * @param \Subugoe\Nkwsubfeprojects\Domain\Repository\ProjectRepository $projectRepository
     */
    public function injectProjectRepository(\Subugoe\Nkwsubfeprojects\Domain\Repository\ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * @param \Subugoe\Nkwsubfeprojects\Domain\Repository\InstitutionRepository $institutionRepository
     */
    public function injectInstitutionRepository(\Subugoe\Nkwsubfeprojects\Domain\Repository\InstitutionRepository $institutionRepository)
    {
        $this->institutionRepostitory = $institutionRepository;
    }

    /**
     * List all Institutions
     */
    public function listAction()
    {
        $institutions = $this->institutionRepostitory->findAll();
        $this->view->assign('institutions', $institutions);
    }

    /**
     * @param \Subugoe\Nkwsubfeprojects\Domain\Model\Institution $institution
     */
    public function detailAction(\Subugoe\Nkwsubfeprojects\Domain\Model\Institution $institution)
    {
        $projects = $this->projectRepository->findAllInstitutions($institution);

        $this->view->assign('institution', $institution);
        $this->view->assign('projects', $projects);
    }
}
