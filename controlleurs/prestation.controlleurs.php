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
    
        }elseif($_GET['views']=='liste_prestation'){
            liste_prestation(); 

        }elseif($_GET['views']=='ajout_prestation'){
            require_once(ROUTE_DIR.'views/gestionnaire/ajout_prestation.html.php');

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
} elseif($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['action'])) {
		if ($_POST['action']=="ajout_prestation") {
            
 
				add_prestation($_POST);

		} 
    }
}

//`designation_pres`, `prix_unit`, `code_pres`
function add_prestation(array $post):void{
  

     extract($post);
     
    if (form_valid($arrayErreur)) {
        $prestation=[
           $nom_pres,
            $prix,
            $code
           
         ];
        
         
        $id_prestation=insert_pres($prestation);
        /* var_dump($prestation);
        die('okk'); */
       

        
        header('location:'.WEB_ROUTE.'?controlleurs=prestation&views=liste_prestation');
           exit();
           

    }else{
   
        $_SESSION['arrayErreur']=$arrayErreur;
        header('location:'.WEB_ROUTE.'?controlleurs=prestation&views=ajout_prestation');
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