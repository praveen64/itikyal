<html>
<head bg color="pink">
<title>shunya.com</title>
<h1><center>Welcome to Vulnerawa</center></h1>
</head>
<body bgcolor="pink">
<p align="center">Vulnerawa is a vulnerable web application designed by me and my alter egos.  
</p>
<p align="center"> 
It's main intention is to simulate a vulnerable website. 
</p>
<p align="center"> Let's find out about its founders below.</p>
<center>
<b> Shunya's Founders.<br></b>
<?php
    // Suppress Notice warnings, has nothing to do with our tutorial.
    error_reporting (E_ALL ^ E_NOTICE);
     
    // Open a connection and Select the database
  $con=mysqli_connect("sql313.cuccfree.com", "cucch_14999267", "p1p2p364")or die(mysql_error());
    mysqli_select_db($con,cucch_14999267_vulneraw)or die(mysql_error());
     
    $id=$_GET['id'];
  //  $id=mysqli_real_escape_string($con,$id);
     
if(!isset($id))
          {
            $req=mysqli_query($con,"select pid from users");
            while($row=mysqli_fetch_assoc($req))
                {
                    print "<a href=about.php?id=$row[pid] > Founder $row[pid]</a></br>";
                }
        }
    else
        {
            $req=mysqli_query($con,"select username,role from users where pid='$id'")or 
     die($req. "<br/><br/>".mysqli_error($con));
            $row=mysqli_fetch_row($req);
             
            print "User details : </br>$row[0] </br>$row[1]";
             
        } 
?>
</body>
</html>