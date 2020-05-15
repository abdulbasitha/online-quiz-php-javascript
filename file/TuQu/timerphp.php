<?php
session_start();
$from_time=date("Y-m-d H:i:s");
$totime=$_SESSION["end_time"];
$timefirst=strtotime($from_time);
$timesecond =strtotime($from_time);

$diff=$timesecond=$timefirst;
echo gmdate("H:i:s",$diff);
?>