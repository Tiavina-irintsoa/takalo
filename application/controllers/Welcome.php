<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller{

  public function loginAdmin(){
    $this->load->view('loginAdmin');
  }
  public function verifier(){
    $this->load->model("AdminModel");
    $data["verif"]=$this->AdminModel->verifier($this->input->post('nom'),$this->input->post('mdp'));
    if($data["verif"]==false){
      redirect("Welcome/loginAdmin");
    }else{
      $this->session->set_userdata(array('user'=>$this->input->post('nom')));
      redirect("Admin/listeCategory");
    }
  }
  public function loginUtilisateur(){
    $data=array();
    $data["titre"]="Login utilisateur";
    $data["css"]="";
    $data["action"]=site_url("Welcome/verifierUtilisateur");
    $data["submitvalue"]="se connecter";
    $this->load->view('Login',$data);
 }
  public function inscriptionUlisateur(){
    $data=array();
    $data["titre"]="Inscription utilisateur";
    $data["css"]="listeObjets";
    $data["action"]=site_url("Utilisateur/insertUtilisateur");
    $date["page"]="Login";
    $date["submitvalue"]="s'inscrire";
    $this->load->view('Template2',$data);  
  }
  public function verifierUtilisateur(){
    $this->load->model("UtilisateurModel");
    $data["verif"]=$this->UtilisateurModel->verifierUtilisateur($this->input->post('nom'),$this->input->post('mdp'));
    if($data["verif"]==false){
      redirect("Welcome/loginUtilisateur");
    }else{
      $this->session->set_userdata('user',$data["verif"]);
      redirect("Utilisateur/listeObjets");
    }
  }
}
?>