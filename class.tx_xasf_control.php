<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2008-2009 Federico Bernardin <federico@bernardin.it>
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
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 *
 *
 *   47: class tx_xasf_control
 *   63:     public function __construct($config, $postedFieldValue)
 *   73:     public function postedFieldControl()
 *   89:     public function controlRegularExpression($elementName)
 *  115:     public function checkSpamHiddenField($piVars)
 *
 * TOTAL FUNCTIONS: 4
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */

	/**
	 * This class is a library for managing the xasf extension features
	 *
	 * $Id$
	 *
	 * @author	Federico Bernardin <federico@bernardin.it>
	 */
	class tx_xasf_control {

		/**
		* @var array ve_guestbook configuration array
		*/
		var $config;

		var $postedFieldValue;

		/**
		 * This function sets the configuration array and value from post
		 *
		 * @param	array		$config ve_guestbook configuration array
		 * @param	[type]		$postedFieldValue: ...
		 * @return	void
		 */
		public function __construct($config, $postedFieldValue) {
			$this->config = $config['xasf.'];
			$this->postedFieldValue = $postedFieldValue;
		}

		/**
		 * This function verify for each field in "fieldToCheck" config parameter the correctness of the field
		 *
		 * @return	boolean		true if all fields are correct or false otherwise
		 */
		public function postedFieldControl() {
			$postedFieldControlArray = explode(',', $this->config['fieldToCheck']);
			if (is_array($postedFieldControlArray)) {
				foreach($postedFieldControlArray as $value) {
					if (!$this->controlRegularExpression($value)) return false;
				}
			}
			return true;
		}

		/**
		 * This function controls if field satisfy the correct allowDeny value and regular expression check
		 *
		 * @param	string		$elementName: name of field to check
		 * @return	boolean		true id value is correct, false otherwise
		 */
		public function controlRegularExpression($elementName) {
			switch ($this->config[$elementName . '.']['allowDeny']) {
				case 'allow':
				if (preg_match($this->config[$elementName . '.']['regexp'], $this->postedFieldValue[$elementName]))
				return true;
				else
					return false;
				break;
				case 'deny':
				if (preg_match($this->config[$elementName . '.']['regexp'], $this->postedFieldValue[$elementName]))
				return false;
				else
					return true;
				break;
				default:
				return true;
				break;
			}
		}

		/**
		 * This function check if xasfControlField is posted without any value
		 *
		 * @param	array		$piVars: pivars of ve_guestbook
		 * @return	boolean		true if value is corretly submitted, false otherwise
		 */
		public function checkSpamHiddenField($piVars) {
			if (isset($piVars['xasfControlField']) && strlen($piVars['xasfControlField']) > 0 ) {
				return false;
			}
			else
				return true;
		}
	}
?>
