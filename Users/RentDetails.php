<?php require '../dbconfig/config.php';
session_start();
$id = $_GET['hidden_id'];
$query = "SELECT * FROM vehicles WHERE ID = '$id'";
$query_solution = mysqli_query($con, $query);
$_SESSION['cardata'] = array();
$row = mysqli_fetch_assoc($query_solution);
$_SESSION['cardata'][] = $row;
?>
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
    <form class="" action="payment.php" method="post">
    <input type="hidden" name="hidden_Rate" id="hidden_Rate" value="<?php echo $_SESSION['cardata'][0]['Price'];?>">
    <p><strong>Car ID : <?php echo $_SESSION['cardata'][0]['ID'];?></strong></p>
    <p><strong>Car Name : <?php echo $_SESSION['cardata'][0]['Name'];?></strong></p>
    <p><strong>Car Description : <?php echo $_SESSION['cardata'][0]['Description'];?></strong></p>
    <p><strong>Address : <?php echo $_SESSION['cardata'][0]['Address'];?></strong></p>
    <p><strong>User Name : <?php echo $_SESSION['userdata'][1];?></strong></p>
    <p><strong>User Address : <?php echo $_SESSION['userdata'][4];?></strong></p>
    <label for=""><strong>From :</strong></label>
    <input type="datetime-local" class="mb-3" name="RentFrom" value="" id="Date1"><br>
    <label for=""><strong>To :</strong></label>
    <input type="datetime-local" class="mb-3" name="" value="EstReturn" id="Date2" onchange="calculateTime()">
    <p><strong>Estimated Price : <span id="estPrice"></span> /-</strong></p>
    <p><strong>Advance to be paid : <span id="advPrice"></span> /-</strong></p>
    <input type="button" id="rzp-button1" class="btn btn-sm btn-outline-primary" name="Book" value="Book" onclick="runThis()">
    <input type="button" class="btn btn-sm btn-outline-secondary" name="" value="Back">
    <input type="hidden" id="hidden_estPrice" name="" value="">
    <input type="hidden" id="hidden_advPrice" name="" value="">
    <input type="hidden" id="hidden_payment_id" name="" value="">
    </form>
    <script type="text/javascript">


      function calculateTime(){
        const time1 = new Date(document.getElementById("Date1").value);
        const time2 = new Date(document.getElementById("Date2").value);
        const timeDiff = Math.abs(time1.getTime() - time2.getTime());
        const daysDiff = Math.ceil(timeDiff / (1000 * 60 * 60 * 24));
        var estiPrice = daysDiff * Number(document.getElementById("hidden_Rate").value);
        var adviPrice = (daysDiff * Number(document.getElementById("hidden_Rate").value)) / 10;
        document.getElementById("estPrice").innerHTML = estiPrice;
        document.getElementById("advPrice").innerHTML = adviPrice;
        document.getElementById("estPrice").value = estiPrice;
        document.getElementById("advPrice").value = adviPrice;
        load();
      }
    </script>
  </div>
  <div class="col-md-5">
    <img src="../imgs/Vehicle_Images/<?php echo $_SESSION['cardata'][0]['Photo'];?>" alt="" style="width:100%;height:350px">
  </div>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
<?php
$api = "rzp_test_NZZgOqbpFwdGUB";
?>
<!-- <button >Pay</button> -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

function load(){
document.getElementById('rzp-button1').onclick = function(e){
  var options = {
      "key": "<?php echo $api; ?>", // Enter the Key ID generated from the Dashboard
      "amount": document.getElementById("advPrice").value * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
      "currency": "INR",
      "name": "Cars 365",
      "description": "Test Transaction",
      //"image": "https://example.com/your_logo",
      //"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
      "callback_url": "http://127.0.0.1/MyProjects/Cars365/Users/success.php",
      "handler": function (response){
        document.getElementById("hidden_payment_id").value = response.razorpay_payment_id;
       },
      "prefill": {
          "name": "Gaurav Kumar",
          "email": "gaurav.kumar@example.com",
          "contact": "9999999999"
      },
      "notes": {
          "address": "Razorpay Corporate Office"
      },
      "theme": {
          "color": "#3399cc"
      }
  };
  var rzp1 = new Razorpay(options);
  rzp1.on('payment.failed', function (response){
          alert(response.error.code);
          alert(response.error.description);
          alert(response.error.source);
          alert(response.error.step);
          alert(response.error.reason);
          alert(response.error.metadata.order_id);
          alert(response.error.metadata.payment_id);
  });
    rzp1.open();
    e.preventDefault();
}

function run2(){
// $.get("payment.php", { BookingId: $("input.hidden_payment_id").val(),
//           UserId: <?php echo $_SESSION['userdata'][0]; ?>,
//           Username: <?php echo $_SESSION['userdata'][1]; ?>,
//           CarId: <?php echo $_SESSION['cardata'][0]['ID']; ?>,
//           RentForm: $("#RentFrom").val(),
//           EstReturn: $("#EstReturn").val(),
//           EstPrice: $("input.hidden_estPrice").val(),
//           Paid: $("input.hidden_advPrice").val(),
//           Balance: $("input.hidden_estPrice").val(),
//         },function(response){
//        console.log(response);
//    });
}
}
// function runThis(e){
//   alert("Running");
//   run1(e);
//   run2();
// }
</script>

 <script type="text/javascript">
   document.getElementById('Date1').oninput = function(){
     checkInput();
   }


 </script>
