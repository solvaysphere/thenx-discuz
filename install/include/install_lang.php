<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: install_lang.php 36287 2016-12-12 03:59:05Z nemohou $
 */

if(!defined('IN_COMSENZ')) {
	exit('Access Denied');
}

define('UC_VERNAME', '中文版');
$lang = array(
	'SC_UTF8' => '简体中文 UTF8 版',
	'TC_UTF8' => '繁体中文 UTF8 版',

	'title_install' => SOFT_NAME.' 安装向导',
	'agreement_yes' => '我同意',
	'agreement_no' => '我不同意',
	'notset' => '不限制',
	'enable' => '开启',
	'disable' => '关闭',

	'message_title' => '提示信息',
	'error_message' => '错误信息',
	'message_return' => '返回',
	'return' => '返回',
	'install_wizard' => '安装向导',
	'config_nonexistence' => '配置文件不存在',
	'nodir' => '目录不存在',
	'redirect' => '浏览器会自动跳转页面，无需人工干预。<br>除非当您的浏览器没有自动跳转时，请点击这里',
	'auto_redirect' => '浏览器会自动跳转页面，无需人工干预',
	'database_errno_1064' => 'SQL 语法错误',

	'dbpriv_createtable' => '没有CREATE TABLE权限，无法继续安装',
	'dbpriv_insert' => '没有INSERT权限，无法继续安装',
	'dbpriv_select' => '没有SELECT权限，无法继续安装',
	'dbpriv_update' => '没有UPDATE权限，无法继续安装',
	'dbpriv_delete' => '没有DELETE权限，无法继续安装',
	'dbpriv_droptable' => '没有DROP TABLE权限，无法安装',

	'db_not_null' => '数据库中已经安装过 UCenter, 继续安装会清空原有数据。',
	'db_drop_table_confirm' => '继续安装会清空全部原有数据，您确定要继续吗?',

	'writeable' => '可写',
	'unwriteable' => '不可写',
	'old_step' => '上一步',
	'new_step' => '下一步',

	'database_errno_2003' => '无法连接数据库，请检查数据库是否启动，数据库服务器地址是否正确',
	'database_errno_1044' => '无法创建新的数据库，请检查数据库名称填写是否正确',
	'database_errno_1045' => '无法连接数据库，请检查数据库用户名或者密码是否正确',
	'database_connect_error' => '数据库连接错误',

	'step_title_1' => '检查安装环境',
	'step_title_2' => '设置运行环境',
	'step_title_3' => '创建数据库',
	'step_title_4' => '安装',
	'step_env_check_title' => '开始安装',
	'step_env_check_desc' => '环境以及文件目录权限检查',
	'step_db_init_title' => '安装数据库',
	'step_db_init_desc' => '正在执行数据库安装',

	'step1_file' => '目录文件',
	'step1_need_status' => '所需状态',
	'step1_status' => '当前状态',
	'not_continue' => '请将以上红叉部分修正再试',

	'tips_dbinfo' => '填写数据库信息',
	'tips_dbinfo_comment' => '',
	'tips_admininfo' => '填写管理员信息',
	'step_ext_info_title' => '安装成功。',
	'step_ext_info_comment' => '点击进入登录',

	'ext_info_succ' => '安装成功。',
	'install_submit' => '提交',
	'install_locked' => '安装锁定，已经安装过了，如果您确定要重新安装，请到服务器上删除<br /> '.str_replace(ROOT_PATH, '', $lockfile),
	'error_quit_msg' => '您必须解决以上问题，安装才可以继续',

	'step_app_reg_title' => '设置运行环境',
	'step_app_reg_desc' => '检测服务器环境以及设置 UCenter',
	'tips_ucenter' => '请填写 UCenter 相关信息',
	'tips_ucenter_comment' => 'UCenter 是 Comsenz 公司产品的核心服务程序，Discuz! Board 的安装和运行依赖此程序。如果您已经安装了 UCenter，请填写以下信息。否则，请到 <a href="http://www.discuz.com/" target="blank">Comsenz 产品中心</a> 下载并且安装，然后再继续。',

	'advice_mysqli_connect' => '请检查 mysqli 模块是否正确加载',
	'advice_xml_parser_create' => '该函数需要 PHP 支持 XML 。请联系服务商，确定开启了此项功能',
	'advice_json_encode' => '该函数需要 PHP 支持 JSON 。请联系服务商，确定开启了此项功能',
	'advice_fsockopen' => '该函数需要 php.ini 中 allow_url_fopen 选项开启。请联系服务商，确定开启了此项功能',
	'advice_pfsockopen' => '该函数需要 php.ini 中 allow_url_fopen 选项开启。请联系服务商，确定开启了此项功能',
	'advice_stream_socket_client' => '该函数需要 php.ini 中 stream_socket_client 函数开启。请联系服务商，确定开启了此项功能',
	'advice_curl_init' => '该函数需要 php.ini 中 curl_init 函数开启。请联系服务商，确定开启了此项功能',

	'ucurl' => 'UCenter 的 URL',
	'ucpw' => 'UCenter 创始人密码',
	'ucip' => 'UCenter 的IP地址',
	'ucenter_ucip_invalid' => '格式错误，请填写正确的 IP 地址',
	'ucip_comment' => '绝大多数情况下您可以不填',

	'tips_siteinfo' => '请填写站点信息',
	'sitename' => '站点名称',
	'siteurl' => '站点 URL',

	'forceinstall' => '强制安装',
	'dbinfo_forceinstall_invalid' => '当前数据库当中已经含有同样表前缀的数据表，您可以修改“表名前缀”来避免删除旧的数据，或者选择强制安装。强制安装会删除旧数据，且无法恢复',

	'click_to_back' => '点击返回上一步',
	'adminemail' => '系统信箱 Email',
	'adminemail_comment' => '用于发送程序错误报告',
	'dbhost_comment' => '数据库服务器地址, 一般为 localhost',
	'tablepre_comment' => '同一数据库运行多个论坛时，请修改前缀',
	'forceinstall_check_label' => '我要删除数据，强制安装 !!!',
	'initdbresult_succ' => '数据库安装完成',
	'initsys' => '正在系统初始化',

	'uc_url_empty' => '您没有填写 UCenter 的 URL，请返回填写',
	'uc_url_invalid' => 'URL 格式错误',
	'uc_url_unreachable' => 'UCenter 的 URL 地址可能填写错误，请检查',
	'uc_ip_invalid' => '无法解析该域名，请填写站点的 IP',
	'uc_admin_invalid' => 'UCenter 创始人密码校验未通过, 可能原因有:<br />1. UCenter 创始人密码不正确<br />2. 多次错误输入密码导致创始人用户和 IP 地址被锁定<br />3. UCenter 后台 “ 通过 URL 添加应用功能 ” 未开启',
	'uc_data_invalid' => '通信失败，请检查 UCenter 的URL 地址是否正确 ',
	'uc_dbcharset_incorrect' => 'UCenter 数据库字符集与当前应用字符集不一致',
	'uc_api_add_app_error' => '向 UCenter 添加应用错误',
	'uc_dns_error' => 'UCenter DNS解析错误，请返回填写一下 UCenter 的 IP地址',

	'ucenter_ucurl_invalid' => 'UCenter 的URL为空，或者格式错误，请检查',
	'ucenter_ucpw_invalid' => 'UCenter 的创始人密码为空，或者格式错误，请检查',
	'siteinfo_siteurl_invalid' => '站点URL为空，或者格式错误，请检查',
	'siteinfo_sitename_invalid' => '站点名称为空，或者格式错误，请检查',
	'dbinfo_dbhost_invalid' => '数据库服务器为空，或者格式错误，请检查',
	'dbinfo_dbname_invalid' => '数据库名为空，或者格式错误，请检查',
	'dbinfo_dbuser_invalid' => '数据库用户名为空，或者格式错误，请检查',
	'dbinfo_dbpw_invalid' => '数据库密码为空，或者格式错误，请检查',
	'dbinfo_adminemail_invalid' => '系统邮箱为空，或者格式错误，请检查',
	'dbinfo_tablepre_invalid' => '数据表前缀为空，或者格式错误，请检查',
	'admininfo_username_invalid' => '管理员用户名为空，或者格式错误，请检查',
	'admininfo_email_invalid' => '管理员Email为空，或者格式错误，请检查',
	'admininfo_password_invalid' => '管理员密码为空，请填写',
	'admininfo_password2_invalid' => '两次密码不一致，请检查',

	'install_dzfull' => '<br><label><input type="radio"'.(getgpc('install_ucenter') != 'no' ? ' checked="checked"' : '').' name="install_ucenter" value="yes" onclick="if(this.checked)$(\'form_items_2\').style.display=\'none\';" /> 全新安装 Discuz! X (含 UCenter Server)</label>',
	'install_dzonly' => '<br><label><input type="radio"'.(getgpc('install_ucenter') == 'no' ? ' checked="checked"' : '').' name="install_ucenter" value="no" onclick="if(this.checked)$(\'form_items_2\').style.display=\'\';" /> 仅安装 Discuz! X (手工指定已经安装的 UCenter Server)</label>',

	'username' => '管理员账号',
	'email' => '管理员 Email',
	'password' => '管理员密码',
	'password_comment' => '管理员密码不能为空',
	'password2' => '重复密码',

	'admininfo_invalid' => '管理员信息不完整，请检查管理员账号，密码，邮箱',
	'dbname_invalid' => '数据库名为空，请填写数据库名称',
	'tablepre_invalid' => '数据表前缀为空，或者格式错误，请检查',
	'admin_username_invalid' => '非法用户名，用户名长度不应当超过 15 个英文字符，且不能包含特殊字符，一般是中文，字母或者数字',
	'admin_password_invalid' => '密码和上面不一致，请重新输入',
	'admin_email_invalid' => 'Email 地址错误，此邮件地址已经被使用或者格式无效，请更换为其他地址',
	'admin_invalid' => '您的信息管理员信息没有填写完整，请仔细填写每个项目',
	'admin_exist_password_error' => '该用户已经存在，如果您要设置此用户为论坛的管理员，请正确输入该用户的密码，或者请更换论坛管理员的名字',

	'tagtemplates_subject' => '标题',
	'tagtemplates_uid' => '用户 ID',
	'tagtemplates_username' => '发帖者',
	'tagtemplates_dateline' => '日期',
	'tagtemplates_url' => '主题地址',

	'uc_version_incorrect' => '您的 UCenter 服务端版本过低，请升级 UCenter 服务端到最新版本，并且升级，下载地址：http://www.comsenz.com/ 。',
	'config_unwriteable' => '安装向导无法写入配置文件, 请设置 config.inc.php 程序属性为可写状态(777)',

	'install_in_processed' => '正在安装...',
	'install_succeed' => '安装成功，点击进入',

	'init_credits_karma' => '威望',
	'init_credits_money' => '金钱',

	'init_postno0' => '楼主',
	'init_postno1' => '沙发',
	'init_postno2' => '板凳',
	'init_postno3' => '地板',

	'init_support' => '支持',
	'init_opposition' => '反对',

	'init_group_0' => '会员',
	'init_group_1' => '管理员',
	'init_group_2' => '超级版主',
	'init_group_3' => '版主',
	'init_group_4' => '禁止发言',
	'init_group_5' => '禁止访问',
	'init_group_6' => '禁止 IP',
	'init_group_7' => '游客',
	'init_group_8' => '等待验证会员',
	'init_group_9' => '乞丐',
	'init_group_10' => '新手上路',
	'init_group_11' => '注册会员',
	'init_group_12' => '中级会员',
	'init_group_13' => '高级会员',
	'init_group_14' => '金牌会员',
	'init_group_15' => '论坛元老',

	'init_rank_1' => '新生入学',
	'init_rank_2' => '小试牛刀',
	'init_rank_3' => '实习记者',
	'init_rank_4' => '自由撰稿人',
	'init_rank_5' => '特聘作家',

	'init_cron_1' => '清空今日发帖数',
	'init_cron_2' => '清空本月在线时间',
	'init_cron_3' => '每日数据清理',
	'init_cron_4' => '生日统计与邮件祝福',
	'init_cron_5' => '主题回复通知',
	'init_cron_6' => '每日公告清理',
	'init_cron_7' => '限时操作清理',
	'init_cron_8' => '论坛推广清理',
	'init_cron_9' => '每月主题清理',
	'init_cron_10' => '每日 X-Space更新用户',
	'init_cron_11' => '每周主题更新',

	'init_bbcode_1' => '使内容横向滚动，这个效果类似 HTML 的 marquee 标签，注意：这个效果只在 Internet Explorer 浏览器下有效。',
	'init_bbcode_2' => '嵌入 Flash 动画',
	'init_bbcode_3' => '显示 QQ 在线状态，点这个图标可以和他（她）聊天',
	'init_bbcode_4' => '上标',
	'init_bbcode_5' => '下标',
	'init_bbcode_6' => '嵌入 Windows media 音频',
	'init_bbcode_7' => '嵌入 Windows media 音频或视频',

	'init_qihoo_searchboxtxt' =>'输入关键词,快速搜索本论坛',
	'init_threadsticky' =>'全局置顶,分类置顶,本版置顶',

	'init_default_style' => '默认风格',
	'init_default_forum' => '默认版块',
	'init_default_template' => '默认模板套系',
	'init_default_template_copyright' => '腾讯云计算（北京）有限责任公司',

	'init_dataformat' => 'Y-n-j',
	'init_modreasons' => '广告/SPAM\r\n恶意灌水\r\n违规内容\r\n文不对题\r\n重复发帖\r\n\r\n我很赞同\r\n精品文章\r\n原创内容',
	'init_userreasons' => '很给力!\r\n神马都是浮云\r\n赞一个!\r\n山寨\r\n淡定',
	'init_link' => 'Discuz! 官方论坛',
	'init_link_note' => '提供最新 Discuz! 产品新闻、软件下载与技术交流',

	'init_promotion_task' => '网站推广任务',
	'init_gift_task' => '红包类任务',
	'init_avatar_task' => '头像类任务',

	'copyright' => 'Copyright &copy; 2001-'.date('Y').' Tencent Cloud.',

	'license' => '<div class="license"><h1>中文版授权协议 适用于中文用户</h1>

<p>版权所有 (c) 2001-'.date('Y').'，腾讯云计算（北京）有限责任公司(原北京康盛新创科技有限责任公司)保留所有权利。</p>

<p>感谢您选择康盛产品。希望我们的努力能为您提供一个高效快速、强大的站点解决方案，和强大的社区论坛解决方案。康盛公司网址为 http://www.comsenz.com，产品官方讨论区网址为 http://www.discuz.net。</p>

<p>用户须知：本协议是您与康盛公司之间关于您使用康盛公司提供的各种软件产品及服务的法律协议。无论您是个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，包括免除或者限制康盛责任的免责条款及对您的权利限制。请您审阅并接受或不接受本服务条款。如您不同意本服务条款及/或康盛随时对其的修改，您应不使用或主动取消康盛公司提供的康盛产品。否则，您的任何对康盛产品中的相关服务的注册、登陆、下载、查看等使用行为将被视为您对本服务条款全部的完全接受，包括接受康盛对服务条款随时所做的任何修改。
<p>本服务条款一旦发生变更, 康盛将在网页上公布修改内容。修改后的服务条款一旦在网站管理后台上公布即有效代替原来的服务条款。您可随时登陆康盛官方论坛查阅最新版服务条款。如果您选择接受本条款，即表示您同意接受协议各项条件的约束。如果您不同意本服务条款，则不能获得使用本服务的权利。您若有违反本条款规定，康盛公司有权随时中止或终止您对康盛产品的使用资格并保留追究相关法律责任的权利。</p>
<p>在理解、同意、并遵守本协议的全部条款后，方可开始使用康盛产品。您可能与康盛公司直接签订另一书面协议，以补充或者取代本协议的全部或者任何部分。</p></p>

<p>康盛拥有本软件的全部知识产权。本软件只供许可协议，并非出售。康盛只允许您在遵守本协议各项条款的情况下复制、下载、安装、使用或者以其他方式受益于本软件的功能或者知识产权。</p>

<h3>I. 协议许可的权利</h3>
<ol>
   <li>您可以在完全遵守本许可协议的基础上，将本软件应用于非商业用途，而不必支付软件版权许可费用。</li>
   <li>您可以在协议规定的约束和限制范围内修改康盛产品源代码(如果被提供的话)或界面风格以适应您的网站要求。</li>
   <li>您拥有使用本软件构建的网站中全部会员资料、文章及相关信息的所有权，并独立承担与使用本软件构建的网站内容的审核、注意义务，确保其不侵犯任何人的合法权益，独立承担因使用康盛软件和服务带来的全部责任，若造成康盛公司或用户损失的，您应予以全部赔偿。</li>
   <li>若您需将康盛软件或服务用户商业用途，必须另行获得康盛的书面许可，您在获得商业授权之后，您可以将本软件应用于商业用途，同时依据所购买的授权类型中确定的技术支持期限、技术支持方式和技术支持内容，自购买时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。商业授权用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。</li>
   <li>您可以从康盛提供的应用中心服务中下载适合您网站的应用程序，但应向应用程序开发者/所有者支付相应的费用。</li>
</ol>

<h3>II. 协议规定的约束和限制</h3>
<ol>
   <li>未获康盛公司书面商业授权之前，不得将本软件用于商业用途（包括但不限于企业网站、经营性网站、以营利为目或实现盈利的网站）。购买商业授权请登陆http://www.discuz.com参考相关说明，也可以致电8610-51282255了解详情。</li>
   <li>不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。</li>
   <li>无论如何，即无论用途如何、是否经过修改或美化、修改程度如何，只要使用康盛产品的整体或任何部分，未经书面许可，页面页脚处的康盛产品名称和康盛公司下属网站（http://www.comsenz.com、或 http://www.discuz.net） 的链接都必须保留，而不能清除或修改。</li>
   <li>禁止在康盛产品的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。</li>
   <li>您从应用中心下载的应用程序，未经应用程序开发者/所有者的书面许可，不得对其进行反向工程、反向汇编、反向编译等，不得擅自复制、修改、链接、转载、汇编、发表、出版、发展与之有关的衍生产品、作品等。</li>
   <li>如果您未能遵守本协议的条款，您的授权将被终止，所许可的权利将被收回，同时您应承担相应法律责任。</li>
</ol>

<h3>III. 有限担保和免责声明</h3>
<ol>
   <li>本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。</li>
   <li>用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。</li>
   <li>康盛公司不对使用本软件构建的网站中或者论坛中的文章或信息承担责任，全部责任由您自行承担。</li>
   <li>康盛公司无法全面监控由第三方上传至应用中心的应用程序，因此不保证应用程序的合法性、安全性、完整性、真实性或品质等；您从应用中心下载应用程序时，同意自行判断并承担所有风险，而不依赖于康盛公司。但在任何情况下，康盛公司有权依法停止应用中心服务并采取相应行动，包括但不限于对于相关应用程序进行卸载，暂停服务的全部或部分，保存有关记录，并向有关机关报告。由此对您及第三人可能造成的损失，康盛公司不承担任何直接、间接或者连带的责任。</li>
   <li>康盛公司对康盛提供的软件和服务之及时性、安全性、准确性不作担保，由于不可抗力因素、康盛公司无法控制的因素（包括黑客攻击、停断电等）等造成软件使用和服务中止或终止，而给您造成损失的，您同意放弃追究康盛公司责任的全部权利。   6.康盛公司特别提请您注意，康盛公司为了保障公司业务发展和调整的自主权，康盛公司拥有随时经或未经事先通知而修改服务内容、中止或终止部分或全部软件使用和服务的权利，修改会公布于康盛公司网站相关页面上，一经公布视为通知。 康盛公司行使修改或中止、终止部分或全部软件使用和服务的权利而造成损失的，康盛公司不需对您或任何第三方负责。</li>
</ol>

<p>有关康盛产品最终用户授权协议、商业授权与技术服务的详细内容，均由康盛公司独家提供。康盛公司拥有在不事先通知的情况下，修改授权协议和服务价目表的权利，修改后的协议或价目表对自改变之日起的新授权用户生效。</p>

<p>一旦您开始安装康盛产品，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权利的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。</p>

<p>本许可协议条款的解释，效力及纠纷的解决，适用于中华人民共和国大陆法律。</p>

<p>若您和康盛之间发生任何纠纷或争议，首先应友好协商解决，协商不成的，您在此完全同意将纠纷或争议提交康盛所在地北京市海淀区人民法院管辖。康盛公司拥有对以上各项条款内容的解释权及修改权。</p>

<p>（正文完）</p>

<p align="right">康盛公司</p>

</div>',

	'uc_installed' => '您已经安装过 UCenter，如果需要重新安装，请删除 data/install.lock 文件',
	'i_agree' => '我已仔细阅读，并同意上述条款中的所有内容',
	'supportted' => '支持',
	'unsupportted' => '不支持',
	'max_size' => '支持/最大尺寸',
	'project' => '项目',
	'ucenter_required' => 'Discuz! 所需配置',
	'ucenter_best' => 'Discuz! 最佳',
	'curr_server' => '当前服务器',
	'env_check' => '环境检查',
	'os' => '操作系统',
	'php' => 'PHP 版本',
	'attachmentupload' => '附件上传',
	'unlimit' => '不限制',
	'version' => '版本',
	'gdversion' => 'GD 库',
	'allow' => '允许 ',
	'unix' => '类Unix',
	'diskspace' => '磁盘空间',
	'opcache' => 'OPcache',
	'curl' => 'cURL 库',
	'priv_check' => '目录、文件权限检查',
	'func_depend' => '函数依赖性检查',
	'func_name' => '函数名称',
	'check_result' => '检查结果',
	'suggestion' => '建议',
	'advice_mysqli' => '请检查 mysqli 模块是否正确加载',
	'advice_fopen' => '该函数需要 php.ini 中 allow_url_fopen 选项开启。请联系服务商，确定开启了此项功能',
	'advice_xml' => '该函数需要 PHP 支持 XML。请联系服务商，确定开启了此项功能',
	'none' => '无',
	'undefine_func' => '不存在的函数',
	'mysqli_unsupport' => '请检查 mysqli 模块是否正确加载',

	'dbhost' => '数据库服务器',
	'dbuser' => '数据库用户名',
	'dbpw' => '数据库密码',
	'dbname' => '数据库名',
	'tablepre' => '数据表前缀',

	'ucfounderpw' => '创始人密码',
	'ucfounderpw2' => '重复创始人密码',

	'init_log' => '初始化记录',
	'clear_dir' => '清空目录',
	'select_db' => '选择数据库',
	'create_table' => '建立数据表',
	'succeed' => '成功',
	'failed' => '失败',

	'init_table_data' => '正在初始化数据表中的数据',
	'install_data' => '正在安装数据',
	'install_test_data' => '正在安装附加数据',

	'method_undefined' => '未定义方法',
	'database_nonexistence' => '数据库操作对象不存在',
	'skip_current' => '跳过本步',
	'topic' => '专题',
	'install_finish' => '您的论坛已完成安装，点此访问',

);

$msglang = array(
	'config_nonexistence' => '您的 config.inc.php 不存在, 无法继续安装, 请用 FTP 将该文件上传后再试。',
);

?>