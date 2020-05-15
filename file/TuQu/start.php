<?php
include_once('../database.php');
session_start();
$connction=login123();
$timeq=mysqli_query($connction,"select * from timer where id=1");
$timeqval=mysqli_fetch_array($timeq);
$time=$timeqval['time'];
?>
<?php
$_SESSION['tootleq']=16;
if(!isset($_SESSION['start']))
$_SESSION['start']=1;



$start=$_SESSION['start'];
if(!isset($_SESSION['phno'])){
    header('location:../../');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
 <!--   <link rel="icon" href="http://meaieeesb.org/xtrinia/wp-content/uploads/2016/01/cropped-xtrinia-logo-mea-ieee-sb-1-2-180x180.png" type="image/x-icon" />
<link rel="shortcut icon" href="http://meaieeesb.org/xtrinia/wp-content/uploads/2016/01/cropped-xtrinia-logo-mea-ieee-sb-1-2-180x180.png" type="image/x-icon" /> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>DETEKTATZEKO 2019</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/A.bootstrap.min.css+material-dashboard.css+font-awesome.min.css,Mcc.8mBT9xiSmm.css.pagespeed.cf.QIaU8QyLnY.css" rel="stylesheet"/>
    <!--  Material Dashboard CSS    -->
    
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!--     Fonts and icons     -->
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>

    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="assets/css/A.keyboard.css.pagespeed.cf.QXGL62M0PP.css" rel="stylesheet">
    <link href="assets/css/calculator.css" rel="stylesheet">
    <link href="assets/css/A.style.css+vkeyboard.css,Mcc.3p2UhWCFI-.css.pagespeed.cf.ryXD3q_rLz.css" rel="stylesheet"/>
    
<?php
if(!isset($_SESSION['sweet_alert']))
{
?>
<style>.title{font-size:17px}.main-panel{width:100%;float:none}.main-panel>.content{margin-top:0px}@media only screen and (max-width:767px){.card .card-header.card-header-text{margin:auto;float:left}.wizard-card .tab-content{padding:0}a.btn[data-target="#usefuldatamodal"]{margin:0}}@media (min-width:992px){.sidebar-mini .main-panel{width:auto;margin-left:0}}.navbar.navbar-inverse{background-color:#fff;border-color:transparent}.navbar.navbar-inverse .list-group-item{color:#000}.navbar.navbar-inverse h2{margin-top:0}.navbar.navbar-inverse .list-group{margin-bottom:0}.timer span{margin-right:45px}.wizard-card .nav-pills>li>a{min-width:42px;border-radius:7px;transition:none}.wizard-card .nav-pills>li.active>a.btn-default,.wizard-card .nav-pills>li>a.btn-default:hover{background-color:transparent!important;color:#000!important;background:url(http://d1zttcfb64t0un.cloudfront.net/studentportal/img/buttons-sprite.png) no-repeat;background-position:-65px -32px}.wizard-card .nav-pills>li.active.green>a,.wizard-card .nav-pills>li.green>a,.wizard-card .nav-pills>li.green>a:hover,.wizard-card .nav-pills>li.active.green>a:hover{background-color:#73bc1f!important;color:#fff!important}.checkbox-inline,.radio-inline{margin-top:0px}.form-group .radio label{color:#154482;font-weight:bold}.form-group.is-focused .radio label{color:#154482;font-weight:bold}.wizard-card .nav-pills>li.activegreen a.btn-default{background:url(http://d1zttcfb64t0un.cloudfront.net/studentportal/img/buttons-sprite.png) no-repeat -65px 0px;color:#fff!important}.wizard-card .nav-pills>li.review a.btn-default{background:url(http://d1zttcfb64t0un.cloudfront.net/studentportal/img/buttons-sprite.png) no-repeat -25px -34px;color:#fff!important}.wizard-card .nav-pills>li.ans-review a.btn-default{background:url(http://d1zttcfb64t0un.cloudfront.net/studentportal/img/buttons-sprite.png) no-repeat -65px -72px;color:#fff!important}.wizard-card .nav-pills>li a.btn-default{background:url(http://d1zttcfb64t0un.cloudfront.net/studentportal/img/buttons-sprite.png) no-repeat;background-position:-25px -67px;box-shadow:none}.modal-calc{width:512px}.nav_trigger{cursor:pointer;display:inline-block;font-size:26px;margin:10px 40px 0 0px;position:fixed;color:#144483;right:0;float:right;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-ms-transition:all .5s ease;-o-transition:all .5s ease;transition:all .5s ease}body.show_sidebar .nav_trigger{right:20%;color:#144483;z-index:9999}#push_sidebar{background:#31373d;border-left:1px solid #ddd;bottom:0;color:#95a7b7;left:100%;overflow:auto;position:fixed;top:0;z-index:9;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-ms-transition:all .5s ease;-o-transition:all .5s ease;transition:all .5s ease}#wrapper{margin-right:0;min-height:60%;overflow:hidden;width:100%;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-ms-transition:all .5s ease;-o-transition:all .5s ease;transition:all .5s ease}body.show_sidebar #push_sidebar{left:80%}@media (max-width:767px){.nav_trigger{font-size:19px;margin-right:5px;position:fixed;right:20px}body.show_sidebar .nav_trigger{right:85%}#push_sidebar{width:80%;z-index:9}body.show_sidebar #push_sidebar{left:20%}body.show_sidebar div#layer{right:80%;left:-80%}}#push_sidebar li a{padding:10px 15px 10px 5px;display:block;font:13px Tahoma,Arial,serif;background:#31373d;color:#95a7b7;text-decoration:none;border-bottom:1px solid #3d454c}#push_sidebar li a:hover{background-color:#272c30;color:#95a7b7}#push_sidebar li a .fa{font-size:19px;float:right;width:30px;text-align:center;margin-left:5px}.user .photo img{width:250px;border-radius:50%}.logomain{background:#fff}.logomain img{margin:0 auto;padding:14px 0}.list-group-item{color:#000}.list-group-item span{font-weight:bold;color:#000}body.show_sidebar #layer{right:20%;left:-20%}</style>
</head>

<body">

    <div class="main-panel">
        <div class="content" id="wrapper">
            <div class="container-fluid text-center" style="border-bottom: 1px solid #eee; padding: 10px 20px 10px;">
                <span>
                <!--    <a href="javascript:void(0);" target="_blank" class="pull-left">
                        <img src="http://meaieeesb.org/xtrinia/wp-content/uploads/2016/01/cropped-xtrinia-logo-mea-ieee-sb-1-2-180x180.png" alt="IEO" style="width: 45px;">
                    </a> -->
                      

                        <h3 style="display:inline" class="pull-center"><b>DETEKTATZEKO</b></h3>
                    </a>
                </span>
                                                    
                                                    <div class="pull-right" >
                                                        
                                                        <label class="text-primary"><b><span style="font-size: 25px!important;color:#184682;" class="glyphicon glyphicon-time"></span></b></label>
                                                        <span class="timer" style="font-size: 30px!important;color:#184682;" id="ct"><script language="JavaScript">
TargetDate = "<?php echo $time;?>";
BackColor = "#eeeeee";
ForeColor = "#0a4086";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = " %%H%% : %%M%% : %%S%% ";
FinishMessage = "Timer Over";
</script>
<!-- <script language="JavaScript" src="https://scripts.hashemian.com/js/countdown.js"></script> --></span>
                                                    </div>
                                                    <div class="pull-left" style="padding-left: 4%;">
                                                       
        
                                                    <input type="hidden" name="pendtime" id="pendtime"/>
                                                    <input type="hidden" name="test_id" id="test_id" value="192501"/>
                                                    <input type="hidden" name="userid" value="49211"/>
                                      
            </div>

            <div class="container-fluid main_container">
            <form action="answersave.php?id=<?php echo $start; ?>" method="post" name="questionfrm">
            <input type="hidden" id="pndtime" value="0"/>                            <div class="row">
                                <div class="wizard-container">
                                    <div class="card wizard-card" data-color="blue" id="wizardProfile">
                                        <div class="row">
                                            
                                        <div class="col-md-12">
                                            <div class="tab-content">
                                                                                           
                                                         <div class="tab-pane " id="q1" data-qno="1">
                                                    <input type="hidden" value="1" name="qst_id[]">
                                                    <div class="card-header card-header-text " data-background-color="blue">
                                                        <h4 class="card-title">Question <span>
                                                                <?php echo $start;?></span> </h4>
                                                    </div>
                                                    
                                                    <div class="clearfix"></div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img src="img/Q<?php echo $start; ?>.PNG" alt="" class="img-responsive w-auto">
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                <div class="row answers">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="radio radio-inline">
                                                                <label class="text-primary">
                                                                    <input type="radio" value="A" name="answer" required class="question_answer_2"><b>A</b>
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-inline">
                                                                <label class="text-primary">
                                                                    <input type="radio" value="B" name="answer" required class="question_answer_2"><b>B</b>
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-inline">
                                                                <label class="text-primary">
                                                                    <input type="radio" value="C" name="answer" required class="question_answer_2"><b>C</b>
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-inline">
                                                                <label class="text-primary">
                                                                    <input type="radio" value="D" name="answer" required class="question_answer_2"><b>D</b>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" id="review_2" value="0" name="review[2]">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                                    
                                               
                                            </div>

                                            <div class="wizard-footer p-0">
                                                <div class="text-center">
                                                    <input type='submit' value="submit & next" class='btn  btn-fill btn-primary btn-wd' name='next' > 
                                                   
                                                </div>
                                                 <div class="text-center">
                                                    <button type="button" class='btn btn-default clear_resp' disabled><i class="material-icons">replay</i> <span class="hidden-xs">Clear response</span></button>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>

                                        </div>
                                                                                    
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-warning"><span><b>Important Note</b></span><br> In case you encounter any technical difficulty which disrupts , don’t worry. You can resolve the issue and resume the competition by using your Phone Number & Password. If you are unable to resume the competition, the competition will auto submit and all responses to questions you had already attempted will be considered for evaluation. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <footer class="footer fixed-bottom">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    Copyright &copy; <a href="http://techzia.in" target="_blank" class="text-primary">Techzia</a>
                    <script>document.write(new Date().getFullYear())</script>. All rights reserved.
                </p>
            </div>
        </footer>
        
        <!-- Reaching time Modal -->
        <div id="timereach" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <h4>Reaching end of test. Less than 1 minute left</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
}
?>
<!--   Core JS Files   -->
<script src="assets/js/jquery-3.1.1.min.js.pagespeed.jm.SQZXth9lpM.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js.pagespeed.jm.ARbOwLPNvY.js" type="text/javascript"></script>
<script src="assets/js/jquery.bootstrap-wizard.js.pagespeed.jm.jO1shqlC-x.js"></script>
<script src="assets/js/material.min.js.pagespeed.jm.CdIX7HVo40.js" type="text/javascript"></script>
<script src="assets/js/perfect-scrollbar.jquery.min.js+jquery.tagsinput.js+material-dashboard.js.pagespeed.jc._XjnJw9ka8.js"></script><script>eval(mod_pagespeed_P0onO4sXKN);</script>
<script>eval(mod_pagespeed_hRpU1HR2CF);</script>
<!-- Material Dashboard javascript methods  -->
<script>eval(mod_pagespeed_dQhxNZy39d);</script>
<script src="assets/js/jquery.keyboard.js.pagespeed.jm.u5Slm57iwH.js"></script>
<script src="assets/js/keyboard.js.pagespeed.jm.z3f7MueMDM.js"></script>

<link type="text/css" rel="stylesheet" href="assets/css/calclayout.css"/>
<script type="text/javascript" src="assets/js/oscZenoedited.js.pagespeed.jm.X8b7Ne99kr.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui-js.js.pagespeed.jm.WUkKh1S8fq.js"></script>
<script src="assets/js/sweetalert2.js.pagespeed.jm.yXeQ1rwy2A.js"></script>

<script type="text/javascript">$('#submit_next').on('click',function(e){e.preventDefault();
    window.startq=60;
    var qno=$('.tab-pane.active').data('qno');
    if(qno==9){$(this).hide();
        $('#submit_test').show();
    }
if(qno==10)
{
    submitTest();

}
else{moveToNext();}});
$('#submit_test').on('click',function(e){e.preventDefault();
    submitTest();});function submitTest(){var qno=$('.tab-pane.active').data('qno');
var ans=$(".tab-pane.active").find('input[type="radio"]:checked').val();
    $.post('start.php','ajax=1&qid='+qno+'&submit_test=1&ans='+ans,function(data){})
    ;window.start=0;window.startq=0;
  
}

demoqn={initMaterialWizard:function(){$('.wizard-card').bootstrapWizard({'tabClass':'nav nav-pills','nextSelector':'.btn-next',onNext:function(tab,navigation,index){},onInit:function(tab,navigation,index){var $total=navigation.find('li').length;$width=100/$total;
    var $wizard=navigation.closest('.wizard-card');
    $display_width=$(document).width();if($display_width<600&&$total>3){$width=50;

    }
$first_li=navigation.find('li:first-child a').html();
$moving_div=$('<div class="moving-tab">'+$first_li+'</div>');
refreshAnimation($wizard,index);
$('.moving-tab').css('transition','transform 0s');
},onTabClick:function(tab,navigation,index){$('html,body').animate({scrollTop:0},1000);
},});$('.set-full-height').css('height','auto');
function readURL(input){if(input.files&&input.files[0]){var reader=new FileReader();
    reader.onload=function(e){$('#wizardPicturePreview').attr('src',e.target.result).fadeIn('slow');}
reader.readAsDataURL(input.files[0]);}}

$(window).resize(function(){$('.wizard-card').each(function(){$wizard=$(this);index=$wizard.bootstrapWizard('currentIndex');refreshAnimation($wizard,index);
    $('.moving-tab').css({'transition':'transform 0s'});});});
function refreshAnimation($wizard,index){total_steps=$(".qnbtns").find('a').length;move_distance=$wizard.width()/total_steps;step_width=move_distance;move_distance*=index;$current=index+1;if($current==1){move_distance-=8;}

else if($current==total_steps){move_distance+=8;}
$wizard.find('.moving-tab').css('width',step_width);
$('.moving-tab').css({'transform':'translate3d('+move_distance+'px, 0, 0)','transition':'all 0.5s cubic-bezier(0.29, 1.42, 0.79, 1)'});}}}

//statrt ququ
$(document).ready(function(){demoqn.initMaterialWizard();
    var qno=0;
    var next_qno=qno+1;
    $('.tab-pane').removeClass('active');
    $('#q'+next_qno).addClass('active');});
$(".answers input:radio").click(function(){$(".clear_resp").addClass("btn-danger").removeClass("btn-default").prop('disabled',false);});
    $(".clear_resp").click(function(){
    $(".clear_resp").addClass("btn-default").removeClass("btn-danger").prop('disabled',true);
    $(".tab-pane.active").find('input[type="radio"]').prop('checked',false);
    $(".tab-pane.active").find('input[type="text"]').val("");});

<?php 
if(isset($_SESSION['sweet_alert']))
{
?>
$( document ).ready(function() {

   setTimeout(function() {
        swal({
            title: "Good job!",
            text: "Let's Go To The Final Level .<br>Please Wait. You are being redirected...",
            type: "success"
        }, function() {
            window.location = "http://meaieeesb.org/xtrinia/";
        });
    }, 10);

   setTimeout(function() {
          window.location.replace("https://goo.gl/forms/9FEzGQ33qOUvK7wz1");
    }, 5000);
 

});
<?php
session_destroy();
}
?>

</script>



<html>

