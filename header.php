
<div id="templatemo_container">
   <div id="templatemo_banner">
      <!-- <div id="logo"></div>  -->

        <div id="search_section">
            <form action="Search.php" method="post">
                <input type="text" value="Enter keyword here..." name="search" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
              <input type="submit" name="Search" value="Search" alt="Search" id="searchbutton" title="Search" />
            </form>
        </div> 

    </div> <!-- end of banner -->
    
    <div id="templatemo_menu">
        <ul>
            <li><a href="index.php"><span></span>Home</a></li>
            <li><a href="gallery.php"><span></span>Gallery</a></li>
            <li><a href="login.php"><span></span>Live</a></li>
            <li><a href="notifications.php"><span></span>Notifications</a></li>            
            <li><a href="members.php"><span></span>Members</a></li>
            <li><a href="contactus.php"><span></span>Sign up</a></li>
        </ul>   
   </div> <!-- end of menu -->

<marquee direction="left" bgcolor="Tomato">
<?php
INCLUDE ("config.sql");
$result=mysqli_query($con, "SELECT * FROM successdonations where status='success';"); 


while($row=mysqli_fetch_array($result)) 

{  
    echo" &nbsp; <b><font color='#ffcc00'>". $row['firstname']."</font></b>";
    echo " &nbsp <i> donted </i> ";
    echo "<b><font color='Green'> &nbsp &#8377;".$row['amount']." </font></b> &nbsp; || ";
    
    
}
  
mysqli_close($con);
?>
</marquee>
