<?php


// l'enssemble des reservations par un client

function find_all_reservation(int $offset=0):array{
    $pdo=ouvrir_connexion_bd();
    $sql="select * from reservation r , categorie c, user u 
    where
    r.id_categorie=c.id_categorie
    and
    r.id_user=u.id_user  limit $offset,".NOMBRE_PAR_PAGE1 ;
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute();
    $reservation = $sth->fetchAll();
    fermer_connexion_bd($pdo);
    return [
        "data" =>$reservation,
        "count" => $sth->rowCount()
    ];
}
function count_all_reservation():int{
    $pdo=ouvrir_connexion_bd();
    $sql="select * from reservation r , categorie c, user u 
    where
    r.id_categorie=c.id_categorie
    and
    r.id_user=u.id_user";
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute();
    fermer_connexion_bd($pdo);
    return $sth->rowCount();
}
function find_all_reservation_by_id($id_reservation):array{
    $pdo = ouvrir_connexion_bd(); 
        $sql = " SELECT * from reservation r where r.id_reservation= ?; ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($id_reservation));
        //$user = $sth->fetchAll();
        $reservat= $sth->fetch(PDO::FETCH_ASSOC);
        fermer_connexion_bd($pdo);
        return $reservat; 
}


function find_all_reservation_by_etat($id_user,$etat_reservation):array{
    
    $pdo = ouvrir_connexion_bd(); 
        $sql = "select * from reservation r , chambre ch , user u , categorie c
        where ch.id_chambre = r.id_chambre and 
        ch.id_chambre=c.id_categorie
        and r.id_user = u.id_user and
        r.id_user= ? and 
        r.etat_reservation like ? " ;
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($id_user,$etat_reservation));
      
        $reser = $sth->fetchAll(PDO::FETCH_ASSOC);

        fermer_connexion_bd($pdo);
        return $reser;
}
//les reservations du client

function find_all_reservation_client($reservation, int $offset=0):array{
    
    $pdo = ouvrir_connexion_bd(); 
        $sql = "select * from reservation r ,user u , categorie c
        where 
        r.id_categorie=c.id_categorie and
        r.id_user = u.id_user and
        r.id_user= ? and 
        r.etat_reservation like ? limit $offset,".NOMBRE_PAR_PAGE2;
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($reservation));
      
        $reser = $sth->fetchAll(PDO::FETCH_ASSOC);

        fermer_connexion_bd($pdo);
        return [
            "data" =>$reser,
            "count" => $sth->rowCount()
        ];
        
}
function count_all_reservation_client($reservation):int{
    
    $pdo = ouvrir_connexion_bd(); 
        $sql = "select * from reservation r ,user u , categorie c
        where 
        r.id_categorie=c.id_categorie and
        r.id_user = u.id_user and
        r.id_user= ? and 
        r.etat_reservation like ? ;";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($reservation));
        fermer_connexion_bd($pdo);
        return $sth->rowCount();
}

function find_all_reservation_by_date_or_etat($etat_reservation='en cour'):array{
    $pdo = ouvrir_connexion_bd(); 
    $params =  array($etat_reservation);
        $sql = "select * from reservation r , chambre ch , user u 
        where
        r.id_chambre=ch.id_chambre
        and
        r.id_user= u.id_user
        and
        r.etat_reservation like ? ";
       if (!empty($date)) {
          $sql .= 'and
          r.date_reservation like ?';
          $params[]=$date;
       }
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute($params);
        $reservation = $sth->fetchall($etat_reservation);
        fermer_connexion_bd($pdo);
        return $reservation;
}

function insert_reservation(int $id_categorie,int $id_client):int{
    extract($categorie);
    $pdo = ouvrir_connexion_bd();
    $sql = "INSERT INTO `reservation` (`date_debut_reservation`, `montant_paye`, `etat_reservation`, `id_user`, `id_chambre`, `date_fin_reservation`, `date_validation`, `date_reservation`, `nombre_chambre`,`nombre_personne`) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $now=date_create();
    $now = date_format($now, 'Y-m-d H:i:s');
    $sth->execute([$now, 'en cour','description',$id_categorie, $id_client]);
    
    fermer_connexion_bd($pdo);
   
    return $sth->rowCount();


}
/* function find_categorie_by_id_by_reser(int $id_categorie):array{
    $pdo = ouvrir_connexion_bd();
    //Execution d'une requete non prepare avec un jocker qui est nommé
    
    //Execution d'une requete prepare avec un jocker qui est nommé
    $sql = "select * from categorie c , chambre ch where
    ch.id_categorie=c.id_categorie
    and
     c.id_categorie= ? ";
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array($id_categorie));
    $chambre = $sth->fetch();
    fermer_connexion_bd($pdo);

    return $chambre;
    INSERT INTO `reservation` (`date_debut_reservation`, `etat_reservation`, 
    `id_user`,`date_fin_reservation`, `date_reservation`, 
    `nombre_chambre`, `nombre_personne`) 
    VALUES (?, ?, ?, ?,?, ?, ?);

} */
 /* function insert_reservation_by_client(array $reservation):int{
     
     
    $pdo = ouvrir_connexion_bd();
    $sql="INSERT INTO `reservation` (`date_debut_reservation`, `montant_paye`, 
    `etat_reservation`, `id_user`, `date_fin_reservation`, 
    `date_reservation`, `nombre_chambre`, `nombre_personne`) 
    VALUES (?, 0, ?, ?, ?, ?, ?, ?);";
    /* var_dump($reservation);
    die; 
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array($reservation));
    $dernier_id = $pdo->lastInsertId();
    fermer_connexion_bd($pdo);
    return $dernier_id ;
}  */
function insert_reservation_by_client(array $reservation):int{
    $pdo = ouvrir_connexion_bd();
    $sql="INSERT INTO `reservation` (`date_debut_reservation`, `montant_paye`, 
    `etat_reservation`, `id_user`, `date_fin_reservation`, 
    `date_reservation`, `nombre_chambre`, `nombre_personne`) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute($reservation);
    $dernier_id = $pdo->lastInsertId();
    fermer_connexion_bd($pdo);
    return $dernier_id ;
}
// traiter les reservations par etat
/* function update_reservation( array $reservation):int{
    
    $pdo = ouvrir_connexion_bd(); 
        $sql = "UPDATE reservation r   
                    SET date_debut_reservation = ? ,etat_reservation = ? ,
                        date_fin_reservation = ? ,date_validation = ? ,nombre_chambre = ? ,nombre_personne = ? 
                    WHERE r.id_reservation= ?; " ;
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute($reservation);
        fermer_connexion_bd($pdo);
        return $sth -> rowCount();
    } */
function find_reservation():array{
    $pdo = ouvrir_connexion_bd(); 
        $sql = "select * from reservation r " ;
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $reser = $sth->fetchAll(PDO::FETCH_ASSOC);

        fermer_connexion_bd($pdo);
        return $reser;

}
function find_reservation_by_filtre():array{
    $pdo = ouvrir_connexion_bd(); 
        $sql = "select * from reservation r 
        where 
        r.etat_reservation like= ?" ;
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $filtre= $sth->fetchAll(PDO::FETCH_ASSOC);

        fermer_connexion_bd($pdo);
        return $filtre;

}




?>

 