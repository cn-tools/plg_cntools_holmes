<?php
/**
 * @Copyright
 * @package     System - CSS markup detective useing holmes - Plug In
 * @author      Clemens Neubauer {@link https://github.com/cn-tools/}
 * @version     0-0-1
 * @date        Created on 14-Apr-2015
 * @link        Project Site {@link https://github.com/cn-tools/plg_cntools_holmes}
 *
 * @license GNU/GPL
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *  
 */
defined('_JEXEC') or die('Restricted access');

class plgSystemPlg_CNTools_Holmes extends JPlugin {
	function onBeforeRender ()
	{
		if ((JDEBUG) or ($this->params->get('mode', '1') == '0'))
		{
			$document = JFactory::getDocument();
			$document->addStyleSheet(JURI::base() . 'plugins/system/plg_cntools_holmes/' . $this->params->get('file', 'holmes.min.css'));
			$lScript = 'jQuery(document).ready(function(){jQuery("body").addClass("holmes-debug");});';
			$document->addScriptDeclaration($lScript, 'text/javascript');
		}
		return true;
	}
}
