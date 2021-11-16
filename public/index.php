<?php
error_reporting(E_ALL);
session_start();
ini_set('display_errors', 1);


require_once "../vendor/autoload.php";

/***
* * Принимает строку запроса (к примеру REQUEST_URI = /index.php?max=cool&koss=alkash)
* * обрезает символы / с обеих сторон если они есть
* * проверяет есть ли в URI строка запроса query(var1=val1&var2=val2&...)
* * и если есть то удаляет из строки для дальнейшего парсинга
* * после разбивает строку на сегменты (val1/val/val3 => [0 = val1, 1 = val2, ...])
*/

$clearedURI = str_replace("?{$_SERVER['QUERY_STRING']}", "", $_SERVER['REQUEST_URI']);
$clearedURI = trim($clearedURI, "/");
$uriSegments = explode("/", $clearedURI);

/***
 * * Hi there
 */

$controllerFactory = new \Ostepan\Lib\ControllerFactory($uriSegments);
$controller = $controllerFactory->getController();
$controller->doAction();

/*
if ($uriSegments[0] === "" || $uriSegments[0] === "index.php") {
    require_once "../Views/MainPage.php";
} else {
    $filePath = "../Views/" . ucfirst($uriSegments[0]) . ".php";
    $existence = file_exists($filePath);
    $filePath = ($existence) ? $filePath : "../Views/404.php";
    require_once $filePath;
}
*/
