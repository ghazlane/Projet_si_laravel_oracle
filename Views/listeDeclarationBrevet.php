<div class="container-fluid" style="font-size: 16px; ">

  <!-- Page Heading -->
   <?php if(!empty($alert)){  ?>
  <div class="card mb-4 py-1 border-bottom-success">
                <div class="card-body">
                  <?php  echo $alert; ?>
                </div>
              </div>
    <?php  }?>
  <br>
  <h1 class="h3 mb-2 text-gray-800">Liste des Déclarations de Brevet</h1>
  <br>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary" style="float: left;">Toutes les demandes de déclaration de brevet</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nom Brevet</th>
              <th>Categorie Brevet</th>
              <th>Domaine Brevet</th>
              <th>Date déclaration</th>
              <th>Statut décision finale</th>
              <th>Outils</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Nom Brevet</th>
              <th>Categorie Brevet</th>
              <th>Domaine Brevet</th>
              <th>Date déclaration</th>
              <th>Statut décision finale</th>
              <th>Outils</th>
            </tr>
          </tfoot>
          <tbody>
            <?php while($row = $statement->fetch()) { ?>
              <tr>
                <td><?php echo $row['NOM_BREVET']  ?></td>
                <td><?php echo $row['CATEGORIE_BREVET']  ?></td>
                <td><?php echo $row['DOMAINE_BREVET']  ?></td>
                
                <td><?php echo $row['DATE_DMD']  ?></td>
                <td><?php 
                if($row['STATUT_DMD'] == "Non accepter")
                  echo '<button type="button" class="btn btn-danger btn-sm">Non acceptée</button> ';
                else if ($row['STATUT_DMD'] == 'En cours')
                  echo '<button type="button" class="btn btn-warning btn-sm">En cours</button> ';
                else if ($row['STATUT_DMD'] == 'Accepter')
                  echo '<button type="button" class="btn btn-success btn-sm">Acceptée</button> ';
                else
                  echo '<button type="button" class="btn btn-info btn-sm">En attente</button> '; 
                ?></td>
                <td>
                  <a href="index.php?action=rechercheBrevet&id=<?php echo $row['ID_DMD']  ?>"
                  class="btn btn-info btn-circle btn-sm" title="Ouvrir">
                    <i class="far fa-folder-open"></i>
                  </a>
                  <?php if($row['STATUT_DMD'] == 'En attente'){ ?>
                  <a href="index.php?action=detailModifierBrevet&id=<?php echo $row['ID_DMD']  ?>" class="btn btn-warning btn-circle btn-sm" title="Mettre à jour">
                    <i class="fas fa-sync"></i>
                  </a>
                  <a href="index.php?action=supprimerBrevet&id=<?php echo $row['ID_DMD']  ?>" class="btn btn-danger btn-circle btn-sm" title="Supprimer" onclick="return confirm('Voulez vous vraiment supprimer cette demande');">
                    <i class="fas fa-trash"></i>
                  </a>
                <?php } ?>
                </td>
              </tr>
            <?php  }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
