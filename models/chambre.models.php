<?php 
    
//fonction select

    function find_all_bien():array{
        $pdo = ouvrir_connexion_bd();
        $sql = "select * from bien b ,user u 
        where b.id_user=u.id_user ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $bien = $sth->fetchAll();
        fermer_connexion_bd($pdo);
        return $bien;

    }
    function find_bien_disponible():array{
        $pdo = ouvrir_connexion_bd();
        $sql = "select * from bien b where b.etat_bien=?";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array('disponible'));
        $biendispo = $sth->fetchAll();
        fermer_connexion_bd($pdo);
        return $biendispo;

    }


    function find_bien_reservation_by_client(int $id_bien):array{
        $pdo = ouvrir_connexion_bd(); 
        $sql = "select * from bien b, reservation r,users u where 
            b.id_bien=r.id_bien and r.id_users=?";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($id_bien));
        $bien = $sth->fetchall();
        fermer_connexion_bd($pdo);
        return $bien;
    }
    function find_bien_by_id(int $id_bien):array{
        $pdo = ouvrir_connexion_bd();
        //Execution d'une requete non prepare avec un jocker qui est nommé
        //$sql = "select * from bien b where b.id_bien=$id_bien";

        //Execution d'une requete prepare avec un jocker qui est nommé
        $sql = "select * from bien b where b.id_bien= ? ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($id_bien));
        $bien = $sth->fetch();


        //Execution d'une requete prepare avec un jocker qui est nommé
        /* $sql = "select * from bien b where b.id_bien= :x";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':x' => $id_bien));
        //fetchAll()permet de recuperer tout les résultats ou toutes les tables
        $bien = $sth->fetch(); */

        fermer_connexion_bd($pdo);

        return $bien;

    }

    function insert_bien(int $id_bien):int{
        //a voir
        extract($bien);
        $pdo = ouvrir_connexion_bd();
        $sql = "INSERT INTO `bien` (`id_bien`, `reference_bien`, `description_bien`, 
        `type_bien`, `date_creation`, `prix`, `etat_bien`, `id_user`, `id_zone`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $now=date_create();
        $now = date_format($now, 'Y-m-d H:i:s');
        $sth->execute([$id_bien,$etat_bien ,$type_bien,$reference_bien,$description_bien,$id_zone,$id_user,$now]);
        
        fermer_connexion_bd($pdo);
       
        return $sth->rowCount();
    

    }

    function update_bien(int $id_bien):int{
        $pdo = ouvrir_connexion_bd();
        extract($bien);
        $sql = "UPDATE `bien` SET `reference_bien` = ?, `type_bien` = ?, `date_creation` = ?, `prix` = ?,
         `etat_bien` = ?, `id_user` = ?, `id_zone` = ? 
         WHERE `bien`.`id_bien` = ?; ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute([$etat_bien ,$type_bien,$date_creation,$description_bien,$id_zone,$adress,$id_bien]);
        
        fermer_connexion_bd($pdo);
       
        return $sth->rowCount();
    

    }

    function delete_bien(int $id_bien):int{
        $pdo = ouvrir_connexion_bd();
        $sql = "delete from bien b where b.id_bien=?";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $now=date_create();
        $now = date_format($now, 'Y-m-d ');
        //$sth->execute([$etat_bien ,$type_bien,$reference_bien,$description_bien,$now]);
        
        fermer_connexion_bd($pdo);
       
        return $sth->rowCount();
        
    

    }

    //filtrer les réservations par bien, par date, par état et par client
    function find_filtrer_reservation(){
        $pdo = ouvrir_connexion_bd();
        //a voir
        $sql = "SELECT * FROM reservation r, users u, bien b
        where 
        u.id_users=r.id_users
        and 
        b.id_bien=r.id_bien
        GROUP by
        b.id_bien, r.date_reservation, r.etat_reservation, u.id_users ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array([]));
        $reservation = $sth->fetchall();
        fermer_connexion_bd($pdo);

        return $reservation;

    }

    //filtrer les biens par zone et par état
    function find_filtrer_bien_by_zone_etat(){
        $pdo = ouvrir_connexion_bd();
        //a voir
        $sql = "SELECT * FROM  bien b
       where  b.etat_bien=? and b.etat_bien=?  ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array([]));
        $reservation = $sth->fetchall();
        fermer_connexion_bd($pdo);

        return $reservation;

    }
    


?>