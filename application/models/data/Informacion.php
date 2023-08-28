<?php
    defined("BASEPATH") OR exit('Not direct script access allowed');

    class Informacion extends CI_Model{

        public function tabla(){
            $consulta = "SELECT * FROM cosas;";
            $query = $this->db->query($consulta);
            return $query->result();
        }

        public function tablaCosa($nombre){
            $this->db->select("*");
            $this->db->from("cosas");
            $this->db->where("nombre",$nombre);
            $resultado = $this->db->get();
            return $resultado->result();
        }

    }

?>