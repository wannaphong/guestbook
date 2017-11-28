<?php
session_start();
if ($_SESSION['admin'] ="on") {
	include("connect.php"); 
	echo "<html>";
	echo "<head>";
	echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
	echo "<title>ยินดีต้อนรับเข้าสู่หน้า Admin</title>";
	echo "</head><body>";
	echo "<h2>รายละเอียดที่ตอบ</h2>";
	$db = new MyDB();
	$result = $db->query('select * from ans');
	while ($row = $result->fetchArray()){
		$id = $row['id'];
		$name = $row['name'];
		$text = $row['textarea'];
		//time1 = $row['time'];
		$time2 = $row['date'];
		$ip = $row['ip'];
		print "<div>ข้อความที่ :".$id."<br>";
		print "<div>".$text."";
		print "<br><br>";
    	print "โดย :".$name."  เวลา:".$time2."<br/>";
		print "ที่อยู่ IP: ".$ip."<br>";
		print "<a href='delete.php?id=".$id."'>ลบ</a>";
		print "<hr>";
}
}
else {
	echo "Are you admin?";
}
?>