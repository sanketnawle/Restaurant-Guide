<?php
$hotel=$_GET['name'];
?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("hotel");
$query=mysql_query("INSERT INTO `hotel`.`trial` (`id`, `hotel`) VALUES (NULL, '$hotel')");
$que=mysql_query("SELECT  `user` ,  `rev` FROM  `review` WHERE  `hotel` LIKE  'San churros'");
?>

<html>
<body background="../../infoback.jpg"">
<font size="05" color="White">

<<b>Geetika Sinha</b> &nbsp
<img src="like1.jpg" height="28" width="38">
</img>
<hr>
f you wana try something new in deserts...then please do visit this place just to relish one spanish delicacy "churros with milk choclate dip" from the hoard of dishes listed on the menu. The san churros come in three sizes...pico with three pieces, medio with six and fiesta with 12. It so happens that it is more advisable to order a medio itself in the first go as you would be definitely tempted to order another pico after relishing the first. I also tried rocky road pastry but it didn't turn out so well as churros!!
<hr>
<br>

<b>Meghomita</b> &nbsp
<img src="like1.jpg" height="28" width="38">
</img>
<hr>
The pasta in red sauce looked more like pasta in orange sauce but it was appetizing enough. The garlic bread was quite garlicky but pleasant. While finishing the puff, our churros arrived. We had ordered for one dark chocolate pot and one milk chocolate pot. The churros were absolute heaven. They were warm, crunchy on the outside and a hint of softness in the inside. Portion size was good and quite filing. We loved it so much that we ordered for another portion. The ambience was pleasant and the staff was prompt. Overall, a highly recommended place for the spanish churro fix.
<hr>
<br>

<b>Mukul Purohit</b> &nbsp
<img src="like1.jpg" height="28" width="38">
</img>
<hr>
A casual evening stroll led us to this place. And I must say, this is quite impressive. 
We tried the dark hot chocolate - absolutely amazing! A must try! We also ordered coffee, which was good. The desserts spread looked impressive. Will be on the watch list for further sweet tooth tingles - esp. the traditional churros.
<hr>
<br>

<b>Zara</b>
<img src="like1.jpg" height="28" width="38">
</img>
<hr>
It's Heaven for Chocolate Lovers,Kids of all Ages and for all things Sweet!I love Chocolateria San Churro!I love their Hot Chocolates,Classic Spanish as well as Coverture,it's got rich,thick Dark chocolate...and also comes in different flavours.I am fond of their fondue which is definitely a must have,especially with their speciality Sugar Dusted Churros!Yummm!Its Fried and simply goes very well with it.
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