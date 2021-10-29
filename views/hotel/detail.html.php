
<!doctype html>
<html lang="en">
  <head>
    <title>HOTEL TOOKI</title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=WEB_ROUTE.'css/detail.css'?>">

  </head>
  <body>
      <header>
        <?php require_once(ROUTE_DIR.'views/inc/menu.html.php'); ?>

      </header>

<!---------------------------EXAMPLE------------------>
<div class="container-fluid">
  <a class="lien" style="margin-top:6%; color:#eee;" href="<?=WEB_ROUTE.'?controlleurs=reservation&views=catalogue_chambre'?>">Catalogue des chambres</a> - <a href="<?=WEB_ROUTE.'?controlleurs=chambre&views=detail'?>">Détail des chambres</a>
  <br>
  <div class=row>
    <div class="col-md-6">
    <img
      class="card-img-top" style="width:85%; margin:7%;"
      src="https://source.unsplash.com/1080x720/?hotel"
      alt="Annonce 1"
    />
      
    </div>
    <div class="col-md-4 li1">
       
       <div>
        <h2><b><?= $categorie['nom_categorie']?></b></h2>
      </div> 
      
      <div>

 
         <span class="badge" style="color:#3CAB85;"><h2><?= $categorie['tarif_unit']?></h2></span>
      </div>
      <div class="li">
      <ul style="list-style-type:circle;">
        <li>Lit queen size</li>
        <li>2 Adultes</li>
        <li>32m2</li>
      </ul>
      </div>  
      
      <?php if (est_client()):?>
      <a href="<?=WEB_ROUTE.'controlleurs=reservation&views=page_reservation'?>" class="btn btn-sm btn-primary reserver ">Réserver</a>

      <?php endif ?>
      
  
    
    <?php if (!est_client()) :?>
    <a href="<?=WEB_ROUTE.'?controlleurs=chambre&views=connexion'?> " class="btn btn-sm btn-primary reserver ">Réserver</a>

     <?php endif ?>
      
    </div>
    
  </div>
  <div class="container-fluid li3">
    <h3 class="texte"><b>Description</b></h3>

    <span>
      <p class="texte">
      <?= $categorie['description']?>


      </p>
    </span> 
   
    <div class="image">
      <div class="row justify-content-center">
        <div class="col-md-3">
          <img
            class="card-img-top" style="width:85%;"
            src="https://source.unsplash.com/1080x720/?chambre"
            alt="Annonce 1"
          />
        </div>
        <div class="col-md-3">
          <img
            class="card-img-top" style="width:85%;"
            src="https://source.unsplash.com/1080x720/?chambre"
            alt="Annonce 1"
          />
        </div>
        <div class="col-md-3">
          <img
            class="card-img-top" style="width:85%;"
            src="https://source.unsplash.com/1080x720/?chambre"
            alt="Annonce 1"
          />
        </div>        
      </div>
      <div class="row justify-content-center">
        <a href="<?=WEB_ROUTE.'?controlleurs=chambre&views=connexion'?>" class="btn btn-sm btn-primary reserver1 ">Réserver</a>

      </div>
      
    </div>
  
    
  </div>
  
</div>

<!---------------------------- FIN--------------------->




































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


      