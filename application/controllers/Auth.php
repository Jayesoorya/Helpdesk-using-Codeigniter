<?php

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session'); 
        $this->load->model('User_model');
    }

    public function login() {
        $this->load->library('form_validation');
        $this->load->view('login_form');
    }
    
    public function do_login() {
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->form_validation->set_rules('username','User Name','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('login_form');
        }else{
        
            $this->load->model('User_model');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            if ($this->User_model->check_login($username, $password)) {
                $this->session->set_userdata('user', $username);
                redirect('dashboard');
            } else {
                redirect('auth/login');
            }
        }
        
        }

        

    public function logout() {
        $this->session->unset_userdata('user');
        redirect('auth/login');
    }
}

?>
