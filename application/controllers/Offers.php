<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Offers extends CI_Controller
{
    public function index()
    {
        
        $this->load->model('offers_model');
        
        if (!empty($this->input->post('deleteoffers')))
            {
                $this->offers_model->deleteOffers($this->input->post('checkID'));
            }
            
        if (!empty($this->input->post('addoffer')))
        {   
            
            
            $pid = $this->session->place_id;
            $expires = $this->input->post('expires');
            $usagetimes = $this->input->post('usagetimes');
            $name = $this->input->post('name');
            $desc = $this->input->post('description');
            
            if ((empty($expires) || (empty($usagetimes) || (empty($name)))))
            {
                return false;
            }
            $datax = array($pid, $expires, $usagetimes,$name,$desc);
            //print_r($data);
            $add = $this->offers_model->addOffer($datax);
            $data['offers'] = $this->offers_model->getOffers()->result();
                       
            if ($add)
            {
                $data['offeradded'] = true;
                $this->load->view('offers', $data);
            }
        }
        
        else
        {
            $data['offers'] = $this->offers_model->getOffers()->result();
            $this->load->view('offers', $data);
        }
    }
}