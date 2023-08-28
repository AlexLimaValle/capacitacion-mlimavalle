<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abm extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model("data/Tags");
	}

	public function index(){
        $data = array("tag"=>$this->Tags->getTagsName());
		$this->load->view('user/Abm',$data);
	}
}




