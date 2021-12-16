<?php

namespace Ostepan\Lib;

use PDO;
use PDOException;
use Ostepan\Lib\Loggers\AbstractLogger;
use Ostepan\Lib\Loggers\DbErrorLogger;

class DbConnection
{
    private AbstractLogger $errorLogger;        //write db connection error
    private string $host = "localhost";
    private string $dbDriver = "mysql";
    private string $userName = "inohodec";
    private string $password = "Asd9kl123";
    private string $dbName = "master";
    private array $dbOptions = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];


    public function __construct()
    {
        $this->errorLogger = new DbErrorLogger;
    }

    public function getConnection()
    {
        try {
            return $pdo = new PDO(
                $this->dbDriver . ":host=$this->host;dbname=" . $this->dbName,
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
