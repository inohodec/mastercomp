<?php

namespace Ostepan\Lib\Loggers;

abstract class AbstractLogger
{
    /**
     * must contains path to site's root directory
     */
    private $rootFolder;

    public function __construct()
    {
        $this->rootFolder = $_SERVER["DOCUMENT_ROOT"];
    }
    
    /**
     * every child class implements an own realisation
     */
    abstract public function writeDataToFile(string $data);

    /**
     * returns root site global path without "/" at the end /home/www/site.com
     */
    public function getRootFolder(): string
    {
        return $this->rootFolder;
    }

}