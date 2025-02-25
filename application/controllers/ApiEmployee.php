<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';

use  chriskacerguis\RestServer\RestController;

class ApiEmployee extends RestController{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Employee_model');
    }

    public function index_get()
    {
        $employee = new Employee_model;
        $result_emp = $employee->get_employee();
        $this->response($result_emp, 200);
    }

    public function  storeEmployee_post()
    {
        $employee = new Employee_model;
        $data = [
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
        ];
        $result = $employee->insertEmployee($data);

        if($result > 0)
        {
            $this->response([
                'status' => true,
                'message' => 'new employee created',
            ], RestController::HTTP_OK);
        }
        else
        {
            $this->response([
                'status' => true,
                'message' => 'falied to  create employee',
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

    public function findEmployee_get($id)
    {
           $employee = new Employee_model;
           $result = $employee->editEmployee($id);
           $this->response($result, 200);
    }

    public function updateEmployee_put($id)
    {
        $employee = new Employee_model;
        $data = [
            'first_name' => $this->put('first_name'),
            'last_name' => $this->put('last_name'),
            'email' => $this->put('email'),
        ];
        $update_result = $employee->update_Employee($id, $data);

        if($update_result > 0)
        {
            $this->response([
                'status' => true,
                'message' => 'Employee updated',
            ], RestController::HTTP_OK);
        }
        else
        {
            $this->response([
                'status' => true,
                'message' => 'falied to update employee',
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

    public function deleteEmployee_delete($id)
    {
        $employee = new EMployee_model;
        $result = $employee->delete_employee($id);
        if($result > 0)
        {
            $this->response([
                'status' => true,
                'message' => 'Employee deleted',
            ], RestController::HTTP_OK);
        }
        else
        {
            $this->response([
                'status' => true,
                'message' => 'falied to delete employee',
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

}