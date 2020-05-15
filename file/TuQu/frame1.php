<?php
	ini_set("display_errors","off");
	ob_start();
include_once('fun/user.php');

	ini_set("display_errors","off");
	ob_start();
	ini_set('session.gc_maxlifetime', 86400);
include_once('fun/user.php');
session_start();
/*if(($_SESSION['answer1']==null)||($_SESSION['answer2']==null)||($_SESSION['answer3']==null)||($_SESSION['answer4']==null))
{
	header('location:../');
}*/
?>






<!DOCTYPE html>
<html>
<head>
	
	<style>

</style>
<script type="text/javascript">

</script>
<script src="basith.js"></script>


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
			<a class="navbar-brand" href="page_q_1.php"><h3><b>&nbsp;Crack & Win</b></h3></a>
		</div>
		<!-- menu items -->
		
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="" > <?php user(); ?> </a></li>
				<!--
					confrom button
				-->

<li><a name='a' method='post' action='../logout.php' 
	href="../logout.php?id=1" target="_parent" onclick="return confirm('Are you sure you want to logout ?')"><b>Logout</b></a></li>
			</ul>
		</div>
	</div>
</nav>
<center><font size='5px'></h4></center></font>


 
</body>
</html>



