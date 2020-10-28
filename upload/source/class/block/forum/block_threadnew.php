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
 *      $Id: block_threadnew.php 23608 2011-07-27 08:10:07Z cnteacher $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

require_once libfile('block_thread', 'class/block/forum');

class block_threadnew extends block_thread {
	function __construct() {
		$this->setting = array(
			'fids'	=> array(
				'title' => 'threadlist_fids',
				'type' => 'mselect',
				'value' => array()
			),
			'special' => array(
				'title' => 'threadlist_special',
				'type' => 'mcheckbox',
				'value' => array(
					array(1, 'threadlist_special_1'),
					array(2, 'threadlist_special_2'),
					array(3, 'threadlist_special_3'),
					array(4, 'threadlist_special_4'),
					array(5, 'threadlist_special_5'),
					array(0, 'threadlist_special_0'),
				),
				'default' => array('0')
			),
			'viewmod' => array(
				'title' => 'threadlist_viewmod',
				'type' => 'radio'
			),
			'rewardstatus' => array(
				'title' => 'threadlist_special_reward',
				'type' => 'mradio',
				'value' => array(
					array(0, 'threadlist_special_reward_0'),
					array(1, 'threadlist_special_reward_1'),
					array(2, 'threadlist_special_reward_2')
				),
				'default' => 0,
			),
			'picrequired' => array(
				'title' => 'threadlist_picrequired',
				'type' => 'radio',
				'value' => '0'
			),
			'orderby' => array(
				'title' => 'threadlist_orderby',
				'type'=> 'mradio',
				'value' => array(
					array('lastpost', 'threadlist_orderby_lastpost'),
					array('dateline', 'threadlist_orderby_dateline'),
				),
				'default' => 'lastpost'
			),
			'postdateline' => array(
				'title' => 'threadlist_postdateline',
				'type'=> 'mradio',
				'value' => array(
					array('0', 'threadlist_postdateline_nolimit'),
					array('3600', 'threadlist_postdateline_hour'),
					array('86400', 'threadlist_postdateline_day'),
					array('604800', 'threadlist_postdateline_week'),
					array('2592000', 'threadlist_postdateline_month'),
				),
				'default' => '0'
			),
			'lastpost' => array(
				'title' => 'threadlist_lastpost',
				'type'=> 'mradio',
				'value' => array(
					array('0', 'threadlist_lastpost_nolimit'),
					array('3600', 'threadlist_lastpost_hour'),
					array('86400', 'threadlist_lastpost_day'),
					array('604800', 'threadlist_lastpost_week'),
					array('2592000', 'threadlist_lastpost_month'),
				),
				'default' => '0'
			),
			'titlelength' => array(
				'title' => 'threadlist_titlelength',
				'type' => 'text',
				'default' => 40
			),
			'summarylength' => array(
				'title' => 'threadlist_summarylength',
				'type' => 'text',
				'default' => 80
			),
			'startrow' => array(
				'title' => 'threadlist_startrow',
				'type' => 'text',
				'default' => 0
			),
		);
	}

	function name() {
		return lang('blockclass', 'blockclass_thread_script_threadnew');
	}
}

?>