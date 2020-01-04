<?php $row = $statement->fetch(); 
?>

<div class="container-fluid">
  <br>
  <h1 class="h3 mb-2 text-gray-800 m-0 font-weight-bold text-primary" style="color: #E56806">Détail de la déclaration N° <strong><?php echo $row['ID_DMD']  ?></strong></h1>
  <br>
  <div class="card shadow mb-4" style="font-size: 20px; width: 100%; margin: 0 auto; ">
     <div class="card-header py-3">
         <center>
         	<h4 class="m-0 font-weight-bold text-primary">
         		<span style="float: left; ">Objet de l'invention : 
         			<span style="color: black; "><?php echo $row['OBJET_INVENTION']  ?></span> 
         		</span>
         		<span style="float: right;">Statut de la déclaration : <span style="color: black; "> <?php echo $row['STATUT_DMD']  ?></span>
         		</span>
         	</h4>
         </center>
     </div>
   </div>
   <div class="card shadow mb-4" style="font-size: 20px; width: 100% ;margin:0 auto; ">
        <div class="card-header py-3">
        	<h4 class="m-0 font-weight-bold text-primary" >Description de la déclaration d'invention</h4>
  		</div>
  		<div class="card-body">
    		<?php echo $row['DESCRIPTION_INVENTION']; ?>
  		</div>
	</div>
	<div class="card shadow mb-4" style="font-size: 20px; width: 100% ;margin:0 auto; ">
  		<div class="card-header py-3">
    		<h4 class="m-0 font-weight-bold text-primary" >Autres Informations</h4>
  		</div>
  		<div class="row card-body" style="width: 90%; margin: 0 auto; text-align: left;">
    		<div class="col">Catégorie d'invention</div>
    		<div class="col"><strong><?php echo $row['CATEGORIE_INVENTION']  ?></strong></div>
    		<div class="w-100"></div><br>
    		<div class="col">Classment d'invention</div>
    		<div class="col"><strong><?php echo $row['CLASSEMENT']  ?></strong></div>
    		<div class="w-100"></div><br>
    		<div class="col">Nom Demandeur</div>
    		<div class="col"><strong><?php echo $nomAndPrenomDemandeur['nom']?></strong></div>
    		<div class="w-100"></div><br>
    		<div class="col">Prénom Demandeur</div>
    		<div class="col"><strong><?php echo $nomAndPrenomDemandeur['prenom']?></strong></div>
    		<div class="w-100"></div><br>
    		<div class="col">Fonctionnalité Demandeur</div>
    		<div class="col"><strong><?php echo $row['TYPE_DEMANDEUR']  ?></strong></div>
    	</div>
	</div>
</div>