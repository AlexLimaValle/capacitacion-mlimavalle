<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Save extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("data/Base");
		$this->load->model("data/Tags");
		$this->load->model("data/Addtags");
		$this->load->helper('color_random');
	}


	public function save(){
		$nombre = $this->input->post("nombre");
		$cantidad = $this->input->post("cantidad");
		$informacion = $this->input->post("informacion");
		$tags = $this->input->post("tags");

		$this->form_validation->set_rules('nombre', 'nombre', 'is_unique[cosas.nombre]');
		$this->form_validation->set_rules('nombre', 'nombre', 'required|min_length[1]');
		$this->form_validation->set_rules('cantidad', 'cantidad', 'required');
		$this->form_validation->set_rules('informacion', 'cantidad','required|min_length[10]');

		if ($this->form_validation->run() == FALSE){
			$resultado = $this->Tags->getTags();
			$datos = array("tags"=>$resultado);
			$this->load->view('user/New_cosa',$datos);
		}else{
			$data = array(
				"nombre" => $nombre,
				"cantidad" => $cantidad,
				"informacion" => $informacion
			);
	
			$this->Base->save($data);
			$this->Addtags->addTag($tags,$nombre);
			redirect(base_url("tabla"));
		}
	}

	
	public function index()
	{
		$this->load->view('user/New_cosa');
	}
}




