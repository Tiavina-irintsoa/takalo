<?php 
defined('BASEPATH') OR exit('No direct script acces allowed');
 
class SessionUtilisateur extends CI_Controller{

  public function __construct(){
    parent::__construct();
    if(!$this->session->has_userdata(('user'))){
      redirect("Welcome/loginUtilisateur");
    }
  }

}
?>