<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_M extends CI_Model {

	
	public function getLibro(){
		$this->db->select('*');
		$this->db->from('libro as l');
		$this->db->join('categoria as c', 'c.id_categoria = l.id_categoria', 'left');
		$this->db->join('autor as a', 'a.id_autor = l.id_autor', 'left');
		$this->db->join('editorial as e', 'e.id_editorial = l.id_editorial', 'left');
		$libro =  $this->db->get();
		return $libro->result();
	}
	public function getCategoria(){
		$categoria = $this->db->get('categoria');
		return $categoria->result();
	}

	public function getAutor(){
		$autor = $this->db->get('autor');
		return $autor->result();
	}

	public function getEditorial(){
		$editorial = $this->db->get('editorial');
		return $editorial->result();
	}
}