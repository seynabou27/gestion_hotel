<?php


// l'enssemble des biens reservés par un client
function find_all_reservation():array{
    $pdo=ouvrir_connexion_bd();
    $sql="select * from reservation r , chambre ch , user u
        where
        r.id_chambre=ch.id_chambre
        and
        r.id_user=u.id_user
        and
        r.etat_reservation like ?";
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute();
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
/* function find_reservation_by_client(int $id_chambre):array{
    $pdo = ouvrir_connexion_bd(); 
    $sql = "select * from chambre ch, reservation r,user u 
    where 
    r.id_chambre=ch.id_chambre and r.id_user=?;";
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array($id_chambre));
    $chambre = $sth->fetchall();
    fermer_connexion_bd($pdo);
    return $chambre;
} */
/* function find_chambre_reserver_by_client(int $id_client):array{
	$pdo= ouvrir_connexion_bd();
	$sql="select * from reservation r,chambre ch,user u
    where r.id_chambre=ch.id_chambre
     and ch.id_user=u.id_user 
       and r.id_user= ? order by r.date_reservation desc" ;
	$sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	$sth->execute([$id_client]);
	$reservation = $sth->fetchAll();
    fermer_connexion_bd($pdo);//fermeture
	return $reservation;
} */
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

function insert_reservation(int $id_categorie,int $id_client):int{
    extract($categorie);
    $pdo = ouvrir_connexion_bd();
    $sql = "INSERT INTO `reservation` (`date_debut_reservation`, `montant_paye`, `etat_reservation`, `id_user`, `id_chambre`, `date_fin_reservation`, `date_validation`, `date_reservation`, `nombre_chambre`) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $now=date_create();
    $now = date_format($now, 'Y-m-d H:i:s');
    $sth->execute([$now, 'en cour','description',$id_categorie, $id_client]);
    
    fermer_connexion_bd($pdo);
   
    return $sth->rowCount();


}
 function insert_reservation_by_client(array $reservation):int{
     
    $pdo = ouvrir_connexion_bd();
    $sql="INSERT INTO `reservation` (`date_debut_reservation`, `etat_reservation`, `id_user`, `date_fin_reservation`, `date_reservation`, `nombre_chambre`) 
    VALUES (?, ?, ?, ?, ?, ?);";
    /* var_dump($reservation);
    die; */
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
  $sth->execute(
    $reservation
  );
  $dernier_id = $pdo->lastInsertId();
  fermer_connexion_bd($pdo);
  return $dernier_id ;
} 



?>

 