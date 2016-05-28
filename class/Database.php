<?php

class Database {

    /**
     * @var PDO
     */
    protected $dbh;

    protected $className = 'stdClass';
    /**
     * Construct
     */
    function __construct() {
        $dsn = 'mysql:dbname=world_news;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $this->dbh = new PDO($dsn, $user, $password);
    }

    /**
     * Задает имя класса
     * @param $className
     */
    public function setClassName($className) {

        $this->className = $className;

    }
    public function query($sql, $param = []) {

        $stmt = $this->dbh->prepare($sql);
        $stmt->execute($param);
        return $stmt->fetchAll(PDO::FETCH_CLASS, $this->className);
    }

    public function exec($sql, $param = []) {

            $stmt = $this->dbh->prepare($sql);
            return $stmt->execute($param);
        }




    /**
     * Запускает SQL запрос на выполнение и возвращает количество строк, задействованных в ходе его выполнения
     * @param $sql string
     * @return int
     */
    function execu($sql) {
        return $this->dbh->exec($sql);
    }

    /**
     * Принимает sql запрос и возвращает массив объектов указанного класса
     * @param $sql string
     * @param $class string
     * @return array|bool
     */
    public function queryAll($sql, $class) {
        if (!$stmt = $this->dbh->query($sql))
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

    /**
     * Возвращает экранированную строку
     * @param $param mixed
     * @return string
     */
    public function quote($param) {
        return $this->dbh->quote($param);
    }
}





