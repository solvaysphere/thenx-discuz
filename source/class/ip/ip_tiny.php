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
 *      $Id: ip_tiny.php 1587 2019-12-03 12:00:00Z opensource $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class ip_tiny_init_exception extends Exception {}

class ip_tiny {
	
	private static $instance = NULL;
	private $fd = NULL;
	private $offset = array();
	private $index = NULL;
	private $length = 0;

	private function __construct() {
		$ipdatafile = constant("DISCUZ_ROOT").'./data/ipdata/tinyipdata.dat';
		if($this->fp === NULL && $this->fp = fopen($ipdatafile, 'rb')) {
			$this->offset = unpack('Nlen', fread($this->fp, 4));
			$this->index  = fread($this->fp, $this->offset['len'] - 4);
		}
		if($this->fp === FALSE) {
			throw new ip_tiny_init_exception();
		}

		$this->length = $this->offset['len'] - 1028;
	}

	function __destruct() {
		if ($this->fd) {
			@fclose($this->fd);
		}
	}

	public static function getInstance() {
		if (!self::$instance) {
			try {
				self::$instance = new ip_tiny();
			} catch (Exception $e) {
				return NULL;
			}
		}
		return self::$instance;
	}

	public function convert($ip) {

		$ipdot = explode('.', $ip);
		$ip    = pack('N', ip2long($ip));

		$ipdot[0] = (int)$ipdot[0];
		$ipdot[1] = (int)$ipdot[1];


		$start  = @unpack('Vlen', $this->index[$ipdot[0] * 4] . $this->index[$ipdot[0] * 4 + 1] . $this->index[$ipdot[0] * 4 + 2] . $this->index[$ipdot[0] * 4 + 3]);

		for ($start = $start['len'] * 8 + 1024; $start < $this->length; $start += 8) {

			if ($this->index[$start] . $this->index[$start + 1] . $this->index[$start + 2] . $this->index[$start + 3] >= $ip) {
				$index_offset = @unpack('Vlen', $this->index[$start + 4] . $this->index[$start + 5] . $this->index[$start + 6] . "\x0");
				$index_length = @unpack('Clen', $this->index[$start + 7]);
				break;
			}
		}

		@fseek($this->fp, $this->offset['len'] + $index_offset['len'] - 1024);
		if($index_length['len']) {
			return '- '.@fread($this->fp, $index_length['len']);
		} else {
			return '- Unknown';
		}
	}

}
?>