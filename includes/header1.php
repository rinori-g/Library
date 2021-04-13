<?php session_start(); ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #8B0000;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
 
  <?php if (isset($_SESSION['userid']) &&  $_SESSION['roli'] == 1) : ?>
  <a href="index.php" class="active">Home</a>
  <a href="books.php">Books</a>
  <a href="huat.php">Borrowings</a>
  <a href="dashboard.php" style="background-color:#8B0000; color:white;"><?php echo $_SESSION['emri'] . " " .$_SESSION['mbiemri']; ?></a>
  <a href="logout.php">Logout</a>
  <?php elseif(isset($_SESSION['userid']) &&  $_SESSION['roli'] == 0) : ?>
  <a href="index.php" class="active">Home</a>
  <a href="books.php">Books</a>
  <a href="about.php">About Us</a>
  <a href="contact.php">Contact</a>
  <a href="logout.php">Logout</a>
  <?php else : ?>
    <a href="index.php" class="active">Home</a>
  <a href="books.php">Books</a>
  <a href="about.php">About Us</a>
  <a href="contact.php">Contact</a>
  <a href="login.php">Login</a>
  <?php endif; ?>


  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
