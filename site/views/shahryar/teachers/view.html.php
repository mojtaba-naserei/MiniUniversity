<?php
/**
 * @copyright   Copyright (C) 2016 Open Source Matters, Inc. All rights reserved. ( https://trangell.com )
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @subpackage  com_MiniUniversity
 */
defined('_JEXEC') or die('Restricted access');

class MiniUniversityViewTeachers extends JViewLegacy
{
	function display($tpl = null)
	{

		$items = $this->get('Items');
      		$this->items  = &$items;

      		$terms = $this->get('Listterm');
      		$this->terms  = &$terms;

      		$books = $this->get('ListBook');
      		$this->books                      = &$books;

      		$warning                           = $this->get('Warning');
      		$this->warning                  = &$warning;

                                    $this->form                        = $this->get('Form'); // for like


      		$params                           = JComponentHelper::getParams('com_miniuniversity');
		$this->params                  = $params->toArray();
		parent::display($tpl);
	}
}
