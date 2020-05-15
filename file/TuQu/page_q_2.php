<?php
	ini_set("display_errors","off");
	ob_start();
	ini_set('session.gc_maxlifetime', 86400);
include_once('fun/user.php');
session_start();
if(($_SESSION['answer']==null)||($_SESSION['answer0']==null)||($_SESSION['answer1']==null))
{
	header('location:../');
}
?>

<?php 
setcookie('hint', 'milen 3.0', time() + (86400 * 30), "/");
?>












<!DOCTYPE html>
<html>
<head>
	<style>
body {
    
    background-image:url('background.jpg');
		background-repeat:no-repeat;
		background-attachment:fixed;
		background-position:center;

    
}
</style>
	
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



<br><br><br><br><br><br><br>
<center><h3><font color='white'>Key Not Found ?</h3></font><br>
	<center><h4><font color='white'>Hint:background.jpg</h4></font>


 <form action="fun/php3.php" method='post'>
    
    <center><input type="text" name="b1" placeholder="Enter Key" required>
    	<center>
	<center><input type="submit" name="login" value="SUBMIT" class="btn btn-primary" /><br><h5><b><font color='red'>
    	<?php
			ini_set('session.gc_maxlifetime', 86400);
			session_start();

							if($_SESSION['incorrect1']==2)
							{

								echo 'Invalid Key...! Please try again.';
							}

							

			?>
<br>
 <a href="background.jpg"> <img src="background.jpg" width="30%" height="30%"></a>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br></font></b></h5>
	
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>