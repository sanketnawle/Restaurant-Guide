<?php
session_start();
if(!isset($_SESSION['email2'])){
 header("location:alogin.php?problem = not logged in");
 exit();
}
?>
<?php
$user=$_SESSION['email2'];
?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("hotel");
if(isset($_POST['submit'])){
$rev=$_POST['rev'];
$que=mysql_query("SELECT MAX( id ) FROM  `trial`");
$row=mysql_fetch_array($que);
$que2=mysql_query("SELECT  `hotel` FROM  `trial` WHERE  `id` =$row[0]");
$row2=mysql_fetch_array($que2);
$query=mysql_query("INSERT INTO `hotel`.`review` (`id`, `user`, `hotel`, `rev`) VALUES (NULL, '$user', '$row2[0]', '$rev')");
echo "Submitted";
}

?>
<html>
<Title>Admin Page</title>
<head>
</head>
<body>
<div id="warap" style="width:600px;height:400px; background:white;">

<div id="head" style="width:100% height:50%;background:red">
<h1>Hii,<?php echo $user; ?></h1><h1 style="float:right;"><a href="alogout.php">LOGOUT</a></h1></div>
<br><br>
<div id="rev" style="height:200px;width:300px;background:;">
<h1>WRITE YOUR REVIEWS</h1>
<form method="POST" action="welcome2.php">
<table>
<tr><td>Write A Review:</td><br><td style="width:100px;height:100px;"><input type="text" name="rev"></td><tr>
<tr><td></td><td><input type=submit name=submit value=submit></td></tr>
</table>
</form></div></div>
</body>
</html>