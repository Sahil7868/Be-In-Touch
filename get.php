<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>

<nav class="w3-sidenav w3-light-grey w3-animate-left" style="display:none;z-index:5" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-closenav w3-large">Menu &times;</a>
  <a class="w3-indigo" href="userdis.php">Users</a>
  <a href="payment.php">Payment</a>
  <a href="cardis.php">Car Display</a>
  <a href="carcustdis.php">Car Customers</a>
  <a href="cartypedis.php">Types Of Car</a>
  <a href="buscustdis.php">Bus Customers</a>
   <a href="busdisplay.php">Bus Display</a>
  <a href="canceldis.php">Cancel Display</a>
  <a href="citydis.php">City Display</a>
  <a href="facilitydis.php">Facility Display</a>
  <a href="feeddis.php">Feedbacks</a>
  <a href="driverdis.php">Driver Display</a>
  <a href="picturedisplay.php">Picture Display</a>
</nav>

<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-container">
  <span class="w3-opennav w3-xxlarge" onclick="w3_open()">&#9776;</span>
  
</div>  
     
<script>
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
          
</body>
</html>
