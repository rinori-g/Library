<?php include_once('includes/header1.php'); ?>
<?php include_once('includes/functions.php'); ?>


<div class = "librat-page">
<img src="images/foto11.jpg" alt="Foto" id="img" style="width:100%; height:937px; margin-top:-18px; margin-bottom:-18px;">
<div class="titull">
<h2>BOOKS YOU CAN GET</h2>
</div>  
<script src="https://use.fontawesome.com/3ca95fdef9.js"></script>

<table class = "librat">
                    <?php if (isset($_SESSION['userid']) &&  $_SESSION['roli'] == 1) : ?>

                    <thead>
                        <tr>
                            <th >Title</th>
                            <th >Author</th>
                            <th >Category</th>
                            <th >Release Date</th>
                            <th >Rating</th>
                            <th >Modify</th>
                            <th >Delete</th>


                        </tr>
                    </thead>
                    <?php elseif(isset($_SESSION['userid']) &&  $_SESSION['roli'] == 0) : ?>
                        <thead>
                        <tr>
                           
                           
                           
                            <th >Title</th>
                            <th >Author</th>
                            <th >Category</th>
                            <th >Release Date</th>
                            <th >Rating</th>
                                  </tr>
                    </thead>
                    <?php else : ?>
                        <thead>
                        <tr>
                            <th >Title</th>
                            <th >Author</th>
                            <th >Category</th>
                            <th >Release Date</th>
                            <th >Rating</th>
                                  </tr>
                    </thead>
                    <?php endif; ?>

                    <?php ?>

                    <?php if (isset($_SESSION['userid']) &&  $_SESSION['roli'] == 1) : ?>
                      <tbody>
                        <?php $librat =merrLibrat();
                        while ($libri = mysqli_fetch_assoc($librat)) { ?>
                            <tr>
                                <td><?php echo $libri['titulli']; ?></td>
                                <td><?php echo $libri['autori']; ?></td>
                                <td><?php echo $libri['kategoria']; ?></td>
                                <td><?php echo $libri['realeasedate']; ?></td>
                                <td><?php echo $libri['rating']; ?></td>
                                <td id="modifiko" >
                                <a href="shtomodifikoliber.php?bookid=<?php echo $libri['bookid']; ?>">
                                <i class="fa fa-pencil" aria-hidden="true" style="padding-left:40px;"></i> </a> </td>
                                 <td id="fshiej">
                                 <form action="fshijLiber.php" method="post">
                                <input type="text" name="bookid" hidden value="<?php echo $libri['bookid']; ?>">
                                <button type="submit"  name="deleteKlient" onclick="return fshijLiber()" style="margin-left:30px;">
                                    <i class="fa fa-trash"  ></i>
                                </button>
                            </form>
                            <script>
                                function fshijLiber() {
                                    $confirm = confirm('Are you sure you want to delete this book?');
                                    if ($confirm) {
                                        return true;
                                    } else {
                                        return false;
                                    }
                                }
                            </script>
                        </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                                <button class="seemore"> <i>See More</i></button>

                                <?php elseif(isset($_SESSION['userid']) &&  $_SESSION['roli'] == 0) : ?>
                                    <tbody>
                        <?php $librat =merrLibrat();
                        while ($libri = mysqli_fetch_assoc($librat)) { ?>
                            <tr>
                                <td><?php echo $libri['titulli']; ?></td>
                                <td><?php echo $libri['autori']; ?></td>
                                <td><?php echo $libri['kategoria']; ?></td>
                                <td><?php echo $libri['realeasedate']; ?></td>
                                <td><?php echo $libri['rating']; ?></td>
                             
                                </tr>
                                <?php } ?>
                                </tbody>
                                <button class="seemore"> <i>See More</i></button>

                                <?php else : ?>
                                    <tbody>
                        <?php $librat =merrLibrat();
                        while ($libri = mysqli_fetch_assoc($librat)) { ?>
                            <tr>
                                <td><?php echo $libri['titulli']; ?></td>
                                <td><?php echo $libri['autori']; ?></td>
                                <td><?php echo $libri['kategoria']; ?></td>
                                <td><?php echo $libri['realeasedate']; ?></td>
                                <td><?php echo $libri['rating']; ?></td>
                             
                                </tr>
                                <?php } ?>
                                </tbody>
                                <button class="seemore"> <i>See More</i></button>

                                <?php endif; ?>

                                </table>
                                
            </div>
<?php include_once('includes/footer.php'); ?>