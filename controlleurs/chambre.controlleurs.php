<?php

if(($_SERVER['REQUEST_METHOD']=='GET')){
    if(isset($_GET['views'])){
        if ($_GET['views']=='catalogue'){
    
            
        catalogue();
        }elseif($_GET['views']=='detail'){
            detaille_chambre();            
        }elseif($_GET['views']=='connexion'){
            require_once(ROUTE_DIR.'views/security/connexion.html.php');
            
        }elseif($_GET['views']=='liste.chambre'){
        }elseif($_GET['views']=='inscription'){
            require_once(ROUTE_DIR.'views/security/inscription.html.php');

        }
    }else{
        catalogue();

    }
}

/* function liste_chambre(){
    $chambres=find_all_chambre();
    require_once(ROUTE_DIR.'views/hotel/catalogue.html.php');

} */
/* function liste_image_categorie(){
    $images=find_all_image();
    require_once(ROUTE_DIR.'views/hotel/catalogue.html.php');

} */
  /**
 * Calcul du nombre de pages total d'un tableau
 * @param $array
 * @param $nombreElement
 * @return int
 */
function nombrePageTotal($array, $nombreElement): int {
    $nombrePage = 0;
    $longueurArray = count($array);
    if ($longueurArray % $nombreElement == 0) {
        $nombrePage = $longueurArray / $nombreElement;
    } else {
        $nombrePage = ($longueurArray / $nombreElement) + 1;
    }
    return $nombrePage;
  }
  
  function get_element_to_display($array, int $page, int $nombreElement): array {
    $arrayElement = [];
    $indiceDepart = ($page*$nombreElement) - $nombreElement;
    $limitElement = $page * $nombreElement;
    for ($i = $indiceDepart; $i < $limitElement; $i++) {
        if ($i >= count($array)) {
            return $arrayElement;
        } else {
            $arrayElement[] = $array[$i];
        }
    }
    return $arrayElement;
  }
function add_chambre(array $bien):bool{
    return true;

}


function archiver_chambre   (array $id_bien):bool{
    return true;
}

function catalogue(){
    $images=find_all_image();
    $pagetotal=nombrePageTotal($images,3);
    $page = 1;
    if(isset($_GET['suivante'])){
        $suivante = $_GET['suivante'];
        if ($suivante <= $pagetotal) {
            $page++;
            $suivante= $page ;
            
        }
    }
    if(isset($_GET['precedent'])){
        $precedent = $_GET['precedent'];
        if ($precedent > 1) {
            $precedent--; 
            $page = $precedent;
        }
    }
   
   
    $imagee= get_element_to_display($images,$page,3);
    
   
    
    require_once(ROUTE_DIR.'views/hotel/catalogue.html.php');

   
}

function detaille_chambre(){
    if (!isset($_GET['id_chambre']) || !is_numeric($_GET['id_chamre'])){
        catalogue();
        header('location:'.WEB_ROUTE);
        exit();
    }
    $id=$_GET['id_chambre'];
    $detail=find_chambre_by_id($id);
    require_once(ROUTE_DIR.'views/hotel/detail.html.php');
                   
    

}







?>