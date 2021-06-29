<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_C extends CI_Controller {

	public function __construct(){

		Parent::__construct();
		$this->load->model('Cliente_M');
	}
	public function index()
	{
		$data = array(
			'page_title' => 'Cliente',
			'view' => 'Cliente/Cliente',
			'data_view' => array()
		);
		$Cliente = $this->Cliente_M->mostrarC();
		$data["cliente"] = $Cliente;
		$this->load->view('Template/Main_View', $data);
	}
	public function agregarCliente(){
		$data= array(
			'page_title' => 'Agregar',
			'view' => 'Cliente/Agregar_Cliente',
			'data_view' => array()
		);
		$this->load->view('Template/Main_View',$data);	
	}
	public function clientesAgrega(){

		if($this->input->is_ajax_request()){
			$data = array(
				'dui'=>$this->input->post('dui'),
				'nombre'=>$this->input->post('nombre'),
				'nombre_usuario'=>$this->input->post('nombre_usuario'),
				'contrasena_usuario'=> base64_encode($this->input->post('contrasena_usuario')),
				'email'=>$this->input->post('email'),
				'fecha_nacimiento'=>$this->input->post('fecha_nacimiento'),
				'telefono'=>$this->input->post('telefono'),
				'sexo'=>$this->input->post('sexo'),
				'direccion'=>$this->input->post('direccion')
			);
			if($this->Cliente_M->insertaC($data)){
				echo json_encode(array('success'=> 1));
			}
			else{
				echo json_encode(array('success'=> 0));
			}
		}
		else{
			echo 'no se puede acceder';
		}
	}
	public function editarClientes($id){
		$data = array(
			'page_title' => 'Editar Cliente',
			'view' => 'Cliente/Actualizar_Cliente',
			'data_view' => array()
		);
		$Cliente = $this->Cliente_M->obtenerC($id);
		$data["cliente"] = $Cliente;
		$this->load->view('Template/Main_View',$data);
	}
	public function verClientes($id){
		$data = array(
			'page_title' => 'Editar Cliente',
			'view' => 'Cliente/Ver_Cliente',
			'data_view' => array()
		);
		$Cliente = $this->Cliente_M->obtenerC($id);
		$data["cliente"] = $Cliente;
		$this->load->view('Template/Main_View',$data);
	}
	public function clientesEdita(){

		if($this->input->is_ajax_request()){
			$data = array(
				'dui'=>$this->input->post('dui'),
				'nombre'=>$this->input->post('nombre'),
				'nombre_usuario'=>$this->input->post('nombre_usuario'),
				'contrasena_usuario'=> base64_encode($this->input->post('contrasena_usuario')),
				'email'=>$this->input->post('email'),
				'fecha_nacimiento'=>$this->input->post('fecha_nacimiento'),
				'telefono'=>$this->input->post('telefono'),
				'sexo'=>$this->input->post('sexo'),
				'direccion'=>$this->input->post('direccion')
			);
			if($this->Cliente_M->actualizarC($data)){
				echo json_encode(array('success'=> 1));
			}
			else{
				echo json_encode(array('success'=> 0));
			}
		}
		else{
			echo 'no se puede acceder';
		}
	}
	public function eliminarCliente($id){

		$this->Cliente_M->eliminarC($id);
		$this->index();
	}

	public function vetadosClientes(){
		$data= array(
			'page_title' => 'Agregar',
			'view' => 'Cliente/Vetados',
			'data_view' => array()
		);
		$data["vetados"] = $this->Cliente_M->vetadosC();
		
		$this->load->view('Template/Main_View',$data);	
	}
}