<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_model');
        $this->load->helper('my_helper');
    }

    public function home()
	{
		$data['title'] = 'Home';

		$this->load->view('auth/home');
	}
    public function login()
	{
		$data['title'] = 'Halaman Login';

		$this->load->view('auth/login');
	}
	
	public function registrasi()
	{

		$data['title'] = 'Halaman Registrasi';

		$this->load->view('auth/registrasi');
	}
	public function aksi_registrasi()
	{

		$data = [
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),


		];
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');

		if ($this->form_validation->run() === TRUE) {
			$this->m_model->tambah_data('admin', $data);
			redirect(base_url('auth/login'));
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Password anda kurang dari 8 angka
			
		
		  </div>');
			redirect(base_url(('auth/registrasi')));
		}
	}

	public function aksi_login()
	{
		$email = $this->input->post('email', true);
		$password = $this->input->post('password', true);
		$data = ['email' => $email,];
		$query = $this->m_model->getwhere('admin', $data);
		$result = $query->row_array();

		if (!empty($result) && md5($password) === $result['password']) {
			$data = [
				'logged_in' => true,
				'email' => $result['email'],
				'username' => $result['username'],
				'role' => $result['role'],
				'id' => $result['id'],
			];
			$this->session->set_userdata($data);
			redirect(base_url('project/dashboard'));
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Email Atau Password anda salah
			
		
		  </div>');
			redirect(base_url('auth/login'));
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('auth/home'));
	}
}