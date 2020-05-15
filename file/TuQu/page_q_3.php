<?php
	ini_set("display_errors","off");
	ob_start();
	ini_set('session.gc_maxlifetime', 86400);
include_once('fun/user.php');
session_start();
if(($_SESSION['answer']==null)||($_SESSION['answer0']==null)||($_SESSION['answer1']==null)||($_SESSION['answer2']==null))
{
	header('location:../');
}




?>






<!--
User Name: CRACK
Password : win


-->









<!DOCTYPE html>
<html>
<head>
	
<script src="basith.js"></script>

<script src="hint.js"></script>
	<title>Crack & Win</title>
	 <link rel="icon" href="../../img/logo.png" type="image/x-icon" width='100%'>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="css/a.css" type="text/css" />
</head>
<body>


<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="page_q_2.php"><h3><b>&nbsp;Crack & Win</b></h3></a>
		</div>
		<!-- menu items -->
		
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="" > <?php user(); ?> </a></li>
				<!--
					confrom button
				-->
<li><a name='a' method='post' action='../logout.php' 
	href="../logout.php?id=1" onclick="return confirm('Are you sure you want to logout ?')"><b>Logout</b></a></li>
			</ul>
		</div>
	</div>
</nav>


<br><br>
<h2><center><b>Crack it!!</h2></center></b><br>
<h4 align="center"><font color='red'>*</font><b>Page Source </b></h4>
<form name='frm' oninput='login1()' action=fun/php2.php method='post'>

  
 
    <center><input type="text" name="b1" placeholder="username" required></center>

    
    <CENTER><input type="password"  name="b2" placeholder="password" required>
<br></center>
    
 <center></center>
	<center><BR>


		<input type="submit" name="login" value="LOGIN" class="btn btn-primary" /><br><br>
		<center><p id='1'></p></center>


	</from></center><br><br><br><br><br><br><br><br>
	
</div><br><br><br><br><br><br><br><br><br>
<center>Powered by<br>
<img src="../../img/pp1.jpg" height="100%" width="100%">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>