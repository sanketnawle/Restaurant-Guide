<?php
$hotel=$_GET['name'];
?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("hotel");
$query=mysql_query("INSERT INTO `hotel`.`trial` (`id`, `hotel`) VALUES (NULL, '$hotel')");
$que=mysql_query("SELECT  `user` ,  `rev` FROM  `review` WHERE  `hotel` LIKE  'Bonobo'");
?>

<html>
<body background="../../infoback.jpg"">
<font size="05" color="White">

<b>Vipasha Pillai</b> &nbsp
<img src="like1.jpg" height="28" width="38">
</img>
<hr>
  Lovely place, wonderful ambience, good music and my favourite place in Bandra for a drink. Love the Hoegaarden beer here, one of my favourites.
<hr>
<br>

<b>Arpit Rai</b> &nbsp
<img src="dislike1.jpg" height="28" width="38">
</img>
<hr>
The place itself didn�t have much of a crowd which was fine. Didn�t like the ambience and the general setup though. Food and drinks were quite average. I�d rather go to Big Bang which is in a different wing of the same building. Big Bang is much better. Perhaps Bonobo is more happening when there is a crowd..so maybe Friday nights and Saturday nights, the scene is better.
<hr>
<br>

<b>Irene Amo</b> &nbsp
<img src="like1.jpg" height="28" width="38">
</img>
<hr>
I loved the open space arena! They should change the sound systems though! So what we ordered were: Saut�ed chicken sausages, Balsamic mushroom as starters and both were top notch yummy! Mushroom was too good! Sausages are always yummy!
<hr>
<br>

<b>Aditya Sangle</b>
<img src="like1.jpg" height="28" width="38">
</img>
<hr>
Really liked this place. Open air, good music, very lively and picks up a lot after 1130. We had the red wine sangria pitcher which was quite strong and quite yum. Ordered the tempura prawns with wasabi Mayo. Very good starter - not too oily. Went on to the prawn pasta in red sauce. Replaced penne with spaghetti. Damn good. A little heavy so couldnt finish it even though I was really hungry. A good place to chill on a Saturday evening.
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