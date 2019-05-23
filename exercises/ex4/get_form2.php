<!DOCTYPE html>
<html>
    <head>
        <title>forms</title>
    </head>
    <body>
        <h2>
            Welcome <?php echo $_GET["fullname"];?>
        </h2>
        <h3>
            Your Password :<?php echo $_GET["pass"];?><br>
            Your Email Address :<?php echo $_GET["mail"];?><br>
            Your Web Site is : <?php echo $_GET["website"];?><br>
            Your Phone is: <?php echo $_GET["phone"];?><br>
            </h2>

                Amount of coffee you drink a day: <?php echo $_GET["coffee"];?><br>
                The temperature now is:<?php echo $_GET["Temper"];?><br>

                Your address is: <?php echo $_GET["address"];?><br>

                Your interests are: <?php echo $_GET["interests[]"];?><br>
                 <br>
                Your gender is: <?php echo $_GET["gender"];?><br>
                Your age is: <?php echo $_GET["age"];?><br>
        </h3>
    </body>
</html>
