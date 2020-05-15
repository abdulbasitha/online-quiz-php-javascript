<?php
include_once('../database.php');
session_start();
$connction=login123();
$timeq=mysqli_query($connction,"select * from timer where id=1");
$timeqval=mysqli_fetch_array($timeq);
$_SESSION["duration"] = $timeqval['time'];
$_SESSION["start_time"]=date("Y-m-d H:i:s");

$send_time=date("Y-m-d H:i:s",strtotime('+'.$_SESSION["duration"].'minutes',strtotime($_SESSION["start_time"])));
$_SESSION["end_time"]=$send_time;
?>

<script type="text/javascript">
	window.location=

</script>