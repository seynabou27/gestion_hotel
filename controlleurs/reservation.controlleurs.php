<?php 
if(($_SERVER['REQUEST_METHOD']=='GET')){
    if(isset($_GET['views'])){
        if ($_GET['views']=='catalogue'){
            catalogue();
        }elseif($_GET['views']=='detail'){
            detaille_bien();            
            
        }elseif($_GET['views']=='lite.bien'){
            require_once(ROUTE_DIR.'views/gestionnaire/liste.bien.html.php');

        }elseif($_GET['views']=='inscription'){
            require_once(ROUTE_DIR.'views/security/inscription.html.php');

        }elseif($_GET['views']=='liste.reservation'){
            lister_reservation_en_cours(); 

        }elseif($_GET['views']=='liste.bien'){
            require_once(ROUTE_DIR.'views/gestionnaire/liste.bien.html.php');

            
        }elseif($_GET['views']=='mesreservation'){

            liste_reservation($_SESSION['userConnect']['id_user']);

            }
            
    }else{
        catalogue();

    }
}
function liste_reservation(){
        $reservation=find_all_reservation();
     
     if (!est_gestionnaire()) {
        require_once(ROUTE_DIR.'views/hotel/catalogue.html.php');
     }
     require_once(ROUTE_DIR.'views/reservation/mesreservation.html.php');

}

function lister_reservation_en_cours(){
    $reservation=find_all_reservation_by_etat(); 
    require_once(ROUTE_DIR.'views/gestionnaire/liste.reservation.html.php');
}

function traiter_reservation(int $id_reservation,string $etat='annuler'):bool{
    return false;

}
function reserver_bien(int $id_client){
    $id_bien=$_GET['id_bien'];

    $id_client= $_SESSION['userConnect']['id_client'];

    $reser=insert_reservation($id_bien,$id_client);
    $etat_reservation='encour';


}



?>