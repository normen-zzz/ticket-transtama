<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');
class Ticket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cekRole();
        is_login();
        // Load necessary models, libraries, etc.
        $this->load->model('user/Ticket_model', 'ticket');
        $this->load->helper('url');
    }

    public function index()
    {
        // show data ticket 
        $data = [
            'title' => 'Ticket',
            'subtitle' => 'Ticket',
            'subtitle2' => 'Data Ticket',
            'ticket' => $this->ticket->getMyTicket(),
            'category' => $this->db->get('category')
        ];
        $this->load->view('user/user/ticket', $data);
    }
    // getDataTicket
    public function getDataTicket($id_ticket)
    {
        $ticket = $this->ticket->getDataTicket($id_ticket);
        echo json_encode($ticket);
    }

    //  addTicket
    public function addTicket()
    {
        $data = [
            'category' => $this->input->post('category'),
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'created_by' => $this->session->userdata('id_users'),
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('ticket', $data);
        echo json_encode(array("status" => 'success'));
    }

    // cancelTickets
    public function cancelTicket($id_ticket)
    {
        $this->db->delete('ticket', ['id_ticket' => $id_ticket]);
        echo json_encode(array("status" => 'success'));
    }

    // finishTicketUser
    public function finishTicketUser()
    {
        $id_ticket = $this->input->post('id_ticket');
        $finish_at_user = $this->input->post('finish_at_user');
        $comment_user = $this->input->post('note');
        $data = [
            'status' => '3',
            'finish_at_user' => date('Y-m-d H:i:s'),
            'comment_user' => $comment_user
        ];
       $this->db->update('ticket', $data, ['id_ticket' => $id_ticket]);
        echo json_encode(['status' => 'success']);
    }
}
