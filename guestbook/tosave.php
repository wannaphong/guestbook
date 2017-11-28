<?php
//ไฟล์นี้ทำหน้าที่บันทึกข้อมูลลงฐานข้อมูล
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      INSERT INTO ans(name,name2,p,email,web,textarea,date,ip) 
VALUES('$name','$name2','$p','$email','$web','$textarea','$da','$ip');
EOF;

echo "name=:"+$name; //แสดงข้อความ

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }
   $db->close();
?>