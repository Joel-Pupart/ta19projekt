<?php

class User extends DatabaseQuery {

    public $id;
    public $email;
    public $password;
    public static $tableName = 'users';
    public static $className = 'User';

    public function info () {
        return $this->email . '(' . $this->id . ')';
    }

    public static function findByEmail($email) {
        global $db;

        $sql = 'SELECT * FROM ' . static::$tableName . " where email=? LIMIT 1";
        
        $stmt = $db->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, static::$className);
        $stmt->execute([$email]);

        return $stmt->fetch();
    }

    /*public function all() {
        global $db;

        $sql = 'SELECT * FROM ' . $this->tableName;
//        exit($sql);

//        return $db->query($sql)->fetchAll(PDO::FETCH_CLASS, get_class($this));
        return $db->query($sql)->fetchAll(PDO::FETCH_CLASS, __CLASS__);
    }*/
}