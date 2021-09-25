<?php
            
        if(($_SERVER['REQUEST_METHOD']=='GET')){
            if(isset($_GET['views'])){
                if ($_GET['views']=='connexion'){
                     require_once(ROUTE_DIR.'views/security/connexion.html.php');
                }elseif ($_GET['views']=='inscription'){
                    require_once(ROUTE_DIR.'views/security/inscription.html.php');
                }elseif ($_GET['views']=='deconnexion'){
                    deconnexion();
                    require_once(ROUTE_DIR.'views/security/connexion.html.php');
                    exit();
                }
            }else{
              require_once(ROUTE_DIR.'views/security/connexion.html.php');
              exit();

            }
        }elseif($_SERVER['REQUEST_METHOD'] =='POST'){
            if (isset($_POST['action'])) {
                if ($_POST['action']== 'connexion') {
                    connexion($_POST['login'],$_POST['password']);
                }elseif ($_POST['action'] == 'inscription'){
                    unset($_POST['controller']);
                    unset($_POST['action']);
                    unset($password['controller']); 
                    
                    inscription($_POST,$_FILES);

                   // header('location:'.WEB_ROUTE.'?controlleurs=admin&views=connexion');

                }elseif ($_POST['action']== 'btn') {
                    
                }

            }
            
            
        }    
 
function connexion(string $login, string $password): void{
    /* var_dump($_POST );
    die('ok');  */
    $arrayErreur=array();
    validation_login ($login,'login', $arrayErreur);
    validation_password ($password, 'password',$arrayErreur );
    
    
    if(form_valid($arrayErreur)){
        
        $user=find_user($login, $password);

        if ( $user==false) {
           
            $arrayErreur['erreurConnexion']='login ou password incorrect' ;  
            $_SESSION['arrayErreur']=$arrayErreur;    
            header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');
            exit();
            
        }else{
           
            $_SESSION['userConnect']=$user;
            if($user['nom_role']=='gestionnaire'){
              header('location:'.WEB_ROUTE.'?controlleurs=reservation&views=liste.reservation');
        
            }else{
                header('location:'.WEB_ROUTE.'?controlleurs=reservation&views=mesreservation');
            }
    
        }
        
    }else{
       
        $_SESSION['arrayErreur']=$arrayErreur;
        header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');
    }

}

function inscription(array $data,array $file):void{
   
    extract($data);
    $arrayErreur=array();
    validation_login ($login,'login', $arrayErreur);
    validation_password ($password, 'password',$arrayErreur );
    validation_prenom($prenom, 'prenom',$arrayErreur);
    validation_nom($nom, 'nom',$arrayErreur);
    valid_code($adresse,'adresse',$arrayErreur);
    //valid_pays($pays,'pays',$arrayErreur);
    //validation_phone( $phone,'telephone',$arrayErreur);
   

        if(form_valid($arrayErreur)){
            $data ['id_role'] = 1;
            $target_dir="upload/";
            $target_file=$target_dir.basename($_FILES['avatar']['name']);
            $data['avatar']=$target_file;
        
            insert_user($data);
            valide_image($_FILES, $arrayErreur, 'avatar', $target_file);
            //upload_image($_FILES, $target_file);
           
              if(count($arrayErreur) == 0) {
                if(!upload_image($_FILES, $target_file)) {
                    $arrayErreur['avatar'] = "Erreur lors de l'upload de l'image";
                    $_SESSION['arrayErreur']=$arrayErreur;
                    header('location:'.WEB_ROUTE.'?controlleurs=security&views=inscription');
                    exit();
              }
            }
            
            header("location:" .WEB_ROUTE.'?controlleurs=hotel&views=catalogue');
            
       
    
        }else{
            $_SESSION['arrayErreur'] = $arrayErreur;
            header("location:" .WEB_ROUTE.'?controlleurs=security&views=inscription');
        }
        
        
} 

function deconnexion():void{

    unset ($_SESSION['userConnect']);
    session_destroy() ;
    header('location:'.WEB_ROUTE.'?controlleurs=chambre&views=catalogue');
    exit;
    
}

?>