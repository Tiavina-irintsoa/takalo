<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ObjetPrix extends CI_Controller{

  public function getprixproche(){

    $this->load->model("ObjetModel");
    $data=array();
    $data['idobjet']=$this->input->get("id");
    $user=$this->session->user;
    $data["liste"]=$this->ObjetModel->getPrixProche($this->input->get("id"),$this->input->get("pourcentage"),$user['idutilisateur']);
    $data["page"]="Resultat";
    $data["titre"]="Objet correspondant";
    $data["css"]="resultat.css";
    $data['titre']="Liste d'objets";
    $this->load->view('Template2', $data);
  }
}
?>