<?php
/*$smsuname="reliable";
$smspass="aryan@1978";
$smssender="RELABL";

$mob = $_REQUEST['mob'];
$msg = urlencode($_REQUEST['msg']);*/

//header("location:http://sms.reliableindya.info/web2sms.php?username=$smsuname&password=$smspass&to=$mob&sender=$smssender&message=$msg");

//header("location:http://sms.reliableindya.info/status.php?username=$smsuname&password=$smspass&
//messageid=<MESSAGEID>
?>
<?php
$fp = fsockopen("www.google.com", 80, $errno, $errstr, 30);
if (!$fp) {
echo "$errstr ($errno)<br />\n";
} else {
$out = "GET / HTTP/1.1\r\n";
$out .= "Host: www.google.com\r\n";
$out .= "Connection: Close\r\n\r\n";

fwrite($fp, $out);
while (!feof($fp)) {
echo fgets($fp, 128);
}
fclose($fp);
}

?>