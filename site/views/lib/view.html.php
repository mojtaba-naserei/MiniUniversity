<?php
/**
 * @copyright   Copyright (C) 2016 Open Source Matters, Inc. All rights reserved. ( https://trangell.com )
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @subpackage  com_MiniUniversity
 */
defined('_JEXEC') or die('Restricted access');

class MiniUniversityViewLib extends JViewLegacy
{

	function display($tpl = null)
	{

		$items = $this->get('Item');
      		$this->items  = &$items;

      	$libresvs = $this->get('Reservation');
		    $this->libresvs  = &$libresvs;

		$warning = $this->get('Warning');
      		$this->warning  = &$warning;
		$params 		= JComponentHelper::getParams('com_miniuniversity');
		$this->params   = $params->toArray();
		parent::display($tpl);
	}

}
