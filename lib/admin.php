<?php 

namespace App\Lib;
use Exception;

class Admin extends Database{
    
    const TABLE = "userat";
    public function getUser(){
        $sql = "SELECT *  FROM userat";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
