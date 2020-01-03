
<?php $row = $statement->fetch(); 


?>
<h1 class="h3 mb-2 text-gray-800" style="color: #E56806">Détail de la déclaration N° <strong><?php echo $row['ID_DMD']  ?></strong></h1>
<br>




<div class="card shadow mb-4" style="font-size: 14px; width: 50%; margin: 0 auto; ">
  <div class="card-header py-3">
    <center><h6 class="m-0 font-weight-bold text-primary">Objet de l'invention : <span style="color: black; "><?php echo $row['OBJET_INVENTION']  ?></span></h6></center>
  </div>
</div>
<div class="col-xl-3 col-md-6 mb-4" style="margin: 0 auto;">
  <div class="card border-left-info shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="color: black;">Status de la déclaration</div>
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
    <h6 class="m-0 font-weight-bold text-primary" >Description déclaration d'invention</h6>
  </div>
  <div class="card-body">
    <?php echo $row['DESCRIPTION_INVENTION']; ?>
  </div>
</div>

<h5 style="color: brown; margin-left: 100px;">Autres informations : </h5><br>
<table class="table table-bordered" id="" width="100%" cellspacing="0" style="width: 70%; margin: 0 auto; border-color: black; border-width: 2px;">
  
  
  <tbody style="color: black;">
    <tr>
     <td>Catégorie d'invention</td>
     <td><strong><?php echo $row['CATEGORIE_INVENTION']; ?></strong></td>
   </tr>
   <tr>
     <td>Classment d'invention</td>
     <td><strong><?php echo $row['CLASSEMENT']; ?></strong></td>
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









