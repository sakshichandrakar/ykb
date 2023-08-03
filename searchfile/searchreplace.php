<?php
$str = "This is yogesh. This is yogesh yogesh yogeshyogesh.";
$rep = "ykb";
$repcot = "yogesh";

echo $str."<br>";

$str = str_replace($repcot,$rep,$str);

echo $str."<br>";

?>