<?php

namespace Ostepan\Lib\Loggers;

abstract class LogWriter
{
    /**
     * must contains path to site's root directory
     */
    const DEFAULT_ERROR_FILE = "/DEFAULT_ERROR.LOG";
    const ERROR_MESSAGE = "Path is wrong or access denied!";
    protected $rootFolder;
    protected $logger;

    public function __construct()
    {
        $this->logger = $this->setLogger;
    }
    
    /**
     * Set the value of currentErrorFile
     */
    abstract protected function setLogger(): AbstractLogger;
    
    /**
     * every child class implements an own realisation of writing
     */
    public function writeDataToLogFile(string $data)
    {
        //TODO: implement writting data to file or if it impossible write data to 
        // default error log file or throw an error
        
        $logFilePath = $_SERVER['DOCUMENT_ROOT'] . $this->logger->getFilePath;
        $wasErrWritten = file_put_contents($logFilePath, $data, FILE_APPEND | LOCK_EX);
        
        if (!$wasErrWritten) {
            file_put_contents(self::DEFAULT_ERROR_FILE, $data, FILE_APPEND | LOCK_EX);
        }
    }

    /**
     * returns root site global path without "/" at the end /home/www/site.com
     */
    public function getRootFolder(): string
    {
        return $this->rootFolder;
    }

    protected function writeDefaultLogFile(): void
    {
        # code...
    }
}