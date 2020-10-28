<?php
/*
 *
 *  * Copyright 2012-2020 the original author or authors.
 *  *
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      https://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *
 */

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: table_common_uin_black.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class table_common_uin_black extends discuz_table
{
	public function __construct() {

		$this->_table = 'common_uin_black';
		$this->_pk    = 'uin';

		parent::__construct();
	}

	public function fetch_by_uid($uid) {
		return DB::fetch_first('SELECT * FROM %t WHERE uid=%d', array($this->_table, $uid));
	}
	public function fetch_all_by_uin($ids = null) {
		$parameter = array($this->_table);
		$wherearr = array();
		if($ids !== null) {
			$parameter[] = $ids;
			$wherearr[] = is_array($ids) ? 'uin IN(%n)' : 'uin=%d';
		}
		$wheresql = !empty($wherearr) && is_array($wherearr) ? ' WHERE '.implode(' AND ', $wherearr) : '';
		return DB::fetch_all("SELECT * FROM %t $wheresql ", $parameter, $this->_pk, true);
	}

}

?>