<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class AdminModel extends CI_Model{
    
        public function verifier($nom,$mdp){
            $sql="select * from loginAdmin where nom = %s and motdepasse=%s";
            $sql=sprintf($sql,$this->db->escape($nom),$this->db->escape($mdp));
            $query=$this->db->query($sql);
            if(count($query)==0){
                return false;
            }
            else{
                return true;
            }
        }
    }
?>