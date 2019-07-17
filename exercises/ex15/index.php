<?php
include 'db.php';
include "config.php";

session_start();
if(!empty($_POST["loginMail"])){
    $query = "SELECT * FROM tb_users_200 WHERE email='" . $_POST["loginMail"]
    . "' and password = '" . $_POST["loginPass"] . "'";
    
    $result = mysqli_query($connection , $query);
    $row = mysql_fetch_array($result);

    if(is_array($row)){
        $_SESSION["user_id"] = $row['user_id'];
        header('Location: ' . URL . 'posts.php');
    }
    else{
        $message = "Invalid Username or Password";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>JOINS</title>
    </head>
    <body>
    <div class="container">
 <h1>Login</h1>
 <form action="#" method="post" id="frm">
 <div class="form-group">
 <label for="loginMail">Email: </label>
 <input type="email" class="form-control" name="loginMail" id="loginMail"
aria-describedby="emailHelp" placeholder="Enter email">
 </div>
 <div class="form-group">
 <label for="exampleInputPassword1">Password: </label>
 <input type="password" class="form-control" name="loginPass" id="loginPass"
placeholder="Enter Password">
 </div>
 <button type="submit" class="btn btn-primary">Log Me In</button>
 <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
 </form>
 </div>
    </body>
</html>