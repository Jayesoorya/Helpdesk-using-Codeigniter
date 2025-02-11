<?php

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Ticket_model');
        $this->load->library('session');
        if (!$this->session->userdata('user')) redirect('auth/login');
    }
    
    public function index() {
        $this->load->model('Ticket_model');
        $data['tickets'] = $this->Ticket_model->get_all();
        $this->load->view('home', $data);
    }
    
    public function create() {
        $this->load->view('create');
    }
    
    public function store() {
        $this->Ticket_model->insert($this->input->post());
        redirect('dashboard');
    }
    public function details($id) {
        $data['ticket'] = $this->Ticket_model->get($id);
        $this->load->view('details', $data);
    }
    
    
    public function edit($id) {
        $data['ticket'] = $this->Ticket_model->get($id);
        $this->load->view('update', $data);
    }
    
    public function update($id) {
        $this->Ticket_model->update($id, $this->input->post());
        redirect('dashboard');
    }
    
    public function delete($id) {
        $this->Ticket_model->delete($id);
        redirect('dashboard');
    }
}
?>