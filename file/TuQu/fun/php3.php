<?php
ob_start();
$userinput = $_POST['b1'];


$user1=strtolower($userinput);

include_once('../../database.php');
include_once('time.php');
session_start();
$connction=login123();
			$quary=('select * from answer where no=1;');
				$exe=mysqli_query($connction,$quary);
					$exe_array=mysqli_fetch_array($exe);

		if($exe_array['q5']==$user1)
				{

					date_default_timezone_set('Asia/Kolkata');
	  				$_SESSION['time_2']=date('h:i:s');

	  							$time=timediff($_SESSION['time_1'],$_SESSION['time_2']);
								$phno=$_SESSION['phno'];
								$ch_q=("select * from time where phno='$phno';");
												$ch_qex=mysqli_query($connction,$ch_q);
												$value=mysqli_fetch_array($ch_qex);

												$_SESSION['incorrect1']=1;

												if($value['t5']=='null')
												{


													$timeq=("update time set t5='$time' where time.phno='$phno';");
													$insert=mysqli_query($connction,$timeq);
												}
													/*last of check allready*/


													$ph=$_SESSION['phno'];

							$quary1=("select * from student where phno='$ph';");
							$exe1=mysqli_query($connction,$quary1);
							$exe_array1=mysqli_fetch_array($exe1);
							if($exe_array1['point']==30)
							{
								$timeq1=("update student set point='40' where student.phno='$ph';");
													$insert1=mysqli_query($connction,$timeq1);
													mysqli_query($connction,"UPDATE `student` SET `lasttime` =now() WHERE `student`.`phno` ='$ph'");

							}





										session_start();
				$_SESSION['answer3']=$exe_array['q3'];
				$_SESSION['answer2']=$exe_array['q3'];
				$_SESSION['time_1']=date('h:i:s');
				
				header('location:../page_q_3.php');
			}
				else
				{
					$_SESSION['incorrect1']=2;
					header('location:../page_q_2.php');

				}


				?>