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
if(isset($_POST['shtouser'])){
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['nr_personal'];
    $telefoni = $_POST['email'];
    $nr_personal = $_POST['telefoni'];
    $adresa = $_POST['adresa'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    shtouser($emri, $mbiemri, $nr_personal, $email, $telefoni, $adresa, $username, $password);
}
?>
<style>
.container {
    width:51%;
  border-radius: 1px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-left:475px;
  margin-top:100px;
}
body {font-family: Arial, Helvetica, sans-serif;
background-color:#f2f2f2;
}
* {box-sizing: border-box;}

input[type=text],[type=email], select, textarea {
  width: 99%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 0px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: black;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 0px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: gray;
}

    </style>
<div class="container">
 <form class="register-form" id="loginForm" method="post">
            <input type="text" placeholder="Emri..." name="emri"><br>
            <input type="text" placeholder="Mbiemri..." name="mbiemri"><br>
            <input type="email" placeholder="Email..." name="email"><br>
            <input type="text" placeholder="Telefoni..." name="telefoni"><br>
            <input type="text" placeholder="Numri personal..." name="nr_personal"><br>
            <input type="text" placeholder="Adresa..." name="adresa"><br>
            <input type="text" placeholder="Username..." id="username" name="username" /><br>
            <input type="password" placeholder="Password..." id="password" name="password" /><br>
           <input type="submit" value="ADD USER" name="shtouser"><br>
</div>
        </form>