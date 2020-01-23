<?php


class Map extends Controller
{

    protected $tmp = "Map";
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render($this->tmp);
    }


}