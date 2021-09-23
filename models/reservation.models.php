<?php
// l'enssemble des biens reservés par un client
function find_all_reservation($etat_reservation='valider'):array{
    $pdo=ouvrir_connexion_bd();
    $sql="select * from reservation r , chambre ch , user u
        where
        r.id_chambre=ch.id_chambre
        and
        r.id_user=u.id_user
        and
        r.etat_reservation like ?";
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute([$etat_reservation]);
    $reservation = $sth->fetchAll();
    fermer_connexion_bd($pdo);
    return $reservation ;
}





function find_all_reservation_by_etat(  $etat_reservation='en cour'):array{
    $pdo = ouvrir_connexion_bd(); 
        $sql = "select * from reservation r , chambre ch , user u 
        where ch.id_chambre = r.id_chambre
        and r.id_user = u.id_user 
        and r.etat_reservation like ?
        " ;
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($etat_reservation));

        $reservations = $sth->fetchAll(PDO::FETCH_ASSOC);

        fermer_connexion_bd($pdo);
        return $reservations;
}
/* 
function find_all_reservation($etat_reservation='en cour'):array{
    $pdo = ouvrir_connexion_bd(); 
        $sql = "select * from reservation r , bien b , user u , zone z
        where
        r.id_bien=b.id_bien
        and
        r.id_user=u.id_user
        and
        z.id_zone=b.id_zone
        and
        r.etat_reservation like ?" ;
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $bien = $sth->fetchall($etat_reservation);
        fermer_connexion_bd($pdo);
        return $bien;
} */

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

function insert_reservation(int $id_chambre,int $id_client):int{
    extract($chambre);
    $pdo = ouvrir_connexion_bd();
    $sql = "INSERT INTO `reservation` (`id_reservation`, `date_debut_reservation`,
     `montant_paye`, `etat_reservation`, `id_user`, `id_chambre`, 
    `date_fin_reservation`, `date_validation`, `date_reservation`) 
    VALUES (?, ?, ?, ?, ?,?, ?, ?);";
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $now=date_create();
    $now = date_format($now, 'Y-m-d H:i:s');
    $sth->execute([$now, 'en cour','dedscription',$id_chambre, $id_user,]);
    
    fermer_connexion_bd($pdo);
   
    return $sth->rowCount();


}



?>

