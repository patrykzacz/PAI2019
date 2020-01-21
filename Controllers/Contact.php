<?php


class Contact extends Controller {
    protected $tmp = "contact";
        public function __construct()
        {

            parent::__construct();

        }

    public function run(){
        $this->view->render($this->tmp);

    }


}