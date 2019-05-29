<?php
$un = $_GET["user"];
$pw = $_GET["pass"];

if ($un == "daniel" && $pw == "1234"){
    echo "Hey good day to " . $un ;
}else{
    echo "<h1>Sorry" . $un . " who are you?</h1>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Food-login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <script src="vendor/bootstrap/js/bootstrap.js"></script>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <link href="includes/style.css" rel="stylesheet" />
</head>

<body>
<header>
    <nav class="main-navigation">
        <div class="navbar-header animated fadeInUp">
            <a class="navbar-brand" href=""></a>

        </div>

        <ul class="nav-list">
            <li class="nav-list-item">
                <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-list-item">
                <a href="pizza.html" class="nav-link">Pizza</a>
            </li>
            <li class="nav-list-item">
                <a href="pasta.html" class="nav-link">Pasta</a>
            </li>
            <li class="nav-list-item">
                <a href="drinks.html" class="nav-link">Drinks</a>
            </li>
            <li class="nav-list-item">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

    </nav>
</header>

</body>
</html>