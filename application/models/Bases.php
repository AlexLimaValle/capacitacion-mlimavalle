<?php
    defined("BASEPATH") OR exit('Not direct script access allowed');

    class Bases extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('user_model');
        }
    }

?>