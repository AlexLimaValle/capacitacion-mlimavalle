<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Bases");
	}
	
	public function index(){
		
		$this->load->view('user/add');
	}

	public function save(){
		$name = $this->input->post("nombre");
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