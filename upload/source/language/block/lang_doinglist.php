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
 *      $Id: lang_doinglist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'doinglist_uids' => '用户UID',
	'doinglist_uids_comment' => '填入指定用户的ID(uid)，多个用户之间用逗号(,)分隔',
	'doinglist_startrow' => '起始数据行数',
	'doinglist_startrow_comment' => '如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'doinglist_titlelength' => '记录长度',
	'doinglist_titlelength_comment' => '指定记录的最大长度，设置为0则支持表情图片',
	'doinglist_orderby' => '动态排序方式',
	'doinglist_orderby_comment' => '设置以哪一字段或方式对动态进行排序',
	'doinglist_orderby_dateline' => '按发布时间倒序',
	'doinglist_orderby_replynum' => '按回复数倒序'
);

?>