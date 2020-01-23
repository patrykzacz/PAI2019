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

    public function sendMessage(){
            $model = new Contact_model();
            $model->sendMessage();
    }


}