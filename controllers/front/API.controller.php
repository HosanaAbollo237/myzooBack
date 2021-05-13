<?php

class APIController{

    public function getAnimals() 
    {
        echo "Envoie des animaux";
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