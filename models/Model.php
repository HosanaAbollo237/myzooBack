<?php

// Class non instantiable
abstract class Model{

    private static $pdo; // unique instance de pdo

    // Connexion a la base de données
    private static function setDatabase(){
        self::$pdo = new PDO("mysql:host=localhost;dbname=myzoo;charset=utf8","root","");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }

    // Récupération d'UNE instance de la BDD
    protected function getDatabase(){
        if(self::$pdo === null){
            self::setDatabase();
        }
        return self::$pdo;
    }

    //Permet de convertir des informations au format json 
    static function sendJSON($data){
        //Permet de contourner les pb cross origin access
        header("Access-Control-Allow-Origin: *");
        // Envoie des données BDD au format json avec flag gérant les accents 
        echo json_encode($data,JSON_UNESCAPED_UNICODE); 
    }



}