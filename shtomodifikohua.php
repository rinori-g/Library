<?php include_once('includes/functions.php'); ?>
<?php include_once('includes/header1.php'); ?>


<!DOCTYPE html>
<html>

<head>
    <title>Biblioteka</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css" />
    <script src=    ></script>
    <style>
        #shtoForma {
            width: 90%;
            margin: 103px 40px;
        }

        #hi {
            color: black;
            padding: 20px 0px 10px 10px;
            margin: 0px 15px;
            font-size: 25px;
            border-bottom: 2px solid #009933;
        }

        label,
        input {
            width: 100%;
            padding: 10px;
        }

        label {
            color: black;
            font-weight: bold;
            margin-left: -10px;
        }

        input {
            outline: none;
            margin: 10px 0px;
        }

        input[type='submit'] {
            width: 150px;
            float: right;
            margin: 30px 0px;
            margin-right: -25px;
            color: white;
            background-color: gray;
            border: none;
        }

        input[type='submit']:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <?php
    if (isset($_POST['shtoHua'])) {
        $borrower = $_POST['borrower'];
        $book = $_POST['book'];
        $receiveddate = $_POST['receiveddate'];
        $returndate = $_POST['returndate'];
        $email = $_POST['email'];

        $late = $_POST['late'];
        
        shtoHua($borrower, $book, $receiveddate, $returndate,$email, $late);
    }

    if(isset($_GET['huaid'])){
        $huat = mysqli_fetch_assoc(merrHuaId($_GET['huaid']));
    }

    if(isset($_POST['modifikoHua'])){
        $borrower = $_POST['borrower'];
        $book = $_POST['book'];
        $receiveddate = $_POST['receiveddate'];
        $returndate = $_POST['returndate'];
        $email = $_POST['email'];
        $late = $_POST['late'];
        modifikoHua($_GET['huaid'],$borrower, $book, $receiveddate, $returndate,$email, $late);
    }

    ?>
    <div class="container">
        
        <div id="main">

           
            <form method="post" id="shtoForma">
                <label for="borrower">Borrower</label>
                <input type="text" name="borrower" value="<?php if(isset($_GET['huaid'])) : echo $huat['borrower']; endif ?>">
               
                <label for="book">Book</label>
                <input type="text" name="book" value="<?php if(isset($_GET['huaid'])) : echo $huat['book']; endif ?>">
               
                <label for="receiveddate">Received Date</label>
                <input type="text" name="receiveddate" value="<?php if(isset($_GET['huaid'])) : echo $huat['receiveddate']; endif ?>">
               
                <label for="returndate">Return Date</label>
                <input type="text" name="returndate" value="<?php if(isset($_GET['huaid'])) : echo $huat['returndate']; endif ?>">
               
                <label for="email">Email</label>
                <input type="text" name="email" value="<?php if(isset($_GET['huaid'])) : echo $huat['email']; endif ?>">


                <label for="late">Late</label>
                <input type="text" name="late" value="<?php if(isset($_GET['huaid'])) : echo $huat['late']; endif ?>">

                <?php if(isset($_GET['huaid'])) : ?>
                    <input type="submit" name="modifikoHua" value="MODIFY">
                <?php else : ?>
                    <input type="submit" name="shtoHua" value="ADD">
                <?php endif ?>
            </form>
            <i class="fas fa-long-arrow-alt-left"></i>        <div style="clear: both;"></div>
        </div>
        <hr>
       
    </div>
</body>

</html>