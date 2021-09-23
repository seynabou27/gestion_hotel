<?php 
function catalogue(){
    $chambre=find_chambre_disponible();
    require_once(ROUTE_DIR.'views/chambre/catalogue.html.php');
   
}


?>