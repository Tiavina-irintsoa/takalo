<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('SessionUtilisateur.php');
class Upload extends SessionUtilisateur{
    public function do_upload()
        {
        $config['upload_path']          = 'assets/img';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|jfif';
        $config['max_size']             = 100000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        // $nom=$this->post('');
        if ( ! $this->upload->do_upload('userfile')){
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
                // redirect("Utilisateur/addobjet?error=Erreur");
        }
        else{
            $data = array('upload_data' => $this->upload->data());
            // var_dump($data);
            $image=$data['upload_data']['file_name'];
            $this->load->model('ObjetModel');
            $nom=$this->input->post('nom');
            $descri=$this->input->post('description');
            $prix=$this->input->post('prix');
            $idcategory=$this->input->post('idcategory');
            $user=$this->session->user;
            $this->ObjetModel->addObjet($nom,$descri,$image,$prix,$idcategory,$user['idutilisateur']);
            redirect("Utilisateur/addobjet");
        }

    }
    public function addpic()
        {
        $config['upload_path']          = 'assets/img';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|jfif';
        $config['max_size']             = 100000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        // $nom=$this->post('');
        if ( ! $this->upload->do_upload('userfile')){
                $error = array('error' => $this->upload->display_errors());
                // var_dump($error);
                // redirect("Utilisateur/addobjet?error=Erreur");
        }
        else{
            $this->load->model('PhotoModel');
            $data = array('upload_data' => $this->upload->data());
            // var_dump($data);
            $id=$this->input->post('id');
            $image=$data['upload_data']['file_name'];
            $this->PhotoModel->InsertPhoto($id,$image);
            redirect("Utilisateur/details?id=".$id);
        }

    }

}


?>