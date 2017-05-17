<?php
session_start();
if(isset($_SESSION['email2'])){
session_destroy();
header("location: alogin.php");
 }
?>
