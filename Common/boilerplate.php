<?phprequire 'dbconfig/config.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/style.css?v=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'Header.php'; ?>
    <!-- Sign up -->
    <div class="container-fluid Signup-wrapper">
      <div class="row">
        <div class="col-6">

        </div>
        <div class="col-6 pt-4 " >
          <form>
            <div class="row">
              <div class="col-6">
                <div class="mb-3">
                  <label for="" class="form-label">First Name</label>
                  <input type="text" name="Fname" class="form-control" value="">
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label for="" class="form-label">Last Name</label>
                  <input type="text" name="Fname" class="form-control" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="mb-3">
                  <label for="" class="form-label">Mobile Number</label>
                  <input type="number" name="Mnumber" class="form-control" value="">
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label for="" class="form-label">Date Of Birth</label>
                  <input type="date" class="form-control" name="" value="">
                  </div>
              </div>
            </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="row">
    <div class="col-6">
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
    </div>
    <div class="col-6">
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Re enter Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
      <label for="inputFuturePlans" class="form-label">Password Recovery Question 1</label>
      <label class="visually-hidden" for="RecoveryQuestion2">Preference</label>
      <select class="form-select" id="autoSizingSelect">
        <option selected>Choose...</option>
        <option value="1">What is the name of your first pet?</option>
        <option value="2">Which is your favourite car?</option>
        <option value="3">What was your childhood nickname?</option>
        <option value="4">What is the name of your favorite childhood friend?</option>
        <option value="5">What school did you attend for sixth grade?</option>
      </select>
      <input type="text" class="mt-1 form-control" id="inputAddress2">
    </div>
    <div class="col-6">
      <label for="inputFuturePlans" class="form-label">Password Recovery Question 2</label>
      <label class="visually-hidden" for="RecoveryQuestion2">Preference</label>
      <select class="form-select" id="autoSizingSelect">
        <option selected>Choose...</option>
        <option value="1">What is the name of your first pet?</option>
        <option value="2">Which is your favourite car?</option>
        <option value="3">What was your childhood nickname?</option>
        <option value="4">What is the name of your favorite childhood friend?</option>
        <option value="5">What school did you attend for sixth grade?</option>
      </select>
      <input type="text" class="mt-1 form-control" id="inputAddress2">
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-6">
      <label for="" class="form-label">Driving Liscense Number</label>
      <input type="text" class="form-control" name="" value="">
    </div>
    <div class="col-6">
      <label for="" class="form-label">Driving Liscense Number</label>
      <input type="file" class="form-control" name="" value="">
      </div>
  </div>
  <div class="mt-3 mb-3 form-check">
    <p>Already have an Account? <a href="../Login.php">Login here</a></p>
    </div>
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
<?php

 ?>
