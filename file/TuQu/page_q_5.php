<?php
	ini_set("display_errors","on");
	ob_start();
	ini_set('session.gc_maxlifetime', 86400);
include_once('fun/user.php');
session_start();
if(($_SESSION['answer']==null)||($_SESSION['answer0']==null)||($_SESSION['answer1']==null)||($_SESSION['answer2']==null)||($_SESSION['answer3']==null)||($_SESSION['answer4']==null))
{
	header('location:../');
}
?>











<html>
<head>
	<title>Crack & Win</title>
	 <link rel="icon" href="../../img/logo.png" type="image/x-icon" width='100%'>
</head>

<frameset rows="19%,50%,*" >
  <frame src="frame1.php" frameborder="0" scrolling="no">
  <frame src="frame2.php" frameborder="0" scrolling="no">
  <frame src="frame3.php" frameborder="0" scrolling="no">
</frameset>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>kjkjkjkj
</html>
