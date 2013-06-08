<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_optimizer.php 32960 2013-03-28 04:36:15Z chenmengshu $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'optimizer_dbbackup_advice' => 'Backup was not made for 3 months, it is recommended to backup your data immediately.',
	'optimizer_dbbackup_lastback' => 'The last data backup was made at ',
	'optimizer_dbbackup_clean_safe' => 'Database backup file not detected, No security problems',
	'optimizer_dbbackup_clean_delete' => 'Detected {filecount} backup files, (Directory: ./data/backup_xxx),<br>Please copy the backup to a safe location as soon as possible, and then delete these files!',
	'optimizer_filecheck_advice' => 'You did not verified the file checksum more than 3 months, it is recommended to verify it right now.',
	'optimizer_filecheck_lastcheck' => 'Last file checksum',
	'optimizer_log_clean' => 'have {count} log records, can clean up for optimisation',
	'optimizer_log_not_found' => 'No log records found to be clean up',
	'optimizer_patch_have' => 'You have {patchnum} patches, please update as soon as possible',
	'optimizer_patch_check_safe' => 'Detect security',
	'optimizer_plugin_new_plugin' => 'You have {newversion} plugin updates available',
	'optimizer_plugin_no_upgrade' => 'Do not need to apply the update',
	'optimizer_post_need_split' => 'Post table and sub-tables have {count} rows to be optimized',
	'optimizer_post_not_need' => 'Optimization is not required',
	'optimizer_seo_advice' => 'We recommend to improve the SEO settings',
	'optimizer_seo_no_need' => 'Discovered SEO settings are perfect',
	'optimizer_setting_cache_index' => 'Cache Forum Home',
	'optimizer_setting_cache_index_desc' => 'Enabling of this feature can reduce the server loading',
	'optimizer_setting_cache_optimize_desc' => 'Set the cache time to 900 seconds',
	'optimizer_setting_cache_post' => 'Cache Posts',
	'optimizer_setting_cache_post_desc' => 'Enabling of this feature can reduce the server loading',
	'optimizer_setting_cache_post_optimize_desc' => 'Set the cache time to 900 seconds',
	'optimizer_setting_optimizeviews' => 'Optimize the updated thread views',
	'optimizer_setting_optimizeviews_desc' => 'Enabling of this common feature can reduce the time of generating the Update Topic Page Views, and so reduce the server loading',
	'optimizer_setting_optimizeviews_optimize_desc' => 'Turn on this feature',
	'optimizer_setting_delayviewcount' => 'Attachment downloads delay update',
	'optimizer_setting_delayviewcount_desc' => 'Delayed update of attachment views can significantly reduce the server loading when a large attachment required',
	'optimizer_setting_delayviewcount_optimize_desc' => 'Turn on this feature',
	'optimizer_setting_preventrefresh' => 'Prevent recount of views when page refreshed',
	'optimizer_setting_preventrefresh_desc' => 'Anti-refresh feature can significantly reduce the server loading',
	'optimizer_setting_preventrefresh_optimize_desc' => 'Turn on this feature',
	'optimizer_setting_nocacheheaders' => 'Disable the browser caching',
	'optimizer_setting_nocacheheaders_desc' => 'Can be used to solve some people problems with a page refresh in some browsers. This feature significantly increases the server loading.',
	'optimizer_setting_nocacheheaders_optimize_desc' => 'Disable this feature',
	'optimizer_setting_jspath' => 'JS file cache',
	'optimizer_setting_jspath_desc' => 'If javascript cache directory enabled, then the will compress all the javascripts files and put it to this directory for increase the file read speed.',
	'optimizer_setting_jspath_optimize_desc' => 'Modify js path to the cache directory',
	'optimizer_setting_lazyload' => 'Image load delay',
	'optimizer_setting_lazyload_desc' => 'Load an image only if it is visible in the browser window. This feature can significantly reduce the server loading.',
	'optimizer_setting_lazyload_optimize_desc' => 'Turn on this feature',
	'optimizer_setting_sessionclose' => 'Disable the session mechanism',
	'optimizer_setting_sessionclose_desc' => 'Closing the session mechanism can significantly reduce the server loading. Recommended to use this feature if the number of online users is greater than 20000.<br>Note: If the users online and total users statistics are not calculated, the users statistics will be unavailable at the Forum home page.',
	'optimizer_setting_sessionclose_optimize_desc' => 'Turn on this feature',
	'optimizer_setting_need_optimizer' => 'Have {count} settings can be optimized',
	'optimizer_setting_no_need' => 'Setting items do not require of optimization',
	'optimizer_thread_need_optimizer' => 'Need to optimize your thread table',
	'optimizer_thread_no_need' => 'No need to optimize',
	'optimizer_upgrade_need_optimizer' => 'There are new versions, Update to the latest version',
	'optimizer_upgrade_no_need' => 'Is the latest version',
	'optimizer_setting_rewriteguest' => 'Rewrite only for guests',
	'optimizer_setting_rewriteguest_desc' => 'If enable this feature, the URL Rewrite feature will be used only for guests and search engines. This feature will reduce the server loading.',
	'optimizer_setting_rewriteguest_optimize_desc' => 'Turn on this feature',
);
