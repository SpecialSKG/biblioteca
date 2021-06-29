<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reserva_m extends CI_Model {

	public function mostrar()
	{
		$this->db->select('*');
		$this->db->from('reserva r');
		$this->db->join('libro l','r.id_libro = l.id_libro');
		$this->db->join('cliente c','c.dui = r.dui');
		$reserva = $this->db->get();
		return $reserva->result();
	}
	public function mostrar_reserva($id){
		$this->db->select('*');
		$this->db->where('dui =',$id);
		$this->db->from('reserva_historial r');
		$this->db->join('libro l','r.id_libro = l.id_libro');
		$reserva = $this->db->get();
		return $reserva->result();
	}
	public function insertar_reserva($data){
		return ($this->db->insert('reserva',$data)) ? true : false ;
	}
	public function eliminar_reserva($id_reserva){
		$this->db->where('id_reserva',$id_reserva);
		return ($this->db->delete('reserva')) ? true : false;
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
		$this->db->join('libro l','r.id_libro = l.id_libro');
		$this->db->join('cliente c','c.dui = r.dui');
		$this->db->where('id_reserva = '. $id);
		$reserva = $this->db->get('reserva r');
		return $reserva->row();

		//$this->db->where('id_reserva =', $id);
		//$renta =	$this->db->get('reserva');
		//return $renta->row();
	}
	public function update($datos){
		$this->db->where('id_reserva',$datos['id_reserva']);
		return ($this->db->update('reserva',$datos))? true:false;
	}

}