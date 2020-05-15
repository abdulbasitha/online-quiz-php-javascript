<?php
	ini_set("display_errors","off");
	ob_start();
	ini_set('session.gc_maxlifetime', 86400);
include_once('fun/user.php');
session_start();
if(($_SESSION['answer']==null)||($_SESSION['answer0']==null)||($_SESSION['answer1']==null)||($_SESSION['answer2']==null)||($_SESSION['answer3']==null))
{
	header('location:../');
}
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
			<a class="navbar-brand" href="page_q_4.php"><h3><b>&nbsp;Crack & Win</b></h3></a>
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

<br><br><br><br>

<center><h3>IEEE and its <u>m</u>embers inspire a global community to <u>i</u>nnovate for a better tomorrow through highly cited publications,<br> conferences, technology standards, and professiona<u>l</u> and educational activiti<u>e</u>s<br>. IEEE is the trusted “voice” for engineering, computing, and technology informatio<u>n</u> around the globe.</h3>


  <form action="fun/php4.php" method='post'>
    
    <input type="text" name="b1"  required>

  <center>
	<center><input type="submit" class="btn btn-primary" />
		<br><h5>
			

		<b><font color='red'><?php
			ini_set('session.gc_maxlifetime', 86400);
			session_start();

							if($_SESSION['incorrect1']==2)
							{

								echo 'Invalid ...! Please try again.';
							}

							

			?></font></b></h5></b>

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></from></center>
	
</div><br><br><br></center>
<br><br><br>
<center>Powered by<br>
<img src="../../img/pp1.jpg" height="100%" width="100%">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



