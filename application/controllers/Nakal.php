<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nakal extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('role') == '')redirect('landing');
		// if($this->uri->segment(1) != $this->session->userdata('role')) redirect($this->session->userdata('role'));
		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$this->load->view('page/nakal_page', $data);
	}
}