<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load necessary models, libraries, etc.
        $this->load->model('admin/Ticket_model','ticket');
        $this->load->helper('url');
    }

    public function index() {
        // show data ticket 
        $data = [
            'title' => 'Ticket',
            'subtitle' => 'Ticket',
            'subtitle2' => 'Data Ticket',
            'ticket' => $this->ticket->getTicket(), 
            'teknisi' => $this->ticket->getTeknisi(),
        ];
        $this->load->view('user/admin/ticket', $data);
    }
     // getDataTicket
     public function getDataTicket($id_ticket)
     {
         $ticket = $this->ticket->getDataTicket($id_ticket);
         echo json_encode($ticket);
     }
     
     // receive ticket echo response success
     public function receiveTicket()
     {
         $id_ticket = $this->input->post('id_ticket');
         $data = [
             'status' => '1',
             'handle_by' => $this->session->userdata('id_users'),
             'receive_at' => date('Y-m-d H:i:s'),
         ];
         $this->ticket->receiveTicket($id_ticket, $data);
         echo json_encode(['status' => 'success']);
     }
 
     // decline ticket echo response success
     public function declineTicket()
     {
         $id_ticket = $this->input->post('id_ticket');
         $data = [
             'status' => '3',
             'handle_by' => $this->session->userdata('id_users'),
             'decline_at' => date('Y-m-d H:i:s'),
         ];
         $this->ticket->declineTicket($id_ticket, $data);
         echo json_encode(['status' => 'success']);
     }
 
     // finish ticket response success 
     public function finishTicket()
     {
         $id_ticket = $this->input->post('id_ticket');
         $data = [
             'status' => '2',
             'finish_at' => date('Y-m-d H:i:s'),
         ];
         $this->ticket->finishTicket($id_ticket, $data);
         echo json_encode(['status' => 'success']);
     }

    //  assignTicket
    public function assignTicket()
    {
        $id_ticket = $this->input->post('id_ticket');
        $data = [
            'handle_by' => $this->input->post('assign_to'),
            'assign_at' => date('Y-m-d H:i:s'),
        ];
        $this->ticket->assignTicket($id_ticket, $data);
        echo json_encode(['status' => 'success']);
    }

}
