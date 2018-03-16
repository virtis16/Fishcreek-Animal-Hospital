<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class ServicesController extends CI_Controller{
        

        public function index(){
            $this->load->helper('url');
        
            
            $this->load->model('ServicesModel');
            
            $data['result'] = $this->ServicesModel->getData();
            //Load Service name and description in the view Services.php
            //$this->load->view('Header');
			$this->load->view('Services',$data);
			//$this->load->view('Footer');
            
        }
}

?>
