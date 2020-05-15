<?php
ini_set('session.gc_maxlifetime', 86400);
ini_set("display_errors","on");
ob_start();
include_once('database.php');
include_once('time.php');
session_start();
$phno=$_POST['b1'];
$pass=$_POST['b2'];
$conn=login123();
if(!$conn){


	 				echo "<script>alert('cannot now please try again later..!!!')</script>";
	 				echo "<script> history.go(-1) </script>";


}
else
		{
				$query=mysqli_query($conn,"select * from student where phno='$phno' and pass='$pass'");
				$fetch=mysqli_fetch_array($query);
				//echo $fetch['name'];
					if(($fetch['phno']==$phno)&&($fetch['pass']==$pass))
					{
						$array=unserialize($fetch['submit']);
						$no=count($array);
						if($array==NULL){
							header('location:TuQu/start.php');
								$_SESSION['phno']=$phno;
							}
						else if($no>=16)
						{
							$_SESSION['phno']=$phno;
							$_SESSION['sweet_alert']=1;
							header('location:TuQu/start.php');
						}
						else{

						$_SESSION['phno']=$phno;
							
							$_SESSION['arrayanswe']=$_SESSION['arrayanswe'];
							$_SESSION['start']=$no+1;
							header('location:TuQu/start.php');
							}		


					}
					else
					{
						echo "<script>alert('Incorrect Phone Number or Password')</script>";
 						echo "<script> history.go(-1) </script>"; 
					}


		}



?>