<?php

namespace Ostepan\Lib;

use \Ostepan\Lib\{ControllerFactory, UriPreparator};
use \Controllers\AbstractController;

class Router 
{
               protected string $uri;
    protected ControllerFactory $controllerFactory;
        protected UriPreparator $uriPreparator;
               protected string $controllerName;
               protected string $article;
    
    public function __construct()
    {
        $this->controllerFactory = new ControllerFactory();
            $this->uriPreparator = new UriPreparator();
    }
    
    public function getController()
    {
        $this->setDataControllerFactory();
        return $this->controllerFactory->getController(
            $this->controllerName, 
            $this->article);
    }
    
        
    /**
     * * Разбирает uri для дальнейшей передачи в экземпляр объекта ControllerFactory
     *
     * @return void
     */
    private function setDataControllerFactory()
    {
        $uriSegments = $this->uriPreparator->prepareUri();
        $this->controllerName = $uriSegments[0];
        $this->article = $uriSegments[1] ?? "";
    }
}