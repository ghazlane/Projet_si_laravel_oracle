<div class="container-fluid" style="font-size: 16px; ">

  <!-- Page Heading -->
  
  <br>
  <h1 class="h3 mb-2 text-gray-800">Liste des Demandes En Cours</h1>
  <br>

  <!-- demande d invention  -->
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="float: left;">Tous les demandes de déclaration des inventions</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0" >
                  <thead>
                    <tr>
                      <th>Id Demande</th>
                      <th>Object Invention</th>
                      <th>Catégorie Invention</th>
                      <th>Date déclaration</th>
                      <th>Status décision finale</th>
                      <th>Outils</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id Demande</th>
                      <th>Object Invention</th>
                      <th>Catégorie Invention</th>
                      <th>Date déclaration</th>
                      <th>Status décision finale</th>
                      <th>Outils</th>
                    </tr>
                  </tfoot>
                  <tbody style="color: black;">
                    <?php while($row = $invention->fetch()) { if ($row['STATUT_DMD'] == 'En cours'){ ?>
                      <tr>
                          <td><?php echo $row['ID_DMD']  ?></td>
                          <td><?php echo $row['OBJET_INVENTION']  ?></td>
                          <td><?php echo $row['CATEGORIE_INVENTION']  ?></td>
                          <td><?php echo $row['DATE_DMD']  ?></td>
                          <td><button type="button" class="btn btn-warning btn-sm">En cours</button> </td>
                          <td>
                              <?php echo '<a href="index.php?action=detailDeclarationInvention&&id='.$row['ID_DMD'].'" class="btn btn-info btn-circle btn-sm" title="Ouvrir">'; ?>
                              
                                <i class="far fa-folder-open"></i>
                              </a>
                              
                          </td>
                      </tr>
                    <?php  }}?>
         </tbody>
                </table>
              </div>
            </div>
          </div>
  <!-- demande d brevet  -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary" style="float: left;">Tous les demandes de déclaration des brevets</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered"  width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nom Brevet</th>
              <th>Categorie Brevet</th>
              <th>Domaine Brevet</th>
              <th>Date déclaration</th>
              <th>Status décision finale</th>
              <th>Outils</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Nom Brevet</th>
              <th>Categorie Brevet</th>
              <th>Domaine Brevet</th>
              <th>Date déclaration</th>
              <th>Status décision finale</th>
              <th>Outils</th>
            </tr>
          </tfoot>
          <tbody>
            <?php while($row = $brevet->fetch()) { if ($row['STATUT_DMD'] == 'En cours'){ ?>
              <tr>
                <td><?php echo $row['NOM_BREVET']  ?></td>
                <td><?php echo $row['CATEGORIE_BREVET']  ?></td>
                <td><?php echo $row['DOMAINE_BREVET']  ?></td>
                
                <td><?php echo $row['DATE_DMD']  ?></td>
                <td><button type="button" class="btn btn-warning btn-sm">En cours</button> </td>
                <td>
                  <a href="index.php?action=rechercheBrevet&id=<?php echo $row['ID_DMD']  ?>"
                  class="btn btn-info btn-circle btn-sm" title="Ouvrir">
                    <i class="far fa-folder-open"></i>
                  </a>
                  
                </td>
              </tr>
            <?php  }}?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float: left;">Tous les demandes de déclaration des formations</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" width="100%" cellspacing="0" >
        <thead>
          <tr>
            <th>Id Demande</th>
            <th>Sujet Formation</th>
            <th>Nombre de participants</th>
            <th>Date déclaration</th>
            <th>Status décision finale</th>
            <th>Outils</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>Id Demande</th>
            <th>Sujet Formation</th>
            <th>Nombre de participants</th>
            <th>Date déclaration</th>
            <th>Status décision finale</th>
            <th>Outils</th>
          </tr>
        </tfoot>
        <tbody style="color: black;">
          <?php while($row = $formation->fetch()) { if ($row['STATUT_DMD'] == 'En cours'){?>
            <tr>
                <td><?php echo $row['ID_DMD']  ?></td>
                <td><?php echo $row['SUJET_FORMATION']  ?></td>
                <td><?php echo $row['NOMBRE_PARTICIPANTS']  ?></td>
                <td><?php echo $row['DATE_DMD']  ?></td>
                <td><button type="button" class="btn btn-warning btn-sm">En cours</button> </td>
                <td>
                    <?php echo '<a href="index.php?action=detailsDeclarationFormation&&id='.$row['ID_DMD'].'" class="btn btn-info btn-circle btn-sm" title="Ouvrir">'; ?>
                    
                      <i class="far fa-folder-open"></i>
                    </a>
                    
                </td>
            </tr>
          <?php  }}?>
</tbody>
      </table>
    </div>
  </div>
</div>


</div>
<!-- /.container-fluid -->
