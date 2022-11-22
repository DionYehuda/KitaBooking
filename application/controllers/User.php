<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent:: __construct();
        $this->load->model('facilities_model');
    }

	public function index()
	{
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');
		$data['facilities'] = $this->facilities_model->getAllfasilitas();
        $data['style'] = $this->load->view('include/style', NULL, TRUE);
        $data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
		$data['facilities'] = $this->load->view('template/facilities', $data, TRUE);
		$this->load->view('page/user_page', $data);
	}
	
	public function facilities()
	{
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');
		$data['facilities'] = $this->facilities_model->getAllfasilitas();
		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
		$data['facilities'] = $this->load->view('template/facilities', $data, TRUE);
		$this->load->view('page/user_page', $data);
	}

	public function request(){
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');
		$data['request'] = $this->facilities_model->getRequestbyidakun();
		$data['style'] = $this->load->view('include/style', NULL, TRUE);
        $data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
		$data['requestlist'] = $this->load->view('template/requestlist', $data, TRUE);
		$this->load->view('page/user_page', $data);
	}

	public function facilitiesdetail($id)
	{
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');
		$data['detail'] = $this->facilities_model->getfasilitasbyid($id);
        $data['style'] = $this->load->view('include/style', NULL, TRUE);
        $data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
		$this->load->view('page/facility_detail', $data);
	}
	
	public function booking($id)
	{
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');
		$data['detail'] = $this->facilities_model->getfasilitasbyid($id);
        $data['style'] = $this->load->view('include/style', NULL, TRUE);
        $data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
		$this->load->view('page/booking_page', $data);
	}

	public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }	
}
