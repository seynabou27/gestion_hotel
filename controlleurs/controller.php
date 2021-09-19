<?php 
function catalogue(){
    $biens=find_bien_disponible();
    require_once(ROUTE_DIR.'views/bien/catalogue.html.php');
   
}


?>