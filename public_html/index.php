<?php
    require_once "../vendor/autoload.php";

    $a = new Ostepan\Lib\Test();
    echo $a->getSpace();
    echo "<hr>";
    foreach ($_SERVER as $item => $val) {
        echo "<p>$item = $val</p>";
    }
