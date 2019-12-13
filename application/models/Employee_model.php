<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employee_model
 *
 * @author kranthi
 */
class Employee_model extends CI_Model {
    //put your code here
        public $title;
        public $content;
        public $date;
        public $table = 'users';

        public function get_last_ten_entries()
        {
                $query = $this->db->get('employee', 10);
                return $query->result();
        }
        
        public function findID($id)
        { 
               $query = $this->db->get_where('employee',array('employee_number'=>$id));
               return $query->result();
        }

        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('employeeemployee', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('employee', $this, array('id' => $_POST['id']));
        }
}
