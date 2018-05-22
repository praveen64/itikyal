
<?php
INCLUDE ("config.sql");
$result=mysqli_query($con, "SELECT sum(units) as total FROM fsc;"); 
$row=mysqli_fetch_array($result);
echo "$result";
/* while($row=mysqli_fetch_array($result)) 

{  
    echo $row['hof'];
    
    echo $row['AMOUNT'];
    
    
} */
  
mysqli_close($con);
?>