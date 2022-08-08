<?php
include "./Connection.php";
include "./bootstrap.php";



if (isset($_POST['LogIn'])) {
  $email =    $_POST['email'];
  $password = $_POST['password'];


  $Select = "SELECT * FROM`manager` WHERE email= '$email'and password= '$password'";
  $s = mysqli_query($con, $Select);
  $row = mysqli_num_rows($s);
  if ($row > 0) {
    $row1 = mysqli_fetch_assoc($s);
    $userid = $row["ID"];
    $_SESSION['name'] = $row1['name'];
    $_SESSION['email'] = $row1['email'];
    $_SESSION['UID'] = $row1['id'];
    header("location:./Home.php");
  } else {
    echo '<script type="text/javascript">';
    echo ' alert("The Password or Email is incorrect")';
    echo '</script>';
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
    <div class="collapse navbar-collapse" id="navbarNavDropdown" style="padding-left: 640px;">
      <ul class="navbar-nav">
        <a class="navbar-brand" style="font-family:'Times New Roman', Times, serif;" href="#">ASEM</a>
      </ul>
    </div>
  </nav>

<br>

<h1 class="text-center" style="font-family: Arial, Helvetica, sans-serif;"> Asoum Store </h1>



  <div class="container col-7 mt-5">
    <form method="POST">
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" required name="email" class="form-control" id="exampleFormControlInput1">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Password</label>
        <input type="password" required name="password" class="form-control" id="exampleFormControlTextarea1"></input>
      </div>
      <button type="submit" name="LogIn" class=" btn-lg btn-block btn-dark">Log In</button>
      <br>
      <a href="./Pre-log.php" > <button type="button" class=" btn-lg btn-block btn-dark">Back </button> </a>

    </form>
  </div>