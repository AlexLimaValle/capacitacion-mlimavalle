<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model("data/Update");
		$this->load->model("data/Delete");
		$this->load->model("data/Getcosa");
		$this->load->model("data/Tags");
		$this->load->model("data/Addtags");
	}

    public function index($id){
        $data = array("nombres"=>$this->Getcosa->getCosas($id),"tags"=>$this->Tags->getTags());
        $this->load->view('user/Edit',$data);
    }

    public function cambiar($id){
        $nombre = $this->input->post("nombre");
		$cantidad = $this->input->post("cantidad");
		$informacion = $this->input->post("informacion");
		$tags = $this->input->post("tags");

		$this->form_validation->set_rules('nombre', 'nombre', 'is_unique[cosas.nombre]');
		$this->form_validation->set_rules('nombre', 'nombre', 'required|min_length[1]');
		$this->form_validation->set_rules('cantidad', 'cantidad', 'required');
		$this->form_validation->set_rules('informacion', 'cantidad','required|min_length[10]');

		if ($this->form_validation->run() == FALSE){
			$data = array("nombres"=>$this->Getcosa->getCosas($id),"tags"=>$this->Tags->getTags());
			$this->load->view('user/Edit',$data);
		}else{
			$data = array(
				"nombre" => $nombre,
				"cantidad" => $cantidad,
				"informacion" => $informacion
			);

			$this->Delete->deleteAllTags($id);
			$this->Update->update($id,$data);
			$this->Addtags->addTag($tags,$nombre);
			redirect(base_url("tabla"));
		}
    }

    public function borrar($id){
		$this->Delete->deleteAllTags($id);
        $this->Delete->delete($id);
        redirect(base_url('tabla'));
    }

}




