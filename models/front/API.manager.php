<?php

require "models/Model.php";

class APIManager extends Model{

    public function getDBAnimals($idFamille, $idContinent){

        $animals = [];

        $stmt = "SELECT * FROM animal a 
        INNER JOIN famille f ON f.idF = a.idF 
        INNER JOIN animal_continent ac ON a.idA = ac.idA 
        INNER JOIN continent c ON c.idC = ac.idC ";
        $req = $this->getDatabase()->prepare($stmt); 

        if($idFamille > 0 && $idContinent < 1){
            $stmt.= " WHERE f.idF = :idFamille";
            $req = $this->getDatabase()->prepare($stmt); 
            $req->bindValue(":idFamille",$idFamille,PDO::PARAM_INT);;
        }

        if($idFamille < 1 && $idContinent > 0){
            $stmt.= " WHERE c.idC = :idContinent";
            $req = $this->getDatabase()->prepare($stmt); 
            $req->bindValue(":idContinent",$idContinent,PDO::PARAM_INT);;
        }

        if($idFamille > 0 && $idContinent > 0){
            $stmt.= " WHERE f.idF = :idFamille AND c.idC = :idContinent";
            $req = $this->getDatabase()->prepare($stmt); 
            $req->bindValue(":idFamille",$idFamille,PDO::PARAM_INT);
            $req->bindValue(":idContinent",$idContinent,PDO::PARAM_INT);
        }

        $req->execute(); 
        $animals = $req->fetchAll(PDO::FETCH_ASSOC);  
        $req->closeCursor(); 
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
        $req->closeCursor();
        return $rows_animal;
    }

    public function getDBContinents(){
        $continents = [];

        $stmt = "SELECT * FROM continent";

        $req = $this->getDatabase()->prepare($stmt);
        $req->execute();
        $continents = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $continents;
    }

    public function getDBFamilies(){
        $families = [];
        $stmt = "SELECT * FROM famille";
        $req = $this->getDatabase()->prepare($stmt);
        $req->execute();
        $families = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $families;
    }
}