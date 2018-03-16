<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SubscribeController extends CI_Controller{

	function __construct() {
            parent::__construct();
            $this->load->model('SubscribeModel');
            }
        

        public function index(){
            //Load Form helpers(url, security, form)
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->helper('security');
            $this->load->model('SubscribeModel');
            $this->load->model('PetModel');
            
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            $data['result'] = $this->SubscribeModel->getData();

            $data['petname'] = $this->PetModel->getData();
        
            /*Use of Form Validation libraries and setting validation rules*/
            $this->form_validation->set_rules('name', 'Client Full Name', 'required|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[5]|max_length[150]');
            $this->form_validation->set_rules('phone', 'Phone', 'required|regex_match[/^[1-9]{3}[0-9]{3}[0-9]{4}$/]');
            $this->form_validation->set_rules('password', 'Password', 'required|regex_match[/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/]',
    										array('regex_match' => '%s should be between 8 to 16 characters and should have one uppercase, lowercase and a digit.'));
             $this->form_validation->set_rules('service_name', 'Type of Service', 'required');
            $this->form_validation->set_rules('petname', 'Pet Name', 'required');

                if ($this->form_validation->run() == FALSE)
                {   
                    //$this->load->view('Header');
                    $this->load->view('Subscribe', $data);
                    //$this->load->view('Footer');
                    return;
                }
                else
                {
                    //Client Name
                    $clientname = $this->input->post('name');
                    //Client Address
                    $address = $this->input->post('address');
                    //Client Email
                    $email = $this->input->post('email');
                    //Client Phone
                    $phone = $this->input->post('phone');
                    //Client Password
                    $password = $this->input->post('password');
                    //Client Service Name
                    $service_name = $this->input->post('service_name');
                    //Petname
                    $petname = $this->input->post('petname');
                    //$this->load->model('SubscribeModel');
                    $this->SubscribeModel->insert_subscription($clientname,$address,$email,$phone,$password,$service_name,$petname);
                   $data['success_subscription'] = 'Your Subscription Details are inserted successfully';
                   
                    $this->load->view('Subscribe', $data);
                }
           
          }//End of index method 
        }//End of Class

       

?>