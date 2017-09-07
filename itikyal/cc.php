<html>
<body> <?php
if(count($_COOKIE) > 0) {
echo "Cookies are enabled.";
} else {
echo "Cookies are disabled.";
} ?>
<?php
$x=count($_COOKIE)
;
echo"no of cookie= $x";
?></body>
</html>