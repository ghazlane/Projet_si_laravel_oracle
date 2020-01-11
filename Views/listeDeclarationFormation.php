
        <div class="container-fluid" style="font-size: 16px; ">
<?php if(!empty($alert)){  ?>
  <div class="card mb-4 py-1 border-bottom-success">
                <div class="card-body">
                  <?php  echo $alert; ?>
                </div>
              </div>
    <?php  }?>
<!-- Page Heading -->
<br>
<h1 class="h3 mb-2 text-gray-800">Liste des déclarations des formations</h1>
<br>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float: left;">Tous les demandes de déclaration d'nvention</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
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
          <?php while($row = $statement->fetch()) { ?>
            <tr>
                <td><?php echo $row['ID_DMD']  ?></td>
                <td><?php echo $row['SUJET_FORMATION']  ?></td>
                <td><?php echo $row['NOMBRE_PARTICIPANTS']  ?></td>
                <td><?php echo $row['DATE_DMD']  ?></td>
                <td><?php 
                    if($row['STATUT_DMD'] == "Non accepter")
                      echo '<button type="button" class="btn btn-danger btn-sm">Non accepter</button> ';
                    else if ($row['STATUT_DMD'] == 'En cours')
                      echo '<button type="button" class="btn btn-warning btn-sm">En cours</button> ';
                    else if ($row['STATUT_DMD'] == 'Accepter')
                      echo '<button type="button" class="btn btn-success btn-sm">Accepter</button> ';
                      else
                        echo '<button type="button" class="btn btn-info btn-sm">En attente</button> '; 
                ?></td>
                <td>
                    <?php echo '<a href="index.php?action=detailsDeclarationFormation&&id='.$row['ID_DMD'].'" class="btn btn-info btn-circle btn-sm" title="Ouvrir">'; ?>
                    
                      <i class="far fa-folder-open"></i>
                    </a>

                    <?php 
                    if($row['STATUT_DMD'] == 'En attente'){
                    echo '<a href="index.php?action=updateDeclarationFormation&&id='.$row['ID_DMD'].'" class="btn btn-warning btn-circle btn-sm" title="Mettre à jours">'; 
                    ?>
                    
                      <i class="fas fa-sync"></i>
                    </a>
                    <?php
                      echo '<a href="index.php?action=deleteDeclarationFormation&&id='.$row['ID_DMD'].'" class="btn btn-danger btn-circle btn-sm" title="Supprimer" onclick="return confirm(\'Voulez vous vraiment supprimer cette demande\'); ">';
                    ?>
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








