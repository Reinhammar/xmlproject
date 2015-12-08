<?php
// Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==0){

// Register $myusername, $mypassword and redirect to file "login_success.php"
s$sql="INSERT INTO $tbl_name VALUES(NULL,'$myusername', '$mypassword')";
mysql_query($sql);
echo mysql_error();
header("location:register_success.php");
}
else {
echo "Username already taken";
}
?>
 <!DOCTYPE html>
<html>
<body>

</body>
</html>
