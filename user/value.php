
<!DOCTYPE html>
<html>
	
<head>

	
	<script src="call.js"></script>
	<title>Treasure hunt </title>
    <link rel="icon" href="../img/logo.png" type="image/x-icon" width='100%'>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="value.php"><h3><b>&nbsp;Treasure hunt</b></h3></a>
		</div>
		<!-- menu items -->
		
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				



















		
			</ul>
		</div>
	</div>
</nav>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<body>

<div class="w3-container">
  <h2></h2>
  <p></p>

  <table class="w3-table w3-striped w3-border">
    <tr>
    	<th>Team No</th>
      <th>Name</th>
      <th>Class</th>
      <th>Phone Number</th>
      <th>Total Time</th>
      <th>Points<th>
    </tr>

<?php 
include_once('../file/database.php');
include_once('../file/TuQu/fun/sum_time.php');
$conn=login123();
$k=1;
for($i=1;$i<100;$i++)
{
$qu=("select * from student where no=$i;");
$qu=mysqli_query($conn,$qu);
$value=mysqli_fetch_array($qu);
$p=$value['phno'];
$qu1=("select * from time where phno='$p';");
$qu1=mysqli_query($conn,$qu1);
$value1=mysqli_fetch_array($qu1);
$time=(sum_time($value1['t1'],$value1['t2'],$value1['t3'],$value1['t4'],$value1['t5'],$value1['t6'],$value1['t7'],$value1['t8']));







if($value['name1']=="")
			{
				continue;
			}
			echo "<tr>";
			echo "<td>".$k."</td>";
			echo "<td>".$value['name1']."<br>".$value['name2']."<br>".$value['name3']."</td>";
			echo "<td>".$value['bach']."</td>";
			echo "<td>".$value['phno']."</td>";
			echo "<td>".$time."</td>";
			echo "<td>".$value['point']."</td>";


$k++;
}

   /* <tr>
      <td></td>
      <td></td>
      <td></td>
       <td></td>
       <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
       <td></td>
       <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
<tr>
*/
?>



  </table>
</div>

</body>
</html>

		
		</div>
	</div>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>

<center>Powered by<br>
<img src="../img/pp1.jpg" height="100px" width="1500px">
</body>

</html>
