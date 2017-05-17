<?php
$hotel=$_GET['name'];
?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("hotel");
$query=mysql_query("INSERT INTO `hotel`.`trial` (`id`, `hotel`) VALUES (NULL, '$hotel')");
$que=mysql_query("SELECT  `user` ,  `rev` FROM  `review` WHERE  `hotel` LIKE  'Salt water cafe'");
?>

<html>
<body background="../../infoback.jpg"">
<font size="05" color="White">

<b>Harish Gupta</b> &nbsp
<img src="like1.jpg" height="28" width="38">
</img>
<hr>
Wowza! Nice place, great ambience, quick service and great food. Enough said already.

Was on a splash and dash routine across town and colleague suggest this place. Ordered the pepper crostini, Greek salad and fresh lime. And colleague went with a Spanish omelette. I polished off the place sparkling clean and promised to be back for desserts next time!
<hr>
<br>

<b>Shreya Shively</b> &nbsp
<img src="like1.jpg" height="28" width="38">
</img>
<hr>
The ambience is really nice, friendly or romantic, could go either way. I actually loved the fact that the music wasn't loud, letting conversation actually possible. We ordered the Polenta Crusted Chicken (Above Average), the Seared Basa (Awesome!) and Lemon Pie (Good!) for our meal. Also had a kiwi refreshing drink which was genuinely refreshing. Overall, definitely worth going to multiple times, great food, great ambience and decently fast service!
<hr>
<br>

<b>Tasneem Mukadam</b> &nbsp
<img src="like1.jpg" height="28" width="38">
</img>
<hr>
Salt Water Café popularly known as SWC for the frequent goers! SWC caters to the loners, family, kids, business people, girls night out or an office celebration. The casual ambience with the attentive staff has always been a great experience.The added dishes on the menu are good and was needed to keep the regulars craving for more. My favorite being the chicken burger - delicately flavored, fries and the coleslaw with the mustard dressing is an all time fav. My recent discovery of the tomato- mozzarella- aurugula salad , which is so fresh and flavored is going be a MUST HAVE on the table for a while now
<hr>
<br>

<b>Hardik Shah</b>
<img src="like1.jpg" height="28" width="38">
</img>
<hr>
Good place to go for a nice Sunday dinner.perfect ambience, the place is quite big. Food service is very fast. Got my pasta in like 10 mins. Also great bar menu!! They also have a fab unlimited alcohol deal. It's totally worth it. Must try!
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