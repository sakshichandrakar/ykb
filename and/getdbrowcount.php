<?php
include("dbinfo.php");

$users = mysql_query("SELECT * FROM user WHERE syncsts = FALSE");
$a = array();
$b = array();
if ($users != false){
	$no_of_users = mysql_num_rows($users);       
	$b["count"] = $no_of_users;
	echo json_encode($b);
}
else{
	$no_of_users = 0;
	$b["count"] = $no_of_users;
	echo json_encode($b);
}
?>