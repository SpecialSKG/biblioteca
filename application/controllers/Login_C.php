<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_C extends CI_Controller {

  public function __construct(){
    parent:: __construct();
    $this->load->model('Login_M');
    $this->load->library(array('session','form_validation'));
    $this->load->helper(array('url','form'));
  }
  public function index()
  {
    $data = array(
      'page_title' => 'inicio','view' => 'Configuracion/Login','data_view' => array()
    );
    $this->load->view('Template2/Main_View', $data);
  }
  ///////////////////////////////////////////////////
  public function loginC()
  {
    $data = array(
      'page_title' => 'inicio','view' => 'Configuracion/Login','data_view' => array()
    );
    $this->load->view('Template2/Main_View', $data);
  }
  public function registerC()
  {
    $data = array(
      'page_title' => 'inicio','view' => 'Configuracion/Register','data_view' => array()
    );
    $this->load->view('Template2/Main_View', $data);
  }

  public function login_user(){

   $user = $this->input->post('user',TRUE);
   $pass = base64_encode($this->input->post('pass',TRUE));
   $login_user = $this->Login_M->login_user($user,$pass);

   if($login_user->num_rows() > 0){ 

    $data  = $login_user->row_array();

    $id_user = $data['id_user'];
    $nombre_user = $data['nombre_user'];
    $user = $data['user'];
    $pass = $data['pass'];
    $rol_ = $data['rol_'];
    $_SESSION["acceso"] = 1;

    $session_data = array(
      'id_user' => $id_user,
      'nombre_user' => $nombre_user,
      'user'  => $user,
      'pass' => $pass,
      'rol_' => $rol_,
      'logged_in' => TRUE
    );

    $this->session->set_userdata($session_data);
    if($rol_ === '1'){
      redirect('Usuario_C/Index');
     //$this->load->view('Template/main');

    }else if($rol_ === '2'){
     redirect('Usuario_C/Index');
    // $this->load->view('Template/main');

   }else if($rol_ === '3'){
     redirect('Usuario_C/Index');
    // $this->load->view('Template/main');

   }else{
    redirect('Login_C/loginC');
  }

}else{
  echo $this->session->set_flashdata('msg','Nombre de usuario o contraseña es incorrecto');
  redirect('Login_C/loginC');
}

}

public function logout($id){
  if ($this->session->userdata('id_user') === '0') {
    $this->Login_M->seccion_user($id);
    $this->session->sess_destroy();
    redirect('inicio_C/Index', 'refresh');
  }else{
    $this->session->sess_destroy();
    redirect('inicio_C/Index', 'refresh');
  }
}

public function obtenerRegistro($id){
  $data = array(
    'page_title' => 'Editar Cliente',
    'view' => 'Configuracion/Register_Update',
    'data_view' => array()
  );
  $data["clienteR"] = $this->Login_M->obtenerC($id);
  
  $this->load->view('Template/Main_View',$data);
}

public function redirect_Index()
{
  redirect('Login_C/loginC');
}

}