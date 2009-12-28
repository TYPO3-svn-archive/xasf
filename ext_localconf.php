<?php
//
//	$Id$
//

if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

//get EXT path
$PATH_xasf = t3lib_extMgm::extPath('xasf');

if (TYPO3_MODE == 'FE')	{
	require_once($PATH_xasf.'class.tx_xasf_hook.php');
}


//registering for several hooks
$TYPO3_CONF_VARS['EXTCONF']['ve_guestbook']['extraItemMarkerHook'][] = 'tx_xasf_hook';
$TYPO3_CONF_VARS['EXTCONF']['ve_guestbook']['preEntryInsertHook'][] = 'tx_xasf_hook';

?>