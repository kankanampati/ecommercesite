<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, intial-scale="1.0">
  <title>Index</title>
</head>
<body>

<div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
              <h1>E-Commerce Store</h1>
            </div>


  <div class="container mt-5">
   <div class="row">
    <div class="col-lg-3">
    <form action="manage_cart.php" method="POST">
     <div class="card">
      <img src="images/1.jpeg" alt="" width="400" height="200" class="card-img-top">
       <div class="card-body text-center">
        <p><a href="index1.php">Clickhere>></a>
       </div>
      </div>
     </form>
    </div>  
    <div class="col-lg-3">
    <form action="manage_cart.php" method="POST">
     <div class="card">
      <img src="images/dell1.jpg"  alt="" width="400" height="200"class="card-img-top">
       <div class="card-body text-center">
       <p><a href="index2.php">Clickhere>></a>
       </div>
      </div>
     </form>
    </div>  
   <div class="col-lg-3">
    <form action="manage_cart.php" method="POST">
     <div class="card">
      <img src="images/all.jpg" alt="" width="400" height="200" class="card-img-top">
       <div class="card-body text-center">
       <p><a href="index3.php">Clickhere>></a>
       </div>
      </div>
     </form>
    </div>  
    <div class="col-lg-3">
    <form action="manage_cart.php" method="POST">
     <div class="card">
      <img src="images/all1.webp"  alt="" width="400" height="200"class="card-img-top">
       <div class="card-body text-center">
       <p><a href="index3.php">Clickhere>></a>
       </div>
      </div>
     </form>
    </div>  
 </div>
 <br>
 <br>
 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 2">></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="active" aria-current="true" aria-label="Slide ">></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/iphone12.jpg" class="d-block w-100" alt="..." height="200">
    </div>
    <div class="carousel-item">
      <img src="images/predator2.jpg" class="d-block w-100" alt="..." height="200">
    </div>
    <div class="carousel-item">
      <img src="images/x12.png" class="d-block w-100" alt="..." height="200">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</body>
</html>