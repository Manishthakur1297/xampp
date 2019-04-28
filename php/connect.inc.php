<?php
$mysql_host = 'mysql.hostinger.in';
$mysql_user = 'u831394216_mj';
$mysql_pass = 'MJ2';

$mysql_db = 'u831394216_root';

if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)|| !mysql_select_db($mysql_db))
{

	die(mysql_error());
}

?>