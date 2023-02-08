<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class RechercheModel extends CI_Model{
  
      public function getPhotoCouverture($id){
        $sql="select * from photo where idobjet=%s limit 1";
        $sql=sprintf($sql,$this->db->escape($id));
        $query=$this->db->query($sql);
        $row= $query->row_array();
        return $row['nomphoto'];
    }  

      public function Rechercher($description,$idcategorie){
        $liste=array();
        $sql="select * from objet where idcategory=%s and description like '%s%s%s'";
        $sql=sprintf($sql,$idcategorie,'%',$description,'%');
        $query=$this->db->query($sql);
        foreach($query->result_array() as $row){

          $row["nomphoto"]=$this->getPhotoCouverture($row["idobjet"]);
          array_push($liste,$row);
        }
        return $liste;
      

    }

    }
?>