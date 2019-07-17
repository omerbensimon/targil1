<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <link rel="stylesheet" href="includes/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Mandali&display=swap" rel="stylesheet">
    <title>Add Meal Whats Inside</title>
</head>
<body>
    <header>
      <img src="images/logo.png" class="logo">
    </header>
      <nav class="navbar">
        <a href="#" ><img src="images/home.png" class="homeHeight"></a>
        <!-- <span style="font-size:15px">
        <i class="fa fa-home fa-2x" style="margin-right:15px;" aria-hidden="true"></i>
        <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
      </span> -->
        <div id="mySidenav" class="sidenav1">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <!-- <a href="#"><img src="images/id.png"> <span>Hi Meir</span></a> -->
        <a href="#" id="personLink1"><img id="personImage1"> <span>
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
        <a href="#" id="personLink2">
              <img id="personImage2">
            <?php 
          echo $_SESSION["username"];
          ?> 
      </div>
    </nav>
    <section class="bread">
      <ul>
        <li><a href="myMenu.php">Main Menu</a></li>
        <li>//  <a href="#" class="selected">Add Meal</a></li>
      </ul>
    </section>
    <nav class="sidenav">
      <ul>
        <li><a href="myMenu.php" class="selected" ><img src="images/mymenu.png" alt="" > My Menu</a> </li>
        <li><a href="#" class="add" ><img src="images/add.png" alt=""> Add Meal</a>  </li>
        <li><a href="#" class="review" ><img src="images/review.png" alt=""> Check Reviews</a></li>
      </ul>
    </nav>
<div id="wrapper">
    <main>
            <h1>Add Meal</h1>
            <div class="form-group">
                <label class="categoryName">Name of the category</label>
                <div>
                  <div >
                    <input type="radio" name="1" id="inputType1">
                    <label id="Type1" ></label>
                  </div>
                  <div >
                    <input type="radio" name="1" id="inputType2">
                    <label id="Type2" ></label>
                  </div>
                  <div >
                    <input type="radio" name="1" id="inputType3">
                    <label id="Type3" ></label>
                  </div>
                </div>
            </div>
            <div class="form-group">
                <label class="categoryName">Name of the meal</label>
                <input type="text"  name="meal" class="form-control" id="inputMeal" placeholder="Like: Cauliflowr in tahini">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="categoryName">Meal's ingredients</label>
                <textarea class="form-control" id="inputIngredients" rows="3" placeholder="Cauliflower, tahini, green onion, pistachios, lemon, water, pepper, 20 gram salt, seelan, garlic, olive oil"></textarea>
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="categoryName">Image URL</label>
                    <textarea class="form-control" rows="3" placeholder="https://i.imgur.com/Cb0BGfk.png" id="imageURL"></textarea>
                </div>
            <div class="addPhoto">
                <input type='file' id="getFile" style="display:none">
                <img src="images/photo.png">
                <button type="button" class="btn btn-light"  onclick= "document.getElementById('getFile').click()"> Add photo</button>
            </div>
            <div class="Add">
            <button type="submit" class="btn btn-primary" id="submitAdd">Add</button>
        </div>
        <!-- </form> -->
    </main>
    </div>
    <footer class="page-footer font-small blue">
            <div class="footer-copyright text-center py-3">© 2019 Copyright WhatsInside>>
              <a>Itay Gershman & Aviel Dagan</a>
            </div>
    </footer>    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="includes/AddMeal.js"></script>
    <!-- <script src="includes/dynamic_data.json"></script> -->
</body>
</html>