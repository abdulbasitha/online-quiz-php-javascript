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


	<title>Treasure Hunt</title>
	 <link rel="icon" href="../../img/logo.png" type="image/x-icon" width='100%'>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="css/a.css" type="text/css" />
</head>
<body>
<h4><center><b>Enter The Content</b></center></h4>









  <center><form action="fun/php5.php" method='post' target="_parent">
    
    <input type="text" name="b1" placeholder="Content" required>

  <center>
	<center><input onclick="checking()" type="submit" name="login" value="SUBMIT" class="btn btn-primary" />
	<h5><b><font color='red'>
			<?php
			ini_set('session.gc_maxlifetime', 86400);
			session_start();

							if($_SESSION['incorrect']==5)
							{

								echo 'Invalid Content...! Please try again.';
							}

							

			?>

		</font></font></b></h5>

	
</div><br><br><br></center>
<br><br><br>
<center>Powered by<br>
<img src="../../img/pp1.jpg" height="100%" width="100%">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



