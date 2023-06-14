<?php
    defined("BASEPATH") OR exit('Not direct script access allowed');

    class Bases extends CI_Model{


        public function save($data){
            // $this->db->query("ALTER TABLE cosas AUTO_INCREMENT 1");
            // print_r($data);
            $this->db->insert("cosas",$data);
        }
        public function getCosas(){
            $this->db->select("*");
            $this->db->from("cosas");
            $result = $this->db->get();
            return $result->result();
        }
        
    }

?>