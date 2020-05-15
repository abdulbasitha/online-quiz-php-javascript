<?php
session_start();
$phno=$_SESSION['phno'];
include_once('../database.php');
$conn=login123();
		if($_SESSION['tootleq']<$_SESSION['start'])
			{
			$_SESSION['sweet_alert']=1;
			header('location:start.php');
			}

		else{
		
		$answers=array();
		if(!isset($_POST['answer']))
				$option="";
			else
				$option=$_POST['answer'];

		if(!isset($_SESSION['arrayanswe'])){
				$_SESSION['arrayanswe']=$answers;
									}
			$answers=$_SESSION['arrayanswe'];

		array_push($answers,$option);

		$_SESSION['start']++;

		print_r($answers);

		$_SESSION['arrayanswe']=$answers;

		$serialarray=serialize($_SESSION['arrayanswe']);
		$submit=mysqli_query($conn,"UPDATE `student` SET `submit` = '$serialarray' WHERE `student`.`phno` = '$phno';");

	

}
if($_SESSION['tootleq']<$_SESSION['start'])
			{
				$_SESSION['sweet_alert']=1;
				header('location:start.php');
			}

		else
		header('location:start.php');
?>