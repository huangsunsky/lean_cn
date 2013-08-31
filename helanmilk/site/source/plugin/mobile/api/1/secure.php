<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: secure.php 28691 2012-03-08 05:07:45Z monkey $
 */
//note secure(验证安全) @ Discuz! X2.5

if(!defined('IN_MOBILE_API')) {
	exit('Access Denied');
}

include_once 'misc.php';

class mobile_api {

	//note 程序模块执行前需要运行的代码
	function common() {
		global $_G;
		$seccodecheck = $secqaacheck = false;
		if($_GET['type'] == 'register') {
			$seccodecheck = $_G['setting']['seccodestatus'] & 1;
			$secqaacheck = $_G['setting']['secqaa']['status'] & 1;
		} elseif($_GET['type'] == 'login') {
			$seccodecheck = $_G['setting']['seccodestatus'] & 2;
		} elseif($_GET['type'] == 'post') {
			$seccodecheck = ($_G['setting']['seccodestatus'] & 4) && (!$_G['setting']['seccodedata']['minposts'] || getuserprofile('posts') < $_G['setting']['seccodedata']['minposts']);
			$secqaacheck = $_G['setting']['secqaa']['status'] & 2 && (!$_G['setting']['secqaa']['minposts'] || getuserprofile('posts') < $_G['setting']['secqaa']['minposts']);
		}
		$sechash = random(8);
		if($seccodecheck || $secqaacheck) {
			$variable = array('sechash' => $sechash);
			if($seccodecheck) {
				$variable['seccode'] = $_G['siteurl'].'api/mobile/index.php?module=seccode&sechash='.$sechash.'&version='.(empty($_GET['secversion']) ? '1' : $_GET['secversion']);
			}
			if($secqaacheck) {
				require_once libfile('function/seccode');
				$variable['secqaa'] = make_secqaa($sechash);
			}
		}
		mobile_core::result(mobile_core::variable($variable));
	}

	//note 程序模板输出前运行的代码
	function output() {}

}

?>