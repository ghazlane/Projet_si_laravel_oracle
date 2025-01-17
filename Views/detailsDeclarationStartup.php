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
         		<span style="float: left; ">Service offert par la startup : 
         			<span style="color: black; "><?php echo $row['SERVICE_STARTUP']  ?></span> 
         		</span>
         		<span style="float: right;">Statut de la déclaration : <span style="color: black; "> <?php echo $row['STATUT_DMD']  ?></span>
         		</span>
         	</h4>
         </center>
     </div>
   </div>
   <div class="card shadow mb-4" style="font-size: 20px; width: 100% ;margin:0 auto; ">
        <div class="card-header py-3">
        	<h4 class="m-0 font-weight-bold text-primary" >Description de la startup</h4>
  		</div>
  		<div class="card-body">
    		<?php echo $row['DESCRIPTION_DMD']; ?>
  		</div>
	</div>
	<div class="card shadow mb-4" style="font-size: 20px; width: 100% ;margin:0 auto; ">
  		<div class="card-header py-3">
    		<h4 class="m-0 font-weight-bold text-primary" >Autres Informations</h4>
  		</div>
  		<div class="row card-body" style="width: 90%; margin: 0 auto; text-align: left;">
    		<div class="col">Lieu de la startup </div>
    		<div class="col"><strong><?php echo $row['LIEU_STARTUP']  ?></strong></div>
    		<div class="w-100"></div><br>
    		<div class="col">Mondat </div>
    		<div class="col"><strong><?php echo $row['MONDAT_STARTUP']  ?></strong></div>
    		<div class="w-100"></div><br>
    		<div class="col">Nom Demandeur</div>
    		<div class="col"><strong><?php echo $nomAndPrenomDemandeur['nom']?></strong></div>
    		<div class="w-100"></div><br>
    		<div class="col">Prénom Demandeur</div>
    		<div class="col"><strong><?php echo $nomAndPrenomDemandeur['prenom']?></strong></div>
    		<div class="w-100"></div><br>
    		<div class="col">Fonctionnalité Demandeur</div>
    		<div class="col"><strong><?php echo $row['TYPE_DEMANDEUR']  ?></strong></div>
     <?php if($_SESSION['type'] =='ResponsableCir' && $row['DECISION_FINALE'] == '' && $row['RPS_PC'] == '' && $row['STATUT_CIR'] == '' && $row['STATUT_DMD'] == 'En cours'){?>  
        <div class="w-100"></div><br> 
        <div class="col">Pool Competence</div>
        <div class="col">
           <form method="post" action="index.php?action=transmettreStartupPc&&id_dmd=<?php echo $row['ID_DMD']; ?>">
          <select name="respPC">
              <option value="">--choisir un Pool de Compétence--</option>
              <?php while($PC = $listePc->fetch()) {  ?> 
                 <option value="<?php echo $PC['ID_PC']  ?> "><?php echo $PC['NOM_PC']  ?> </option>
              <?php  }?>              
          </select>
        
        </div>
      <?php } ?>
    	</div>
	</div>

  <?php if($_SESSION['type'] =='GuichetUnique' && $row['DECISION_FINALE'] == ''  && $row['STATUT_RESP_GU'] == ''&& $row['STATUT_DMD'] == 'En attente'){?>
                  <a href="index.php?action=transmettreStartupCir&&id_dmd=<?php echo $row['ID_DMD']?>" class="btn btn-success btn-icon-split" onclick="return confirm('Voulez-vous vraiment transmettre le dossier'); ">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Transmettre le dossier au directeur de la CIR</span>
                  </a><br><br>
                  <a href="index.php?action=RefuserStartupGu&&id_dmd=<?php echo $row['ID_DMD'] ?>" class="btn btn-danger btn-icon-split" onclick="return confirm('Voulez-vous vraiment refuser le dossier'); ">
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Refuser la demande</span>
                  </a>

  <?php } ?>
          
          <?php if($row['DECISION_FINALE'] != '' && $_SESSION['type'] == 'GuichetUnique' && ($row['STATUT_DMD'] != 'Accepter' && $row['STATUT_DMD'] != 'Non accepter')){?>
                    <p style="font-size: 20px; ">La décision finale du CIR est : <strong style="color:green; "><?php echo $row['DECISION_FINALE'] ?> </strong></p>
                     <a href="index.php?action=AccepterStartupGu&&id_dmd=<?php echo $row['ID_DMD']?>" class="btn btn-success btn-icon-split" onclick="return confirm('Voulez-vous vraiment accepter le dossier'); ">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Accepter</span>
                  </a>
                  <a href="index.php?action=RefuserStartupGu&&id_dmd=<?php echo $row['ID_DMD'] ?>" class="btn btn-danger btn-icon-split" onclick="return confirm('Voulez-vous vraiment refuser le dossier'); ">
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Refuser</span>
                  </a>
  <?php }?>

  <?php if($_SESSION['type'] =='RespPoolCompetence' && $row['RPS_PC'] == '' && $row['STATUT_DMD'] == 'En cours'){?>
  <div class="container">
  <form method="post" action="index.php?action=RespPoolCompetenceStartup">
    <input type="hidden" name="id_dmd" value="<?php echo $row['ID_DMD'] ; ?>">
    <div class="form-group">
      <textarea required="required" name="reponseDemande"></textarea>
      <label for="textarea" class="control-label" style="left: 0;">Réponse sur la demandes </label><i class="bar"></i>
    </div>

    <div class="button-container">
    <button type="Submit" class="button"><span>Envoyer réponse</span></button>
  </div>
  </form>

</div>
  <?php } ?>

  <?php if($_SESSION['type'] =='ResponsableCir' && $row['DECISION_FINALE'] == '' && $row['RPS_PC'] == '' && $row['STATUT_CIR'] == '' && $row['STATUT_DMD'] == 'En cours'){?>
                  <button type="Submit" class="button" onclick="return confirm('Voulez-vous vraiment Transmettre le dossier');"><span>Transmettre le dossier au reponsable de pool de competence</span></button>  
                   <br><br>
                  <a href="index.php?action=RefuserStartupCir&&id_dmd=<?php echo $row['ID_DMD']?>" class="btn btn-danger btn-icon-split" onclick="return confirm('Voulez-vous vraiment refuser le dossier');">
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Refuser la demande</span>
                  </a>
                  </form>
  <?php } ?>

  <?php if($_SESSION['type'] =='ResponsableCir' && $row['DECISION_FINALE'] == '' && $row['RPS_PC'] != ''){?>
                  <p style="font-size: 22px ;"> La réponse du pool de compétences est la suivante : <span style="color : green; "><?php echo $row['RPS_PC']; ?></span></p>
                  <hr>
                   <div class="container">
  <form method="post" action="index.php?action=decisionFinaleCirStartup">
    <input type="hidden" name="id_dmd" value="<?php echo $row['ID_DMD'] ; ?>">
    <div class="form-group">
      <textarea required="required" name="reponseDemande"></textarea>
      <label for="textarea" class="control-label" style="left: 0;">Décision finale sur la demande </label><i class="bar"></i>
    </div>

    <div class="button-container">
    <button type="Submit" class="button" onclick="return confirm('Cliquez sur OK pour confirmer la décision');"><span>Confirmer la décision</span></button>
  </div>
  </form>

</div>
                    <?php } ?>

</div>     
    