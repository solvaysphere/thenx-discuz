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
 *      $Id: lang_activitylist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'activitylist_fids' => '所在版块',
	'activitylist_fids_comment' => '设置允许参与新帖调用的版块，可以按住 CTRL 多选，全选或全不选均为不做限制',
	'activitylist_uids' => '发起者UID',
	'activitylist_uids_comment' => '设置活动发起者UID，多个UID请用半角逗号“,”隔开。',
	'activitylist_startrow' => '起始数据行数',
	'activitylist_startrow_comment' => '如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'activitylist_items' => '显示数据条数',
	'activitylist_items_comment' => '设置一次显示的主题条目数，请设置为大于 0 的整数',
	'activitylist_titlelength' => '标题最大字节数',
	'activitylist_titlelength_comment' => '设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'activitylist_fnamelength' => '标题最大字节数包含版块名称',
	'activitylist_fnamelength_comment' => '设置标题长度是否将所在版块名称的长度一同计算在内',
	'activitylist_summarylength' => '主题简短内容文字数',
	'activitylist_summarylength_comment' => '设置主题简短内容的文字数，0 为使用默认值 255',
	'activitylist_tids' => '指定主题',
	'activitylist_tids_comment' => '设置要指定显示的主题 tid ，多个 tid 请用半角逗号“,”隔开。注意: 留空为不进行任何过滤',
	'activitylist_keyword' => '标题关键字',
	'activitylist_keyword_comment' => '设置标题包含的关键字。注意: 留空为不进行任何过滤； 关键字中可使用通配符 *； 匹配多个关键字全部，可用空格或 AND 连接。如 win32 AND unix； 匹配多个关键字其中部分，可用 | 或 OR 连接。如 win32 OR unix',
	'activitylist_typeids' => '主题分类',
	'activitylist_typeids_comment' => '设置特定分类的主题。注意: 全选或全不选均为不进行任何过滤',
	'activitylist_typeids_all' => '全部的主题分类',
	'activitylist_sortids' => '分类信息',
	'activitylist_sortids_comment' => '设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'activitylist_sortids_all' => '全部的分类信息',
	'activitylist_digest' => '精华主题过滤',
	'activitylist_digest_comment' => '设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'activitylist_digest_0' => '普通主题',
	'activitylist_digest_1' => '精华 I',
	'activitylist_digest_2' => '精华 II',
	'activitylist_digest_3' => '精华 III',
	'activitylist_stick' => '置顶主题过滤',
	'activitylist_stick_comment' => '设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'activitylist_stick_0' => '普通主题',
	'activitylist_stick_1' => '置顶 I',
	'activitylist_stick_2' => '置顶 II',
	'activitylist_stick_3' => '置顶 III',
	'activitylist_special' => '特殊主题过滤',
	'activitylist_special_comment' => '设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'activitylist_special_1' => '投票主题',
	'activitylist_special_2' => '商品主题',
	'activitylist_special_3' => '悬赏主题',
	'activitylist_special_4' => '活动主题',
	'activitylist_special_5' => '辩论主题',
	'activitylist_special_0' => '普通主题',
	'activitylist_special_reward' => '悬赏主题过滤',
	'activitylist_special_reward_comment' => '设置特定类型的悬赏主题',
	'activitylist_special_reward_0' => '全部',
	'activitylist_special_reward_1' => '已解决',
	'activitylist_special_reward_2' => '未解决',
	'activitylist_recommend' => '推荐主题过滤',
	'activitylist_recommend_comment' => '设置是否只显示推荐的主题',
	'activitylist_orderby' => '主题排序方式',
	'activitylist_orderby_comment' => '设置以哪一字段或方式对主题进行排序',
	'activitylist_orderby_lastpost' => '按最后回复时间倒序排序',
	'activitylist_orderby_dateline' => '按发布时间倒序排序',
	'activitylist_orderby_replies' => '按回复数倒序排序',
	'activitylist_orderby_views' => '按浏览次数倒序排序',
	'activitylist_orderby_heats' => '按热度倒序排序',
	'activitylist_orderby_recommends' => '按主题评价倒序排序',
	'activitylist_orderby_hourviews' => '按指定时间内浏览次数倒序排序',
	'activitylist_orderby_todayviews' => '按当天浏览次数倒序排序',
	'activitylist_orderby_weekviews' => '按本周浏览次数倒序排序',
	'activitylist_orderby_monthviews' => '按当月浏览次数倒序排序',
	'activitylist_orderby_hours' => '指定时间(小时)',
	'activitylist_orderby_hours_comment' => '指定时间内浏览次数倒序排序的时间值',
	'activitylist_orderby_todayhots' => '按当天累计售出数倒序排序',
	'activitylist_orderby_weekhots' => '按本周累计售出数倒序排序',
	'activitylist_orderby_monthhots' => '按当月累计售出数倒序排序',
	'activitylist_price_add' => ' 附加 ',
	'activitylist_place' => '活动地点',
	'activitylist_class' => '活动类型',
	'activitylist_class_all' => '所有类型',
	'activitylist_gender' => '性别要求',
	'activitylist_gender_0' => '不限',
	'activitylist_gender_1' => '男',
	'activitylist_gender_2' => '女',
	'activitylist_orderby_weekstart' => '按一周内活动开始时间排序',
	'activitylist_orderby_monthstart' => '按一月内活动开始时间排序',
	'activitylist_orderby_weekexp' => '按一周内报名截止时间排序',
	'activitylist_orderby_monthexp' => '按一月内报名截止时间排序',
	'activitylist_orderby_weekhot' => '按一周内已参加人数排序',
	'activitylist_orderby_monthhot' => '按一月内已参加人数排序',
	'activitylist_orderby_alltimehot' => '按所有未结束活动已参加人数排序',
	'activitylist_highlight' => '获得高亮值',
);

?>