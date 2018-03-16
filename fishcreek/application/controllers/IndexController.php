<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class IndexController extends CI_Controller{
        

        public function index(){
            $this->load->helper('url');
            
            //$this->load->view('Header');
            $this->load->view('Index');
            //$this->load->view('Footer');
        }
}

?>
