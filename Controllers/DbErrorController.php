<?php

namespace Controllers;

class DbErrorController extends AbstractController 
{
        public function doAction()
        {
            require_once "/Views/DbErrorPage.php";
        }
}