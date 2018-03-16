<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class ContactController extends CI_Controller{
        
        function __construct() {
            parent::__construct();
            $this->load->model('ContactModel');
            }

        public function index(){
            $this->load->helper('url');

            $this->load->helper('form');
            $this->load->helper('array');

            $this->load->library('form_validation');


            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');


            $this->form_validation->set_rules('name', 'Name',  'required|min_length[2]|max_length[50]');

            $this->form_validation->set_rules('email', 'Email',  'required|valid_email');


            $this->form_validation->set_rules('comments', 'Comments', 'required|min_length[10]|max_length[50]');

            if ($this->form_validation->run() == FALSE)
                {
                //$this->load->view('Header');
                $this->load->view('contact');
                //$this->load->view('Footer');
                }
                else
                {
                    //Use of Array helpers and security helpers
                $data = array(
                    'Name' => xss_clean(element('name',$_POST)),
                    //$this->input->post('name'),
                    'Email' => xss_clean(element('email',$_POST)),
                    'Comments' => xss_clean(element('comments',$_POST))
                    );
                    //Transfering data to Model
                    $this->ContactModel->form_insert($data);
                    $data['success'] = 'Your Conatct Details are inserted successfully';
                    //Loading View
                    $this->load->view('contact', $data);

            }





        }
}

?>
