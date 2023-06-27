<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    /*public function  __construct()
    {
        parent::__construct();
        if (!$this->session->set_userdata('email')) {
            redirect('auth');
        }
    }*/

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        //$this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('Firstname', 'First Name', 'required|trim');
        $this->form_validation->set_rules('Lastname', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('umur', 'Umur', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('hobi', 'Hobi', 'required|trim');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header2', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer2');
        } else {
            $Firstname = $this->input->post('Firstname');
            $Lastname = $this->input->post('Lastname');
            $umur = $this->input->post('umur');
            $alamat = $this->input->post('alamat');
            $hobi = $this->input->post('hobi');
            $email = $this->input->post('email');


            //cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];


            if ($upload_image) {

                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/profile/';


                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {

                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_erors();
                }
            }

            $this->db->set('Firstname', $Firstname);
            $this->db->set('Lastname', $Lastname);
            $this->db->set('umur', $umur);
            $this->db->set('alamat', $alamat);
            $this->db->set('hobi', $hobi);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class= "alert alert-success" role="alert">Your Profile has been updated!</div>');
            redirect('user');
        }
    }
}
