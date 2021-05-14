<?php 
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
//echo URL; // https://localhost/myzoo/server_animaux/

require_once "controllers/front/API.controller.php";
$apiController = new APIController();


try{
    
    if(empty($_GET['page']))
    {
        // Pas de pages demandée alors error
        throw new Exception ("La page n'existe pas");
        } else {
        // On deompose l'url en tableau et on prend soin de la nettoyer
            $url = explode("/",filter_var($_GET["page"],FILTER_SANITIZE_URL));
            // Deux information doivent etre renseigné par des slashes /info1/info2

            // minimum 2 infos dans l'url /info1/info2
            if(empty($url[0]) || empty($url[1]) ) throw new Exception ('ELSE : Cette page n\'existe pas !');

            //dans l'url front/case : 4 cas possible 
            switch($url[0]){
                case 'front' : 
                    switch($url[1]){
                        case 'animals' : $apiController->getAnimals(); break;
                        case 'animal' : 
                            if(empty($url[2]))
                                throw new Exception('Renseigner un id Animal');
                                $apiController->getAnimal($url[2]);break;
                        case 'continents' :
                            $apiController->getContinents();break;
                        case 'families' : 
                            $apiController->getFamilies();break;
                        default: throw new Exception ('Cette page n\'existe pas');
                    }
                break;
                case 'back' : echo "Page backEnd demandée";
                break;
                default: throw new Exception ('-SWITH --Cette pas n\'existe pas'); 
            }

        }
    } catch(Exception $e){
        $msg =  $e->getMessage();
        echo $msg;
    }

