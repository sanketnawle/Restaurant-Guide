<?php
$hotel=$_GET['name'];
?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("hotel");
$query=mysql_query("INSERT INTO `hotel`.`trial` (`id`, `hotel`) VALUES (NULL, '$hotel')");
$que=mysql_query("SELECT  `user` ,  `rev` FROM  `review` WHERE  `hotel` LIKE  'barista'");
?>

<html>
<body background="../../infoback.jpg"">
<font size="05" color="White">

<b>Sagar Rahurkar</b> &nbsp
<img src="like1.jpg" height="28" width="38">
</img>
<hr>
Barista - So many memories attached to this place. Times spent with friends, dates with some of the beauties, lone special readings, etc. 
Whatever may b the reason, this place will never disappoint u. 
Good location, ample parking space, friendly staff.
A must visit.
<hr>
<br>

<b>Jui Guram</b> &nbsp
<img src="like1.jpg" height="28" width="38">
</img>
<hr>
wanted to have something non.choclate so there were only two option d freash fruit one n d jelly one ....got d jelly one ...n.it was really amazing..it had so many thingss in.it gems, jellys ...and what not...but the quantity was very less
<hr>
<br>

<b>Ashwini Patankar</b> &nbsp
<img src="dislike1.jpg" height="28" width="38">
</img>
<hr>
this place has disappointed me on more than several occasions.
Stale food, poor tasting coffees. Changed ambience which does not go very well.
<hr>
<br>

<b>Aditya Tathe</b>
<img src="like1.jpg" height="28" width="38">
</img>
<hr>
Great place to hang out with friends ! <br>
1.Nice ambiance.<br>
2.No need to explain the taste...Barista the name is enough.<br>
3.Service is top notch ( 10 on 10 )<br>
4.Staff is well mannered and very friendly.<br>
5.Reasonable prices.<br>
6.Ample variety to choose from
<hr>
<br>

<?php while(($row=mysql_fetch_array($que))){ ?>
<b><?php echo $row[0]; ?></b> &nbsp
<img src="../../like1.jpg" height="28" width="38">
</img>
<hr>
<?php echo $row[1]; ?>
<hr>
<?php } ?>
<p>Do you wish to write a review for this restaurant?</p>
<form  name="input" action="alogin.php" method="link">
<input style="height:35px;width:150px;left:600px" type="submit" value="Write a review">
</form>

</font>
</body>
</html>