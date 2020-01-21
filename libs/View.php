<?php

class View{


    public function __construct()
    {

    }

    public function render($name){
        require './Views/'.$name.'.php';
    }


}