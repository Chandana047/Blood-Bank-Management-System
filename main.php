<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Blood Bank Management System | home page"; ?>
<?php require 'head.php'; ?>
<head>
  <title></title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Blood Bank Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="index.php">Login/Register<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/slide-1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/cc1.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/blog-4.png" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="image/about1.png" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
      <h2>BLOOD - "I'm here to save you!"</h2>
      <p class="py-3">We believe Every life counts!, Every life matters. Time is the thing we have and don't. Our goal is to make blood available in less time and save your precious life!</p>
      <a href="about.php"> </a> 
      </div>
    </div>
  </div>
</section>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div>
  <p class="text-center bg-dark text-white">Chandana GV - +91-9902477354, gchandana7799@gmail.com<br>Rithish Reddy - +91-9380073437, rithishreddy7007@gmail.com<br>Jasti SriHarsha - +91-9110342158, sri814823@gmail.com<br>Balaji Subhash - +91-7036739735, gbalajisubash@gmail.com<br>Bhaskar SaiRam - +91-8374827408, k.bsairam1210@gmail.com</p>
  <a href="contact.html"> </a>
  </div>
</section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <?php require 'footer.php'; ?>
</body>
</html>