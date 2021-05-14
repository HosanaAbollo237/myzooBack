<?php

require "models/Model.php";

class APIManager extends Model{

    public function getDBAnimals(){

        $animals = [];

        $stmt = "SELECT a.*, f.*, c.* FROM animal a 
            INNER JOIN famille f ON f.idF = a.idF 
            INNER JOIN animal_continent ac ON a.idA = ac.idA 
            INNER JOIN continent c ON c.idC = ac.idC";

        $req = $this->getDatabase()->prepare($stmt);;
        $req->execute(); 

        $animals = $req->fetchAll(PDO::FETCH_ASSOC);  

        return $animals;

    }

    public function getDBAnimal($id){
        $rows_animal = [];

        $stmt = "SELECT *, GROUP_CONCAT(c.libelleC SEPARATOR ',') as continents FROM animal a
            INNER JOIN famille f ON f.idF = a.idF 
            INNER JOIN animal_continent ac ON a.idA = ac.idA 
            INNER JOIN continent c ON ac.idC = c.idC 
            WHERE a.idA = :idA";

        $req = $this->getDatabase()->prepare($stmt);
        $req->bindParam(':idA',$id,PDO::PARAM_INT);
        $req->execute();
        $rows_animal = $req->fetchAll(PDO::FETCH_ASSOC);
        
        return $rows_animal;
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