<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reserva_c extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('reserva_m');
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Reservas',
			'view' => 'reservas/reserva_view',
			'data_view' => array()
		);
		$reserva =  $this->reserva_m->mostrar();
		$data['reserva'] = $reserva;
		$this->load->view('Template/Main_View', $data);
	}
	public function mostrar_reserva($id)
	{
		$data = array(
			'page_title' => 'Historial de Reservas',
			'view' => 'reservas/historial_view',
			'data_view' => array()
		);
		$historial =  $this->reserva_m->mostrar_reserva($id);
		$data['historial'] = $historial;
		$this->load->view('Template/Main_View', $data);
	}
	public function insertar_reserva(){
		if ($this->input->is_ajax_request()) {
			$dui = array (
				'dui' => $this->input->post('dui')
			);
			$id_cliente = $this->reserva_m->obtener_id($dui);

			$data = array (
				'id_libro' => $this->input->post('id_libro'),
				'dui' => $id_cliente->dui,
				'cantidad' => $this->input->post('cantidad'),
				'fecha_salida' => $this->input->post('fecha_salida'),
				'fecha_entrega' => $this->input->post('fecha_entrega'),
			);
			if ($this->reserva_m->insertar_reserva($data)) {
				echo json_encode(array('success' => 1));
			}else{
				echo json_encode(array('success' => 0));
			}
		}else{
			echo "error";
		}
	}
	public function eliminar_reserva($id){
		$delete = $this->reserva_m->eliminar_reserva($id);
		if ($delete == true) {
			$this->index();
		} else {
			echo "no funciono";
		}
	}
	public function obtener($id){
		$libro = $this->reserva_m->select_libro($id);
		$data['libro'] = $libro;
	}
	public function reserva_form($id_libro)
	{
		$data = array(
			'page_title' => 'Ingresar Reserva',
			'view' => 'reservas/fromulario_reserva',
			'data_view' => array()
		);
		$id = $this->reserva_m->select_libro($id_libro);
		$data['id'] = $id;
		$this->load->view('template/main_view', $data);
	}
	public function obtener_reserva($obten)
	{
		$data = array(
			'page_title' => 'Reservas',
			'view' => 'reservas/actualizar_reserva',
			'data_view' => array()
		);

		$reservas = $this->reserva_m->obtener($obten);
		$data['x'] = $reservas;
		$this->load->view('template/main_view', $data);
	}
	public function obtener_envio($obten)
	{
		$data = array(
			'page_title' => 'Reservas',
			'view' => 'reservas/cancelar',
			'data_view' => array()
		);

		$reservas = $this->reserva_m->obtener($obten);
		$data['x'] = $reservas;
		$this->load->view('template/main_view', $data);
	}
	public function updateReserva(){
		if ($this->input->is_ajax_request()) {
			$dui = array (
				'dui' => $this->input->post('dui')
			);
			$id_cliente = $this->reserva_m->obtener_id($dui);

			$data = array (
				'id_reserva' => $this->input->post('id_reserva'),
				'id_libro' => $this->input->post('id_libro'),
				'dui' => $id_cliente->dui,
				'cantidad' => $this->input->post('cantidad'),
				'fecha_salida' => $this->input->post('fecha_salida'),
				'fecha_entrega' => $this->input->post('fecha_entrega'),
			);
			if ($this->reserva_m->update($data)) {
				echo json_encode(array('success' => 1));
			}else{
				echo json_encode(array('success' => 0));
			}
		}else{
			echo "error";
		}
	}
	
}
