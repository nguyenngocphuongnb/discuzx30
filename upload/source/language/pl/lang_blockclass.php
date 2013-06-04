<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_blockclass.php by Valery Votintsev at sources.ru
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array(
	'blockclass_html'			=> 'Display type',//'展示类',

	'blockclass_html_html'			=> 'Static HTML',//'静态模块',
	'blockclass_html_script_blank'		=> 'Custom HTML',//'自定义HTML',
	'blockclass_html_script_search'		=> 'Article Search',//'搜索条',
	'blockclass_html_script_line'		=> 'Pozioma linia',//'分割线',
	'blockclass_html_script_banner'		=> 'Banner',//'图片横幅',
	'blockclass_html_script_vedio'		=> 'Film',//'网络视频',
	'blockclass_html_script_stat'		=> 'Statystyki',//'数据统计',
	'blockclass_html_script_forumtree'	=> 'Lista forów',//'版块列表',
	'blockclass_html_script_google'		=> 'Google',
	'blockclass_html_script_adv'		=> 'Site Advertising',//'站点广告',
	'blockclass_html_script_friendlink'	=> 'Linki znajomych',//'友情链接',
	'blockclass_html_script_sort'		=> 'Script types(order?)',//'分类信息',
	'blockclass_html_script_category'	=> 'Script Category',//'分类信息',

	'blockclass_html_announcement'			=> 'Ogłoszenie',//'公告模块',
	'blockclass_announcement_field_url'		=> 'URL',//'公告链接',
	'blockclass_announcement_field_title'		=> 'Tytuł',//'公告标题',
	'blockclass_announcement_field_summary'		=> 'Streszczenie',//'公告内容',
	'blockclass_announcement_field_starttime'	=> 'Data rozpoczęcia',//'开始时间',
	'blockclass_announcement_field_endtime'		=> 'Data zakończenia',//'结束时间',
	'blockclass_announcement_script_announcement'	=> 'Ogłoszenia',//'站点公告',

	'blockclass_html_myapp'			=> 'Aplikacje',//'漫游模块',
	'blockclass_myapp_field_url'		=> 'URL',//'应用链接',
	'blockclass_myapp_field_title'		=> 'Name',//'应用名称',
	'blockclass_myapp_field_icon'		=> 'Icon',//'应用图标',
	'blockclass_myapp_field_icon_small'	=> 'Small Icon',//'应用图标(小)',
	'blockclass_myapp_field_icon_abouts'	=> 'Application icon',//'应用图标(大图)',
	'blockclass_myapp_script_myapp'		=> 'Apps',//'漫游应用',

	'blockclass_forum'			=> 'Forum',//'论坛类',

	'blockclass_forum_thread'			=> 'Thread',//'帖子模块',
	'blockclass_thread_field_url'			=> 'URL',//'帖子URL',
	'blockclass_thread_field_title'			=> 'Title',//'帖子标题',
	'blockclass_thread_field_pic'			=> 'Image',//'附件图片',
	'blockclass_thread_field_summary'		=> 'Summary',//'帖子内容',
	'blockclass_thread_field_author'		=> 'Autor',//'楼主',
	'blockclass_thread_field_authorid'		=> 'Author UID',//'楼主UID',
	'blockclass_thread_field_avatar'		=> 'Author Avatar',//'楼主头像',
	'blockclass_thread_field_avatar_middle'		=> 'Author Middle Avatar',//'楼主头像(中)',
	'blockclass_thread_field_avatar_big'		=> 'Author Big Avatar',//'楼主头像(大)',
//REMOVED	'blockclass_thread_field_icon'			=> 'Icon',//'帖子图标',
	'blockclass_thread_field_forumurl'		=> 'Forum URL',//'版块URL',
	'blockclass_thread_field_forumname'		=> 'Forum name',//'版块名称',
	'blockclass_thread_field_typename'		=> 'Data Type Name',//'主题分类名称',
	'blockclass_thread_field_typeicon'		=> 'Data Type Icon',//'主题分类图标',
	'blockclass_thread_field_typeurl'		=> 'Category URL',//'主题分类URL',
	'blockclass_thread_field_sortname'		=> 'Category Name',//'分类信息名称',
	'blockclass_thread_field_sorturl'		=> 'Category URL',//'分类信息URL',
	'blockclass_thread_field_posts'			=> 'Postów',//'总发帖数',
	'blockclass_thread_field_todayposts'		=> 'Today Posts',//'今日发帖数',
	'blockclass_thread_field_lastpost'		=> 'Last Post',//'最后回复时间',
	'blockclass_thread_field_dateline'		=> 'Post Time',//'发帖时间',
	'blockclass_thread_field_replies'		=> 'Replies',//'回复数',
	'blockclass_thread_field_views'			=> 'Views',//'总浏览数',
	'blockclass_thread_field_heats'			=> 'Hot',//'热度值',
	'blockclass_thread_field_recommends'		=> 'Recommends',//'推荐数',
	'blockclass_thread_field_hourviews'		=> 'Views in hour',//'小时浏览数',
	'blockclass_thread_field_todayviews'		=> 'Views today',//'今日浏览数',
	'blockclass_thread_field_weekviews'		=> 'Views in week',//'本周浏览数',
	'blockclass_thread_field_monthviews'		=> 'Views in month',//'本月浏览数',
	'blockclass_thread_script_threaddigest'		=> 'Digests',//'精华帖',
	'blockclass_thread_script_threadhot'		=> 'Hot threads',//'热门帖',
	'blockclass_thread_script_threadstick'		=> 'Przyklej temat',//'置顶帖',
	'blockclass_thread_script_threadspecial'	=> 'Speical threads',//'特殊主题帖',
	'blockclass_thread_script_threadnew'		=> 'Latest threads',//'最新帖',
	'blockclass_thread_script_threadspecified'	=> 'Specified threads',//'指定帖子',
	'blockclass_thread_script_thread'		=> 'Customize',//'高级自定义',

	'blockclass_forum_forum'			=> 'Forum',//'版块模块',
	'blockclass_forum_field_title'			=> 'Title',//'版块名称',
	'blockclass_forum_field_url'			=> 'URL',//'版块链接',
	'blockclass_forum_field_summary'		=> 'Summary',//'版块介绍',
	'blockclass_forum_field_icon'			=> 'Icon',//'版块图标',
	'blockclass_forum_field_posts'			=> 'Postów',//'版块帖子数',
	'blockclass_forum_field_threads'		=> 'Tematów',//'版块话题数',
	'blockclass_forum_field_todayposts'		=> 'Posts today',//'版块今日新帖数',
	'blockclass_forum_script_forum'			=> 'SubForums(?)',//'论坛版块',

	'blockclass_sort_sort'			=> 'Kategoria',//'分类信息',
	'blockclass_sort_field_title'		=> 'Title',//'帖子名称',
	'blockclass_sort_field_url'		=> 'URL',//'帖子链接',
	'blockclass_sort_field_summary'		=> 'Summary',//'帖子介绍',
	'blockclass_sort_script_sort'		=> 'Customize',//'高级自定义',

	'blockclass_forum_trade'		=> 'Product Forum',//'商品模块',
	'blockclass_trade_trade'		=> 'Products',//'商品模块',
	'blockclass_trade_field_title'		=> 'Product name',//'商品名称',
	'blockclass_trade_field_url'		=> 'URL',//'商品链接',
	'blockclass_trade_field_summary'	=> 'Summary',//'商品说明',
	'blockclass_trade_field_pic'		=> 'Image',//'商品图片地址',
	'blockclass_trade_field_totalitems'	=> 'In stock',//'商品累计售出数',
	'blockclass_trade_field_author'		=> 'Seller',//'商品卖家',
	'blockclass_trade_field_authorid'	=> 'Seller UID',//'商品卖家UID',
	'blockclass_trade_field_price'		=> 'Price',//'商品价格',
	'blockclass_trade_script_tradenew'	=> 'New products',//'新商品',
	'blockclass_trade_script_tradehot'	=> 'Hot Products',//'热门商品',
	'blockclass_trade_script_tradespecified'	=> 'Specified products',//'指定商品',
	'blockclass_trade_script_trade'			=> 'Customize',//'高级自定义',

	'blockclass_forum_activity'		=> 'Event forum',//'活动模块',
	'blockclass_activity_activity'		=> 'Events',//'活动模块',
	'blockclass_activity_field_url'		=> 'URL',//'活动帖URL',
	'blockclass_activity_field_title'	=> 'Title',//'活动标题',
	'blockclass_activity_field_pic'		=> 'Image',//'主题图片',
	'blockclass_activity_field_summary'	=> 'Summary',//'活动介绍',
	'blockclass_activity_field_time'	=> 'Time',//'活动时间',
	'blockclass_activity_field_expiration'	=> 'Expiration',//'报名截止时间',
	'blockclass_activity_field_author'	=> 'Autor',//'发起人',
	'blockclass_activity_field_authorid'	=> 'Author UID',//'发起人UID',
	'blockclass_activity_field_cost'		=> 'Participate cost',//'每人花销',
	'blockclass_activity_field_place'		=> 'Places',//'活动地点',
	'blockclass_activity_field_class'		=> 'Typ',//'活动类型',
	'blockclass_activity_field_gender'		=> 'Gender',//'性别要求',
	'blockclass_activity_field_number'		=> 'Required number',//'需要人数',
	'blockclass_activity_field_applynumber'		=> 'Applied number',//'已报名人数',
	'blockclass_activity_script_activitynew'	=> 'Last events',//'最新活动',
	'blockclass_activity_script_activitycity'	=> 'Same city events',//'同城活动',
	'blockclass_activity_script_activity'		=> 'Customize',//'高级自定义',

	'blockclass_portal'			=> 'Portal',//'门户类',

	'blockclass_portal_article'		=> 'Articles',//'文章模块',
	'blockclass_article_field_url'		=> 'URL',//'文章链接',
	'blockclass_article_field_title'	=> 'Article title',//'文章标题',
	'blockclass_article_field_pic'		=> 'Image',//'文章封面',
	'blockclass_article_field_summary'	=> 'Summary',//'文章简介',
	'blockclass_article_field_dateline'	=> 'Publish time',//'发布时间',
	'blockclass_article_field_uid'		=> 'Author UID',//'作者UID',
	'blockclass_article_field_username'	=> 'Author name',//'作者名',
	'blockclass_article_field_avatar'	=> 'User avatar',//'用户头像',
	'blockclass_article_field_avatar_middle'	=> 'User middle avatar',//'用户头像(中)',
	'blockclass_article_field_avatar_big'		=> 'User large avatar',//'用户头像(大)',
	'blockclass_article_field_caturl'		=> 'Category URL',//'栏目链接',
	'blockclass_article_field_catname'		=> 'Category name',//'栏目名称',
	'blockclass_article_field_viewnum'		=> 'Views',//'查看数',
	'blockclass_article_field_articles'		=> 'Articles',//'文章数',
	'blockclass_article_field_commentnum'		=> 'Comments',//'评论数',
	'blockclass_article_script_articlenew'		=> 'New articles',//'最新文章',
	'blockclass_article_script_articlehot'		=> 'Hot articles',//'热门文章',
	'blockclass_article_script_articlespecified'	=> 'Specified articles',//'指定文章',
	'blockclass_article_script_article'		=> 'Customize',//'高级自定义',

	'blockclass_portal_category'			=> 'Kategoria',//'门户栏目',
	'blockclass_category_field_url'			=> 'URL',//'栏目链接',
	'blockclass_category_field_title'		=> 'Name',//'栏目名称',
	'blockclass_category_field_articles'		=> 'Artykułów',//'文章数',
	'blockclass_category_script_portalcategory'	=> 'Kategoria',//'文章栏目',

	'blockclass_portal_topic'		=> 'Topics',//'专题模块',
	'blockclass_topic_field_url'		=> 'URL',//'专题链接',
	'blockclass_topic_field_title'		=> 'Title',//'专题名称',
	'blockclass_topic_field_pic'		=> 'Topic cover',//'专题封面',
	'blockclass_topic_field_summary'	=> 'Description',//'专题介绍',
	'blockclass_topic_field_uid'		=> 'Author UID',//'创建者UID',
	'blockclass_topic_field_username'	=> 'Autor',//'创建者',
	'blockclass_topic_field_dateline'	=> 'Publish time',//'创建时间',
	'blockclass_topic_field_viewnum'	=> 'Views',//'查看数',
	'blockclass_topic_script_topicnew'	=> 'New topics',//'最新专题',
	'blockclass_topic_script_topichot'	=> 'Hot topics',//'热门专题',
	'blockclass_topic_script_topicspecified'	=> 'Specified topics',//'指定专题',
	'blockclass_topic_script_topic'			=> 'Customize',//'高级自定义',
	'blockclass_member'				=> 'Members',//'会员类',

	'blockclass_member_member'		=> 'Members',//'会员模块',
	'blockclass_member_field_url'		=> 'URL',//'空间链接',
	'blockclass_member_field_title'		=> 'Użytkownik',//'用户名',
	'blockclass_member_field_avatar'	=> 'Avatar',//'用户头像',
	'blockclass_member_field_avatar_middle'	=> 'Middle Avatar',//'用户头像(中)',
	'blockclass_member_field_avatar_big'	=> 'Big Avatar',//'用户头像(大)',
	'blockclass_member_field_credits'	=> 'Number of points',//'积分数',
	'blockclass_member_field_reason'	=> 'Recommended reason',//'推荐原因',
	'blockclass_member_field_unitprice'	=> 'Price for access to a single unit',//'竟价单次访问单价',
	'blockclass_member_field_showcredit'	=> 'Price total points',//'竟价总积分',
	'blockclass_member_field_shownote'	=> 'Price for show notice',//'竟价上榜宣言',
	'blockclass_member_field_extcredits1'	=> 'Extension points 1',//'扩展积分1',
	'blockclass_member_field_extcredits2'	=> 'Extension points 2',//'扩展积分2',
	'blockclass_member_field_extcredits3'	=> 'Extension points 3',//'扩展积分3',
	'blockclass_member_field_extcredits4'	=> 'Extension points 4',//'扩展积分4',
	'blockclass_member_field_extcredits5'	=> 'Extension points 5',//'扩展积分5',
	'blockclass_member_field_extcredits6'	=> 'Extension points 6',//'扩展积分6',
	'blockclass_member_field_extcredits7'	=> 'Extension points 7',//'扩展积分7',
	'blockclass_member_field_extcredits8'	=> 'Extension points 8',//'扩展积分8',
	'blockclass_member_field_gender'	=> 'Gender',//'性别',
	'blockclass_member_field_birthday'	=> 'Birthday',//'出生日期',
	'blockclass_member_field_constellation'	=> 'Constellation',//'星座',
	'blockclass_member_field_zodiac'	=> 'Zodiac',//'生肖',
	'blockclass_member_field_telephone'	=> 'Phone',//'固定电话',
	'blockclass_member_field_mobile'	=> 'Mobile phone',//'手机',
	'blockclass_member_field_idcardtype'	=> 'Card type',//'证件号类型',
	'blockclass_member_field_idcard'	=> 'Card ID',//'证件号',
	'blockclass_member_field_address'	=> 'Address',//'邮寄地址',
	'blockclass_member_field_zipcode'	=> 'Zip code',//'邮编',
	'blockclass_member_field_nationality'	=> 'Nationality',//'国籍',
	'blockclass_member_field_birthcity'	=> 'Birth place',//'出生城市',
	'blockclass_member_field_residecity'		=> 'Reside country',//'居住城市',
	'blockclass_member_field_residedist'		=> 'Reside region',//'居住县',
	'blockclass_member_field_residecommunity'	=> 'Reside city',//'居住小区',
	'blockclass_member_field_residesuite'		=> 'Reside county/village',//'房间',
	'blockclass_member_field_graduateschool'	=> 'School graduated from',//'毕业学校',
	'blockclass_member_field_education'		=> 'Education',//'学历',
	'blockclass_member_field_occupation'		=> 'Occupation',//'职业',
	'blockclass_member_field_company'		=> 'Company',//'公司',
	'blockclass_member_field_position'		=> 'Positon',//'职位',
	'blockclass_member_field_revenue'		=> 'Salary',//'年收入',
	'blockclass_member_field_affectivestatus'	=> 'Emotional category',//'情感状态',
	'blockclass_member_field_lookingfor'		=> 'Looking for',//'交友目的',
	'blockclass_member_field_bloodtype'		=> 'Grupa krwi',//'血型',
	'blockclass_member_field_height'		=> 'Height',//'身高',
	'blockclass_member_field_weight'		=> 'Weight',//'体重',
	'blockclass_member_field_alipay'		=> 'Alipay account',//'支付宝帐号',
	'blockclass_member_field_icq'			=> 'ICQ',//'ICQ号',
	'blockclass_member_field_qq'			=> 'QQ',//'QQ号',
	'blockclass_member_field_yahoo'			=> 'Yahoo',//'YAHOO帐号',
	'blockclass_member_field_msn'			=> 'MSN',//'MSN帐号',
	'blockclass_member_field_taobao'		=> 'Wangwang',//'阿里旺旺帐号',
	'blockclass_member_field_site'			=> 'Personal Space',//'个人主页',
	'blockclass_member_field_bio'			=> 'Self intro',//'自我介绍',
	'blockclass_member_field_interest'		=> 'Zainteresowania',//'兴趣爱好',
	'blockclass_member_field_field1'		=> 'Custom Field 1',//'自定义字段1',
	'blockclass_member_field_field2'		=> 'Custom Field 2',//'自定义字段2',
	'blockclass_member_field_field3'		=> 'Custom Field 3',//'自定义字段3',
	'blockclass_member_field_field4'		=> 'Custom Field 4',//'自定义字段4',
	'blockclass_member_field_field5'		=> 'Custom Field 5',//'自定义字段5',
	'blockclass_member_field_field6'		=> 'Custom Field 6',//'自定义字段6',
	'blockclass_member_field_field7'		=> 'Custom Field 7',//'自定义字段7',
	'blockclass_member_field_field8'		=> 'Custom Field 8',//'自定义字段8',
	'blockclass_member_field_posts'			=> 'Postów',//'发帖数',
	'blockclass_member_field_threads'		=> 'Tematów',//'主题数',
	'blockclass_member_field_digestposts'		=> 'Wykopów',//'精华帖数',
	'blockclass_member_field_regdate'		=> 'Registration date',//'注册时间',
	'blockclass_member_field_hourposts'		=> 'Last hour posts',//'小时发帖数',
	'blockclass_member_field_todayposts'		=> 'Today Posts',//'今日发帖数',
	'blockclass_member_field_weekposts'		=> 'Last week posts',//'本周发帖数',
	'blockclass_member_field_monthposts'		=> 'Last month posts',//'本月发帖数',
	'blockclass_member_script_membernew'		=> 'New members',//'新会员',
	'blockclass_member_script_memberspecial'	=> 'Special Member',//'特殊会员',
	'blockclass_member_script_membercredit'		=> 'Top money',//'积分排行',
	'blockclass_member_script_membershow'		=> 'Top users',//'竞价排行',
	'blockclass_member_script_memberposts'		=> 'Post Rank',//'发帖排行',
	'blockclass_member_script_memberspecified'	=> 'Specified members',//'指定用户',
	'blockclass_member_script_member'		=> 'Customize',//'高级自定义',
	'blockclass_space'				=> 'Space',//'空间类',

	'blockclass_space_doing'		=> 'Aktywność',//'记录模块',
	'blockclass_doing_field_url'		=> 'URL',//'记录链接',
	'blockclass_doing_field_title'		=> 'Title',//'记录内容',
	'blockclass_doing_field_uid'		=> 'User ID',//'用户UID',
	'blockclass_doing_field_username'	=> 'Użytkownik',//'用户名',
	'blockclass_doing_field_avatar'		=> 'Avatar',//'用户头像',
	'blockclass_doing_field_avatar_middle'	=> 'Middle Avatar',//'用户头像(中)',
	'blockclass_doing_field_avatar_big'	=> 'Big Avatar',//'用户头像(大)',
	'blockclass_doing_field_dateline'	=> 'Publish time',//'发布时间',
	'blockclass_doing_field_replynum'	=> 'Replies',//'回复数',
	'blockclass_doing_script_doingnew'	=> 'New Doings',//'最新记录',
	'blockclass_doing_script_doinghot'	=> 'Hot doings',//'热门记录',
	'blockclass_doing_script_doing'		=> 'Customize',//'高级自定义',

	'blockclass_space_blog'			=> 'Blogi',//'日志模块',
	'blockclass_blog_field_url'		=> 'URL',//'日志链接',
	'blockclass_blog_field_title'		=> 'Title',//'日志标题',
	'blockclass_blog_field_pic'		=> 'Image',//'日志图片',
	'blockclass_blog_field_summary'		=> 'Summary',//'日志简介',
	'blockclass_blog_field_dateline'	=> 'Publish time',//'发布时间',
	'blockclass_blog_field_uid'		=> 'Author UID',//'作者UID',
	'blockclass_blog_field_username'	=> 'Autor',//'作者名',
	'blockclass_blog_field_avatar'		=> 'User avatar',//'用户头像',
	'blockclass_blog_field_avatar_middle'	=> 'User middle avatar',//'用户头像(中)',
	'blockclass_blog_field_avatar_big'	=> 'User big avatar',//'用户头像(大)',
	'blockclass_blog_field_replynum'	=> 'Number of Replies',//'评论数',
	'blockclass_blog_field_viewnum'		=> 'Views',//'浏览数',
	'blockclass_blog_field_click1'		=> 'Position item 1',//'表态项1',
	'blockclass_blog_field_click2'		=> 'Position item 2',//'表态项2',
	'blockclass_blog_field_click3'		=> 'Position item 3',//'表态项3',
	'blockclass_blog_field_click4'		=> 'Position item 4',//'表态项4',
	'blockclass_blog_field_click5'		=> 'Position item 5',//'表态项5',
	'blockclass_blog_field_click6'		=> 'Position item 6',//'表态项6',
	'blockclass_blog_field_click7'		=> 'Position item 7',//'表态项7',
	'blockclass_blog_field_click8'		=> 'Position item 8',//'表态项8',
	'blockclass_blog_script_blognew'	=> 'New blogs',//'最新日志',
	'blockclass_blog_script_bloghot'	=> 'Hot blogs',//'热门日志',
	'blockclass_blog_script_blogspecified'	=> 'Specified blogs',//'指定日志',
	'blockclass_blog_script_blog'		=> 'Customize',//'高级自定义',

	'blockclass_space_album'		=> 'Albumy',//'相册模块',
	'blockclass_album_field_url'		=> 'URL',//'相册链接',
	'blockclass_album_field_title'		=> 'Title',//'相册名称',
	'blockclass_album_field_pic'		=> 'Album cover',//'相册封面',
	'blockclass_album_field_dateline'	=> 'Create time',//'创建日期',
	'blockclass_album_field_updatetime'	=> 'Updated',//'更新日期',
	'blockclass_album_field_username'	=> 'Użytkownik',//'用户名',
	'blockclass_album_field_uid'		=> 'User ID',//'用户UID',
	'blockclass_album_field_picnum'		=> 'Images',//'照片数',
	'blockclass_album_script_albumnew'	=> 'New albums',//'最新相册',
	'blockclass_album_script_albumspecified'	=> 'Specified albums',//'指定相册',
	'blockclass_album_script_album'			=> 'Customize',//'高级自定义',

	'blockclass_space_pic'			=> 'Images',//'图片模块',
	'blockclass_pic_field_url'		=> 'URL',//'图片链接',
	'blockclass_pic_field_title'		=> 'Title',//'图片名称',
	'blockclass_pic_field_pic'		=> 'Image',//'图片地址',
	'blockclass_pic_field_summary'		=> 'Description',//'图片说明',
	'blockclass_pic_field_dateline'		=> 'Publish time',//'上传时间',
	'blockclass_pic_field_username'		=> 'Użytkownik',//'用户名',
	'blockclass_pic_field_uid'		=> 'User ID',//'用户UID',
	'blockclass_pic_field_viewnum'		=> 'Views',//'查看数',
	'blockclass_pic_field_click1'		=> 'Position item 1',//'表态项1',
	'blockclass_pic_field_click2'		=> 'Position item 2',//'表态项2',
	'blockclass_pic_field_click3'		=> 'Position item 3',//'表态项3',
	'blockclass_pic_field_click4'		=> 'Position item 4',//'表态项4',
	'blockclass_pic_field_click5'		=> 'Position item 5',//'表态项5',
	'blockclass_pic_field_click6'		=> 'Position item 6',//'表态项6',
	'blockclass_pic_field_click7'		=> 'Position item 7',//'表态项7',
	'blockclass_pic_field_click8'		=> 'Position item 8',//'表态项8',
	'blockclass_pic_script_picnew'		=> 'New images',//'最新图片',
	'blockclass_pic_script_pichot'		=> 'Hot images',//'热门图片',
	'blockclass_pic_script_picspecified'	=> 'Specified images',//'指定图片',
	'blockclass_pic_script_pic'		=> 'Customize',//'高级自定义',
	'blockclass_group'			=> 'Grupy',//'群组类',

	'blockclass_group_group'		=> 'Grupy',//'群组模块',
	'blockclass_group_field_url'		=> 'URL',//'群组链接',
	'blockclass_group_field_title'		=> 'Title',//'群组名称',
	'blockclass_group_field_pic'		=> 'Image',//'群组图片',
	'blockclass_group_field_summary'	=> 'Summary',//'群组介绍',
	'blockclass_group_field_foundername'	=> 'Founder',//'创始人',
	'blockclass_group_field_founderuid'	=> 'Founder UID',//'创始人UID',
	'blockclass_group_field_icon'		=> 'Icon',//'群组图标',
	'blockclass_group_field_threads'	=> 'Tematów',//'总话题数',
	'blockclass_group_field_posts'		=> 'Postów',//'总发帖数',
	'blockclass_group_field_todayposts'	=> 'Today Posts',//'今日发帖数',
	'blockclass_group_field_membernum'	=> 'Members',//'成员数',
	'blockclass_group_field_dateline'	=> 'Publish time',//'创建时间',
	'blockclass_group_field_level'		=> 'Group Level',//'群组等级',
	'blockclass_group_field_commoncredits'	=> 'Group points',//'群组公共积分',
	'blockclass_group_field_activity'	=> 'Group events',//'群组活跃度',
	'blockclass_group_script_groupnew'	=> 'New groups',//'最新群组',
	'blockclass_group_script_grouphot'	=> 'Hot groups',//'热门群组',
	'blockclass_group_script_groupspecified'	=> 'Specified groups',//'指定群组',
	'blockclass_group_script_group'			=> 'Customize',//'高级自定义',

	'blockclass_group_thread'		=> 'Group Threads',//'群组帖子',
	'blockclass_groupthread_field_url'	=> 'Thread url',//'帖子链接',
	'blockclass_groupthread_field_title'	=> 'Title',//'帖子标题',
	'blockclass_groupthread_field_pic'	=> 'Image',//'附件图片',
	'blockclass_groupthread_field_summary'	=> 'Summary',//'帖子内容',
	'blockclass_groupthread_field_icon'	=> 'Icon',//'帖子图标',
	'blockclass_groupthread_field_author'	=> 'Autor',//'楼主',
	'blockclass_groupthread_field_authorid'	=> 'Author UID',//'楼主UID',
	'blockclass_groupthread_field_avatar'	=> 'Author Avatar',//'楼主头像',
	'blockclass_groupthread_field_avatar_middle'	=> 'Author Middle Avatar',//'楼主头像(中)',
	'blockclass_groupthread_field_avatar_big'	=> 'Author Big Avatar',//'楼主头像(大)',
	'blockclass_groupthread_field_posts'		=> 'Thread Total Posts',//'主题帖子总数',
	'blockclass_groupthread_field_todayposts'	=> 'Today posts',//'主题今日帖子数',
	'blockclass_groupthread_field_lastpost'		=> 'Ostatni post',//'主题最后发帖时间',
	'blockclass_groupthread_field_dateline'		=> 'Opublikowano',//'主题发布时间',
	'blockclass_groupthread_field_replies'		=> 'Replies',//'主题回复数',
	'blockclass_groupthread_field_views'		=> 'Views',//'主题查看数',
	'blockclass_groupthread_field_heats'		=> 'Hot threads',//'主题热度',
	'blockclass_groupthread_field_recommends'	=> 'Recommended threads',//'主题推荐数',
	'blockclass_groupthread_field_groupname'	=> 'Group name',//'群组名称',
	'blockclass_groupthread_field_groupurl'		=> 'Group URL',//'群组链接',
	'blockclass_groupthread_script_groupthreadnew'		=> 'Narzędzia moderatora',//'新主题',
	'blockclass_groupthread_script_groupthreadhot'		=> 'Hot threads',//'热门主题',
	'blockclass_groupthread_script_groupthreadspecial'	=> 'Special thread',//'特殊主题',
	'blockclass_groupthread_script_groupthreadspecified'	=> 'Specified threads',//'指定主题',
	'blockclass_groupthread_script_groupthread'		=> 'Customize',//'高级自定义',

	'blockclass_group_trade'		=> 'Products',//'群组商品',
	'blockclass_grouptrade_field_title'	=> 'Product name',//'商品名称',
	'blockclass_grouptrade_field_url'	=> 'URL',//'商品链接',
	'blockclass_grouptrade_field_summary'	=> 'Summary',//'商品说明',
	'blockclass_grouptrade_field_pic'		=> 'Image',//'商品图片地址',
	'blockclass_grouptrade_field_totalitems'	=> 'In stock',//'商品累计售出数',
	'blockclass_grouptrade_field_author'		=> 'Seller',//'商品卖家',
	'blockclass_grouptrade_field_authorid'		=> 'Seller UID',//'商品卖家UID',
	'blockclass_grouptrade_field_price'		=> 'Price',//'商品价格',
	'blockclass_grouptrade_script_grouptradenew'	=> 'New products',//'新商品',
	'blockclass_grouptrade_script_grouptradehot'	=> 'Hot Products',//'热门商品',
	'blockclass_grouptrade_script_grouptradespecified'	=> 'Specified products',//'指定商品',
	'blockclass_grouptrade_script_grouptrade'		=> 'Customize',//'高级自定义',

	'blockclass_group_groupactivity'		=> 'Group events',//'群组活动',
	'blockclass_group_activity'			=> 'Event',//'群组活动',
	'blockclass_groupactivity_field_url'		=> 'URL',//'活动帖URL',
	'blockclass_groupactivity_field_title'		=> 'Title',//'活动标题',
	'blockclass_groupactivity_field_pic'		=> 'Image',//'主题图片',
	'blockclass_groupactivity_field_summary'	=> 'Summary',//'活动介绍',
	'blockclass_groupactivity_field_time'		=> 'Time',//'活动时间',
	'blockclass_groupactivity_field_expiration'	=> 'Expiration',//'报名截止时间',
	'blockclass_groupactivity_field_author'		=> 'Autor',//'发起人',
	'blockclass_groupactivity_field_authorid'	=> 'Author UID',//'发起人UID',
	'blockclass_groupactivity_field_cost'		=> 'Participate cost',//'每人花销',
	'blockclass_groupactivity_field_place'		=> 'Places',//'活动地点',
	'blockclass_groupactivity_field_class'		=> 'Typ',//'活动类型',
	'blockclass_groupactivity_field_gender'		=> 'Gender',//'性别要求',
	'blockclass_groupactivity_field_number'		=> 'Required number',//'需要人数',
	'blockclass_groupactivity_field_applynumber'		=> 'Applied number',//'已报名人数',
	'blockclass_groupactivity_script_groupactivitynew'	=> 'Last events',//'最新活动',
	'blockclass_groupactivity_script_groupactivitycity'	=> 'Same city events',//'同城活动',
	'blockclass_groupactivity_script_groupactivity'		=> 'Customize',//'高级自定义',

	'blockclass_xml'			=> 'The third party type',//'第三方类',

	'blockclass_other'			=> 'Other',//'其它类',
	'blockclass_other_script_friendlink'	=> 'Customize',//'高级自定义',
	'blockclass_other_friendlink'		=> 'Friend Link',//'友情链接',
	'blockclass_other_friendlink_field_url'	=> 'Site URL',//'站点URL',
	'blockclass_other_friendlink_field_title'	=> 'Site Name',//'站点名称',
	'blockclass_other_friendlink_field_pic'		=> 'Site Logo',//'站点LOGO',
	'blockclass_other_friendlink_field_summary'	=> 'Site description',//'站点简介',

	'blockclass_other_script_stat'		=> 'Custom',//'高级自定义',
	'blockclass_other_stat'			=> 'Statistics block',//'统计模块',
	'blockclass_other_stat_posts'		=> 'Total posts',//'发帖总数',
	'blockclass_other_stat_groups'		=> 'Total groups',//'群组总数',
	'blockclass_other_stat_members'		=> 'Total members',//'会员总数',
	'blockclass_other_stat_groupnewposts'	=> 'Today group posts',//'群组今日发帖',
	'blockclass_other_stat_bbsnewposts'	=> 'Today forum posts',//'论坛今日发帖数',
	'blockclass_other_stat_bbslastposts'	=> 'Yesterday forum posts',//'论坛昨日发帖数',
	'blockclass_other_stat_onlinemembers'	=> 'Members online',//'当前在线会员数',
	'blockclass_other_stat_maxmembers'	=> 'Record of online members',//'历史最高在线会员数',
	'blockclass_other_stat_doings'		=> 'Total doings',//'动态数',
	'blockclass_other_stat_blogs'		=> 'Total blogs',//'日志数',
	'blockclass_other_stat_albums'		=> 'Total albums',//'相册数',
	'blockclass_other_stat_pics'		=> 'Total images',//'图片数',
	'blockclass_other_stat_shares'		=> 'Total shares',//'分享数',

	'blockclass_other_stat_posts_title'	=> 'Posts Title',//'帖子显示名',
	'blockclass_other_stat_groups_title'	=> 'Groups Title',//'群组显示名',
	'blockclass_other_stat_members_title'	=> 'Members Title',//'会员显示名',
	'blockclass_other_stat_groupnewposts_title'	=> 'New Group Posts Title',//'今日发帖显示名',
	'blockclass_other_stat_bbsnewposts_title'	=> 'Today Forum Posts Title',//'今日发帖显示名',
	'blockclass_other_stat_bbslastposts_title'	=> 'Yesterday Forum Posts Title',//'昨日发帖显示名',
	'blockclass_other_stat_onlinemembers_title'	=> 'Online Members Title',//'当前在线会员显示名',
	'blockclass_other_stat_maxmembers_title'	=> 'Online Record Title',//'历史最高在线显示名',
	'blockclass_other_stat_doings_title'	=> 'Doings Title',//'动态显示名',
	'blockclass_other_stat_blogs_title'	=> 'Blogs Title',//'日志显示名',
	'blockclass_other_stat_albums_title'	=> 'Albums Title',//'相册显示名',
	'blockclass_other_stat_pics_title'	=> 'Images Title',//'图片显示名',
	'blockclass_other_stat_shares_title'	=> 'Shares Title',//'分享显示名',

	'blockclass_field_id'			=> 'Field ID',//'数据ID',
);


