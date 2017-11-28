<?php
$db = new SQLite3('report.db');

$db->exec("CREATE TABLE IF NOT EXISTS `report` (id INTEGER PRIMARY KEY,idpost TEXT,date DATETIME,ip TEXT)");

?>