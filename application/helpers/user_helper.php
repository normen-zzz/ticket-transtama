<?php

function getNamaUserById($id_users) {
    $CI =& get_instance();
    $user = $CI->db->query('SELECT nama FROM users WHERE id_users = '.$id_users.' ')->row_array();

    return $user['nama'];
}

function cekRole() {

    $CI =& get_instance();
    if ($CI->session->userdata('role_id') == 2 && $CI->uri->segment(1) !== 'teknisi') {
        redirect('auth');
    } elseif ($CI->session->userdata('role_id') == 1 && $CI->uri->segment(1) != 'admin') {
        redirect('auth');
    } elseif ($CI->session->userdata('role_id') == 3 && $CI->uri->segment(1) != 'user') {
        redirect('auth');
    }
    
}

?>