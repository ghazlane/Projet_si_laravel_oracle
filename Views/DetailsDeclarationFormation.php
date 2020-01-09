
<?php $row = $statement->fetch(); 
<<<<<<< HEAD
?>

<div class="container-fluid" style="font-size: 20px; ">
	 <br>
  <h1 class="h3 mb-2 text-gray-800 m-0 font-weight-bold text-primary" style="color: #E56806">Détail de la déclaration N° <strong><?php echo $row['ID_DMD']  ?></strong></h1>
          <br>
          <div class="card shadow mb-4" style="font-size: 20px; width: 100%; margin: 0 auto; ">
  <div class="card-header py-3">
    <center>
    <h4 class="m-0 font-weight-bold text-primary">Sujet formation : <span style="color: black; "><?php echo $row['SUJET_FORMATION']  ?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</span> 
    Statut de la déclaration : <span style="color: black; "> <?php echo $row['STATUT_DMD']  ?></span></h4></center>
  </div>
</div>
<div class="card shadow mb-4" style="font-size: 20px; width: 100% ;margin:0 auto; ">
  <div class="card-header py-3">
    <h4 class="m-0 font-weight-bold text-primary" >Description de la déclaration de la formation</h4>
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
    <div class="col">Nombre participants</div>
    <div class="col"><?php echo $row['NOMBRE_PARTICIPANTS']  ?></div>
    <div class="w-100"></div><br>
    <div class="col">Theme formation </div>
    <div class="col"><?php echo $row['THEME_FORMATION']  ?></div>
    <div class="w-100"></div><br>
    <div class="col">Nom Demandeur</div>
    <div class="col"><?php echo $nomAndPrenomDemandeur['nom']?></div>
    <div class="w-100"></div><br>
    <div class="col">Prénom Demandeur</div>
    <div class="col"><?php echo $nomAndPrenomDemandeur['prenom']?></div>
    <div class="w-100"></div><br>
    <div class="col">Fonctionnalité Demandeur</div>
    <div class="col"><?php echo $row['TYPE_DEMANDEUR']  ?></div>
    
  </div>
</div>

<?php if($_SESSION['type'] =='GuichetUnique' && $row['DECISION_FINALE'] == ''){?>
=======
		  
		
          ?>
                    <h1 class="h3 mb-2 text-gray-800" style="color: #E56806">Détail de la formation N° <strong><?php echo $row['ID_DMD']  ?></strong></h1>
                    <br>
          
          
          
          
          <div class="card shadow mb-4" style="font-size: 14px; width: 50%; margin: 0 auto; ">
                          <div class="card-header py-3">
                            <center><h6 class="m-0 font-weight-bold text-primary">Sujet de la formation : <span style="color: black; "><?php echo $row['SUJET_FORMATION']  ?></span></h6></center>
                          </div>
                        </div>
          <div class="col-xl-3 col-md-6 mb-4" style="margin: 0 auto;">
                        <div class="card border-left-info shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="color: black;">Statut de la déclaration</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row['STATUT_DMD'];  ?></div>
                              </div>
                              <div class="col-auto">
                                <i class="far fa-file-alt fa-2x text-gray-300"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                        <div class="card shadow mb-4" style="font-size: 18px; width: 70% ;margin:0 auto; ">
                          <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary" >Nombre Participants</h6>
                          </div>
                          <div class="card-body">
                            <?php echo $row['NOMBRE_PARTICIPANTS']; ?>
                          </div>
                        </div>
          
                        <h5 style="color: brown; margin-left: 100px;">Autres informations : </h5><br>
                        <table class="table table-bordered" id="" width="100%" cellspacing="0" style="width: 70%; margin: 0 auto; border-color: black; border-width: 2px;">
                            
                            
                            <tbody style="color: black;">
                              <tr>
                                  <td>Theme de la formation</td>
                                  <td><strong><?php echo $row['THEME_FORMATION']; ?></strong></td>
                              </tr>
                              <tr>
                                  <td>Plan de la formation</td>
                                  <td><strong><?php echo $row['PLAN_FORMATION']; ?></strong></td>
                              </tr>
                              <tr>
                                  <td>Nom demandeur </td>
                                  <td><strong><?php echo $nomAndPrenomDemandeur['nom']?></strong></td>
                              </tr>
                              <tr>
                                  <td>Prenom demandeur</td>
                                  <td><strong><?php echo $nomAndPrenomDemandeur['prenom']?></strong></td>
                              </tr>
                              <tr>
                                  <td>Professeur/Chercheur/Administratif</td>
                                  <td><strong><?php echo $row['TYPE_DEMANDEUR']; ?></strong></td>
                              </tr>
                   </tbody>
                          </table>
                          <br><br>
          <center>
           <?php if($_SESSION['type'] =='GuichetUnique' && $row['DECISION_FINALE'] == ''){?>
>>>>>>> 2b7bb2681db31c24961557c07953360d70855526
                  <a href="index.php?action=transmettreFormationCir&&id_dmd=<?php echo $row['ID_DMD']?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Transmettre le dossier au directeur de la CIR</span>
                  </a><br><br>
<<<<<<< HEAD
                  <a href="index.php?action=RefuserDemandeGu&&id_dmd=<?php echo $row['ID_DMD'] ?>" class="btn btn-danger btn-icon-split">
=======
                  <a href="index.php?action=RefuserFormationGu&&id_dmd=<?php echo $row['ID_DMD']?>" class="btn btn-danger btn-icon-split">
>>>>>>> 2b7bb2681db31c24961557c07953360d70855526
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Refuser la demande</span>
                  </a>
<<<<<<< HEAD

  <?php } ?>
  <hr>
  <?php if($row['DECISION_FINALE'] != ''){?>
                    <p style="font-size: 20px; ">La décision finale du CIR est : <strong style="color:green; "><?php echo $row['DECISION_FINALE'] ?> </strong></p>
                     <a href="index.php?action=AccepterFormationCir&&id_dmd=<?php echo $row['ID_DMD']?>" class="btn btn-success btn-icon-split">
=======
  <?php } ?>

  <?php if($_SESSION['type'] =='ResponsableCir' && $row['DECISION_FINALE'] == ''){?>
                  <a href="index.php?action=transmettreFormationPc&&id_dmd=<?php echo $row['ID_DMD']?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Transmettre le dossier au reponsable de pool de competence</span>
                  </a><br><br>
                  <a href="index.php?action=RefuserFormationCir&&id_dmd=<?php echo $row['ID_DMD']?>" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Refuser la demande</span>
                  </a>
  <?php } ?>
          
          <?php if($row['DECISION_FINALE'] != ''){?>
                    <p style="font-size: 20px; ">La décision finale du CIR est : <strong style="color:green; "><?php echo $row['DECISION_FINALE'] ?> </strong></p>
                     <a href="index.php?action=AccepterFormationGu&&id_dmd=<?php echo $row['ID_DMD']?>" class="btn btn-success btn-icon-split">
>>>>>>> 2b7bb2681db31c24961557c07953360d70855526
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Accepter</span>
                  </a>
<<<<<<< HEAD
                  <a href="index.php?action=RefuserDemandeGu&&id_dmd=<?php echo $row['ID_DMD'] ?>" class="btn btn-danger btn-icon-split">
=======
                  <a href="index.php?action=RefuserFormationGu&&id_dmd=<?php echo $row['ID_DMD'] ?>" class="btn btn-danger btn-icon-split">
>>>>>>> 2b7bb2681db31c24961557c07953360d70855526
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Refuser</span>
                  </a>
  <?php }?>
<<<<<<< HEAD

<?php if($_SESSION['type'] =='RespPoolCompetence' && $row['RPS_PC'] == ''){?>
  <div class="container">
  <form method="post" action="index.php?action=RespPoolCompetenceFormation">
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

</div>







=======
          </center>
          
          
>>>>>>> 2b7bb2681db31c24961557c07953360d70855526
                      
          
                      
          