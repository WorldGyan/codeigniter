
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class FormComponents extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['content'] = 'dashboard';
        $data['title1'] = 'Home';
        $this->load->helper('form');
        $this->load->view('table_data_table', $data);
       
    }
}