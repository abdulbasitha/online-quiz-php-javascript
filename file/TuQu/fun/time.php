

<?php
function timediff($a,$b)
{
	
$datetime1 = new DateTime($a);
$datetime2 = new DateTime($b);
$interval = $datetime1->diff($datetime2);
return $interval->format('%h').":".$interval->format('%i').":".$interval->format('%s');
}
date_default_timezone_set('Asia/Kolkata');

?>
