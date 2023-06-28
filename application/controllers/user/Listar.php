<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Bases");
	}


	public function index(){
		$data = array("data"=>$this->Bases->getCosas());
		$this->load->view('user/listar',$data);
	}

	public function delete($id){
		$this->Bases->delete($id);
		redirect(base_url("user/listar"));
	}
}