<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracion_C extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Configuracion_M');
	}
	
	////////////////////////////////////////////////////////
	public function Index()
	{
		$data = array(
			'page_title' => 'Inicio',
			'view' => 'Configuracion/Inicio',
			'data_view' => array()
		);
		$data['libro'] = $this->Configuracion_M->getLibro();
		$this->load->view('Template/Main_View', $data);
	}

	////////////////////////////////////////////////////////////////////////////
	// PERFILES ////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////

	public function Perfiles()
	{
		$data = array(
			'page_title' => 'Perfiles','view' => 'Configuracion/Perfiles','data_view' => array()
		);
		$data['Leer'] = $this->Configuracion_M->leerPerfiles();
		$data['Rol'] = $this->Configuracion_M->tablaRol();
		
		$this->load->view('Template/Main_View', $data);
	}

	public function perfilesObt($id)
	{
		$data = array(
			'page_title' => 'Perfiles','view' => 'Configuracion/Perfiles_Update','data_view' => array()
		);
		$data['Obt'] = $this->Configuracion_M->Obtener($id);
		$data['Rol'] = $this->Configuracion_M->tablaRol();
		
		$this->load->view('Template/Main_View', $data);
	}

	public function insertarPerfiles()
	{
		if ($this->input->is_ajax_request()) {
			$data = array(
				'nombre_user' => $this->input->post('nombre_user'),
				'user' => $this->input->post('user'),
				'pass' => base64_encode($this->input->post('pass')),
				'rol_' => $this->input->post('rol_')
			);
			if ($this->Configuracion_M->insertarPerfiles($data)) {
				echo json_encode(array('success' => 1));
			} else {
				echo json_encode(array('success' => 0));
			}
		} else {
			echo "Error desconocido";
		}
	}

	public function eliminarPerfiles($id){
		$delete = $this->Configuracion_M->eliminarPerfiles($id);
		if ($delete == true) {
			$this->Perfiles();
		} else {
			echo "no funciono";
		}
	}

	public function actualizarPerfiles()
	{
		if ($this->input->is_ajax_request()) {
			$data = array(
				'nombre_user' => $this->input->post('nombre_user'),
				'user' => $this->input->post('user'),
				'pass' => base64_encode($this->input->post('pass')),
				'rol_' => $this->input->post('rol_'),
				'id_user' => $this->input->post('id_user')
			);
			if ($this->Configuracion_M->actualizarPerfiles($data)) {
				echo json_encode(array('success' => 1));
			} else {
				echo json_encode(array('success' => 0));
			}
		} else {
			echo "Error desconocido";
		}
	}

	////////////////////////////////////////////////////////////////////////////
	// PERSONAL ////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////

	public function leerPersonal()
	{
		$data = array(
			'page_title' => 'inicio','view' => 'Configuracion/Personal','data_view' => array()
		);
		$data['Leer'] = $this->Configuracion_M->leerPersonal();
		$data['Rol'] = $this->Configuracion_M->tablaRol();
		$this->load->view('Template/Main_View', $data);
	}

	public function obtPersonal($id)
	{
		$data = array(
			'page_title' => 'Actualizar','view' => 'Configuracion/Personal_Update','data_view' => array()
		);
		$data['obtP'] = $this->Configuracion_M->obtPersonal($id);
		$data['rolUser'] = $this->Configuracion_M->tablaRol();
		
		$this->load->view('Template/Main_View', $data);
	}

	public function verPersonal($id)
	{
		$data = array(
			'page_title' => 'Actualizar','view' => 'Configuracion/Personal_Detalle','data_view' => array()
		);
		$data['obtP'] = $this->Configuracion_M->obtPersonal($id);
		$data['rolUser'] = $this->Configuracion_M->tablaRol();
		
		$this->load->view('Template/Main_View', $data);
	}

	public function insertarPersonal()
	{
		if ($this->input->is_ajax_request()) {
			$data = array(
				'nombre_personal' => $this->input->post('nombre_personal'),
				'usuario_personal' => $this->input->post('usuario_personal'),
				'pass_personal' => base64_encode($this->input->post('pass_personal')),
				'rol_personal' => $this->input->post('rol_personal'),
				'email_personal' => $this->input->post('email_personal'),
				'nacimiento_personal' => $this->input->post('nacimiento_personal'),
				'telefono_personal' => $this->input->post('telefono_personal'),
				'sexo_personal' => $this->input->post('sexo_personal')
			);
			if ($this->Configuracion_M->insertarPersonal($data)) {
				echo json_encode(array('success' => 1));
			} else {
				echo json_encode(array('success' => 0));
			}
		} else {
			echo "Error desconocido";
		}
	}

	public function eliminarPersonal($id){
		$delete = $this->Configuracion_M->eliminarPersonal($id);
		if ($delete == true) {
			$this->leerPersonal();
		} else {
			echo "no funciono";
		}
	}

	public function actualizarPersonal()
	{
		if ($this->input->is_ajax_request()) {
			$data = array(
				'nombre_personal' => $this->input->post('nombre_personal'),
				'usuario_personal' => $this->input->post('usuario_personal'),
				'pass_personal' => base64_encode($this->input->post('pass_personal')),
				'rol_personal' => $this->input->post('rol_personal'),
				'email_personal' => $this->input->post('email_personal'),
				'nacimiento_personal' => $this->input->post('nacimiento_personal'),
				'telefono_personal' => $this->input->post('telefono_personal'),
				'sexo_personal' => $this->input->post('sexo_personal'),
				'id_personal' => $this->input->post('id_personal')
			);
			if ($this->Configuracion_M->actualizarPersonal($data)) {
				echo json_encode(array('success' => 1));
			} else {
				echo json_encode(array('success' => 0));
			}
		} else {
			echo "Error desconocido";
		}
	}
	
}
