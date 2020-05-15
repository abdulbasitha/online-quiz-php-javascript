<?php
  ini_set("display_errors","off");
  ob_start();
  session_start();
if($_SESSION['complete']==null)
{
  header('location:../../');
}
include_once('fun/user.php');

?>





<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Crack & Win</title>
  
  
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
<style type="text/css">
html,
body {
   margin:0;
   padding:0;
   height:100%;
}
#container {
   min-height:100%;
   position:relative;
}
#header {
   background:;
   padding:10px;
}
#body {
   padding:10px;
   padding-bottom:60px;   /* Height of the footer */
}
#footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:10%;   /* Height of the footer */
   background:#6cf;
}
</style>
      <link rel="stylesheet" href="css/style.css">

  
</head>

 


  

    <script  src="js/index.js"></script>

<div id="container">
   </div>
   <div id="body"> <div class="congrats">
  <h1>Great job!<br>score: 70/70<br>Thank you for your active participation :)</h1>
</div></div>
   <div id="footer"><img src="../../img/pp1.jpg" height="100%" width="100%">
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js'></script>
</body>

</html>
