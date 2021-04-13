<?php 
include_once('includes/functions.php'); 

function fshijLiber(){
    $bookid = $_POST['bookid'];
    $dbcon = connection();
    $sql = "DELETE FROM books WHERE bookid = $bookid";
    $result = mysqli_query($dbcon, $sql);
    if($result){
        header("Location: books.php");
    }
}

fshijLiber();

?>


