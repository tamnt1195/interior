<?php
    spl_autoload_register('Loader');
    function Loader($className) {
        $path = "model/";
        $extension = ".php";
        $fullpath = $path.$className.$extension;
        include_once $fullpath;
    }
?>