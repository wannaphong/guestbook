<?php
/**
 * Simple example of extending the SQLite3 class and changing the __construct
 * parameters, then using the open method to initialize the DB.
 */
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('guestbookdb.db');
    }
}

$db = new MyDB();

$db->exec("CREATE TABLE IF NOT EXISTS `ans` (
  `id` integer primary key autoincrement,
  `name` text NOT NULL,
  `name2` text NOT NULL,
`p` text NOT NULL,
  `email` text NOT NULL,
  `web` text NOT NULL,
  `textarea` text NOT NULL,
  `da` date NOT NULL,
  `tim` time NOT NULL,
  `ip` text NOT NULL
)");
//$db->exec("INSERT INTO foo (bar) VALUES ('This is a test')");

$result = $db; //->query('SELECT bar FROM foo');
//var_dump($result->fetchArray());
?>