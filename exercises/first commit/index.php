<?php
   include "config.php";
   session_unset();
   session_start();

   $error = '';
   if(isset($_POST["username"]) && isset($_POST["password"])) {

        $userName = mysqli_real_escape_string($connection,$_POST['username']);//no injection to my objects
        $userPass = mysqli_real_escape_string($connection,$_POST['password']); 
        
        // $query = "SELECT * FROM /*name of table*/tb_users_200 WHERE username = '$userName' and passcode = '$userPass'";
        $query = 'SELECT * FROM tb_users_209_1 WHERE username = "' . $userName . '" AND password = "' . $userPass . '";';
        //query doesnt work because of username isnt in this TABLE so i need to modify that with the name in the input

        $result = mysqli_query($connection , $query);
        $row = mysqli_fetch_array($result);

        // If result matched $userName and $userPass, table row must be 1 row
        if(is_array($row)) {
            // session_register("userName");//what is that?
            //  $_SESSION['login_user'] = $userName; // can be user_id from table
            echo "authantication success";
            mysqli_free_result($result);
            mysqli_close($connection);
            echo $userName;
             header("location: myMenu.php");
             $_SESSION=$row;
        }else {
            $error = "Your Login Name or Password is invalid";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="includes/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!------ Include the above in your HEAD tag ---------->
   </head>
    <body>
       <header>
          <!-- Whatsinside -->
          <img src="images/logo.png" class="logo">
       </header>
        
    <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->
        
                <!-- Icon -->
                <div class="fadeIn first">
                </div>
                <div class="loginForm">
                    <form action="index.php" method="post">
                        <input type="text" class="fadeIn second" name="username" id="user" placeholder="user name">
                        <input type="password" class="fadeIn third" name="password" id="pass" placeholder="password">
                        <button class="fadeIn fourth" id="submitLogin">Log in</button>
                        <div class="error"><?php echo $error; ?></div>
                        <!-- <input type="submit" value="LOGIN"> -->
                    </form>
                </div>
                <!-- <div class="loginForm">
                    <input type="text" class="fadeIn second" name="username" id="user" placeholder="user name">
                    <input type="text" class="fadeIn third" name="password" id="pass" placeholder="password">

                    <button class="fadeIn fourth" id="submitLogin">Log in</button>
                </div> -->
                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                </div>
        
            </div>
        </div>
        <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3">© 2019 Copyright WhatsInside>>
          <a>Itay Gershman & Aviel Dagan</a>
        </div>
      </footer>
    </body>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="includes/getResult.js"></script> -->
</html>