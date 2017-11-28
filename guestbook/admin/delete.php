<?php
include("connect.php");
$a = $_GET['id'];
//ฟล์นี้ทำหน้าที่บันทึกข้อมูลลงฐานข้อมูล
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      DELETE FROM ans WHERE id = "$a" 
EOF;
   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "OK\n";
   }
   $db->close();
?>
?>