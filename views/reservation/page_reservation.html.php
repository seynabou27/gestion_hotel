<?php 
if (isset($_SESSION['arrayErreur'])){
    $arrayErreur =$_SESSION['arrayErreur'];
    unset ($_SESSION['arrayErreur']);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>HOTEL TOOKI</title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=WEB_ROUTE.'css/page_reservation.css'?>">

  </head>
  <body>
      <header>
      <?php require_once(ROUTE_DIR.'views/inc/menu.html.php'); ?>
      
      </header>
      <div class="container bg-light">
        <br> <br>
        <h5 class="" style="text-align: center;"><b>Formulaire de reservation</b></h5>
        <br> 
      <form method="POST" action="<?=WEB_ROUTE?>">
          <input type="hidden" name="controlleurs" value="reservation"/>
          <input type="hidden" name="action" value="page_reservation"/>
          <input type="hidden" name="id_reservation" value="<?=isset($reservat['id_reservation']) ? $reservat['id_reservation']:'';?>"/>

          <!---------------- DEBUT--------------------->
          <div class="card shadow mb-4 bg-white rounded">
    <!--Card-Body-->
    <div class="card-body">
       
       <div class="row">
          <div class="col-sm-6"> 
          <div  style="width: 17rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?hotel"
              alt="Annonce 1"
            />
          </div>
          </div>
          <div class="col-sm-6 debut"> 
          <?php //foreach ($categorie as $categorie) : ?>

            <div>
              <span class="badge"><h5><b><?= $categorie['nom_categorie']?></h5></b></span>
            </div> 
        
      
          <div>
            <span class=""style="color:#3CAB85;"><h5><b><?= $categorie['tarif_unit']?> f </h5></b></span>
         
          </div>
          <div class="li">
            <ul style="list-style-type:circle;">
              <li>Lit queen size</li>
              <li>2 Adultes</li>
              <li>32m2</li>
            </ul>
          </div>
          <?php //endforeach ?> 
          </div>
        </div> 
        <br> <br>
        <div class="row">
            <div class="col-sm-6"> 
              <div class="form-group">
              Nombre de personne
                <label for=""></label>
                <input type="text" class="form-control" name="personne" id="" aria-describedby="helpId" placeholder="">
                <small id="passwordlHelp" class="form-text text-danger"><?php echo isset($arrayErreur['personne'])? $arrayErreur['personne']:'';?></small>
              </div>

            </div>
            <div class="col-sm-6"> 
            Nombre de chambre
            <br>
              <select class="browser-default custom-select mb-4" name="nbr_chambre" id="select">
            
                    <option value="" disabled="" selected=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>


                </select> 
                <small id="passwordlHelp" class="form-text text-danger"><?php echo isset($arrayErreur['nbr_chambre'])? $arrayErreur['nbr_chambre']:'';?></small>

              </div>
        </div>
        <!--Third Row-->
        <div class="row">
          <div class="col-sm-6 col-md-6 form-group">
            Date de debut
            <input type="date" name="date" class="form-control" id="date" placeholder="Date">
            <small id="passwordlHelp" class="form-text text-danger"><?php echo isset($arrayErreur['date'])? $arrayErreur['date']:'';?></small>

            </div>
            <div class="col-sm-6 col-md-6 form-group">
              Date de fin
            <input type="date" name="date_fin" class="form-control" id="date" placeholder="Date">
            <small id="passwordlHelp" class="form-text text-danger"><?php echo isset($arrayErreur['date_fin'])? $arrayErreur['date_fin']:'';?></small>

            </div>
        </div>
        <!--Fourth Row-->
        <div class="container">
          <div class="row">
            <div class="col-sm-6"> 
              <h6><b>Voulez vous une de nos prestation</b></h6> 
            </div>
            
          </div>
        
        <div class="row ">
        <?php foreach ($prestation as $prestation) : ?>

            <div class="col-sm-6">  
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="<?=$prestation['id_pres']?>" name="prestation[]" id="ck1">
              <label class="form-check-label" for="ck1"><?=$prestation['designation_pres'] ?></label>
            </div>
            </div>
            <div class="col-sm-4" style="margin-left:-20% "> 
              <ul>
                <li><?=$prestation['prix_unit'] ?>f</li> 
              </ul>
              
              
              

            </div>
            <?php endforeach ?>

            
            
       
        <!--Fifth Row-->
        </div> 

        <div class=row>
         
        <div class=col-sm-6>
              <h6><b>Totale de la réservation</b></h6>
              <h5 style="color:#3CAB85;"><b><?= $categorie['tarif_unit']?> f  + <?=$prestation['prix_unit'] ?>f  =  </h5></b>
              
            </div>
          
        </div>
        </div>
        <div class="row boutton1">
          <div class="col-md-6">
          <a href="<?=WEB_ROUTE.'?controlleurs=reservation&views=catalogue_chambre'?>" class="btn btn-primary float-right mt-5 annuler ">J'annule</a>
          </div>
          <div class="col-md-6">
          <button type="submit" class="btn btn-primary float-left mt-5 annuler1" name="reservation">Je réserve</button>
<!--           <a href="<?=WEB_ROUTE.'?controlleurs=hotel&views=mesreservation'?>" class="btn btn-primary float-left mt-5 annuler1">Je réserve</a>
 -->
          </div>
          
        </div>
    </div>
    </form>
</div>
          <!---------------- FIN--------------------->
         


                 
        

        
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