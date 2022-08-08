<?php

include "./Connection.php";
include "./bootstrap.php";



if (isset($_POST['CreateAccount'])) {
  $name =     $_POST['name'];
  $city =     $_POST['city'];
  $email =    $_POST['email'];
  $password = $_POST['password'];


  $insert = "INSERT INTO `user` VALUES( Null,'$name', '$city','$email','$password')";
  $i = mysqli_query($con, $insert);


  header("location:./logIn.php");

}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sign In</title>
</head>


<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown" style="padding-left: 290px;">
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



  <h1 class="text-center text-dark" style="font-family: 'Times New Roman', Times, serif; padding-top: 50px;">Create Your Own Account</h1>
  <div class="container col-7 mt-5">
    <form method="POST">
      <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="text" required name="name" class="form-control" id="exampleFormControlInput1" placeholder="User Name">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" required name="email" class="form-control" id="exampleFormControlInput1" placeholder="user@example.com">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">City</label>
        <select class="form-control" required name="city" id="exampleFormControlSelect1">
          <option>Cairo</option>
          <option>Alexandria</option>
          <option>Swiss</option>
          <option>Sharm elshikh</option>
          <option>Matrooh</option>
          <option>Sinai</option>
          <option>Hurghada</option>
          <option>Luxor</option>
          <option>Aswan</option>
          <option>Sohag</option>
          <option>Tanta</option>
          <option>El minia</option>
          <option>Giza</option>
          <option>Qalyoubia</option>
          <option>Mansoura</option>
          <option>Sharkia</option>
          <option>New administrative Capital</option>
          <option>Ismailia</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Password</label>
        <input type="password" required name="password" class="form-control" id="exampleFormControlTextarea1"></input>
      </div>
      <button type="submit" name="CreateAccount" class=" btn-lg btn-block btn-dark"> Create Your Account </button>
    </form>
  </div>

























</body>







</html>