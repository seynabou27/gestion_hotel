
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

<!---------------------------EXAMPLE------------------>
<div class="container-fluid">
  <a class="lien" style="margin-top:6%; color:#eee;" href="#">Catalogue des chambres</a> - <a href="#">Détail des chambres</a>
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
        <span class="badge badge-light" style="background-color: #3CAB85; color:white;">Chambre de luxe</span>
      </div> 
       <div>
        <span class=""><h2><b>Suite twin</b></h2></span>
      </div> 
      
      <div>
              <!-- <span class="badge badge-light">Nom: <?= $detail['Nom_categorie']?></span>
              <span class="badge badge-light"><?= $detail['tarif_unit']?></span>
 -->
         <span class="badge" style="color:#3CAB85;"><h2>250 000</h2></span>
      </div>
      <div class="li">
      <ul style="list-style-type:circle;">
        <li>Lit queen size</li>
        <li>2 Adultes</li>
        <li>32m2</li>
      </ul>
      </div>  
      

  
    
    <a href="#" class="btn btn-sm btn-primary reserver ">Réserver</a>
      
    </div>
    
  </div>
  <div class="container-fluid li3">
    <h3 class="texte"><b>Description</b></h3>

    <span>
      <p class="texte">
       <span class="badge badge-light"><?= $categorie['description']?></span>

      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio saepe sit consequatur accusantium sed voluptatem exercitationem? Hic officia dicta ipsum numquam vero magnam velit quibusdam, repudiandae veniam error sint omnis voluptates quaerat consequatur labore, similique laborum mollitia dolor tempore fugiat excepturi quas expedita sit? Veritatis nostrum dolorem delectus temporibus voluptatum!

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
        <a href="#" class="btn btn-sm btn-primary reserver1 ">Réserver</a>

      </div>
      
    </div>
  
    
  </div>
  <div class="container li4">
    <div class="card-deck">
      
    <div class="col-sm-4 mb-4">
          <div class="card" style="width: 22rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?hotel"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">
                <span class="badge badge-success"></span>
                <span class="badge badge-info"></span>
             
              </h5>
              
<!--               <span class="float-left btn btn-sm text-center disabled"></span>
 -->                <a href="#" class="btn btn-primary detail">Detail</a>
                <a href="#" class="btn btn-primary reserver2">Je réserve</a> 
            </div>
          </div>
        </div>

        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 22rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?hotel"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">
                <span class="badge badge-success"></span>
                <span class="badge badge-info"></span>
             
              </h5>
              
<!--               <span class="float-left btn btn-sm text-center disabled"></span>
 -->                <a href="#" class="btn btn-primary detail">Detail</a>
                <a href="#" class="btn btn-primary reserver2">Je réserve</a> 
            </div>
          </div>
        </div>

        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 22rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?chambre"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">
                <span class="badge badge-success"></span>
                <span class="badge badge-info"></span>
             
              </h5>
              
<!--               <span class="float-left btn btn-sm text-center disabled"></span>
 -->                <a href="#" class="btn btn-primary detail">Detail</a>
                <a href="#" class="btn btn-primary reserver2">Je réserve</a> 
            </div>
          </div>
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


      <style>
        .btn-group-sm > .btn, .btn-sm {
          padding: 0.25rem 4.5rem;
          font-size: .875rem;
          line-height: 1.5;
          border-radius: .2rem;
        }
        .lien{
          margin-left: 3%;
          
        }
        .li{
          margin-left:-4%;
        }
        .li1{
          margin-top: 9%;
        }
        .texte{
          text-align: center;
          margin-top: 2%;
        }
        .li3{
          margin-top: 4%;
        }
        .li4{
          margin-top: 5%;
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
     
      .boutton{
        margin-top: 5%;
      }
      .partie3{
        display: flex;
        margin-top: -4%;
      }
      /* .card-deck{
        margin-top: 9%;
        margin: 12%;
      } */
      .titre{
        text-align: center;
      }
      .image{
        display: contents;
        text-align: center;
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
      
      
      .reserver{
        color:white;
        background-color:#005CA5;
        margin-top: 6%;

      }
      .reserver1{
        color:white;
        background-color:#005CA5;
        margin-top: 3%;

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
      .reserver2{
        color:white;
        background-color:#005CA5;
       

      }
      .btn-secondary:hover {
        color: #fff;
        background-color:#005CA5;
          border-color:#005CA5;
      }
      </style>