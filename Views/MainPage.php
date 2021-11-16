<!DOCTYPE html>
<html lang="ru">
<head>
<?php
    require_once "../Views/bootstrap_jquery.php";
?>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <?php
                echo "<h1>The main page</h1>";
                echo "<p>" . __FILE__ . "</p>";
                echo "<table class='table table-striped table-hover'>";
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
</body>
</html>