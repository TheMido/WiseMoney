<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Testing extends CI_Controller
{
    public function index()
    {
        $this->load->model('analytics_model');
        $this->load->model('category_model');
        $this->load->model('userlogin');
        $this->load->model('offers_model');
        
        echo "<h2>Testing analytics model</h2>";
        echo $this->unit->run($this->analytics_model->getRange('2015-06-05', '2015-06-04'), 'is_array', 'Testing getRange(from, to) in Analytics model');
        echo $this->unit->run($this->category_model->createCat(3, 3), false, 'Testing creating a category with an integer name');
        $_POST['email'] = '';
        $_POST['password'] = '';
        $_POST['placelogin'] = '';
        echo "<h2>Testing user and place logins</h2>";
        echo $this->unit->run($this->userlogin->login(), false, 'Testing email and password empty fields for Place.');
        
        $_POST['email'] = '';
        $_POST['password'] = '';
        $_POST['userlogin'] = '';
        echo $this->unit->run($this->userlogin->login(), false, 'Testing email and password empty fields for User.');
        
        $offers = array('','','','','');
        echo "<h2>Testing methods/actions in Offers model</h2>";
        echo $this->unit->run($this->offers_model->addOffer($offers), true, 'Attempting to create an empty offer');
        echo $this->unit->run($this->offers_model->deleteOffers(''), false, 'Deleting an empty id');
    }
}