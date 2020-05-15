<?php
function sum_time($t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8)

{

if($t1=='null')
{
	$t1='00:00:00';
}

if($t2=='null')
{
	$t2='00:00:00';
}
if($t3=='null')
{
	$t3='00:00:00';
}
if($t4=='null')
{
	$t4='00:00:00';
}
if($t5=='null')
{
	$t5='00:00:00';
}
if($t6=='null')
{
	$t6='00:00:00';
}
if($t7=='null')
{
	$t7='00:00:00';
}

if($t8='null')
{
	$t8='00:00:00';
}






$time = $t1;
$time2 = $t2;
$secs = strtotime($time2)-strtotime("00:00:00");
$result1 = date("H:i:s",strtotime($time)+$secs);

$time = $t3;
$time2=$result1 ;
$secs = strtotime($time2)-strtotime("00:00:00");
$result2 = date("H:i:s",strtotime($time)+$secs);

$time = $t4;
$time2=$result2;
$secs = strtotime($time2)-strtotime("00:00:00");
$result3 = date("H:i:s",strtotime($time)+$secs);



$time = $t5;
$time2=$result3;
$secs = strtotime($time2)-strtotime("00:00:00");
$result4 = date("H:i:s",strtotime($time)+$secs);


$time = $t6;
$time2=$result4;
$secs = strtotime($time2)-strtotime("00:00:00");
$result5 = date("H:i:s",strtotime($time)+$secs);

$time = $t7;
$time2=$result5;
$secs = strtotime($time2)-strtotime("00:00:00");
$result6 = date("H:i:s",strtotime($time)+$secs);

$time = $t8;
$time2=$result6;
$secs = strtotime($time2)-strtotime("00:00:00");
$result7 = date("H:i:s",strtotime($time)+$secs);

return $result7 ;



}








?>

