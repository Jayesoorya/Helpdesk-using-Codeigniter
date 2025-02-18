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
        $this->load->helper('form');
        $this->load->view('create');
    }
    
    public function store() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Ticket', 'Ticket', 'required|min_length[5]');
        $this->form_validation->set_rules('Description', 'Description');
        $this->form_validation->set_rules('Status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('create');
        } else {
                $ticket = $this->input->post('Ticket');
                $description = $this->input->post('Description');
                $status = $this->input->post('Status');
    
        $this->Ticket_model->insert($tickets,$description,$status);
        redirect('dashboard');
    }
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
        $this->load->library('form_validation');
        $this->form_validation->set_rules('ticket', 'Ticket', 'required|min_length[5]');
        $this->form_validation->set_rules('description', 'Description');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[Open,In Progress,Closed]');
        if ($this->form_validation->run() == FALSE) {
            $data['ticket'] = $this->Ticket_model->get($id);
            $this->load->view('update', $data);
        } else {
            $data = [
                'Ticket' => $this->input->post('ticket', true),
                'Description' => $this->input->post('description', true),
                'Status' => $this->input->post('status', true),
            ];
            $this->Ticket_model->update($id, $data);
            redirect('dashboard');
        }

    }
    
    public function delete($id) {
        $this->Ticket_model->delete($id);
        redirect('dashboard');
    }
}
?>