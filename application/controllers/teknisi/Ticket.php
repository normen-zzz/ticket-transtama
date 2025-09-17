<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {

    public function __construct() {
        parent::__construct();
        cekRole();
        is_login();
        // Load necessary models, libraries, etc.
        $this->load->model('teknisi/Ticket_model','ticket');
        $this->load->helper('url');
        // date local 
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index() {
        // show data ticket 
        $data = [
            'title' => 'Ticket',
            'subtitle' => 'Ticket',
            'subtitle2' => 'Data Ticket',
            'ticket' => $this->ticket->getMyTicket(),
        ];
        $this->load->view('user/teknisi/ticket', $data);
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
         $date  = date('Y-m-d H:i:s');
         $data = [
             'status' => '2',
             'finish_at' => date('Y-m-d H:i:s', strtotime($date)),
         ];
         $this->ticket->finishTicket($id_ticket, $data);
         echo json_encode(['status' => 'success']);
     }

}
?>