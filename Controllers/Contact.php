<?php
define('contact', contact);

class Contact extends AppController {
        public function __construct()
        {

            parent::__construct();

        }

        public function run(){
            $this->view->render(contact);
        }

}