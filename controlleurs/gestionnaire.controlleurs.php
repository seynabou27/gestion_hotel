<?php

if(($_SERVER['REQUEST_METHOD']=='GET')){
    if(isset($_GET['views'])){
        if ($_GET['views']=='catalogue'){
            catalogue();
        }elseif($_GET['views']=='add.reservation'){
            reservation();
            //require_once(ROUTE_DIR.'views/gestionnaire/add.reservation.html.php');

        }elseif($_GET['views']=='liste.chambre'){
            require_once(ROUTE_DIR.'views/gestionnaire/liste.chambre.html.php');

        }elseif($_GET['views']=='liste.client'){
            liste_client();

        
        }elseif($_GET['views']=='ajout.chambre'){
            chambre_by_gestionnaire();
        }elseif($_GET['views']=='ajout.categorie'){
            require_once(ROUTE_DIR.'views/gestionnaire/ajout.categorie.html.php');
        
        }elseif($_GET['views']=='confirmation'){
            require_once(ROUTE_DIR.'views/gestionnaire/confirmation.html.php');
        }elseif($_GET['views']=='tableau_bord'){
            total_hotel();

        }elseif($_GET['views']=='liste.categorie'){
            categorie_by_gestionnaire();    
            
        }elseif($_GET['views']=='liste.reservation'){
            $id_user=$_SESSION['userConnect']['id_user'];
            lister_reservation_en_cours(); 
/*             filtre_etat();
 */        }elseif($_GET['views']=='edit'){

            $_SESSION['id_reservation'] =$_GET['id_reservation'];
            $id=$_SESSION['id_reservation'];
            $reservat=find_all_reservation_by_id($id);
            /* var_dump($reservat);
            die('okkk');  */
            $reservation=reservation();
           
            require_once(ROUTE_DIR.'views/gestionnaire/add.reservation.html.php');

        }elseif($_GET['views']=='modif'){

            $_SESSION['id_chambre'] =$_GET['id_chambre'];
            $id=$_SESSION['id_chambre'];
            $chambre=find_all_chambre_by_id($id); 
            //$chambres= chambre_by_gestionnaire(); 
            require_once(ROUTE_DIR.'views/gestionnaire/ajout.chambre.html.php');


        
        }elseif($_GET['views']=='catalogue_chambre'){
            categorie();
            //filtre_categorie();
            
        }elseif($_GET['views']=='ajout.reservation'){
            prestation_by_reservation();

        }
        
            
    }else{
        catalogue();

    }
} elseif($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['action'])) {
		if ($_POST['action']=="ajout.categorie") {
 
				add_categorie($_POST);

		} elseif ($_POST['action']== 'edit'){
            /* var_dump($_POST);
            die('okkk');  */ 
            add_reservation($_POST);
            header('location:'.WEB_ROUTE.'?controlleurs=reservation&views=liste.reservation');
        
    } elseif($_POST['action']== "ajout.chambre"){
       
        add_chambre($_POST);
    }elseif ($_POST['action']== 'modif'){
        add_chambre_by_gestionnaire($_POST);
        header('location:'.WEB_ROUTE.'?controlleurs=gestionnaire&views=liste.chambre');
         
	} elseif($_POST['action']== "ajout.reservation"){
       
        add_reservation_by_gestionnaire($_POST);
    }
	
	} 
    }



    //inserer catégorie
    //`code_categorie`, `description`, `tarif_unit`, `nom_categorie`
    function add_categorie(array $post):void{
        $arrayErreur=array();
         extract($post);
         valid_prix_categorie($prix,'prix', $arrayErreur);
        valid_code_categorie($code, 'code',$arrayErreur );
        valid_nom_categorie($nom, 'nom',$arrayErreur );
        //valid_descrip($description, 'texte',$arrayErreur );
        if (form_valid($arrayErreur)) {
            $categorie=[
                $code,
                $texte,
                $prix,
                $nom
               
             ];
            
            
            $id_categorie=insert_categorie($categorie);

            
            header('location:'.WEB_ROUTE.'?controlleurs=gestionnaire&views=liste.categorie');
               exit();

        }else{
       
            $_SESSION['arrayErreur']=$arrayErreur;
            header('location:'.WEB_ROUTE.'?controlleurs=gestionnaire&views=ajout.categorie');
        }
        
    }

     //inserer chambre
    //`numero_chambre`, `telephone_chambre`,`etat_chambre`
    function add_chambre(array $post):void{
        $arrayErreur=array();
         extract($post);
         //valid_numero($chambre,'numero', $arrayErreur);
        valid_numero_chambre($numero,'numero_chambre',$arrayErreur );
        
        if (form_valid($arrayErreur)) {
            $chambre=[
               $numero_chambre,
                $numero,
                "disponible"
               
             ];
            
             
            $id_chambre=insert_chambre_by_gestionnaire($chambre);
           /* var_dump($chambre);
             die('okkk'); */

            
            header('location:'.WEB_ROUTE.'?controlleurs=gestionnaire&views=liste.chambre');
               exit();

        }else{
       
            $_SESSION['arrayErreur']=$arrayErreur;
            header('location:'.WEB_ROUTE.'?controlleurs=gestionnaire&views=ajout.chambre');
        }
        
    }
    function add_chambre_by_gestionnaire(array $post):void{
        $arrayErreur=array();
         extract($post);
        if (form_valid($arrayErreur)) {
           
                if (isset($post['id_chambre']) ) {
                   if (est_gestionnaire()) {
                    $chambre=[
                        $numero_chambre,
                         $numero,
                         "disponible"
                        
                      ];
                        
            
                        update_chambre($chambre);
                        header("location:" .WEB_ROUTE.'?controlleurs=gestionnaire&views=liste.chambre');
                        exit;
                    }
                }
             
             

            

            
            
 
        }else{
       
            $_SESSION['arrayErreur']=$arrayErreur;
            header('location:'.WEB_ROUTE.'?controlleurs=reservation&views=page_reservation');
        }
        
    }

    //ajout reservation
//reservation` (`date_debut_reservation`, `montant_paye`,`etat_reservation`, `id_user`, `date_fin_reservation`, 
//`date_reservation`, `nombre_chambre`, `nombre_personne`
function add_reservation_by_gestionnaire(array $post):void{
   
    $arrayErreur=array();
     extract($post);
     valid_nbr_personne($personne,'personne', $arrayErreur);
    //valid_nbr_chambre ($chambre, 'nbr_chambre',$arrayErreur );
    validation_dat ($date, 'date',$arrayErreur );
    validation_dat ($date_fin, 'date_fin',$arrayErreur );
    //$date=date_format(date_create($date),'Y-m-d');
    //$date_fin=date_format(date_create($date_fin),'Y-m-d');
    if (form_valid($arrayErreur)) {
        $reservation=[
            $date,
            0,
           "en cour",
           (int)$_SESSION['userConnect']['id_user'],
           $date_fin,
           date_format(date_create(),'Y-m-d'),
           $nbre_chambre,
            $personne
           
         ];
         
        
        $id_reservation=insert_reservation_gestionnaire($reservation);
        $user=[
            $nom,
            $prenom,
            $login,
            $password,
            $adresse,
            $id_role,
            $avatar,
            $telephone
           
         ];
         $id_user=insert_user_by_gestionnaire($user);
         /* var_dump($id_user=insert_user_by_gestionnaire($user));
         die('okk'); */

         $prestation=[
            $nom_pres,
             $prix,
             $code
            
          ];
         
          
         $id_prestation=insert_pres_by_gestionnaire($prestation);        
        header('location:'.WEB_ROUTE);
           exit();

    }else{
   
        $_SESSION['arrayErreur']=$arrayErreur;
        header('location:'.WEB_ROUTE.'?controlleurs=reservation&views=ajout.reservation');
    }
    
}
    
function categorie(){
    $categorie=find_all_categorie_by_catalogue();
    require_once(ROUTE_DIR.'views/reservation/catalogue_chambre.html.php');

}
function categorie_by_gestionnaire(){
    $categorie=find_all_categorie_by_catalogue();
    require_once(ROUTE_DIR.'views/gestionnaire/liste.categorie.html.php');

}
function chambre_by_gestionnaire(){
    $categorie=find_all_categorie_by_catalogue();
    $chambre=find_all_chambre_by_gestionnaire();
    require_once(ROUTE_DIR.'views/gestionnaire/ajout.chambre.html.php');

}
function reservation($nbre=1){
    $reservation=find_reservation();
    $_SESSION['nbre']=$nbre;
    $prestation=find_all_prestation();


    require_once(ROUTE_DIR.'views/gestionnaire/add.reservation.html.php');

}
/* function confirmation(){
    $supprimer=delete_reservation();
    


    require_once(ROUTE_DIR.'views/gestionnaire/liste.reservation.html.php');

} */
function filtre_etat(){
    if($_POST['envoyer']){
        $filtre= $_POST['filtre'];
        find_reservation_by_filtre();
    }
   
}
function prestation_by_reservation(){
    $pres=find_all_prestation_by_gestionnaire();
    $chambres= find_chambre_disponible_by_gestionnaire();
    $reservation=find_reservation();
    $categorie=find_all_categorie_by_gestionnaire();
    require_once(ROUTE_DIR.'views/gestionnaire/ajout.reservation.html.php');

}


//liste reservation cote gestionnaire
function lister_reservation_en_cours(){
    $id_user=$_SESSION['userConnect']['id_user'];
    $count=count_all_reservation();
    $par_page=NOMBRE_PAR_PAGE1;
    $currentPage=isset ($_GET['page'])?$_GET['page']: 1;
    $pages=ceil($count/$par_page);
    $premier=($currentPage * $par_page) - $par_page;
    $rows=find_all_reservation($premier); 
    $reservation=$rows["data"];
  
    require_once(ROUTE_DIR.'views/gestionnaire/liste.reservation.html.php');
}
 function liste_client(){
     $clients=find_all_client();
    require_once(ROUTE_DIR.'views/gestionnaire/liste.client.html.php');


 }
 function total_hotel(){
     $client=count_client('client');
     $catego=count_categorie();
     $chambre=count_chambre();
     $reservation=count_reservation();
     require_once(ROUTE_DIR.'views/gestionnaire/tableau_bord.html.php');


 }





?>