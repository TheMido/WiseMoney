<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Start extends CI_Controller {
    
    public function index()
    {
        if(isset($_SESSION['loggedin']))
        {
            
            //print_r($this->session->userdata);
            $this->load->model('category_model');
            $data['categories'] = $this->category_model->getCats();
            $this->load->model('payments_model');
            $data['payments'] = $this->payments_model->getPayments();
            
            $this->load->view('home', $data);
        }
        else
        {
            redirect('Login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
    
}