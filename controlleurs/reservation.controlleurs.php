<?php 
if(($_SERVER['REQUEST_METHOD']=='GET')){
    if(isset($_GET['views'])){
        if ($_GET['views']=='catalogue'){
            catalogue();
        }elseif($_GET['views']=='detail'){
            detaille_chambre();            
            
        }elseif($_GET['views']=='lite.chambre'){
            require_once(ROUTE_DIR.'views/gestionnaire/liste.chambre.html.php');

        }elseif($_GET['views']=='inscription'){
            require_once(ROUTE_DIR.'views/security/inscription.html.php');

        }elseif($_GET['views']=='liste.reservation'){
            lister_reservation_en_cours(); 

        }elseif($_GET['views']=='catalogue_chambre'){
            require_once(ROUTE_DIR.'views/reservation/catalogue_chambre.html.php');

            
        }elseif($_GET['views']=='mesreservation'){

            liste_reservation($_SESSION['userConnect']['id_user']);

            }
            
    }else{
        catalogue();

    }
}
function liste_reservation(){
        $reservation=find_all_reservation();
    /*  
     if (est_gestionnaire()) {
        require_once(ROUTE_DIR.'views/hotel/catalogue.html.php');
     } */
     require_once(ROUTE_DIR.'views/reservation/mesreservation.html.php');

}

function lister_reservation_en_cours(){
    $reservation=find_all_reservation_by_etat(); 
    require_once(ROUTE_DIR.'views/gestionnaire/liste.reservation.html.php');
}

function traiter_reservation(int $id_reservation,string $etat='annuler'):bool{
    return false;

}
function reserver_chambre(int $id_client){
    $id_chambre=$_GET['id_chambre'];

    $id_client= $_SESSION['userConnect']['id_client'];

    $reser=insert_reservation($id_chambre,$id_client);
    $etat_reservation='encour';


}



?>