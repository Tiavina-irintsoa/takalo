<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class AutreRecherche extends CI_Controller{
  

      public function recherche(){

        $this->load->model("RechercheModel");
        $this->load->model("UtilisateurModel");
        $data=array();
        $data["liste"]=$this->RechercheModel->Rechercher($this->input->get("description"),$this->input->get("id"));
        $data["page"]="ListeObjets";
        $data["css"]="listeObjets.css";
        $data["action"]=site_url("Recherche/recherche");
        $this->load->view('Template2',$data); 
      }

      

    }
?>