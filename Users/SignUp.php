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
    <?php require '../common/Header.php'; ?>

    <div class="container-fluid login-wrapper">
      <div class="row">
        <div class="col-6">

        </div>
        <div class="col-6 pt-5 " style="margin-top:0rem">
          <div class="container bg-light py-3 rounded">
            <center>
              <h2>Sign Up</h2>
            </center>
            <form class="row g-3" action="SignUp.php" method="post">
              <div class="col-md-6">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputEmail4" name="Name">
              </div>
              <div class="col-md-6">
                <label for="inputEmployeeId" class="form-label">Email ID</label>
                <input type="email" class="form-control" id="inputPassword4" name="Email">
              </div>
              <div class="col-md-6">
                <label for="inputDepartment" class="form-label">Mobile No.</label>
                <input type="number" class="form-control" id="inputEmail4" name="Mobile">
              </div>
              <div class="col-md-6">
                <label for="inputMobile" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputEmail4" name="Address">
              </div>
              <!--- Password Details -->
              <div class="col-6">
                <label for="inputPassword" class="form-label">Enter Password</label>
                <input type="password" class="form-control" id="inputAddress2" name="Pass1">
              </div>
              <div class="col-6">
                <label for="inputRepassword" class="form-label">Re Enter Password</label>
                <input type="password" class="form-control" id="inputAddress2" name="Pass2">
              </div>
              <div class="col-6">
                <label for="inputFuturePlans" class="form-label">Password Recovery Question 1</label>
                <label class="visually-hidden" for="RecoveryQuestion1">Preference</label>
                <select class="form-select" id="autoSizingSelect" name="PQ1">
                  <option selected>Choose...</option>
                  <option value="What is the name of your first pet?">What is the name of your first pet?</option>
                  <option value="Which is your favourite car?">Which is your favourite car?</option>
                  <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                  <option value="What is the name of your favorite childhood friend?">What is the name of your favorite childhood friend?</option>
                  <option value="What school did you attend for sixth grade?">What school did you attend for sixth grade?</option>
                </select>
                <input type="text" class="form-control" id="inputAddress2" name="PA1">
              </div>
              <div class="col-6">
                <label for="inputFuturePlans" class="form-label">Password Recovery Question 2</label>
                <label class="visually-hidden" for="RecoveryQuestion2">Preference</label>
                <select class="form-select" id="autoSizingSelect" name="PQ2">
                  <option selected>Choose...</option>
                  <option value="What is the name of your first pet?">What is the name of your first pet?</option>
                  <option value="Which is your favourite car?">Which is your favourite car?</option>
                  <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                  <option value="What is the name of your favorite childhood friend?">What is the name of your favorite childhood friend?</option>
                  <option value="What school did you attend for sixth grade?">What school did you attend for sixth grade?</option>
                </select>
                <input type="text" class="form-control" id="inputAddress2" name="PA2">
              </div>
  						<p>Already have account ? <a href="Login.php">Login Here</a></p>
              <div class="col-12">
                <button type="submit" class="btn btn-primary" name="btn-submit" >Sign up</button>
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
<?php
  if (isset($_POST['btn-submit'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $mobile = $_POST['Mobile'];
    $address = $_POST['Address'];
    $pass1 = $_POST['Pass1'];
    $pass2 = $_POST['Pass2'];
    $PQ1 = $_POST['PQ1'];
    $PA1 = $_POST['PA1'];
    $PQ2 = $_POST['PQ2'];
    $PA2 = $_POST['PA2'];
    if ($pass1 == $pass2) {
      $query = "SELECT * FROM users WHERE Email = '$email'";
      $query_solution = mysqli_query($con, $query);
      if (mysqli_fetch_array($query_solution) > 0) {
        echo "<script>alert('Email already exists')</script>";
      }
      else{
        $querys = "INSERT INTO users VALUE ('','$name','$email','$mobile','$address','$pass1','$PQ1','$PA1','$PQ2','$PA2','Active')";
        $query_solutions = mysqli_query($con, $querys);
        if ($query_solutions) {
          echo "<script>alert('User Registered')</script>";
        }
        else {
          echo "<script>alert('Error Occured')</script>";
        }
      }
    }
    else {
      echo "<script>alert('Both the password should same...!')</script>";
    }
  }
 ?>
