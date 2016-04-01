<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Placesignup extends CI_Controller
{
    public function index()
    {
        if (!empty($this->input->post('submitplace')))
        {
            $this->load->model('signup_model');
            $this->signup_model->signUpPlace();
            redirect('login');
        }
        
        else
        {
            $this->load->view('signupplace');
        }
    }
}