<!DOCTYPE html>
<html>
    <head>
        <title>forms</title>
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