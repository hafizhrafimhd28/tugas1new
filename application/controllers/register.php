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
		$this->load->library('form_validation');
   		$this->load->library('session');

		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[user.username]');
		$this->form_validation->set_rules('ttl', 'ttl','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('alamat', 'alamat','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		
		if ($this->form_validation->run()==true)
	   	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$ttl = $this->input->post('ttl');
			$alamat = $this->input->post('alamat');
			$this->m_register->register($username,$password,$ttl,$alamat);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			echo '<script>alert("Sukses! Anda berhasil melakukan register. Silahkan login untuk mengakses data.");window.location.href="'.base_url('login').'";</script>';
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			echo '<script>alert("Data yang anda Masukkan Tidak Valid! Silahkan Ulangi Registrasi Anda");window.location.href="'.base_url('register').'";</script>';
		}
	}
}