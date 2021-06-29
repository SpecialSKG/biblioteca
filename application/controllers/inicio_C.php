<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inicio_C extends CI_Controller {

	public function Index(){
		$data = array(
			'page_title' => 'Biblioteca', 'view' => 'Inicio/Index','data_view' => array()
		);
		$this->load->view('Template2/Main_View', $data);
	}
	public function terrorV(){
		$data = array(
			'page_title' => 'Terror', 'view' => 'Inicio/Terror','data_view' => array()
		);
		$this->load->view('Template2/Main_View', $data);
	}
	public function infantilV(){
		$data = array(
			'page_title' => 'Infantil', 'view' => 'Inicio/Infantil','data_view' => array()
		);
		$this->load->view('Template2/Main_View', $data);
	}
	public function romanticoV(){
		$data = array(
			'page_title' => 'Romantico', 'view' => 'Inicio/Romantico','data_view' => array()
		);
		$this->load->view('Template2/Main_View', $data);
	}
	public function accionV(){
		$data = array(
			'page_title' => 'Accion', 'view' => 'Inicio/Accion','data_view' => array()
		);
		$this->load->view('Template2/Main_View', $data);
	}
	public function aventuraV(){
		$data = array(
			'page_title' => 'Aventura', 'view' => 'Inicio/Aventura','data_view' => array()
		);
		$this->load->view('Template2/Main_View', $data);
	}
	public function comicsV(){
		$data = array(
			'page_title' => 'Comics', 'view' => 'Inicio/Comics','data_view' => array()
		);
		$this->load->view('Template2/Main_View', $data);
	}
	public function ficcionV(){
		$data = array(
			'page_title' => 'Ficcion', 'view' => 'Inicio/Ficcion','data_view' => array()
		);
		$this->load->view('Template2/Main_View', $data);
	}
	public function humorV(){
		$data = array(
			'page_title' => 'Humor', 'view' => 'Inicio/Humor','data_view' => array()
		);
		$this->load->view('Template2/Main_View', $data);
	}
}
