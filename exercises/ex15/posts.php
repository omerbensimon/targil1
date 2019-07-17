<?php
 include 'db.php';
 include "config.php";

 session_start();

 if(!isset($_SESSION["user_id"]))
 header('Location: ' . URL . 'index.php');
 $query = "SELECT u.name, u.email, p.title, p.body, p.link FROM'tb_users_200' AS u INNER JOIN 'tb_posts_200' AS p ON  p.user_id = u.user_id = u.user_id ORDER BY u.name;";
 $model = mysqli_query($connection, $query);
 if(!$model){
     die("DB query failed.");
 }
 ?>