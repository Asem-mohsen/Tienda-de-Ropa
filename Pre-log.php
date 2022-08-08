<?php
include "./Connection.php";
include "./bootstrap.php";
?>


<html lang="en">
<head>
<meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
              <title>Bienvenido</title>
              <style>
                  body {background-image: url("background.jpg");
                
background:linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5)), url(background.jpg);           
                }
              </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown" style="padding-left: 490px;">
      <ul class="navbar-nav">
      <a class="navbar-brand" style="font-family:'Times New Roman', Times, serif;" href="#">ASEM</a>

        <li class="nav-item active">
          
          <a class="nav-link" href="./Home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Cart.php">Cart</a>
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
  </nav>

<br>
<br>
<br>
<br>

<h1 class="text-center text-dark" style="font-family: 'Times New Roman', Times, serif;">
    Tap To Select
</h1>

<div class="text-center" style="padding-top: 20px;">
<a class="btn btn-outline-dark mr-3" href="./Sign in.php" role="button" style="height: 100px; width: 200px;"> Create An Account </a>

<a class="btn btn-outline-dark" href="./LogIn.php" role="button" style="height: 100px; width: 200px;">Already Have An Account! </a>
<br>
<br>
<p>If You Are An Admin <a href="./Adminlogin.php">Click here ..</a> </p>
</div>












</body>













</html>