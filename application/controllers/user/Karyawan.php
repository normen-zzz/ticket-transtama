<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cekRole();
        is_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('User_model', 'user');
        $this->load->model('Admin_model', 'admin');
        $this->load->model('Karyawan_model', 'karyawan');
    }

    public function ticket()
    {
        // show data ticket 
        $data = [
            'title' => 'Ticket',
            'subtitle' => 'Ticket',
            'subtitle2' => 'Data Ticket',
            'ticket' => $this->karyawan->getTicket($this->session->userdata('id_users')),
        ];
        $this->load->view('user/karyawan/ticket', $data);
    }

    // detail ticket by id 
    public function detailTicket($id_ticket)
    {
        // checkuserticket
        $checkTicket = $this->karyawan->checkUserTicket($id_ticket, $this->session->userdata('id_users'));
        if (!$checkTicket) {
            $this->session->set_flashdata("message", "Toast.fire({icon: 'error',title: 'Anda tidak memiliki akses'})");
            redirect(base_url('user/karyawan'));
        }
        $data = [
            'title' => 'Ticket',
            'subtitle' => 'Ticket',
            'subtitle2' => 'Detail Ticket',
            'detailTicket' => $this->karyawan->getDetailTicket($id_ticket),
        ];
        $this->load->view('user/karyawan/detailTicket', $data);
    }

    // add ticket using json ajax echo response
    public function addTicket()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Judul tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim', [
            'required' => 'Deskripsi tidak boleh kosong.'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata("message", "Toast.fire({icon: 'error',title: 'Gagal menambahkan ticket'})");
            redirect(base_url('user/karyawan/ticket'));
        } else {
            $data = [
                'id_users' => $this->session->userdata('id_users'),
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'status' => 'open',
                'created_at' => date('Y-m-d H:i:s'),
            ];
            $this->karyawan->addTicket($data);
            echo json_encode(array("status" => TRUE));
        }
    }

    // delete ticket using json ajax echo response
    public function deleteTicket($id_ticket)
    {
        $checkTicket = $this->karyawan->checkUserTicket($id_ticket, $this->session->userdata('id_users'));
        if (!$checkTicket) {
            $this->session->set_flashdata("message", "Toast.fire({icon: 'error',title: 'Anda tidak memiliki akses'})");
            redirect(base_url('user/karyawan'));
        } else {
            $this->karyawan->deleteTicket($id_ticket);
            echo json_encode(array("status" => TRUE));
        }
    }
}

/* End of file User.php */
