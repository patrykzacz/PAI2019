<?php
require_once 'config.php';
require 'Database.php';

spl_autoload_register(function($className){
    require_once 'libs/'. $className .'.php';
});

$app = new Bootstrap();