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
    <link rel="stylesheet" href="<?=WEB_ROUTE.'css/catalogue_chambre.css'?>">

    <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bower_components/bootstrap-horizon/bootstrap-horizon.css"> -->
  </head>
  <body>
      <header>
      <?php require_once(ROUTE_DIR.'views/inc/menu.html.php'); ?>
      </header>
      <!-- partie1 -->
      
        
            
          
        
        <div class="container">
          <br> <br>
          <h4><b>Liste de nos catégorie</b></h5>
      <div class="row contenu">
        <?php foreach($categorie as $categorie): ?>
         
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 17rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?hotel"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">
              

                <span class="badge"><h5><?= $categorie['nom_categorie']?></h5></span>
                <span class="badge badge-info"><?= $categorie['tarif_unit']?> f</span>
             
            </h5>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                ></span>
                <a href="<?=WEB_ROUTE.'?controlleurs=chambre&views=detail&id_categorie='.$categorie['id_categorie']?>" class="btn btn-primary detail">Detail</a>
                <a href="<?=WEB_ROUTE.'?controlleurs=reservation&views=page_reservation&detail&id_categorie='.$categorie['id_categorie']?>" class="btn btn-primary reserver">Je réserve</a> 
            </div>
          </div>
        </div>

        <?php endforeach ?> 
        </div>
        
      </div>
        

      








    
  

  







<style>
.chambres{
    margin-top: 3%;
    margin-left: 8%;
    padding-right: 19%;
}
.contenu{
    margin-top: 4%;
}
.col-md-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 100%;
}


.col-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 2 0 41.666667%;
    max-width: 74.667%;
}

h1{
	font-weight: 800;
	font-size: 3em;
}

.subtitle{
	font-size: 1.25em;
	opacity: 0.65;
}

.card-block{
	height: 150px;
	background-color: #fff;
	border: none;
	background-position: center;
	background-size: cover;
	transition: all 0.2s ease-in-out !important;
	border-radius: 24px;
	
}
.col-md-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
    margin-top: 2%;
   
}
.card-text{
    color: #3CAB85;
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
      .reserver{
        color:white;
        background-color:#005CA5;

      }
     
      .detail{
        color:#005CA5;
        background-color:white;
        border-color:#005CA5

      }

</style>

      
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
        footer{
          width: 100%;
        }
        .reseau {
        vertical-align: middle;
        border-style: none;
        margin: 2%;
        }
        
          body {
          font-family:Circular_std_bold;
          overflow-x: hidden;
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