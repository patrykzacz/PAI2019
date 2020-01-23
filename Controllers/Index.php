<?php

class Index extends Controller
{
    protected $tmp = "index";

    public function __construct()
    {
        parent::__construct();

    }

    public function run()
    {
        $this->view->render($this->tmp);
    }
}