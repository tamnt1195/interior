<?php
    
    class product extends model {
        public static function setTable($name) {
            self::$table = $name;
        }
        
    }
    product::setTable('product');


    // self::setTable('product');

        // function getAllDish(){
        //     $sql = "SELECT * from dish";
        //     $result = $this->getList($sql);
        //     return $result;
        // }

        // function getNewDish($num) {
        //     $sql = 'SELECT * FROM dish order by date desc limit '.$num;
        //     $result = $this->getList($sql);
        //     return $result;
        // }

        // function getDishByType($type) {
        //     $sql = 'SELECT * FROM dish WHERE dish_type = '.$type.' order by date desc limit 6';
        //     $result = $this->getList($sql);
        //     return $result;
        // }

        // function getAllDishByType($type) {
        //     $sql = 'SELECT * FROM dish WHERE dish_type = '.$type.' order by date desc';
        //     $result = $this->getList($sql);
        //     return $result;
        // }

        // function getDiscount() {
        //     $sql = "SELECT * FROM dish order by discount desc limit 10";
        //     $result=$this->getList($sql);
        //     return $result;
        // }

        // function getDishByFood($food){
        //     $sql = "SELECT * FROM dish WHERE main_food = $food order by date desc";
        //     $result = $this->getList($sql);
        //     return $result;
        // }
?>