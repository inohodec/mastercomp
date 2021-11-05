<?php
error_reporting(E_ALL);
session_start();

echo phpinfo();

require_once "../vendor/autoload.php";

$clearedURI = str_replace("?{$_SERVER['QUERY_STRING']}", "", $_SERVER['REQUEST_URI']);
$clearedURI = ltrim($clearedURI, "/");
$uriSegments = explode("/", $clearedURI);

if ($uriSegments[0] === "") {
    require_once "../Views/MainPage.php";
} else {
    $filePath = "../Views/" . ucfirst($uriSegments[0]) . ".php";
    $existence = file_exists($filePath);
    $filePath = ($existence) ? $filePath : "../Views/404.php";
    require_once $filePath;
    }

