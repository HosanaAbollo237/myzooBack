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

    public function getAnimal($id){
       $rows_animal = $this->apiManager->getDBAnimal($id);
       echo "<pre>";
            print_r($rows_animal);
       echo "<pre/>";

    }

    public function getContinents(){
        $continents = $this->apiManager->getDBContinents();
        echo "<pre>";
            print_r($continents);
        echo "<pre/>";
    }

    public function getFamilies(){
        $families = $this->apiManager->getDBFamilies();
        echo "<pre>";
            print_r($families);
        echo "<pre/>";
    }
}