<?php
if(in_array(lz::$f[0],array('excel')))
{
	require_once(dirname(__FILE__).'/admin.referer.'.lz::$f[0].'.php');
}
else
{
	require_once(dirname(__FILE__).'/admin.referer.home.php');
}
?>