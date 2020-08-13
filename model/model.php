<?php
    class model {

        protected static $table="";

        private static function db() {
            $dsn = "mysql:host=localhost;dbname=interior";
            $user = 'root';
            $pass ='';
            $db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        }
        
        
        private static function getList($select) {
            // $results = self::db()->query($select);
            // $result = $results->fetchAll();
            // return $result;

            $stmt = self::db()->prepare($select);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

        private static function getInstance($select) {
            // $results = self::db()->query($select);
            // $result = $results->fetch();
            // return $result;

            $stmt = self::db()->prepare($select);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }

        private static function exec($select) {
            self::db()->exec($select);
        }

        public static function all() {
            $sql = "SELECT * from ".self::$table;
            $result = self::getList($sql);
            return $result;
        }

        public static function getById($id) {
            $sql = "SELECT * FROM ".self::$table." WHERE id = ".$id;
            $result = self::getInstance($sql);
            return $result;
        }

        //     $sql = 'SELECT * FROM dish WHERE dish_type = '.$type.' order by date desc limit 6';
        
        public static function where($condition, $value, $sort='',$col='', $type='', $take='', $num=0) {
            if ($sort && $col && $type && $take && $num) {
                $sql = "SELECT * FROM ".self::$table." WHERE ".$condition." = '".$value."' ".$sort." ".$col." ".$type." ".$take." ".$num;
            } else if ($sort && $col && $type) {
                $sql = "SELECT * FROM ".self::$table." WHERE ".$condition." = '".$value."' ".$sort." ".$col." ".$type;
            } else {
                $sql = "SELECT * FROM ".self::$table." WHERE ".$condition." = '".$value."'";
            }
            return $result = self::getList($sql);;
        }


    }
?>