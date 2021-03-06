<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: table_common_admincp_cmenu.php 27806 2012-02-15 03:20:46Z svn_project_zhangjie $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class table_b_mark extends discuz_table {

	public function __construct () {
		$this->_table = 'b_mark';
		$this->_pk    = 'id';

		parent::__construct();
	}

	public function get_mark_by_uid( $uid) {
		return DB::fetch_first('select mark_id from '.DB::table( $this->_table).' where uid = '.$uid);
	}

	public function update( $data , $uid) {
		DB::query('update '.DB::table( $this->_table).' set mark_id = '.$data['mark_id'].' where uid = '.$uid);
	}

	public function insert( $data , $uid) {
		DB::query('insert into '.DB::table( $this->_table).'(uid,mark_id) values('.$uid.' , '.$data['mark_id'].')');
	}
}