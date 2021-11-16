<?php

namespace Controllers;

class PriceController extends AbstractController
{
    public function __construct()
    {
        
    }
    
    
    public function doAction()
    {
        require_once "../Views/Price.php";
    }
}