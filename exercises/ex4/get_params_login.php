<!DOCTYPE html>
<html>
    <head>
        <title>forms</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <section>
            <h2>Welcome</h2>
            <?php
            $un = $_GET["reg_un"];
            $pw = $_GET["reg_pass"];

            if ($un == "Omer" && $pw =="omer")
                echo "<h2>Good morning user " . $un . "</h2>";
            else
                echo "<h2>Who are you? you can't sit with us</h2>";
            ?>
        </section>
    </body>
</html>