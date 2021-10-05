<?php 
  function find_all_prestation():array{
    $pdo=ouvrir_connexion_bd();
    $sql="select * from prestation p ";
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute();
    $prestation = $sth->fetchAll();
    fermer_connexion_bd($pdo);
    return $prestation;
}
function find_all_prestation_by_reservation():array{
  $pdo=ouvrir_connexion_bd();
  $sql="select * from prestation p , reservation r , reservation_prestation rp
    WHERE
    rp.id_reservation=r.id_reservation ;";
  $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
  $sth->execute();
  $prestation = $sth->fetchAll();
  fermer_connexion_bd($pdo);
  return $prestation;
}
function find_all_prestation_by_client():array{
    $pdo=ouvrir_connexion_bd();
    $sql="select * from reservation r ,prestation p  , user u ,reservation_prestation rp

    WHERE  p.id_pres=p.id_pres
    and rp.id_reservation=r.id_reservation
            and
            r.id_user=u.id_user and 
            r.id_user=?;";
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute();
    $prestation = $sth->fetchAll();
    fermer_connexion_bd($pdo);
    return $prestation;
}




?>