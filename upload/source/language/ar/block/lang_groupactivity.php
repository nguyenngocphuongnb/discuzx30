<?php

/**---
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_groupactivity.php by Valery Votintsev at sources.ru
 *      Arabic by Khalid El-Nahhal, http://www.ar-discuz.org
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'groupactivity_fids'			=> 'أرقام مجموعات محددة',//'制定群组',
	'groupactivity_fids_comment'		=> 'إستخدم "," للفصل بين أرقام المجموعات',//'指定群组，多个ID之间请用半角逗号“,”隔开。',
	'groupactivity_gtids'			=> 'أقسام المجموعات',//'群组分类',
	'groupactivity_gtids_comment'		=> 'Set the category of group, use CTRL to select groups',//'设置群组所在分类，可以按住 CTRL 多选，全选或全不选均为不做限制',
	'groupactivity_uids'			=> 'أرقام الكتاب',//'发起者UID',
	'groupactivity_uids_comment'		=> 'Set the author UID, use "," to seperate UIDs.',//'设置活动发起人UID ，多个 UID 请用半角逗号“,”隔开。',
	'groupactivity_startrow'		=> 'صف البدء',//'起始数据行数',
	'groupactivity_startrow_comment'	=> 'إذا كنت بحاجة لتعيين صف البدء,الرجاء إدخال الرقم, 0 هو الصف الأول',//'如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'groupactivity_items'			=> 'الصفوف',//'显示数据条数',
	'groupactivity_items_comment'		=> 'حدد عدد الصفوف التي تريد عرضها , يجب أن تكون أكبر من 0',//'设置一次显示的主题条目数，请设置为大于 0 的整数',
	'groupactivity_titlelength'		=> 'طول العنوان',//'标题最大字节数',
	'groupactivity_titlelength_comment'	=> 'حدد الحد الأقصى من طول العنوان , إذا كان العنوان أكبر من القيمة سيتم قصه تلقائي , ضع 0 لتعطيل الخاصية',//'设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'groupactivity_fnamelength'		=> 'طول عنوان المنتدى',//'标题最大字节数包含版块名称',
	'groupactivity_fnamelength_comment'	=> 'تعيين الحد الأقصى من طول عنوان المنتدى',//'设置标题长度是否将所在版块名称的长度一同计算在内',
	'groupactivity_summarylength'		=> 'طول الملخص',//'主题简短内容文字数',
	'groupactivity_summarylength_comment'	=> 'تعيين مول عنوان الملخص , إستعمل القيمة 0 لإستخدام القيمة الافتراضية وهي (255)',//'设置主题简短内容的文字数，0 为使用默认值 255',
	'groupactivity_tids'			=> 'أرقام مواضيع محددة',//'指定主题',
	'groupactivity_tids_comment'		=> 'Set the specified threads tid you want to display, use "," to seperate tids',//'设置要指定显示的主题 tid ，多个 tid 请用半角逗号“,”隔开。注意: 留空为不进行任何过滤',
	'groupactivity_keyword'			=> 'الكلمات الدلالية',//'标题关键字',
	'groupactivity_keyword_comment'		=> 'تعيين الكلمات الدلالية المستخدمة.<br />يمكنك إستعمال "*"  في الكلمات الدلالية.<br />إذا كنت تريد أن تستخدم بعض الكلمات الدلالية في نفس الوقت, يمكنك إستعمال  "AND". مثال : win32 AND unix.<br />إذا كنت تريد أن تستخدم كلمة واحدة من الكلمات الدلالية يمكنك إستعمال "|" أو "OR".مثال : win32 OR unix',//'设置标题包含的关键字。注意: 留空为不进行任何过滤<br />关键字中可使用通配符 "*"<br />匹配多个关键字全部，可用空格或 "AND" 连接。如 win32 AND unix<br />匹配多个关键字其中部分，可用 "|" 或 "OR" 连接。如 win32 OR unix',
	'groupactivity_typeids'			=> 'أنواع المواضيع',//'主题分类',
	'groupactivity_typeids_comment'		=> 'حدد أنواع خاصة من المواضيع . ملاحظة : حدد الكل أو لا تحدد الكل لتعطيل التصفية',//'设置特定分类的主题。注意: 全选或全不选均为不进行任何过滤',
	'groupactivity_typeids_all'		=> 'كل أنواع المواضيع',//'全部的主题分类',
	'groupactivity_sortids'			=> 'الترتيب (الأقسام?)',//'分类信息',
	'groupactivity_sortids_comment'		=> 'Set the thread classification. Note: Select All or None for disable filtering',//'设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'groupactivity_sortids_all'		=> 'كل الأقسام',//'全部的分类信息',
	'groupactivity_digest'			=> 'تصفية المميز',//'精华主题过滤',
	'groupactivity_digest_comment'		=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'groupactivity_digest_0'		=> 'موضوع عادي',//'普通主题',
	'groupactivity_digest_1'		=> 'مميز 1',//'精华 I',
	'groupactivity_digest_2'		=> 'مميز 2',//'精华 II',
	'groupactivity_digest_3'		=> 'مميز 3',//'精华 III',
	'groupactivity_stick'			=> 'تصفية التثبيت',//'置顶主题过滤',
	'groupactivity_stick_comment'		=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'groupactivity_stick_0'			=> 'موضوع عادي',//'普通主题',
	'groupactivity_stick_1'			=> 'تثبيت 1 ',//'置顶 I',
	'groupactivity_stick_2'			=> 'تثبيت 2',//'置顶 II',
	'groupactivity_stick_3'			=> 'تثبيت 3',//'置顶 III',
	'groupactivity_special'			=> 'تصفية حسب المواضيع الخاصة',//'特殊主题过滤',
	'groupactivity_special_comment'		=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'groupactivity_special_1'		=> 'موضوع إستطلاع',//'投票主题',
	'groupactivity_special_2'		=> 'موضوع تجارة/منتج',//'商品主题',
	'groupactivity_special_3'		=> 'موضوع طلب',//'悬赏主题',
	'groupactivity_special_4'		=> 'موضوع فعالية',//'活动主题',
	'groupactivity_special_5'		=> 'موضوع تحدي',//'辩论主题',
	'groupactivity_special_0'		=> 'موضوع عادي',//'普通主题',
	'groupactivity_special_reward'		=> 'تصفية حسب الطلب',//'悬赏主题过滤',
	'groupactivity_special_reward_comment'	=> 'حدد حالة الطلب',//'设置特定类型的悬赏主题',
	'groupactivity_special_reward_0'	=> 'الكل',//'全部',
	'groupactivity_special_reward_1'	=> 'منتهي',//'已解决',
	'groupactivity_special_reward_2'	=> 'نشيط',//'未解决',
	'groupactivity_recommend'		=> 'Recommended thread filter',//'推荐主题过滤',
	'groupactivity_recommend_comment'	=> 'Display only recommended threads',//'设置是否只显示推荐的主题',
	'groupactivity_orderby'			=> 'ترتيب حسب',//'主题排序方式',
	'groupactivity_orderby_comment'		=> 'Set the ordering of threads',//'设置以哪一字段或方式对主题进行排序',
	'groupactivity_orderby_lastpost'	=> 'آخر مشاركة',//'按最后回复时间倒序排序',
	'groupactivity_orderby_dateline'	=> 'وقت البدء',//'按发布时间倒序排序',
	'groupactivity_orderby_replies'		=> 'الردود',//'按回复数倒序排序',
	'groupactivity_orderby_views'		=> 'المشاهادت',//'按浏览次数倒序排序',
	'groupactivity_orderby_heats'		=> 'النشاط',//'按热度倒序排序',
	'groupactivity_orderby_recommends'	=> 'الإستحسان',//'按主题评价倒序排序',
	'groupactivity_orderby_hourviews'	=> 'Views within the specified time',//'按指定时间内浏览次数倒序排序',
	'groupactivity_orderby_todayviews'	=> 'مشاهادت اليوم',//'按当天浏览次数倒序排序',
	'groupactivity_orderby_weekviews'	=> 'مشاهدات الاسبوع الماضي',//'按本周浏览次数倒序排序',
	'groupactivity_orderby_monthviews'	=> 'مشاهادت الشهر الماضي',//'按当月浏览次数倒序排序',
	'groupactivity_orderby_hours'		=> 'Select time (hours)',//'指定时间(小时)',
	'groupactivity_orderby_hours_comment'	=> 'Set the specific time of views in',//'指定时间内浏览次数倒序排序的时间值',
	'groupactivity_orderby_todayhots'	=> 'Hots today',//'按当天累计售出数倒序排序',
	'groupactivity_orderby_weekhots'	=> 'Hots last week',//'按本周累计售出数倒序排序',
	'groupactivity_orderby_monthhots'	=> 'Hots last month',//'按当月累计售出数倒序排序',
	'groupactivity_price_add'		=> ' اضافي ',//' 附加 ',
	'groupactivity_place'			=> 'الامكنة',//'活动地点',
	'groupactivity_class'			=> 'النوع',//'活动类型',
	'groupactivity_class_all'		=> 'كل الأنواع',//'所有类型',
	'groupactivity_gender'			=> 'الجنس',//'性别要求',
	'groupactivity_gender_0'		=> 'الكل',//'不限',
	'groupactivity_gender_1'		=> 'ذكر',//'男',
	'groupactivity_gender_2'		=> 'أنثى',//'女',
	'groupactivity_orderby_weekstart'	=> 'بدء منذ أسبوع',//'按一周内活动开始时间排序',
	'groupactivity_orderby_monthstart'	=> 'بدء منذ شهر',//'按一月内活动开始时间排序',
	'groupactivity_orderby_weekexp'		=> 'إنتهى منذ أسبوع',//'按一周内报名截止时间排序',
	'groupactivity_orderby_monthexp'	=> 'إنتهى منذ شهر',//'按一月内报名截止时间排序',
	'groupactivity_gviewperm'		=> 'عرض صلاحيات المجموعة',//'群组浏览权限',
	'groupactivity_gviewperm_nolimit'	=> 'بدون قيود',//'不限制',
	'groupactivity_gviewperm_only_member'	=> 'الأعضاء فقط',//'仅成员',
	'groupactivity_gviewperm_all_member'	=> 'الكل',//'所有人',
	'groupactivity_highlight'		=> 'تسليط الضوء على القيمة التي تم الحصول عليها',
);

