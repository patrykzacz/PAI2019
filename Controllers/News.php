<?php

class News extends Controller {
    protected $tmp = "news";

    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render($this->tmp);
    }

}