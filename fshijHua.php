<?php 
include_once('includes/functions.php'); 

function fshijHua(){
    $huaid = $_POST['huaid'];
    $dbcon = connection();
    $sql = "DELETE FROM huat WHERE huaid = $huaid";
    $result = mysqli_query($dbcon, $sql);
    if($result){
        header("Location: huat.php");
    }
}

fshijHua();

?>


