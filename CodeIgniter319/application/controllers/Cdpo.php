<?php
class Cdpo extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('cookie');
        $this->load->model('cdpo_model');
        error_reporting(0);
    }

    function index() { 
        $data['content'] = 'cdpo_view';
        $data['title'] = 'Home';
        $data['header']='header';
        $data['aside']='aside';
        $this->load->view('template_view', $data);
       
    }
  function save()
  {
    if ($this->input->post('save_dpo'))
    {
      $this->cdpo_model->insert();
      if( $this->cdpo_model->id)
      {
        $data['content'] = 'cdpo_view';
        $data['title'] = 'Home';
        $data['header']='header';
        $data['aside']='aside';
        $this->load->view('template_view', $data);
      }
       
    }
       
  }
}

?>