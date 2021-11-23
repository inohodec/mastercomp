<?php

namespace Controllers;

abstract class AbstractController 
{
    private $name;
    private $article;
    
    public function __construct(string $name = "", string $article = "")
    {
        $this->name = $name;
        $this->article = $article;
    }
    
    abstract public function doAction();
}