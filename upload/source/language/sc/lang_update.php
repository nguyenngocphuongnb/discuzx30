<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_update.php by Valery Votintsev at sources.ru
 */

$lang = array(

//===========================
// Main Update Procedure
//---------------------------
//utility/update.php

	'del_update_lock'		=> '请您先登录服务器ftp,手工删除 ./data/update.lock 文件,再次运行本文件进行升级.',//'You must first log in to the server by ftp, manually delete the ./data/update.lock file and then restart this page.',
	'sql_file'			=> 'SQL文件 ',//'SQL file ',
	'does_not_exist'		=> ' 不存在',//' does not exist',
	'table_delete_completed'	=> '删除表和字段操作完成了',//'Deleting the table and the fields is completed',
	'close_before_update'		=> '请先关闭站点再执行此升级操作',//'Please close access to the site before performing this upgrade',
	'ucenter160update'		=> '请先升级UCenter到1.6.0以上版本。<br>如果使用为Discuz! X自带UCenter，请先运行uc_server/upgrade/upgrade3.php进行升级',//'Please upgrade your UCenter to 1.6.0 or later.<br>If you use the Discuz!X comes with UCenter, please upgrade UCenter by running the uc_server/upgrade/upgrade3.php',
	'db_will_upgrade'		=> '说明：<br>本升级程序会参照最新的SQL文件,对数据库进行同步升级.',//'<b>Note:</b><br>&nbsp;&nbsp;&nbsp;The update program will take into account the latest SQL file for synchronization of database upgrade.<br>',
	'check_latest_version'		=> '请确保当前目录下 ./data/install.sql 文件为最新版本.',//'Make sure the current ./data/install.sql file is for the latest version!',
	'check_plugins'			=> '升级完成后会关闭所有插件以确保正常运行，请站长逐个开启每一个插件检测是否兼容新版本。',//'After the upgrade is completed, turn off all the plug-ins to ensure the site is work properly. Only after this open plugins one by one for detect if each plug-in is compatible with a new version.',
	'upgade_start'			=> '准备完毕,升级开始',//'Ready, start the upgrade',
	'contacts'			=> ' 联系方式:',//' Contacts: ',
	'ready_to_db_upgrade'		=> '准备完毕,进入下一步数据库结构升级',//'Ready, the next step will upgrade the database structure',
	'sql_empty'			=> 'SQL文件内容为空,请确认',//'SQL file is empty, make sure',
	'db_structure_upgraded'		=> '数据库结构升级完毕,进入下一步数据升级操作',//'The database structure upgrade is completed, enter to update the next data',
	'add_table'			=> '添加表 ',//'Add table ',
	'sql_error'			=> ' 出错,请手工执行以下SQL语句后,再重新运行本升级程序',//' Error. Please manually execute the following SQL statement, and then re-run the upgrade program',
//	'sql_error'			=> '出错,请手工执行以下升级语句后,再重新运行本升级程序',//' Error. Please perform the following update statement by hand, then re-run the upgrade program',
	'completed'			=> '完成',//' completed',
	'upgrade_table'			=> '升级表 ',//'Upgrade table ',
	'table_rename'			=> '表改名 ',//'Rename Table ',
	'sql_statement'			=> '升级SQL语句',//'Upgrading SQL statement',
	'check_table'			=> '检查表 ',//'Check table ',
	'skip_table'			=> ' 完成,不需升级,跳过',//' completed, without upgrading, skipped',
	'real_names_updated'		=> '实名功能升级完毕',//'Real name feature upgraded',
	'real_name'			=> '真实姓名',//'Real name',
	'real_name_progress'		=> '实名功能升级中',//'Real names upgrading progress:',
	'users_updated'			=> '用户栏目升级完毕',//'User section upgrade finished',
	'recommended_webmaster'		=> '站长推荐',//'Recommended by webmaster',
	'article_tags'			=>  array (
					    1 => '原创',//'Original',
					    2 => '热点',//'Hot',
					    3 => '组图',//'Photos',
					    4 => '爆料',//'Broken News',
					    5 => '头条',//'Headline',
					    6 => '幻灯',//'Slideshow',
					    7 => '滚动',//'Scroll',
					    8 => '推荐',//'Recommended',
					    ),
	'anonymous'			=> '匿名',//'Anonymous',
	'politics'			=> '政治',//'Politics',
	'advertising'			=> '广告',//'Advertising',
	'userreasons'			=> '很给力!\r\n神马都是浮云\r\n赞一个!\r\n山寨\r\n淡定',//'Powerfull!\r\nUsefull\r\nVery nice!\r\nThe best!\r\nInteresting',
	'plugin_center'			=> 'Discuz! 扩展中心',//'Discuz! Plugin Center',
	'plugin_forum'			=> 'Discuz! 扩展中心最新的论坛插件',//'Discuz! Plugin Forum',
	'settings_updated'		=> '配置项升级完成',//'Configuration, Settings upgrade is completed',
	'group_setting_updated'		=> '管理组设置升级完成',//'Group Settings upgrade is completed',
	'clean_feeds'			=> '清理过期动态',//'Clean up expired feeds',
	'cron_completed'		=> '计划任务升级完成',//'Cron tasks update completed',
	'color_card'			=> '变色卡',//'Colorizer',
	'color_card_descr'		=> '可以将帖子或日志的标题高亮，变更颜色',//'You can highlight (change color) a thread or blog title',
	'visitor_card'			=> '显身卡',//'Discover card',
	'visitor_card_descr'		=> '可以查看一次匿名用户的真实身份。',//'You can see a real identity of an anonymous user.',
	'anonymous_card'		=> '匿名卡',//'Anonymous card',
	'anonymous_card_descr'		=> '在指定的地方，让自己的名字显示为匿名。',//'Show your name as Anonymous in designated areas.',
	'apps_completed'		=> '漫游应用统计升级完成',//'Application Statistics upgrade is completed',
	'navigation_completed'		=> '导航数据升级完成',//'Navigation data upgrade is completed',
	'group_status_completed'	=> '版块状态升级完毕',//'Group Status Upgrade is completed',
	'recommendations_completed'	=> '回帖推荐升级完毕',//'Recommendations upgrade is completed',
	'users_completed'		=> '用户升级完毕',//'Users upgrade is completed',
	'daylogin'			=> '每天登录',//'Daily login',
	'portalcomment'			=> '文章评论',//'Comment Article',
	'points_rules_completed'	=> '积分规则升级完毕',//'Points Rules upgrade is completed',
	'custom_bbcode_completed'	=> '自定义代码权限升级完毕',//'Custom BBCode permissions upgrade is completed',
	'edited_by'			=> '编辑采用',//'Edited',
	'stamps_completed'		=> '鉴定图章升级完毕',//'Thread Stamps upgrade is completed',
	'perms_updated'			=> '模块缩略图权限升级完毕',//'Permission icons update is completed',
	'block_permissions_completed'	=> '模块权限升级完毕',//'Block Permissions upgrade is completed',
	'portal_completed'		=> '门户频道权限升级完毕',//'Portal channel permissions Upgrade Complete',
	'articles_updated'		=> '文章评论升级完毕',//'Article upgrade completed',
	'article_comments_completed'	=> '文章封面图升级完毕',//'Article comments upgrade completed',
	'blocks_completed'		=> '模块模板升级完毕',//'Block templates upgrade completed',
	'scripts_completed'		=> '模块脚本升级完毕',//'Block scripts upgrade completed',
	'group_permissions_completed'	=> '用户组权限升级完毕',//'User group permissions upgrade is completed',
	'group_home_completed'		=> '群组首页升级完毕',//'Group Home upgrade is completed',
	'domains_completed'		=> '域名设置升级完毕',//'Domain Settings upgrade is completed',
	'new_pm_completed'		=> '新短消息状态重置完毕',//'New short message status reset completed',
	'view_img_completed'		=> '查看图片权限升级完毕',//'View image rights upgrade completed',
	'realname_verify'		=> '实名认证升级中',//'Real name verification',
	'video_verify'			=> '视频认证',//'Video verification',
	'real_name_verification'	=> '实名认证升级中',//'Real name verification',
	'real_name_verification_completed'	=> '认证数据升级完毕',//'Real name verification data upgrade is completed',
	'attachment_upgrade'		=> '论坛附件表升级中 ... ',//'Forum attachment table upgrading ... ',
	'attachment_upgraded'		=> '论坛附件表升级完毕',//'Forum attachment table upgrade comleted.',
	'topic_image_skip'		=> '主题图片表无法处理，跳过',//'Can not process the thread image table, skipped.',
	'topic_image_upgraded'		=> '主题图片表处理完毕',//'Thread images upgraded',
	'topic_image_upgrade'		=> '主题图片表处理中 ... ',//'Thread images upgrading ... ',
	'verify_updated'		=> '审核数据升级完毕',//'Verification data upgrade completed.',
	'founder_updated'		=> '创始人数据升级完毕',//'Founder Data Upgrade completed',
	'plugins_updated'		=> '插件语言包数据升级完毕',//'Plug-in language pack data upgraded.',
	'config_default_lost'		=> 'config_global_default.php was lost, please reupload this file.',//'config_global_default.php was not found, please reupload this file.',
	'data_processing_completed'	=> '数据处理完成',//'Data processing is completed',
	'config_not_writable'		=> '"config/config_global.php" 文件已更新,由于 "config/" 目录不可写入,我们已将更新的文件保存到 "data/" 目录下,请通过 FTP 软件将其转移到 "config/" 目录下覆盖源文件.',//'"config/config_global.php" file is updated, the "config/" directory is not writable, we have saved the updated file to the "data/" directory, please use FTP software to transfer it to the "config/" directory overwriting the existing file.',
	'config_continue'		=> '当您完成上述操作后点击这里继续',//'After completion of this operation click here to continue',
	'data_delete_next'		=> '数据删除不处理,进入下一步',//'Data Deletion completed, go to the next step',
	'tables_unused'			=> '以下 <strong>数据表</strong> 与标准数据库相比是多余的:<br>您可以根据需要自行决定是否删除',//'<strong>The following data tables</strong> are unused after comparing with the standard database:<br>decide whether to delete it if required',
	'index'				=> '索引',//'Index',
	'field'				=> '字段',//'Field',
	'fields_unused'			=> '以下 <strong>字段</strong> 与标准数据库相比是多余的:<br>您可以根据需要自行决定是否删除',//'<strong>The following fields</strong> are unused after comparing with the standard database:<br>decide whether to delete it if required',
	'tables_fields_no_unused'	=> '与标准数据库相比,没有需要删除的数据表和字段',//'Compared with the standard database, there is no unused data tables and fields need to be deleted',
	'click_next_step'		=> '请点击进入下一步',//'Click for go to the next step',
	'submit_delete'			=> '提交删除',//'Submit for delete',
	'ignore_unused'			=> '您也可以忽略多余的表和字段',//'You can also ignore the extra tables and fields',
	'next_step_directly'		=> '直接进入下一步',//'Go to the next step directly',
	'default_style_restore_sure'	=> '请确认是否要恢复默认风格？',//'Please confirm whether you want to restore the default style?',
	'yes'				=> '是',//'Yes',
	'no'				=> '否',//'No',
	'default_style_restored'	=> '默认风格已恢复,进入下一步',//'The default style was restored, go to the next step',
	'cache_update'			=> '缓存更新中，请稍候 ...',//'Cache update, please wait ...',
	'database_updated'		=> '恭喜，数据库结构升级完成！为了数据安全，请删除本文件。',//'Congratulations! The database structure upgrade is completed!<br>For data security, delete the file update.php !.',
	'jump_to'			=> '跳转中...',//'Jump to ...',
	'database_update'		=> '数据库升级程序',//'Database upgrade process',
	'database_update_tool'		=> '数据库升级工具',//'Database upgrade tool',
	'update_start'			=> '升级开始',//'Update start',
	'database_update_structure'	=> '数据库结构添加与更新',//'Update the Database',
	'data_update'			=> '数据更新',//'Update the Data',
	'database_delete_structure'	=> '数据库结构删除',//'Delete unused data',
	'update_completed'		=> '升级完成',//'Update Completed',
	'reports_completed'		=> '举报升级完成',//'Reports upgrade is completed',
	'magics_updated'		=> '道具升级完成',//'Magics upgrade is completed',
	'birthday'			=> '出生日期',//'Birthday',
//-----------------------------------------------------------------------------
// Added in X2.5:
	'table_optimize'	=> '优化数据表',//'Optimize table',
	'close_wait'		=> '您的站点未关闭，正在关闭，请稍后...',//'Your site is not closed, is being closed, please wait...',
	'length'		=> '[时长]',//'[Length]',
	'status'		=> '[状态]',//'[Status]',
	'info'			=> '[信息]',//'[Info]',
	'next_step_wait'	=> '准备进入下一步操作，请稍后...',//'Ready to enter the next step, please wait...',
	'upgrade_wait'		=> '正在升级数据，请稍后...',//'Is being upgraded, please wait...',
//	'ready_to_db_upgrade'	=> '准备完毕，进入下一步数据库结构升级',//'Ready to enter the next step: upgrade the database structure',
	'patches_dayly'		=> '每日获取安全补丁',//'Security patches daily access',
	'regular_publish'	=> '定时发布主题',//'Regular published topics',
	'archive_weekly'	=> '每周广播归档',//'Weekly broadcast archive',
	'updates_daily'		=> '更新每日查看数',//'Number of daily update checks',
	'users_daily'		=> '每日用户表优化',//'Daily user table optimization',
	'collection_follow'	=> '淘专辑被订阅',//'Collection followed rule (Taobao album subscription)',
	'new_post'		=> '新人帖',//'New posts',
	'moderated_completed'	=> '审核数据转换完毕',//'Moderated data conversion is completed',
	'medal_completed'	=> '用户勋章数据升级完毕',//'User Medal data upgrade is completed',
	'data_update_completed'	=> '数据升级结束',//'Data update is completed',
	'group_stat_completed'	=> '论坛版块统计数据升级完毕',//'Forum Group statistics upgrade is completed',
//-----------------------------------------------------------------------------
// Added in X3.0:
/*!*/	'cron_todayheats_daily'	=> '统计今日热帖',//'Count today hot posts daily',
/*!*/	'hot_posts_completed'	=> '热帖处理完毕',//'Hot posts updated',
/*!*/	'reminder_update_completed'	=> '提醒数据升级完毕',//'Remind data upgrade finished',
/*!*/	'layout_update_completed'	=> '布局方案设置升级完毕',//'Layout settings upgrade finished',
/*!*/	'processed_from'	=> '正在处理从 ',//'Being processed from ',
/*!*/	'starting_from'		=> ' 开始 ',//' starting from ',
/*!*/	'popular_posts'		=> '的热帖',//'popular posts',
//To lang_template:
/*!*/	'default_layout'	=> '默认方案',//'Default layout',
/*!*/	'qq_bbcode_description'	=> '显示 QQ 在线状态，点这个图标可以和他（她）聊天',//'QQ online status, points icon and his/her chat',
/*!*/	'qq_enter'		=> '请输入 QQ 号码',//'Please enter the QQ number',
/*!*/	'qq_onlne_status'	=> '设置QQ在线状态',//'Set QQ online status',
/*!*/	'open_soso'		=> '<br><br>友情提示：<br>为更好的降低论坛搜索时的数据压力，本次升级已经帮本站开通纵横搜索服务。<br>你可以在',
/*!*/	'open_soso_link'	=> '站点后台-&gt;云平台-&gt;纵横搜索 进行管理',

);
