<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_model');
		$this->load->helper('my_helper');
		$this->load->library('form_validation');
	}



	public function tambah_guru()
	{


		$data['guru'] = $this->m_model->get_data('guru')->result();
		$data['mapel'] = $this->m_model->get_data('mapel')->result();
		$this->load->view('project/tambah_guru', $data);
	}

	public function tambah_siswa()
	{


		$data['siswa'] = $this->m_model->get_data('siswa')->result();
		$data['kelas'] = $this->m_model->get_data('kelas')->result();
		$this->load->view('project/tambah_siswa', $data);
	}

	public function home()
	{

		$this->load->view('project/home');
	}
	public function dashboard()
	{
		$data['siswa'] = $this->m_model->get_data('siswa')->num_rows();
		$data['guru'] = $this->m_model->get_data('guru')->num_rows();

		$this->load->view('project/dashboard', $data);
	}
	public function siswa()
	{
		$data['siswa'] = $this->m_model->get_data('siswa')->result();
		$this->load->view('project/siswa', $data);
	}
	public function guru()
	{

		$data['guru'] = $this->m_model->get_data('guru')->result();
		$this->load->view('project/guru', $data);
	}
	public function login()
	{

		$this->load->view('project/login');
	}
	public function registrasi()
	{

		$this->load->view('project/registrasi');
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
			redirect(base_url('project/login'));
		} else {

			redirect(base_url(('project/registrasi')));
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
			$this->session->set_flashdata("alert('Data diri anda salah')");
			redirect(base_url('project/login'));
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('project/home'));
	}
	public function hapus_siswa($id)
	{
		$this->m_model->delete('siswa', 'id_siswa', $id);
		redirect(base_url('project/siswa'));
	}
	public function hapus_guru($id)
	{
		$this->m_model->delete('guru', 'id_guru', $id);
		redirect(base_url('project/guru'));
	}
	public function aksi_tambah_guru()
	{
		$data = [
			'nama_guru' => $this->input->post('nama_guru'),
			'nik' => $this->input->post('nik'),
			'gender' => $this->input->post('gender'),
			'id_mapel' => $this->input->post('id_mapel'),

		];


		$this->m_model->tambah_data('guru', $data);
		redirect(base_url('project/guru'));
	}
	public function update_guru($id)
	{
		$data['guru'] = $this->m_model->get_by_id('guru', 'id_guru', $id)->result();
		$data['mapel'] = $this->m_model->get_by_id('mapel', 'nama_mapel', $id)->result();

		$this->load->view('project/update_guru', $data);
	}
	public function aksi_update_guru()
	{
		$data = array(
			'nama_guru' => $this->input->post('nama_guru'),
			'nik' => $this->input->post('nik'),
			'gender' => $this->input->post('gender'),
			'id_mapel' => $this->input->post('id_mapel'),
		);
		$eksekusi = $this->m_model->ubah_data(
			'guru',
			$data,
			array('id_guru' => $this->input->post('id_guru'))

		);
		if ($eksekusi) {
			$this->session->set_flashdata('sukses', 'berhasil');
			redirect(base_url('project/guru'));
		} else {
			$this->session->set_flashdata('error', 'gagal');
			redirect(base_url('project/update_guru/' . $this->input->post('id_guru')));
		}

		$this->load->view('project/guru');
	}
	public function update_siswa($id)
	{
		$data['siswa'] = $this->m_model->get_by_id('siswa', 'id_siswa', $id)->result();
		$data['kelas'] = $this->m_model->get_data('kelas')->result();

		$this->load->view('project/update_siswa', $data);
	}
	public function aksi_update_siswa()
	{
		$data = array(
			'nama_siswa' => $this->input->post('nama_siswa'),
			'nisn' => $this->input->post('nisn'),
			'gender' => $this->input->post('gender'),
			'id_kelas' => $this->input->post('id_kelas'),
		);
		$eksekusi = $this->m_model->ubah_data(
			'siswa',
			$data,
			array('id_siswa' => $this->input->post('id_siswa'))
		);
		if ($eksekusi) {
			$this->session->set_flashdata('sukses', 'berhasil');
			redirect(base_url('project/siswa'));
		} else {
			$this->session->set_flashdata('error', 'gagal');
			redirect(base_url('project/update_siswa/' . $this->input->post('id_siswa')));
		}

		$this->load->view('project/siswa');
	}
	public function aksi_tambah_siswa()
	{
		$data = [
			'nama_siswa' => $this->input->post('nama'),
			'nisn' => $this->input->post('nisn'),
			'gender' => $this->input->post('gender'),
			'id_kelas' => $this->input->post('id_kelas'),

		];
		$this->m_model->tambah_data('siswa', $data);
		redirect(base_url('project/siswa'));
	}
}