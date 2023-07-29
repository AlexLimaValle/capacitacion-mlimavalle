<?php
    defined("BASEPATH") OR exit('Not direct script access allowed');

    class Getcosa extends CI_Model{

        public function getCosas($id){
            $this->db->select("c.*");
            $this->db->from("cosas c");
            $this->db->where("c.id",$id);
            $result = $this->db->get();
            return $result->row();
        }

    }

?>