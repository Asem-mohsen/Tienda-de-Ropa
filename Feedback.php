<?php
include './bootstrap.php';
include './Connection.php';
include './UserNav.php';
if (isset($_SESSION['UserID'])) {
  $UserID= $_SESSION['UserID']; 
  $UserEmail = $_SESSION['email'];
          
  
  if (isset($_POST['send'])) {
    $username = $_POST['username'];
    $review = $_POST['feedback'];

    $insert = "INSERT INTO `feedback` VALUES ( NULL , '$username' , '$review')";
    $i = mysqli_query($con, $insert);
    if ($i) {
      echo "<div class='alert alert-primary'>
      Feedback Sent Done Successfully!
    </div>";
    } else {
      echo "<div class='alert alert-danger'>
      False
    </div>" . mysqli_error($con);
    }
  }


?>

<title> Feedback </title>

  <br>
  <h1 style="text-align:center; font-family: 'Times New Roman', Times, serif;" class="text-dark"> Feedback </h1>
  <div class="container col-7 mt-5" style="background-color: #f2f2f2;
      padding: 5px 20px 15px 20px;
      border: 1px solid lightgrey;
      border-radius: 3px;">

    <form method="POST">
      <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="text" name="username" class="form-control" id="exampleFormControlInput1">
      </div>


      <div class="form-group">
        <label for="exampleFormControlTextarea1">Write Your Feedback</label>
        <textarea class="form-control" required name="feedback" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <p style="color: gray;">Your feedback is important to us, Make Sure we'll do our best for you.  </p>

      <button type="submit" name="send" class="btn btn-dark btn-block" style="width: 760px;"> Send Your Feedback</button>

  </div>
  </form>
  



  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php
  include './Footer.php';
  ?>

<?php } else {
  echo printmessage("You're Not A User", "danger"); ?>

<title>Feedback</title>

  <style>
    hr.dotted {
      border-top: 3px dotted #bbb;
      width: 400px;
    }
  </style>
  <h1 class="text-center text-info"> You Have To Register First </h1>
  <br>


  <div class="container col-4">
    <p class=" text-info"> Don't have an account? TAP to Sign Up !! </p>
    <a href=".LogIn.php"> <button class="btn btn-outline-info" style="width:400px;" type="submit">Sign Up Now</button> </a>
    <br>
    <br>
    <hr class="dotted">
    <br>
    <p class=" text-info"> If You Have Account Just Tap to LogIn </p>
    <a href="./Sign in.php"> <button class="btn btn-outline-danger" style="width:400px;" type="submit">Log In</button> </a>



  </div>






<?php } ?>