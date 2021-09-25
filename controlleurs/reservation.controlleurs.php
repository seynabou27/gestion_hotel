<?php 
if(($_SERVER['REQUEST_METHOD']=='GET')){
    if(isset($_GET['views'])){
        if ($_GET['views']=='catalogue'){
            catalogue();
    
        }elseif($_GET['views']=='liste.chambre'){
            require_once(ROUTE_DIR.'views/gestionnaire/liste.chambre.html.php');
        }elseif($_GET['views']=='page_reservation'){
            require_once(ROUTE_DIR.'views/reservation/page_reservation.html.php');

        }elseif($_GET['views']=='inscription'){
            require_once(ROUTE_DIR.'views/security/inscription.html.php');

        }elseif($_GET['views']=='liste.reservation'){
            lister_reservation_en_cours(); 

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



function catalogue_chambre(){
    $chambres=find_all_chambre();
    require_once(ROUTE_DIR.'views/reservation/catalogue_chambre.html.php');

}
function categorie(){
    $categorie=find_all_categorie();
    require_once(ROUTE_DIR.'views/reservation/catalogue_chambre.html.php');

}
function filtre_categorie (){
    if (isset($_POST['action'])=='btn'){
        $catego=find_filtrer_categorie();
    }
   
}

function liste_reservation(){
        $reservation=find_all_reservation_by_etat();
      
     /* if (est_gestionnaire()) {
        require_once(ROUTE_DIR.'views/hotel/catalogue.html.php');
     } */ 
     require_once(ROUTE_DIR.'views/reservation/mesreservation.html.php');

}
/* function lister_reservation_un_client(int $id_client):void{
    $reservations= find_chambre_reserver_by_client($id_client);
    require(ROUTE_DIR.'views/reservation/mesreservation.html.php');
} */

function lister_reservation_en_cours(){
    $reservation=find_all_reservation_by_etat(); 
    require_once(ROUTE_DIR.'views/gestionnaire/liste.reservation.html.php');
}

function traiter_reservation(int $id_reservation,string $etat='annuler'):bool{
    return false;

}
function reserver_chambre_by_categorie(int $id_client){
    $id_categorie=$_GET['id_categorie'];

    $id_client= $_SESSION['userConnect']['id_client'];

    $reser=insert_reservation($id_categorie,$id_client);
    $etat_reservation='encour';


}



?>