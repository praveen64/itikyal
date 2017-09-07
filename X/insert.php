<?php

$con = mysql_connect("sql313.cuccfree.com","cucch_14999267","p1p2p364","cucch_14999267_itikyal");
if(!$con){
die(mysql_error());
}
$seldb = mysql_select_db("cucch_14999267_itikyal", $con);
if(!seldb){
die(mysql_error());
}

$query = "CREATE TABLE `users` (
`id` INT( 50 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`username` VARCHAR( 15 ) NOT NULL ,
`password` VARCHAR( 15 ) NOT NULL ,
`email` VARCHAR( 50 ) NOT NULL
)";

$query = mysql_query($query, $con);
if(!$query){
die(mysql_error());
}else{
echo "Success!";
}

?>