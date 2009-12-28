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
 *   46: class tx_xasf_hook
 *   55:     public function preEntryInsertProcessor($saveData, &$pObj)
 *   73:     public function extraItemMarkerProcessor($markerArray, $row, $lConf, &$pObj)
 *
 * TOTAL FUNCTIONS: 2
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */
	require_once('class.tx_xasf_control.php');

/**
 * This class is a hook for ve_guestbook extension
 *
 * $Id$
 *
 * @author	Federico Bernardin <federico@bernardin.it>
 */
	class tx_xasf_hook {

		/**
		 * This function manages the preEntryInsertHook hook in the ve_guestbook
		 *
		 * @param	array		$saveData: array with value from post to save
		 * @param	object		$pObj: the ve_guestbook_pi1 object class
		 * @return	array		The updated array for ve_guestbook
		 */
		public function preEntryInsertProcessor($saveData, &$pObj) {
			$controlDataObject = new tx_xasf_control($pObj->conf, $saveData);
			if (!$controlDataObject->postedFieldControl() || ($pObj->conf['xasf.']['enableAntispamHiddenField'] && !$controlDataObject->checkSpamHiddenField($pObj->piVars) )) {
				unset($saveData);
				$saveData = array();
			}
			return $saveData;
		}

		/**
		 * This function manages the extraItemMarkerHook hook in the ve_guestbook
		 *
		 * @param	array		$markerArray: array with markers from ve_guestbook
		 * @param	array		$row: array with value from ve_guestbook
		 * @param	array		$lConf: configurationa array from ve_guestbook
		 * @param	object		$pObj: the ve_guestbook_pi1 object class
		 * @return	array		marker array for ve_guestbook plugin
		 */
		public function extraItemMarkerProcessor($markerArray, $row, $lConf, &$pObj) {
			if ($pObj->conf['xasf.']['enableAntispamHiddenField'])
			$markerArray['###XASFCONTROLFIELD###'] = '<input type="hidden" name="tx_veguestbook_pi1[xasfControlField]" value="" />';
			return $markerArray;
		}


	}
?>
