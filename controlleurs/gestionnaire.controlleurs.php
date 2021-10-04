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
        }elseif($_GET['views']=='page_reservation'){
            show_prestation();

            if (est_gestionnaire()) {
                show_prestation();
            }
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

		} elseif ($_POST['action']== 'edit'){
            /* var_dump($_POST);
            die('okkk');  */ 
            add_reservation($_POST);
            header('location:'.WEB_ROUTE.'?controlleurs=reservation&views=liste.reservation');

    } 
         
	}
	
	} 


    //cote gestionnaire
    function add_reservation_by_gestionnaire(array $post):void{
       /*  var_dump($post);
        die('ohhh'); */
         extract($post);
        $date=date_format(date_create($date),'Y-m-d');
        $date_fin=date_format(date_create($date_fin),'Y-m-d');
        if (!empty($post['id_reservation'])) {
            $reservation=[
                $date,
                0,
               "en cour",
               (int)$_SESSION['userConnect']['id_user'],
               $date_fin,
               date_format(date_create(),'Y-m-d'),
               $nbre_chambre,
                $personne,
                $post['id_reservation']

               
             ];
             update_reservation($id_reservation,$reservation);
            
            header('location:'.WEB_ROUTE.'?controlleurs=reservation&views=add.reservation');
               exit();

        }
        
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
function filtre_etat(){
    if($_POST['envoyer']){
        $filtre= $_POST['filtre'];
        find_reservation_by_filtre();
    }
   
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






?>