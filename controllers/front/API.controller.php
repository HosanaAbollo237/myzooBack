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

    public function getAnimals() 
    {
        // Permet de récuperer les infos des animaux
    $animals = $this->apiManager->getDBAnimals();
        Model::sendJSON($animals);
    }

    public function getAnimal($id){
       $rows_animal = $this->apiManager->getDBAnimal($id);
       Model::sendJSON($rows_animal);
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