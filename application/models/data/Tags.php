<?php
    defined("BASEPATH") OR exit('Not direct script access allowed');

    class Tags extends CI_Model{

        public function getTags(){
            $query = "SELECT * FROM tags";
            $tags = $this->db->query($query);
            return $tags->result();
        }

    }

?>