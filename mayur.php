$conn=mysql_connect("localhost","root","");
mysql_select_db('library');

$result = mysql_query("SELECT password FROM userlogin where id='$id';",$conn);

$pw = mysql_fetch_array($result);

///////////////////////////////////////////////

post method in html
<form action="page1.php" method="POST">
<h1>Login</h1>
<div>
<input type="text" placeholder="Username" required="" name="id" />
</div>
<div>
<input type="password" placeholder="Password" required="" name="password" />
</div>
<div>
<input type="submit" value="Log in" />
/////////////////////////////////////////////////////