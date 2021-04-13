<?php include_once('includes/header1.php'); ?>
<?php include_once('includes/functions.php'); ?>

<div class = "librat-page1">
<img src="images/foto111.jpg" alt="Foto" id="img" style="width:100%; height:937px; margin-top:-18px;">
<div class="titull1">
<h2>BORROWINGS</h2>
</div>  
<script src="https://use.fontawesome.com/3ca95fdef9.js"></script>

<table class = "librat1">
<thead>
                        <tr>
                            <th >Borrower</th>
                            <th >Book</th>
                            <th >Received Date</th>
                            <th >Return Date</th>
                            <th >Email</th>
                            <th >Late</th>
                            <th >Modify</th>
                            <th >Delete</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php $hua = merrHua();
                        while ($huat = mysqli_fetch_assoc($hua)) { ?>
                            <tr>
                                <td><?php echo $huat['borrower']; ?></td>
                                <td><?php echo $huat['book']; ?></td>
                                <td><?php echo $huat['receiveddate']; ?></td>
                                <td><?php echo $huat['returndate']; ?></td>
                                <td><?php echo $huat['email']; ?></td>
                                <td><?php echo $huat['late']; ?></td>
                                <td id="modifiko">
                                <a href="shtomodifikohua.php?huaid=<?php echo $huat['huaid']; ?>">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                        </td>
                        <td id="fshiej">
                                 <form action="fshijHua.php" method="post">
                                <input type="text" name="huaid" hidden value="<?php echo $huat['huaid']; ?>">
                                <button type="submit"  name="deleteKlient" onclick="return fshijHua()" style="margin-left:30px;">
                                    <i class="fa fa-trash"  ></i>
                                </button>
                            </form>
                            <script>
                                function fshijHua() {
                                    $confirm = confirm('Are you sure you want to delete this?');
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

                                </table>
                     
            </div>
<?php include_once('includes/footer.php'); ?>