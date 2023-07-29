<?php
    defined("BASEPATH") OR exit('Not direct script access allowed');

    class Delete extends CI_Model{

        public function delete($id){
            $this->db->where('id',$id);
            $this->db->delete('cosas');
        }

    }

?>