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
    <div class="container">
      <center><h3><strong>Car Rental</strong></h3></center>
<div class="row">
  <div class="col-md-7 border-end">
    <form class="" action="" method="post">
    <p><strong>Car ID : </strong></p>
    <p><strong>Car Name : </strong></p>
    <p><strong>Car Description : </strong></p>
    <p><strong>Address : </strong></p>
    <p><strong>User Name :</strong></p>
    <p><strong>User Address :</strong></p>
    <label for=""><strong>From :</strong></label>
    <input type="datetime-local" class="mb-3" name="" value="" id="Date1"><br>
    <label for=""><strong>To :</strong></label>
    <input type="datetime-local" class="mb-3" name="" value="" id="Date2">
    <p><strong>Estimated Price :</strong></p>
    <input type="submit" class="btn btn-sm btn-outline-primary" name="Book" value="Book">
    <input type="button" class="btn btn-sm btn-outline-secondary" name="" value="Back">
    </form>
  </div>
  <div class="col-md-5">
    <img src="../imgs/Vehicle_Images/download.jpg" alt="" style="width:100%;height:350px">
  </div>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
<?php
if (isset($_POST['Book'])) {

}
 ?>
 <script type="text/javascript">
   document.getElementById('Date1').oninput = function(){
     checkInput();
   }
 </script>
