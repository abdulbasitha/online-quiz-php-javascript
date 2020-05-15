<?php
ob_start();
$user = $_POST['b1'];
$pass=$_POST['b2'];
$user1=strtoupper($user);

include_once('../../database.php');
include_once('time.php');
session_start();
$connction=login123();
			$quary=('select * from answer where no=1;');
				$exe=mysqli_query($connction,$quary);
					$exe_array=mysqli_fetch_array($exe);


		if(($user1=='CRACK')&&($pass==$exe_array['q4']))
			{

					date_default_timezone_set('Asia/Kolkata');
	  				$_SESSION['time_2']=date('h:i:s');

	  							$time=timediff($_SESSION['time_1'],$_SESSION['time_2']);
								$phno=$_SESSION['phno'];
								$ch_q=("select * from time where phno='$phno';");
												$ch_qex=mysqli_query($connction,$ch_q);
												$value=mysqli_fetch_array($ch_qex);



												if($value['t4']=='null')
												{


													$timeq=("update time set t4='$time' where time.phno='$phno';");
													$insert=mysqli_query($connction,$timeq);
												}
							/*last of check allready*/
							
							$ph=$_SESSION['phno'];

							$quary1=("select * from student where phno='$ph';");
							$exe1=mysqli_query($connction,$quary1);
							$exe_array1=mysqli_fetch_array($exe1);
							if($exe_array1['point']==40)
							{
								$timeq1=("update student set point='50' where student.phno='$ph';");
													$insert1=mysqli_query($connction,$timeq1);
													mysqli_query($connction,"UPDATE `student` SET `lasttime` =now() WHERE `student`.`phno` ='$ph'");

							}















				session_start();
				$_SESSION['answer2']=$exe_array['q2'];
				$_SESSION['time_1']=date('h:i:s');
			
				header('location:../page_q_4.php');
			}

			else
			{
				header('location:../page_q_3.php');
			}
			


?>