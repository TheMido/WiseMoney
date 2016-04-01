<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Place extends CI_Controller
{
    
    public function index($place = NULL)
    {
        
        if (!$place)
        {
            redirect('Offers');
        }
        else
        {
            echo "Profile of: ".$place;
        }
    }
}