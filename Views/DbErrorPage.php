
<!DOCTYPE html>
<html lang="ru">
<head>
<?php
    require_once "../Views/bootstrap_jquery.php";
?>
    <link rel="stylesheet" href="/css/my_styles.css">
    <title>Document</title>
</head>
<body>
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="alert alert-primary" role="alert">
        <img src="/img/db_error.png" alt="404 errors">
        <h1 class="text-center">Ошибка подключения к БД!</h1>
        <p class="text-center display-6 test">Данные ошибки занесены в log</p>        
    </div>
</div>
</body>
</html>