<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class prestamo_c extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('prestamo_m');
		$this->load->library('cart');
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Prestamos',
			'view' => 'prestamo/prestamo_view',
			'data_view' => array()
		);
		$presta =  $this->prestamo_m->mostrar();
		$data['presta'] = $presta;
		$this->load->view('Template/Main_View', $data);
	}
	public function mostrar_prestamo($id)
	{
		$data = array(
			'page_title' => 'Historial de Prestamos',
			'view' => 'prestamo/historial_view',
			'data_view' => array()
		);
		$historial =  $this->prestamo_m->mostrar_prestamo($id);
		$data['historial'] = $historial;
		$this->load->view('Template/Main_View', $data);
	}
	public function insertar_prestamo(){
		if ($this->input->is_ajax_request()) {
			$dui = array (
				'dui' => $this->input->post('dui')
			);
			$id_cliente = $this->prestamo_m->obtener_id($dui);

			$data = array (
				'dui' => $id_cliente->dui,
				'id_libro' => $this->input->post('id_libro'),
				'cantidades' => $this->input->post('cantidades'),
				'fecha_prestamo' => $this->input->post('fecha_prestamo'),
				'fecha_entregap' => $this->input->post('fecha_entregap'),
			);
			if ($this->prestamo_m->insertar_prestamo($data)) {
				echo json_encode(array('success' => 1));
			}else{
				echo json_encode(array('success' => 0));
			}
		}else{
			echo "error";
		}
	}
	public function eliminar_prestamo($id){
		$delete = $this->prestamo_m->eliminar_prestamo($id);
		if ($delete == true) {
			$this->index();
		} else {
			echo "no funciono";
		}
	}
	public function obtener($id){
		
	}
	public function prestamo_form($id)
	{
		$data = array(
			'page_title' => 'Ingresar Prestamo',
			'view' => 'prestamo/fromulario_prestamo',
			'data_view' => array()
		);
		$libro = $this->prestamo_m->select_libro($id);
		$data['id'] = $libro;
		$this->load->view('template/main_view', $data);
	}
	public function obtener_prestamo($obten)
	{
		$data = array(
			'page_title' => 'Prestamos',
			'view' => 'prestamo/actualizar_prestamo',
			'data_view' => array()
		);

		$prestamo = $this->prestamo_m->obtener($obten);
		$data['x'] = $prestamo;
		$this->load->view('template/main_view', $data);
	}
	public function updatep(){
		if ($this->input->is_ajax_request()) {
			$dui = array (
				'dui' => $this->input->post('dui')
			);
			$id_cliente = $this->prestamo_m->obtener_id($dui);

			$data = array (
				'id_prestamo' => $this->input->post('id_prestamo'),
				'dui' => $id_cliente->dui,
				'id_libro' => $this->input->post('id_libro'),
				'cantidades' => $this->input->post('cantidades'),
				'fecha_prestamo' => $this->input->post('fecha_prestamo'),
				'fecha_entregap' => $this->input->post('fecha_entregap'),
			);
			if ($this->prestamo_m->update_prestamo($data)) {
				echo json_encode(array('success' => 1));
			}else{
				echo json_encode(array('success' => 0));
			}
		}else{
			echo "error";
		}
	}
	
	
}
