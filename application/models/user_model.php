<?php
defined('BASEPATH') or exit('No direct script access allowed !');

class user_model extends CI_Model{
	public function getAlluser(){
		return $this->db->get('akun')->result_array();
	}
	public function getuserbyid($id){
		return $this->db->get_where('akun', ["id_akun" => $id])->result_array();
	}
	public function deleteuser($id){
		$this->db->where('id_akun',$id);
		$this->db->delete('akun');
	}
	public function edituser($id){
		$data=[
			"username" => $this->input->post('username', true),
			"email" => $this->input->post('email',true),
			"tgl_Lahir" => $this->input->post('bdate',true),
			"alamat" => $this->input->post('add',true)];
		$this->db->where('id_akun',$id);
		$this->db->update('akun', $data);
	}
	
}
