<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('guestbookdb.db');
    }
}
date_default_timezone_set('Asia/Bangkok');
?>