


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
 <div class="container mt-5">
   <div class="row">
       <div class="col-md-offset-3">
         <form class="form-inline droite">
         <style>
             .droite{
                 float: left;
               
             }
           </style>
           <div class="form-group ml-4">
             <label for="">Date</label>
             <input type="date" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
             <small id="helpId" class="text-muted"></small>
           </div>
           <div class="form-group ml-4">
             <label for="">Etat</label>
             <select class="form-control" name="disponible" id="">
               <option value="" selected>...</option>
               <option value="">Disponible</option>
               <option value="">Indisponible</option>
             </select>
           </div>
           <button type="submit" name="btn" class="btn btn-primary ml-4">ok</button>

         </form>

       </div>
     </div>

     <div class="row mt-5">
       <table class="table">
       <thead class="thead-dark">
         <tr>
           <th scope="col">#</th>
           <th scope="col">Client</th>
           <th scope="col">numero_Chambre</th>
           <th scope="col">Categorie</th>
           <th scope="col">prix_chambre</th>


           

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
           <th scope="row"></th>
           <td><a href="#"><?=$chambre['nom_user'].' '.$chambre['prenom_user']?></a></td> 
           <td><a href="#"><?=$chambre['numero_chambre'] ?></a></td>
           <td><a href="#"><?=$chambre['nom_categorie']?></a></td>     
           <td><a href="#"><?=$chambre['tarif_unit']?></a></td> 
                         
           
         </tr>
         <?php endforeach; ?>
       </tbody>
     </table>
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
