<?php
include './bootstrap.php';
include './Connection.php';


session_start();

if (isset($_GET['logout'])) {
  session_unset();
  session_destroy();
  header("location: ./Home.php");
}
include './Connection.php';



?>

<html>

<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body>


  <?php if (isset($_SESSION['admin'])) { ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
      <a class="navbar-brand" href="../admin/descadmin.php">Airotel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="../admin/Adminprofile.php"> Profile <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/adminhome.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Control Management system
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="../admin/user.php">Users List</a>
              <a class="dropdown-item" href="../admin/feed.php">Users Feedback</a>
              <a class="dropdown-item" href="../admin/ticket.php">Tickets Booked</a>
              <a class="dropdown-item" href="../admin/flightbookinglist.php">Flights Booked</a>
              <a class="dropdown-item" href="../admin/userask.php">Questions</a>
              <a class="dropdown-item" href="../admin/hotel.php">Hotel Partners</a>
              <a class="dropdown-item" href="../admin/airport.php">AirPorts </a>
              <a class="dropdown-item" href="../admin/country.php">Countries </a>

            </div>
          </li>
        </ul>
      </div>



      <form action="">
        <button name="logout" class="text-white btn"><i style='font-size:24px' class='fas'>&#xf52b; Logout</i>
        </button>
      </form>
    </nav>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  
  <?php } else {
  ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>
<?php } ?>