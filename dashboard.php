<?php
use App\Lib\Kontakti;
require('autoloader.php');
?>
<?php include_once('includes/header1.php'); ?>
<?php include_once('includes/functions.php'); ?>


<head>
<style>
.kontakt {
  margin-left:395px;
}

.kontakt th, td {
  padding: 5px;
  text-align: center;    
}

.kontakt table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<h2>ADMIN PANEL</h2>
<?php if (isset($_SESSION['userid']) &&  $_SESSION['roli'] == 1) : ?>
    <h2 style="position:absolute; color:black; margin-top:57px; margin-left:871px;">ADMIN PANEL</h2>

<table style="width:780px; margin-left:575px; margin-top:110px;">
  <tr>
    <td>Emri:</td>
    <td> <?php echo $_SESSION['emri']?></td>

  </tr>
  <tr>
  <td> Mbiemri</td>

    <td> <?php echo $_SESSION['mbiemri']?></td>
    
  </tr>
  <tr>
    <td>Numri Personal:</td>
    <td> <?php echo $_SESSION['nr_personal']?> </td>

  </tr>
  <tr>
  <td>Email:</td>
    <td> <?php echo $_SESSION['email']?> </td>
  
  </tr>
  <tr>
    <td>Telefoni:</td>
    <td> <?php echo $_SESSION['telefoni']?> </td>

   
  </tr>
  <tr>
    <td>Adresa:</td>
    <td> <?php echo $_SESSION['adresa']?> </td>

   
  </tr>
 
</table>

<?php elseif(isset($_SESSION['userid']) &&  $_SESSION['roli'] == 0) : ?>
    <?php echo "Asgje per te shfaqur"; ?>

    <?php endif; ?>
    <?php if (isset($_SESSION['userid']) &&  $_SESSION['roli'] == 1) : ?>

<div class="shtoliber">
<button onclick="window.location.href='shtomodifikoliber.php'" id="shto_klient"><i class="fa fa-plus" aria-hidden="true" style="padding:8px;"></i> ADD A BOOK</button>
<?php endif; ?>



</div>
<?php if (isset($_SESSION['userid']) &&  $_SESSION['roli'] == 1) : ?>

<div class="shtoliber1">
<button onclick="window.location.href='shtomodifikohua.php'" id="shto_klient"><i class="fa fa-plus" aria-hidden="true" style="padding:1px; margin-left:10px;"></i> ADD A BORROWING</button>
<?php endif; ?>
</div>


</div>
<?php if (isset($_SESSION['userid']) &&  $_SESSION['roli'] == 1) : ?>

<div class="shtoliber2">
<button onclick="window.location.href='shtouser.php'" id="register"><i class="fa fa-plus" aria-hidden="true" style="padding:1px; margin-left:10px;"></i> ADD A USER</button>
<?php endif; ?>


</div>
<br>
<h2 style="color:black;margin-left:805px; margin-bottom:-25px;">People who contacted us:</h2>

<?php 
                    $kontakt = new Kontakti;  
                    $kontaktiAll = $kontakt->getAll(Kontakti::TABLE);
                    foreach($kontaktiAll as $kon){          
                    ?>
<table class="kontakt" style="width:60%;">
  <tr style="background-color:#778899;color:white;">
    <th>Name</th>
    <th>Surname</th>
    <th>Country</th> 
    <th>Phone</th>
    <th>Email</th>
  </tr>
  <tr  style="background-color:#FDF5E6;">
    <td><?php echo $kon['firstname'];?> </td>
    <td><?php echo $kon['lastname'];?> </td>
    <td><?php echo $kon['country'];?> </td>
    <td><?php echo $kon['phone'];?> </td>
    <td><?php echo $kon['email'];?> </td><br><br>
    
  </tr>
  <tr>
  <td colspan="2" style="text-align:center;background-color:#778899;color:white;">SUBJECT</td>
  <td colspan="3" style="background-color:#FDF5E6;"><?php echo $kon['subject'];?></td>

  </tr>
  
  
</table>
<?php } ?>
</body>
</html>