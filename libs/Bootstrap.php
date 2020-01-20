<?php


class Bootstrap
{
    function __construct()
    {
        $url =$_GET['url'];
        $url =rtrim($url,'/');
        $url =explode('/',$url);


        if(empty($url[0])){
        require 'Controllers/Login.php';
        $controller= new Login();
        $controller->run();
        }
        $file = 'controllers/'.$url[0].'.php';


        if(file_exists($file)){
            require $file;
        }  else{
            throw new Exception("The file :$file does not exist");
        }
        $controller = new $url[0];

        if(isset($url[2])){
            $controller->{$url[1]}($url[2]);
            return false;
        }else{
            if(isset($url[1])){
                $controller->{$url[1]}();
                return false;
            }
        }$controller->run();
    }
}
