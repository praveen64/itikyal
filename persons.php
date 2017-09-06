<html>
<head> <link rel="stylesheet" href="table.css" type="text/css"/>   
</head>
<body>
<div class="CSS_Table_Example" style="width:700px;height:150px"><?php
INCLUDE ("config.sql");
$result=mysqli_query($con, "SELECT * FROM itikyal WHERE ID=1"); 
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
?></table></div>
</body>
</html>