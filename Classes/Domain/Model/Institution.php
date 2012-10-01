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
 * Description
 *
 * @author Ingo Pfennigstorf <pfennigstorf@sub-goettingen.de>, Goettingen State Library
 * $Id: Institution.php 1684 2012-02-21 15:50:49Z pfennigstorf $
 */
class Tx_Nkwsubfeprojects_Domain_Model_Institution extends Tx_Extbase_DomainObject_AbstractEntity {

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
	 * @var string
	 */
	protected $address;

	/**
	 * @var string
	 */
	protected $url;

	/**
	 * @var string
	 */
	protected $logo;

	/**
	 * @param string $acronym
	 */
	public function setAcronym($acronym) {
		$this->acronym = $acronym;
	}

	/**
	 * @return string
	 */
	public function getAcronym() {
		return $this->acronym;
	}

	/**
	 * @param string $address
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * @return string
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * @param string $descr
	 */
	public function setDescr($descr) {
		$this->descr = $descr;
	}

	/**
	 * @return string
	 */
	public function getDescr() {
		return $this->descr;
	}

	/**
	 * @param string $logo
	 */
	public function setLogo($logo) {
		$this->logo = $logo;
	}

	/**
	 * @return string
	 */
	public function getLogo() {
		return $this->logo;
	}

	/**
	 * @param string $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param string $url
	 */
	public function setUrl($url) {
		$this->url = $url;
	}

	/**
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}
}