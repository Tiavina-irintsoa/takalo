<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('SessionUtilisateur.php');
class Utilisateur extends SessionUtilisateur{
    public function details(){
        $this->load->model("DetailModel");
        $data=array();
        $data["liste"]=$this->DetailModel->DetailObjets($this->input->get('id'));
        $data["photos"]=$this->DetailModel->getPhoto($this->input->get('id'));
        $data["page"]='DetailsObjet';
        $data["css"]="details.css";
        $data["titre"]="Detail Objet";
        $data['user']=$this->session->user;
        $data['isproposedbyme']=$this->DetailModel->isProposedByMe($data['user']['idutilisateur'],$this->input->get('id'),$data['liste']['idutilisateur']);
        // var_dump($data);
        $this->load->view('Template2',$data);
    }
    public function disconnect(){
      $this->session->unset_userdata('user');
      redirect('Welcome/loginUtilisateur');
    }
    public function Accepter(){
      
      $this->load->model("UtilisateurModel");
      $this->load->model("HistoriqueModel");

      $idproposition=$this->input->get('id');
      $user=$this->session->user;
      $userid=$user['idutilisateur'];
      $demandeur=$this->input->get('demandeur');
      $objet1=$this->input->get('objet1');
      $objet2=$this->input->get('objet2');

      $this->UtilisateurModel->Accepter($idproposition);
      $this->UtilisateurModel->echange($demandeur,$objet1,$userid,$objet2);
      $this->HistoriqueModel->insertHistorique($objet1,$demandeur);
      $this->HistoriqueModel->insertHistorique($objet2,$userid);
      redirect("Utilisateur/getProposition");
  }

  public function Refuser(){

      $this->load->model("UtilisateurModel");
      $data=array();
      $this->UtilisateurModel->Refuser($this->input->get('id'));
     redirect("Utilisateur/getProposition");

}

public function detailobjet(){

  $this->load->model("UtilisateurModel");
  $data=array();
  $data["liste"]=$this->UtilisateurModel->detail($this->input->get('id'));
  // var_dump($data["liste"]);
  // echo $data["liste"]["idobjet1"];
  $data["detailobjet1"]=$this->UtilisateurModel->detailobjet1($data["liste"]["idobjet1"]);
  $data["detailobjet2"]=$this->UtilisateurModel->detailobjet2($data["liste"]["idobjet2"]);
  
  $data["page"]="Detailsproposition";
  $data["css"]="detailsproposition.css";
   $data["titre"]="Detail proposition";
  //  var_dump($data);
  $this->load->view('Template2',$data);

}
    public function addpic(){
      $data=array();
      $data['idobjet']=$this->input->get('id');
      $data['page']='AddPhoto';
      $data['css']='addobjet.css';
      $data['titre']="Ajouter une photo";
      $this->load->view("Template2",$data);

    }
    public function addobjet(){  
      $data=array();
      if($this->input->get('error')!=''){
        $data['erreur']="Erreur lors de l'upload de l'image";
      }  
      $this->load->Model('CategoryModel');
      $data['liste']=$this->CategoryModel->getAllCategory();
      $data['page']='AddObjet';
      $data['css']='addobjet.css';
      $data['titre']="Ajouter un nouvel objet";
      $this->load->view("Template2",$data);
    }
    public function choisir(){
        $this->load->model('UtilisateurModel');
        $data=array();
        $user=$this->session->user;
        $data["liste"]=$this->UtilisateurModel->getObjects($user['idutilisateur']);
        $data['owner']=$this->input->get('owner');
        $data['page']="Choix";
        $data['css']="Choix.css";
        $data['objet2']=$this->input->get('objet');
        $data['titre']="Choix de l'objet en contrepartie";
        $this->load->view("Template2",$data);
    }

    public function proposer(){
        $this->load->model('UtilisateurModel');
        $idobjet1=$this->input->get("idobjet1");
        
        $idobjet2=$this->input->get("idobjet2");
        echo $idobjet2;
        $owner=$this->input->get("owner");
        $user=$this->session->user;
        $this->UtilisateurModel->insertProposition($user['idutilisateur'],$idobjet1,$owner,$idobjet2);
        echo $owner;
        redirect("Utilisateur/details?id=".$idobjet2);
    }

  
    public function login(){
  
      $data=array();
      $data["titre"]="Login utilisateur";
      $data["css"]="";
      $data["action"]=site_url("Utilisateur/verifierUtilisateur");
      $date["page"]="Login";
      $date["submitvalue"]="Se connecter";
      $this->load->view('Template2',$data);
    }
  
  
    public function verifierUtilisateur(){
      $this->load->model("UtilisateurModel");
      $data["verif"]=$this->UtilisateurModel->verifierUtilisateur($this->input->post('nom'),$this->input->post('mdp'));
      if($data["verif"]==false){
        redirect("Utilisateur/inscriptionUtilisateur");
      }else{
        $this->session->set_userdata('user',$data["verif"]);
        redirect("Utilisateur/listeObjets");
      }
    }
    public function supprimerObjet(){
      $this->load->model("ObjetModel");
      $id=$this->input->get('id');
      $this->ObjetModel->DeleteObjet($id);
      redirect("Utilisateur/listeObjets");
    }
    
    public function getProposition(){
      $this->load->model("UtilisateurModel");
      $data=array();
      $user=$this->session->user;
      $data["liste"]=$this->UtilisateurModel->ListeProposition($user['idutilisateur']);
      $data["page"]="ListeProposition";
      $data['titre']="Liste des propositions";
      $data['css']="listeProposition.css";
      $this->load->view('Template2',$data);
    }
    
    public function listeObjets(){
      $this->load->model("UtilisateurModel");
      $data=array();
      $user=$this->session->user;
      $data["liste"]=$this->UtilisateurModel->getObjects($user['idutilisateur']);
      $data["page"]="ListeObjets";
      $data['css']="listeObjets.css";
      $this->load->view('Template2',$data);
    }
    public function getAllObjetUser(){
        $this->load->model("ObjetModel");
        $user=$this->session->user;
        $data=array();
        $data['css']='listeObjets.css';
        $data["liste"]=$this->ObjetModel->getObjects($user['idutilisateur']);
        $data["page"]="ListeObjets";
        $this->load->view('Template2',$data);
    }
      
  }