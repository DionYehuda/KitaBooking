<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation');
		$this->load->model('facilities_model');
		$this->load->model('user_model');
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
		$this->load->view('page/admin_page', $data);
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
		$this->load->view('page/admin_page', $data);
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
		$this->load->view('page/admin_page', $data);
	}

	public function user()
	{
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');
		$data['user'] = $this->user_model->getAlluser();
		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
		$data['userlist'] = $this->load->view('template/userlist', $data, TRUE);
		$this->load->view('page/admin_page', $data);
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

	public function deleteRequest($id){
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');
		
		$this->facilities_model->deleterequest($id);
		redirect($this->session->userdata('role').'/request');
	}
	
	public function deleteUser($id){
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');
		
		$this->user_model->deleteuser($id);
		redirect($this->session->userdata('role').'/user');
	}

	public function deleteFacilities($id){
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');
		
		$this->facilities_model->deletefacilities($id);
		redirect($this->session->userdata('role').'/facilities');
	}
	
	public function editFacilitiesForm($id){
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');
		
		$data['facilist'] = $this->facilities_model->getfasilitasbyid($id);
		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
		$this->load->view('page/editfacilities_form', $data);
	}
	
	public function editFacilities($id){
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('desc','Desc','required');

		if (!$this->form_validation->run()) {
				redirect($this->session->userdata('role').'/editFacilitiesForm/'.$id);
			} else {
				$this->facilities_model->editfacilist($id);
				redirect($this->session->userdata('role').'/facilities');
			};
	}
	
	public function editUserForm($id){
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');
		
		$data['userlist'] = $this->user_model->getuserbyid($id);
		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
		$this->load->view('page/edituser_form', $data);
	}

	public function editUser($id){
		if($this->session->userdata('role') == '')redirect('nakal');
		if($this->uri->segment(1) != $this->session->userdata('role')) redirect('nakal');
		
		$this->user_model->edituser($id);
		redirect($this->session->userdata('role').'/user');
	}

	public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }	
}
