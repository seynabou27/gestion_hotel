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

  </head>
  <body>
      <header>
      <?php require_once(ROUTE_DIR.'views/inc/menu.html.php'); ?>
      </header>
      <div class="container">
        <br> <br> <br>
        <div class="row ">
          <div class="col-md-6">
            <h5 class="texte float-left"><b>Liste de mes réservations</b></h5>
          </div>
          <div class="col-md-6">
          <a name="" id="" class="btn btn-primary float-right boutton2" href="<?=WEB_ROUTE.'?controlleurs=reservation&views=page_reservation&id_categorie='.$categorie['id_categorie']?>" role="button"><i class="bi bi-plus"></i>Ajouter une réservation</a>

            
          </div>
          
        </div>
      <br> <br>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Categorie</th>
            <th>N°de chambre</th>
            <th>nbre de chambre</th>
            <th>Nbre de personne</th>
            <th>Période</th>
            <th>Etats-réservation</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($reservat as $reservat): ?>

          <tr>

            <td><?=$reservat['nom_categorie']?></td>
            <td><?=$reservat['numero_chambre']?></td>
            <td><?=$reservat['nombre_chambre']?></td>
            <td><?=$reservat['nombre_personne']?></td>
            <td><?=$reservat['date_debut_reservation']?> / <?=$reservat['date_fin_reservation']?></td>
            <td span class="badge p-2 mb-2 text-white" style="background-color: #ff7f00;"><?= $reservat['etat_reservation']?></span></td>
          </tr>
          <?php endforeach ?>

        </tbody>
      </table>

      <nav>
      <ul class="pagination">
        <li class="page-item  <?= ($currentPage == 1) ? "disabled" : "" ?>">
          <a href="<?= WEB_ROUTE.'?controlleurs=reservation&views=mesreservation&page='. ($currentPage - 1) ?>" class="page-link"> «Précédente</a>
        </li>
        <?php for($i=1;$i<=$pages;$i++):?>
        <li class="page-item"><a class="page-link" href="<?= WEB_ROUTE.'?controlleurs=reservation&views=mesreservation&page='.$i?>"><?=$i?></a></li>
        <?php endfor ?>
                 
        <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
          <a href="<?= WEB_ROUTE.'?controlleurs=reservation&views=mesreservation&page='.($currentPage + 1) ?>" class="page-link">»Suivante</a>
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

      <style>
        .reseau {
        vertical-align: middle;
        border-style: none;
        margin: 2%;
        }
        
          body {
          font-family:Circular_std_bold;
          }
          .navbar-toggler {
            padding: .25rem .75rem;
            font-size: 1.25rem;
            line-height: 1;
            border: 2px solid #005CA5;
            border-radius: .25rem;
            color: #005CA5;
          }
        .navbar-nav{
          margin-left: 9%;
        }
        .navbar-nav .nav-link {
          padding-right: 0.5rem;
          padding-left: 2.5rem;
        }
        a {
            color: #000;
        }
        .boutton{
            background-color:#005CA5 ;
            color: white;
        }
        .btn-secondary:hover {
            color: #fff;
            background-color: #005CA5;
            border-color: #005CA5;
        }
        .show > .btn-secondary.dropdown-toggle {
            color: #fff;
            background-color: #005CA5;
            border-color: #005CA5;
        }
        
        .navbar-expand-lg .navbar-nav .nav-link {
          padding-right: 2.5rem;
          padding-left: 0.5rem;
        }
        a:hover{
        color: #005CA5;
        
      }
      .droite{
        color:white;
        background-color:#005CA5;
        margin-right: 3%;
      }
      .gauche{
        color:#005CA5;
        background-color:white;
        border-color:#005CA5 ;
      }
      .btn:hover {
      color: #fff;
      }
      .gauche .btn:hover {
        color: #005CA5;
      }
      .boutton2{
        color:white;
        background-color:#005CA5;

      }
      .btn:hover{
        background-color:#005CA5;

      }
      .slide1{
        height: 400px;
      }
      .partie2{
        padding: 3%;
      }
      .boutton{
        margin-top: 5%;
      }
      .partie3{
        display: flex;
        margin-top: -10%;
      }
      .card-deck{
        margin-top: 9%;
        margin: 12%;
      }
      .titre{
        text-align: center;
      }
      .image{
        display: contents;
        text-align: center;
      }
      .titre1{
        text-align: center;
      } 
      .etoile{
        margin-top: 5%;
        margin-left: 6%;
      }
      .p1{
        margin-top: 4%;
      }
      .wifi{
        margin-top: 5%;

      }
      .mobile{
        margin-top: 2%;
      }
      .lit1{
        
        padding-top: 8%;
      }
      .lit2{
        padding-top: 8%;
      }
     
      .obt{
        margin-top: -5%;
        color: white;
      }
      .obt1{
        color: white;
      }
      
      /*
      
      
      .image{
        display: flex;
        margin-top: 7%;
      } */
      /* .lit{
       
        margin-left: 23%;
      }
      
      
     
      

      
      
      .p2{
        margin-top: 12%;
      }
      .p3{
        margin-top: 13%;
      } */

      

      </style>

      

      
      


























      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>