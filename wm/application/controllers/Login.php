<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends CI_Controller
{
    public function index()
    {
        if (isset($_SESSION['loggedin']))
        {
            redirect('Start');
            print_r ($this->session->loggedin);
        }
        
        $this->load->model('userlogin');
        $result = $this->userlogin->login();
        if ($result)
        {
            redirect ('Start');
        }
        
        $this->load->helper(array('form'));
        $this->load->view('login');
        
    }
}