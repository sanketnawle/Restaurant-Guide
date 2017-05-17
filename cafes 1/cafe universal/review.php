<?php
$hotel=$_GET['name'];
?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("hotel");
$query=mysql_query("INSERT INTO `hotel`.`trial` (`id`, `hotel`) VALUES (NULL, '$hotel')");
$que=mysql_query("SELECT  `user` ,  `rev` FROM  `review` WHERE  `hotel` LIKE  'Cafe universal'");
?>

<html>
<body background="../../infoback.jpg"">
<font size="05" color="White">

<b>Harmaan Madon</b> &nbsp
<img src="like1.jpg" height="28" width="38">
</img>
<hr>
 I like that it's unique in its approach and decor, with the focus on having good food and conversation with friends and family. Truly, one of a very few left in Mumbai
<hr>
<br>

<b>Aakanksha</b> &nbsp
<img src="like1.jpg" height="28" width="38">
</img>
<hr>
 Ordered beer, some beef chilly and Steak n onions. For 2 people, this is more than filling. While the beef chilly was super tasty, the beef lacked the juiciness one finds in leopolds. The Steak is good as well but nothing great. try Steak, onion and chips in Martins, Colaba. 

The ambiance was soothing, crowd was mix of students, working corporates and firangs ofcourse. The service was prompt. All in all, definitely coming back ! 
<hr>
<br>

<b>Ayaz</b> &nbsp
<img src="dislike1.jpg" height="28" width="38">
</img>
<hr>
Them ambience is good. I went on a hot summer day so the lack of aircon was a bummer. There weren't a lot of customers when I was there. (Because I went at a really odd hour) 
My review and rating is simply based on their O.M.G burger and fries because that's all I had room for. I had heard a lot about omg burger. So that's what I decided to eat. 
And it was bad. To put it mildly. It tasted weird and the beef wasn't properly cooked IMO. The fries weren't very good either. 
<hr>
<br>

<b>Tushin Sarkar</b>
<img src="like1.jpg" height="28" width="38">
</img>
<hr>
Almost a century old, cafe universal is one of the few surviving Irani joints. However unlike a few other Irani restaurants it has adapted to change like anything. It has got a wide variety in menu from sizzlers to burgers and of course booze to keep up the spirits. Frequented by a large number of foreigners its a popular joint for the young at age and the young at heart alike. The cost is well within budget and most meals the potions are sizeable.
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