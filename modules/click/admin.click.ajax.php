<?php
function bclear()
{
	$ajax=lz::h('ajax');
	$db=lz::h('db');
	$db->execute('TRUNCATE `click`;');
	$ajax->assign('getclick','innerHTML',getclick());
}
?>
