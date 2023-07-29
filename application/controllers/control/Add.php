<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("data/Base");
		$this->load->model("data/Tags");
		$this->load->helper('color_random');
	}

	public function index(){
		$resultado = $this->Tags->getTags();
		$datos = array("tags"=>$resultado);
		$this->load->view('user/New_cosa',$datos);
	}
}




