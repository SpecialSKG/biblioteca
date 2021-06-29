<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libro_M extends CI_Model {
	
	public function getLibro()
	{
		$this->db->select('l.id_libro,l.identificador,l.titulo,c.categoria,a.nombre,l.fecha_lanzamiento,e. 	Editorial_e ,l.imagen,l.stock');
		$this->db->from('libro as l');
		$this->db->join('categoria as c', 'c.id_categoria = l.id_categoria', 'left');
		$this->db->join('autor as a', 'a.id_autor = l.id_autor', 'left');
		$this->db->join('editorial as e', 'e.id_editorial = l.id_editorial', 'left');
		$libro =  $this->db->get();
		return $libro->result();
	}

	public function getAutor(){
		$autor = $this->db->get('autor');
		return $autor->result();
	}

	public function agregarLibro($data){
		return ($this->db->insert('libro', $data)) ? true:false;
	}

	public function eliminarLibro($id_libro){
		$this->db->where('id_libro', $id_libro);
		return ($this->db->delete('libro')) ? true:false;
	}

	public function obteLibro($id_libro){
		$this->db->select('*');
		$this->db->from('libro');
		$this->db->where('id_libro ='. $id_libro);
		$libro = $this->db->get();
		return ($libro->num_rows() ===1) ? $libro->row(): false;
	}

	public function actualizarLibro($data){
		$this->db->where('id_libro', $data['id_libro']);
		return ($this->db->update('libro', $data)) ? true:false;
	}

	//////////////////////////////////////////////////////////////

	public function getCategoria(){
		$categoria = $this->db->get('categoria');
		return $categoria->result();
	}

	public function agregarCategoria($data){
		return ($this->db->insert('categoria', $data)) ? true:false;
	}

	public function obteCategoria($id_categoria){
		$this->db->select('*');
		$this->db->from('categoria');
		$this->db->where('id_categoria =', $id_categoria);
		$categoria = $this->db->get();
		return ($categoria->num_rows() ===1) ? $categoria->row(): false;
	}

	public function actualizarCategoria($data){
		$this->db->where('id_categoria', $data['id_categoria']);
		return ($this->db->update('categoria', $data)) ? true:false;
	}

	public function eliminarCategoria($id_categoria){
		$this->db->where('id_categoria', $id_categoria);
		return ($this->db->delete('categoria')) ? true:false;
	}

	////////////////////////////////////////////////////////////////////////////

	public function getAutores(){
		$this->db->select('*');
		$this->db->from('autor as a');
		$this->db->join('pais as p', 'p.id_pais = a.id_pais', 'left');
		$a =  $this->db->get();
		return $a->result();
	}

	public function getNacionalidad(){
		$Pais = $this->db->get('pais');
		return $Pais->result();
	}

	public function agregarAutores($data){
		return ($this->db->insert('autor', $data)) ? true:false;
	}

	public function obteAutores($id_autor){
		$this->db->join('pais as p', 'p.id_pais = a.id_pais', 'left');
		$this->db->where('id_autor', $id_autor);
		$obtA = $this->db->get('autor as a');
		return ($obtA->num_rows() ===1) ? $obtA->row(): false;
	}

	public function actualizarAutores($data){
		$this->db->where('id_autor', $data['id_autor']);
		return ($this->db->update('autor', $data)) ? true:false;
	}

	public function eliminarAutores($id_autor){
		$this->db->where('id_autor', $id_autor);
		return ($this->db->delete('autor')) ? true:false;
	}

	////////////////////////////////////////////////////////////////////////

	public function getEditorial(){
		$editorial = $this->db->get('editorial');
		return $editorial->result();
	}

	public function agregarEditorial($data){
		return ($this->db->insert('editorial', $data)) ? true:false;
	}

	public function obtEditorial($id_editorial){
		$this->db->select('*');
		$this->db->from('editorial');
		$this->db->where('id_editorial =', $id_editorial);
		$edit = $this->db->get();
		return ($edit->num_rows() ===1) ? $edit->row(): false;
	}

	public function eliminarEditorial($id_editorial){
		$this->db->where('id_editorial', $id_editorial);
		return ($this->db->delete('editorial')) ? true:false;
	}

	public function actualizarEditorial($data){
		$this->db->where('id_editorial', $data['id_editorial']);
		return ($this->db->update('editorial', $data)) ? true:false;
	}

}

// public function getSubCategoria(){
// 	$sub_categoria = $this->db->get('subcategoria');
// 	return $sub_categoria->result();
// }
