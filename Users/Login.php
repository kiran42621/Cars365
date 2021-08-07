<?php
session_start();
require '../dbconfig/config.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
  <body>
    <?php require '../common/Header.php'; ?>
    <!-- Login -->
    <div class="container-fluid login-wrapper">
      <div class="row">
        <div class="col-6">

        </div>
        <div class="col-6 pt-5 " style="margin-top:8rem">
          <form action="Login.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <p>Don't have an Account? <a href="Signup.php">Sign up here</a></p>
    <p>Forgot Password? <a href="#">Click here</a></p>
  </div>
  <button type="submit" name="login_btn" class="btn btn-primary">Submit</button>
</form>
        </div>
      </div>
    </div>
    <audio id="myAudio">
  <source src="../Audio/myAudio.ogg" type="audio/ogg">
  <source src="../Audio/myAudio.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<span id="sample"></span>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
<script type="text/javascript">
function playAudio(){
  // alert("Hello");
  // var audio = new Audio('myAudio.mp3');
  // audio.play();
window.alert("Hello");
 var x = document.getElementById("myAudio");
 x.play()
}
</script>
<?php
if(isset($_POST['login_btn'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users WHERE Email='$email' AND Password='$password'";
  $query_Solution = mysqli_query($con, $query);

  $_SESSION['userdata'] = array();
  try{

  if(mysqli_num_rows($query_Solution) > 0){
    $row = mysqli_fetch_array($query_Solution);
    // $_SESSION['cust_id'] = $row['User_ID'];
    // $_SESSION['cust_mail'] = $email;
    $_SESSION['userdata']=$row;
    // echo "<script>document.getElementById('sample').innerHTML=$data['User_ID'];</script>";
    printf($_SESSION['userdata'][1]);
    header('location:Home.php');

  }
  else{
    // echo'<script type="text/javascript"> alert("Yaaro Neenu")</script>';
    echo"<script type='text/javascript'> alert('Check Username And Password') </script>";
  }
  }
  catch(Exception $e){
        echo 'Message: ' .$e->getMessage();
      }
}
?>
<script>
	if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
