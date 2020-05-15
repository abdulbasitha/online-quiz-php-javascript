<?php
session_start();
include_once('TuQu/fun/quitsms.php');
include_once('database.php');
$connction=login123();
$phno=$_SESSION['phno'];
$quary1=("select * from student where phno='$phno';");
$exe1=mysqli_query($connction,$quary1);
$exe_array1=mysqli_fetch_array($exe1);
if($exe_array1['point']!=50)
{
/*sms1($exe_array1['name'],$exe_array1['bach'],$phno);
sms1($exe_array1['name'],$exe_array1['bach'],"919544752154");
sms1($exe_array1['name'],$exe_array1['bach'],"917510710558");*/
}








$value=$_REQUEST['id'];
if($value==1)
{

session_destroy();
header('location:../index.html');
}
?>

