<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation');
	}

	public function index()
	{
		$this->book();
	}

	public function book(){
		$data=[
			'id_fasList' => htmlspecialchars($this->input->post('idfas',true)),
			'namafaslist' => htmlspecialchars($this->input->post('namfas',true)),
			'tanggal' => htmlspecialchars($this->input->post('tanggal',true)),
			'jamMulai' => htmlspecialchars($this->input->post('start',true)),
			'jamSelesai' => htmlspecialchars($this->input->post('end',true)),
			'id_akun' => $this->session->userdata('id_akun'),
			'requester' => $this->session->userdata('username'),
		];
		$this->db->insert('request',$data);
		$this->session->set_flashdata('message','<div class="alert alert-primary" role="alert">Your request is in proggress</div>');
		redirect('user/request');
	}
}
