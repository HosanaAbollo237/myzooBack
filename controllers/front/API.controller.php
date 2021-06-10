<?php
require_once 'models/front/API.manager.php';
// A modifier
require_once 'models/Model.php';

class APIController{

    private $apiManager;

    // Permet d'apporter des modification concernant les requetes front-end
    public function __construct(){
        $this->apiManager = new APIManager();
    }


    private function formatDataLine($rows){
        $arr = [];
        foreach($rows as $row)
        { 
            if(!array_key_exists($row['idA'],$arr)){
                $arr[$row['idA']] =    
                [
                    "id" => $row['idA'],
                    "nom" => $row['nomA'],
                    "description" => $row["descA"],
                    "image" => $row["imgA"],
                    "famille" => [
                        "idFamily" => $row["idF"],
                        "libelle" => $row["libelleF"],
                        "description" => $row["descF"]],
                ];
            }
                $arr[$row['idA']]['continents'][] = [
                    "id" => $row["idC"],
                    "libelle" => $row["libelleC"]
                ];
        }

        return $arr;
    }


    
    public function getAnimals($idFamille,$idContinent) 
    {
        // Permet de récuperer les infos des animaux
    $animals = $this->apiManager->getDBAnimals($idFamille,$idContinent);
        Model::sendJSON($this->formatDataLine($animals));
    }

    public function getAnimal($idGet){
        $idAnimal = (int)$idGet;
        if(is_numeric($idAnimal) && $idAnimal >= 1 ){
            $rows_animal = $this->apiManager->getDBAnimal($idAnimal);
            $oneAnimalDatas = $this->formatDataLine($rows_animal);
            Model::sendJSON($oneAnimalDatas);
        }
    }

    public function getContinents(){
        $continents = $this->apiManager->getDBContinents();
        Model::sendJSON($continents);
    }

    public function getFamilies(){
        $families = $this->apiManager->getDBFamilies();
        Model::sendJSON($families);
    }
}