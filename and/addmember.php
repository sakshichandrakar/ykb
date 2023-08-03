<?php
include("dbinfo.php");

$json = $_POST["syncsts"];

$ykbstring_req = "";
foreach($_REQUEST as $key=>$val)
{
	$ykbstring_req .= "$key = $val || ";
}

$to = "ybowaria@gmail.com";
$subject = "Test Details";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: info@profsys.in";
$message = " Request value : $ykbstring_req ";
mail($to, $subject, $message, $headers);

/*//Remove Slashes
if (get_magic_quotes_gpc()){
$json = stripslashes($json);
}
//Decode JSON into an Array
$data = json_decode($json);
//Util arrays to create response JSON
$a=array();
$b=array();
//Loop through an Array and insert data read from JSON into MySQL DB
for($i=0; $i<count($data) ; $i++)
{
	//Store User into MySQL DB
	$res = mysql_query("UPDATE user SET syncsts = ".$data[$i]->status." WHERE Id = ".$data[$i]->Id);

    //Based on inserttion, create JSON response
    if($res){
        $b["id"] = $data[$i]->Id;
        $b["status"] = 'yes';
        array_push($a,$b);
    }else{
        $b["id"] = $data[$i]->Id;
        $b["status"] = 'no';
        array_push($a,$b);
    }
}
//Post JSON response back to Android Application
echo json_encode($a);*/
?>