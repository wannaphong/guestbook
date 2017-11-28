<?php
session_start();
$user = $_POST['user'];
$pw = $_POST['password'];
//if(isset($_POST['captcha']) && isset($_SESSION['captcha'])){ //ระบบตรวจสอบcaptcha
	//if($_POST['captcha'] == $_SESSION['captcha']){
		if(($user ="admin") && ($pw ="123456")){
			$_SESSION['admin']="on";
            echo "<a href='home.php'>Ok</a>";
		}
	else {
		echo ("You not admin. :(");
		//}
	}
//}
//}
?>