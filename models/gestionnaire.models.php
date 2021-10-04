<?php 
    function find_all_client():array{
        $pdo = ouvrir_connexion_bd();
        $sql = "select * from user u ; ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $client = $sth->fetchAll();
        fermer_connexion_bd($pdo);
        return $client;

    }
    function find_all_prestation_by_gestionnaire():array{
        $pdo=ouvrir_connexion_bd();
        $sql="select * from prestation p ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $prestation = $sth->fetchAll();
        fermer_connexion_bd($pdo);
        return $prestation;
    }
    function find_chambre_disponible_by_gestionnaire():array{
        $pdo = ouvrir_connexion_bd();
        $sql = "select * from image i ,categorie c , chambre ch
        where i.id_categorie=c.id_categorie and
                ch.id_categorie=c.id_categorie and

         ch.etat_chambre=?";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array('disponible'));
        $chambredispo = $sth->fetchAll();
        fermer_connexion_bd($pdo);
        return $chambredispo;

    }
    function find_reservation_by_gestionnaire():array{
        $pdo = ouvrir_connexion_bd(); 
            $sql = "select * from reservation r " ;
            $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $sth->execute();
            $reser = $sth->fetchAll(PDO::FETCH_ASSOC);
    
            fermer_connexion_bd($pdo);
            return $reser;
    
    }
    function find_all_categorie_by_gestionnaire():array{
        $pdo = ouvrir_connexion_bd();
        $sql = "select * from categorie c";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $categorie = $sth->fetchAll();
        fermer_connexion_bd($pdo);
        return $categorie;

    }









?>