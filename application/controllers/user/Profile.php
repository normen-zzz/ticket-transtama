<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cekRole();
        is_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('user/User_model', 'user');
        $this->load->model('Admin_model', 'admin');
    }

    public function index()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama tidak boleh kosong.'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title' => 'User Profile',
                'subtitle' => 'Profile',
                'subtitle2' => 'Data User',
                'users' => $this->user->getDetailUsers($this->session->userdata('id_users')),
            ];

            $this->load->view('user/user/profile/index', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'company' => $this->input->post('company'),
            ];
            // jika ada password 
            $password = $this->input->post('password');
            if ($password) {
                $data['password'] = password_hash($password, PASSWORD_DEFAULT);
            }

            $this->user->update_user($this->session->userdata('id_users'), $data);
            // ajax success 
            echo json_encode(array("status" => 'success', 'message' => 'Data berhasil diubah'));
        }
    }

    // editProfile
    public function editProfile()
    {
        $uniq = uniqid();

        $data = [
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'company' => $this->input->post('company'),
        ];
        // jika ada password 
        $password = $this->input->post('password');
        if ($password) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }
        // photo
        $upload_image = $_FILES['photo']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '2048';
            $config['upload_path'] = './images/users/';
            // set filename 
            $config['file_name'] = $uniq;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('photo')) {
                $old_image = $this->session->userdata('photo');
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'images/users/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                // get extension photo 
                $ext = explode(".", $new_image);
                $data['photo'] = $uniq.'.'.$ext[1];
            } else {
                echo $this->upload->display_errors();
            }
        } 

        $update = $this->user->update_user($this->session->userdata('id_users'), $data);

        if ($update) {
            // set new userdata 
            $this->session->set_userdata('nama', $data['nama']);
            $this->session->set_userdata('username', $data['username']);
            $this->session->set_userdata('company', $data['company']);
            if ($upload_image) {
                $this->session->set_userdata('photo', $data['photo']);
            }
            echo json_encode(array("status" => 'success', 'message' => 'Data berhasil diubah'));
        } else {
            echo json_encode(array("status" => 'error', 'message' => 'Data gagal diubah'));
        }
        
       
    }
}

/* End of file User.php */
