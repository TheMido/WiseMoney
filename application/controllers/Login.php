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
        
        
        if (isset($_SESSION['loggedin']) && ($_SESSION['loggedin']==1))
        {
            redirect('Start');
            //print_r ($this->session->loggedin);
        }
        else
        {
        // Not logged in
            
            $this->load->model('userlogin');
            
            // if logged in as user
            
            if (!empty($this->input->post('userlogin')))
            {
                if (empty($this->input->post('email')) || (empty($this->input->post('password'))))
                {
                    echo "Fields cannot be empty";
                    return false;
                }
                $result = $this->userlogin->login();
                if ($result)
                {
                    redirect ('Start');
                }
                else
                {
                    $this->load->view('errorlogin');
                }
            }
            // if logged in as a place
            elseif (!empty($this->input->post('placelogin')))
            {
                if (empty($this->input->post('email')) || (empty($this->input->post('password'))))
                {
                    echo "Fields cannot be empty";
                    return false;
                }
                
                $result = $this->userlogin->placeLogin();
                if ($result)
                {
                    redirect ('Place');
                }
                else
                {
                    $this->load->view('errorlogin');
                }
            }
            
            else
            {
                $this->load->view('login');
            }
        }
    }
}