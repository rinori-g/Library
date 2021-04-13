<?php include_once('includes/functions.php'); ?>
<?php include_once('includes/header1.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Biblioteka</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://use.fontawesome.com/3ca95fdef9.js"></script>
    <style>
        .errors{
            color: red;
            font-size: 12px;
            float: left;
            margin-left: 30px;
            margin: -12px 0px -12px 30px;
        }
    </style>
</head>

<?php
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    login($username, $password);
}
?>
<body>
    <div class="login-page">
<img src="images/foto2.jpg" alt="Foto" id="img1" style="width:100%; height:100%; margin-top:-18px;">

<div class="login">

        <h1 style="color: black; margin-left:160px; margin-top:5px;" >Login</h1>
        
        <p class="errors" style="margin-bottom: 5px;"></p>
        <form class="login-form" id="loginForm" method="post">
            <input type="text" placeholder="username" id="username" name="username"/>
            <p id="usernameMessage" class="errors"></p>
            <div style="clear: both;"></div>
            <input type="password" placeholder="password" id="password" name="password"/>
            <p id="passwordMessage" class="errors"></p>
            <div style="clear: both;"></div>
            <p style="margin-right: 25px;float:right; font-size:17px;">Nuk keni akoma account?<span><a style="color: black;text-decoration:underline;padding-left:10px" href="register.php">Regjstrohu</a></span></p>
            <input type="submit" value="login" name="login">
        </form>
    </div>

</div>
<script src="js/jQuery.js"></script>
    <script>
        $(document).ready(function(){
            $("#loginForm").submit(function(){
                var username = $("#username").val();
                var password = $("#password").val();
                var errors = false;
                if(username == ""){
                    $("#usernameMessage").html("Ju lutem shkruani username-in!");
                    errors = true;
                }else{
                    $("#usernameMessage").html("");
                    errors = false;
                }
                if(password == ""){
                    $("#passwordMessage").html("Ju lutem shkruani password-in!");
                    errors = true;
                }else{
                    $("#passwordMessage").html("");
                    errors = false;
                }
                if(errors){
                    return false;
                }else{
                    return true;
                }
            });
        });
    </script>
</body>

</html>
