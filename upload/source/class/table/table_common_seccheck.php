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
 *      $Id: table_common_seccheck.php 33625 2013-07-19 06:03:49Z nemohou $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class table_common_seccheck extends discuz_table
{
	private $_uids = array();
	public function __construct() {

		$this->_table = 'common_seccheck';
		$this->_pk    = 'ssid';

		$this->_pre_cache_key = 'common_seccheck_';
		$this->_cache_ttl = 600;

		parent::__construct();
	}

	public function delete_expiration($ssid = 0) {
		if ($this->_allowmem) {
			if ($ssid) {
				$ssid = dintval($ssid);
				memory('rm', $ssid . "_verified", $this->_pre_cache_key);
				memory('rm', $ssid . "_succeed", $this->_pre_cache_key);
				memory('rm', $ssid . "_code", $this->_pre_cache_key);
				memory('rm', $ssid . "_dateline", $this->_pre_cache_key);
			}
			// 其它情况，由cache自己处理过期
		} else {
			if($ssid) {
				$ssid = dintval($ssid);
				DB::delete($this->_table, "ssid='$ssid'");
			}
			DB::delete($this->_table, TIMESTAMP."-dateline>600");
			DB::delete($this->_table, "verified>4");
			DB::delete($this->_table, "succeed>1");	
		}
	}

	public function update_verified($ssid) {
		if ($this->_allowmem) {
			memory('inc', $ssid . "_verified", 1, 0, $this->_pre_cache_key);
		} else {
			DB::query("UPDATE %t SET verified=verified+1 WHERE ssid=%d", array($this->_table, $ssid));
		}
	}

	public function update_succeed($ssid) {
		if (!$this->_allowmem) {
			return DB::query("UPDATE %t SET verified=verified+1,succeed=succeed+1 WHERE ssid=%d", array($this->_table, $ssid));
		}
		memory('inc', $ssid . "_verified", 1, 0, $this->_pre_cache_key);
		memory('inc', $ssid . "_succeed", 1, 0, $this->_pre_cache_key);
		return 1; // simulate 1 row changed
	}

	public function truncate() {
		if ($this->_allowmem) {
			// 由Cache自己处理过期
		} else {
			DB::query("TRUNCATE %t", array($this->_table));
		}
	}

	/*
	 * 用一个单独的common_seccheck_pk生成唯一ID
	 * 所有的值按common_seccheck_$id_$key的格式记录
	 */
	public function insert($data, $return_insert_id = false, $replace = false, $silent = false) {
		if (!$this->_allowmem) {
			return parent::insert($data, $return_insert_id, $replace, $silent);
		}

		$ssid = memory("inc", 'pk', 1, 0, $this->_pre_cache_key);
		foreach ($data as $key => $value) {
			memory('set', $ssid . "_" . $key, $value, $this->_cache_ttl, $this->_pre_cache_key);
		}
		if ($return_insert_id) {
			return $ssid;
		}
		return TRUE;
	}

	public function fetch($id, $force_from_db = false) {
		if (!$this->_allowmem) {
			return parent::fetch($id, $force_from_db);
		}

		$data = array();
		$data['ssid'] = $id;
		$data['code'] = memory('get', $id . "_code", $this->_pre_cache_key);
		$data['dateline'] = memory('get', $id . "_dateline", $this->_pre_cache_key);
		$data['succeed'] = memory('get', $id . "_succeed", $this->_pre_cache_key);
		$data['verified'] = memory('get', $id . "_verified", $this->_pre_cache_key);
		return $data;
	}

	public function delete($ssid) {
		if (!$this->_allowmem) {
			return parent::delete($ssid);
		}
		$ssid = dintval($ssid);
		memory('rm', $ssid . "_verified", $this->_pre_cache_key);
		memory('rm', $ssid . "_succeed", $this->_pre_cache_key);
		memory('rm', $ssid . "_code", $this->_pre_cache_key);
		memory('rm', $ssid . "_dateline", $this->_pre_cache_key);
		return true;
	}

}

?>