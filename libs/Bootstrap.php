<?php

class Bootstrap
{
    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);



        if (empty($url[0])) {
            require 'Controllers/Index.php';
            $controller = new Index();
            $controller->run();
            return false;
        }

        $file = 'controllers/'.$url[0].'.php';
        if(file_exists($file)){
            require $file;
        }  else{
            throw new Exception("The file :$file does not exist");
        }

        $controller = new $url[0];
        $controller->loadModel($url[0]);
        if(isset($url[2])){
            if(method_exists($controller, $url[1])){
                $controller->{$url[1]}($url[2]);
            }else{
                echo"error";
            }
        }else {
            if (isset($url[1])){
                if(method_exists($controller, $url[1])){
                $controller->{$url[1]}();
            } else {
                    echo "error";
                }
            }else {
            $controller->run();
            }
        }
    }
}
