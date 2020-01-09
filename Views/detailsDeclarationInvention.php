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
     <?php if($_SESSION['type'] =='ResponsableCir' && $row['DECISION_FINALE'] == ''){?>  
        <div class="w-100"></div><br> 
        <div class="col">Responsable Pool Competence</div>
        <div class="col">
           <form method="post" action="index.php?action=transmettreInventionPc&&id_dmd=<?php echo $row['ID_DMD']?>">
          <select name="respPC">
              <option value="">--choisir un reponsable--</option>
              <?php while($respPC = $listeRespPc->fetch()) {  ?> 
              <option value="<?php echo $respPC['ID_RESP_PC']  ?> "><?php echo $respPC['NOM_RESP_PC']  ?> <?php echo $respPC['PRENOM_RESP_PC']  ?></option>
              <?php  }?>              
          </select>
        
        </div>
      <?php } ?>
    	</div>
	</div>

  <?php if($_SESSION['type'] =='GuichetUnique' && $row['DECISION_FINALE'] == ''){?>
                  <a href="index.php?action=transmettreInventionCir&&id_dmd=<?php echo $row['ID_DMD']?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Transmettre le dossier au directeur de la CIR</span>
                  </a><br><br>
                  <a href="index.php?action=RefuserDemandeGu&&id_dmd=<?php echo $row['ID_DMD'] ?>" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Refuser la demande</span>
                  </a>

  <?php } ?>
  <hr>
  <?php if($row['DECISION_FINALE'] != ''){?>
                    <p style="font-size: 20px; ">La décision finale du CIR est : <strong style="color:green; "><?php echo $row['DECISION_FINALE'] ?> </strong></p>
                     <a href="index.php?action=AccepterInventionCir&&id_dmd=<?php echo $row['ID_DMD']?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Accepter</span>
                  </a>
                  <a href="index.php?action=RefuserDemandeGu&&id_dmd=<?php echo $row['ID_DMD'] ?>" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Refuser</span>
                  </a>
  <?php }?>

<?php if($_SESSION['type'] =='RespPoolCompetence' && $row['REPONSE_PC'] == ''){?>
  <div class="container">
  <form method="post" action="index.php?action=RespPoolCompetenceInvention">
    <input type="hidden" name="id_dmd" value="<?php echo $row['ID_DMD'] ; ?>">
    <div class="form-group">
      <textarea required="required" name="reponseDemande"></textarea>
      <label for="textarea" class="control-label" style="left: 0;">Réponse sur la demandes </label><i class="bar"></i>
    </div>

    <div class="button-container">
    <button type="Submit" class="button"><span>Ajouter utilisateur</span></button>
  </div>
  </form>

</div>
  <?php } ?>

  <?php if($_SESSION['type'] =='ResponsableCir' && $row['DECISION_FINALE'] == ''){?>
                  <button type="Submit" class="button"><span>Transmettre le dossier au reponsable de pool de competence</span></button>  
                   <br><br>
                  <a href="index.php?action=RefuserInventionCir&&id_dmd=<?php echo $row['ID_DMD']?>" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Refuser la demande</span>
                  </a>
                  </form>
  <?php } ?>

</div>
