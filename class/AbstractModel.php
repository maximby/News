<?php

abstract class AbstractModel {

    static protected $_table = 'news';

    /**
     * Получение всех записей из БД
     * @return array|bool
     */
    static public function getAll() {
        $db = new Database();

        $sql = 'SELECT * FROM ' . static::$_table;
        //var_dump($sql); @todo delete
        return $db->queryAll($sql, get_called_class());
    }

    /**
     * Получение одной записи из БД
     * @param $id int Primary key
     * @return bool|object
     */
    static public function getOne($id) {
        $db = new Database();
        $id = intval($id);
        $sql = "SELECT * FROM " . static::$_table . " WHERE id = $id";
        return $db->queryOne($sql, get_called_class());
    }

} 