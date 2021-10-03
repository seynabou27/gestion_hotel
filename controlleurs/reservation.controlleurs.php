<?php

if(($_SERVER['REQUEST_METHOD']=='GET')){
    if(isset($_GET['views'])){
        if ($_GET['views']=='catalogue'){
            catalogue();
        }elseif($_GET['views']=='add.reservation'){
            reservation();

        }elseif($_GET['views']=='liste.chambre'){
            require_once(ROUTE_DIR.'views/gestionnaire/liste.chambre.html.php');
        }elseif($_GET['views']=='page_reservation'){
            show_prestation();
            //find_detail_by_reser();
            if (est_gestionnaire()) {
                show_prestation();

                //require_once(ROUTE_DIR.'views/reservation/page_reservation.html.php');

            
            }


        }elseif($_GET['views']=='inscription'){
            require_once(ROUTE_DIR.'views/security/inscription.html.php');

        }elseif($_GET['views']=='liste.reservation'){
            $id_user=$_SESSION['userConnect']['id_user'];
            lister_reservation_en_cours(); 
            //traiter_reservation($id_reservation,$id_user,$etat_reservation);
        /* }elseif($_GET['views']=='edit'){
            $_SESSION['id_user'] =$_GET['id_user'];
            $_SESSION['id_reservation'] =$_GET['id_reservation'];
            $id = $_SESSION['id_user']['id_reservation'] ;
            //$reservation =traiter_reservation($id_reservation,$id_user,$etat_reservation)($id);
            //require_once(ROUTE_DIR. 'views/reservation/add.reservation.html.php');
         */

        }elseif($_GET['views']=='catalogue_chambre'){
            categorie();
            //filtre_categorie();
            
        }elseif($_GET['views']=='mesreservation'){
            
            if (est_client()) {
                 liste_reservation($id_user=$_SESSION['userConnect']['id_user']);

            }else {
                catalogue();
            }

        }
        
            
    }else{
        catalogue();

    }
} elseif($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['action'])) {
		if ($_POST['action']=="page_reservation") {
            /* if(isset($_POST['nbre'])){
				show_prestation()($_POST['prestation']);
			}else{ 
              */  
 
				add_reservation($_POST);

			
			


		 }
         
	}
	
	} /* elseif ($_POST['action']== 'liste.reservation'){
        header('location:'.WEB_ROUTE.'?controlleurs=reservation&views=liste.reservation');
    } */

//ajout reservation
//reservation` (`date_debut_reservation`, `montant_paye`,`etat_reservation`, `id_user`, `date_fin_reservation`, 
//`date_reservation`, `nombre_chambre`, `nombre_personne`
function add_reservation(array $post):void{
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
                $personne,
               
             ];
             update_reservation($id_reservation,$reservation);


            
            $id_reservation=insert_reservation_by_client($reservation);

            
            header('location:'.WEB_ROUTE.'?controlleurs=reservation&views=mesreservation');
               exit();

        }else{
       
            $_SESSION['arrayErreur']=$arrayErreur;
            header('location:'.WEB_ROUTE.'?controlleurs=reservation&views=page_reservation');
        }
        
    }
    
 /* function add_reservation(array $data):void{
//date_debut_reservation`, `etat_reservation`, id_user`,`date_fin_reservation`, `date_reservation`,`nombre_chambre`, `nombre_personne`       
        $arrayErreur=array();
        extract($data);
        valid_nbr_personne($personne,'personne', $arrayErreur);
        //valid_nbr_chambre ($chambre, 'nbr_chambre',$arrayErreur );
        validation_dat ($date, 'date',$arrayErreur );
        validation_dat ($date_fin, 'date_fin',$arrayErreur );
        $date=date_format(date_create($date),'Y-m-d');
       $date_fin=date_format(date_create($date_fin),'Y-m-d');
       if (form_valid($arrayErreur)) {
          
           if (!empty($data['id_reservation'])) {
               
            $reservation=[
                $date,
                0,
               "en cour",
               (int)$_SESSION['userConnect']['id_user'],
               $date_fin,
               date_format(date_create(),'Y-m-d'),
               $nbre_chambre,
                $personne,
                $data['id_reservation']
               
             ];
             update_reservation($id_reservation,$reservation);
           }else {
             /*  var_dump($id_reservation=insert_reservation_by_client($reservation));
               die('okkk'); 
            //insert_reservation_by_client($data);
            //$id_reservation=insert_reservation_by_client($reservation);
           }
           header('location:'.WEB_ROUTE.'?controlleurs=reservation&views=mesreservation');
           exit();
       
      

       
        //$id_reservation=insert_reservation_by_client($reservation);
        
        
       
        foreach ($prestation as $value){
            $insert=[
                $id_reservation,
                $value
            ];
            insert_pres($insert);
        }
            
    }else{
       
        $_SESSION['arrayErreur']=$arrayErreur;
        header('location:'.WEB_ROUTE.'?controlleurs=reservation&views=page_reservation');
    }
 } */
        
     
function catalogue_chambre(){
    $chambres=find_all_chambre();
    require_once(ROUTE_DIR.'views/reservation/catalogue_chambre.html.php');

}
function categorie(){
    $categorie=find_all_categorie_by_catalogue();
    require_once(ROUTE_DIR.'views/reservation/catalogue_chambre.html.php');

}
function reservation($nbre=1){
    $reservation=find_reservation();
    $_SESSION['nbre']=$nbre;
    $prestation=find_all_prestation();


    require_once(ROUTE_DIR.'views/gestionnaire/add.reservation.html.php');

}
function filtre_categorie (){
    if (isset($_POST['action'])=='btn'){
        $catego=find_filtrer_categorie();
    }
   
}
//liste reservation cote client
function liste_reservation(){
   
   
    $id_user=$_SESSION['userConnect']['id_user'];
    $count=count_all_reservation_client($id_user,"en cour");
    $par_page=NOMBRE_PAR_PAGE2;
    $currentPage=isset ($_GET['page'])?$_GET['page']: 1;
    $pages=ceil($count/$par_page);
    $premier=($currentPage * $par_page) - $par_page;
    $rows=find_all_reservation_client($id_user,"en cour",$premier); 
    $reservat=$rows["data"];
  
   
      
     /*  if (est_gestionnaire()) {
        require_once(ROUTE_DIR.'views/hotel/catalogue.html.php');
     }  */
     require_once(ROUTE_DIR.'views/reservation/mesreservation.html.php');

}
/* function lister_reservation_un_client(int $id_client):void{
    $reservations= find_chambre_reserver_by_client($id_client);
    require(ROUTE_DIR.'views/reservation/mesreservation.html.php');
} */

//liste reservation cote gestionnaire
function lister_reservation_en_cours(){
    $id_user=$_SESSION['userConnect']['id_user'];
    $count=count_all_reservation();
    $par_page=NOMBRE_PAR_PAGE;
    $currentPage=isset ($_GET['page'])?$_GET['page']: 1;
    $pages=ceil($count/$par_page);
    $premier=($currentPage * $par_page) - $par_page;
    $rows=find_all_reservation($premier); 
    $reservation=$rows["data"];
  
    require_once(ROUTE_DIR.'views/gestionnaire/liste.reservation.html.php');
}
//traiter les reservations
/* function traiter_reservation($id_reservation,$etat_reservation="valider"){
   
    $id_user=$_SESSION['userConnect']['id_user'];

    $traiter=find_all_traiter_reservation($id_reservation,$etat_reservation);

} */



function reserver_chambre_by_categorie(array $data):void{
    $id_categorie=$_GET['id_categorie'];

    $id_client= $_SESSION['userConnect']['id_client'];

/*     $reser=insert_reservation_by_client($data); */
   
   

	/* insert_reservation([
		$date_debut_reservation,
        $date_fin_reservation,
		$etat_reservation,
		$id_categorie,
		$id_client
	]); */ 
	/* lister_reservation_en_cours($id_client); */
   



}
function show_prestation($nbre=1){
	$prestation=find_all_prestation();
	$_SESSION['nbre']=$nbre;
	require(ROUTE_DIR.'views/reservation/page_reservation.html.php');
}
/* function find_detail_by_reser(){
    $id=$_GET['id_categorie']; 
    $categorie=find_categorie_by_id_by_reser($id);
  
	require(ROUTE_DIR.'views/reservation/page_reservation.html.php');

} */




?>