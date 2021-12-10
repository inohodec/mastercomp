<?php

namespace Ostepan\Lib;

use PDO;
use PDOException;
use Ostepan\Lib\Loggers\AbstractLogger;
use Ostepan\Lib\Loggers\DbErrorLogger;

class DbConnection 
{
    private $dbDriver = "mysql";
    private $userName = "inohodec";
    private $password = "Asd9kl123";
    private $dbName = "master";
    private $dbOptions = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    private AbstractLogger $errorLogger;

    public function __construct()
    {
        $this->errorLogger = new DbErrorLogger;
    }
    
    public function getConnection()
    {
        try {

            return $pdo = new PDO(
                $this->dbDriver . ":host=localhost;dbname=" . $this->dbName,
                $this->userName,
                $this->password,
                $this->dbOptions
            );

        } catch (PDOException $e) {

            $this->errorLogger->writeDataToFile($e->getMessage());
            $this->renderDbError();    
            die();

        }
    }

    private function renderDbError(): void
    {
        require_once "../Views/DbErrorPage.php";
    }
}