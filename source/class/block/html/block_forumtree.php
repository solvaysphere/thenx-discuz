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
 *      $Id: block_forumtree.php 25525 2011-11-14 04:39:11Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

require_once libfile('commonblock_html', 'class/block/html');

class block_forumtree extends commonblock_html {

	function __construct() {}

	function name() {
		return lang('blockclass', 'blockclass_html_script_forumtree');
	}

	function getsetting() {
		global $_G;
		$settings = array(
			'fids'	=> array(
				'title' => 'forumtree_fids',
				'type' => 'mselect',
				'value' => array()
			),
		);
		loadcache('forums');
		$settings['fids']['value'][] = array(0, lang('portalcp', 'block_all_forum'));
		foreach($_G['cache']['forums'] as $fid => $forum) {
			$settings['fids']['value'][] = array($fid, ($forum['type'] == 'forum' ? str_repeat('&nbsp;', 4) : ($forum['type'] == 'sub' ? str_repeat('&nbsp;', 8) : '')).$forum['name']);
		}

		return $settings;
	}

	function getdata($style, $parameter) {
		global $_G;
		if(!$_G['cache']['forums']) {
			loadcache('forums');
		}
		$forumlist = array();
		$parameter['fids'] = (array)$parameter['fids'];
		$parameter['fids'] = array_map('intval', $parameter['fids']);
		foreach($_G['cache']['forums'] as $forum) {
			if(!$forum['status']) {
				continue;
			}
			if(!$parameter['fids'] || in_array(0, $parameter['fids']) || in_array($forum['fid'], $parameter['fids'])) {
				$forum['name'] = addslashes($forum['name']);
				$forum['type'] != 'group' && $haschild[$forum['fup']] = true;
				$forumlist[] = $forum;
			}
		}
		include template('common/block_forumtree');
		return array('html' => $return, 'data' => null);
	}

}

?>