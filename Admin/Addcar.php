<?php require '../dbconfig/config.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/style.css?v=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
  <body>
    <?php require '../Common/AdminHeader.php'; ?>
    <form class="" action="Addcar.php" method="post" enctype="multipart/form-data">
    <div class="container border py-3 my-3" style="width:50%;">
                      <center>
        <h2><strong>Add Car</strong></h2>
      </center>
      <div class="row col-md-11 ps-5 mb-3">
        <div class="col">
          <label for="" class="form-label">Name</label>
          <input type="text" class="form-control" name="Name" value="">
        </div>
      </div>
      <div class="row col-md-11 ps-5 mb-3">
        <div class="col">
          <label for="" class="form-label">Car Type</label>
          <input type="text" class="form-control" name="Type" value="">
        </div>
      </div>
      <div class="row col-md-11 ps-5 mb-3">
        <div class="col">
          <label for="" class="form-label">Photo</label>
          <input type="file" class="form-control" name="Image" value="">
        </div>
      </div>
      <div class="row col-md-11 ps-5 mb-3">
        <div class="col">
          <label for="" class="form-label">Description</label>
          <input type="textarea" class="form-control" name="Description" value="">
        </div>
      </div>
      <div class="row col-md-11 ps-5 mb-3">
        <div class="col">
          <label for="" class="form-label">Address</label>
          <input type="textarea" class="form-control" name="Address" value="">
        </div>
      </div>
      <div class="row col-md-11 ps-5 mb-3">
        <div class="col">
          <label for="" class="form-label">Price</label>
          <input type="text" class="form-control" name="Price" value="">
        </div>
      </div>
      <div class="row col-md-11 ps-5 mb-3">
        <div class="col">
          <input type="submit" class="btn btn-outline-primary" name="btn-Add" value="Add">
        </div>
      </div>
    </div>
  </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
<?php
  if (isset($_POST['btn-Add'])) {
    // echo "<script>alert('Clicked')</script>";
    $name = $_POST['Name'];
    $type = $_POST['Type'];
    $description = $_POST['Description'];
    $address = $_POST['Address'];
    $price = $_POST['Price'];

    $image_name = $_FILES['Image']['name'];
  	$tmp_name = $_FILES['Image']['tmp_name'];
  	$folder= "../imgs/Vehicle_Images/$image_name";
  	move_uploaded_file($tmp_name, "../imgs/Vehicle_Images/$image_name");

    $query = "INSERT INTO vehicles values ('','$name','$type','$image_name','$description','$address','$price','Available')";
    $query_Solution = mysqli_query($con, $query);
    if ($query_Solution) {
      echo "<script>alert('Car Added')</script>";
    }
    else{
      echo "<script>alert('Error Occured')</script>";
    }
  }
 ?>
