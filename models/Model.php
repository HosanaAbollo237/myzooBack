<?php

// Class non instantiable
abstract class Model{

    private static $pdo; // unique instance de pdo

    // Connexion a la base de données
    private static function setDatabase(){
        self::$pdo = new PDO("mysql:host=localhost;dbname=myzoo;charset=utf8","root","");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }

    // Récupération qu'UNE instance de la BDD
    protected function getDatabase(){
        if(self::$pdo === null){
            self::setDatabase();

        }
        return self::$pdo;
    }



}