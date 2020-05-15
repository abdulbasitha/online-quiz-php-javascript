 <?php
 include_once('../../database.php');
 $phno=$_POST['b1'];
 $conn=login123();
 $eq=("delete from student where phno='$phno';");
 $eq1=("delete from time where phno='$phno';");

 $exc=mysqli_query($conn,$eq);
 $exc1=mysqli_query($conn,$eq1);
if($exc== true)
 {
 	echo "<script> alert('Details Are Removed...!'); </script>";
 	echo "<script> history.go(-1) </script>";
 }
else
{
	echo "<script> alert('Details Not Removed...!'); </script>";
	echo "<script> history.go(-1) </script>";
}
















 ?>