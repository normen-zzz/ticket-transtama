<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ticket_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getMyTicket()
    {
        $this->db->select('category.name_category, ticket.*,users.nama AS karyawan');
        $this->db->from('ticket');
        $this->db->join('category', 'category.id_category = ticket.category');
        // join users 
        $this->db->join('users', 'users.id_users = ticket.created_by');
        $this->db->where('ticket.created_by', $this->session->userdata('id_users'));
        $this->db->order_by('ticket.created_at', 'DESC');
        return $this->db->get();
    }

    // getDataTicket
    public function getDataTicket($id_ticket)
    {
        $this->db->select('a.*, b.nama AS karyawan, c.name_category');
        $this->db->from('ticket a');
        $this->db->join('users b', 'a.created_by = b.id_users');
        // join category 
        $this->db->join('category c', 'a.category = c.id_category');
        $this->db->where('a.id_ticket', $id_ticket);
        return $this->db->get()->row_array();
    }
    
    // receiveTicket
    public function receiveTicket($id_ticket, $data)
    {
        $this->db->where('id_ticket', $id_ticket);
        $this->db->update('ticket', $data);

    }

    // declineTicket
    public function declineTicket($id_ticket, $data)
    {
        $this->db->where('id_ticket', $id_ticket);
        $this->db->update('ticket', $data);
    }
    // finishTicket
    public function finishTicket($id_ticket, $data)
    {
        $this->db->where('id_ticket', $id_ticket);
        $this->db->update('ticket', $data);
    }
}
