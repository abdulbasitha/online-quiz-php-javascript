<?php
$user=$_POST['b1'];
$pass=$_POST['b2'];
if(($user=='TACS')&&($pass=='TACS'))
	{
		header('location:value.php');
	}
else
{
	echo "<script>alert('Incorrect Username or Password')</script>";
	echo "<script> history.go(-1) </script>"; 
}