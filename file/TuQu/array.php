<?php
include_once('../database.php');
session_start();
$connction=login123();
$a=array("A","B","C","C","C","C","A","C","D","B","D","D","A","A","A","B");

$timeq=mysqli_query($connction,"select * from student;");




?>


<html>
<body>
	<table border="1">
<tr>
	<th>Name</th>
	<th>Phone</th>
	<th>College</th>
	<?php 
	for($i=1;$i<=16;$i++)
		echo "<th>Q{$i}</th>";

	?>
	<th>Point</th>
</tr>

<?php
while($timeqval=mysqli_fetch_array($timeq)){
	$point=0;
?>
<tr>
	<td><?php echo $timeqval['name1'];?></td>
	<td><?php echo $timeqval['phno'];?></td>
	<td><?php echo $timeqval['bach'];?></td>
	<?php
	$arrysub=unserialize($timeqval['submit']);
	$last=count($arrysub);
	$j=0;
		for($i=1;$i<=16;$i++){
			if(!isset($arrysub[$j])){
				echo "<td> </td>";
				$j++;
			}
			else
			{
			
		echo "<td> ".$arrysub[$j]."</td>";
			if($arrysub[$j]==$a[$j])
				$point++;
			$j++;
		}

	}

	?>
	<td><?php echo $point;?></td>
</tr>
	<?php
}
	?>
</table>

</body>


</html>