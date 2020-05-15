function login1()
{
var user,pass;
var username='CRACK';
var password='win';





user=document.frm.b1.value;
user=user.toUpperCase();
pass=document.frm.b2.value;
if((user==username)&&(pass==password))
	{
	document.getElementById("1").innerHTML = "<font color='green'>Login Successfully...!</font>";
	}
else if((user=='')||(pass==''))
{

	document.getElementById("1").innerHTML = "<font color='green'></font>";
}




else
	{
	document.getElementById("1").innerHTML = ("<font color='RED'><b>Invalid Username or Password <bR>I'm So Fast<font color='blue'> :)</font></b></font>");
	}


}