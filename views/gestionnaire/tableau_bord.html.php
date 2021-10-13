<?php //var_dump($reservation); die('okk'); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>HOTEL TOOKI</title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=WEB_ROUTE.'css/tableau_bord.css'?>">

  </head>
  <body>
      <header>
        <?php require_once(ROUTE_DIR.'views/inc/menu1.html.php'); ?>

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
                <h4 class="slider">Bienvenue !</h4>
              </div>
            </div>
            <div class="carousel-item slide1">
              <img src="img/groupe1.png" alt="Carrousel slide 2" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block ">
              <h4 class="slider">Bienvenue !</h4>
              </div>
            </div>
            <div class="carousel-item slide1">
              <img src="img/pexel2.png" alt="Carrousel slide 3" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block">
              <h4 class="slider">Bienvenue !</h4>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!---------------------------------debut---------------------------->
<div class="container jjj" >
    <h4 class=""><b>Tableau de bord</b></h4>
    <br> <br>
    <div class="row">
        <div class="col-md-4">
            <div class="card  mb-3" style="max-width: 22rem;height:150px;">
                <div class="card-body" style="color: black;">
                    <h6 class="card-title"><b>Nombre de clients</b></h6>
                    <div class="row">
                        <div class="col-md-6">
                          <span>
                            <h3 class=chiffre>
                                <b><?=$client[0]["user"]?></b>
                            </h3>
                          </span>
                        </div>                                  

                        <div class="col-md-6">
                        <a href="#" class="btn btn-primary detail">Détail</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card  mb-3" style="max-width: 22rem;height:150px">
                <div class="card-body">
                    <h6 class="card-title"><b>Nombre de reservations</b></h6>
                    <div class="row">
                        <div class="col-md-6">
                        <h3 class=chiffre>
                                <b><?=$reservation[0]["reservation"]?></b>

                            </h3>
                        </div>
                        <div class="col-md-6">
                        <a href="#" class="btn btn-primary detail">Détail</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3" style="max-width: 22rem;height:150px">
                <div class="card-body">
                    <h6 class="card-title"><b>Nombre de catégorie de chambre</b></h6>
                    <div class="row">
                        <div class="col-md-6">
                        <h3 class=chiffre>
                                <b><?=$catego[0]["categorie"]?></b>

                            </h3>
                        </div>
                        <div class="col-md-6  ">
                        <a href="#" class="btn btn-primary detail">Détail</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3"  style="max-width: 22rem;height:150px">
                <div class="card-body">
                    <h6 class="card-title "><b>Nombre de chambres</b></h6>
                    <div class="row ">
                        <div class="col-md-6 ">
                        <h3 class=chiffre>
                                <b><?=$chambre[0]["chambre"]?></b>

                            </h3>
                        </div>
                        <div class="col-md-6">
                        <a href="#" class="btn btn-primary detail">Détail</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
    </div>
     
   



    <!-----------------------------------fin---------------------------->

      
      
      
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