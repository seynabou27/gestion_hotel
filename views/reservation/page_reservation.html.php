<!-----------------CONTAINER ----------------------

        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 22rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?chambre"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">
                <span class="badge badge-success"><?= $chambre['nom_categorie']?></span>
                <span class="badge badge-info"><?= $chambre['prix_unit']?></span>
             
            </h5>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                ></span>
                <a href="#" class="btn btn-primary detail">Detail</a>
                <a href="<?=WEB_ROUTE.'?controlleurs=reservation&views=mesreservation'?>" class="btn btn-primary reserver">Je réserve</a> 
            </div>
          </div>
        </div>
        
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 22rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?restaurant"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">
                <span class="badge badge-success"><?= $chambre['nom_categorie']?></span>
                <span class="badge badge-info"><?= $chambre['prix_unit']?></span>
             
            </h5>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                ></span>
                <a href="#" class="btn btn-primary detail">Detail</a>
                <a href="<?=WEB_ROUTE.'?controlleurs=reservation&views=mesreservation'?>" class="btn btn-primary reserver">Je réserve</a> 
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
                <span class="badge badge-success"><?= $chambre['nom_categorie']?></span>
                <span class="badge badge-info"><?= $chambre['prix_unit']?></span>
             
            </h5>
              <hr /> 
              <span class="float-left btn btn-sm text-center disabled"
                ></span>
                <a href="#" class="btn btn-primary detail">Detail</a>
                <a href="<?=WEB_ROUTE.'?controlleurs=reservation&views=mesreservation'?>" class="btn btn-primary reserver">Je réserve</a> 
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
                <span class="badge badge-success"><?= $chambre['nom_categorie']?></span>
                <span class="badge badge-info"><?= $chambre['prix_unit']?></span>
             
            </h5>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                ></span>
                <a href="#" class="btn btn-primary detail">Detail</a>
                <a href="<?=WEB_ROUTE.'?controlleurs=reservation&views=mesreservation'?>" class="btn btn-primary reserver">Je réserve</a> 
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
                <span class="badge badge-success"><?= $chambre['nom_categorie']?></span>
                <span class="badge badge-info"><?= $chambre['prix_unit']?></span>
             
            </h5>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                ></span>
                <a href="#" class="btn btn-primary detail">Detail</a>
                <a href="<?=WEB_ROUTE.'?controlleurs=reservation&views=mesreservation'?>" class="btn btn-primary reserver">Je réserve</a> 
            </div>
          </div>
        </div>
      </div> 

    </div>-->
    <!-- limit --------------->
   <!--  <div class="scrolling-wrapper row flex-row flex-nowrap mt-4 pb-4 pt-2">
			<?php //foreach ($categories as $categorie): ?>
			<div class="col-5">
				<div class="card card-block card-1">
                    <div class="card" style="width: 25rem; border-radius: 7px;">
                    
                    <div class="card-body">
                        <p><b>Suite royale</b></p>
                        <span>Prix: <?php //$categorie['prix_unit']?></span>
                        <p class="card-text"> <b>Prix: 450 000 - 23chambres</b></p> 
                        <a href="#" class="btn btn-primary detail">Voir les chambres</a>
                    
                    </div>
                    </div>
			    </div>
            </div>
            <div class="col-5">
            <div class="card card-block card-1">
                    <div class="card" style="width: 25rem; border-radius: 7px;">
                    
                    <div class="card-body">
                        <p><b>Suite simple</b></p>
                        <p class="card-text"><b>Prix: 350 000 - 23chambres</b></p>
                        <a href="#" class="btn btn-primary detail">Voir les chambres</a>
                    
                    </div>
                    </div>
			    </div>
            </div>
            <div class="col-5">
            <div class="card card-block card-1">
                    <div class="card" style="width: 25rem; border-radius: 7px;">
                    
                    <div class="card-body">
                        <p><b>Chambre de luxe</b></p>
                        <p class="card-text"><b>Prix: 250 000 - 23chambres</b></p>
                        <a href="#" class="btn btn-primary detail">Voir les chambres</a>
                    
                    </div>
                    </div>
			    </div>
            </div>
            <div class="col-5">
            <div class="card card-block card-1">
                    <div class="card" style="width: 25rem; border-radius: 7px;">
                    
                    <div class="card-body">
                        <p><b>Chalets</b></p>
                        <p class="card-text"><b>Prix: 150 000 - 23chambres</b></p>
                        <a href="#" class="btn btn-primary detail">Voir les chambres</a>
                    
                    </div>
                    </div>
			    </div>
            </div> 
			
            <?php //endforeach ?>

            
    </div>
</div> -->

<!-- <div class="container-fluid">
    <div class="row chambres">
        <div class="col-md-4">
            <h5><b>Liste de nos chambres</b></h5>
        </div>
        
        
    </div>
    
</div>

