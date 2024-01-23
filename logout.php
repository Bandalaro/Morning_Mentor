<?php
include("./config.php");
session_start();
$_SESSION['username'] == "";
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'Y-m-d H:i:s', time () );
mysqli_query($con,"UPDATE userlog  SET logout = '$ldate' WHERE uid = '".$_SESSION['id']."'");
session_unset();
//session_destroy();
header("Location: login.php");
?>