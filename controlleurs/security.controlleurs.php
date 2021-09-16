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
                

                }
            }else{
              require_once(ROUTE_DIR.'views/security/connexion.html.php');

            }
        }elseif($_SERVER['REQUEST_METHOD'] =='POST'){
            if (isset($_POST['action'])) {
                if ($_POST['action']== 'connexion') {
                    connexion($_POST['login'],$_POST['password']);
                }elseif ($_POST['action'] == 'inscription'){
                    unset($_POST['controller']);
                    unset($_POST['action']);
                    unset($password['controller']);
                    
                    inscription($_POST);

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

        if (count($user)==0) {
            $arrayErreur['erreurConnexion']='login ou password incorrect' ;  
            $_SESSION['arrayErreur']=$arrayErreur;    
            header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');
            exit();
            
        }else{
           
            $_SESSION['userConnect']=$user;
            if($user['nom_role']=='gestionnaire'){
              header('location:'.WEB_ROUTE.'?controlleurs=reservation&views=liste.reservation');
        
            }else{
                header('location:'.WEB_ROUTE);
            }
    
        }
        
    }else{
       
        $_SESSION['arrayErreur']=$arrayErreur;
        header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');
    }

}

function inscription(array $data):void{
    extract($data);
    $arrayErreur=array();
    validation_login ($login,'login', $arrayErreur);
    validation_password ($password, 'password',$arrayErreur );
    validation_prenom($prenom, 'prenom',$arrayErreur);
    validation_nom($nom, 'nom',$arrayErreur);
        if(form_valid($arrayErreur)){
            $data ['id_role'] = 1;
            find_add_user($data);
            header("location:" .WEB_ROUTE.'?controlleurs=bien&views=catalogue');
       
    
        }else{
            $_SESSION['arrayErreur'] = $arrayErreur;
            header("location:" .WEB_ROUTE.'?controlleurs=security&views=inscription');
        }
        
        
} 

function deconnexion():void{

    unset ($_SESSION['userConnect']);
    header('location:'.WEB_ROUTE.'?controlleurs=bien&views=catalogue');
    
}

?>