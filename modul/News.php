<?php

class News extends AbstractModel {

    public $id;
    public $title;
    public $text;

    static protected  $_table = 'news';

    /**
     *
     * @return int
     */
    public function ssve() {
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