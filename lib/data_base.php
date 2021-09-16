<?php 
function ouvrir_connexion_bd():PDO{
     
    try{  
        $pdo = new PDO(CHAINE_DE_CONNEXION, USRER_BD,PASSWORD_BD);
        return $pdo;
    }catch (PDOException $e){
        die ('Serveur de base de donnée non disponible');
    }

}

function fermer_connexion_bd(PDO $pdo){
  $pdo = null;
}



?>