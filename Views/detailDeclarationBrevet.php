
<div class="container-fluid" style="font-size: 20px; ">
  <br>
  <h1 class="h3 mb-2 text-gray-800 m-0 font-weight-bold text-primary" style="color: #E56806">Détail de la déclaration N° <strong><?php echo $row['ID_DMD']  ?></strong></h1>
  <br>
  <div class="card shadow mb-4" style="font-size: 20px; width: 100%; margin: 0 auto; ">
    <div class="card-header py-3">
      <center><h4 class="m-0 font-weight-bold text-primary">Nom de brevet : <span style="color: black; "><?php echo $row['NOM_BREVET']  ?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</span> Statut de la déclaration : <span style="color: black; "> <?php echo $row['STATUT_DMD']  ?></span></h4></center>
    </div>
  </div>
  <div class="card shadow mb-4" style="font-size: 20px; width: 100% ;margin:0 auto; ">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary" >Description de la déclaration de brevet</h4>
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
      <div class="col">Nom de brevet</div>
      <div class="col"><?php echo $row['NOM_BREVET']  ?></div>
      <div class="w-100"></div><br>
      <div class="col">Catégorie de brevet</div>
      <div class="col"><?php echo $row['CATEGORIE_BREVET']  ?></div>
      <div class="w-100"></div><br>
      <div class="col">Domaine brevet</div>
      <div class="col"><?php echo $row['DOMAINE_BREVET']  ?></div>
       <div class="w-100"></div><br>
      <div class="col">Nom Demandeur</div>
      <div class="col"><?php echo $nomAndPrenomDemandeur['nom']?></div>
      <div class="w-100"></div><br>
      <div class="col">Prénom Demandeur</div>
      <div class="col"><?php echo $nomAndPrenomDemandeur['prenom']?></div>
      <div class="w-100"></div><br>
      <div class="col">Fonctionnalité Demandeur</div>
      <div class="col"><?php echo $row['TYPE_DEMANDEUR']  ?></div>
      <?php if($_SESSION['type'] =='ResponsableCir' && $row['DECISION_FINALE'] == '' && $row['REPONSE_PC'] == ''){?>  
        <div class="w-100"></div><br> 
        <div class="col">Pool Competence</div>
        <div class="col">
         <form method="post" action="index.php?action=transmettreBrevetPc&&id_dmd=<?php echo $row['ID_DMD']?>">
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

  <?php if($_SESSION['type'] =='GuichetUnique' && $row['DECISION_FINALE'] == ''){?>
    <a href="index.php?action=transmettreBrevetCir&&id_dmd=<?php echo $row['ID_DMD']?>" class="btn btn-success btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-check"></i>
      </span>
      <span class="text">Transmettre le dossier au directeur de la CIR</span>
    </a><br><br>
    <a href="index.php?action=RefuserBrevetGu&&id_dmd=<?php echo $row['ID_DMD']?>" class="btn btn-danger btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-times"></i>
      </span>
      <span class="text">Refuser la demande</span>
    </a>
  <?php } ?>
  
  <?php if($row['DECISION_FINALE'] != '' && $_SESSION['type'] == 'GuichetUnique'){?>
    <p style="font-size: 20px; ">La décision finale du CIR est : <strong style="color:green; "><?php echo $row['DECISION_FINALE'] ?> </strong></p>
    <a href="index.php?action=AccepterBrevetGu&&id_dmd=<?php echo $row['ID_DMD']?>" class="btn btn-success btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-check"></i>
      </span>
      <span class="text">Accepter</span>
    </a>
    <a href="index.php?action=RefuserBrevetGu&&id_dmd=<?php echo $row['ID_DMD'] ?>" class="btn btn-danger btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-times"></i>
      </span>
      <span class="text">Refuser</span>
    </a>
  <?php }?>
  <?php if($_SESSION['type'] =='RespPoolCompetence' && $row['REPONSE_PC'] == ''){?>
    <div class="container">
      <form method="post" action="index.php?action=RespPoolCompetenceBrevet">
        <input type="hidden" name="id_dmd" value="<?php echo $row['ID_DMD'] ; ?>">
        <div class="form-group">
          <textarea required="required" name="reponseDemande"></textarea>
          <label for="textarea" class="control-label" style="left: 0;">Réponse sur la demandes </label><i class="bar"></i>
        </div>

        <div class="button-container">
          <button type="Submit" class="button"><span>Valider réponse</span></button>
        </div>
      </form>

    </div>
  <?php } ?>
  <?php if($_SESSION['type'] =='ResponsableCir' && $row['DECISION_FINALE'] == '' && $row['REPONSE_PC'] == ''){?>
    <button type="Submit" class="button"><span>Transmettre le dossier au reponsable de pool de competence</span></button>  
    <br><br>
    <a href="index.php?action=RefuserBrevetCir&&id_dmd=<?php echo $row['ID_DMD']?>" class="btn btn-danger btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-times"></i>
      </span>
      <span class="text">Refuser la demande</span>
    </a>
  </form>
<?php } ?>

<?php if($_SESSION['type'] =='ResponsableCir' && $row['DECISION_FINALE'] == '' && $row['REPONSE_PC'] != ''){?>
  <p style="font-size: 22px ;"> La réponse du pool de compétences est la suivante : <span style="color : green; "><?php echo $row['REPONSE_PC']; ?></span></p>
  <hr>
  <div class="container">
    <form method="post" action="index.php?action=decisionFinaleCirBrevet">
      <input type="hidden" name="id_dmd" value="<?php echo $row['ID_DMD'] ; ?>">
      <div class="form-group">
        <textarea required="required" name="reponseDemande"></textarea>
        <label for="textarea" class="control-label" style="left: 0;">Décision finale sur la demande </label><i class="bar"></i>
      </div>

      <div class="button-container">
        <button type="Submit" class="button"><span>Confirmer la décision</span></button>
      </div>
    </form>

  </div>
  <?php } ?>