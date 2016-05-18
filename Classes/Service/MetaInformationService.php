<?php
namespace Subugoe\Nkwsubfeprojects\Service;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Ingo Pfennigstorf <pfennigstorf@sub-goettingen.de>
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
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Fluid\View\StandaloneView;

/**
 * Get metainformation for e.g. a sidebar
 */
class MetaInformationService
{
    /**
     * @var \TYPO3\CMS\Extbase\Object\ObjectManager
     */
    protected $objectManager;

    /**
     * @param string $content
     * @param \tx_nkwsubmenu_pi2 $submenu
     */
    public function getMetaInformation(&$content, &$submenu)
    {
        $this->objectManager = GeneralUtility::makeInstance(ObjectManager::class);

        if (GeneralUtility::_GP('tx_nkwsubfeprojects_pi2')) {
            $content = $this->getProjectDetails();
        }

        if (GeneralUtility::_GP('tx_nkwsubfeprojects_pi6')) {
            $content = $this->getInstitutionDetails();
        }

        if (GeneralUtility::_GP('tx_nkwsubfeprojects_pi4')) {
            $content = $this->getKeywordDetails();
        }
    }

    /**
     * @return string
     */
    protected function getProjectDetails()
    {
        /** @var ProjectRepository $projectRepository */
        $projectRepository = $this->objectManager->get(ProjectRepository::class);
        $projectParameter = GeneralUtility::_GP('tx_nkwsubfeprojects_pi2');
        $projectId = intval($projectParameter['project']);

        $project = $projectRepository->findByUid($projectId);

        /** @var StandaloneView $template */
        $template = GeneralUtility::makeInstance(StandaloneView::class);
        $template->setTemplatePathAndFilename(ExtensionManagementUtility::extPath('nkwsubfeprojects') . 'Resources/Private/Partials/ProjectSidebar.html');
        $template->assign('project', $project);

        $content = $template->render();
        return $content;
    }

    /**
     * @return string
     */
    protected function getInstitutionDetails()
    {
        /** @var ProjectRepository $projectRepository */
        $projectRepository = $this->objectManager->get(ProjectRepository::class);
        $keywordParameter = GeneralUtility::_GP('tx_nkwsubfeprojects_pi6');
        $institutionId = intval($keywordParameter['institution']);

        $projects = $projectRepository->findAllInstitutions($institutionId);

        /** @var StandaloneView $template */
        $template = GeneralUtility::makeInstance(StandaloneView::class);
        $template->setTemplatePathAndFilename(ExtensionManagementUtility::extPath('nkwsubfeprojects') . 'Resources/Private/Partials/KeywordSidebar.html');
        $template->assign('projects', $projects);

        $content = $template->render();
        return $content;
    }

    /**
     * @return string
     */
    protected function getKeywordDetails()
    {
        /** @var ProjectRepository $projectRepository */
        $projectRepository = $this->objectManager->get(ProjectRepository::class);
        $keywordParameter = GeneralUtility::_GP('tx_nkwsubfeprojects_pi4');
        $keywordId = intval($keywordParameter['keyword']);

        $projects = $projectRepository->findProjectByKeywords($keywordId);

        /** @var StandaloneView $template */
        $template = GeneralUtility::makeInstance(StandaloneView::class);
        $template->setTemplatePathAndFilename(ExtensionManagementUtility::extPath('nkwsubfeprojects') . 'Resources/Private/Partials/KeywordSidebar.html');
        $template->assign('projects', $projects);

        $content = $template->render();
        return $content;
    }
}
