<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Прайс на наши услуги</h1>
        </div>
        <div class="row">
            <div class="col">
                <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="bi bi-printer"></i>Принтера</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <?php
                        echo "<h2>Ремонт компьютеров</h2>";
                        echo "<table class='table-responsive-lg table table-striped table-hover table-bordered'>";
                        echo "<thead>";
                        echo "    <tr>";
                        echo "        <th scope=\"col\">Наименование</th>";
                        echo "        <th scope=\"col\">Цена в гривнах</th>";
                        echo "    </tr>";
                        echo "</thead>";
                        echo "    <tbody>";
                            foreach ($_SERVER as $item => $val ) {
                                echo "<tr>";
                                echo "<td>$item</td><td><code>$val</code></td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";    
                        echo "</table>";
                    ?>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <?php
                        echo "<h2>Ремонт принтеров</h2>";
                        echo "<table class='table table-dark table-striped'>";
                        foreach ($_SERVER as $item => $val ) {
                            echo "<tr>";
                            echo "<td>$item</td><td><code>$val</code></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        ?>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <?php
                        echo "<h2>Заправка картриджей</h2>";
                        echo "<table class='table table-hover'>";
                        foreach ($_SERVER as $item => $val ) {
                            echo "<tr>";
                            echo "<td>$item</td><td><code>$val</code></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>