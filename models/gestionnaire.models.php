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
    function find_all_chambre_by_gestionnaire():array{
        $pdo = ouvrir_connexion_bd();
        $sql = "select * from chambre ch";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $chambre= $sth->fetchAll();
        fermer_connexion_bd($pdo);
        return $chambre;

    }
    function insert_categorie(array $categorie):int{
        $pdo = ouvrir_connexion_bd();
        $sql="INSERT INTO `categorie` (`code_categorie`, `description`, `tarif_unit`, `nom_categorie`) 
        VALUES (?, ?, ?, ?);";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute($categorie);
        $dernier_id = $pdo->lastInsertId();
        fermer_connexion_bd($pdo);
        return $dernier_id ;
    }
    function insert_chambre_by_gestionnaire(array $chambre):int{
        $pdo = ouvrir_connexion_bd();
        $sql="INSERT INTO `chambre` (`numero_chambre`, `telephone_chambre`,`etat_chambre`) 
        VALUES (?, ?, ?);";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute($chambre);
        $dernier_id = $pdo->lastInsertId();
        fermer_connexion_bd($pdo);
        return $dernier_id ;
    }
    function insert_pres(array $prestation):int{
     
        $pdo = ouvrir_connexion_bd();
        $sql="INSERT INTO `prestation` (`designation_pres`, `prix_unit`, `code_pres`) 
        VALUES (?, ?, ?);";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
      $sth->execute($prestation);
      $dernier_id = $pdo->lastInsertId();
      var_dump($dernier_id);
      fermer_connexion_bd($pdo);
      return $dernier_id ;
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
      function find_chambre_by_categorie_and_etat($id_categorie):array{
        $pdo = ouvrir_connexion_bd();
        $sql = "SELECT * FROM `chambre`  
                    WHERE id_categorie=? 
                    and etat_chambre=? ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($id_categorie,'disponible'));
        $chambredispo = $sth->fetchAll();
        fermer_connexion_bd($pdo);
        return $chambredispo;
    }
    function update_etat_chambre_indisponible($id_chambre):array{
        $pdo = ouvrir_connexion_bd();
        $sql = "UPDATE `chambre` SET etat_chambre=? 
                    WHERE id_chambre=? ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array('indisponible',$id_chambre));
        $chambredispo = $sth->fetchAll();
        fermer_connexion_bd($pdo);
        return $chambredispo;
    }
   /*  function find_chambre_disponible():array{
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

    } */
    function update_reservation(array $reservation):int{
    
        $pdo = ouvrir_connexion_bd(); 
            $sql = "UPDATE reservation r   
                        SET date_debut_reservation = ? ,etat_reservation = ? ,
                            date_fin_reservation = ? ,date_validation = ? ,nombre_chambre = ? ,nombre_personne = ? 
                        WHERE r.id_reservation= ?; " ;
            $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $sth->execute($reservation);
            fermer_connexion_bd($pdo);
            return $sth -> rowCount();
    }
    function delete_reservation(array $reservation):int{
        $pdo = ouvrir_connexion_bd();
        $sql ="DELETE FROM reservation r
        WHERE r.id_reservation = ? ;";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute($reservation);
        fermer_connexion_bd($pdo);
        return $sth -> rowCount();
    }
    function total_reservation():int{ 

        $pdo = ouvrir_connexion_bd();
        $sql = "SELECT COUNT(*) FROM reservation r";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $totalereser= $sth->fetchAll();
        fermer_connexion_bd($pdo);
        return $sth -> rowCount();
    }
    function total_client():int{ 

        $pdo = ouvrir_connexion_bd();
        $sql = "SELECT COUNT(*) FROM user u";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $totaleuser= $sth->fetchAll();
        fermer_connexion_bd($pdo);
        return $sth -> rowCount();
    }
    function total_categorie():int{ 

        $pdo = ouvrir_connexion_bd();
        $sql = "SELECT COUNT(*) FROM categorie c ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $totalecatego= $sth->fetchAll();
        fermer_connexion_bd($pdo);
        return $sth -> rowCount();
    }

    function total_chambre():int{ 

        $pdo = ouvrir_connexion_bd();
        $sql = "SELECT COUNT(*) FROM chambre ch";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $totaleuser= $sth->fetchAll();
        fermer_connexion_bd($pdo);
        return $sth -> rowCount();
    }







?>