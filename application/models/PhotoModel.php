<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PhotoModel extends CI_Model{
    public function InsertPhoto($id,$nomphoto){
        $sql="insert into photo values(null,%s,%s)";
        $sql=sprintf($sql,$this->db->escape($id),$this->db->escape($nomphoto));
        echo $sql;
        $this->db->query($sql);
    }
}

?>