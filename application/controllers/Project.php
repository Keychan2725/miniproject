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
		if ($this->session->userdata('logged_in') != true) {
			redirect(base_url().'project');
		}
	}



	public function tambah_mapel()
	{

		$data['title'] = 'Tambah Mapel';
		$data['mapel'] = $this->m_model->get_data('mapel')->result();
		$this->load->view('project/tambah_mapel', $data);
	}
	public function tambah_kelas()
	{

		$data['title'] = 'Tambah Kelas';
		$data['kelas'] = $this->m_model->get_data('kelas')->result();
		$data['sekolah'] = $this->m_model->get_data('sekolah')->result();
		$this->load->view('project/tambah_kelas', $data);
	}
	public function tambah_guru()
	{

		$data['title'] = 'Tambah Guru';
		$data['guru'] = $this->m_model->get_data('guru')->result();
		$data['mapel'] = $this->m_model->get_data('mapel')->result();
		$this->load->view('project/tambah_guru', $data);
	}

	public function tambah_siswa()
	{

		$data['title'] = 'Tambah Siswa';

		$data['siswa'] = $this->m_model->get_data('siswa')->result();
		$data['kelas'] = $this->m_model->get_data('kelas')->result();
		$this->load->view('project/tambah_siswa', $data);
	}

	public function home()
	{
		$data['title'] = 'Home';

		$this->load->view('project/home');
	}
	public function mapel()
	{
		$data['title'] = 'Data Mapel';
		$data['mapel'] = $this->m_model->get_data('mapel')->result();
		$this->load->view('project/mapel', $data);
	}
	public function kelas()
	{
		$data['title'] = 'Data Kelas';
		$data['kelas'] = $this->m_model->get_data('kelas')->result();
		$data['sekolah'] = $this->m_model->get_data('sekolah')->result();
		$this->load->view('project/kelas', $data);
	}
	public function dashboard()
	{
		$data['title'] = 'Dashboard';

		$data['siswa'] = $this->m_model->get_data('siswa')->num_rows();
		$data['kelas'] = $this->m_model->get_data('kelas')->num_rows();
		$data['guru'] = $this->m_model->get_data('guru')->num_rows();
		$data['mapel'] = $this->m_model->get_data('mapel')->num_rows();

		$this->load->view('project/dashboard', $data);
	}
	public function siswa()
	{
		$data['title'] = 'Data Siswa';

		$data['siswa'] = $this->m_model->get_data('siswa')->result();
		$data['kelas'] = $this->m_model->get_data('kelas')->result();
		$this->load->view('project/siswa', $data);
	}
	public function guru()
	{
		$data['title'] = 'Data Guru';
		$data['user']= $this->db->get_where('admin',['email'=> $this->session->userdata('email')])->row_array();

		$data['guru'] = $this->m_model->get_data('guru')->result();
		$this->load->view('project/guru', $data);
	}

	public function login()
	{
		$data['title'] = 'Halaman Login';

		$this->load->view('project/login');
	}
	
	public function registrasi()
	{

		$data['title'] = 'Halaman Registrasi';

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
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Password anda kurang dari 8 angka
			
		
		  </div>');
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
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Email Atau Password anda salah
			
		
		  </div>');
			redirect(base_url('project/login'));
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('project/home'));
	}
	public function hapus_mapel($id)
	{
		$this->m_model->delete('mapel', 'id', $id);
		
		redirect(base_url('project/mapel'));
	}
	public function hapus_siswa($id)
	{
		$this->m_model->delete('siswa', 'id_siswa', $id);
		
		redirect(base_url('project/siswa'));
	}
	public function hapus_kelas($id)
	{
		$this->m_model->delete('kelas', 'id', $id);
	
		redirect(base_url('project/kelas'));
	}
	public function hapus_guru($id)
	{
		$this->m_model->delete('guru', 'id_guru', $id);
		
		redirect(base_url('project/guru'));
	}
	public function aksi_tambah_mapel()
	{
		$data = [
			'nama_mapel' => $this->input->post('nama_mapel'),
		
		];


		$this->m_model->tambah_data('mapel', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data Berhasil Ditambahkan
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	
	  </div>');
		redirect(base_url('project/mapel'));
	}
	public function aksi_tambah_kelas()
	{
		$data = [
			'jurusan' => $this->input->post('jurusan'),
			'tingkat' => $this->input->post('tingkat'),

			'id_sekolah' => $this->input->post('id_sekolah'),

		];


		$this->m_model->tambah_data('kelas', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data Berhasil Ditambahkan
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	
	  </div>');
		redirect(base_url('project/kelas'));
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
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data Berhasil Ditambahkan
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	
	  </div>');
		redirect(base_url('project/guru'));
	}
	// public function update_profil($id)
	// {
	// 	$data['title'] = 'Update Profil';

	// 	$data['admin'] = $this->m_model->get_by_id('admin', 'id', $id)->result();
	

	// 	$this->load->view('project/update_profil', $data);
	// }
	// public function aksi_update_profil()
	// {
	// 	$data = array(
	// 		'image' => $this->input->post('image'),
	// 	);
	// 	$eksekusi = $this->m_model->ubah_data(
	// 		'admin',
	// 		$data,
	// 		array('id' => $this->input->post('id'))

	// 	);
	// 	if ($eksekusi) {
	// 		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
	// 		Data Berhasil Diubah
	// 		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		
	// 	  </div>');
	// 		redirect(base_url('project/user'));
	// 	} else {

	// 		redirect(base_url('project/update_profil/' . $this->input->post('id')));
	// 	}

	// 	$this->load->view('project/user');
	// }
	public function update_mapel($id)
	{
		$data['title'] = 'Update Mapel';

		$data['mapel'] = $this->m_model->get_by_id('mapel', 'id', $id)->result();

		$this->load->view('project/update_mapel', $data);
	}
	public function aksi_update_mapel()
	{
		$data = array(
			'nama_mapel' => $this->input->post('nama_mapel'),
		);
		$eksekusi = $this->m_model->ubah_data(
			'mapel',
			$data,
			array('id' => $this->input->post('id'))

		);
		if ($eksekusi) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data Berhasil Diubah
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		
		  </div>');
			redirect(base_url('project/mapel'));
		} else {

			redirect(base_url('project/update_mapel/' . $this->input->post('id')));
		}

		$this->load->view('project/mapel');
	}
	public function update_kelas($id)
	{
		$data['title'] = 'Update Kelas';

		$data['kelas'] = $this->m_model->get_by_id('kelas', 'id', $id)->result();
		$data['sekolah'] = $this->m_model->get_by_id('sekolah', 'nama_sekolah', $id)->result();

		$this->load->view('project/update_kelas', $data);
	}
	public function aksi_update_kelas()
	{
		$data = array(
			'jurusan' => $this->input->post('jurusan'),
			'tingkat' => $this->input->post('tingkat'),
			'id_sekolah' => $this->input->post('id_sekolah'),
		);
		$eksekusi = $this->m_model->ubah_data(
			'kelas',
			$data,
			array('id' => $this->input->post('id'))

		);
		if ($eksekusi) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data Berhasil Diubah
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		
		  </div>');
			redirect(base_url('project/kelas'));
		} else {

			redirect(base_url('project/update_kelas/' . $this->input->post('id')));
		}

		$this->load->view('project/kelas');
	}
	public function update_guru($id)
	{
		$data['title'] = 'Update Guru';

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
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data Berhasil Diubah
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		
		  </div>');
			redirect(base_url('project/guru'));
		} else {

			redirect(base_url('project/update_guru/' . $this->input->post('id_guru')));
		}

		$this->load->view('project/guru');
	}
	public function update_siswa($id)
	{
		$data['title'] = 'Update Siswa';

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
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data Berhasil Diubah
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		
		  </div>');
			redirect(base_url('project/siswa'));
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Data Tidak Berhasil Diubah
		  </div>');
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
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data Berhasil Ditambahkan
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	
	  </div>');
		redirect(base_url('project/siswa'));
	}

	public function user()
	{ $data['title']='Account';
        $data['admin'] = $this-> m_model->get_by_id('admin' , 'id' ,$this->session->userdata('id') )->result();
		$this->load->view('project/user', $data);
	}
    public function upload_image()
{  
    $base64_image = $this->input->post('base64_image');

    $binary_image = base64_encode($base64_image);

    $data = array(
        'image' => $binary_image
    );

    $eksekusi = $this->m_model->ubah_data('admin', $data, array('id'=>$this->input->post('id')));
    if($eksekusi) {
        $this->session->set_flashdata('sukses' , 'berhasil');
        redirect(base_url('project/user'));
    } else {
        $this->session->set_flashdata('error' , 'gagal...');
       echo "error gais";
    }
}

public function hapus_image()
{ 
    $data = array(
        'image' => NULL
    );

    $eksekusi = $this->m_model->update('admin', $data, array('id'=>$this->session->userdata('id')));
    if($eksekusi) {
        $this->session->set_flashdata('sukses' , 'berhasil');
        redirect(base_url('project/user'));
    } else {
        $this->session->set_flashdata('error' , 'gagal...');
       echo "error gais";
    }
}
public function ubah_password($id)
{
    $data['admin'] = $this-> m_model->get_by_id('admin' , 'id' , $id)->result();
    $this->load->view('action/ubah_password',$data);
}

public function aksi_ubah_password()
{
    $password_lama = $this->input->post('password_lama', true);
    $password_baru = $this->input->post('password_baru', true);
    $password_baru2 = $this->input->post('password_baru2', true);
    $data = ['email' => $this->session->userdata('email')];
    $query = $this->m_model->getwhere('admin', $data);
    $result = $query->row_array();
    if (md5($password_lama) === $result['password']) {

        if ($password_baru === $password_baru2) {
            $data =  [
                'password' => md5($this->input->post('password_baru')),
            ];
            $eksekusi = $this->m_model->update('admin', $data, array('id'=> $this->session->userdata('id')));
            if($eksekusi) {
                $this->session->set_flashdata('sukses' , 'berhasil');
                redirect(base_url('profile'));
            } else {
                $this->session->set_flashdata('error' , 'gagal...');
                redirect(base_url('profile/ubah_profile/'.$this->session->userdata('id')));
            }
        }else {
            $this->session->set_flashdata('password_baru' , 'Password tidak cocok');
            redirect(base_url('profile/ubah_password/'.$this->session->userdata('id')));
        }
    } else {
        $this->session->set_flashdata('password_lama' , 'Password lama dengan inputan tidak cocok');
        redirect(base_url('profile/ubah_password/'.$this->session->userdata('id')));
    }
}

}