<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {


function __construct()
	{
		parent::__construct();
		$this->load->model('m_register');
	}
 
	public function index()
	{
		$this->load->view('v_register');
	}

	public function proses()
	{
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[tb_user.username]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->m_register->register($username,$password,$nama);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('v_login');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('v_register');
		}
	}
}