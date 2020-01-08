<?php $row = $statement->fetch();?>
<div class="container-fluid">
  <br>
  <h1 class="h3 mb-2 text-gray-800 m-0 font-weight-bold text-primary" style="color: #E56806">Données du professeur N° <strong><?php echo $row['CODE_PROF']  ?></strong></h1>
  <br>
  
   
	<div class="card shadow mb-4" style="font-size: 20px; width: 100% ;margin:0 auto; ">
  		<div class="card-header py-3">
    		<h4 class="m-0 font-weight-bold text-primary" >Informations</h4>
  		</div>
  		<div class="row card-body" style="width: 90%; margin: 0 auto; text-align: left;">
    		<div class="col">Nom </div>
    		<div class="col"><strong><?php echo $row['NOM_PROF']  ?></strong></div>
    		<div class="w-100"></div><br>
    		<div class="col">Prénom</div>
    		<div class="col"><strong><?php echo $row['PRENOM_PROF']  ?></strong></div>
    		<div class="w-100"></div><br>
    		<div class="col">Date de naissance </div>
    		<div class="col"><strong><?php echo $row['DATE_NAISSANCE_PROF']?></strong></div>
    		<div class="w-100"></div><br>
    		<div class="col">Email</div>
    		<div class="col"><strong><?php echo $row['EMAIL_PROF']?></strong></div>
            <div class="w-100"></div><br>
            <div class="col">Numéro d'affiliation</div>
    		<div class="col"><strong><?php echo $row['NUM_AFF']?></strong></div>
    		<div class="w-100"></div><br>
    		<div class="col">Téléphone</div>
    		<div class="col"><strong><?php echo $row['TELEPHONE_PROF']  ?></strong></div>
    	</div>
	</div>
</div>