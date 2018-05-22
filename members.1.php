<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="table.css" type="text/css"/>   
<script src="Js/poll.js">
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Itikyal members Online details</title>
<meta name="keywords" content="itikyal member list,itikyal list,online itikyal details,itikyal users,itikyal info,praveen gadikoppula" />
<meta name="description" content="itikyal members details online list all users in site" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field){

    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
</script>
</head>
<body>
<?php INCLUDE ('header.php'); ?>
   <div id="templatemo_content_wrapper">
       <div id="templatemo_content">

<div class="CSS_Table_Example">
<?php
INCLUDE ("config.sql");
$result=mysqli_query($con, "SELECT * FROM itikyal"); 
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
   echo "<td>". $row['Id'] . "</td>";
   echo "<td>". $row['Firstname'] . "</td>";
   echo "<td>" .  $row['Lastname'] . "</td>";        echo "<td>" .  $row['Mobile'] . "</td>";
   echo "<td>" . $row['Gender'] . "</td>";
   echo "<td>" .  $row['Email'] . "</td>";            echo "<td>" .  $row['Address'] . "</td>";
   echo "<td>" . $row['Education'] . "</td>";
   echo "<td>" .  $row['Occupation'] . "</td>";      echo "<td>" .  $row['Age'] . "</td>"; 
   echo "</tr>";
}
  
mysqli_close($con);
?></table></div><center> <div class="rc_btn_01"><a href="contactus.php">Sign up</a></div></center>
      
       <div class="cleaner"></div>
   </div> <!-- end of wrapper 02 -->        
    </div> <!-- end of wrapper 01 -->
<?php INCLUDE ('footer.php'); ?>
  </body>
</html>