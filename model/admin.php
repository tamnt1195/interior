<?php
    
    class admin extends model {
        public static function setTable($name) {
            self::$table = $name;
        }
        
    }
    admin::setTable('admin');
?>