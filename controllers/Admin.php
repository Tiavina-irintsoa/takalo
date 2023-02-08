<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('SessionAdmin.php');
class Admin extends SessionAdmin{
  public function listeCategory(){
    
    $this->load->model("CategoryModel");
    $data=array();
    $data["liste"]=$this->CategoryModel->getAllCategory();
    $data["page"]='ListeCategory';
    $data["css"]="ListeCategory.css";
    $data["titre"]="Liste categorie";
    $this->load->view('Template',$data);
  }
  public function delete(){
    $id=$this->input->get("id");
    $this->load->model("CategoryModel");
    $this->CategoryModel->Deletecategory($id);
    redirect("Admin/listeCategory");
  }
  public function insertCateg(){
    $data=array();
    $data['nom']='';
    if($this->input->get("erreur")!=''){
      $data['nom']=$this->input->get("nom");
      $data['erreur']="Nom invalide";
    }
    $data["titre"]="Inserer Categorie";
    $data["css"]="FormulaireCategory.css";
    $data["action"]=site_url("Admin/insertcategory");
    $data['page']="FormulaireCategory";
    $this->load->view('Template',$data);
  }
  
  public function insertcategory(){
    $nom=$this->input->post('nom');
    if(strlen($nom)==0){
      redirect("Admin/insertCateg?erreur=Nominvalide&nom=".$nom);
    }
    $this->load->model("CategoryModel");
    $this->CategoryModel->Insertcategory($nom);
    redirect("Admin/insertCateg");
  }
    public function disconnect(){
      $this->session->unset_userdata('admin');
      redirect('Welcome/loginUtilisateur');
    }
  public function updatecateg(){
    $data=array();
    $this->load->model("CategoryModel");
    $data["id"]=$this->input->get('id');
    if($this->input->get("erreur")!=''){
      $data['nom']=$this->input->get("nom");
      $data['erreur']="Nom invalide";
    }
    else{
      $data['nom']=$this->CategoryModel->getCategory($data['id']);
    }
    $data["titre"]="Modifier Categorie";
    $data["css"]="FormulaireCategory.css";
    $data['page']="FormulaireCategory";
    $data["action"]=site_url("Admin/updatecategory");
    $this->load->view('Template',$data);
  }

  public function updatecategory(){
    $nom=$this->input->post('nom');
    $id=$this->input->post('id');
    if(strlen($nom)==0){
      redirect("Admin/updatecateg?erreur=Nominvalide&nom=".$nom."&id=".$id);
    }
    $this->load->model("CategoryModel");
    $data=array();
    $data["id"]=$id;
    $this->CategoryModel->Updatecategory($data["id"],$nom);
    redirect("Admin/listeCategory");
  }

}


?>