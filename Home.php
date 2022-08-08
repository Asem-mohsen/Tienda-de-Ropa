<?php
include "./bootstrap.php";
include "./UserNav.php";
include "./Connection.php";

if (isset($_SESSION['UserID'])) {
  include "./Connection.php";
  include "./bootstrap.php";





?>


  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Asem Tienda</title>
    <style>
      body {
        background-image: url("background.jpg");


        background: linear-gradient(rgba(255, 255, 255, 0.5), rgba(0, 0, 0, 0.5)), url(background.jpg);
      }

      .carouselExampleCaptions.img {
        width: 100%;
        height: 20vw;
        object-fit: contain;
      }

      ;

      .card-img-top {
        width: 100%;
        height: 20vw;
        object-fit: contain;
      }
    </style>
  </head>


  <body>


    <br>
    <br>
    <h1 class="text-center" style="font-family: Arial, Helvetica, sans-serif;"> Asoum Store </h1>
    <br>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./Images/shop for him.jpg" class="d-block w-100" alt="Men style">
          <div class="carousel-caption d-none d-md-block">
            <h5>Men Style</h5>
            <p>Take a look for our latest <a href="./Products.php"> Men Collection</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./Images/Shop for her.jpg" class="d-block w-100" alt="women fashion">
          <div class="carousel-caption d-none d-md-block">
            <h5>Women style</h5>
            <p>Take a look for our <a href="./Products.php"> latest Women collection </a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./Kids cover.jpg" class="d-block w-100" alt="kids fashion">
          <div class="carousel-caption d-none d-md-block">
            <h5>For Your Kids</h5>
            <p>Choose Your <a href="./Products.php"> Kids outfit </a> make thier looks great. </p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>


    <div class=" card text-white card mb-3" style="margin: 10%; background-color: transparent;">
      <img class="card-img-top" src="./Images/shop for him.jpg" alt="Men Style">
      <div class="card-body">
        <h5 class="card-title">Men Style</h5>
        <p class="card-text">See our New Collections From ASOUM Tiende, Changing your style will change your life. </p>
        <p class="card-text"><small class="text-muted">Last updated 2 days ago </small></p>
      </div>
    </div>

    <BR>


    <div class="card text-white card mb-3" style="margin: 10%; background-color: transparent;">
      <img class="card-img-top" src="./Images/shop for him.jpg" alt="Women Style">
      <div class="card-body">
        <h5 class="card-title">Women Style</h5>
        <p class="card-text">See our New Collections From ASOUM Tiende, Changing your style will change your life. </p>
        <p class="card-text"><small class="text-muted">Last updated 2 days ago </small></p>
      </div>
    </div>

    <br>



    <div class=" row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body" style="background-color:lavender">
            <h5 class="card-title"> 50% Discount !!</h5>
            <p class="card-text">Since we celebrate with our customers, 50% prescent offer in many of our products</p>
            <a href="#" class="btn btn-outline-dark">Discount</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card" style="background-color:lavender">
          <div class="card-body">
            <h5 class="card-title"> Our New Collection</h5>
            <p class="card-text">It was realeased this month, let's see what style will fit you perfectly</p>
            <a href="#" class="btn btn-outline-dark">New Collection</a>
          </div>
        </div>
      </div>
    </div>


    <br>
    <br>

    <div class="card-deck">
      <div class="card" style="background-color: transparent;">
        <img class="card-img-top" src="./Images/Winter.jpg" alt="Winter style">
        <div class="card-body">
          <h5 class="card-title">Winter Collection</h5>
          <p class="card-text">Fashionable Winter Clothes, Stylish Winter Clothing like Sweaters, Fur jackets, Denim Coats made from Winter Clothing Materials like Wool</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card" style="background-color: transparent;">
        <img class="card-img-top" src="./Images/Summer.jpg" alt="Summer style">
        <div class="card-body">
          <h5 class="card-title">Summer Collection</h5>
          <p class="card-text">From denim shorts and crop tops, to swirly-twirly sundresses, to rocking a bathing suit and a cover-up over the next few months, see our last summer outfits</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card" style="background-color: transparent;">
        <img class="card-img-top" src="./Images/Kids style.jpg" alt="Kids style">
        <div class="card-body">
          <h5 class="card-title">Kids Style</h5>
          <p class="card-text">New born to 16 years old teenagers from the clothes to the smallest thing the baby needs you'll find the most comfy zone for your baby.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <br>


    <br>
    <br>
    <br>


    <br>
    <br>
    <br>


    <br>
    <br>
  </body>


  </html>


<?php
  include "./Footer.php";
} else { ?>


  <title>Asem Tienda de Ropa</title>

  <style>
    body {
      background-image: url("background.jpg");


      background: linear-gradient(rgba(255, 255, 255, 0.5), rgba(0, 0, 0, 0.5)), url(background.jpg);
    }

    .carouselExampleCaptions.img {
      width: 100%;
      height: 20vw;
      object-fit: contain;
    }

    ;

    .card-img-top {
      width: 100%;
      height: 20vw;
      object-fit: contain;
    }
  </style>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown" style="padding-left: 40px;">
      <ul class="navbar-nav">
        <a class="navbar-brand" style="font-family:'Times New Roman', Times, serif;" href="#">ASEM</a>

        <li class="nav-item active">

          <a class="nav-link" href="./Home.php">Home <span class="sr-only">(current)</span></a>
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
  <br>
  <h1 class="text-center" style="font-family: Arial, Helvetica, sans-serif;"> Asoum Store </h1>
  <br>
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./shop for him.jpg" class="d-block w-100" alt="Men style">
        <div class="carousel-caption d-none d-md-block">
          <h5>Men Style</h5>
          <p>Take a look for our latest <a href="./Products.php"> Men Collection</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./Shop for her.jpg" class="d-block w-100" alt="women fashion">
        <div class="carousel-caption d-none d-md-block">
          <h5>Women style</h5>
          <p>Take a look for our <a href="./Products.php"> latest Women collection </a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./Kids cover.jpg" class="d-block w-100" alt="kids fashion">
        <div class="carousel-caption d-none d-md-block">
          <h5>For Your Kids</h5>
          <p>Choose Your <a href="./Products.php"> Kids outfit </a> make thier looks great. </p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>


  <div class=" card text-white card mb-3" style="margin: 10%; background-color: transparent;">
    <img class="card-img-top" src="./shop for him.jpg" alt="Men Style">
    <div class="card-body">
      <h5 class="card-title">Men Style</h5>
      <p class="card-text">See our New Collections From ASOUM Tiende, Changing your style will change your life. </p>
      <p class="card-text"><small class="text-muted">Last updated 2 days ago </small></p>
    </div>
  </div>

  <BR>


  <div class="card text-white card mb-3" style="margin: 10%; background-color: transparent;">
    <img class="card-img-top" src="./shop for her.jpg" alt="Women Style">
    <div class="card-body">
      <h5 class="card-title">Women Style</h5>
      <p class="card-text">See our New Collections From ASOUM Tiende, Changing your style will change your life. </p>
      <p class="card-text"><small class="text-muted">Last updated 2 days ago </small></p>
    </div>
  </div>

  <br>



  <div class=" row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body" style="background-color:lavender">
          <h5 class="card-title"> 50% Discount !!</h5>
          <p class="card-text">Since we celebrate with our customers, 50% prescent offer in many of our products</p>
          <a href="./Products.php" class="btn btn-outline-dark">Discount</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card" style="background-color:lavender">
        <div class="card-body">
          <h5 class="card-title"> Our New Collection</h5>
          <p class="card-text">It was realeased this month, let's see what style will fit you perfectly</p>
          <a href="./Products.php" class="btn btn-outline-dark">New Collection</a>
        </div>
      </div>
    </div>
  </div>


  <br>
  <br>
  <div class="card-deck">
    <div class="card" style="background-color: transparent;">
      <img class="card-img-top" src="./Winter.jpg" alt="Winter style">
      <div class="card-body">
        <h5 class="card-title">Winter Collection</h5>
        <p class="card-text">Fashionable Winter Clothes, Stylish Winter Clothing like Sweaters, Fur jackets, Denim Coats made from Winter Clothing Materials like Wool</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card" style="background-color: transparent;">
      <img class="card-img-top" src="./Summer.jpg" alt="Summer style">
      <div class="card-body">
        <h5 class="card-title">Summer Collection</h5>
        <p class="card-text">From denim shorts and crop tops, to swirly-twirly sundresses, to rocking a bathing suit and a cover-up over the next few months, see our last summer outfits</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card" style="background-color: transparent;">
      <img class="card-img-top" src="./Kids style.jpg" alt="Kids style">
      <div class="card-body">
        <h5 class="card-title">Kids Style</h5>
        <p class="card-text">New born to 16 years old teenagers from the clothes to the smallest thing the baby needs you'll find the most comfy zone for your baby.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
  <br>


  <br>
  <br>
  <br>


  <br>
  <br>
  <br>


  <br>
  <br>
<?php
  include "./Footer.php";
} ?>
</body>

</html>