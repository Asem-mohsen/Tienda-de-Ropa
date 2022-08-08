<?php
ob_start();

include "./Connection.php";
include "./bootstrap.php";
include "./UserNav.php";



if (isset($_SESSION['UserID'])) {
  $UserID = $_SESSION['UserID'];
  $UserEmail = $_SESSION['email'];

  $select = "SELECT CartID FROM `usercart`";
  $en = mysqli_query($con, $select);
  
if (isset($_POST['Pay'])) {
  $ProductID = $_GET['ProductID'];
  $Size = $_POST['Size'];
  $insert = "INSERT INTO `usercart` VALUES ( NULL , $UserID , $ProductID, '$Size' )";
  $i = mysqli_query($con, $insert);
  


  header("location:./Cart.php");

}


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Order</title>

  <style> 
.card-img-top{width:max-content;
height: 400px;
padding-left: 490px;
padding-top: 90px;}



</style>
</head>


</body>


  <div class="card mb-3">
  <img src="./camis.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Shirt</h5>
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a magna quam. Pellentesque consequat ex a libero molestie lacinia. Fusce elementum mi ligula. Sed massa magna, rhoncus vel accumsan at, consequat in arcu. Integer sit amet urna vitae magna placerat ultrices. Phasellus maximus dui id dolor condimentum tempor. Sed sed metus mattis, sollicitudin ex accumsan, lacinia ex. Vivamus sed leo enim. Integer eget elit condimentum, fringilla lacus id, tristique diam. Quisque ac metus sem. Proin porta fermentum pretium. Nullam hendrerit feugiat nulla et fermentum.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
<br>
<br>




<h1 class="text-center text-dark" style="font-family: 'Times New Roman', Times, serif; padding-top: 20px;">Create Your Own Style</h1>
  <div class="container col-7 mt-5">
    <form method="POST">
      <div class="form-group">
        <label for="exampleFormControlSelect1"> Choose Your Size</label>
        <select class="form-control" required name="Size" id="exampleFormControlSelect1">
          <option>Xsmall</option>
          <option>Small</option>
          <option>Medium</option>
          <option>Large</option>
          <option>Xlarge</option>
          <option>XXlarge</option>
        </select>
        
      </div>
      
      <?php foreach($en as $data){ ?>
      <button type="submit" name="Pay" class=" btn-lg btn-block btn-dark"><a href="./Cart.php?CartID=<?php echo $data['CartID'] ?>"> Add To Cart </a> </button>
  <?php }?>   
    </form>
  </div>
  <?php
  include "./Footer.php";
  ?>
  <?php } else {



echo printmessage("You're Not A User", "danger"); ?>

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
  <a href="./Sign in.php"> <button class="btn btn-outline-info" style="width:400px;" type="submit">Sign Up Now</button> </a>
  <br>
  <br>
  <hr class="dotted">
  <br>
  <p class=" text-info"> If You Have Account Just Tap to LogIn </p>
  <a href="./LogIn.php"> <button class="btn btn-outline-danger" style="width:400px;" type="submit">Log In</button> </a>



</div>


<?php } ?>
</body>

</html>

