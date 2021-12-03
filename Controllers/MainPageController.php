<?php

namespace Controllers;

class MainPageController extends AbstractController
{
    public function __construct()
    {
        
    }

    public function doAction()
    {
        require_once "../Views/MainPage.php";
    }
    //TODO: implements MainPageController
}