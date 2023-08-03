<?php
if($_SERVER["SERVER_NAME"]=="localhost" || $_SERVER["SERVER_NAME"]=="profsys")
{
	$host_name="localhost";
	$db_name="ykband";
	$db_user="root";
	$db_pwd="";
}
else
{
	$host_name="166.62.8.12";
	$db_name="ykband";
	$db_user="ykband";
	$db_pwd="Android@123";
}

mysql_connect("$host_name","$db_user","$db_pwd");
mysql_select_db("$db_name");

date_default_timezone_set('Asia/Calcutta');
$date = date("Y-m-d H:i:s");
$createdate = date("Y-m-d H:i:s");
?>