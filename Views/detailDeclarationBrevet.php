
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
