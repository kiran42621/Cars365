<?php require '../dbconfig/config.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
  <body>
    <?php require '../common/UserHeader.php'; ?>
    <div class="container-fluid px-3 pb-3 bg-light">
      <div class="row">
    <?php
      $query = "SELECT * FROM vehicles WHERE Status = 'Available'";
      $query_solution = mysqli_query($con, $query);
      if($query_solution){
        while ($row = mysqli_fetch_array($query_solution)) {
          ?>
      <!--Car Ads-->

          <div class="col-md-4 mt-3">
            <div class="card" style="width: auto;">
  <img src="../imgs/Vehicle_Images/<?php echo $row['Photo']?>" class="card-img-top card-image" alt="..." style="height:13rem">
  <div class="card-body ms-1">
    <h3><?php echo $row['Name'] ?></h3>
    <h5><?php echo $row['Type'] ?></h5>
    <p class="card-text"><?php echo $row['Description'] ?></p>
    <p class="card-text"><?php echo $row['Address'] ?></p>
    <p class="card-text"><strong><?php echo $row['Price'] ?>/- per day</strong></p>
    <button class="btn btn-outline-primary" type="button" name="button">Get</button>
  </div>
</div>
          </div>


        <?php
      }
    }
  ?>
      </div>
      </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
<?php

 ?>
