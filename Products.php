<?php
include "./Connection.php";
include "./bootstrap.php";
include "./sharedadmin.php";

if (isset($_SESSION['UserID'])){
  
include "./UserNavWithoutSession.php";
include "./Connection.php";

$select = "SELECT * FROM `products`";
$sc = mysqli_query($con, $select);


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ropa</title>

  <style>

  .card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}


</style>

</head>

<body>
 


  <br>

  <h1 style="padding-left: 50px; padding-top:70px; font-family:'Times New Roman', Times, serif;">For Men</h1>





  <div class="container col-11 mt-3">
  <div class="row">
    <?php foreach ($sc as $data) { ?>
      <div class="container col-4 mt-3">
        <div class="card" style="width: 280px;" style="height: 90px;">
        <img class="card-img-top" style="height: 300px; width: 278px;" src="../Asoum/<?php echo $data['Image'] ?>" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center"><?php echo $data['Name'] ?></h5>
            <p class="card-text"><?php echo $data['description'] ?></p>
            <p class="card-text">Price: <?php echo $data['price']?>L.E</p>
            <a href="./Pre-order.php?ProductID=<?php echo $data['ID'] ?>" style="width: 240px;" class="btn btn-dark">Check</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<div class="container col-11 mt-3">
  <div class="row">
    <?php foreach ($sc as $data) { ?>
      <div class="container col-4 mt-3">
        <div class="card" style="width: 280px;" style="height: 90px;">
        <img class="card-img-top" style="height: 300px; width: 278px;" src="../Asoum/<?php echo $data['Image'] ?>" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center"><?php echo $data['Name'] ?></h5>
            <p class="card-text"><?php echo $data['description'] ?></p>
            <p class="card-text">Price: <?php echo $data['price']?>L.E</p>
            <a href="./Pre-order.php?PrductID=<?php echo $data['ID'] ?>" style="width: 240px;" class="btn btn-dark">Check</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

 

<h1 style="padding-left: 50px; padding-top:70px; font-family:'Times New Roman', Times, serif;">For Women</h1>

<br>
<br>
<br>
<div class="container col-11 mt-3">
  <div class="row">
    <?php foreach ($sc as $data) { ?>
      <div class="container col-4 mt-3">
        <div class="card" style="width: 280px;" style="height: 90px;">
        <img class="card-img-top" style="height: 300px; width: 278px;" src="../Asoum/<?php echo $data['Image'] ?>" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center"><?php echo $data['Name'] ?></h5>
            <p class="card-text"><?php echo $data['description'] ?></p>
            <p class="card-text">Price: <?php echo $data['price']?>L.E</p>
            <a href="./Pre-order.php?PrductID=<?php echo $data['ID'] ?>" style="width: 240px;" class="btn btn-dark">Check</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<div class="container col-11 mt-3">
  <div class="row">
    <?php foreach ($sc as $data) { ?>
      <div class="container col-4 mt-3">
        <div class="card" style="width: 280px;" style="height: 90px;">
        <img class="card-img-top" style="height: 300px; width: 278px;" src="../Asoum/<?php echo $data['Image'] ?>" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center"><?php echo $data['Name'] ?></h5>
            <p class="card-text"><?php echo $data['description'] ?></p>
            <p class="card-text">Price: <?php echo $data['price']?>L.E</p>
            <a href="./Pre-order.php?PrductID=<?php echo $data['ID'] ?>" style="width: 240px;" class="btn btn-dark">Check</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<br>
<Br>

<?php
 include "./Footer.php";
?>



 <?php }else {?>

  <?php

$select = "SELECT * FROM `products`";
$sc = mysqli_query($con, $select);



?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ropa</title>


  <style>

  .card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}


</style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown" style="padding-left: 40px;">
      <ul class="navbar-nav">
        <a class="navbar-brand" style="font-family:'Times New Roman', Times, serif;" href="#">ASEM</a>

        <li class="nav-item active">

          <a class="nav-link" href="./Home.php">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Cart.php">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Feedback.php">Feedback</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="./Products.php">Men Style</a>
            <a class="dropdown-item" href="./Products.php">Women Style</a>
            <a class="dropdown-item" href="./Products.php">Kids</a>
          </div>
        </li>
      </ul>
      
    </div>
    <a href="./LogIn.php"> <button class="btn btn-outline-dark" type="submit">Log In </button> </a>

    <a href="./Sign in.php"> <button class="btn btn-outline-dark" type="submit">Sign Up</button> </a>
  </nav>



  <br>

  <h1 style="padding-left: 50px; padding-top:70px; font-family:'Times New Roman', Times, serif;">For Men</h1>





  <div class="container col-11 mt-3">
  <div class="row">
    <?php foreach ($sc as $data) { ?>
      <div class="container col-4 mt-3">
        <div class="card" style="width: 280px;" style="height: 90px;">
        <img class="card-img-top" style="height: 300px; width: 278px;" src="../Asoum/<?php echo $data['Image'] ?>" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center"><?php echo $data['Name'] ?></h5>
            <p class="card-text"><?php echo $data['description'] ?></p>
            <p class="card-text">Price: <?php echo $data['price']?>L.E</p>
            <a href="./Pre-order.php?PrductID=<?php echo $data['ID'] ?>" style="width: 240px;" class="btn btn-dark">Check</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<div class="container col-11 mt-3">
  <div class="row">
    <?php foreach ($sc as $data) { ?>
      <div class="container col-4 mt-3">
        <div class="card" style="width: 280px;" style="height: 90px;">
        <img class="card-img-top" style="height: 300px; width: 278px;" src="../Asoum/<?php echo $data['Image'] ?>" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center"><?php echo $data['Name'] ?></h5>
            <p class="card-text"><?php echo $data['description'] ?></p>
            <p class="card-text">Price: <?php echo $data['price']?>L.E</p>
            <a href="./Pre-order.php?PrductID=<?php echo $data['ID'] ?>" style="width: 240px;" class="btn btn-dark">Check</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

 

<h1 style="padding-left: 50px; padding-top:70px; font-family:'Times New Roman', Times, serif;">For Women</h1>

<br>
<br>
<br>
<div class="container col-11 mt-3">
  <div class="row">
    <?php foreach ($sc as $data) { ?>
      <div class="container col-4 mt-3">
        <div class="card" style="width: 280px;" style="height: 90px;">
        <img class="card-img-top" style="height: 300px; width: 278px;" src="../Asoum/<?php echo $data['Image'] ?>" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center"><?php echo $data['Name'] ?></h5>
            <p class="card-text"><?php echo $data['description'] ?></p>
            <p class="card-text">Price: <?php echo $data['price']?>L.E</p>
            <a href="./Pre-order.php?PrductID=<?php echo $data['ID'] ?>" style="width: 240px;" class="btn btn-dark">Check</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<div class="container col-11 mt-3">
  <div class="row">
    <?php foreach ($sc as $data) { ?>
      <div class="container col-4 mt-3">
        <div class="card" style="width: 280px;" style="height: 90px;">
        <img class="card-img-top" style="height: 300px; width: 278px;" src="../Asoum/<?php echo $data['Image'] ?>" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center"><?php echo $data['Name'] ?></h5>
            <p class="card-text"><?php echo $data['description'] ?></p>
            <p class="card-text">Price: <?php echo $data['price']?>L.E</p>
            <a href="./Pre-order.php?PrductID=<?php echo $data['ID'] ?>" style="width: 240px;" class="btn btn-dark">Check</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<br>
<Br>

<?php
 include "./Footer.php";



 } ?>