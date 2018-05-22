<?php
include("index.php");
$con=mysqli_connect("sql313.cuccfree.com","cucch_14999267","p1p2p364");
//create database
$sql="CREATE DATABASE cucch_14999267_vulneraw";


if(mysqli_query($con,$sql))
{
echo "Database cucch_14999267_vulneraw created successfully..";
}

else
{
echo " Error creating database:" .mysqli_error($con);
}

$con2=mysqli_connect("sql313.cuccfree.com","cucch_14999267","p1p2p364","cucch_14999267_vulneraw");
//create table
$sql2="CREATE TABLE users
(
PID INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(PID),
Username VARCHAR(30),
Password VARCHAR(40),
Role CHAR(30)
)";

if(mysqli_query($con2,$sql2))
{
echo "Table users created successfully.";
}

else
{
echo " Error creating table users:" .mysqli_error($con2);
}
 
$con3=mysqli_connect("sql313.cuccfree.com","cucch_14999267","p1p2p364","cucch_14999267_vulneraw");
//mysqli_query("cucch_14999267_vulneraw");
//insert data into table

//mysqli_query($con3, "INSERT 
//INTO users (pid, `Username`, `Password`,`Role`) VALUES(1,'Kalyan','2c421c449adbef76dc47c8f2e238b223','PHP Expert'), 
//(2,'chakra','56378fa4dee5af4b277cac8febdc90fd','Network Support'),(3,'Jacob', '9fd99ece9c50a1df23a24c9f39665b39','Admin'");

/*$sql3=mysqli_query($con3,"INSERT INTO users 
(pid, `Username`, `Passowrd`, `Role`) VALUES(1,'Kalyan','2c421c449adbef76dc47c8f2e238b223','PHP Expert'),
(2,'chakra','56378fa4dee5af4b277cac8febdc90fd','Network Support'),(3,'Jacob', '9fd99ece9c50a1df23a24c9f39665b39','Admin')  ");*/  

$sql3="insert into users(pid,username,password,role) VALUES (1,'Kalyan','123kaly','PHP Expert'),
(2,'chakra','123chak','Network Support'),(3,'Jacob', '123jaco','Admin')  ";

if (!mysqli_query($con3,$sql3))
{
echo "Error inserting data." .mysqli_error($con3);
}

else
{
    echo("success");
mysqli_close($con3);
}




?>