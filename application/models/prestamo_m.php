<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class prestamo_m extends CI_Model {

	public function mostrar()
	{
		$this->db->select('*');
		$this->db->from('prestamo p');
		$this->db->join('libro l','p.id_libro = l.id_libro');
		$this->db->join('cliente c','c.dui = p.dui');
		$presta = $this->db->get();
		return $presta->result();
	}
	public function mostrar_prestamo($id){
		$this->db->select('*');
		$this->db->from('prestamo_historial p');
		$this->db->join('libro l','p.id_libro = l.id_libro');
		$presta = $this->db->get();
		return $presta->result();
	}
	public function insertar_prestamo($data){
		return ($this->db->insert('prestamo',$data)) ? true : false ;
	}
	public function eliminar_prestamo($id_prestamo){
		$this->db->where('id_prestamo',$id_prestamo);
		return ($this->db->delete('prestamo')) ? true : false;
	}
	public function select_libro($id_libro){
		$this->db->where('id_libro ='.$id_libro);
		$libro = $this->db->get('libro');
		return $libro->row();
	}
	public function obtener_id($dui){
		$this->db->select('dui');
		$this->db->from('cliente');
		$this->db->where('dui =', $dui['dui']);
		$id = $this->db->get();
		return $id->row();
		
		
		
	}
	public function obtener($id){
		$this->db->join('libro l','p.id_libro = l.id_libro');
		$this->db->join('cliente c','c.dui = p.dui');
		$this->db->where('id_prestamo =' . $id);
		$presta = $this->db->get('prestamo p');
		return $presta->row();
	}
		public function update_prestamo($datos){
		$this->db->where('id_prestamo',$datos['id_prestamo']);
		return ($this->db->update('prestamo',$datos))? true:false;
	}

}