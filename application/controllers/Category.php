<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Category extends CI_Controller
{
    public function index()
    {
        $this->load->model('category_model');
         
        if (!empty($this->input->post('delete')))
            {
                $this->category_model->deleteCats($this->input->post('checkID'));
            }
        
        
            $data['categories'] = $this->category_model->getAllCats();
            $this->load->view('categories', $data);           
    }
    
    public function Create()
    {
        //$this->load->model('category_model');
        $this->load->model('category_model');
        if (!empty($this->input->post('createcat')))
        {
            if (is_string($this->input->post('name')))
            {
                print_r($this->input->post);
                $name = $this->input->post('name');
                $desc = $this->input->post('description');
                $this->category_model->createCat($name, $desc);
                $this->load->view('createcat');
                return true;
            }
            else
            {
                echo "Category name must be a string.";
                return false;
            }
        }
        else
        {
           $this->load->view('createcat'); 
        }
        
    }
}