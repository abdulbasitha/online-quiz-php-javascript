<?php
include_once('database.php');
include_once('sms.php');

$phno=$_POST['b1'];
$conn=login123();
if(!$conn){


	 				echo "<script>alert('cannot now please try again later..!!!')</script>";
	 				echo "<script> history.go(-1) </script>";


}
else
{

	$query=mysqli_query($conn,"select * from student where phno='$phno'");
	if(mysqli_affected_rows($conn)==0){
		echo "<script>alert('Phone Number Not Found')</script>";
	 				echo "<script> history.go(-1) </script>";

	}
	else
	{
		$row=mysqli_fetch_array($query);
		sms($phno,$row['pass']);

		echo "<script>alert('Your Password is sent to your Phone Number')</script>";
	 				echo "<script> history.go(-1) </script>";
	}



}


?>