<?php 
    
//fonction select

    function find_all_chambre():array{
        $pdo = ouvrir_connexion_bd();
        $sql = "select * from chambre ch ,categorie c 
        where ch.id_categorie=c.id_categorie ;";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $chambre = $sth->fetchAll();
        fermer_connexion_bd($pdo);
        return $chambre;

    }
    function find_all_image():array{
        $pdo = ouvrir_connexion_bd();
        $sql = "select * from image i ,categorie c 
        where i.id_categorie=c.id_categorie ;";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $chambre = $sth->fetchAll();
        fermer_connexion_bd($pdo);
        return $chambre;

    }
    function find_chambre_disponible():array{
        $pdo = ouvrir_connexion_bd();
        $sql = "select * from chambre ch where ch.etat_chambre=?";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array('disponible'));
        $chambredispo = $sth->fetchAll();
        fermer_connexion_bd($pdo);
        return $chambredispo;

    }


    function find_chambre_reservation_by_client(int $id_bien):array{
        $pdo = ouvrir_connexion_bd(); 
        $sql = "select * from chambre ch, reservation r,user u where 
            ch.id_chambre=r.id_chambre and r.id_user=?";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($id_bien));
        $chambre = $sth->fetchall();
        fermer_connexion_bd($pdo);
        return $chambre;
    }

    function find_chambre_by_id(int $id_chambre):array{
        $pdo = ouvrir_connexion_bd();
        //Execution d'une requete non prepare avec un jocker qui est nommé
        
        //Execution d'une requete prepare avec un jocker qui est nommé
        $sql = "select * from chambre ch where ch.id_chambre= ? ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($id_chambre));
        $chambre = $sth->fetch();
        fermer_connexion_bd($pdo);

        return $chambre;

    }

    function insert_chambre(int $id_chambre):int{
        //a voir
        extract($bien);
        $pdo = ouvrir_connexion_bd();
        $sql = "INSERT INTO `chambre` (`id_chambre`, `reference_chambre`, `description_chambre`, 
        `type_chambre`, `date_creation`, `prix`, `etat_chambre`, `id_user`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $now=date_create();
        $now = date_format($now, 'Y-m-d H:i:s');
        $sth->execute([$id_chambre,$etat_chambre ,$type_chambre,$reference_chambre,$description_chambre,$id_user,$now]);
        
        fermer_connexion_bd($pdo);
       
        return $sth->rowCount();
    

    }

    
    //filtrer les réservations
    function find_filtrer_reservation(){
        $pdo = ouvrir_connexion_bd();
        //a voir
        $sql = "SELECT * FROM reservation r, user u, chambre ch
        where 
        u.id_user=r.id_user
        and 
        ch.id_chambre=r.id_chambre
        GROUP by
        ch.id_chambre, r.date_reservation, r.etat_reservation, u.id_user ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array([]));
        $reservation = $sth->fetchall();
        fermer_connexion_bd($pdo);

        return $reservation;

    }
    
  

    /* function pagination($currentPage){
        $pdo = ouvrir_connexion_bd();
        $sql ='SELECT COUNT(*) AS nb_articles FROM `articles`;';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $result = $sth->fetch();
        $nbArticles = (int) $result['nb_articles'];
        $parPage = 3;
        $pages = ceil($nbArticles / $parPage);
        $premier = ($currentPage * $parPage) - $parPage;
        fermer_connexion_bd($pdo);

        return $result;





    }
    function nombre_page($premier, $parPage){
        $pdo = ouvrir_connexion_bd();
        $sql = 'SELECT * FROM `articles` ORDER BY `created_at` DESC LIMIT 5;
        ';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->bindValue(':premier', $premier, PDO::PARAM_INT);
        $sth->bindValue(':parpage', $parPage, PDO::PARAM_INT);
        $sth->execute();
        $articles = $sth->fetchAll(PDO::FETCH_ASSOC);
        fermer_connexion_bd($pdo);

        return $articles;  

    }
 */

   


?>