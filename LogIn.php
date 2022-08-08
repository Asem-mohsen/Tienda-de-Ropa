<?php
include "./sharedadmin.php";
include "./Connection.php";
include "./bootstrap.php";


function printmessage($text,$state){
  if($state == 'normal')
  echo "<div style='text-align:center;' class = 'alert alert-primary' role = 'alert' >". $text . "</div>";
  else if($state == 'danger')
  echo "<div style='text-align:center;' class = 'alert alert-danger' role = 'alert' >". $text . "</div>";
  
  }

if (isset($_POST['LogIn'])) {
  $email =    $_POST['email'];
  $password = $_POST['password'];


  $Select = "SELECT * FROM`user` WHERE email= '$email'and password= '$password'";
  $s = mysqli_query($con, $Select);
  $row = mysqli_num_rows($s);
  if ($row > 0) {
    $row1 = mysqli_fetch_assoc($s);
    $UserID = $row["ID"];
    $_SESSION['name'] = $row1['name'];
    $_SESSION['email'] = $row1['email'];
    $_SESSION['city'] = $row1['city'];
    $_SESSION['UserID'] = $row1['ID'];
    header("location:./Home.php");
  } else {
    echo printmessage("Please Make Sure That Email/Passrowd Is Correct", "danger");
  }
}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>LogIn</title>
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
          <a class="nav-link" href="#">Cart</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Men Style</a>
            <a class="dropdown-item" href="#">Women Style</a>
            <a class="dropdown-item" href="#">Kids</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

<br>

<h1 class="text-center" style="font-family: Arial, Helvetica, sans-serif;"> Asoum Store </h1>



  <div class="container col-7 mt-5">
    <form method="POST">
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" required name="email" class="form-control" id="exampleFormControlInput1" placeholder="user@example.com">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Password</label>
        <input type="password" required name="password" class="form-control" id="exampleFormControlTextarea1"></input>
      </div>
      <button type="submit" name="LogIn" class=" btn-lg btn-block btn-dark">Log In</button>
      <br>
      <a href="./Sign in.php" > <button type="button" href="./sign in.php" class=" btn-lg btn-block btn-dark">Create an Account!  </button> </a>

    </form>
  </div>








</body>