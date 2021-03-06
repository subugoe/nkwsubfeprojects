<?php
namespace Subugoe\Nkwsubfeprojects\Domain\Repository;

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
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Repository Class for Projects
 */
class ProjectRepository extends Repository
{

    protected $defaultOrderings = [
        'title' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
    ];

    /**
     * Find all Institutions that are related to a project
     *
     * @param $institution
     * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    public function findAllInstitutions($institution)
    {
        $query = $this->createQuery();

        $result = $query->matching(
            $query->logicalOr(
                $query->contains('funding', $institution),
                $query->contains('leadinstitution', $institution),
                $query->contains('institutions', $institution)
            )
        )->execute();

        return $result;
    }

    /**
     * Find all Projects by a specified Keyword
     *
     * @param $keyword
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    public function findProjectByKeywords($keyword)
    {
        $query = $this->createQuery();

        $result = $query->matching(
            $query->logicalOr(
                $query->contains('keywords', $keyword)
            )
        )->execute();

        return $result;
    }
}
