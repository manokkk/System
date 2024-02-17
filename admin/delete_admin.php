<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

mysqli_query($db,"DELETE FROM admin WHERE adm_id = '".$_GET['adm_del']."'");
header("location:all_admin.php");  

?>
