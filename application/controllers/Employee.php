<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function login() {
        $data = array(
            'error_msg' => ""
        );
        $this->load->view('Home/header');
        $this->load->view('Home/login', $data);
    }

    function login_test() {

        $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'error_msg' => "please enter correct username and password"
            );
            $this->load->view('Home/header');
            $this->load->view('Home/login', $data);
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $result = $this->Login_model->employeeLogin($username, $password);
            if ($result) {
                foreach ($result as $row) {
                    $_SESSION['userid'] = $row->id;
                }
                if ($row->type == "admin") {
                    $this->load->view('admin/header');
                    $this->load->view('admin/adminHome');
                }
                if ($row->type == "account") {
                    $this->load->view('admin/header');
                    $this->load->view('admin/accountHome');
                }
            } else {
                $data = array(
                    'error_mag' => 'خطأ في اسم المستخدم او كلمة المرور'
                );
                $this->load->view('Home/header');
                $this->load->view('Home/login', $data);
            }
        }
    }

}
