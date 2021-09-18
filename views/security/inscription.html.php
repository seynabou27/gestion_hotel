<!doctype html>
<html lang="en">
  <head>
    <title>Hotel Tooki</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
<div class="partie1 ">
    <div class="row">
        <div class="col-md-6">
          <div class="centered">
            <img class="blanc" src="img/blanc.png" alt="">
            <h3 class="texte"><b>L'hospitalité pour <br>vos souvenirs.</b></h3>
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
              <li class="nav-item ">
                <a class="nav-link active"  href="<?=WEB_ROUTE.'?controlleurs=chambre&views=connexion'?>">Se connecter <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item connect">
                <a class="nav-link " href="<?=WEB_ROUTE.'?controlleurs=chambre&views=inscription'?>">s'inscrire</a>
              </li>
              
            </ul>
            
        </div>
        <div class="form-container forme sign-in-container texte-center">

            <form method="POST" enctype="multipart/form-data" action="<?=WEB_ROUTE?>">
                <input type="hidden" name="controlleurs" value="security"/>
                <input type="hidden" name="action" value="connexion"/>
                <div>
                    <p class="aventure"><b>C'est parti pour l'aventure!</b></p>
                    <p class="aventure1">Veuillez remplir les champs ci-dessous.</p>
               
                </div>  
                <div class="row  mb-2 row1">
                    <div class="col">
                        <input type="text" class="form-control" style="background-color: #eee;" placeholder="Nom">
                        <small class="form-text text-danger"><?php echo isset($arrayErreur['nom'])? $arrayErreur['nom']:'';?></small>

                    </div>
                    <div class="col mb-2">
                        <input type="text" class="form-control" style="background-color: #eee;" placeholder="Prénom">
                        <small class="form-text text-danger"><?php echo isset($arrayErreur['Prenom'])? $arrayErreur['Prenom']:'';?></small>

                    </div>
                </div>
                <div class="row row1 mb-2">
                    <div class="col">
                        <input type="text" class="form-control" style="background-color: #eee;" placeholder="téléphone">
                        <small id="emailHelp" class="form-text text-danger"><?php echo isset($arrayErreur['telephone'])? $arrayErreur['telephone']:'';?></small>


                    </div>
                    <div class="col  mb-2">
                        <input type="text" class="form-control" style="background-color: #eee;" name="login" placeholder="Email">
                        <small id="emailHelp" class="form-text text-danger"><?php echo isset($arrayErreur['login'])? $arrayErreur['login']:'';?></small>

                    </div>
                </div>
                <div class="row row1  mb-2">
                    <div class="col">
                        <input type="pays" style="background-color: #eee;"  name="pays" class="form-control" placeholder="Pays/Région">
                        <small class="form-text text-danger"><?php echo isset($arrayErreur['nom'])? $arrayErreur['nom']:'';?></small>

                    </div>
                    <div class="col  mb-2">
                    <input type="text" class="form-control" style="background-color: #eee;" name="code" style="background-color: #eee;" placeholder="Code postal">
                    <small class="form-text text-danger"><?php echo isset($arrayErreur['code'])? $arrayErreur['code']:'';?></small>

                    </div>
                </div>
                <div class="row  row1 mb-2">
                    <div class="col  mb-2">
                        <input type="password" name="password"  class="form-control"  style="background-color: #eee;" placeholder="Mot de passe">
                        <small id="passwordlHelp" class="form-text text-danger"><?php echo isset($arrayErreur['password'])? $arrayErreur['password']:'';?></small>

                    </div>
                    <div class="col  mb-2">
                        <input type="password" name="password1" class="form-control"  style="background-color: #eee;" placeholder="Confirmer mot de passe">
                        <small id="passwordlHelp" class="form-text text-danger">
                        <?php echo isset($arrayErreur['password'])? $arrayErreur['password']:'';?>
                        <?php echo isset($arrayErreur['password1'])? $arrayErreur['password1']:'';?></small> 

                    </div>
                </div>
            </form>

                 
        </div>
                    
        <div class="mb-3 ">
                         
        <div class="file">
            <label style="color:black;" for="file">Fichier</label>
            <input type="file" name="file">
            
        </div>


            <div class="form-group">

                <button type="submit" class="btn boutton w-75 p-2 bleu" name="btn_submit" style="background-color: #005CA5;">Je me connecte</button>
            </div>
                          
        </div>
                
                
        <div class="compte">
            <p class="inscris"> J'ai deja un compte?</p> 
            <a class="identi1"  href="<?=WEB_ROUTE.'?controlleurs=security&views=connexion'?>">Je me connecte</a>

        </div>
                
    
        </div>
            
        </div>
        
    </div>
    
</div>



<style>
  .partie1{
    position: relative;
  }
  .connect a {
  border-bottom: 5px solid #005CA5;
  color:#b7bcc1!important;
}
  .img1{
    margin-top: -3%;
    width: 107%;
    height: 600px;
  }
  
  .centered {
    position: absolute;
    top: 40%;
    left: 40%;
    transform: translate(-46%, -27%);
  }
  .texte{
    color: white;
    margin-left: 7%;
  }
  .texte1{
    color: white;
    margin-left:-4% ;
    margin-top: 10%;
    
  }
  .blanc{
    margin-top: -27%;
    margin-left: 5%;
  }
  
  .border-bottom {
    border-bottom: 2px solid #dee2e6 !important;
    width: 97%;
    margin-left: 3%;
    margin-top: 6%;
}
.nav-link:hover {
  border-bottom: 5px solid #005CA5;
  color:#fff!important;
}

.nav-link:hover {
    border-bottom: 5px solid #005CA5;
    color: #005CA5 !important;
}
a {
    color: #b7bcc1;
    text-decoration: none;
    background-color: transparent;
}
.form-group{
  margin-left: 23%;
}
.bleu{
  margin-top: 4%;
  height: 23%;
}
.p-2 {
    padding: -2.5rem !important;
}
.aventure{
  margin-top: 2%;
 text-align: center;
  color:#FBBC21 ;

}
.aventure1{
  text-align: center;
  
}
.identi{
  color: #005CA5;
  margin-left: 36%;

}
.compte{
  margin-top: 4%;
  display: flex;
  margin-left: 32%;
 
}
.inscris{
  color: #bbb8b8;
  margin-right: 2%;
  

}
.identi1{
  color: #005CA5;
}
.form-control {
    display: block;
    width: 88%;
}
.mx-sm-2 {
    margin-right: 2.5rem !important;
}
.row1{
    margin-left: 12%;
}

.file{
    margin-left: 14%;
}
 



</style>






















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
