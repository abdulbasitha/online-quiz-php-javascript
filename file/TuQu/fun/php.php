<?php
ini_set('session.gc_maxlifetime', 86400);
ini_set("display_errors","off");
ob_start();
include_once('../../database.php');
include_once('time.php');
session_start();


	$url=$_POST['b1'];
	$url=strtolower($url);
		$connction=login123();
			$quary=('select * from answer where no=1;');
				$exe=mysqli_query($connction,$quary);
					$exe_array=mysqli_fetch_array($exe);




			if($exe_array['q1']!=$url)
			{

				

				$_SESSION['incorrect']=2;
				header('location:../page_q_.php');
			}
			else
			{
				date_default_timezone_set('Asia/Kolkata');
	  	$_SESSION['time_2']=date('h:i:s');
				


									$time=timediff($_SESSION['time_1'],$_SESSION['time_2']);
									$phno=$_SESSION['phno'];


									/* check allready */
												$ch_q=("select * from time where phno='$phno';");
												$ch_qex=mysqli_query($connction,$ch_q);
												$value=mysqli_fetch_array($ch_qex);



												if($value==null)
												{
						$timeq=("insert into time(phno,t1,t2,t3,t4,t5,t6,t7,t8,t9,t10)values('$phno','$time','null','null','null','null','null','null','null','null','null');");
													$insert=mysqli_query($connction,$timeq);
												}


							$ph=$_SESSION['phno'];

							$quary1=("select * from student where phno='$ph';");
							$exe1=mysqli_query($connction,$quary1);
							$exe_array1=mysqli_fetch_array($exe1);
							if($exe_array1['point']==0)
							{
								$timeq1=("update student set point='10' where student.phno='$ph';");
													$insert1=mysqli_query($connction,$timeq1);
													
													mysqli_query($connction,"UPDATE `student` SET `lasttime` =now() WHERE `student`.`phno` ='$ph'");

							}







												
							$_SESSION['incorrect']=1;
					date_default_timezone_set('Asia/Kolkata');
	  				$_SESSION['time_1']=date('h:i:s');
					$_SESSION['answer']=$exe_array['q1'];
					header('location:../page_q_0.php');
					


			}
			?>