<!doctype html>
<html lang="en">
  <head>
    <title>HOTEL TOOKI</title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?=WEB_ROUTE.'css/liste.reservation.css'?>">


  </head>
  <body>
      <header>
      <?php require_once(ROUTE_DIR.'views/inc/menu1.html.php'); ?>
      </header>
      <div class="container-fluid">
      <!-- <div class="row" style="margin-left:28% ; margin-top:3%;">
       <form method="POST" action="<?=WEB_ROUTE?>" class="form-inline">
				  <div class="form-group">
					  <label for=""></label>
					  <input type="" name="filtre" id="" class="form-control" placeholder="Filtrer par etat" aria-describedby="helpId">
					  <small id="helpId" class="text-muted"></small>
				  </div>
          <div>
          <button type="button" name="envoyer" style="margin-left: 7%;" class="btn btn-outline-primary">Recherche</button>

          </div>

			  </form>
		  </div> -->
        <br> 
        <div class="row">
          <div class="col-md-4">
            <h4><b>Liste réservation</b></h4>            
          </div>
          <div class="col-md-4">
            <a name="" id="" class="btn btn-primary  boutton" href="<?=WEB_ROUTE.'?controlleurs=gestionnaire&views=ajout.reservation'?>" role="button"><i class="bi bi-plus"></i>Ajouter une réservation</a>

          </div>
        </div>
        <br> <br>
          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Client</th>
              <th scope="col">categorie</th>
              <th scope="col">Nbr.chambre</th>
              <th scope="col">Nbr.personne</th>
              <th scope="col">Date reservation</th>
              <th scope="col">Periode</th>
              <th scope="col">Etat</th>
              <th scope="col">Action</th>
              <th scope="col"></th>



            </tr>
          </thead>
          <tbody>
            <?php foreach ($reservation as $reservation):?>
            <tr>
              <td><a href="#"><?=$reservation['nom_user'].' '.$reservation['prenom_user'].' '.$reservation['numero_telephone']?></a></td>  
              <td><a href="#"><?=$reservation['nom_categorie']?></a></td>
          
              <td><a href="#"><?=$reservation['nombre_chambre']?></a></td>
              <td><a href="#"><?=$reservation['nombre_personne']?></a></td>

              <td><?=date_format(date_create($reservation['date_reservation']),'d-m-Y')?></td>
              <td><?=$reservation['date_debut_reservation']?> / <?=$reservation['date_fin_reservation']?></td>
              <td><?=$reservation['etat_reservation']?></td>
              <td><a name="" id="" class="btn b" style="background-color: #005CA5; color:white;" href="<?=WEB_ROUTE.'?controlleurs=reservation&views=edit&id_reservation='.$reservation['id_reservation'] ?>" role="button">Gérer</a></td> <td><a name="" id="" class="btn" href="<?= WEB_ROUTE.'?controlleurs=gestionnaire&views=supprimer&id_reservation='.$reservation['id_reservation']?>" role="button"><i class="bi bi-trash"></i></a></td>

            </tr>
            <?php endforeach ?>

          </tbody>
        </table>
        <nav>
      <ul class="pagination">
        <li class="page-item  <?= ($currentPage == 1) ? "disabled" : "" ?>">
          <a href="<?= WEB_ROUTE.'?controlleurs=reservation&views=liste.reservation&page='. ($currentPage - 1) ?>" class="page-link"> «Précédente</a>
        </li>
        <?php for($i=1;$i<=$pages;$i++):?>
        <li class="page-item"><a class="page-link" href="<?= WEB_ROUTE.'?controlleurs=reservation&views=liste.reservation&page='.$i?>"><?=$i?></a></li>
        <?php endfor ?>
                 
        <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
          <a href="<?= WEB_ROUTE.'?controlleurs=reservation&views=liste.reservation&page='.($currentPage + 1) ?>" class="page-link">»Suivante</a>
        </li>
    </ul>

    </nav>
        
      </div>
      <footer class="footer">
       <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          
          <img src="img/image.png" alt="">
          <p>Une hospitalité pour vos souvenirs!</p>
          <div>
            <img class="reseau" src="img/fb.png" alt="">
            <img class="reseau" src="img/din.png" alt="">
            <img class="reseau" src="img/ins.png" alt="">
            <img class="reseau" src="img/you.png" alt="">
            
          </div>

        </div>
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-phone me-3"></i> +221 33 869 90 90</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            contact@grouptooki.com
          </p>
          
          
        </div>

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            A propos
          </h6>
          <p>
            <a href="#!" class="text-reset">Notre mission</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Tooki en chiffres</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Actualités presse</a>
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Liens pratiques
          </h6>
          <p>
            <a href="#!" class="text-reset">Conseils au voyageurs</a>
          </p>
          <p>
            <a href="#!" class="text-reset">FAQ</a>
          </p>
          
        </div>
        
       
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
  
    <div class="me-5 d-none d-lg-block p-4 bas" style="border-bottom-color: red;">
        <span> © 2021 Copyright:</span>
      </div>

  
  
</footer>
<!-- Footer -->

      </footer>

     

      

      
      


























      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>