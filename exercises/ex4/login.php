<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <link rel="stylesheet" href="includes/style.css">
    <title>Forms</title>
</head>
<body>
<main>
    <h2 class="form-title">Welcome</h2>
    <section>
        <?php
        $un = $_GET["usr-name"];
        $pw = $_GET["usr-pass"];

        if ($un == "sameer" && $pw == "1234"){
            echo "<h1>Hey good day to " . $un . "</h1>";
        }else{
            echo "<h1>Sorry" . $un . " who are you?</h1>";
        }

        ?>
    </section>
</main>
</body>
</html>