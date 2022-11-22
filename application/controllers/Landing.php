<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
	public function index()
	{
		if($this->session->userdata('role'))redirect($this->session->userdata('role'));
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false){
			$data['register'] = $this->load->view('page/register',NULL,TRUE);
			$data['login'] = $this->load->view('page/login',NULL,TRUE);
			$data['style'] = $this->load->view('include/style', NULL, TRUE);
			$data['script'] = $this->load->view('include/script', NULL, TRUE);
			$this->load->view('page/landing_page', $data);
        }
        else{
            $this->_login();
        }
	}

	public function _login(){
		$email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $user = $this->db->get_where('akun', ['email' => $email])->row_array();
		if ($user){
			if ($password == $user['password']){
                $username = $user['username'];
                $data = $user;
                $this->session->set_userdata($data);
                redirect($user['role']);
            }
			else{
                $this->session->set_flashdata('error_message', ' <p class="text-center text-danger" style="margin-top:10px;">Data yang Anda masukkan tidak valid!</p>');
                redirect('/');
            }
		}
		else{
            $this->session->set_flashdata('error_message', ' <p class="text-center text-danger" style="margin-top:10px;">Akun Anda belum terdaftar!</p>');
            redirect('/');
        }
	}
}
