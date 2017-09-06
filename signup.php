<html>
<body><?php
INCLUDE ("config.sql");
$firstname=mysqli_real_escape_string($con, $_POST['firstname']);
$lastname=mysqli_real_escape_string($con, $_POST['lastname']);
$mobile=mysqli_real_escape_string($con, $_POST['mobile']);
$gender=mysqli_real_escape_string($con, $_POST['gender']);
$email=mysqli_real_escape_string($con, $_POST['email']);
$address=mysqli_real_escape_string($con, $_POST['address']);
$education=mysqli_real_escape_string($con, $_POST['education']);
$occupation=mysqli_real_escape_string($con, $_POST['occupation']);
$age=mysqli_real_escape_string($con, $_POST['age']);
$agree=mysqli_real_escape_string($con, $_POST['Agree']);


$sql="INSERT INTO itikyal (Firstname,Lastname,Mobile,Gender,Email,Address,Education,Occupation,Age,Agree) VALUES ('$firstname','$lastname','$mobile','$gender','$email','$address','$education','$occupation','$age','$agree')";
if (mysqli_query($con,$sql))
{INCLUDE ('welcome.php'); }
else { echo "error:".mysqli_error($con);
} 
mysqli_close($con);
?>
</body>
</html>