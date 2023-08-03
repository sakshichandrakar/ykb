<?php
include("dbinfo.php");

$users = mysql_query("SELECT * FROM user WHERE syncsts = FALSE");

$a = array();
$b = array();
if ($users != false){
	while ($row = mysql_fetch_array($users)) {       
		$b["userId"] = $row["Id"];
		$b["userName"] = $row["Name"];
		array_push($a,$b);
	}
	echo json_encode($a);
}
?>