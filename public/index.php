<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', '1');
session_start();

use Ostepan\Lib\{
    DbConnection, 
    ControllerFactory, 
    Router,
    UriPreparator,
    AppHelper
};

require_once "../vendor/autoload.php";

$mysql = new DbConnection();
$connection = $mysql->getConnection();

/***
* * Принимает строку запроса (к примеру REQUEST_URI = /index.php?max=cool&koss=alkash)
* * обрезает символы / с обеих сторон если они есть
* * проверяет есть ли в URI строка запроса query(var1=val1&var2=val2&...)
* * и если есть то удаляет из строки для дальнейшего парсинга
* * после разбивает строку на сегменты (val1/val/val3 => [0 = val1, 1 = val2, ...])
*

use \Ostepan\Lib\{Router, AppHelper};

$helper = AppHelper::getInstance();
$connection = $helper->getDbConnection();

$router = new Router();
$controller = $router->getController();
$controller->doAction();
*/

