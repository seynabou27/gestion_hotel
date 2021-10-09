 <header>
        <nav class="navbar navbar-expand-lg navbar-white bg-white">
          <a class="navbar-brand" href="#"></a>
          <img src="img/logo.png" width="67" height="67" class="d-inline-block align-top" alt="">
          <button class="navbar-toggler"style="color:#005CA5;" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <?php if (est_gestionnaire()) :?>
            <div class="navbar-nav ">
            <li class="nav-item connect">
                <a class="nav-link active" href="<?=WEB_ROUTE.'?controlleurs=gestionnaire&views=tableau_bord'?>">Tableau de bord</a><span class="sr-only">(current)</span></a>
              </li>

            <li class="nav-item connect">
                <a class="nav-link active" href="<?=WEB_ROUTE.'?controlleurs=gestionnaire&views=liste.client'?>">Clients</a><span class="sr-only">(current)</span></a>
              </li>
    
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=WEB_ROUTE.'?controlleurs=gestionnaire&views=liste.chambre'?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Réservations
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="nav-link active" href="<?=WEB_ROUTE.'?controlleurs=gestionnaire&views=liste.reservation'?>">Liste_Réservations</a><span class="sr-only">(current)</span></a>
                <a class="nav-link active" href="<?=WEB_ROUTE.'?controlleurs=gestionnaire&views=ajout.reservation'?>">Ajout_reservation</a><span class="sr-only">(current)</span></a>

                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=WEB_ROUTE.'?controlleurs=reservation&views=liste.chambre'?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Chambre
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="nav-item nav-link active" href="<?=WEB_ROUTE.'?controlleurs=reservation&views=catalogue_chambre'?>">Catalogue_chambres</a><span class="sr-only">(current)</span></a>
                  <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=gestionnaire&views=liste.chambre'?>">Liste_chambre</a>
                  <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=gestionnaire&views=liste.categorie'?>">Liste_categorie</a>
                  <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=gestionnaire&views=ajout.chambre'?>">Ajout_chambre</a>
                  <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=gestionnaire&views=ajout.categorie'?>">Ajout_categorie</a>

                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=WEB_ROUTE.'?controlleurs=prestation&views=liste.prestation'?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Prestation
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=prestation&views=liste_prestation'?>">Liste_prestation</a>
                  <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=prestation&views=ajout_prestation'?>">Ajout_prestation</a>
                </div>
              </li>

               
            </div>
            <?php endif ?>
            
          </div>
          <?php if (est_gestionnaire()) :?>
          
          <div class="dropdown">
            <button class="btn boutton btn-secondary dropdown-toggle"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <b><?= $_SESSION['userConnect']['nom_user']?></b>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=security&views=deconnexion'?>">Se déconnecter</a>
              <a class="dropdown-item" href="#">Paramettrer</a>
            </div>
          </div>
          <?php endif ?>
            <!-- div class="collapse navbar-collapse mr-o ml-4" id="navbarNavAltMarkup">
              <a class="btn btn droite" href="<?=WEB_ROUTE.'?controlleurs=chambre&views=connexion'?>">Je me connecter</a>
              <a class="btn btn gauche" href="<?=WEB_ROUTE.'?controlleurs=chambre&views=inscription'?>" style="color: #005CA5">je crée une compte</a>
            </div> -->
            <?php if (!est_connect()):?>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=security&views=deconnexion'?>">Déconnexion</a>
                </div>
                <?php endif?>
                


             <!-- <ul class="navbar-nav mr-o ml-4">
            
             
            
            </ul> --> 
          

        </nav>
      </header> 