<?php 

//fonction qui permet de recuper l'utilisateur a partir de son login et de son de son mot de passe
    function find_user($login,$password){
        $pdo = ouvrir_connexion_bd(); 
        $sql = "select * from user u ,role ro where u.id_role= ro.id_role and
         u.login=? and u.password=? ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($login, $password));
        //$user = $sth->fetchAll();
        $user = $sth->fetch(PDO::FETCH_ASSOC);
        fermer_connexion_bd($pdo);
        return $user; 
          

        
        

    }
    function find_user_by_id($id_user){
        $pdo = ouvrir_connexion_bd(); 
        $sql = " SELECT * from user u where u.id_user= ?; ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($id_user));
        //$user = $sth->fetchAll();
        $user = $sth->fetch(PDO::FETCH_ASSOC);
        fermer_connexion_bd($pdo);
        return $user; 
          

        
        

    }
   
    
    function insert_user(array $user):int{
        
        $pdo = ouvrir_connexion_bd();
        extract($user);
        $sql = "INSERT INTO `user` (`nom_user`, `prenom_user`, `login`, `password`, `adresse_user`, `id_role`, `Avatar`, `telephone`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($nom,$prenom,$login,$password,$adresse,$id_role,$avatar,$telephone));
        $user = $sth->fetch(PDO::FETCH_ASSOC);
        fermer_connexion_bd($pdo);
        return $sth->rowCount();

    }


    



?>