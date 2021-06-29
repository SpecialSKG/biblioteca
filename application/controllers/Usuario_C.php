<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_C extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('Usuario_M');
		$this->load->model('reserva_m');
    $this->load->model('prestamo_m');
	}

	public function Index(){

    $data = array(
      'page_title' => 'Inicio Usuario',
      'view' => 'Usuario/Usuario',
      'data_view' => array()
    );

    $this->load->view('Template/Main_View', $data);
	}
	public function librosV(){
    $data = array(
      'page_title' => 'Libros',
      'view' => 'Usuario/LibrosU',
      'data_view' => array()
    );
    $data['libro'] = $this->Usuario_M->getLibro();
    $data['categoria'] = $this->Usuario_M->getCategoria();
    $data['autor'] = $this->Usuario_M->getAutor();
    $data['editorial'] = $this->Usuario_M->getEditorial();
    $this->load->view('template2/Main_View', $data);
	}
  public function reservasV(){
    $data = array(
      'page_title' => 'Reservas',
      'view' => 'Usuario/Usuario_Reserva',
      'data_view' => array()
    );
    $reserva =  $this->reserva_m->mostrar();
    $data['reserva'] = $reserva;
    $this->load->view('Template2/Main_View', $data);
  }
  public function prestamosV(){
    $data = array(
      'page_title' => 'Prestamo',
      'view' => 'Usuario/Usuario_Prestamo',
      'data_view' => array()
    );
    $presta =  $this->prestamo_m->mostrar();
    $data['presta'] = $presta;
    $this->load->view('Template2/Main_View', $data);
  }
	public function reservaform($id_libro){

    $data = array(
      'page_title' => 'Ingresar Reserva',
      'view' => 'Usuario/Reservas_Usuario',
      'data_view' => array()
    );
     $id = $this->reserva_m->select_libro($id_libro);
            $data['id'] = $id;
    $this->load->view('template2/Main_View', $data);
  }
  public function prestamoForm($id){

    $data = array(
      'page_title' => 'Ingresar Prestamo',
      'view' => 'Usuario/Prestamo_Usuario',
      'data_view' => array()
    );
    $data['id'] = $id;
    $this->load->view('template2/Main_View', $data);
  }
}
