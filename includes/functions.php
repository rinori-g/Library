<?php 

global $dbcon;
function connection(){
    $dbcon = mysqli_connect('localhost','root','','dbbiblioteka');
    if(!$dbcon){
        die(mysqli_error($dbcon));
    }
    return $dbcon;
}
connection();

function merrstudent(){
$dbcon = connection();
$sql="SELECT emri,mbiemri,nr_personal,email,telefoni, adresa, username FROM userat";
   $result = mysqli_query($dbcon, $sql);
   return $result;


}
function merrLibrat(){
    $dbcon = connection();
    $sql = "SELECT * FROM books";
    $result = mysqli_query($dbcon, $sql);
    return $result;
}
function register($emri, $mbiemri, $nr_personal, $email, $telefoni, $adresa, $username, $password){
    $dbcon = connection();
    $sql = "INSERT INTO userat(emri, mbiemri, nr_personal, email, telefoni, adresa, username, password)";
    $sql.="VALUES('$emri','$mbiemri','$nr_personal',$email, '$telefoni','$adresa','$username','$password')";
    $result = mysqli_query($dbcon, $sql);
    if($result){
        header('Location: login.php');
    }
}
function merrUserat(){
    $dbcon = connection();
    $sql = "SELECT * FROM userat";
    $result = mysqli_query($dbcon, $sql);
    return $result;
}
function merrUserId($userid){
    $dbcon = connection();
    $sql = "SELECT * FROM userat WHERE userid = $userid";
    $result = mysqli_query($dbcon, $sql);
    return $result;
}
function login($username, $password){
    $dbcon = connection();
    $sql = "SELECT * FROM userat WHERE username = '$username'";
    $result = mysqli_query($dbcon, $sql);
    if($result){
        if(mysqli_num_rows($result) == 1){
            $res = mysqli_fetch_assoc($result);
            if(password_verify($password, $res['password'])){
                header("Location: index.php");
                session_start();
                $_SESSION['userid'] = $res['userid'];
                $_SESSION['emri'] = $res['emri'];
                $_SESSION['mbiemri'] = $res['mbiemri'];
                $_SESSION['nr_personal'] = $res['nr_personal'];
                $_SESSION['email'] = $res['email'];
                $_SESSION['telefoni'] = $res['telefoni'];
                $_SESSION['adresa'] = $res['adresa'];
                $_SESSION['roli'] = $res['roli'];
            }else{
                echo "<script>alert('Username ose Password".'aa'.$res['password']." nuk jane ne rregull!');</script>";
            }
        }
    }
}
function merrLiberID($bookid){
    $dbcon = connection();
    $sql = "SELECT * FROM books WHERE bookid = $bookid";;
    $result = mysqli_query($dbcon, $sql);
    return $result;
}
function modifikoLiber($bookid, $titulli, $autori, $kategoria, $realeasedate, $rating){
    $dbcon = connection();
    $sql = "UPDATE books SET titulli = '$titulli', autori = '$autori', kategoria = '$kategoria', realeasedate = '$realeasedate', rating=$rating WHERE bookid = $bookid ";
    $result = mysqli_query($dbcon, $sql);
    if($result){
        header('Location: books.php');
    }
}
function shtoLiber($titulli, $autori, $kategoria, $realeasedate, $rating)
{
$dbcon=connection();
$sql="INSERT INTO books(titulli, autori, kategoria, realeasedate, rating) VALUES ('$titulli', '$autori', '$kategoria', '$realeasedate', '$rating')";
$result=mysqli_query($dbcon, $sql);
if($result){
    header('Location: books.php');
}
}
function merrHua(){
    $dbcon = connection();
    $sql = "SELECT * FROM huat";
    $result = mysqli_query($dbcon, $sql);
    return $result;
}
function merrHuaId($huaid){
    $dbcon = connection();
    $sql = "SELECT * FROM huat WHERE huaid = $huaid";;
    $result = mysqli_query($dbcon, $sql);
    return $result;
}
function modifikoHua($huaid, $borrower, $book, $receiveddate, $returndate,$email, $late){
    $dbcon = connection();
    $sql = "UPDATE huat SET borrower = '$borrower', book = '$book', receiveddate = '$receiveddate', returndate = '$returndate',email=$email ,late=$late WHERE huaid = $huaid ";
    $result = mysqli_query($dbcon, $sql);
    if($result){
        header('Location: huat.php');
    }
}
function shtoHua($borrower, $book, $receiveddate, $returndate,$email, $late)
{
$dbcon=connection();
$sql="INSERT INTO huat(borrower, book, receiveddate, returndate,email, late) VALUES ('$borrower', '$book', '$receiveddate', '$returndate','$email', '$late')";
$result=mysqli_query($dbcon, $sql);
if($result){
    header('Location: huat.php');
}
}
function shtouser($emri, $mbiemri, $nr_personal, $email, $telefoni, $adresa, $username, $password){
    $dbcon = connection();
    $sql = "INSERT INTO userat(emri, mbiemri, nr_personal, email, telefoni, adresa, username, password)";
    $sql.="VALUES('$emri','$mbiemri','$nr_personal',$email, '$telefoni','$adresa','$username','$password')";
    $result = mysqli_query($dbcon, $sql);
    if($result){
        header('Location: dashboard.php');
    }
}
?>
