<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class CategoryModel extends CI_Model{
    public function getAllCategory(){
        $result=array();
        $sql="select * from category";
        $query=$this->db->query($sql);
        foreach($query->result_array() as $row){
            array_push($result,$row);
        }
        return $result;
    }
    public function Insertcategory($nom){
        $sql="insert into category values (null,%s)";
        $sql=sprintf($sql,$this->db->escape($nom));
        // echo $sql;
        $this->db->query($sql);  
    }
    public function Updatecategory($id,$nom){
        $sql="update category set nom=%s where idcategory=%s";
        $sql=sprintf($sql,$this->db->escape($nom),$this->db->escape($id));
        $this->db->query($sql);
    }
    public function Deletecategory($id){
        $sql="delete from category where idcategory=".$id;
        $this->db->query($sql);
    }
    public function getCategory($id){
        $sql="select * from category where idcategory=%s";
        $sql=sprintf($sql,$this->db->escape($id));
        $query=$this->db->query($sql);
        $row=$query->row_array();
        return $row['nom'];
    }
}
?>