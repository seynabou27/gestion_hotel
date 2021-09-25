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
function find_all_prestation_by_client():array{
    $pdo=ouvrir_connexion_bd();
    $sql="select * from reservation r ,prestation p  , user u 

    WHERE  p.id_pres=p.id_pres
    and r.id_reservation=r.id_reservation
            and
            r.id_user=u.id_user";
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute();
    $prestation = $sth->fetchAll();
    fermer_connexion_bd($pdo);
    return $prestation;
}




?>