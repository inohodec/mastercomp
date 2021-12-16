<?php

namespace Ostepan\Lib;

class Uri 
{
    private $controller;
    private $article;
    private $options;
    
    public function __construct($controller = "", $article = "", $options = "")
    {
        $this->controller = $controller;
        $this->article = $article;
        $this->options = $options;
    }

    /**
     * Get the value of controller
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * Get the value of article
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Get the value of options
     */
    public function getOptions()
    {
        return $this->options;
    }
}