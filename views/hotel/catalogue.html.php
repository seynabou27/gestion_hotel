
<!doctype html>
<html lang="en">
  <head>
    <title>HOTEL TOOKI</title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <header>
        <?php require_once(ROUTE_DIR.'views/inc/menu.html.php'); ?>

      </header>
      <div class="container-fluid">
        
        <div id="demo" class="carousel slide" data-ride="carousel">
          <!-- Indicateurs -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>

          <!-- Carrousel -->
          <div class="carousel-inner">
            <div class="carousel-item active slide1">
              <img src="img/groupe.png" alt="Carrousel slide 1" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block">
                <h4 class="slider">Voyager dans l'univers Tooki <br>avec calme et tranquillité</h4>
                <p>Un hotel 5 étoiles situé sur la petite cote sénégalaise<br>avec des services hauts de gamme.</p>
                <button type="button" class="btn droite slider1">Je réserve maintenant</button>
              </div>
            </div>
            <div class="carousel-item slide1">
              <img src="img/groupe1.png" alt="Carrousel slide 2" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block ">
              <h4 class="slider">Voyager dans l'univers Tooki <br>avec calme et tranquillité</h4>
                <p>Un hotel 5 étoiles situé sur la petite cote sénégalaise<br>avec des services hauts de gamme.</p>
              </div>
            </div>
            <div class="carousel-item slide1">
              <img src="img/pexel2.png" alt="Carrousel slide 3" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block">
              <h4 class="slider">Voyager dans l'univers Tooki <br>avec calme et tranquillité</h4>
                <p>Un hotel 5 étoiles situé sur la petite cote sénégalaise<br>avec des services hauts de gamme.</p>
              </div>
            </div>
          </div>

          <!-- Contrôles -->
          <!-- <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
          </a>
          <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
          </a> -->
        </div>
      </div>
      <div class="container partie2">

      <div class="row">
        <div class="col-md-6 ecriture">
          <h4 style="color: black;"><b>Et si le paradis était sur <br> terre...pret de Dakar</b></h4>
          <p>TOOKI est situé à Dakar sénégal, sur la petite cote,au bord d'une longue<br>et grande plage de sable blond présente de nombreux atouts.Notre hotel<br>comprend 80 chambres spacieuses,confortables et bien équipées,<br>relookées par un designer qui sait allier confort et décoration</p>
          <button type="button" class="btn droite boutton">En savoir plus</button>
          
        </div>
        <div class="col-md-6">
          <img class="plage" src="img/plage.png" style="width: 78%; height:86%" alt="">
        </div>
        
      </div>
       <!--  <div class="row">
          <div class="col-6">
            <h4 style="color: black;"><b>Et si le paradis était sur <br> terre...pret de Dakar</b></h4>
            <p>TOOKI est situé à Dakar sénégal, sur la petite cote,au bord d'une longue<br>et grande plage de sable blond présente de nombreux atouts.Notre hotel<br>comprend 80 chambres spacieuses,confortables et bien équipées,<br>relookées par un designer qui sait allier confort et décoration</p>
            <button type="button" class="btn droite boutton">En savoir plus</button>
            
          </div>
          <div class="col-6 plage">
            <img src="img/plage.png" style="width: 89%;" alt="">
            
            </div>
          
        </div> -->
        
      </div>
      <div class="titre">
        <h3><b>Nos chambres</b></h3>
        <p>Voici un apercu des chambres que nous possédons <br>avec un design raffiné et moderne</p>
        
        </div>
      <div class="container-fluid bg-light partie3">
        
        <div class="row">
            
            <?php //foreach($articles as $article) :?>
          
          
            <?php foreach ($imagee as $image): ?>

            <div class="col-md-4">
            <div class="card-deck">
            <div class="card card1" style="width: 100%;">
              <img src="img/pexel3.jpg" class="card-img-top" alt="Accroche HTML">
              <div class="card-body">
                <h2 class="card-title"></h2>
                <h4 class="card-subtitle"><?= $image['nom_categorie']?></h4>
                <p class="card-text">
                  <span class="badge badge-light" style="color:darkcyan;">Prix: <?= $image['tarif_unit']?></span>
                </p>
                  <a href="#" class="btn btn-primary detail">Détail</a>
                <?php if (est_client()): ?>
<!--                   <a href="#" class="btn btn-primary detail">Detail</a>
 -->                  <a href="#" class="btn btn-primary reserver">Je réserve</a>
                <?php endif ?>
              </div>
            </div>            
            </div>
              
            </div>
            <?php endforeach ?>
            <?php //endforeach ?>
            
        </div>
        
      </div>
      <nav>
    <ul class="pagination">
        <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
        <li class="page-item <?= ($page == 1) ? "disabled" : "" ?>">
            <a href="<?='./?controlleurs=chambre&views=catalogue&precedent='.$page?>" class="page-link">Précédente</a>
        </li>
        <?php for($page = 1; $page <= $pages; $page++): ?>
            <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
            <li class="page-item <?= ($page == $page) ? "active" : "" ?>">
                <a href="<?='./?controlleurs=chambre&views=catalogue&suivante='.$page?>" class="page-link"><?= $page ?></a>
            </li>
        <?php endfor ?>
            <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
            <li class="page-item <?= ($page > $pagetotal) ? "disabled" : "" ?>">
            <a href="<?='./?controlleurs=chambre&views=catalogue&suivante='.$page?>" class="page-link">Suivante</a>
        </li>
    </ul>
    </nav>

      
      
      <?php if (est_client()): ?>
              <a href="<?=WEB_ROUTE.'?controlleurs=reservation&views=catalogue_chambre'?>" class="btn btn-primary justify-content-center chambre">Voir toutes les chambres disponibles</a>
            <?php endif ?>
      <div class="container-fluid partie4" style="background-color: #005CA5;">
      <div class="titre1">
      <h4 class="obt"><b>Obtenez des avantages instantanés</b></h4>
      <p class="obt1">Profitez d'avantages dès votre adhésion et commencez à gagnez votre<br>chemin vers le statut Elite dès votre premier séjour.</p>
      </div>

      <div class="row">
        <div class="image" style="text-align:center;">
          
         
            <div class="col-md-4">
              <div class="lit">
                <img class="etoile" src="img/lit.png" alt=""> 
                <p class="p1 obt1">Gagnez des nuits gratuites</p> 
              </div>
              
            </div>

          <div class="col-md-4">
            <div class="lit1">
              <img class="wifi" src="img/wifi.png" alt="">
              <p class="p2 obt1">Wifi gratuit</p>
              
            </div>
          </div>

          <div class="col-md-4">
            <div class="lit2">
              <img class="mobile" src="img/mobile.png" alt="">
              <p class="p3 obt1">Wifi gratuit</p>
              
            </div>
            
          </div>
          
        </div>
        
      </div>
        
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
        .slider{
          margin-top: -26%;
        }
        .slider1{
          margin-top: 2%;
        }
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
         margin-right: 2%; 
      }
      button, input, optgroup, select, textarea {
        margin: 6px;
        margin-top: -4%;
      }
      /* .navbar-expand-lg .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
        margin-left: 7%;
      } */
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
      .slide1{
        height: 400px;
      }
      .partie2{
       
        margin-top: 2%;

      }
      .boutton{
        margin-top: 5%;
      }
      .partie3{
        display: flex;
        margin-top: -4%;
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
        margin-top: 2%;
        color: white;
      }
      .obt1{
        color: white;
      }
      .ml-4, .mx-4 {
        margin-left: 3.5rem !important;
      }
      .plage{
        margin-left: 11%;
      }
      .chambre{
        color:#005CA5;
        background-color:white;
        border-color:#005CA5;
        margin-left: 38%;
        margin-top: -13%;
      }
      .reserver{
        color:white;
        background-color:#005CA5;

      }
      .btn-primary:hover {
        color: #fff;
        background-color: #005CA5;
        border-color: #005CA5;
      }
      .detail{
        color:#005CA5;
        background-color:white;
        border-color:#005CA5

      }
      .btn-secondary:hover {
        color: #fff;
        background-color:#005CA5;
          border-color:#005CA5;
      }
      /* .ecriture{
        text-align: center;
      } */
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