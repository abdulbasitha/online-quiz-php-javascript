<?php
ob_start();
$user = $_POST['b1'];
$user1=strtolower($user);

include_once('../../database.php');
include_once('time.php');
session_start();
$connction=login123();
			$quary=('select * from answer where no=1;');
				$exe=mysqli_query($connction,$quary);
					$exe_array=mysqli_fetch_array($exe);


		if($user1==$exe_array['q2'])
			{

					date_default_timezone_set('Asia/Kolkata');
	  				$_SESSION['time_2']=date('h:i:s');

	  							$time=timediff($_SESSION['time_1'],$_SESSION['time_2']);
								$phno=$_SESSION['phno'];
								$ch_q=("select * from time where phno='$phno';");
												$ch_qex=mysqli_query($connction,$ch_q);
												$value=mysqli_fetch_array($ch_qex);



												if($value['t2']=='null')
												{


													$timeq=("update time set t2='$time' where time.phno='$phno';");
													$insert=mysqli_query($connction,$timeq);
												}
							/*last of check allready*/
							
							$ph=$_SESSION['phno'];

							$quary1=("select * from student where phno='$ph';");
							$exe1=mysqli_query($connction,$quary1);
							$exe_array1=mysqli_fetch_array($exe1);
							if($exe_array1['point']==10)
							{
								$timeq1=("update student set point='20' where student.phno='$ph';");
													$insert1=mysqli_query($connction,$timeq1);
													mysqli_query($connction,"UPDATE `student` SET `lasttime` =now() WHERE `student`.`phno` ='$ph'");

							}















				session_start();
				$_SESSION['answer0']=$exe_array['q2'];
				$_SESSION['time_1']=date('h:i:s');
				$_SESSION['incorrect']=1;
			
				header('location:../page_q_1.php');
			}

			else
			{
				$_SESSION['incorrect']=2;
				header('location:../page_q_0.php');
			}
			


?>