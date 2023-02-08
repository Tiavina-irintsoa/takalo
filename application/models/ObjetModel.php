<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class ObjetModel extends CI_Model{
        public function getObjects($user){
            $sql="select objet.*from objet where idutilisateur != %s";
            $sql=sprintf($sql,$this->db->escape($user));
            $query=$this->db->query($sql);
            $result=array();
            foreach($query->result_array() as $row){
                $row['nomphoto']=$this->getPhotoCouverture($row['idobjet']);
                array_push($result,$row);
            }
            return $result;
        }
        public function getPhotoCouverture($id){
            $sql="select * from photo where idobjet=%s limit 1";
            $sql=sprintf($sql,$this->db->escape($id));
            $query=$this->db->query($sql);
            $row= $query->row_array();
            return $row['nomphoto'];
        }   
        public function DeleteObjet($id){
            $sql="delete from objet where idobjet=%s";
            $sql=sprintf($sql,$this->db->escape($id));
            $this->db->query($sql);
        }
        public function getObjetbyId($id){
            $sql="select * from objet where idobjet=%s";
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
            return $row['last_insert_id()'];
        }
    } 
?>