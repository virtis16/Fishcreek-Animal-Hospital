<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ServicesModel extends CI_Model{
    
    public function getData(){
        $this->db->select('servicename, description');
        $this->db->from('service');
        //$this->db->join('performance', 'musianid=musicianid');

        $query = $this->db->get();
        
        return $query->result();
    }
    
}
?>