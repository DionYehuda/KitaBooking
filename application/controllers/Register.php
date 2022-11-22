<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[akun.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('conpassword', 'Password Confirmation', 'required|matches[password]');


		if ($this->form_validation->run() == false){
			$error = 'Password tidak sama';
			redirect('landing');
		}
        else{
            $this->register();
        }
	}

	public function register(){
		$data=[
			'alamat' => htmlspecialchars($this->input->post('address',true)),
			'tgl_Lahir' => htmlspecialchars($this->input->post('tanggal',true)),
			'email' => htmlspecialchars($this->input->post('email',true)),
			'password' => md5($this->input->post('password')),
			'username' => htmlspecialchars($this->input->post('username',true)),
			'role' => 'user',
		];
		$this->db->insert('akun',$data);
		$this->session->set_flashdata('message','<div class="alert alert-primary" role="alert">your account has been created. please login </div>');
		$error = 'Akun telah didaftarjan.';
		redirect('landing');
	}
}

