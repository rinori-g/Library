<?php 
use App\Lib\Kontakti;


require('autoloader.php');


?>
<?php include_once('includes/header1.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script> 
            function ValidimContact() { 
                var firstname =  
                    document.forms["RegForm"]["firstname"]; 
                var lastname =  
                    document.forms["RegForm"]["lastname"]; 
				var country =  
                    document.forms["RegForm"]["country"]; 
                var numer =  
                    document.forms["RegForm"]["phone"]; 
                var email =  
                    document.forms["RegForm"]["email"]; 
                var subject =  
                    document.forms["RegForm"]["subject"]; 
            
                if (firstname.value == "") { 
                    window.alert("Please enter your firstname."); 
                    firstname.focus(); 
                    return false; 
                } 
  
                if (lastname.value == "") { 
                    window.alert("Please enter your lastname."); 
                    lastname.focus(); 
                    return false; 
                } 
  
                if (country.value == "") { 
                    window.alert( 
                      "Please enter a valid country."); 
                    country.focus(); 
                    return false; 
                } 
  
                if (numer.value == "") { 
                    window.alert( 
                      "Please enter your telephone number."); 
                    phone   .focus(); 
                    return false; 
                } 
  
                if (email.value == "") { 
                    window.alert("Please enter your email"); 
                    email.focus(); 
                    return false; 
                } 
  
                if (subject.value == "") { 
                    window.alert("Please enter a subject"); 
                    subject.focus(); 
                    return false; 
                } 
  
                return true; 
            } 
        </script> 
<style>
body {font-family: Arial, Helvetica, sans-serif;
background-color:#f2f2f2;
}
* {box-sizing: border-box;}

input[type=text], select, textarea {
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

.container {
    width:51%;
  border-radius: 0px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<?php


$kontakt = new Kontakti;

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    
    $kontakt->kontakto($firstname,$lastname,$country,$phone,$email,$subject);
}

?>
<body>

<h3 style="margin-left:20px; border-right:1px solid black; border-left:1px solid black;">Contact Us</h3>

<div class="container">
<form name="RegForm" action="contact.php" onsubmit="return ValidimContact()" method="post"> <br><br>
    <label for="fname">First Name</label><br>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>

    <label for="lname">Last Name</label><br>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>

    <label for="country">Country</label><br>
    <select id="country" name="country"><br>
      <option value="Kosova">Kosovo</option><br>
      <option value="alb">Albania</option><br>
      <option value="Germany">Germany</option><br>
      <option value="Germany">USA</option><br> 
      <option value="Germany">Austria</option><br>
      <option value="Germany">Italy</option><br>
      <option value="Germany">Other..</option><br>
    </select><br>
    <label for="lname">Phone Number</label><br>
    <input type="text" id="lname" name="phone" placeholder="Your Phone Number.."><br>
    <label for="lname"> Email Adress</label><br>
    <input type="text" id="lname" name="email" placeholder="Your Email Adress.."><br>


    <label for="subject">Subject</label><br>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea><br>
    <button type="submit" name="submit" >Submit</button>

    
  </form>
  
</div>

 </div>
 
</body>
</html>
<?php include_once('includes/footer.php'); ?>
