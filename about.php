<?php include_once('includes/header1.php'); ?>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<body>
<div class = "about1">
<h1 style="padding-top:67px;" class="col-12">THE LIBRARY</h1>
<h3 class="col-12">We are one of the World's leading research libraries</h3>
</div>
<div class = "about2 col-12" style="padding-top:80px;">
<p class=" offset-lg-4col-6">We are one of World’s leading research libraries and we are primarily available to students, researchers and educators at a lot of Universities.
    <br>Lorem ipsum dolor sit amet consectetur adipisicing elit<br>
       .
</p>
</div>
<br>
<h3 class="offset-lg-4 col-12 offset-1">This is our unique ambient</h3>
<br>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/ambient3.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/ambient1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/ambienti4.jpg" style="width:100%">
 
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1000); // Change image every 3 seconds
}
</script>
<br>
<br>
<div class = "staf">
<div class="about3 col-lg-4 col-12">
<img src="images/person.png" alt="Foto">
<p><a href="#" style="color:black; text-decoration:none;">FOUNDER & CEO</a></p>
</div>
<div class="about3 col-lg-4 col-12">
<img src="images/person.png" alt="Foto">
<p><a href="#" style="color:black; text-decoration:none;">Vice President</a></p>
</div>
<div class="about3 col-lg-4 col-12">
<img src="images/person.png" alt="Foto">
<p><a href="#" style="color:black; text-decoration:none;">  Director of Finance</a></p>
</div>
<div class="about4">
<p><a href="#" style="color:red; text-decoration:none;">More co-workers...</a></p>
</div>
</div>

</body>
<div class="fundi">
<?php include_once('includes/footer.php'); ?>
</div>