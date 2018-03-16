<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PetModel extends CI_Model{
    
    public function getData(){
        // $this->db->select('servicename');
        // $this->db->from('service');

        // $query = $this->db->query("SELECT servicename from service");

		
        
        // // $query = $this->db->get();
        
        // return $query->result();
    	$this->db->select('*');
        $this->db->from('pet');
        
        $query = $this->db->get();


        
        return $query->result();



    }
    
}
?>