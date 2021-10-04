<?php


if(($_SERVER['REQUEST_METHOD']=='GET')){
    if(isset($_GET['views'])){
        if ($_GET['views']=='catalogue'){
            catalogue();
        }elseif($_GET['views']=='detail'){
            //detaille_chambre();
            require_once(ROUTE_DIR.'views/hotel/detail.html.php');
            
            
        }elseif($_GET['views']=='liste.chambre'){
            require_once(ROUTE_DIR.'views/gestionnaire/liste.chambre.html.php');
        }elseif($_GET['views']=='page_reservation'){
            prestation_by_reservation();
        }elseif($_GET['views']=='inscription'){
            require_once(ROUTE_DIR.'views/security/inscription.html.php');

        }elseif($_GET['views']=='liste.reservation'){
          
            lister_reservation_en_cours(); 
    
        }elseif($_GET['views']=='liste.prestation'){
            liste_prestation(); 

        }elseif($_GET['views']=='catalogue_chambre'){
            categorie();
            //filtre_categorie();
            
        }elseif($_GET['views']=='mesreservation'){
            if (est_client()) {
                 liste_reservation($_SESSION['userConnect']['id_user']);

            }else {
                catalogue();
            }

        }
        
            
    }else{
        catalogue();

    }
}


function liste_prestation(){
    $prestation=find_all_prestation();
    require_once(ROUTE_DIR.'views/gestionnaire/liste_prestation.html.php');

}
function prestation_by_reservation(){
    $pres=find_all_prestation();
    require_once(ROUTE_DIR.'views/reservation/page_reservation.html.php');

}

?>