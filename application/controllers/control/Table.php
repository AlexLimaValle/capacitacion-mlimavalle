<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("data/Informacion");
		$this->load->model("data/Tags");
		$this->load->helper('color_random');
	}
    
	public function index()
	{
		$var_cosas = $this->Informacion->tabla();
		$var_tags = $this->Tags->getAllTags();
		$array_definit = [];
				
		foreach($var_cosas as $cosa){
			$array_new = [
				'id'=>$cosa->id,
				'nombre'=>$cosa->nombre,
				'cantidad'=>$cosa->cantidad,
				'informacion'=>$cosa->informacion,
				'tags'=>[]
			];
			foreach($var_tags as $tags){
				if($cosa->id == $tags->id){
					// $tags->color = color(); ideal 
					array_push($array_new['tags'],$tags->nombre);
					// $array_new['tags'][]=$tags->nombre;  forma alternativa  
				}
			}
			array_push($array_definit,$array_new);
		}

		$datos = array('datos'=>$array_definit);
		$this->load->view('user/List',$datos);
	}
}




