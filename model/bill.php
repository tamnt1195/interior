<?php
    
    class bill extends model {
        public static function setTable($name) {
            self::$table = $name;
        }
        
    }
    bill::setTable('bill');
?>