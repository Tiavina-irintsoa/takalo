<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class StatistiqueModel extends CI_Model{

        public function getNombreUtilisateur(){
            $sql="select count(*) as c from utilisateur";
            $query=$this->db->query($sql);
            $result=$query->row_array();
            return $result['c'];
        }

        public function getNombreEchange(){
            $sql="select count(*) as c from proposition where etat=2";
            $query=$this->db->query($sql);
            $result=$query->row_array();
            return $result['c'];

        }
    }
?>