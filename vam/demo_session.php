<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["username"] = "praveen";
$_SESSION["password"] = "cat22";
echo "Session variables are set.";
?>

</body>
</html>