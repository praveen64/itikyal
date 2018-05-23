<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<script>

  (adsbygoogle = window.adsbygoogle || []).push({

    google_ad_client: "ca-pub-1965085549465896",

    enable_page_level_ads: true

  });

</script>

<script src="Js/poll.js">

</script>

<script src="Js/welcome.js">

</script><meta name="verification" content="f552de7d8d45ba87c37fe023dacefff7" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>itikyal</title>

<meta name="keywords" content="Famous Itikyal tourist place for Sai baba Temple" />

<meta name="description" content="Iikyal village development website day by date update imformation of village improment and The histroy in past year and also much more  detail about itikyal village" />

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">

function clearText(field){



    if (field.defaultValue == field.value) field.value = '';

    else if (field.value == '') field.value = field.defaultValue;



}

</script>

</head>

<body> 

<?php include_once("analyticstracking.php") ?>

<?php include( "header.php" )  ; ?>
 
   <div id="templatemo_content_wrapper">

       <div id="templatemo_content">

    

       <div class="column_w210 fl">

        

           <div class="header_01">

               Latest Blog Posts

            </div>

            

            <div class="latest_news">

            <div class="header_03">[29-JUN-2017]</div>

             <div class="header_02"><a href="#">Newly Formed Gym</a></div>

              

              <p>Itikyal gym can help you get a little more motivated to strive toward your own fitness ...</p>

       </div>

                      

          <div class="margin_bottom_10"></div>

          

          <div class="latest_news">

              <div class="header_03">[28-OCT-2016]</div>

            <div class="header_02"><a href="#">Famous Visting Places</a></div>

              <p>Don't miss a chance to visit some of the best places in itikyal like Sai Baba  Temple,Venkateswara Temple,Beautifull Rivers....</p>

       </div>

                      

          <div class="margin_bottom_10"></div>

          

          <div class="latest_news">

              <div class="header_03">[27-AUG-2016]</div>

            <div class="header_02"><a href="#">Itikyal Sarpanch</a></div>

              <p>A sarpanch is an elected head of a village-level statutory institution of local self-government called the panchayat (village government) in India (gram panchayat). The sarpanch, together with other elected panchas (members), constitute the gram panchayat. </p>

       </div>

                        

            <div class="margin_bottom_10"></div>

            

            <div class="rc_btn_01"><a href="#">Read All</a></div>

            

        

           <div class="cleaner"></div>

        </div> <!-- end of a column -->

        

        <div class="column_w430 fl vl_divider">

           
            <img src="images/templatemo_image_01.jpg" alt="image" />

            

            <div class="header_01">Welcome to our Itikyal Village site!</div>
           <div id="donate">
            <a href="/donate.php"><img src="images/templatemo_donate.png" heigh="100" width="250" align="center" alt="donate" /></a>
           </div>
            

            <p>Itikial also known as itikyala is a small town in <a href="http://en.m.wikipedia.org/wiki/Karimnagar_district">Karimnagar district,</a>of<a href="http://en.m.wikipedia.org/wiki/Telangana">Telangana,</a> India. The town is about 65 km from the district

headquarters at <a  href="http://en.m.wikipedia.org/wiki/Karimnagar">Karimnagar,</a> at an average elevation of 264 metres (866 ft) above sea level.</p>

   

        <p>As of the 2001 Indian census, Itikial had a

population of 12,400. Males constitute 48% of

the population and females 52%. Itikial has an

average <a href="http://en.m.wikipedia.org/wiki/Literacy_rate">literacy rate</a> of 63%, higher than the national average of 59.5%. Male literacy is 75%,

and female literacy is 51%.</p>

        

           <div class="cleaner"></div>        

        </div> <!-- end of a column -->

        

       <div class="column_w210 fl vl_divider">

        

           <div class="header_01">

               Categories

            </div>



            <ul class="category_list">

            <li><a href="#">Itikyal Agriculture</a></li>

           <li><a href="#">Itikyal Schools</a></li>

           <li><a href="#">Itikyal College</a></li>

           <li><a href="#">Itikyal Market</a></li>

           <li><a href="#">Itikyal Shops</a></li>

           <li><a href="#">Itikyal Temples</a></li>

           <li><a href="#">Itikyal Castes</a></li>

           <li><a href="#">Itikyal Religions</a></li>

           <li><a href="#">Itikyal Festivels</a></li>

           <li><a href="#">Itikyal Banks</a></li>

           <li><a href="#">Itikyal services</a></li>

     </ul>  

<!----------------------------------------------------------->
<?php
INCLUDE ("config.sql");
$result1=mysqli_query($con, "SELECT count(hof) as th,sum(units) as tp FROM fsc;");
$result2=mysqli_query($con, "SELECT sum(amount) as td FROM successdonations where status='success';");

$row1=mysqli_fetch_array($result1);
$row2=mysqli_fetch_array($result2);
$houses=$row1['th'];
$population=$row1['tp'];
$donation=  $row2['td'];

mysqli_close($con);    

?>
<!----------------------------------------------------------->















<!-- Trigger/Open The Modal -->

<button id="myBtn">Get Village Info</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>::: Itikyal Village Statistics :::</h2>
    </div>
    <div class="modal-body">
     <h1>Total Houses : <?php echo $houses."."; ?></h1>
     <h1>Total Population : <?php echo $population."."; ?></h1>
     <h1>Total Donation Amount : <?php echo "&#8377;".$donation."/-"; ?></h1>
     
    </div>
    <div class="modal-footer">
      <h3>* This details are based on TS FSC and Donations count</h3>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

            

        

           <div class="cleaner"></div>

        </div> <!-- end of a column -->

        

        <div class="margin_bottom_20 h_divider"></div>        

        <div class="margin_bottom_20"></div>

        

        <div class="column_w920">

        

      <div class="column_w190 fl margin_right_40">

               <a href="#"><img src="images/templatemo_image_02.jpg" alt="image" /></a>

              <p>Ever green  nature and peaceful environment  high yield crops and fields in itikyal....<a href="#">Read more...</a></p>                

          </div>

            

      <div class="column_w190 fl margin_right_40">

               <a href="#"><img src="images/templatemo_image_03.jpg" alt="image" /></a>

          <p>Load sir Venkateswara temple located in the middle of the village by join three ways at place in itikyal village. <a href="#">Read more...</a></p>                

          </div>

                 

<div class="column_w190 fl margin_right_40">

        <a href="#"><img src="images/templatemo_image_04.jpg" alt="image" /></a>

   <p>The library is a key to the world of knowledge and acquisition of knowledge will help enlighten the personality of an individual at the vital, spiritual and mental .. <a href="#">Read more...</a></p>                

   </div>

     

     

<div class="column_w190 fl">

        <a href="#"><img src="images/templatemo_image_05.jpg" alt="image" /></a>

   <p>Full of interesting river facts , this page will amaze and astound you with interesting facts about itikyal river...<a href="#">Read more...</a></p>                

   </div>

   



            <div class="margin_bottom_15"></div>

        </div>

    

       <div class="cleaner"></div>

   </div> <!-- end of wrapper 02 -->        

    </div> <!-- end of wrapper 01 -->

    

<?php include ( "footer.php" ); ?></body>

</html>