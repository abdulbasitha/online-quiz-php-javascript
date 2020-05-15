<?php
  ini_set("display_errors","on");
ob_start();
$userinput = $_POST['b1'];


$user1=$userinput;

include_once('../../database.php');
include_once('time.php');
include_once('sum_time.php');
include_once('finalsms.php');
session_start();

$connction=login123();
			$quary=('select * from answer where no=1;');
				$exe=mysqli_query($connction,$quary);
					$exe_array=mysqli_fetch_array($exe);


					if($exe_array['q7']==$user1)
				{

					date_default_timezone_set('Asia/Kolkata');
	  				$_SESSION['time_2']=date('h:i:s');

	  							$time=timediff($_SESSION['time_1'],$_SESSION['time_2']);
								$phno=$_SESSION['phno'];
								$ch_q=("select * from time where phno='$phno';");
												$ch_qex=mysqli_query($connction,$ch_q);
												$value=mysqli_fetch_array($ch_qex);
												$value1=$value;
												$_SESSION['incorrect']=1;

												if($value['t7']==null)
												{


													$timeq=("update time set t7='$time' where time.phno='$phno';");
													$insert=mysqli_query($connction,$timeq);
												}
													/*last of check allready*/
										$ph=$_SESSION['phno'];

							$quary1=("select * from student where phno='$ph';");
							$exe1=mysqli_query($connction,$quary1);
							$exe_array1=mysqli_fetch_array($exe1);
							if($exe_array1['point']==60)
							{
								$timeq1=("update student set point='70' where student.phno='$ph';");
													$insert1=mysqli_query($connction,$timeq1);
													mysqli_query($connction,"UPDATE `student` SET `lasttime` =now() WHERE `student`.`phno` ='$ph'");

							}



				$time=(sum_time($value1['t1'],$value1['t2'],$value1['t3'],$value1['t4'],$value1['t5'],$value1['t6'],$value1['t7'],$value1['t8']));



				$_SESSION['complete']=1;
				
				
				

								



				$_SESSION['answer5']=$exe_array['q5'];
				header('location:../complete.php');
			}
				else
				{
					$_SESSION['incorrect']=5;
					header('location:../page_q_5.php');

				}


				?>