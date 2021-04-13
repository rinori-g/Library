<?php include_once('includes/functions.php'); ?>
<?php include_once('includes/header1.php'); ?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/style.css">
<head>
    <title>Biblioteka</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://use.fontawesome.com/3ca95fdef9.js"></script>
    <style>
        .errors {
            color: red;
            font-size: 14px;
            float: left;
            margin-left: 30px;
            margin: -12px 0px -12px 30px;
        }
    </style>
</head>
<?php
if(isset($_POST['register'])){
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['nr_personal'];
    $telefoni = $_POST['email'];
    $nr_personal = $_POST['telefoni'];
    $adresa = $_POST['adresa'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    register($emri, $mbiemri, $nr_personal, $email, $telefoni, $adresa, $username, $password);
}
?>
<body>
    <div class="register-page">
       <img src="images/foto2.jpg" alt="Foto" id="img1" style="width:100%; height:130%; margin-top:-18px;">
    
    <div class="register" >
    <h2 style= "margin-left:120px; font-size:30px;color: black;" >Register: </h2>
    
    <form class="register-form" id="loginForm" method="post">
            <input type="text" placeholder="Emri..." name="emri">
            <input type="text" placeholder="Mbiemri..." name="mbiemri">
            <input type="email" placeholder="Email..." name="email">
            <input type="text" placeholder="Telefoni..." name="telefoni">
            <input type="text" placeholder="Numri personal..." name="nr_personal">
            <input type="text" placeholder="Adresa..." name="adresa">
            <input type="text" placeholder="Username..." id="username" name="username" />
            <input type="password" placeholder="Password..." id="password" name="password" />
           <input type="submit" value="Register" name="register">
            <p style="margin-right: 200px;float:right; margin-bottom:1px;color: black;">Keni account?<span style="color: black;"><a
                        style="color: black;text-decoration:none; padding-left:10px"
                        href="login.php">Login</a></span></p>
        </form>
          </div>
</div>
</body>
</html>