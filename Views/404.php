<?php
    header("HTTP/1.0 404 Not Found");
?>
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
        <img src="/img/404.jpg" alt="404 errors">
        <h1 class="text-center">Ошибка 404!</h1>
        <p class="text-center display-6 test">Страница не найдена.</p>
        <div class="text-center" role="alert">
            <button type="button" class="alert">
                <a href="/">На главную.</a>
            </button>
        </div>
    </div>
</div>
</body>
</html>