<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailModel extends CI_Model{
    public function isProposedByMe($iduser,$idobjet,$idowner){
        $sql="select count(*) as c from proposition where idutilisateur1=%s and idutilisateur2=%s and idobjet2=%s and etat=0";
        $sql=sprintf($sql,$this->db->escape($iduser),$this->db->escape($idowner),$this->db->escape($idobjet));
        // echo $sql;
        $query=$this->db->query($sql);
        $row=$query->row_array();
        $count=$row['c'];
        if($count==0){
            return false;
        }
        return true;
    }
    public function DetailObjets($id){
        $sql="select utilisateur.nom as username,objet.*,category.nom as nomcategory from objet join category on category.idcategory=objet.idcategory join utilisateur on utilisateur.idutilisateur=objet.idutilisateur where objet.idobjet=%s";
        $sql=sprintf($sql,$this->db->escape($id));
        // echo $sql;
        $query=$this->db->query($sql);
        return $query->row_array();
    }
    public function getPhoto($id){
        $sql="select nomphoto from photo where photo.idobjet=%s";
        $sql=sprintf($sql,$this->db->escape($id));
        $query=$this->db->query($sql);
        $result=array();
        foreach($query->result_array() as $row){
            array_push($result,$row);
        }
        return $result;
    }
}
?>