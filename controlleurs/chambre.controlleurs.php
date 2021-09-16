<?php 

    if(($_SERVER['REQUEST_METHOD']=='GET')){
        if(isset($_GET['views'])){
            if ($_GET['views']=='catalogue'){
                require_once(ROUTE_DIR.'views/hotel/catalogue.html.php');

            }elseif($_GET['views']=='detail'){
                require_once(ROUTE_DIR.'views/hotel/detail.html.php');  

            }elseif($_GET['views']=='connexion'){
                require_once(ROUTE_DIR.'views/security/connexion.html.php');
                

            }elseif($_GET['views']=='inscription'){
                require_once(ROUTE_DIR.'views/security/inscription.html.php');

            }
        }else{
           require_once(ROUTE_DIR.'views/hotel/catalogue.html.php');

        }
    }





?>