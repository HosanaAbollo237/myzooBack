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

    private function format_subRow($myRow){
        if(isset($myRow['continents'])){

            $arr = [];
            $continent_elem = explode(',',$myRow);
            for($i=0;$i < count($continent_elem); $i++){ 
                $arr[$continent_elem[$i]] = $continent_elem[$i];
            }
            return $arr;
        }
    }

    private function formatDataAnimalRow($rows){
        $arr = [];
        foreach($rows as $row)
        { 
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
                    "continents" => $this->format_subRow($row)
                ];
            }
        return $arr;
    }

    public function getAnimals() 
    {
        // Permet de récuperer les infos des animaux
    $animals = $this->apiManager->getDBAnimals();
        Model::sendJSON($this->formatDataAnimalRow($animals));
    }

    public function getAnimal($idGet){
        $idAnimal = (int)$idGet;
        if(is_numeric($idAnimal) && $idAnimal >= 1 ){
            $rows_animal = $this->apiManager->getDBAnimal($idAnimal);
            $oneAnimalDatas = $this->formatDataAnimalRow($rows_animal);
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