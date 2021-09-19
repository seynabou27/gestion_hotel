<?php

if(($_SERVER['REQUEST_METHOD']=='GET')){
    if(isset($_GET['views'])){
        if ($_GET['views']=='catalogue'){
            catalogue();
        }elseif($_GET['views']=='detail'){
            detaille_bien();            
        }elseif($_GET['views']=='connexion'){
            require_once(ROUTE_DIR.'views/security/connexion.html.php');
            
        }elseif($_GET['views']=='liste.bien'){
            liste_bien();

        }elseif($_GET['views']=='inscription'){
            require_once(ROUTE_DIR.'views/security/inscription.html.php');

        }
    }else{
        catalogue();

    }
}

function liste_bien(){
    $biens=find_all_bien();
    require_once(ROUTE_DIR.'views/gestionnaire/liste.bien.html.php');

}
function add_bien(array $bien):bool{
    return true;

}

function modifier_bien(array $bien):bool{
        return true;
}

function archiver_bien(array $id_bien):bool{
    return true;
}

function catalogue(){
    $biens=find_bien_disponible();
    require_once(ROUTE_DIR.'views/hotel/catalogue.html.php');
   
}

function detaille_bien(){
    if (!isset($_GET['id_bien']) || !is_numeric($_GET['id_bien'])){
        catalogue();
        header('location:'.WEB_ROUTE);
        exit();
    }
    $id=$_GET['id_bien'];
    $detail=find_bien_by_id($id);
    require_once(ROUTE_DIR.'views/hotel/detail.html.php');
                   
    

}







?>