<?php

if(($_SERVER['REQUEST_METHOD']=='GET')){
    if(isset($_GET['views'])){
        if ($_GET['views']=='catalogue'){
    
        catalogue();
        }elseif($_GET['views']=='detail'){
            /* var_dump($_GET);
            die('okk'); */
        
            detaille_chambre();  
            //require_once(ROUTE_DIR.'views/hotel/detail.html.php');
          
        }elseif($_GET['views']=='connexion'){
            require_once(ROUTE_DIR.'views/security/connexion.html.php');
            
        
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


function archiver_chambre   (array $id_chambre):bool{
    return true;
}

function catalogue(){
    $count=count_all_categorie();
    $par_page=NOMBRE_PAR_PAGE;
    $currentPage=isset ($_GET['page'])?$_GET['page']: 1;
    $pages=ceil($count/$par_page);
    $premier=($currentPage * $par_page) - $par_page;
    $rows=find_all_categorie($premier);
    $categorie=$rows["data"];

    require_once(ROUTE_DIR.'views/hotel/catalogue.html.php');

}


/* 
function catalogue(){
    $categorie=find_all_categorie();
    $pagetotal=nombrePageTotal($categorie,3);
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
   
   
    $imagee= get_element_to_display($categorie,$page,3);
    
   
    
    require_once(ROUTE_DIR.'views/hotel/catalogue.html.php');


   
}
 */
 

 function detaille_chambre(){
     
    if (!isset($_GET['id_categorie']) || !is_numeric($_GET['id_categorie'])){
        catalogue();
        header('location:'.WEB_ROUTE);
        exit(); 
    }  
    $id=$_GET['id_categorie']; 
    $categorie=find_categorie_by_id($id);
  
    require_once(ROUTE_DIR.'views/hotel/detail.html.php');
                   
    

} 








?>