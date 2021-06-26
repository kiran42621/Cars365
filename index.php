<?phprequire 'dbconfig/config.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'common/Header.php'; ?>
    <!--Carousel-->
      <div class="container-fluid pt-2">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/Carousel1.gif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/Carousel2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/Carousel3.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
      </div>
      <hr>
      <!--Car Ads-->
      <div class="container-fluid px-3 pb-3 bg-light">
        <div class="row">
          <div class="col-4">
            <div class="card" style="width: auto;">
  <img src="imgs/car1.jpg" class="card-img-top card-image" alt="...">
  <div class="card-body ms-1">
    <h3>Car Name</h3>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button class="btn btn-outline-primary" type="button" name="button">Get</button>
  </div>
</div>
          </div>
          <div class="col-4">
            <div class="card" style="width: auto;">
  <img src="imgs/car2.jpg" class="card-img-top card-image" alt="...">
  <div class="card-body ms-1">
    <h3>Car Name</h3>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button class="btn btn-outline-primary" type="button" name="button">Get</button>
  </div>
</div>
          </div>
          <div class="col-4">
            <div class="card" style="width: auto;">
<img src="imgs/car3.jpg" class="card-img-top card-image" alt="...">
<div class="card-body me-1">
  <h3>Car Name</h3>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <button class="btn btn-outline-primary" type="button" name="button">Get</button>
</div>
</div>
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
<?php

 ?>
