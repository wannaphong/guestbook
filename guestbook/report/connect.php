<?php
class MyDB2 extends SQLite3
{
    function __construct()
    {
        $this->open('report.db');
    }
}
?>