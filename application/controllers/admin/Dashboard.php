<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load necessary models, libraries, etc.

        $this->load->model('User_model','user');
        cekRole();
    }

    public function index() {
        // Load data from the model
        
        $data = [
            'title' => 'Dashboard',
            'subtitle' => 'Dashboard',
            'subtitle2' => 'Data dashboard',
            'users' => $this->user->getDetailUsers($this->session->userdata('id_users')),
            'ticketCreated' => $this->db->get_where('ticket', ['status' => 0])->num_rows(),
            'ticketOnProcess' => $this->db->get_where('ticket', ['status' => 1])->num_rows(),
            'ticketFinish' => $this->db->get_where('ticket', ['status' => 2])->num_rows(),
        ];

        // Load the view and pass the data
        $this->load->view('user/admin/dashboard', $data);
    }
}
?>