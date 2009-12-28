<?php

########################################################################
# Extension Manager/Repository config file for ext: "xasf"
#
# Auto generated 11-07-2009 15:56
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Extended Antispam Filter for ve_guestbook',
	'description' => 'This plugin offers an antispam feature for comments posted in ve_guestbook',
	'category' => 'fe',
	'shy' => 0,
	'version' => '0.0.0',
	'dependencies' => 've_guestbook',
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
	'_md5_values_when_last_written' => 'a:57:{s:9:"ChangeLog";s:4:"bdf1";s:20:"class.ext_update.php";s:4:"f6f6";s:22:"class.tx_timtab_be.php";s:4:"8c56";s:27:"class.tx_timtab_catmenu.php";s:4:"d53f";s:22:"class.tx_timtab_fe.php";s:4:"e19a";s:23:"class.tx_timtab_lib.php";s:4:"9c80";s:28:"class.tx_timtab_pingback.php";s:4:"e50d";s:29:"class.tx_timtab_trackback.php";s:4:"1a9d";s:12:"ext_icon.gif";s:4:"90a5";s:17:"ext_localconf.php";s:4:"6afe";s:14:"ext_tables.php";s:4:"a08e";s:14:"ext_tables.sql";s:4:"d8b3";s:28:"ext_typoscript_constants.txt";s:4:"7faa";s:24:"ext_typoscript_setup.txt";s:4:"9d3a";s:27:"icon_tx_timtab_blogroll.gif";s:4:"7d43";s:23:"icon_tx_timtab_post.gif";s:4:"afd3";s:13:"locallang.php";s:4:"7f41";s:16:"locallang_db.php";s:4:"59ce";s:7:"tca.php";s:4:"d003";s:20:"3rdparty/lib.ixr.php";s:4:"82b3";s:14:"doc/manual.sxw";s:4:"0c38";s:14:"pi1/ce_wiz.gif";s:4:"02b6";s:27:"pi1/class.tx_timtab_pi1.php";s:4:"818f";s:35:"pi1/class.tx_timtab_pi1_wizicon.php";s:4:"d7b4";s:17:"pi1/locallang.php";s:4:"1585";s:24:"pi1/static/editorcfg.txt";s:4:"8401";s:27:"pi2/class.tx_timtab_pi2.php";s:4:"dd1e";s:38:"pi2/class.tx_timtab_pi2_xmlrpcauth.php";s:4:"62c6";s:40:"pi2/class.tx_timtab_pi2_xmlrpcserver.php";s:4:"de8e";s:14:"pi3/ce_wiz.gif";s:4:"02b6";s:27:"pi3/class.tx_timtab_pi3.php";s:4:"41f9";s:35:"pi3/class.tx_timtab_pi3_wizicon.php";s:4:"f4a0";s:17:"pi3/locallang.php";s:4:"4fc3";s:29:"res/realurl_example_setup.php";s:4:"7d2a";s:25:"res/buttons/atom_news.gif";s:4:"5dec";s:29:"res/buttons/firefox_80x15.png";s:4:"deb3";s:24:"res/buttons/rdf_news.gif";s:4:"5271";s:24:"res/buttons/rss_news.gif";s:4:"2b53";s:29:"res/buttons/timtab_button.gif";s:4:"9189";s:35:"res/buttons/typo3_button_logo_2.gif";s:4:"0fc4";s:23:"res/buttons/xfn-btn.gif";s:4:"bc51";s:29:"res/kubrick/kubrick_main.tmpl";s:4:"31ed";s:31:"res/kubrick/kubrick_single.tmpl";s:4:"2266";s:28:"res/kubrick/kubrick_std.tmpl";s:4:"e8da";s:32:"res/kubrick/kubrick_tt_news.tmpl";s:4:"67b8";s:37:"res/kubrick/kubrick_ve_guestbook.tmpl";s:4:"044a";s:21:"res/kubrick/style.css";s:4:"e244";s:32:"res/kubrick/images/kubrickbg.jpg";s:4:"fb89";s:37:"res/kubrick/images/kubrickbgcolor.jpg";s:4:"59ca";s:36:"res/kubrick/images/kubrickbgwide.jpg";s:4:"49ea";s:36:"res/kubrick/images/kubrickfooter.jpg";s:4:"b921";s:36:"res/kubrick/images/kubrickheader.jpg";s:4:"7627";s:43:"res/patches/class.t3lib_parsehtml.php.patch";s:4:"251b";s:33:"static/kubrick_main/constants.txt";s:4:"ecb0";s:29:"static/kubrick_main/setup.txt";s:4:"5d45";s:31:"static/webservice/constants.txt";s:4:"80d1";s:27:"static/webservice/setup.txt";s:4:"53a7";}',
);

?>