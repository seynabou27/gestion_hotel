<!-- <header>
        <nav class="navbar navbar-expand-lg navbar-white bg-white">
          <a class="navbar-brand" href="#"></a>
          <img src="img/logo.png" width="67" height="67" class="d-inline-block align-top" alt="">
          <button class="navbar-toggler"style="color:#005CA5;" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-item nav-link " href="<?=WEB_ROUTE.'?controlleurs=chambre&views=catalogue'?>">Accueil <span class="sr-only">(current)</span></a>
            </li> 
              <li class="nav-item connect">
                <a class="nav-link active" href="<?=WEB_ROUTE.'?controlleurs=reservation&views=mesreservation'?>">Mes réservations</a><span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=reservation&views=liste.prestation'?>">Liste_prestations</a>
              </li>
               <li class="nav-item">
              <a class="nav-link" href="#">liste_prestations</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="#">Ajout_chambre</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="#">Ajout_prestation</a>
              </li> 
               
            </div>
            
          </div>
          
          <div class="dropdown">
            <button class="btn boutton btn-secondary dropdown-toggle"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              client
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=security&views=deconnexion'?>">Se déconnecter</a>
              <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=security&views=inscription'?>">Je m'inscris</a>
              <a class="dropdown-item" href="#">Paramettrer</a>
            </div>
          </div>
            div class="collapse navbar-collapse mr-o ml-4" id="navbarNavAltMarkup">
              <a class="btn btn droite" href="<?=WEB_ROUTE.'?controlleurs=chambre&views=connexion'?>">Je me connecter</a>
              <a class="btn btn gauche" href="<?=WEB_ROUTE.'?controlleurs=chambre&views=inscription'?>" style="color: #005CA5">je crée une compte</a>
            </div> 
            <?php if (!est_connect()):?>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=security&views=deconnexion'?>">Déconnexion</a>
                </div>
                <?php endif?>
                


            <ul class="navbar-nav mr-o ml-4">
            
             
            
            </ul> 
          

        </nav>
      </header>  -->