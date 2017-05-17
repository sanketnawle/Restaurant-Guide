<?php
$hotel=$_GET['name'];
?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("hotel");
$query=mysql_query("INSERT INTO `hotel`.`trial` (`id`, `hotel`) VALUES (NULL, '$hotel')");
$que=mysql_query("SELECT  `user` ,  `rev` FROM  `review` WHERE  `hotel` LIKE  'Zoe'");
?>

<html>
<body background="../../infoback.jpg"">
<font size="05" color="White">

<b>Atul Khosla</b> &nbsp
<img src="../../like1.jpg" height="28" width="38">
</img>
<hr>
A nice cafe tucked in the deep by lanes of Mumbai. Very western and no wonder is a fav with the firangs. 
I'm not complaining for the food is good and do are the drinks and the ambience reminds me of soho. Keep it up Zoe!
Try Thursday night. There is live music. On the good front, one of my favourites is watermelon and feta salad. Try it out... Nice :)

<br>

<b>Kushal Kothari</b> &nbsp
<img src="../../like1.jpg" height="28" width="38">
</img>
<hr>
Let me start just by saying this.. MUST VISIT! 
The place is a bit in the interiors to access.. but its quite a different world once you enter. Receives a thumbs up on the ambiance! 
This place keeps having frequent music nights.. 
not too loud to not be able to have a conversation.. not too mellow to be completely lost in the background. 
The menu is pretty varied..The food was pretty nice.. Tried the lasagna and the pasta. Both pretty much zoomed past expectations. 
The staff was attentive and the service fast. But most important of all.. this place just has that zing that make you want to spend as much time as possible. 
Do Visit!
<hr>
<br>

<b>Viabhav Aiyal</b> &nbsp
<img src="../../like1.jpg" height="28" width="38">
</img>
<hr>
I love love the place. Such beautiful interiors, such a charming atmosphere and a perfect place for catching up with friends or a date. 
We ordered the sula white and chicken ravioli for the table. Chicken ravioli could've been better but I'm not complaining. 
We followed it by a slice of the chocolate orange cake which was delightful - rich dark chocolate cake with slivers of fresh orange in it.
I would definitely come back for brunch on a weekend afternoon.
There were lots of items on the menu that looked interesting. Had I not come with people who go very conventional I would've definitely tried the beetroot risotto, 
seared basa and John dory.
<hr>
<br>

<b>Ankit Kolabkar</b>
<img src="../../like1.jpg" height="28" width="38">
</img>
<hr>
Cafe Zoe, just like the name, even this place is unique. The staff is very courteous. The ambience of this place is very soothing.
The food is okay, not that great in fact highly priced as compared to the quality of taste and quantity of the food. 
I went there on a Thursday and they had live fusion music playing there,now that was the best part of the place. 
The music was brilliant. It was so soothing that it relieved all my stress.
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