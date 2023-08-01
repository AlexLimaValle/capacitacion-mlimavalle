<?php
    defined("BASEPATH") OR exit('Not direct script access allowed');

    class Addtags extends CI_Model{

        public function addTag($tags,$nombre){
            $query_id = "SELECT * FROM cosas c WHERE c.nombre = '$nombre'";
            $id_name = $this->db->query($query_id);
            $result = $id_name->row();
            foreach($tags as $tag){
                $data = array(
                    "id_cosas"=>$result->id,
                    "id_tags"=>$tag
                );

                $this->db->insert("tags_items",$data);
            }
        }

    }

?>