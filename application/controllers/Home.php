<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Curd_model');
        $this->load->library("pagination");
    }

    public function index()
    {
      $data['title'] = "CodeIgniter Project Manager";
      $this->load->helper('pagination');
      $config = pagination('index', 'cities');
      $this->pagination->initialize($config);
      $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

      $data['links'] = $this->pagination->create_links();
      $data['projects'] = $this->Curd_model->get_projects($config['per_page'], $page);
      $this->load->view('index', $data);
    }
}
