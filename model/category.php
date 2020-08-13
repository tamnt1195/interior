<?php
    
    class category extends model {
        public static function setTable($name) {
            self::$table = $name;
        }
        
    }
    category::setTable('category');
?>