<?php

########################################################################
# Extension Manager/Repository config file for ext "xasf".
#
# Auto generated 28-12-2009 21:00
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Extended Antispam Filter for ve_guestbook',
	'description' => 'This plugin offers an antispam feature for comments posted in ve_guestbook',
	'category' => 'fe',
	'shy' => 0,
	'version' => '0.0.1',
	'dependencies' => 'cms,ve_guestbook',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Federico Bernardin',
	'author_email' => 'federico@bernardin.it',
	'author_company' => 'BFConsulting',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			've_guestbook' => '2.8.1-',
			'php' => '4.2.0-0.0.0',
			'typo3' => '4.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:7:{s:9:"ChangeLog";s:4:"5269";s:25:"class.tx_xasf_control.php";s:4:"7da6";s:22:"class.tx_xasf_hook.php";s:4:"e29a";s:12:"ext_icon.gif";s:4:"183c";s:17:"ext_localconf.php";s:4:"e3bc";s:15:"ext_php_api.dat";s:4:"38b3";s:14:"doc/manual.sxw";s:4:"53a6";}',
	'suggests' => array(
	),
);

?>