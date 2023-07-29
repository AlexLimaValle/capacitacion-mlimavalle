<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("data/Informacion");
	}
    
	public function index()
	{
		$datos = array('datos'=>$this->Informacion->tabla());
		$this->load->view('user/List',$datos);
	}
}




