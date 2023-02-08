<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Recherche extends CI_Controller{
    

      public function listeCategory(){
        $this->load->model("CategoryModel");
        $data=array();
        $data["liste"]=$this->CategoryModel->getAllCategory();
        $data["page"]='Recherchecateg';
        $data["css"]="input.css";
        $data["titre"]="Liste categorie";
        $this->load->view('Template2',$data);
        
      }
      
    }
?>