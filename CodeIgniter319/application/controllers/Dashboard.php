<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['content'] = 'dashboard';
        $data['title'] = 'Home';
        $data['header']='header';
        $data['aside']='aside';
        $this->load->helper('form');
        $this->load->view('template_view', $data);
       
    }
}