<?php
$db = new SQLite3('guestbookdb.db');

$db->exec("CREATE TABLE IF NOT EXISTS `ans` (id INTEGER PRIMARY KEY,name TEXT,name2 TEXT,p TEXT,
  email TEXT,
  web TEXT,
  textarea TEXT,
  date DATETIME,
  ip TEXT
);CREATE TABLE IF NOT EXISTS `report` (id INTEGER PRIMARY KEY,idpost TEXT,date DATETIME,
  ip TEXT
);");

?>