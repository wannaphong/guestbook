﻿<?php
//ไฟล์นี้ทำหน้าที่บันทึกข้อมูลลงฐานข้อมูล
   $db = new MyDB2();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      INSERT INTO report(idpost,date,ip) 
VALUES('$idpost','$da','$ip');
EOF;

//echo "id=:"+$name; //แสดงข้อความ

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }
   $db->close();
?>