<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class Login_M extends CI_Model
{

	public function login_user($user,$pass){

		$this->db->where('user',$user);
		$this->db->where('pass',$pass);
		$result = $this->db->get('user');
		return $result;
	}

	public function seccion_user($id)
	{
		$this->db->where('id_user',$id);
		$this->db->delete('user');
	}

	public function obtenerC($id){
		
		$this->db->where('dui =', $id);
		$Cliente = $this->db->get('cliente');
		return $Cliente->row();
	}

}

?>