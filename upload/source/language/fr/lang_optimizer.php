<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_optimizer.php 31754 2012-10-08 02:29:22Z zhangjie $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'optimizer_dbbackup_advice'	=> 'La Sauvegarde n\'a pas &#233;t&#233; faite durant 3 mois, il est recommand&#233; de sauvegarder vos donn&#233;es imm&#233;diatement.',//'三个月没有进行数据备份了,建议立即备份数据', //   'Backup was not made for 3 months, it is recommended to backup your data immediately.',
	'optimizer_dbbackup_lastback'	=> 'La derni&#232;re sauvegarde des donn&#233;es a &#233;t&#233; effectu&#233;e &#224;',//'上次数据备份于', //  'The last data backup was made at ',
	'optimizer_dbbackup_clean_safe'	=> 'Fichier de sauvegarde de la Database non d&#233;tect&#233;es, aucun probl&#232;me de s&#233;curit&#233;',//'没有检测到数据库备份文件，无安全问题', // 'Database backup file not detected, No security problems',
	'optimizer_dbbackup_clean_delete'	=> 'A d&#233;tect&#233; {filecount} fichiers de sauvegarde, (R&#233;pertoire: ./data/backup_xxx),<br>Svp. Veuillez copier la sauvegarde dans un endroit s&#251;r d&#232;s que possible, et puis supprimer ces fichiers!',//'检测到 {filecount} 个数据备份文件(目录: ./data/backup_xxx)，<br>请尽快手工复制到安全位置备份，然后删除这些文件', //  'Detected {filecount} backup files, (Directory: ./data/backup_xxx),<br>Please copy the backup to a safe location as soon as possible, and then delete these files!',
	'optimizer_filecheck_advice'		=> 'Vous n\'avez pas encore v&#233;rifier le fichier checksum de plus de 3 mois, il est recommand&#233; de v&#233;rifier d&#232;s maintenant.',//'三个月没有进行文件校验了,建议立即进行校验', //  'You did not verified the file checksum more than 3 months, it is recommended to verify it right now.',
	'optimizer_filecheck_lastcheck'		=> 'Dernier fichier checksum',//'上次文件校验于', //  'Last file checksum',
	'optimizer_log_clean'			=> 'vous avez {count} log enregistr&#233;, peut &#234;tre nettoyer pour son optimisation',//'有 {count} 个日志表可以清理优化', //  'have {count} log records, can clean up for optimisation',
	'optimizer_log_not_found'		=> 'Aucun enregistrement de Logs trouv&#233;s afin d\&#234;tre nettoyer',//'未发现可清理的日志表',  //  'No log records found to be clean up',
	'optimizer_patch_have'			=> 'Vous avez de(s) {patchnum} correctif(s), veuillez mettre &#224; jour d&#232;s que possible',//'您有 {patchnum} 个，请尽快更新', //   'You have {patchnum} patches, please update as soon as possible',
	'optimizer_patch_check_safe'		=> 'S&#233;curit&#233; d&#233;tect&#233;',//'检测安全',  // 'Detect security', 
	'optimizer_plugin_new_plugin'		=> 'Vous avez {newversion} des mises &#224; jour du plugin disponible',//'您有 {newversion} 款应用有可用更新', //  'You have {newversion} plugin updates available',
	'optimizer_plugin_no_upgrade'		=> 'Vous n\'avez pas besoin d\'appliquer la mise &#224; jour',//'不需要应用更新', //  'Do not need to apply the update',
	'optimizer_post_need_split'		=> 'Table de poste et sous-tables ont {count} rang&#233;es &#224; optimiser',//'帖子表及分表有 {count} 个需要优化', //  'Post table and sub-tables have {count} rows to be optimized',
	'optimizer_post_not_need'		=> 'L\'optimisation n\'est pas n&#233;cessaire',//'不需要优化',  //   'Optimization is not required',
	'optimizer_seo_advice'			=> 'Nous recommandons d\'am&#233;liorer les param&#232;tres du SEO.',//'建议您完善SEO设置', //'We recommend to improve the SEO settings',  
	'optimizer_seo_no_need'			=> 'Nous d&#233;couvrons que les Param&#232;tres du SEO conviennent parfaitement',//'发现已经完善了seo设置',//  'Discovered SEO settings are perfect',
	'optimizer_setting_cache_index'		=> 'Cache Accueil Index',//'缓存论坛首页',//   'Cache Forum Home',
	'optimizer_setting_cache_index_desc'	=> 'L\'activation de cette fonction permet de r&#233;duire la charge du serveur',//'开启此功能可减轻服务器负载', //  'Enabling of this feature can reduce the server loading',
	'optimizer_setting_cache_optimize_desc'	=> 'R&#233;glez le temps de la m&#233;moire cache &#224; 900 secondes approximativement',//'设置缓存时间为900秒', //  'Set the cache time to 900 seconds',
	'optimizer_setting_cache_post'		=> 'Cache Posts',//'缓存帖子', //  'Cache Posts',
	'optimizer_setting_cache_post_desc'	=> 'L\'activation de cette fonction permet de r&#233;duire la charge du serveur',//'开启此功能可减轻服务器负载', //   'Enabling of this feature can reduce the server loading',
	'optimizer_setting_cache_post_optimize_desc'	=> 'R&#233;glez le temps de la m&#233;moire cache &#224; 900 secondes approximativement',//'设置缓存时间为900秒', //  'Set the cache time to 900 seconds',
	'optimizer_setting_optimizeviews'		=> 'Optimisation de la mise &#224; niveau des sujets vus ',//'优化更新主题浏览量', //  'Optimize the updated thread views',
	'optimizer_setting_optimizeviews_desc'		=> 'L\'activation de cette fonctionnalit&#233; commune peut r&#233;duire le temps de g&#233;n&#233;rer la mise &#224; jour Sujet Page Vues, et ainsi de r&#233;duire la charge du serveur',//'开启此共功能可减轻更新主题浏览量时产生的服务器负载', //  'Enabling of this common feature can reduce the time of generating the Update Topic Page Views, and so reduce the server loading',
	'optimizer_setting_optimizeviews_optimize_desc'	=> 'Activez cette fonction',//'开启此功能', //  'Turn on this feature',
	'optimizer_setting_delayviewcount'		=> 'T&#233;l&#233;chargement de pièces jointes retarder la mise &#224; jour',//'附件下载量延迟更新', //  'Attachment downloads delay update', 
	'optimizer_setting_delayviewcount_desc'		=> 'Mise &#224; jour retard&#233;ede pièces jointes Vues cela permet de r&#233;duire consid&#233;rablement la charge du serveur lors d\'une volumineuse pi&#232;ces jointes n&#233;cessaire',//'延迟更新附件的浏览量，可明显降低访问量很大的站点的服务器负担', //   'Delayed update of attachment views can significantly reduce the server loading when a large attachment required',
	'optimizer_setting_delayviewcount_optimize_desc'	=> 'Activez cette fonction',//'开启此功能', //  'Turn on this feature',
	'optimizer_setting_preventrefresh'		=> 'Pr&#233;venir nouveau d&#233;compte des vues lorsque la page est actualis&#233;e',//'查看数开启防刷新', //  'Prevent recount of views when page refreshed',
	'optimizer_setting_preventrefresh_desc'		=> 'Fonction Anti-refresh peut r&#233;duire consid&#233;rablement la charge du serveur',//'开启防刷新，可明显降低服务器压力', // 'Anti-refresh feature can significantly reduce the server loading',
	'optimizer_setting_preventrefresh_optimize_desc'	=> 'Activez cette fonction',//'开启此功能', //   'Turn on this feature',
	'optimizer_setting_nocacheheaders'		=> 'D&#233;sactiver la mise en cache du navigateur',//'禁止浏览器缓冲', //  'Disable the browser caching',
	'optimizer_setting_nocacheheaders_desc'		=> 'Peut &#234;tre utilis&#233; pour r&#233;soudre certains probl&#233;mes des gens avec un rafra&#238;chissement de la page, dans certains navigateurs. Cette caract&#233;ristique augmente consid&#233;rablement la charge du serveur.',//'可用于解决极个别浏览器内容刷新不正常的问题，本功能会加重服务器负担', //  'Can be used to solve some people problems with a page refresh in some browsers. This feature significantly increases the server loading.',
	'optimizer_setting_nocacheheaders_optimize_desc'	=> 'D&#233;sactiver cette fonction',//'关闭此功能', //  'Disable this feature',
	'optimizer_setting_jspath'			=> 'JS fichier cache',//'JS 文件缓存', //  'JS file cache',
	'optimizer_setting_jspath_desc'			=> 'Si javascript r&#233;pertoire de cache activ&#233;, puis ils vont compresser tous les fichiers javascripts et mettez-le dans ce r&#233;pertoire pour augmenter la vitesse de lecture du fichier.',//'当脚本为缓存目录时，系统会将默认目录中的 *.js 文件进行压缩然后保存到缓存目录以提高读取速度',  //   'If javascript cache directory enabled, then the will compress all the javascripts files and put it to this directory for increase the file read speed.',
	'optimizer_setting_jspath_optimize_desc'	=> 'Modifier js le chemin vers le r&#233;pertoire de la m&#233;moire cache',//'修改js路径到缓存目录', //  'Modify js path to the cache directory',
	'optimizer_setting_lazyload'			=> 'Temporisation du chargement de l\'image',//'图片延时加载', //   'Image load delay',
	'optimizer_setting_lazyload_desc'		=> 'Charger une image que si elle est visible dans la fen&#234;tre du navigateur. Cette fonctionnalit&#233; permet de r&#233;duire consid&#233;rablement la charge du serveur.',//'页面中的图片在浏览器的当前窗口时再加载，可明显降低访问量很大的站点的服务器负担',  //  'Load an image only if it is visible in the browser window. This feature can significantly reduce the server loading.',
	'optimizer_setting_lazyload_optimize_desc'	=> 'Activez cette fonction',//'开启此功能',  //  'Turn on this feature',
	'optimizer_setting_sessionclose'		=> 'D&#233;sactivez le m&#233;canisme de session',//'关闭session机制', //  'Disable the session mechanism',
	'optimizer_setting_sessionclose_desc'		=> 'Fermant le m&#233;canisme de session permet de r&#233;duire consid&#233;rablement la charge du serveur. Il est recommand&#233; d\'utiliser cette fonction si le nombre d\'utilisateurs en ligne est sup&#233;rieure &#224; 20000.<br>Remarque: Si les Totaux des Statistiques des utilisateurs sont en ligne et des utilisateurs qui ne sont pas calcul&#233;s, les statistiques des utilisateurs ne seront pas disponibles sur la page d\'accueil du forum.',//'关闭session机制以后，可明显降低站点的服务器负担，建议在线用户数超过2万时开启本功能<br>注意：游客数和用户的在线时长将不再进行统计，论坛首页和版块列表页面的在线用户列表功能将不可用', //  'Closing the session mechanism can significantly reduce the server loading. Recommended to use this feature if the number of online users is greater than 20000.<br>Note: If the users online and total users statistics are not calculated, the users statistics will be unavailable at the Forum home page.',
	'optimizer_setting_sessionclose_optimize_desc'	=> 'Activez cette fonction',//'开启此功能', //   'Turn on this feature',
	'optimizer_setting_need_optimizer'		=> 'Ont {count} param&#232;tres qui peuvent &#234;tre optimis&#233;s',//'有 {count} 个设置项可以优化', //  'Have {count} settings can be optimized',
	'optimizer_setting_no_need'			=> 'Rubriques de param&#233;trage ne n&#233;cessitent aucune optimisation',//'设置项无需优化', //  'Setting items do not require of optimization',
	'optimizer_thread_need_optimizer'		=> 'N&#233;cessit&#233; d\'optimiser vos tables',//'需要优化您的主题表了', //  'Need to optimize your thread table',
	'optimizer_thread_no_need'			=> 'Aucun besoin d\'optimiser',//'不需要优化', //   'No need to optimize',
	'optimizer_upgrade_need_optimizer'		=> 'Il existe de News versions, mise &#224; jour &#224; la derni&#232;re version',//'有新版本，及时更新到最新版本', //  'There are new versions, Update to the latest version', 
	'optimizer_upgrade_no_need'			=> 'C\'est la derni&#232;re version',//'已经是最新版', //  'Is the latest version',
	'optimizer_setting_rewriteguest'		=> 'R&#233;&#233;criture qu\'aux passagers',//'Rewrite仅针对游客',  // 'Rewrite only for guests', 
	'optimizer_setting_rewriteguest_desc'		=> 'Si cette fonction est activ&#233;, la fonction de r&#233;&#233;criture d\'URL sera utilis&#233; uniquement pour les clients et les moteurs de recherche. Cette fonction permet de r&#233;duire la charge du serveur.',//'开启此项，则 Rewrite功能只对游客和搜索引擎有效，可减轻服务器负担', // 'If enable this feature, the URL Rewrite feature will be used only for guests and search engines. This feature will reduce the server loading.',
	'optimizer_setting_rewriteguest_optimize_desc'	=> 'Activez cette fonction',//'开启此功能', //  'Turn on this feature',
);
