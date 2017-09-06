<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="table.css" type="text/css"/>   
<script src="Js/poll.js">
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online itikyal members details search</title>
<meta name="keywords" content="Itikyal members details online, itikyal, praveen gadikoppula,itikyal site,itikyal,itikyal search" />
<meta name="description" content="online details of itikyal village people search with name,age,number,id"/>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field){

    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
</script>
</head>
<body>
<?php 
INCLUDE ('header.php'); ?>
   <div id="templatemo_content_wrapper">
       <div id="templatemo_content"><center>
<h1>:::<?php 
INCLUDE ("config.sql");

$text=mysqli_real_escape_string($con, $_POST['search']);
echo"Search Result for <font color='green'>$text</font>" ?>:::</h1></center>
<div class="CSS_Table_Example"> 
<?php
INCLUDE ("config.sql");
$text=mysqli_real_escape_string($con, $_POST['search']);
$result=mysqli_query($con, "SELECT * FROM itikyal
WHERE ID='$text' OR Firstname='$text' OR Lastname='$text' OR Mobile='$text' OR Gender='$text' OR Email='$text' OR Address='$text' OR Education='$text' OR Occupation='$text' OR Age='$text' "); 
echo "<table>
<tr>
<td>ID</td>
<td>First Name</td>
<td>Last Name</td>
<td>Mobile</td>
<td>Gender</td>
<td>Email</td>
<td>Address</td>
<td>Education</td>
<td>Occupation</td>
<td>Age</td>
</tr>";
while($row=mysqli_fetch_array($result)) 

{  echo "<tr>";
   echo "<td>" . $row['ID'] . "</td>";
   echo "<td>" . $row['Firstname'] . "</td>";
   echo "<td>" .  $row['Lastname'] . "</td>";        echo "<td>" .  $row['Mobile'] . "</td>";
   echo "<td>" . $row['Gender'] . "</td>";
   echo "<td>" .  $row['Email'] . "</td>";            echo "<td>" .  $row['Address'] . "</td>";
   echo "<td>" . $row['Education'] . "</td>";
   echo "<td>" .  $row['Occupation'] . "</td>";      echo "<td>" .  $row['Age'] . "</td>"; 
   echo "</tr>";
}
  
mysqli_close($con);
?></table></div><center><div class="rc_btn_01"><a href="contact us.php">Sign up</a></div></center>
      
       <div class="cleaner"></div>
   </div> <!-- end of wrapper 02 -->        
    </div> <!-- end of wrapper 01 -->
<?php INCLUDE ('footer.php'); ?>
  </body>
</html>