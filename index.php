<?php

use App\Lib\Librat;

use App\Lib\Writers;

require('autoloader.php');

include_once('includes/header1.php');

?>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <body>
    <div class="page">
    <div class="foto">
            <img src="images/foto3.jpg" alt="Foto" id="img" class="img-fluid">
           <p class="title">THE LIBRARY</p>
    </div>  

<br>
<br>
<section class="list col-12">
                            <h2>New &amp; Recommended</h2>
<section class="list-content col-12 col-lg-12 ">

                    <?php 
                    $librat = new Librat;  
                    $libratAll = $librat->getAll(Librat::TABLE);
                    foreach($libratAll as $lib){          
                    ?>

                    <div class="content1">
                    <img src="images/<?php echo $lib['image'];?>"  alt="Foto">
                    <p id="descp"><a href="#" style="color:black; text-decoration:none;"><?php echo $lib['title']; ?></a></p>
                    </div>

                    <?php } ?>

</section>
</section>
 
 
 

</section>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-12">
    <?php 
                    $writers = new Writers;  
                    $writersAll = $writers->getAll(Writers::TABLE);
                    foreach($writersAll as $w){          
                    ?>
                    <div class = "lcontent1">
                    <img src="images/<?php echo $w['image'];?>"  alt="Foto">
                    <h3><b  href="#"><?php echo $w['name']; ?></b></h3><br>
                    <a  href="#">Learn more</a>
                    </div>
                     <?php } ?>
    </div>
    <div class="col-lg-3 col-12">
    <img src="images/writer1.jpg" alt="Foto"> 
                            <div class="rcontent1">
                            <h2>WRITER OF THE WEEK</h2>
                            <h1>Albert Murray</h1>
                            </div>
                            <div class="rcontent2">
                            <p>“Albert Murray is a man whose learning did not interfere with understanding. . . . He is the unsquarest person I know.” —Duke Ellington (1974)</p>
                                <a  href="#">Learn more</a>
                            </div>
    </div>
    
  </div>
 
</div>





<section class="topic col-12">
    <h2>FEATURED TOPICS</h2>
<div class="topic1">
    <h1><a href="books.php">Books For Young Readers</a></h1>
    <h1><a href="#">The Founders</a></h1>
    <h1><a href="#">Hollywood</a></h1>

</div>
</section>
<?php include_once('includes/footer.php'); ?>

</body>

</html>