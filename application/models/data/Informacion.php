<?php
    defined("BASEPATH") OR exit('Not direct script access allowed');

    class Informacion extends CI_Model{

        public function tabla(){
            $consulta = "SELECT * FROM cosas;";
            $query = $this->db->query($consulta);
            return $query->result();
        }

    }

?>