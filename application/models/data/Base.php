<?php
    defined("BASEPATH") OR exit('Not direct script access allowed');

    class Base extends CI_Model{

        public function save($data){
            $this->db->query("ALTER TABLE cosas AUTO_INCREMENT 1");
            $this->db->insert("cosas",$data);
        }

    }

?>