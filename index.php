<?php 
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

//echo URL; // https://localhost/myzoo/server_animaux/
try{
    
    if(empty($_GET['page']))
    {
        throw new Exception ("La page n'existe pas");
        } else {
        // On deompose l'url en tableau et on prend soin de la nettoyer
            $url = explode("/",filter_var($_GET["page"],FILTER_SANITIZE_URL));
            // Deux information doivent etre renseigné par des slashes /info1/info2
            if(empty($url[0]) || empty($url[1]) ) throw new Exception ('ELSE : Cette page n\'existe pas !');

            switch($url[0]){
                case 'front' : 
                    switch($url[1]){
                        case 'animaux' : echo "JSON ANIMAUX DEMANDEE";break;
                        case 'animal' : echo "JSON DE L'ANIMAL DEMANDEE + ID ANIMAL: ".$url[2];break;
                        case 'continents' : echo "JSON DES CONTNENTS DEMANDEE";break;
                        case 'famille' : echo "JSON FAMILLE DEMANDEE";break;
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
/*
try{
    // Cas où l'utilisateur accède à index.php sans avoir mentionné la page via ?page=nomPage
    if(empty($_GET['page'])){
        throw new Exception("La page n'existe pas");
    } else {
        $url = explode("/",filter_var($_GET['page'],FILTER_SANITIZE_URL));
        if(empty($url[1]) || empty($url[2])) throw new Exception ("La page n'existe pas");
        switch($url[1]){
            case "front" : 
                switch($url[2]){
                    case "animaux": echo "données JSON des animaux demandées";
                    break;
                    case "animal": echo "données JSON de l'animal ".$url[2]." demandées";
                    break;
                    case "continents": echo "données JSON des continents demandées";
                    break;
                    case "familles": echo "données JSON des familles demandées";
                    break;
                    default : throw new Exception ("La page n'existe pas");
                }
            break;
            case "back" : echo "page back end demandée";
            break;
            default : throw new Exception ("La page n'existe pas");
        }
    }
} catch (Exception $e){
    $msg = $e->getMessage();
    echo $msg;
}
*/
