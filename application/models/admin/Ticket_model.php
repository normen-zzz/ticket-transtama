<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket_model extends CI_Model {

    // getTicket
    public function getTicket()
    {
        $this->db->select('a.*, b.nama AS karyawan, c.name_category, d.nama AS teknisi');
        $this->db->from('ticket a');
        $this->db->join('users b', 'a.created_by = b.id_users');
        // join category 
        $this->db->join('category c', 'a.category = c.id_category');
        // join users 
        $this->db->join('users d', 'a.handle_by = d.id_users', 'left');
        $this->db->order_by('a.id_ticket', 'DESC');
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

    // getTeknisi
    public function getTeknisi()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('role_id', 2);
        return $this->db->get();
    }

    // assignTicket
    public function assignTicket($id_ticket, $data)
    {
        $this->db->where('id_ticket', $id_ticket);
        $this->db->update('ticket', $data);
    }
}

