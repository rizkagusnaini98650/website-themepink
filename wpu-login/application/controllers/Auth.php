<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct () {
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index () {
		$data['title'] ='Welcome Back!';
		$this->load->view('templates/auth_header',$data);
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer');
	}
	public function registration() {

		$this->form_validation->set_rules('Firstname','Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'This email has already registered!']);
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[8]|matches[password2]', [
			'matches' =>'Password do not match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
		
		if ($this->form_validation->run()== false) {
			$data['title'] = 'User Registration';
			$this->load->view('templates/auth_header',$data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		} else {
			$data = [
				'Firstname' => $this-> input->post('Firstname'),
				 'Lastname' => $this-> input->post('Lastname'),
				'email' => $this-> input->post('email'),
				'image' => 'default.jpg',
				'password' => password_hash ($this-> input->post('password'),PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()
			];

			$this-> db-> insert('user',$data);
			$this->session->set_flashdata('message','<div class= "alert alert-success" role="alert">Congratulation! your account has been crated. Please Login</div>');
			redirect('auth');

		}
	}
}