<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		if ($this->session->userdata('email')) {
			redirect('user');
		}
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Welcome Back!';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			//validasi sukses
			$this->_login();
		}
	}


	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		//jika usernya ada
		if ($user) {
			//jika usernya aktif
			if ($user['is_active'] == 1) {
				//cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];

					$this->session->set_userdata($data);
					redirect('user');
				} else {
					$this->session->set_flashdata('message', '<div class= "alert alert-danger" role="alert">Wrong password!</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class= "alert alert-danger" role="alert">This email has not been activated!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class= "alert alert-danger" role="alert">Email is not registered!</div>');
			redirect('auth');
		}
	}

	public function registration()
	{
		if ($this->session->userdata('email')) {
			redirect('user');
		}

		$this->form_validation->set_rules('Firstname', 'Name', 'required|trim');
		$this->form_validation->set_rules('Lastname', 'Name', 'required|trim');
		$this->form_validation->set_rules('umur', 'umur', 'required|trim');
		$this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
		$this->form_validation->set_rules('hobi', 'hobi', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'This email has already registered!']);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
			'matches' => 'Password do not match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'User Registration';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		} else {
			$data = [
				'Firstname' => htmlspecialchars($this->input->post('Firstname')),
				'Lastname' => htmlspecialchars($this->input->post('Lastname')),
				'umur' => htmlspecialchars($this->input->post('umur')),
				'alamat' => htmlspecialchars($this->input->post('alamat')),
				'hobi' => htmlspecialchars($this->input->post('hobi')),
				'email' => $this->input->post('email'),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class= "alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class= "alert alert-success" role="alert">You have been logged out!</div>');
		redirect('auth');
	}
}
