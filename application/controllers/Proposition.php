<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require("SessionUtilisateur.php");
class Proposition extends SessionUtilisateur{
public function PropositionEchange(){
        $this->load->model('UtilisateurModel');
        $idobjet1=$this->input->get("idobjet1");
        $idobjet2=$this->input->get("idobjet2");
        $utilisateur2=$this->input->get("utilisateur2");
        $user=$this->session->user;
        $this->UtilisateurModel->insertProposition($user['idutilisateur'],$idobjet1,$utilisateur2,$idobjet2);
        redirect("Utilisateur/listeObjets");
       
       
    }
}

    ?>