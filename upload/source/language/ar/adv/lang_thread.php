<?php

/**---
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_thread.php by Valery Votintsev at sources.ru
 *      Arabic by Khalid El-Nahhal, http://www.ar-discuz.org
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'thread_name'			=> 'إعلان داخل محتوى المواضيع',//'论坛/群组 帖内广告',
	'thread_desc'			=> 'Display the Adv at top, bottom, or right of post content. In general, you can use a text or suitable images. In global settings you can modify the other settings such as a number of ads per quote.',//'展现方式: 帖内广告显示于帖子内容的上方、下方或右方，帖子内容的上方和下方通常使用文字的形式，帖子内容右方通常使用图片的形式。当前页面有多个帖内广告时，系统会从中抽取与每页帖数相等的条目进行随机显示。您可以在 全局设置中的其他设置中修改每帖显示的广告数量。<br />价值分析: 由于帖子是论坛最核心的组成部分，嵌入帖子内容内部的帖内广告，便可在用户浏览帖子内容时自然的被接受，加上随机播放的特性，适合于特定内容的有效推广，也可用于论坛自身的宣传和公告之用。建议设置多条帖内广告以实现广告内容的差异化，从而吸引更多访问者的注意力。',
	'thread_fids'			=> 'المنتديات المقصودة',//'投放版块',
	'thread_fids_comment'		=> 'حدد المنتديات التي سيظهر فيها الإعلان',//'设置广告投放的论坛版块，当广告投放范围中包含“论坛”时有效',
	'thread_groups'			=> 'المجموعات المقصودة',//'投放群组分类',
	'thread_groups_comment'		=> 'حدد المجموعات التي سوف تظهر فيها الإعلانات. Take effect only when ads included in the scope of &quot;group&quot;.',//'设置广告投放的群组分类，当广告投放范围中包含“群组”时有效',
	'thread_position'		=> 'موقع الإعلان',//'投放位置',
	'thread_position_comment'	=> 'الإعلان النصي مناسب في الموقعي الاسفل والأعلى, أما إعلان الصور أو الفلاش فمن المستحسن أن تكون في الجهة اليسرى. من الممكن عرض أكثر من إعلان نصي في آن واحد',//'帖子内容上方和下方的广告适合使用文字形式，而帖子右侧广告适合使用图片或 Flash 形式，也可以同时显示多条文字广告',
	'thread_position_bottom'	=> 'الاسفل',//'帖子下方',
	'thread_position_top'		=> 'الاعلى',//'帖子上方',
	'thread_position_right'		=> 'يسار',//'帖子右侧',
	'thread_pnumber'		=> 'أرقام مشاركات محددة',//'广告显示楼层',
	'thread_pnumber_comment'	=> 'حدد #1 #2 #3 ... إستخدم زر CTRL للمتعدد.',//'选项 #1 #2 #3 ... 表示帖子楼层，可以按住 CTRL 多选',
	'thread_pnumber_all'		=> 'الكل',//'全部',
);

