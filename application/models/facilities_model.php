<?php
defined('BASEPATH') or exit('No direct script access allowed !');

class facilities_model extends CI_Model{
    public function getAllfasilitas(){
        return $this->db->get('fasilitas')->result_array();
    }
	public function getfasilitasbyid($id){
		return $this->db->get_where('fasilitas', ["id_fasList" => $id])->result_array();
	}
	public function getRequestbyidakun(){
		return $this->db->get_where('request', ["id_akun" => $this->session->userdata('id_akun')])->result_array();
	}
	public function getAllRequest(){
        return $this->db->get('request')->result_array();
    }

	public function AddFacility()
		{
			$upload_gambar = $_FILES['image']['name'];
			if($upload_gambar){
				$config['allowed_types'] = 'jpg|png|jfif';
				$config['max_size'] = '1024';
				$config['upload_path'] = './assets/images';
				$this->load->library('upload',$config);

				if($this->upload->do_upload('image')){
					$new_image = $this->upload->data('file_name');
				}else{
					echo $this->upload->display_errors();
				}
			}

			$data=[
				"nama" => $this->input->post('name', true),
				"deskripsi" => $this->input->post('desc',true),
				"gambar" => 'assets/images/'.$new_image
			];
	
			$this->db->insert('fasilitas',$data);
			redirect($this->session->userdata('role'));
		}
	
	public function editfacilist($id){
		$upload_gambar = $_FILES['image']['name'];
			if($upload_gambar){
				$config['allowed_types'] = 'jpg|png|jfif';
				$config['max_size'] = '1024';
				$config['upload_path'] = './assets/images';
				$this->load->library('upload',$config);

				if($this->upload->do_upload('image')){
					$new_image = $this->upload->data('file_name');
				}else{
					echo $this->upload->display_errors();
				}
				$data=[
					"nama" => $this->input->post('name', true),
					"deskripsi" => $this->input->post('desc',true),
					"gambar" => 'assets/images/'.$new_image
				];
			}
			else{
				$data=[
				"nama" => $this->input->post('name', true),
				"deskripsi" => $this->input->post('desc',true)];
			}
		$this->db->where('id_fasList',$id);
		$this->db->update('fasilitas', $data);
	}

	public function deleterequest($id){
		$this->db->where('id_reqList',$id);
		$this->db->delete('request');
	}
	public function deletefacilities($id){
		$this->db->where('id_fasList',$id);
		$this->db->delete('fasilitas');
	}
	public function approveReq($id){
		$data = array('confirm' => '1');
		$this->db->where('id_reqList',$id);
		$this->db->update('request', $data);
	}
	public function rejectReq($id){
		$data = array('confirm' => '0');
		$this->db->where('id_reqList',$id);
		$this->db->update('request', $data);
	}

}
