<?php

namespace Ostepan\Lib;

use \Ostepan\Lib\ControllerFactory;
use Controllers\AbstractController;
use PDO;

class AppHelper 
{
    private $rootPath;
    private $host;
    private $dbName;
    private $userName;
    private $pass;
    private $dbConnection;
    private $factory;
    private static $instance = NULL;
    
    private function __construct()
    {
        $this->factory = new ControllerFactory;
        $this->dbName = "master";
        $this->userName = 'inohodec';
        $this->pass = 'Asd9kl12';
        $this->host = 'localhost';
        $this->setDbConnection();
    }

    public static function getInstance()
    {
        return self::$instance ?? new self;
    }
    
    
    private function setDbConnection()
    {
        try {
            $this->dbConnection = new PDO(
                "mysql:$this->host;dbname=$this->dbName", 
                $this->userName, 
                $this->pass,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch (\PDOException $th) {
            $this->writeDbError($th['message']);
            require_once "../Views/DbErrorPage.php";
            die;
        }
    }

    /**
     * ! write db connection error into db_errors/db_err_log.txt
     */
    private function writeDbError(string $message): void
    {
        $logFilePath = $this->rootPath . "/db_errors/db_err_log.txt";
        file_put_contents($logFilePath, $message,FILE_APPEND | LOCK_EX);
    }

    /**
     * Get the value of dbConnection
     */
    public function getDbConnection()
    {
        return $this->dbConnection;
    }

    /**
     * Return concrete Controller
     */

    public function getController(string $name, string $article): AbstractController
    {
        return $this->factory->getController($name, $article);
    }
}