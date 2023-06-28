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

        public function getCosa($id){
            $this->db->select("c.*");
            $this->db->from("cosas c");
            $this->db->where("c.id",$id);
            $result = $this->db->get();
            return $result->row();
        }

        public function update($data,$id){
           $this->db->where("id",$id);
           $this->db->update("cosas",$data);
        }

        public function delete($id){
            $this->db->where("id",$id);
            $this->db->delete("cosas");
         }
    }

?>