<?php

/**
 * ! Класс должен включать подключенными все контроллеры из папки /Controllers
 */
namespace Ostepan\Lib;


class ControllerFactory 
{
    private $error404Page = "Controllers\Page404Controller";
    private $indexPageController = "Controllers\MainPageController";

    /**
     * getController
     *
     * @return one of the family \Controllers\...Controller 
     */
    public function getController(string $name, string $article)
    {
        return $this->createController($name, $article);
    }

    private function createController(string $name, string $article) 
    {
        $controllerName = $this->indexPageChecking($name);
        $classExists = $this->isClassExists($controllerName);
        if ($classExists) {
            $controller = new $controllerName;
        } else {
            $controller = new $this->error404Page();
        }
        return $controller;
    }
    
    /**
     * * indexPageChecking checking is name = "" or index.php and if yes returns 
     * * index page controller neme if not add "Controller\" to current name
     *
     * @param  mixed $name
     * @return string
     */
    private function indexPageChecking(string $name): string
    {
        if ($name === "" || $name === "index.php") {
            $controller = $this->indexPageController;
        } else {
            $controller = "Controllers\\" . ucfirst($name) . "Controller";
        }
        return $controller;
    }

        
    /**
     * * isClassExists cheks is class exists
     *
     * @param  mixed $name
     * @return bool
     */
    private function isClassExists(string $name): bool
    {
        $classExistence = class_exists($name);
        return $classExistence;
    }
    
}