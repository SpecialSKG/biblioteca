<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Cliente_M extends CI_Model{

	public function mostrarC(){
		$Cliente=$this->db->get('cliente');
		return $Cliente->result();
	}
	public function insertaC($data){

		return($this->db->Insert('cliente',$data)) ? true:false;
	}
	public function obtenerC($id){
		
		$this->db->where('dui =', $id);
		$Cliente = $this->db->get('cliente');
		return $Cliente->row();
	}
	public function actualizarC($data){
		$this->db->where('dui', $data['dui']);
		return ($this->db->update('cliente',$data)) ? true:false;
	}
	public function eliminarC($id){

		$this->db->where('dui =', $id);
		return($this->db->delete('cliente')) ? true:false;
	}
	public function vetadosC(){
		$Cliente=$this->db->get('clientes_vetados');
		return $Cliente->result();
	}
}
?>