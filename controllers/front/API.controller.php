<?php
require_once 'models/front/API.manager.php';

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
             echo "<pre>";
                 print_r($animals);
             echo "<pre/>";
    }

    public function getAnimal($idAnimal){
        echo "Envoie des infos de l'animal ID de l'animal : $idAnimal </br>";
    }

    public function getContinents(){
        echo "Envoyer les informations des continents";
    }

    public function getFamilies(){
        echo "Envoie des informations de la familles";
    }
}