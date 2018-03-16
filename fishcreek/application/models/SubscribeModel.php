<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SubscribeModel extends CI_Model{
    
    public function getData(){
        
         $this->db->select('*');
        $this->db->from('service');
        
        $query = $this->db->get();
        
        return $query->result();
    }

    public function insert_subscription($clientname,$address,$email,$phone,$password,$service_name,$petname)
    { 
        $this->db->select('petid');
        $this->db->where('petname', $petname);
        $query1 = $this->db->get('pet');
        if ($query1->num_rows() > 0) {
            foreach ($query1->result_array() as $row1)
            {
                $petid = $row1['petid'];
            }
        }

        $this->db->select('serviceid');
        $this->db->where('servicename', $service_name);
        $query2 = $this->db->get('service');
        if ($query2->num_rows() > 0) {
            foreach ($query2->result_array() as $row2)
            {
                echo "Service Id";
                echo $serviceid = $row2['serviceid'];
            }
        }
        $this->db->select('clientid');
        $this->db->where('email', $email);
        $query = $this->db->get('client');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row)
            {
               
               $clientid = $row['clientid'];
            }
        }
        else
        {
            // $hash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 10));
                $clientdata = array('name'=>$clientname,
                    'address'=>$address,
                    'phone'=>$phone,
                    'email'=>$email,
                    'password'=>do_hash($password)
                );
                $query = $this->db->insert('client',$clientdata);
                $clientid  = $this->db->insert_id();
        }

                $subscription_data = array('clientid'=>$clientid ,
                    'serviceid'=>$service_name,
                    'petid'=>$petname,
                    'date'=>date('Y-m-d')
                );
                $query1 = $this->db->insert('subscription',$subscription_data);
    }

    }
    
//}
?>