<?php

namespace Ostepan\Lib\Loggers;

abstract class AbstractLogger 
{
    protected string $filePath;

    public function __construct()
    {
        $this->filePath = $this->setFilePath();
    }

    /**
     * sets up path to log file for concrete logger
     */
    abstract protected function setFilePath(): string;
    
    /**
     * Get the value of filePath
     *
     * @return  string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }
}