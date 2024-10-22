<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teknisi_model extends CI_Model {

    // getTicket
    public function getTicket()
    {
        $this->db->select('a.*, b.nama AS karyawan, c.name_category');
        $this->db->from('ticket a');
        $this->db->join('users b', 'a.created_by = b.id_users');
        // join category 
        $this->db->join('category c', 'a.category = c.id_category');
        $this->db->where('a.status', 1);
        // userdata 
        $this->db->where('a.handle_by', $this->session->userdata('id_users'));
        $this->db->order_by('a.id_ticket', 'DESC');
        return $this->db->get();
    }

    
}

