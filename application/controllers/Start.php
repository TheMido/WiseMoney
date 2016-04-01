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
            
            if ($_SESSION['type'] == "user")
            {
                $this->load->model('category_model');
                $data['categories'] = $this->category_model->getCats();
                $this->load->model('payments_model');
                $data['payments'] = $this->payments_model->getPayments();

                $this->load->model('offers_model');
                
                //load offers for user
                $data['offers'] = $this->offers_model->getAllOffers()->result();
                
                $this->load->view('home', $data);
            }
            elseif ($_SESSION['type'] == "place")
            {
                redirect('place');
            }
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