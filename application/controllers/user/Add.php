<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {
	public function __contruct(){
		parent::__construct();
		$this->load->model("Bases");
	}
	
	public function index(){
		
		$this->load->view('user/add');
	}

	public function save(){
		$name = $this->input->post("name");
		$cantidad = $this->input->post("cantidad");
		$informacion = $this->input->post("informacion");

		$data = array(
			"nombre" => $name,
			"cantidad" => $cantidad,
			"informacion" => $informacion
		);

		$this->Bases->save($data);
	}
}