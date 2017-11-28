<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
date_default_timezone_set('Asia/Bangkok'); 
include("connect.php"); 
$idpost = $_GET['idpost'];
$da = $d = date("Y-m-d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
include("tosave.php");
?>