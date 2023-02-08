<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistique extends CI_Controller{
    public function NombreUtilisateur_Echange(){
    $this->load->model("StatistiqueModel");
    $data=array();
    $data["utilisateur"]=$this->StatistiqueModel->getNombreUtilisateur();
    $data["echange"]=$this->StatistiqueModel->getNombreEchange();
    $data["page"]='Statistique';
    $data["css"]="statistique.css";
    $data["titre"]="Statistique";
    $this->load->view('Template',$data);
    } 

}
?>

    