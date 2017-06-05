<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    function __construct() {
        parent::__construct();
        
    }

    public function login() {
        $this->load->view('Home/header');
        $this->load->view('Home/login');
    }


}
