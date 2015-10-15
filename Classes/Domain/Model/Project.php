<?php
namespace Subugoe\Nkwsubfeprojects\Domain\Model;

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
 * Project model
 */
class Project extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $acronym;

    /**
     * @var string
     */
    protected $descr;

    /**
     * @var int
     */
    protected $fundingsum;

    /**
     * @var string
     */
    protected $runningtimestart;

    /**
     * @var string
     */
    protected $runningtimeend;

    /**
     * @var string
     */
    protected $fundingtimestart;

    /**
     * @var string
     */
    protected $fundingtimeend;

    /**
     * @var string
     */
    protected $url1;

    /**
     * @var string
     */
    protected $url2;

    /**
     * @var string
     */
    protected $url3;

    /**
     * @var string
     */
    protected $url4;

    /**
     * @var string
     */
    protected $url5;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $images;

    /**
     * @var string
     */
    protected $notes;

    /**
     * @var string
     */
    protected $internalnotes;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Institution> $funding
     */
    protected $funding;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Institution> $leadinstitution
     */
    protected $leadinstitution;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Institution> $institutions
     */
    protected $institutions;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Keywords> $keywords
     */
    protected $keywords;

    /**
     * @var string
     */
    protected $freekeywords;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Person> $leadperson
     */
    protected $leadperson;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Person> $person
     */
    protected $person;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Group> $department
     */
    protected $department;

    /**
     * @var string
     */
    protected $blacklisted;

    /**
     * @var string
     */
    protected $ehemalige;

    /**
     * @var string
     */
    protected $subtitle;

    /**
     * The constructor of this Project
     *
     * @return void
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
     *
     * @return void
     */
    protected function initStorageObjects()
    {

        $this->schulungTermine = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * @param string $acronym
     */
    public function setAcronym($acronym)
    {
        $this->acronym = $acronym;
    }

    /**
     * @return string
     */
    public function getAcronym()
    {
        return $this->acronym;
    }

    /**
     * @param string $blacklisted
     */
    public function setBlacklisted($blacklisted)
    {
        $this->blacklisted = $blacklisted;
    }

    /**
     * @return string
     */
    public function getBlacklisted()
    {
        return $this->blacklisted;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Group> $department
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Group>
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param string $descr
     */
    public function setDescr($descr)
    {
        $this->descr = $descr;
    }

    /**
     * @return string
     */
    public function getDescr()
    {
        return $this->descr;
    }

    /**
     * @param string $ehemalige
     */
    public function setEhemalige($ehemalige)
    {
        $this->ehemalige = $ehemalige;
    }

    /**
     * @return string
     */
    public function getEhemalige()
    {
        return $this->ehemalige;
    }

    /**
     * @param string $freekeywords
     */
    public function setFreekeywords($freekeywords)
    {
        $this->freekeywords = $freekeywords;
    }

    /**
     * @return string
     */
    public function getFreekeywords()
    {
        return $this->freekeywords;
    }

    /**
     * @param string \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Institution> $funding
     */
    public function setFunding($funding)
    {
        $this->funding = $funding;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Institution>
     */
    public function getFunding()
    {
        return $this->funding;
    }

    /**
     * @param string $fundingtimeend
     */
    public function setFundingtimeend($fundingtimeend)
    {
        $this->fundingtimeend = $fundingtimeend;
    }

    /**
     * @return string
     */
    public function getFundingtimeend()
    {
        return $this->fundingtimeend + 3600;
    }

    /**
     * @param string $fundingtimestart
     */
    public function setFundingtimestart($fundingtimestart)
    {
        $this->fundingtimestart = $fundingtimestart;
    }

    /**
     * @return string
     */
    public function getFundingtimestart()
    {
        return $this->fundingtimestart + 3600;
    }

    /**
     * @param string $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }

    /**
     * @return string
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Institution> $institutions
     */
    public function setInstitutions($institutions)
    {
        $this->institutions = $institutions;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Institution>
     */
    public function getInstitutions()
    {
        return $this->institutions;
    }

    /**
     * @param string $internalnotes
     */
    public function setInternalnotes($internalnotes)
    {
        $this->internalnotes = $internalnotes;
    }

    /**
     * @return string
     */
    public function getInternalnotes()
    {
        return $this->internalnotes;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Keywords> $keywords
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Keywords>
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Institution> $leadinstitution
     */
    public function setLeadinstitution($leadinstitution)
    {
        $this->leadinstitution = $leadinstitution;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Institution>
     */
    public function getLeadinstitution()
    {
        return $this->leadinstitution;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Person> $leadperson
     */
    public function setLeadperson($leadperson)
    {
        $this->leadperson = $leadperson;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Person>
     */
    public function getLeadperson()
    {
        return $this->leadperson;
    }

    /**
     * @param string $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Person> $person
     */
    public function setPerson($person)
    {
        $this->person = $person;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Nkwsubfeprojects\Domain\Model\Person>
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param string $runningtimeend
     */
    public function setRunningtimeend($runningtimeend)
    {
        $this->runningtimeend = $runningtimeend;
    }

    /**
     * @return string
     */
    public function getRunningtimeend()
    {
        return $this->runningtimeend + 3600;
    }

    /**
     * @param string $runningtimestart
     */
    public function setRunningtimestart($runningtimestart)
    {
        $this->runningtimestart = $runningtimestart;
    }

    /**
     * @return string
     */
    public function getRunningtimestart()
    {
        return $this->runningtimestart + 3600;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $url1
     */
    public function setUrl1($url1)
    {
        $this->url1 = $url1;
    }

    /**
     * @return string
     */
    public function getUrl1()
    {
        return $this->url1;
    }

    /**
     * @param string $url2
     */
    public function setUrl2($url2)
    {
        $this->url2 = $url2;
    }

    /**
     * @return string
     */
    public function getUrl2()
    {
        return $this->url2;
    }

    /**
     * @param string $url3
     */
    public function setUrl3($url3)
    {
        $this->url3 = $url3;
    }

    /**
     * @return string
     */
    public function getUrl3()
    {
        return $this->url3;
    }

    /**
     * @param string $url4
     */
    public function setUrl4($url4)
    {
        $this->url4 = $url4;
    }

    /**
     * @return string
     */
    public function getUrl4()
    {
        return $this->url4;
    }

    /**
     * @param string $url5
     */
    public function setUrl5($url5)
    {
        $this->url5 = $url5;
    }

    /**
     * @return string
     */
    public function getUrl5()
    {
        return $this->url5;
    }

    /**
     * @param string $subtitle
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * @return int
     */
    public function getFundingsum()
    {
        return $this->fundingsum;
    }

    /**
     * @param int $fundingsum
     */
    public function setFundingsum($fundingsum)
    {
        $this->fundingsum = $fundingsum;
    }

}
