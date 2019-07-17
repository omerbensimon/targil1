<?php
   include "config.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="includes/style.css">
    <!-- <script src="includes/jquery-3.3.1.min.js"></script> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Mandali&display=swap" rel="stylesheet">
    <title>Whats Inside</title>
</head>

<body>
    <header>
        <img src="images/logo.png" class="logo">
    </header>
    <div>
      <nav class="navbar">
        <a href="#" ><img src="images/home.png" class="homeHeight"></a>
          <!-- <span style="font-size:15px">
          <i class="fa fa-home fa-2x" style="margin-right:15px;" aria-hidden="true"></i>
          <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
        </span> -->
        <div id="mySidenav" class="sidenav1">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;     
          </a>
          <!-- <a href="#"><img src="images/id.png"> <span>Hi Meir</span></a> -->
          <a href="#"><img src="images/id.png"> <span>
            <?php 
            session_start();
            echo $_SESSION["username"];
            ?>
          </span></a>
          <a href="#" class="category">Main Menu</a>
          <a href="index.html" ><img src="images/home.png"><span class="user">Home</span></a>
          <a href="add_product.html" class="add" ><img src="images/add.png"> Add Meal</a>
          <a href="#" class="review" ><img src="images/review.png"> Check Reviews</a>
          <a href="#" class="category">Account</a>
          <a href="index.html" ><img src="images/profile.png">Profile</span></a>
          <a href="add_product.html"><img src="images/switch.png">Switch Mode</a>
          <a href="#"><img src="images/logout.png"> Logout</a>
        </div>
          <span style="cursor:pointer" onclick="openNav()"><img class="hamburger" src="images/menu.png"></span>
            <div class="row">
              <div class="search">
                  <input type="text" class="form-control input-sm" maxlength="64" placeholder="Search" />
                  <button type="submit" class="btn btn-primary btn-sm">Search</button>
              </div>
          </div>
          <div class="userid">
            <a href="#"><img src="images/id.png">
              <?php 
            echo $_SESSION["username"];
            ?> 
          </div>
      </nav>
      <section class="bread">
        <ul>
          <li><a href="#">Main Menu</a></li>
          <li>//  <a href="#" class="selected">My Menu</a></li>
        </ul>
      </section>
      <nav class="sidenav">
        <ul>
          <li><a href="#" class="selected" ><img src="images/mymenu.png" alt="" > My Menu</a> </li>
          <li><a href="add_product.php" class="add" ><img src="images/add.png" alt=""> Add Meal</a>  </li>
          <li><a href="#" class="review" ><img src="images/review.png" alt=""> Check Reviews</a></li>
        </ul>
      </nav>
      <div id="wrapper">
        <main >
          <div class="modal fade" id="optionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span> <!--x-->
                  </button>
                </div>
                <div class="modal-footer">
                  <button type="button" id="delete"  class="btn btn-secondary" data-dismiss="modal">Delete</button>
                  <!--open modal for are you sure?-->
                  <button type="button" id="update"  class="btn btn-primary">Update</button>
                  <!--header:location to edit product with PHP-->
                </div>
              </div>
            </div>
          </div>
            <h3 id="h3">Starters</h3>
            <div id="Starters"><!--id changed for all Types-->
            </div>
            <div class="clear"></div>
            <h3 class="title">Main Dishes</h3>
            <div id="Main Dishes">
            </div>
            <div class="clear"></div>
            <h3 class="title">Desserts</h3>
            <div id="Desserts">
            </div>
        </main>
      </div>
      <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3">© 2019 Copyright WhatsInside>>
          <a>Itay Gershman & Aviel Dagan</a>
        </div>
      </footer>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="includes/main2.js"></script>
</body>
</html>