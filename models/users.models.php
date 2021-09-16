<?php 

//fonction qui permet de recuper l'utilisateur a partir de son login et de son de son mot de passe
    function find_user($login,$password):array{
        $pdo = ouvrir_connexion_bd(); 
        $sql = "select * from user u ,role ro where u.id_role= ro.id_role and
         u.login=? and u.password=? ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($login, $password));
        //$user = $sth->fetchAll();
        $user = $sth->fetch(PDO::FETCH_ASSOC);
        fermer_connexion_bd($pdo);

        return $user==false ?: $user;

        
        

    }
    function find_add_user(array $user):int{
        $pdo = ouvrir_connexion_bd();
        extract($user);
        
        $sql = "INSERT INTO user (nom_user, prenom_user, login, password, id_role) 
        VALUES (?, ?, ?, ?, ?)";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($nom,$prenom,$login,$password,$id_role));
        $user = $sth->fetch(PDO::FETCH_ASSOC);
        fermer_connexion_bd($pdo);
        return $sth->rowCount();

    }


    



?>