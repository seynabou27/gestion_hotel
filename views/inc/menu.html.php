
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
                <?php if (!est_client()&& !est_gestionnaire()) : ?>
              <a class="nav-item nav-link propos" href="#">A propos</a>
              <a class="nav-item nav-link" href="#">Communauté</a>
              <a class="nav-item nav-link" href="#">Nos offres</a>
              <a class="nav-item nav-link" href="#">Contact</a>
              <?php endif ?> 

              <?php if (est_gestionnaire()) : ?>
                <div class="navbar-nav ">
            <!-- <li class="nav-item">
              <a class="nav-item nav-link " href="<?=WEB_ROUTE.'?controlleurs=chambre&views=catalogue'?>">Accueil <span class="sr-only">(current)</span></a>
            </li> -->
              <li class="nav-item connect">
                <a class="nav-link active" href="<?=WEB_ROUTE.'?controlleurs=reservation&views=liste.reservation'?>">Liste_Réservations</a><span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=WEB_ROUTE.'?controlleurs=reservation&views=liste.chambre'?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Chambre
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=reservation&views=liste.chambre'?>">Liste_chambre</a>
                  <a class="dropdown-item" href="#">Ajout_chambre</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=WEB_ROUTE.'?controlleurs=prestation&views=liste.prestation'?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Prestation
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=prestation&views=liste.prestation'?>">Liste_prestation</a>
                  <a class="dropdown-item" href="#">Ajout_prestation</a>
                </div>
              </li>
              <div class="dropdown">
            <button class="btn boutton btn-secondary dropdown-toggle"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Gestionnaire
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=security&views=deconnexion'?>">Se déconnecter</a>
              <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=security&views=inscription'?>">Je m'inscris</a>
              <a class="dropdown-item" href="#">Paramettrer</a>
            </div>
          </div>
               
            </div>
              <?php endif ?> 
            </div>
            <?php if (est_client()): ?>

              <a class="nav-item nav-link active" href="<?=WEB_ROUTE.'?controlleurs=reservation&views=catalogue_chambre'?>">Catalogue des chambres</a><span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="<?=WEB_ROUTE.'?controlleurs=reservation&views=mesreservation'?>">Mes réservations</a><span class="sr-only">(current)</span></a>
                <?php endif ?>

              
            <?php if(!est_client() && !est_gestionnaire()): ?>
              <div class="collapse navbar-collapse"style="margin-left: 14%;" id="navbarNavAltMarkup">
              <a class="btn btn droite" href="<?=WEB_ROUTE.'?controlleurs=chambre&views=connexion'?>">Je me connecter</a>
              <a class="btn btn gauche" href="<?=WEB_ROUTE.'?controlleurs=chambre&views=inscription'?>" style="color: #005CA5">je crée une compte</a>
            </div>
              <?php endif ?>
        
          <?php if(est_client()): ?>
            <div class="dropdown" style="margin-left: 18%;">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=$_SESSION['userConnect']['Avatar'] ?>" class="profile-image rounded-circle"style="width:10%; height:auto; background-color: gray; "><b> <?= $_SESSION['userConnect']['nom_user']?></b><b class="caret"></b></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=security&views=deconnexion'?>">Se déconnecter</a>
                <a class="dropdown-item" href="#">Paramettre</a>
              </div>  
            </div>
           

            <!-- <div class="dropdown " style="margin-left: 37%; width:12%">
              <button class="btn boutton btn-secondary dropdown-toggle float-right" style="background-color: #005CA5;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <div class="col-sm-6">
                <img src="<?=$_SESSION['userConnect']['Avatar'] ?>" class="rounded-circle" alt="" style="width:40%; height:auto;"> Client
                </div>
  
                
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=security&views=deconnexion'?>">Se déconnecter</a>
                <a class="dropdown-item" href="#">Paramettre</a>
              </div> -->
              
            <?php endif ?>
            


        </nav>