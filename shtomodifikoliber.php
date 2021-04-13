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
    if (isset($_POST['shtoLiber'])) {
        $titulli = $_POST['titulli'];
        $autori = $_POST['autori'];
        $kategoria = $_POST['kategoria'];
        $realeasedate = $_POST['realeasedate'];
        $rating = $_POST['rating'];
        
        shtoLiber($titulli, $autori, $kategoria, $realeasedate, $rating);
    }

    if(isset($_GET['bookid'])){
        $libri = mysqli_fetch_assoc(merrLiberID($_GET['bookid']));
    }

    if(isset($_POST['modifikoLiber'])){
        $titulli = $_POST['titulli'];
        $autori = $_POST['autori'];
        $kategoria = $_POST['kategoria'];
        $realeasedate = $_POST['realeasedate'];
        $rating = $_POST['rating'];
        modifikoLiber($_GET['bookid'], $titulli, $autori, $kategoria, $realeasedate, $rating);
    }

    ?>
    <div class="container">
        
        <div id="main">

           
            <form method="post" id="shtoForma">
                <label for="titulli">Title</label>
                <input type="text" name="titulli" value="<?php if(isset($_GET['bookid'])) : echo $libri['titulli']; endif ?>">
               
                <label for="autori">Author</label>
                <input type="text" name="autori" value="<?php if(isset($_GET['bookid'])) : echo $libri['autori']; endif ?>">
               
                <label for="kategoria">Category</label>
                <input type="text" name="kategoria" value="<?php if(isset($_GET['bookid'])) : echo $libri['kategoria']; endif ?>">
               
                <label for="realeasedate">Release Date</label>
                <input type="text" name="realeasedate" value="<?php if(isset($_GET['bookid'])) : echo $libri['realeasedate']; endif ?>">
               
                <label for="rating">Rating</label>
                <input type="text" name="rating" value="<?php if(isset($_GET['bookid'])) : echo $libri['rating']; endif ?>">

                <?php if(isset($_GET['bookid'])) : ?>
                    <input type="submit" name="modifikoLiber" value="MODIFY BOOK">
                <?php else : ?>
                    <input type="submit" name="shtoLiber" value="ADD BOOK">
                <?php endif ?>
            </form>
            <i class="fas fa-long-arrow-alt-left"></i>        <div style="clear: both;"></div>
        </div>
        <hr>
       
    </div>
</body>

</html>