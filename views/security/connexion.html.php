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
    <link rel="stylesheet" href="<?=WEB_ROUTE.'css/connexion.css'?>">

  </head>
  <body>
      
<div class="partie1 ">
    <div class="row">
        <div class="col-md-6">
          <div class="centered">
            <img class="blanc" src="img/blanc.png" alt="">
            <h3 class="texte"><b>L'hospitalit√© pour <br>vos souvenirs.</b></h3>
          <p>
          <ul class="texte1">
            <li>Profitez de nos tarifs les plus bas,tout le temps <br></li>
            <li>Wifi gratuit dans la chambre <br></li>
            <li> Enregistrement mobile et plus </li>
          </ul>
            
          </div>
          
          
          </p>
          <img class="img1" src="img/groupe1.png" alt="">
         
            
        </div>
        
        <div class="col-md-6">
          <div class="menu">
            <ul class="nav border-bottom justify-content-center menu1">
            <li class="nav-item active">
                  <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=chambre&views=catalogue'?>">Acceuil<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item connect">
                <a class="nav-link active "  href="<?=WEB_ROUTE.'?controlleurs=chambre&views=connexion'?>">Se connecter <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=chambre&views=inscription'?>">s'inscrire</a>
              </li>
              
            </ul>
            
          </div>
          <div class="form-container sign-in-container texte-center">

          <form method="POST" enctype="multipart/form-data" action="<?=WEB_ROUTE?>">
                <input type="hidden" name="controlleurs" value="security"/>
                <input type="hidden" name="action" value="connexion"/>
                 <div>
                  <p class="aventure"><b>C'est parti pour l'aventure!</b></p>
                  <p class="aventure1">Veuillez remplir les champs ci-dessous.</p>
                   
                 </div>
                 <?php if ( isset( $arrayErreur['erreurConnexion'])) : ?>
                  <div class="alert alert-danger" role="alert">
                    <?=  $arrayErreur['erreurConnexion'] ?>
                    </div> 
                    <?php endif ?>
                          
                
                 
              <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <input type="texte" name="login" class="form-control  w-75 p-2" style="background-color: #eee;" id="exampleInputEmail1"  placeholder="Nom d'utilisateur / Email">
                <small id="emailHelp" class="form-text text-danger"><?php echo isset($arrayErreur['login'])? $arrayErreur['login']:'';?></small></small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword"></label>
                <input type="password" name="password" class="form-control  w-75 p-2"  style="background-color: #eee;" id="exampleInputPassword" placeholder="Mot de passe">
                <small id="passwordlHelp" class="form-text text-danger"><?php echo isset($arrayErreur['password'])? $arrayErreur['password']:'';?></small>
              </div>
              <div class="form-group">

                <button type="submit" class="btn boutton w-75 p-2 bleu" name="btn" style="background-color: #005CA5; color:#fff;"><b>Je me connecte</b></button>
              </div>
              <a  class="identi" href="#">J'ai oubli√© mes identifiants</a>
              <div class="compte">
                <p class="inscris"> Je n'ai pas de compte?</p> 
                <a class="identi1" href="<?=WEB_ROUTE.'?controlleurs=security&views=inscription'?>">Je m'inscris</a>

              </div>

          

    
          </form>
        </div>
            
        </div>
        
    </div>
    
</div>


























    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>