<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('SessionUtilisateur.php');
class Objet extends SessionUtilisateur{
    public function historique(){
        $id=$this->input->get('id');
        $this->load->model('HistoriqueModel');
        $this->load->model('ObjetModel');

        $data=array();
        $data['page']='Historique';
        $data['css']='historique.css';
        $data['titre']="Historique d'appartenance";
        $data['objet']=$this->ObjetModel->getObjetById($id);
        $data['liste']=$this->HistoriqueModel->getHistorique($id);
        $this->load->view('Template2',$data);
    }
      
  }