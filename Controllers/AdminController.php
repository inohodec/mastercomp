<?php

namespace Controllers;

class AdminController extends AbstractController
{
    public function doAction()
    {
        var_dump($_SERVER["QUERY_STRING"]);
        var_dump($_GET);
        foreach ($_SERVER as $item => $val) {
            echo "<p>$item - <i class='color: green'>$val</i></p>";
        }
    }
}