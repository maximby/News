<?php

class Database {
    protected $db;

    function __construct() {
        $dsn = 'mysql:dbname=testdb;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $this->db = new PDO($dsn, $user, $password);
    }

    function exec($sql) {

    }

}





