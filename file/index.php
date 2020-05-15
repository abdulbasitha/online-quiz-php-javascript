

<!DOCTYPE html>
<html>
	<script language="javascript">
	
	function checking()
{
var b1,l;
b1=document.signupform.b1.value;
l=b1.toLowerCase();
document.signupform.b1.value=l;
}
	
	
	</script>
<head>
	<title>DETEKTATZEKO | Registration </title>
	<link rel="icon" href="http://meaieeesb.org/xtrinia/wp-content/uploads/2016/01/cropped-xtrinia-logo-mea-ieee-sb-1-2-180x180.png" type="image/x-icon" width='100%'>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
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
			<a class="navbar-brand" href=""><h3><b>&nbsp;DETEKTATZEKO</b></h3>
</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				
				<li class="active"><a href="">New User</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="startu.php" method="post" name="signupform">
				<fieldset>
					<legend>Let's start</legend>
<form name="signupform">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="b1" placeholder="*Name" required  class="form-control" />
						<span class="text-danger"></span>
					</div>
				
					
					<div class="form-group">
						<label for="name">Phone Number</label>
						<input type="number" name="b2" min="5000000000" max="9999999999" placeholder="*Phone Number" required class="form-control" />
						<span class="text-danger"></span>
					</div>

					<div class="form-group">
						<label for="name">Email</label>
						<input type="email" name="b3" placeholder="*Email" required class="form-control" />
						<span class="text-danger"></span>
					</div>

					
					<div class="form-group">
						<label for="name">College</label>
						<input type="text" name="b4" placeholder="*College" required  class="form-control" />
						<span class="text-danger"></span>
					</div>


				

					<div class="form-group">
						<input onclick="checking();" type="submit" name="signup" value="Register" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-success"></span>
			<span class="text-danger"></span>
		</div>
	</div>
	
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



