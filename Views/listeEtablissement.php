
        <div class="container-fluid" style="font-size: 16px; ">
           <?php if(!empty($alert)){  ?>
  <div class="card mb-4 py-1 border-bottom-success">
                <div class="card-body">
                  <?php  echo $alert; ?>
                </div>
              </div>
    <?php  }?>
          <br>
          <h1 class="h3 mb-2 text-gray-800">Liste des Etablissements</h1>
          <br>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="float: left;">Tous les Etablissements</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                  <thead>
                    <tr>
                      <th>Nom Etablissement</th>
                      <th>Nombre des Enseignants</th>
                      <th>Nombre de Chercheurs</th>
                      <th>Nombre de Fillières</th>
                      <th>Outils</th>
                   
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nom Etablissement</th>
                      <th>Nombre des Enseignants</th>
                      <th>Nombre de Chercheurs</th>
                      <th>Nombre de Fillières</th>
                      <th>Point Nodal</th>
                      <th>Outils</th>
                   
                    </tr>
                  </tfoot>
                  <tbody style="color: black;">
                    <?php while($row = $statement->fetch()) { ?>
                      <tr>
                          <td><?php echo $row['NOM_ETAB']  ?></td>
                          <td><?php echo $row['NB_ENSE_ETAB']  ?></td>
                          <td><?php echo $row['NB_CHER_ETAB']  ?></td>
                          <td><?php echo $row['NB_FIL_ETAB']  ?></td>
                          <td><?php echo $row['NOM_PN']  ?></td>
                           <td>
                              
                              <?php echo '<a href="index.php?action=updateEtablissement&&id='.$row['ID_ETAB'].'" class="btn btn-warning btn-circle btn-sm" title="Mettre à jours">'; ?>
                              
                                <i class="fas fa-sync"></i>
                              </a>
                              <?php
                                echo '<a href="index.php?action=deleteEtablissement&&id='.$row['ID_ETAB'].'" class="btn btn-danger btn-circle btn-sm" title="Supprimer">';
                              ?>
                                <i class="fas fa-trash"></i>
                              </a>
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
