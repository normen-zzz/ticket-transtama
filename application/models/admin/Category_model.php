<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

    public function __construct() {
        parent::__construct();
       
    }

    // getCategory
    public function getCategory()
    {
        return $this->db->get('category');
    }


}
?>