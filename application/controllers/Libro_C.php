<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libro_C extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('Libro_M');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Libro', 'view' => 'Libro/Libro','data_view' => array()
		);
		$data['libro'] = $this->Libro_M->getLibro();
		$data['categoria'] = $this->Libro_M->getCategoria();
		$data['autor'] = $this->Libro_M->getAutor();
		$data['editorial'] = $this->Libro_M->getEditorial();
		
		$this->load->view('Template/Main_View', $data);
	}

	public function formularioAgregar(){
		$data = array(
			'page_title' => 'Agregar_Libro', 'view' => 'Libro/Agregar_Libro', 'data_view' => array()
		);
		$data['categoria'] = $this->Libro_M->getCategoria();
		$data['autor'] = $this->Libro_M->getAutor();
		$data['editorial'] = $this->Libro_M->getEditorial();

		$this->load->view('Template/main_view', $data);
	}

	public function agregarLibro(){
		
		if ($this->input->is_ajax_request()) {
			$probando = $this->input->post('imagen');
			$data = array(
				'identificador' => $this->input->post('identificador'),
				'titulo' => $this->input->post('titulo'),
				'id_categoria' => $this->input->post('categoria'),
				'id_autor' => $this->input->post('autor'),
				'fecha_lanzamiento' => $this->input->post('f_lanzamiento'),
				'Editorial_e' => $this->input->post('editorial'),
				'imagen' => substr($probando, 12 ),
				'stock' => $this->input->post('stock')
			);
			if ($this->Libro_M->agregarLibro($data)) {
				echo json_encode(array('success' => 1));
			}else{
				echo json_encode(array('success' => 0));
			}
		}else{
			echo "no se puede acceder";
		}
	}

	public function eliminarLibro($id_libro){
		$this->Libro_M->eliminarLibro($id_libro);
		$this->index();
	}

	public function formularioActualizar($id_libro){
		$data = array(
			'page_title' => 'Actualizar_Libro', 'view' => 'Libro/Actualizar_Libro', 'data_view' => array()
		);
		$data['libro'] = $this->Libro_M->obteLibro($id_libro);
		$data['categoria'] = $this->Libro_M->getCategoria();
		$data['autor'] = $this->Libro_M->getAutor();
		$data['editorial'] = $this->Libro_M->getEditorial();

		$this->load->view('Template/main_view', $data);
	}

	public function actualizarLibro(){
		if ($this->input->is_ajax_request()) {
			$data = array(
				'id_libro' => $this->input->post('id_libro'),
				'titulo' => $this->input->post('titulo'),
				'Editorial_e' => $this->input->post('editorial')
			);
			if ($this->Libro_M->actualizarLibro($data)) {
				echo json_encode(array('success' => 1));
			}else{
				echo json_encode(array('success' => 0));
			}
		}
		else{
			echo "no se puede acceder";
		}
	}

	///////////////////////////////////////////////////////////////////////////////////////////////
	// CATEGORIA //////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////

	public function categoria(){
		$data = array(
			'page_title' => 'Categoria', 'view' => 'Libro/Categoria', 'data_view' => array()
		);
		$data['categoria'] = $this->Libro_M->getCategoria();

		$this->load->view('Template/main_view', $data);
	}

	public function agregarCategoria(){
		if ($this->input->is_ajax_request()) {
			$data = array(
				'categoria' => $this->input->post('categoria')
			);
			if ($this->Libro_M->agregarCategoria($data)) {
				echo json_encode(array('success' => 1));
			}else{
				echo json_encode(array('success' => 0));
			}
		}else{
			echo "no se puede acceder";
		}
	}

	public function formActualizarCategoria($id_categoria){
		$data = array(
			'page_title' => 'Actualizar_Categoria', 'view' => 'Libro/Actualizar_Categoria', 'data_view' => array()
		);
		$data['categoria'] = $this->Libro_M->obteCategoria($id_categoria);

		$this->load->view('Template/main_view', $data);
	}

	public function actualizarCategoria(){
		if ($this->input->is_ajax_request()) {
			$data = array(
				'id_categoria' => $this->input->post('id_categoria'),
				'categoria' => $this->input->post('categoria')
			);
			if ($this->Libro_M->actualizarCategoria($data)) {
				echo json_encode(array('success' => 1));
			}else{
				echo json_encode(array('success' => 0));
			}
		}else{
			echo "no se puede acceder";
		}
	}

	public function eliminarCategoria($id_categoria){
		$this->Libro_M->eliminarCategoria($id_categoria);
		$this->categoria();
	}

	///////////////////////////////////////////////////////////////////////////////////////////////
	// AUTOR //////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////

	public function autorLibro(){
		$data = array(
			'page_title' => 'Autores', 'view' => 'Libro/Autor', 'data_view' => array()
		);
		$data['autor'] = $this->Libro_M->getAutores();
		$data['nacionalidad'] = $this->Libro_M->getNacionalidad();

		$this->load->view('Template/main_view', $data);
	}

	public function agregarAutor(){
		if ($this->input->is_ajax_request()) {
			$data = array(
				'nombre' => $this->input->post('nombreAutor'),
				'fecha_nacimiento' => $this->input->post('nacimientoAutor'),
				'id_pais' => $this->input->post('nacionalidadAutor'),
				'sexo' => $this->input->post('sexoAutor')
			);
			if ($this->Libro_M->agregarAutores($data)) {
				echo json_encode(array('success' => 1));
			}else{
				echo json_encode(array('success' => 0));
			}
		}else{
			echo "no se puede acceder";
		}
		// if ($this->input->is_ajax_request()) {

		// 	$config['upload_path'] = './asset/img';
		// 	$config['allowed_types'] = 'gif|jpg|png|JPG';
		// 	$config['max_size'] = 100;
		// 	$config['max_width'] = 1024;
		// 	$config['max_height'] = 768;
		// 	$this->load->library('upload', $config);

		// 	if ($this->upload->do_upload($this->input->post('fotoAutor'))) {
		// 		$dato = array("upload_data" => $this->upload->data());

		// 		$data = array(
		// 			'nombre' => $this->input->post('nombreAutor'),
		// 			'fecha_nacimiento' => $this->input->post('nacimientoAutor'),
		// 			'id_pais' => $this->input->post('nacionalidadAutor'),
		// 			'sexo' => $this->input->post('sexoAutor'),
		// 			'foto_autor' => $dato['upload_data']['file_name']
		// 		);
		// 		if ($this->Libro_M->agregarAutores($data)) {
		// 			echo json_encode(array('success' => 1));
		// 		}else{
		// 			echo json_encode(array('success' => 0));
		// 		}
		// 	}
		// 	else{
		// 		echo $this->upload->display_errors();
		// 	}
		// }else{
		// 	echo "no se puede acceder";
		// }
	}

	public function obtenerAutor($id_autor){
		$data = array(
			'page_title' => 'Actualizar', 'view' => 'Libro/Actualizar_Autor', 'data_view' => array()
		);
		$data['aut'] = $this->Libro_M->obteAutores($id_autor);
		$data['nacionalidad'] = $this->Libro_M->getNacionalidad();

		$this->load->view('Template/main_view', $data);
		// if (isset($_POST["id_autor"])) {
		// 	$obt = $this->Libro_M->obteAutores($id_autor);
		// 	$data[] = array(
		// 		"id_autor" => $obt['id_autor'],
		// 		"nombre" => $obt['nombre'],
		// 		"fecha_nacimiento" => $obt['fecha_nacimiento'],
		// 		"id_pais" => $obt['id_pais'],
		// 		"sexo" => $obt['sexo'],
		// 		"foto_autor" => $obt['foto_autor']
		// 	);
		// 	echo json_encode($data);
		// }
	}

	public function actualizarAutor(){
		if ($this->input->is_ajax_request()) {
			$data = array(
				'nombre' => $this->input->post('nombreAutor'),
				'fecha_nacimiento' => $this->input->post('nacimientoAutor'),
				'id_pais' => $this->input->post('nacionalidadAutor'),
				'sexo' => $this->input->post('sexoAutor'),
				'id_autor' => $this->input->post('idAutorU')
			);
			if ($this->Libro_M->actualizarAutores($data)) {
				echo json_encode(array('success' => 1));
			}else{
				echo json_encode(array('success' => 0));
			}
		}else{
			echo "no se puede acceder";
		}
	}

	public function eliminarAutores($id_autor){
		$this->Libro_M->eliminarAutores($id_autor);
		$this->autorLibro();
	}


	///////////////////////////////////////////////////////////////////////////////////////////////
	// EDITORIAL //////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////

	public function editorialLibro(){
		$data = array(
			'page_title' => 'Editorial', 'view' => 'Libro/Editorial', 'data_view' => array()
		);
		$data['editorial'] = $this->Libro_M->getEditorial();

		$this->load->view('Template/main_view', $data);
	}

	public function agregarEditorial(){
		if ($this->input->is_ajax_request()) {
			$data = array(
				'Editorial_e' => $this->input->post('editorialEdit'),
				'Pais_e' => $this->input->post('paisEdit'),
				'Direccion_e' => $this->input->post('direccionEdit'),
				'Telefono_e' => $this->input->post('telefonoEdit')
			);
			if ($this->Libro_M->agregarEditorial($data)) {
				echo json_encode(array('success' => 1));
			}else{
				echo json_encode(array('success' => 0));
			}
		}else{
			echo "no se puede acceder";
		}
	}

	public function obtEditorial($id_editorial){
		$data = array(
			'page_title' => 'Actualizar_Categoria', 'view' => 'Libro/Actualizar_Editorial', 'data_view' => array()
		);
		$data['edit'] = $this->Libro_M->obtEditorial($id_editorial);

		$this->load->view('Template/main_view', $data);
	}

	public function actualizarEditorial(){
		if ($this->input->is_ajax_request()) {
			$data = array(
				'Editorial_e' => $this->input->post('editorialEdit'),
				'Pais_e' => $this->input->post('paisEdit'),
				'Direccion_e' => $this->input->post('direccionEdit'),
				'Telefono_e' => $this->input->post('telefonoEdit'),
				'id_editorial' => $this->input->post('idEditorialU')
			);
			if ($this->Libro_M->actualizarEditorial($data)) {
				echo json_encode(array('success' => 1));
			}else{
				echo json_encode(array('success' => 0));
			}
		}else{
			echo "no se puede acceder";
		}
	}

	public function eliminarEditorial($id_editorial){
		$this->Libro_M->eliminarEditorial($id_editorial);
		$this->editorialLibro();
	}
}
