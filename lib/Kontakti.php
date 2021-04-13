<?php 
namespace App\Lib;

use Exception;


class Kontakti extends Database{
    public function kontakto($firstname,$lastname,$country,$phone,$email,$subject){
        try{        
            $sql = "INSERT INTO kontakti(firstname, lastname, country, phone, email, subject) VALUES(?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        if($stmt->execute(["$firstname", "$lastname", "$country", "$phone", "$email", "$subject"])){
            header("Location: index.php");
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
    }
    const TABLE = "kontakti";
    public function getContact(){
        $sql = "SELECT *  FROM kontakti";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>