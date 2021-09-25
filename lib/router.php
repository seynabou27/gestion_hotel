<?php
 //require_once('controlleurs/security.php');

 //URL = http://localhost:8000/URI

// URI= controlleur= nom_controlleur&views=nom_page

if (isset ($_REQUEST['controlleurs'])){

    if ($_REQUEST['controlleurs']=='security') {
        
         require_once(ROUTE_DIR.'controlleurs/security.controlleurs.php');

    }elseif ($_REQUEST['controlleurs']=='chambre'){

         require_once (ROUTE_DIR.'controlleurs/chambre.controlleurs.php');

    }elseif ($_REQUEST['controlleurs']=='reservation'){
     
         require_once (ROUTE_DIR.'controlleurs/reservation.controlleurs.php');

    }elseif ($_REQUEST['controlleurs']=='prestation'){
     
     require_once (ROUTE_DIR.'controlleurs/prestation.controlleurs.php');
    }else {
         require_once(ROUTE_DIR.'views/security/connexion.html.php');
    }

}else{
     require_once (ROUTE_DIR.'controlleurs/chambre.controlleurs.php');
}


?>