<?php

/**
 * DiscuzX Convert
 *
 * $Id: regips.php 10469 2010-05-11 09:12:14Z monkey $
 * Modified by Valery Votintsev, codersclub.org
 */

$curprg = basename(__FILE__);

$table_source = $db_source->tablepre.'regips';
$table_target = $db_target->tablepre.'common_regip';

$limit = 1000;
$nextid = 0;

$start = intval(getgpc('start'));
if($start == 0) {
	$db_target->query("TRUNCATE $table_target");
}

$query = $db_source->query("SELECT  * FROM $table_source ORDER BY dateline LIMIT $start, $limit");
while ($row = $db_source->fetch_array($query)) {

	$nextid = 1;

	$row  = daddslashes($row, 1);

	$data = implode_field_value($row, ',', db_table_fields($db_target, $table_target));

	$db_target->query("INSERT INTO $table_target SET $data");
}

if($nextid) {
	$next = $start + $limit;
	showmessage(lang('continue_convert_table').$table_source.lang('from'). $start .lang('to'). ($start+$limit). lang('lines'), "index.php?a=$action&source=$source&prg=$curprg&start=$next");
}

?>