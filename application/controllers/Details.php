<?php 
defined('BASEPATH') OR exit('No direct script acces allowed');
 
require("SessionUtilisateur.php");
class Details extends SessionUtilisateur{

  public function details(){
    $this->load->model("DetailModel");
    $data=array();
    $data["liste"]=$this->DetailModel->DetailObjets($this->input->get('id'));
    $data["liste"]=$this->DetailModel->getPhoto($this->input->get('id'));
    $data["page"]='DetailsObjet';
    $data["css"]="details.css";
    $data["titre"]="Detail Objet";
    $this->load->view('Template2',$data);
  }
}
?>