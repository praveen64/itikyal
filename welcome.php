<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="table.css" type="text/css"/>   
<script src="Js/poll.js">
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thanks you <?php echo "$firstname" ; ?> for join to our itikyal site</title>
<meta name="keywords" content="Lin Photo, free website template, XHTML CSS layout" />
<meta name="description" content="Lin Photo, free website template, free XHTML CSS layout provided by templatemo.com" />
<link href="templatemo_style1.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field){

    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
</script>
</head>
<body>
<?php INCLUDE ('header.php'); ?>
   
<center><H2>Thanks for registration! <?php echo "$firstname" ; ?></H2></center><center><img src="images/thanks.gif" width="150" height="122"></center><h2><center><a href="members.php"><img src="images/members.png" alt="members" width=200" height="100" ></a></center>
      
<?php INCLUDE ('footer.php'); ?>
  </body>
</html>