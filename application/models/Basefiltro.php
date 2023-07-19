<?php
    defined("BASEPATH") OR exit('Not direct script access allowed');

    class Basefiltro extends CI_Model{

        public function getFilter($var_filter){
            $this->db->select("c.*");
            $this->db->from("cosas c");
            $this->db->where("c.nombre",$var_filter);
            $result = $this->db->get();
            return $result->result();
        }
    
    }

?>