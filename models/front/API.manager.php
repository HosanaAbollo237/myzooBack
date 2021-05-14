<?php

require "models/Model.php";

class APIManager extends Model{

    public function getDBAnimals(){

        $animals = [];

        $stmt = "SELECT a.nomA, GROUP_CONCAT(c.libelleC SEPARATOR '- ') FROM animal a 
            INNER JOIN famille f ON f.idF = a.idF 
            INNER JOIN animal_continent ac ON a.idA = ac.idA 
            INNER JOIN continent c ON c.idC = ac.idC 
            GROUP By a.idA";

        $req = $this->getDatabase()->prepare($stmt);;
        $req->execute(); 

        $animals = $req->fetchAll(PDO::FETCH_ASSOC);  

        return $animals;

    }

    public function getDBAnimal($id){
        $rows_animal = [];

        $stmt = "SELECT * FROM animal a 
            INNER JOIN animal_continent ac ON a.idA = ac.idA 
            INNER JOIN famille f ON f.idF = a.idF 
            INNER JOIN continent c ON c.idC = ac.idC 
            WHERE a.idA = :idA";

        $req = $this->getDatabase()->prepare($stmt);
        $req->bindParam(':idA',$id);
        $req->execute();
        $rows_animal = $req->fetchAll(PDO::FETCH_ASSOC);
        
        echo '<pre>';
             print_r($rows_animal);
        echo '<pre/>';
    }

    public function getDBContinents(){
        $continents = [];

        $stmt = "SELECT * FROM continent";

        $req = $this->getDatabase()->prepare($stmt);
        $req->execute();

        $continents = $req->fetchAll(PDO::FETCH_ASSOC);
        
        return $continents;
    }

    public function getDBFamilies(){
        $families = [];

        $stmt = "SELECT * FROM famille";

        $req = $this->getDatabase()->prepare($stmt);
        $req->execute();

        $families = $req->fetchAll(PDO::FETCH_ASSOC);
        
        return $families;
    }
}