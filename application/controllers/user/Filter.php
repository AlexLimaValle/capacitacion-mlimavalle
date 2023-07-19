<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Basefiltro");
	}

    public function filtrar(){
        $var_filter = $this->input->post("filtro");
		$respuesta = array("respuesta" => $this->Basefiltro->getFilter($var_filter));
		$this->load->view('user/filter',$respuesta);
    }
}