<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracion_M extends CI_Model {

	public function tablaRol()
	{
		$L = $this->db->get('user_rol');
		return $L->result();
	}

	public function getLibro()
	{
		$this->db->select('*');
		$this->db->from('libro as l');
		$this->db->join('categoria as c', 'c.id_categoria = l.id_categoria', 'left');
		$this->db->join('autor as a', 'a.id_autor = l.id_autor', 'left');
		$this->db->join('editorial as e', 'e.id_editorial = l.id_editorial', 'left');
		$libro =  $this->db->get();
		return $libro->result();
	}

	////////////////////////////////////////////////////////////////////////////
	// PERFILES ////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////

	public function leerPerfiles()
	{
		$this->db->select('*');
		$this->db->from('user as u');
		$this->db->join('user_rol as ur', 'u.rol_ = ur.id_rol', 'left');
		$L = $this->db->get();
		return $L->result();
	}
	public function insertarPerfiles($data)
	{
		return ($this->db->Insert('user', $data))? true:false;
	}

	public function Obtener($id){
		$this->db->join('user_rol as ur', 'u.rol_ = ur.id_rol', 'left');
		$this->db->where('id_user', $id);
		$obt = $this->db->get('user as u');
		return ($obt->num_rows() === 1) ? $obt->row(): false;
	}

	public function eliminarPerfiles($id){
		$this->db->where('id_user =',$id);
		return ($this->db->delete('user')) ? true : false;
	}
	public function actualizarPerfiles($data)
	{
		$this->db->where('id_user =',$data['id_user']);
		return ($this->db->Update('user', $data))? true:false;
	}

	////////////////////////////////////////////////////////////////////////////
	// PERSONAL ////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////

	public function leerPersonal()
	{
		$this->db->select('*');
		$this->db->from('personal as p');
		$this->db->join('user_rol as ur', 'p.rol_personal = ur.id_rol', 'left');
		$L = $this->db->get();
		return $L->result();
	}
	public function insertarPersonal($data)
	{
		return ($this->db->Insert('personal', $data))? true:false;
	}

	public function obtPersonal($id){
		$this->db->join('user_rol as ur', 'p.rol_personal = ur.id_rol', 'left');
		$this->db->where('id_personal', $id);
		$obt = $this->db->get('personal as p');
		return ($obt->num_rows() === 1) ? $obt->row(): false;
	}

	public function eliminarPersonal($id){
		$this->db->where('id_personal =',$id);
		return ($this->db->delete('personal')) ? true : false;
	}
	public function actualizarPersonal($data)
	{
		$this->db->where('id_personal =',$data['id_personal']);
		return ($this->db->Update('personal', $data))? true:false;
	}
}
