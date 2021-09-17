<!doctype html>
<html lang="en">
  <head>
    <title>Hotel Tooki</title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-white bg-white">
          <a class="navbar-brand" href="#"></a>
          <img src="img/logo.png" width="67" height="67" class="d-inline-block align-top" alt="">
          <button class="navbar-toggler"style="color:#005CA5;" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link active" href="#">Accueil <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link propos" href="#">A propos</a>
              <a class="nav-item nav-link" href="#">Communauté</a>
              <a class="nav-item nav-link" href="#">Nos offres</a>
              <a class="nav-item nav-link" href="#">Contact</a>
            </div>
            <div class="collapse navbar-collapse lg-0" id="navbarNavAltMarkup">
              <a class="btn btn droite" href="<?=WEB_ROUTE.'?controlleurs=chambre&views=connexion'?>">Je me connecter</a>
              <a class="btn btn gauche" href="<?=WEB_ROUTE.'?controlleurs=chambre&views=inscription'?>" style="color: #005CA5">je crée une compte</a>
            </div>
          </div>
          

        </nav>
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
                <h4>Voyager dans l'univers Tooki <br>avec calme et tranquillité</h4>
                <p>Légende de la slide n°1.</p>
                <button type="button" class="btn droite">Je réserve maintenant</button>
              </div>
            </div>
            <div class="carousel-item slide1">
              <img src="img/groupe1.png" alt="Carrousel slide 2" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block text-dark">
              <h4>Voyager dans l'univers Tooki <br>avec calme et tranquillité</h4>
                <p>Légende de la slide n°2.</p>
              </div>
            </div>
            <div class="carousel-item slide1">
              <img src="img/pexel2.png" alt="Carrousel slide 3" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block">
              <h4>Voyager dans l'univers Tooki <br>avec calme et tranquillité</h4>
                <p>Légende de la slide n°3.</p>
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
          <div class="col-6">
            <h4 style="color: black;"><b>Et si le paradis était sur <br> terre...pret de Dakar</b></h4>
            <p>TOOKI est situé à Dakar sénégal, sur la petite cote,au bord d'une longue<br>et grande plage de sable blond présente de nombreux atouts.Notre hotel<br>comprend 80 chambres spacieuses,confortables et bien équipées,<br>relookées par un designer qui sait allier confort et décoration</p>
            <button type="button" class="btn droite boutton">En savoir plus</button>
            
          </div>
          <div class="col-6 plage">
            <img src="img/plage.png" style="width: 89%;" alt="">
            
            </div>
          
        </div>
        
      </div>
      <div class="titre">
        <h3><b>Nos chambres</b></h3>
        <p>Voici un apercu des chambres que nous possédons avec un<br> design raffiné et moderne</p>
        
        </div>
      <div class="container-fluid bg-light partie3">
        
      
        <div class="card-deck">
        <div class="card card1" style="width: 20rem;">
          <img src="img/pexel3.jpg" class="card-img-top" alt="Accroche HTML">
          <div class="card-body">
            <h2 class="card-title"></h2>
            <h4 class="card-subtitle">Suite</h4>
            <p class="card-text">Du texte sous le titre dans le corps de carte</p>
            <a href="#" class="btn btn-primary">Je réserve</a>
          </div>
        </div>

        <div class="card card1" style="width: 20rem;">
          <img src="img/pexel6.jpg" class="card-img-top" alt="Accroche HTML">
          <div class="card-body">
            <h2 class="card-title"></h2>
            <h4 class="card-subtitle">Chambre de luxe</h4>
            <p class="card-text">Du texte sous le titre dans le corps de carte</p>
            <a href="#" class="btn btn-primary">Je reserve</a>
          </div>
        </div>

        <div class="card card1" style="width: 20rem;">
          <img src="img/pexel4.jpg" class="card-img-top" alt="Accroche HTML">
          <div class="card-body">
            <h2 class="card-title"></h2>
            <h4 class="card-subtitle">Chambre standard</h4>
            <p class="card-text">Du texte sous le titre dans le corps de carte</p>
            <a href="#" class="btn btn-primary">Je réserve</a>
          </div>
        </div>
        
          
        </div>
      </div>
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