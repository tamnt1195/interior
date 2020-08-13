<?php
    
    class type extends model {
        public static function setTable($name) {
            self::$table = $name;
        }
        
    }
    type::setTable('type');
?>