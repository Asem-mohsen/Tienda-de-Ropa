<?php
    ob_start();
include "./UserNav.php";
include "./Connection.php";
include "./bootstrap.php";



if (isset($_SESSION['UserID'])) {
  include "./Connection.php";


  $UserID = $_SESSION['UserID'];
  $UserEmail = $_SESSION['email'];



if(isset($_POST['Confirm'])){

  $UserID = $_SESSION['UserID'];


$Address = $_POST['Address'];
$insert= " INSERT INTO `user-address` Values ($UserID, '$Address')";
$ins =  mysqli_query($con, $insert);

$Phone = $_POST['Phone'];
$AnotherPhone = $_POST['AnotherPhone'];
$insertintophone= "INSERT INTO `user-phone` Values ($UserID, $Phone)";
$inst = mysqli_query($con, $insertintophone);


$CartID= $_GET['CartID'];
$insertintoconf= " INSERT INTO `confirmed` Values ($UserID, $CartID)";
$inser = mysqli_query($con, $insertintoconf);

echo printmessage("Your Order Is being Confirmed, Gracias", "dark");


}

 
if (isset($_GET['Delete'])) {
  $CartID = $_GET['Delete'];
  $Delete = "DELETE FROM `usercart` WHERE CartID = $CartID";
  $f =  mysqli_query($con, $Delete);


if (!$f)  {
  echo printmessage("sorry this order is confirmed you cant delete it", "danger");
}else {
  echo printmessage($f, "Deleted");}
}

$UserID = $_SESSION['UserID'];
$select = " SELECT * FROM `products` WHERE UserID= $UserID";
$s = mysqli_query($con, $select);

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cart</title>

</head>


<body>

<br>
<Br>


<h1 class="text-center text-dark" style="font-family: 'Times New Roman', Times, serif;"> <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>Cart</h1>


<div class="container col-9 mt-3">
  <table class="table">
    <thead class="thead-dark">
      <thead>
        <tr>
          <th scope="col">Product ID</th>
          <th scope="col">Product Name</th>
          <th scope="col">Size</th> 
          <th scope="col">Price</th>
          <th scope="col">Option</th>
        </tr>
      </thead>
      <?php
      $UserID = $_SESSION['UserID'];
  $select = " SELECT * FROM `usercart` WHERE userID= $UserID";
  $s = mysqli_query($con, $select);
  $fetchquery = mysqli_fetch_assoc($s);
  

  
       foreach ($s as $data) {
         $ProductID = $data['ProductID'];
         $JoinProduct = "SELECT usercart.ProductID, products.Name As Name, usercart.Size AS Size, products.price AS price
         FROM products 
         JOIN usercart ON products.ID =$ProductID";


         $ExecuteJoin2 = mysqli_query($con, $JoinProduct);
          $FetchJoin2 = mysqli_fetch_assoc($ExecuteJoin2);
            $ProductName = $FetchJoin2['Name'];
            $ProductPrice = $FetchJoin2['price'];

          ?>


            <th scope="row"> 
              <?php echo $ProductID; ?> </th>
            <td> <?php echo $ProductName?> </td>
            <td> <?php echo $data['Size']; ?> </td>
            <td> <?php echo $ProductPrice; ?> </td>
            <td> <a onclick="return confirm ('Are you Sure')" name="Delete" href="Cart.php?Delete=<?php echo $data['CartID'] ?>" class="btn btn-danger"> Delete </a href="">
            </td>


        </tr>
      <?php } ?>

      </tbody>
    </table>
</div>

<?php
$sum = "SELECT SUM(price) FROM products JOIN usercart on products.ID = usercart.ProductID";
$summ = mysqli_query($con, $sum);

?>


<Br>
<Br>

  <div class="container col-7 mt-5">
    <form method="POST">
      <div class="form-group">
      <div class="form-group">
      <h3 class="text-center" > Your Total Price: <?php echo $summ ?> L.E </h3>
        <label for="exampleFormControlInput1">Address</label>
        <input type="text" required name="Address" class="form-control" id="exampleFormControlInput1" >
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Phone</label>
        <input type="number" required name="Phone" class="form-control" id="exampleFormControlTextarea1"></input>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Another Phone if you have</label>
        <input type="number" name="AnotherPhone" class="form-control" id="exampleFormControlTextarea1"></input>
      </div>
      </div>
             
      <button type="submit" name="Confirm" class=" btn-lg btn-block btn-dark"> Confirm </button>
    </form>
  </div>





<br>
<br>
<br>








<?php
include "./Footer.php";
} else {



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