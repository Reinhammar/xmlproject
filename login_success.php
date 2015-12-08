<?php
session_start();
if(!session_is_registered("$_SESSION[myusername]")){
header("location:welcome.php");
}
?>
