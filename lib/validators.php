<?php
//fonction de validation prenom

/*function validation_password($password){
    if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
        echo 'the password does not meet the requirements!';
    }
    

}
//fonction validation de l'email
function validation_login(){
    $pattern="#^[a-zA-Z]{1}\w{4,10}@(yahoo|hotmail|gmail)\.[a-zA-Z]{2,3}$#";
    $chaine="A1233@gmail.fr";
if(preg_match($pattern,$chaine)){
    echo "VRAI";
}else {
    echo "FAUX";
}

}*/







/* if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]
{6,15}$/',($_POST['password']))) {
    $message='Password must contain 6 characters of letters, numbers and 
    at least one special character.';
} */


function validation_login(string $valeur , string $key, array &$arrayErreur):void{

    if (est_vide($valeur)) {
        $arrayErreur[$key]= 'le champs est obligatoire';
    }elseif (preg_match('VALID_EMAIL',($_POST['login']))) {
        $arrayErreur[$key]= 'saisir un email valide (exemple123@gmail.com)';
    }
}

function validation_password(string $valeur, string $key,array &$arrayErreur):void{
    if (est_vide($valeur)) {
        $arrayErreur[$key]= 'le champs est obligatoire'; 
        
    }elseif (preg_match('VALID_PASSWORD',($_POST['password']))) {
        
        $arrayErreur[$key]= 'Veiller saisir une taille valide';
    }
  
}

function validation_prenom(string $valeur , string $key,array &$arrayErreur){
    if(est_vide($valeur)) {
        $arrayErreur[$key]= 'le champs est obligatoire'; 
    }
}

function validation_nom(string $valeur , string $key,array &$arrayErreur){
    if(est_vide($valeur)) {
        $arrayErreur[$key]= 'le champs est obligatoire'; 
    }
}
function valid_code(string $valeur , string $key,array &$arrayErreur){
    if(est_vide($valeur)) {
        $arrayErreur[$key]= 'le champs est obligatoire'; 
    }

}
/* 
function valid_pays(string $valeur , string $key,array &$arrayErreur){
    if(est_vide($valeur)) {
        $arrayErreur[$key]= 'le champs est obligatoire'; 
    }

} */
 /* function validation_phone($valeur , string $key,array &$arrayErreur){
    if(est_vide($valeur)) {
        $arrayErreur[$key]= 'le champs est obligatoire'; 
    }elseif ($valeur<=0){
        $arrayErreur[$key]= 'Saisir un nombre positif';

    }

} */





















function est_vide( $valeur):bool{
    return empty($valeur);
}

function est_entier($valeur):bool{
    $entier = (int) $valeur;
    return is_int($entier);

}

function est_numerique($valeur):bool{
    $entier = (int) $valeur;
    return is_int($entier);

}
function form_valid($arrayErreur):bool{
    if (count($arrayErreur)==0){
        return true;

    }

    return false;

}



function est_email($valeur):bool{
    if(filter_var($valeur,FILTER_VALIDATE_EMAIL)){
        return true;
    
    }else{
        return false;
    }
}


function verif_taille(string $valeur, int $min=6 , int $max=10):bool{
    
            return strlen($valeur) > $min || strlen($valeur) < $max;
}
    
    
    function validation_dat(string $valeur , string $key,array &$arrayErreur){
        if(est_vide($valeur)) {
            $arrayErreur[$key]= 'le champs est obligatoire'; 
        }
    }

   
    
    

    function validation_nombrereponse(string $valeur , string $key,array &$arrayErreur){
       if (est_vide($valeur)) {
           $arrayErreur[$key]= 'Le champs est obligatoire';
       }elseif ($valeur<=0){
        $arrayErreur[$key]= 'Saisir un nombre positif';

       }
    }

    function validation_typereponse( $valeur , string $key,array &$arrayErreur){
        if (est_vide($valeur)) {
            $arrayErreur[$key]= 'le champs est obligatoire';
        }
    }
    function valid_input( $valeur , string $key,array &$arrayErreur){
        if (est_vide($valeur)) {
            $arrayErreur[$key]='Le champ est obligatoire';
        }
    }

    function validation_nbrpoint( $valeur , string $key,array &$arrayErreur){
        if (est_vide($valeur)) {
            $arrayErreur[$key]= 'le champs est obligatoire';
        }elseif($valeur<=0){
            $arrayErreur[$key]= 'Saisir un nombre positif';
        }
    }

    /*function validation_nombrereponse($valeur , string $key,array &$arrayErreur){
        if (est_vide($valeur)) {
            $arrayErreur[$key]= 'Le champs est obligatoire';
        }elseif ($valeur<=0){
         $arrayErreur[$key]= 'Saisir un nombre positif';
 
        }
     }*/

    
    
    /*function valid_point($valeur,string $key,array &$arrayErreur){
        if (empty($valeur)) {
            $arrayErreur[$key] = "Ce champ est obligatoire ";
        }elseif ($valeur<=0) {
            $arrayErreur[$key] = "Veillez saisir un nombre positif";
        }
    }
    
    
    function valid_nbr_reponse($valeur,string $key,array &$arrayErreur){
        if (empty($valeur)) {
            $arrayErreur[$key] = "Ce champ est obligatoire ";
        }elseif ($valeur<=0) {
            $arrayErreur[$key] = "Veillez saisir un nombre positif";
        }
    }
    function validation_typereponse($valeur , string $key,array &$arrayErreur){
        if (est_vide($valeur)) {
            $arrayErreur[$key]= 'le champs est obligatoire';
        }
    }

    function nombrePageTotal($array, $nombreElement): int {
        $nombrePage = 0;
        $longueurArray = count($array);
        if ($longueurArray % $nombreElement == 0) {
            $nombrePage = $longueurArray / $nombreElement;
        } else {
            $nombrePage = ($longueurArray / $nombreElement) + 1;
        }
        return $nombrePage;
    }

function get_element_to_display($array, int $page, int $nombreElement): array {
    $arrayElement = [];
    $indiceDepart = ($page*$nombreElement) - $nombreElement;
    $limitElement = $page * $nombreElement;
    for ($i = $indiceDepart; $i < $limitElement; $i++) {
        if ($i >= count($array)) {
            return $arrayElement;
        } else {
            $arrayElement[] = $array[$i];
        }
    }
    return $arrayElement;
}*/
?>



