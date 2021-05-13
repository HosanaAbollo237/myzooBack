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
}