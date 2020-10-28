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
 *      $Id: magic_call.php 25246 2011-11-02 03:34:53Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class magic_call {

	var $version = '1.0';
	var $name = 'call_name';
	var $description = 'call_desc';
	var $price = '20';
	var $weight = '20';
	var $useevent = 0;
	var $targetgroupperm = false;
	var $copyright = '<a href="http://www.comsenz.com" target="_blank">Comsenz Inc.</a>';
	var $magic = array();
	var $parameters = array();

	function getsetting(&$magic) {}

	function setsetting(&$magicnew, &$parameters) {}

	function usesubmit() {
		global $_G;

		$id = intval($_GET['id']);
		$idtype = $_GET['idtype'];
		$blog = magic_check_idtype($id, $idtype);

		$num = 10;
		$list = $ids = $note_inserts = array();
		$fusername = dimplode($_POST['fusername']);
		if($fusername) {
			$query = C::t('home_friend')->fetch_all_by_uid_username($_G['uid'], $_POST['fusername'], 0, $num);
			$note = lang('spacecp', 'magic_call', array('url'=>"home.php?mod=space&uid=$_G[uid]&do=blog&id=$id"));
			foreach($query as $value) {
				$ids[] = $value['fuid'];
				$value['avatar'] = str_replace("'", "\'", avatar($value[fuid],'small'));
				$list[] = $value;
				$note_inserts[] = array(
					'uid' => $value['fuid'],
					'type' => $name,
					'new' => 1,
					'authorid' => $_G['uid'],
					'author' => $_G['username'],
					'note' => $note,
					'dateline' => $_G['timestamp']
				);
			}
		}
		if(empty($ids)) {
			showmessage('magicuse_has_no_valid_friend');
		}
		foreach($note_inserts as $note_insert) {
			C::t('home_notification')->insert($note_insert);
		}

		C::t('common_member')->increase($ids, array('newprompt' => 1));

		usemagic($this->magic['magicid'], $this->magic['num']);
		updatemagiclog($this->magic['magicid'], '2', '1', '0', '0', $idtype, $id);

		$op = 'show';
		include template('home/magic_call');
	}

	function show() {
		$id = intval($_GET['id']);
		$idtype = $_GET['idtype'];
		magic_check_idtype($id, $idtype);
		magicshowtips(lang('magic/call', 'call_info'));
		$op = 'use';
		include template('home/magic_call');
	}
}

?>