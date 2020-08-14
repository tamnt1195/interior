<?php
    class model {

        protected static $table="";

        private static function conn() {
            $dsn = "mysql:host=localhost;dbname=interior";
            $user = 'root';
            $pass ='';
            $conn = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        
        // Trả về nhiều dữ liệu
        private static function getList($select) {
            $stmt = self::conn()->prepare($select);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

        // Trả về 1 dòng dữ liệu
        private static function getInstance($select) {
            $stmt = self::conn()->prepare($select);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }

        // Thực thi câu lệnh (update, delete, insert)
        private static function exec($select) {
            self::conn()->exec($select);
        }

        public static function all() {
            $sql = "SELECT * FROM ".self::$table;
            $result = self::getList($sql);
            return $result;
        }

        public static function getById($id) {
            $sql = "SELECT * FROM ".self::$table." WHERE id = ".$id;
            $result = self::getInstance($sql);
            return $result;
        }

        //     $sql = 'SELECT * FROM dish WHERE dish_type = '.$type.' order by date desc limit 6';
        
        public static function search($condition, $value, $sort='',$col='', $type='', $take='', $num=0) {
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