<?php
$phno=$_GET['phno'];
if($phno==NULL)
{
	header('../');

}
else{
	session_start();
	  	ini_set('session.gc_maxlifetime', 86400);
	  	date_default_timezone_set('Asia/Kolkata');
	  	$_SESSION['time_1']=date('h:i:s');
		 $_SESSION['phno']=$phno;
		 header('location:TuQu/page_q_.php');
}

?>

 
