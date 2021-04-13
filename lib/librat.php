<?php 

namespace App\Lib;
use Exception;

class Librat extends Database{
    
    const TABLE = "books2";
    public function getLibrat(){
        $sql = "SELECT *  FROM books2";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
