


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
    <link rel="stylesheet" href="<?=WEB_ROUTE.'css/liste.chambre.css'?>">


  </head>
  <body>
      <header>
        <?php require_once(ROUTE_DIR.'views/inc/menu1.html.php'); ?>

      </header>

      <br>
      <div class=row>
            <div class=col-sm-6>
            <h4 style="margin-left:19%;"><b>Liste des chambres</b></h4>

            </div>
            <div class=col-sm-6>
            <a name="" id="" class="btn btn-primary retour" href="<?=WEB_ROUTE.'?controlleurs=gestionnaire&views=ajout.chambre'?>" role="button"><i class="bi bi-plus"></i>Ajouter une Chambre</a>

            </div>
            
        </div>
        <br> <br>
 
      <div class="container">
     <table class="table table-striped">
       <thead>
         <tr>
           <th scope="col">numero_Chambre</th>
           <th scope="col">Categorie</th>
           <th scope="col">Numero téléphone</th>
           <th scope="col">Etat</th>
           <th scope="col">Action</th>
           <th scope="col"></th>





           

         </tr>
       </thead>
       <tbody>
         <?php  
         if (!is_null($data)) {
             $chambre= find_all_chambre();
         }else{
             extract($data);
         }
         $chambre=find_all_chambre(); foreach ($chambre as $chambre):
         ?>
         <tr>
           <td><?=$chambre['numero_chambre'] ?></td>
           <td><?=$chambre['id_chambre']?></td>     
           <td><?=$chambre['telephone_chambre']?></td> 
           <td class=""><?=$chambre['etat_chambre']?></td>
           <td><a name="" id="" class="btn" href="#" role="button"><i class="bi bi-pencil-fill"></i></a></td> <td><a name="" id="" class="btn" href="#" role="button"><i class="bi bi-trash"></i></a></td>


                         
           
         </tr>
         <?php endforeach; ?>
       </tbody>
     </table>
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
      

      
