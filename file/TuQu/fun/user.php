<?php
	
	function user()
	{
		include_once('database.php');
		session_start();
		$phno=$_SESSION['phno'];
		$connect=login123();
		$quary=("select * from student where phno='$phno';");
		$exq=mysqli_query($connect,$quary);
		$exq=mysqli_fetch_array($exq);
		echo (strtoupper($exq['name1']));

		}

?>