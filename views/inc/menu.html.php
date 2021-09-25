<nav class="navbar navbar-expand-lg navbar-white bg-white">
          <a class="navbar-brand" href="<?=WEB_ROUTE.'?controlleurs=chambre&views=catalogue'?>"></a>
          <img src="img/logo.png" width="67" height="67" class="d-inline-block align-top" alt="">
          <button class="navbar-toggler"style="color:#005CA5;" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <?php if (est_client()) : ?>
              <a class="nav-item nav-link active" href="<?=WEB_ROUTE.'?controlleurs=chambre&views=catalogue'?>">Accueil <span class="sr-only">(current)</span></a>
                <?php endif ?>
                <?php if (!est_client()) : ?>
              <a class="nav-item nav-link propos" href="#">A propos</a>
              <a class="nav-item nav-link" href="#">Communauté</a>
              <a class="nav-item nav-link" href="#">Nos offres</a>
              <a class="nav-item nav-link" href="#">Contact</a>
              <?php endif ?> 
            </div>
            <?php if (est_client()): ?>

              <a class="nav-item nav-link active" href="<?=WEB_ROUTE.'?controlleurs=reservation&views=catalogue_chambre'?>">Catalogue des chambres</a><span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="<?=WEB_ROUTE.'?controlleurs=reservation&views=mesreservation'?>">Mes réservations</a><span class="sr-only">(current)</span></a>
              
<!--               <a class="nav-item nav-link" href="<?=WEB_ROUTE.'?controlleurs=reservation&views=liste.prestation'?>">Liste_prestations</a>
 -->              <div class="row">
               <div class="col-6">
                  <img src="<?=$_SESSION['userConnect']['Avatar'] ?>" class="rounded-circle" alt="" style="width:40%; height:auto;margin-left: 145%;">
                  <p></p>
               </div>
              

             
              <?php endif ?>
            <?php if(!est_client()): ?>
              <div class="collapse navbar-collapse mr-o ml-4" id="navbarNavAltMarkup">
              <a class="btn btn droite" href="<?=WEB_ROUTE.'?controlleurs=chambre&views=connexion'?>">Je me connecter</a>
              <a class="btn btn gauche" href="<?=WEB_ROUTE.'?controlleurs=chambre&views=inscription'?>" style="color: #005CA5">je crée une compte</a>
            </div>
              <?php endif ?>
          </div>
          <?php if(est_client()): ?>
            <div class="dropdown">
              <button class="btn boutton btn-secondary dropdown-toggle" style="background-color: #005CA5; margin-left:30%" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Client
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=security&views=deconnexion'?>">Se déconnecter</a>
                <a class="dropdown-item" href="#">Paramettre</a>
              </div>
              
            <?php endif ?>
            


        </nav>