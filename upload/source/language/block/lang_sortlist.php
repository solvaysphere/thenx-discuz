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
 *      $Id: lang_sortlist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'sortlist_fids' => '所在版块',
	'sortlist_fids_comment' => '设置允许参与新帖调用的版块，可以按住 CTRL 多选，全选或全不选均为不做限制',
	'sortlist_startrow' => '起始数据行数',
	'sortlist_startrow_comment' => '如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'sortlist_showitems' => '显示数据条数',
	'sortlist_showitems_comment' => '设置一次显示的主题条目数，请设置为大于 0 的整数',
	'sortlist_titlelength' => '标题最大字节数',
	'sortlist_titlelength_comment' => '设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'sortlist_fnamelength' => '标题最大字节数包含版块名称',
	'sortlist_fnamelength_comment' => '设置标题长度是否将所在版块名称的长度一同计算在内',
	'sortlist_summarylength' => '主题简短内容文字数',
	'sortlist_summarylength_comment' => '设置主题简短内容的文字数，0 为使用默认值 255',
	'sortlist_tids' => '指定主题',
	'sortlist_tids_comment' => '设置要指定显示的主题 tid ，多个 tid 请用半角逗号“,”隔开。注意: 留空为不进行任何过滤',
	'sortlist_keyword' => '标题关键字',
	'sortlist_keyword_comment' => '设置标题包含的关键字。注意: 留空为不进行任何过滤； 关键字中可使用通配符 *； 匹配多个关键字全部，可用空格或 AND 连接。如 win32 AND unix； 匹配多个关键字其中部分，可用 | 或 OR 连接。如 win32 OR unix',
	'sortlist_typeids' => '主题分类',
	'sortlist_typeids_comment' => '设置特定分类的主题。注意: 全选或全不选均为不进行任何过滤',
	'sortlist_typeids_all' => '全部的主题分类',
	'sortlist_sortids' => '分类信息',
	'sortlist_sortids_comment' => '设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'sortlist_sortids_all' => '全部的分类信息',
	'sortlist_digest' => '精华主题过滤',
	'sortlist_digest_comment' => '设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'sortlist_digest_0' => '普通主题',
	'sortlist_digest_1' => '精华 I',
	'sortlist_digest_2' => '精华 II',
	'sortlist_digest_3' => '精华 III',
	'sortlist_stick' => '置顶主题过滤',
	'sortlist_stick_comment' => '设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'sortlist_stick_0' => '普通主题',
	'sortlist_stick_1' => '置顶 I',
	'sortlist_stick_2' => '置顶 II',
	'sortlist_stick_3' => '置顶 III',
	'sortlist_special' => '特殊主题过滤',
	'sortlist_special_comment' => '设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'sortlist_special_1' => '投票主题',
	'sortlist_special_2' => '商品主题',
	'sortlist_special_3' => '悬赏主题',
	'sortlist_special_4' => '活动主题',
	'sortlist_special_5' => '辩论主题',
	'sortlist_special_0' => '普通主题',
	'sortlist_special_reward' => '悬赏主题过滤',
	'sortlist_special_reward_comment' => '设置特定类型的悬赏主题',
	'sortlist_special_reward_0' => '全部',
	'sortlist_special_reward_1' => '已解决',
	'sortlist_special_reward_2' => '未解决',
	'sortlist_recommend' => '推荐主题过滤',
	'sortlist_recommend_comment' => '设置是否只显示推荐的主题',
	'sortlist_orderby' => '主题排序方式',
	'sortlist_orderby_comment' => '设置以哪一字段或方式对主题进行排序',
	'sortlist_orderby_lastpost' => '按最后回复时间倒序排序',
	'sortlist_orderby_dateline' => '按发布时间倒序排序',
	'sortlist_orderby_replies' => '按回复数倒序排序',
	'sortlist_orderby_views' => '按浏览次数倒序排序',
	'sortlist_orderby_heats' => '按热度倒序排序',
	'sortlist_orderby_recommends' => '按主题评价倒序排序',
	'sortlist_lastpost' => '主题发布时间',
	'sortlist_lastpost_nolimit' => '不限制',
	'sortlist_lastpost_hour' => '一小时内',
	'sortlist_lastpost_day' => '一天内',
	'sortlist_lastpost_week' => '一周内',
	'sortlist_lastpost_month' => '一月内',
	'sortlist_orderby_hours_comment' => '指定时间内浏览次数倒序排序的时间值',
);

?>