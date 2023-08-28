<?php
    defined("BASEPATH") OR exit('Not direct script access allowed');

    class Tags extends CI_Model{

        public function getTags(){
            $query = "SELECT * FROM tags";
            $tags = $this->db->query($query);
            return $tags->result();
        }

        public function getAllTags(){
            $query_tags = "
            select c.id ,t.nombre 
            from cosas c 
            inner join tags_items ti on ti.id_cosas = c.id 
            inner join tags t on t.id = ti.id_tags ";
            $result_tags = $this->db->query($query_tags);
            return $result_tags->result();
        }

        public function getTagsName(){
            $this->db->select("*");
            $this->db->from("tags");
            $resultado = $this->db->get();
            return $resultado->result();
        }

        public function seachTag($nombre){
            $query_tags = "
            select c.id ,t.nombre 
            from cosas c 
            inner join tags_items ti on ti.id_cosas = c.id 
            inner join tags t on t.id = ti.id_tags
            where c.nombre = '$nombre'";
            $result_tags = $this->db->query($query_tags);
            return $result_tags->result();
        }

    }

?>