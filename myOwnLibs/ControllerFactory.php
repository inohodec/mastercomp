<?php

namespace Ostepan\Lib;

use Controllers\MainPageController;

class ControllerFactory 
{
    private array $uriSegment;
    private \Controllers\Page404Controller $error404Page;

    public function __construct(array $uriSegment)
    {
        $this->uriSegment = $uriSegment;
        $this->error404Page = new \Controllers\Page404Controller();
    }

        
    /**
     * getController
     *
     * @return one of the family \Controllers\...Controller 
     */
    public function getController()
    {
        return $this->createController();
    }

    protected function createController() 
    {
        $controller = $this->getControllerName();
        
        if (class_exists($controller)) {
            return new $controller();
        } else {
            return $this->error404Page;
        }
    }

    protected function getControllerName(): string
    {
        if (!isset($this->uriSegment[0]) || $this->uriSegment[0] === "" || $this->uriSegment[0] === "index.php") {
            $controllerName = "\\Controllers\\MainPageController";
            return $controllerName;
        } else {
            $controllerName = "\\Controllers\\" . ucfirst($this->uriSegment[0]) . "Controller";
            return $controllerName;
        }
    }
}