<?php
// if(isset($_POST['Book'])){
  echo "<script>alert('Working')</script>";
  $BookingId = $_POST['BookingId'];
  $UserId = $_POST['UserId'];
  $Username = $_POST['Username'];
  $CarId = $_POST['CarId'];
  $RentFrom = $_POST['RentFrom'];
  $EstReturn = $_POST['EstReturn'];
  $EstPrice = $_POST['EstPrice'];
  $Paid = $_POST['Paid'];
  $Balance = $_POST['Balance'] - $_POST['hidden_advPrice'];

  $query = "INSERT INTO booking VALUES ('','$BookingId','$UserId','$Username','$CarId','$RentFrom','$EstReturn','','$EstPrice','$Paid','$Balance','','Booked','Partial')";
  //$query_solution = mysqli_query($con, $query);
  echo $query;
// }
?>
