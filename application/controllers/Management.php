<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller {

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
		$data['faslist'] = $this->load->view('template/faslist', $data, TRUE);
		$this->load->view('page/manage_page', $data);
	}
	public function facilities()
	{
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');
		$data['facilities'] = $this->facilities_model->getAllfasilitas();
		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
		$data['faslist'] = $this->load->view('template/faslist', $data, TRUE);
		$this->load->view('page/manage_page', $data);
	}
	public function request()
	{
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');
		$data['requestall'] = $this->facilities_model->getAllRequest();
		$data['style'] = $this->load->view('include/style', NULL, TRUE);
        $data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
		$data['requestlist'] = $this->load->view('template/reqlist', $data, TRUE);
		$this->load->view('page/manage_page', $data);
	}

	public function addfacilitiesform()
	{
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');
		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
		$this->load->view('page/addfacilities_page', $data);
	}

	public function addingfacilities(){
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('desc','Desc','required');
	
		if (!$this->form_validation->run()) {
			$data['style'] = $this->load->view('include/style', NULL, TRUE);
			$data['script'] = $this->load->view('include/script', NULL, TRUE);
			$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
			$this->load->view('page/addfacilities_page', $data);
			} else {
			$this->facilities_model->AddFacility();
			};
	}

	public function deleteFacilities($id){
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');
		
		$this->facilities_model->deletefacilities($id);
		redirect($this->session->userdata('role').'/facilities');
	}

	public function Approve($id){
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');
		
		$this->facilities_model->approveReq($id);
		redirect($this->session->userdata('role').'/request');
	}
	
	public function Reject($id){
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');
		
		$this->facilities_model->rejectReq($id);
		redirect($this->session->userdata('role').'/request');
	}

	public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }		
}
