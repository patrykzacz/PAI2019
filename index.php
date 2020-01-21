<?php
require_once 'config.php';
require 'Database.php';
require  'models/User.php';
spl_autoload_register(function($className){
    require_once 'libs/'. $className .'.php';
});

$app = new Bootstrap();