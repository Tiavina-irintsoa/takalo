<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    include("ObjetModel.php");
    class UtilisateurModel extends CI_Model{
        public function getObjects($id){
            $sql="select * from objet where objet.idutilisateur=%s";
            $sql=sprintf($sql,$this->db->escape($id));
            $query=$this->db->query($sql);
            $result=array();
            foreach($query->result_array() as $row){
                $obj=$row;
                $obj['nomphoto']=$this->getPhotoCouverture($row['idobjet']);
                array_push($result,$obj);
            }
            return $result;
        }
        public function Accepter($id){
            
            $sql="update proposition set etat=1 where idProposition=%s";
            $sql=sprintf($sql,$this->db->escape($id));
            echo $sql;
            $this->db->query($sql);
        }

        public function Refuser($id){

            $sql="update proposition set etat=2 where idProposition=%s";
            $sql=sprintf($sql,$this->db->escape($id));
            $this->db->query($sql);
        }

        

        public function detail($idproposition){

            $sql="select * from proposition where idProposition=%s";
            $sql=sprintf($sql,$this->db->escape($idproposition));
            //echo $sql;
            $query=$this->db->query($sql);
            $row=$query->row_array();

            return $row;
        }

        

        public function detailobjet1($idobjet1){
           $sql="select proposition.*,objet.description,objet.prix,photo.nomphoto,objet.idobjet,objet.nom from proposition join objet on proposition.idobjet1=objet.idobjet  join photo on photo.idobjet=objet.idobjet where proposition.idobjet1=%s";
           $sql=sprintf($sql,$this->db->escape($idobjet1));
           $query=$this->db->query($sql);
           $row=$query->row_array();

           return $row;
        }


        public function detailobjet2($idobjet2){
            $sql="select proposition.*,objet.description,objet.prix,photo.nomphoto,objet.idobjet,objet.nom from proposition join objet on proposition.idobjet2=objet.idobjet  join photo on photo.idobjet=objet.idobjet where proposition.idobjet2=%s;";
            $sql=sprintf($sql,$this->db->escape($idobjet2));
            $query=$this->db->query($sql);
            $row=$query->row_array();
            return $row;
         }


        public function echange($idutilisateur1,$idobjet1,$idutilisateur2,$idobjet2){

            $sql1="update objet set idutilisateur=%s where idobjet=%s";
            $sql2="update objet set idutilisateur=%s where idobjet=%s";
            $sql1=sprintf($sql1,$idutilisateur2,$idobjet1);
            $sql2=sprintf($sql2,$idutilisateur1,$idobjet2);
            $this->db->query($sql1);
            $this->db->query($sql2);
        }
        public function Listeproposition($id){
            $liste=array();
            $sql='Select proposition.*,objet.nom as objet1nom , utilisateur.nom as username from proposition join utilisateur on proposition.idutilisateur1=utilisateur.idutilisateur join objet on objet.idobjet=proposition.idobjet1 where idutilisateur2=%s and etat=0';
            $sql=sprintf($sql,$this->db->escape($id));
            $query=$this->db->query($sql);
            foreach($query->result_array() as $row){
                $prop=$row;
                $prop['nomobjet2']=$this->getObjetById($row['idobjet2']);
                array_push($liste,$prop);
              }
            return $liste;
        }
        public function getObjetbyId($id){
            $sql="select * from objet where idobjet=%s";
            $sql=sprintf($sql,$this->db->escape($id));
            $query=$this->db->query($sql);
            $result=$query->row_array();
            return $result['nom'];
        }
        public function getPhotoCouverture($id){
            $sql="select * from photo where idobjet=%s limit 1";
            $sql=sprintf($sql,$this->db->escape($id));
            $query=$this->db->query($sql);
            $row= $query->row_array();
            return $row['nomphoto'];
        }   
        public function insertProposition($utilisateur1,$objet1,$utilisateur2,$objet2){
            // echo $utilisateur2;
            $sql="insert into proposition values (null,%s,%s,%s,%s,0)";
            $sql=sprintf($sql,$this->db->escape($utilisateur1),$this->db->escape($objet1),$this->db->escape($utilisateur2),$this->db->escape($objet2));
            // echo $sql;

            $query=$this->db->query($sql);
        }
        public function InscriptionUser($nom,$mdp){
            $sql="insert into utilisateur values (null,%s,%s)";
            $sql=sprintf($sql,$this->db->escape($nom),$this->db->escape($mdp));
            $this->db->query($sql);
            }
        public function verifierUtilisateur($nom,$mdp){
            $sql="select * from utilisateur where nom = %s and motdepasse=%s";
            $sql=sprintf($sql,$this->db->escape($nom),$this->db->escape($mdp));
            $query=$this->db->query($sql);
            if(count($query)==0){
                return false;
            }
            else{
                return $query->row_array();
            }
        }
} 
?>