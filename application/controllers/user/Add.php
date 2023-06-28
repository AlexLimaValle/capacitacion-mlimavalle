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
		$nombre = $this->input->post("nombre");
		$cantidad = $this->input->post("cantidad");
		$informacion = $this->input->post("informacion");
		$this->form_validation->set_rules('nombre', 'nombre', 'is_unique[cosas.nombre]');
		$this->form_validation->set_rules('nombre', 'nombre', 'required|min_length[1]');
		$this->form_validation->set_rules('cantidad', 'cantidad', 'required');
		$this->form_validation->set_rules('informacion', 'cantidad','required|min_length[10]');

		if ($this->form_validation->run() == FALSE){
				$this->load->view('user/add');
		}else{
			$data = array(
				"nombre" => $nombre,
				"cantidad" => $cantidad,
				"informacion" => $informacion
			);
	
			$this->Bases->save($data);
			redirect(base_url("user/listar"));
		}


	}
}