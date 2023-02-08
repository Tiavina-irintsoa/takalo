<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoriqueModel extends CI_Model{
    public function getHistorique($id){
        $sql="select historique.*,utilisateur.nom as username from historique join utilisateur on utilisateur.idutilisateur=historique.idutilisateur where idObjet=%s";
        $sql=sprintf($sql,$this->db->escape($id));
        $query=$this->db->query($sql);
        $result=array();
        foreach($query->result_array() as $row){
            array_push($result,$row);
        }
        return $result;
    }
    public function insertHistorique($idobjet,$user){
        $sql="insert into historique values(%s,%s,now())";
        $sql=sprintf($sql,$this->db->escape($idobjet),$this->db->escape($user));
        $this->db->query($sql);
    }
}
?>