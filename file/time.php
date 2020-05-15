

<?php
function timediff($a,$b)
{
	
$datetime1 = new DateTime($a);
$datetime2 = new DateTime($b);
$interval = $datetime1->diff($datetime2);
return $interval->format('%h')." Hours ".$interval->format('%i')." Minutes ".$interval->format('%s')." Second";
}
date_default_timezone_set('Asia/Kolkata');

/*$a=date('h:i:s');
$b=date('09:10:00');
$c=timediff($a,$b);
echo $c;*/
?>
