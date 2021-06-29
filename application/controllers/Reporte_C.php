<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reporte_C extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('Libro_M');
		/*$this->load->model('Reserva_M');*/
		/*$this->load->model('Cliente_M');*/
	}

	
	public function index()
	{
		$data['libro'] = $this->Libro_M->getLibro();
		$this->load->view('Libro/Pdf_Libro', $data);
		$l = $this->output->get_output();
		$this->load->library('lib_pdf');
		$this->dompdf->loadhtml($l);
		$this->dompdf->setPaper('A4','portrait');
		$this->dompdf->render();
		$this->dompdf->stream('Libro.pdf', array("Attachment => 1")); 
	}

	/*public function reserva(){
		$data['reserva'] = $this->reserva_M->mostrar();
		$this->load->view('Reserva/Pdf_Reserva', $data);
		$r = $this->output->get_output();
		$this->load->library('lib_pdf');
		$this->dompdf->loadhtml($r);
		$this->dompdf->setPaper('A4', 'portrait');
		$this->dompdf->render();
		$this->dompdf->stream('Reserva.pdf', array("Attachment => "));
	}

	public function factura(){
		$data['factura'] = $this->Factura_M->get_factura();
		$this->load->view('Factura/Pdf_Factura', $data);
		$f = $this->output->get_output();
		$this->load->library('lib_pdf');
		$this->dompdf->loadhtml($f);
		$this->dompdf->setPaper('A4', 'portrait');
		$this->dompdf->render();
		$this->dompdf->stream('Factura.pdf', array("Attachment => "));
	}

	public function cliente(){
		$data['cliente'] = $this->Cliente_M->mostrarC();
		$this->load->view('Cliente/Pdf_Cliente', $data);
		$c = $this->output->get_output();
		$this->load->library('lib_pdf');
		$this->dompdf->loadhtml($c);
		$this->dompdf->setPaper('A4', 'portrait');
		$this->dompdf->render();
		$this->dompdf->stream('Cliente.pdf', array("Attachment => "));
	}

	public function historial_reserva(){
		$data['h_res'] = $this->reserva_m->moestrar_reserva();
		$this->load->view('Reserva/Pdf_historial_reserva', $data);
		$hr = $this->output->get_output();
		$this->load->library('lib_pdf');
		$this->dompdf->loadhtml($hr);
		$this->dompdf->setPaper('A4', 'portrait');
		$this->dompdf->render();
		$this->dompdf->stream('historial_reserva.pdf', array("Attachment => "));
	}*/

}
