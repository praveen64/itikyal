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
<style>
table,td,tr,th{
    border: 1px solid orange;
}

</style>

</head>
<body>
<?php INCLUDE ('header.php'); ?>
   <div id="templatemo_content_wrapper">
       <div id="templatemo_content">

<?php
INCLUDE ("config.sql");
$result=mysqli_query($con, "SELECT * FROM fsc"); 
echo "<table>
<tr>
<th>Serial No</th>
<th>Reference No</th>
<th>Ration Card No</th>
<th>cardtypeid</th>
<th>Head Of Family</th>
<th>House No</th>
<th>Units</th>
<th>Gas</th>
<th>Approved Date</th>
<th>Card Pool Type</th>
</tr>";
while($row=mysqli_fetch_array($result)) 

{  echo "<tr>";
   echo "<td>". $row['sn'] . "</td>";
   echo "<td>". $row['rn'] . "</td>";
   echo "<td>" .  $row['rcn'] . "</td>";
   echo "<td>" .  $row['cardtypeid'] . "</td>";
   echo "<td>" . $row['hof'] . "</td>";
   echo "<td>" .  $row['hno'] . "</td>";
   echo "<td>" .  $row['units'] . "</td>";
   echo "<td>" .  $row['gas'] . "</td>";
   echo "<td>" . $row['approveddate'] . "</td>";
   echo "<td>" .  $row['CardPoolType'] . "</td>"; 
   echo "</tr>";
}
  
mysqli_close($con);
?></table><center> <div class="rc_btn_01"><a href="contactus.php">Sign up</a></div></center>
      
       <div class="cleaner"></div>
   </div> <!-- end of wrapper 02 -->        
    </div> <!-- end of wrapper 01 -->
<?php INCLUDE ('footer.php'); ?>
  </body>
</html>