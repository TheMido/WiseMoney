<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Profile extends CI_Controller
{
    public function index()
    {
        
        $this->load->model('profile_model');
        if (!empty($this->input->post('update')))
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $country = $this->input->post('country');
            $city = $this->input->post('city');
            $this->profile_model->updateProfile($email, $password, $country, $city);
            
        }
        $data['user'] = $this->profile_model->getInfo()->row();
        $this->load->model('payments_model');
        $data['totalpayments'] = $this->payments_model->getPayments()->num_rows();
        if (!empty($data))
        {
            $this->load->view('profile', $data);
        }
        else
        {
            $this->load->view('profile');
        }
    }
}