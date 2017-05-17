<?php
session_Start();
?>
<html>
<head>


</head>
<body>
<div id="wrapper">
		<div id="down">	
<center>
<form method="post" action="alogin.php">
<table border="1" style="background:#000033;color:white">
<tr><center><th>LOGIN</th></center></tr>
<tr><td>Email:</td><td><input type="text" name="email2"></td></tr>
<tr><td>Password:</td><td><input type="password" name="pass"></td></tr>
<tr><td></td><td><input type="submit" name='login' value="Submit"></td></tr>

</table>
</form></center>
		</div>
		  </div>
		
		<div id="content-right">
		 </div>
	</div>
	<div id="footer"></div>
	<div id="bottom"></div>
</div>
</body>
</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("hotel");

if(isset($_POST['login'])){

$password = $_POST['pass'];
$email = $_POST['email2'];

$check_user = "select * from users where user_pass='$password' AND
user_name='$email'";
$run = mysql_query($check_user);
$count=mysql_num_rows($run);

if($count==1){

$_SESSION['email2']="YES";
$_SESSION["email2"]=$_POST["email2"];
$loc="Location:welcome2.php";
header($loc);
exit();
}
else{
echo "<script>alert('Email or password is incorrect!')</script>";
exit();
}}
