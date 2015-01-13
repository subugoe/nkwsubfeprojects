<?php
namespace Subugoe\Nkwsubfeprojects\ViewHelpers\Widget\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Ingo Pfennigstorf <i.pfennigstorf@gmail.com>
 *
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

/**
 * Determines and displays similar keywords
 */
class SimilarKeywordsController extends \TYPO3\CMS\Fluid\Core\Widget\AbstractWidgetController {

	/**
	 * @var array
	 */
	protected $configuration = array(
		'titleField' => 'title',
		'linkObject' => '',
		'linkAction' => '',
		'linkController' => '',
		'linkPluginName' => ''
	);

	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	protected $objects;

	/**
	 * Uid that is excluded from displaying keywords
	 *
	 * @var int
	 */
	protected $exclude;

	/**
	 * @return void
	 */
	public function initializeAction() {
		$this->objects = $this->widgetConfiguration['objects'];
		$this->exclude = $this->widgetConfiguration['exclude'];
		\TYPO3\CMS\Core\Utility\ArrayUtility::mergeRecursiveWithOverrule($this->configuration, $this->widgetConfiguration['configuration'], TRUE);
	}

	/**
	 * Generate titles, indexes and assign this to the view
	 *
	 * @return void
	 */
	public function indexAction() {

		$groupings = $this->flattenList($this->objects);
		$this->view->assignMultiple(
			array (
				'titles' => $groupings,
				'linkAction' => $this->configuration['linkAction'],
				'linkController' => $this->configuration['linkController'],
				'linkPluginName' => $this->configuration['linkPluginName']
			)
		);
	}

	/**
	 * Flattens the list of keywords and makes a set out of them
	 *
	 * @param $objects
	 * @return array
	 */
	protected function flattenList($objects){

		$key = array();

		foreach ($objects as $object) {
			foreach ($object->getKeywords() as $keyword) {
				if ($this->exclude != $keyword->getUid()) {
					$key[$keyword->getUid()] = $keyword->getTitle();
				}
			}
		}
			// sort by value
		asort($key, SORT_LOCALE_STRING);

		return $key;
	}
}
