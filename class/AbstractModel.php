<?php

abstract class AbstractModel
{

    static protected $_table;

    protected $_data = [];

    static public function findAll()
    {
        $db = new Database();
        $className = get_called_class();
        $db->setClassName($className);

        $sql = 'SELECT * FROM ' . static::$_table;

        return $db->query($sql);

    }

    static public function findOneByPk($id)
    {
        $db = new Database();
        $className = get_called_class();
        $db->setClassName($className);

        $sql = 'SELECT * FROM ' . static::$_table . ' WHERE id = :id';

        return $db->query($sql, [':id' => $id])[0];

    }

    public function __set($k, $v) {
        $this->_data[$k] = $v;
    }

    public function __get($k) {
        return $this->_data[$k];
    }

    public function insert() {
        $this->_data['time_created'] = time();

        $db = new Database();
        $className = get_called_class();
        $db->setClassName($className);
        $data = [];
        $cols = array_keys($this->_data);
        foreach ($this->_data as $k => $v ) {
            $data[] = [0=>$k,1=>$v,2=>":$k"];
        }

        $sql = "INSERT INTO " . static::$_table . ' ( ' . implode(', ', array_column($data, 0) ) . ' )
                VALUES ( ' . implode(', ', array_column($data, 2) ) . ')';

//        var_dump($sql);
//        echo '<br>';
//        var_dump(array_column($data, 1, 2))
//        ;die;

        return $db->exec($sql,array_column($data, 1, 2) );

    }

    public function update() {
        $this->_data['time_update'] = time();
        $id = (int) $_GET['id'];

        $db = new Database();
        $className = get_called_class();
        $db->setClassName($className);

        $data = [];
        foreach ($this->_data as $k => $v) {
            $data[] = [0 => $k.' = ', 1 => $v, 2 => ':'.$k];
        }


        $sql = 'UPDATE ' . static::$_table . ' SET ' . implode(', ', array_column($data, 2, 0)) . 'WHERE id = ' . $id ;
        $db->exec($sql, array_column($data, 2));

    }





}


/*
    /**
     * Получение всех записей из БД
     * @return array|bool
     *
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
     *
    static public function getOne($id) {
        $db = new Database();
        $id = intval($id);
        $sql = "SELECT * FROM " . static::$_table . " WHERE id = $id";
        return $db->queryOne($sql, get_called_class());
    }
static public function save() {
        $db = new Database();
        if ($this->id) { // update

            $this->title = $db->quote($this->title);
            $this->text = $db->quote($this->text);
            $time_updated = time();
            $sql = "UPDATE " .  self::$_table . " SET title = $this->title, text = $this->text, time_updated = $time_updated";
            return $db->exec($sql);
        } else { //insert

            $this->title = $db->quote($this->title);
            $this->text = $db->quote($this->text);
            $time_created = $db->quote($time_created = time());
            $sql = "INSERT INTO " . self::$_table . " VALUES ( NULL, $this->title, $this->text, $time_created, NULL)";
            // echo $sql;
            return $db->exec($sql);
        }
    }
}
*/