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
            // Deux informations doivent etre renseigné par des slashes /info1/info2

            // minimum 2 infos (info1/info2) dans l'url /front/animal par exemple
            if(empty($url[0]) || empty($url[1]) ) throw new Exception ('ELSE : Cette page n\'existe pas !');

            switch($url[0]){
                case 'front' : 
                    switch($url[1]){
                        case 'animals' : 
                            // $url[2] correspond a la famille et $url[3] au continent
                            // ex: url de type $url[0]/$url[1]/$url[2]/$url[3] = front/animals/1/2
                            if(!isset($url[2]) || !isset($url[3])){
                                $apiController->getAnimals(-1,-1); // -1 correspond a la récupration de tt les animaux de la BDD
                            } else{
                                // On caste les infos transmise via url car elle sont de type chaine de carctere
                                $apiController->getAnimals((int)$url[2],(int)$url[3]); 
                            }
                        break;
                        case 'animal' : 
                            if(empty($url[2]))
                                throw new Exception('Renseigner un id Animal');
                                $apiController->getAnimal($url[2]);
                            break;
                        case 'continents' :$apiController->getContinents();
                        break;
                        case 'families' : $apiController->getFamilies();
                        break;
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

