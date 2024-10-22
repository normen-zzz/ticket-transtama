<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load necessary models, libraries, etc.
        $this->load->model('admin/Category_model', 'category');
    }

    public function index()
    {

        $data = [
            'title' => 'Category',
            'subtitle' => 'Category',
            'subtitle2' => 'Data Category',
            'category' => $this->category->getCategory()
        ];

        $this->load->view('user/admin/category', $data);
    }
    // addCategory
    public function addCategory()
    {
        $this->form_validation->set_rules('name_category', 'Name Category', 'required|is_unique[category.name_category]');
       
        if ($this->form_validation->run() == FALSE) {
            echo json_encode(array("status" => 'error', 'message' =>  validation_errors()));
            die;
        } else {
            $data = [
                'name_category' => $this->input->post('name_category')
            ];
            $this->db->insert('category', $data);
            echo json_encode(array("status" => 'success'));
        }
    }
}
