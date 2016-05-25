<?php

class Database {
    protected $db;

    /**
     * Construct
     */
    function __construct() {
        $dsn = 'mysql:dbname=testdb;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $this->db = new PDO($dsn, $user, $password);
    }

    /**
     * Запускает SQL запрос на выполнение и возвращает количество строк, задействованных в ходе его выполнения
     * @param $sql
     * @return int
     */
    function exec($sql) {
        return $this->db->exec($sql);
    }

    /**
     * Принимает sql запрос и возвращает массив объектов указанного класса
     * @param $sql
     * @param $class
     * @return array|bool
     */
    public function queryAll($sql, $class) {
        if (!$stmt = $this->db->query($sql))
            return false;
        $stmt->setFetchMode( PDO::FETCH_CLASS, $class);
        return $stmt->fetchAll();
    }

    /**
     * Принимает sql запрос и возвращает объект указанного класса
     * @param $sql
     * @param $class
     * @return object|bool
     */
    public function queryOne($sql, $class) {
        return $this->queryAll($sql, $class)[0];
    }

}





