<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 

session_start();
if(isset($_SESSION['myusername']) )
{
header("location:process.php");
} ?><?php 
session_start();
?>
<html>
<body bgcolor="black">
<center><font color="00ff00"> Congrats, <?php


echo "MR. " . $_SESSION
['myusername'] . ".<br>"; 
?>You have successfully bypassed the login screen.<br>
If you want to find sites vulnerable to login bypass, go to google and type queries like<br>
site:.com inurl=admin.asp
site:.com inurl=login.asp
site:.com inurl=admin.php
 and do what you did just now.
</body>
</html>