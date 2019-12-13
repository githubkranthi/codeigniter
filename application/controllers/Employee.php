<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Blog
 *
 * @author kranthi
 */
class Employee extends CI_Controller {
    //put t code here
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Employee_model');
    }
    public function index()
    {
            echo 'Hello World! employee';
    }
    
     public function users()
        {
            $this->load->model('Employee_model');

            $data['query'] = $this->Employee_model->get_last_ten_entries();

            $this->load->view('employee/index', $data);
        }
    
    public function show_user($id = 1)
    {
        $id = $this->input->post('userid');
      
        $data['query'] = $this->Employee_model->findID($id)[0];
        
         echo $this->load->view('employee/view', $data, true);
         
    }
    
    public function save_user_popup()
    {
         $id = $this->input->post('userid');
         $comment = $this->input->post('comment');
         $dropdown = $this->input->post('dropdown');
         echo json_encode( $this->input->post() );
         
    }
}
