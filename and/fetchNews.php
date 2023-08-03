<?php
include("dbinfo.php");

$news = array();

$sttNews = "select * from news";
$sqlNews = mysql_query($sttNews);
while($rowNews = mysql_fetch_assoc($sqlNews))
$news['news_det'][]=$rowNews;
//array_push($news, $rowNews);

echo json_encode($news);
?>