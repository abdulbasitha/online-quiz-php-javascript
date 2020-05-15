<?php
include_once('../time.php');
session_start();
date_default_timezone_set('Asia/Kolkata');
$_SESSION['time_2']=date('h:i:s');
echo timediff($_SESSION['time_1'],$_SESSION['time_2']);
?>
