<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class ObjetModel extends CI_Model{
        public function getObjects(){
            $sql="select objet.*,photo.nomphoto from objet join photo on photo.idobjet=objet.idobjet";
            $query=$this->db->query($sql);
            $result=array();
            foreach($query->result_array() as $row){
                array_push($result,$row);
            }
            return $result;
        }
        public function DeleteObjet($id){
            $sql="delete from objet where idobjet=%s";
            $sql=sprintf($sql,$this->db->escape($id));
            $this->db->query($sql);
        }
        public function getObjetbyId($id){
            $sql="select * from objet where id=%s";
            $sql=sprintf($sql,$this->db->escape($id));
            $query=$this->db->query($sql);
            $result=$query->row_array();
            return $result['nom'];
        }
        public function addObjet($nom,$description,$image,$prix,$idcategory,$iduser){
            $sql="insert into objet values(null,%s,%s,%s,%s,%s)";
            $sql=sprintf($sql,$this->db->escape($idcategory),$this->db->escape($description),$this->db->escape($prix),$this->db->escape($iduser),$this->db->escape($nom));
            echo $sql;
            $this->db->query($sql);
            $sql="select last_insert_id()";
            $query=$this->db->query($sql);
            $row=$query->row_array();
            $sql="insert into photo values(null,%s,%s)";
            $sql=sprintf($sql,$this->db->escape($row['last_insert_id()']),$this->db->escape($image));
            $this->db->query($sql);
        }
    } 
?>