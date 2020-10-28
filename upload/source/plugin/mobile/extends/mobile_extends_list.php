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
 *      $Id: mobile_extends_list.php 33590 2013-07-12 06:39:08Z andyzheng $
 */
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
class mobile_api {

	public $extendsclass;
	public $modulelist;

	function common() {

		$this->modulelist = array('dz_newthread', 'dz_digest', 'dz_newreply', 'dz_newpic');
		if(!in_array($_GET['identifier'], $this->modulelist)) {
			mobile_core::result(array('error' => 'identifier_not_exists'));
		}
		include_once 'source/plugin/mobile/extends/mobile_extends_data.php';
		$extendsfilename = "./source/plugin/mobile/extends/module/".$_GET['identifier'].".php";
		if(empty($_GET['identifier'])) {
			mobile_core::result(array('error' => 'identifier_not_exists'));
		} else if(!file_exists($extendsfilename)) {
			mobile_core::result(array('error' => 'identifier_file_not_exists'));
		} else {
			require_once $extendsfilename;
			if(!class_exists($_GET['identifier'])) {
				mobile_core::result(array('error' => 'identifier_file_not_exists'));
			}
			$this->extendsclass = new $_GET['identifier'];
			if(method_exists($this->extendsclass, 'common')) {
				$this->extendsclass->common();
			}
		}

	}

	function output() {
		$variable = $this->extendsclass->output();
		mobile_core::result(mobile_core::variable($variable));
	}
}

?>