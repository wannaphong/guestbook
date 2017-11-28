<?php
include("../connect.php");
include("connect.php");
echo "<html>";
	echo "<head>";
	echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
	echo "<title>ระบบรายงานจากผู้คน</title>";
	echo "</head><body>";
	$db = new MyDB();
	$db2 = new MyDB2();
$result = $db2->query('select * from report');
while ($row = $result->fetchArray()){
	$idpost = $row['idpost'];
	$ip = $row['ip'];
//time1 = $row['time'];
	$time = $row['date'];
	$result2 = $db->query('select * from ans where id=$idpost');
		while ($row2 = $result2->fetchArray()){
			$id2 = $row['id'];
	$name2 = $row['name'];
	$text2 = $row['textarea'];
//time1 = $row['time'];
$time2 = $row['date'];
	print "<div>ข้อความที่ :".$id2."<br>";
	print "<div>".$text2."";
	print "<br><br>";
    print "โดย :".$name2."  เวลา:".$time2."<br/>";
	print "<a href='../admin/delete.php?id=".$id."'>รายงานผู้ดูแล</a>";
	print "<hr>";
		}
}
?>