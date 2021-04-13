<?php 

namespace App\Lib;
use Exception;

class Writers extends Database{
    
    const TABLE = "writers";
    public function getWriters(){
        $sql = "SELECT *  FROM writers";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
