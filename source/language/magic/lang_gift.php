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
 *      $Id: lang_gift.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'gift_name' => '红包卡',
	'gift_desc' => '将自己的一部分积分埋在空间，来访者可以点击获取',
	'gift_info' => '将积分作为红包（可分成多份）埋在自己空间，<br />每个来访者最多可以获取其中一份',
	'gift_succeed' => '埋设红包成功 ',
	'gift_bad_credits_input' => '输入的积分总数有误',
	'gift_bad_percredit_input' => '输入的每份积分数有误',
	'gift_bad_credittype_input' => '指定的积分类型有误',
	'gift_credits_out_of_own' => '输入的积分数超出您拥有的积分数',
	'gift_gc' => '回收红包',
	'gift_use' => '埋个红包',

	'gift_receive_gift' => '领取红包 {percredit} {credittype}',
);

?>